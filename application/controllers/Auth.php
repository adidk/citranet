<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        // $this->load->view('template/umum/header');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/admin/login_header');
            $this->load->view('user/login');
            $this->load->view('template/admin/login_footer');
        } else {
            $this->_login();
        }
        # code...
    }
    public function auth()
    {
        if ($this->session->userdata('email')) {
            redirect('auth');
        }
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['tittle'] = "Log-In";
            $this->load->view('template/admin/login_header');
            $this->load->view('user/login');
            $this->load->view('template/admin/login_footer');
        } else {
            //validation success
            // $this->_login();

        }
    }

    private function _auth()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Silahkan isi email dan password.</div>');

            redirect('auth');
        } else {
            $password = $this->input->post('password');
            $email = $this->input->post('email');
            $user = $this->db->get_where('user', ['email' => $email])->result_array();

            if ($user) {
                //jika usernya aktif
                $data = [
                    'email' => $user['email'],
                    'role_id' => $user['role_id']
                ];
                if (password_verify($password, $user['password'])) {
                    $role = $user['role_id'];

                    if ($role == '2') {
                        // die();
                        $this->session->set_userdata('userData', $data);
                        redirect('admin');
                    } else {
                        $this->session->set_userdata('userData', $data);
                        redirect('admin/personalitation');
                    }
                } else {
                    // $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    // password akun salah.</div>');
                    // redirect('auth');
                    echo 'gajadi';
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                email tidak terdaftar silahkan daftar menggunakan facebook terlebih dahulu.</div>');
                // redirect('');
                echo 'gajadi';
                redirect('auth');
            }
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        //jika usernya ada
        if ($user) {
            //jika usernya aktif
            if ($user['is_active'] == 1) {
                //cek passwor
                echo$password;
                var_dump($this->db->get_where('user', ['email' => $email, password_verify($password, $user['password'])])->result_array());

                if (password_verify($password, $user['password'])) {

                    $this->session->set_userdata($user);
                    if ($user['role_id'] == 2) {
                        redirect('admin');
                    } else {
                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Wrong password.</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                This email has not been activated.</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Email not registered</div>');
            redirect('auth');
        }
    }

    public function regristation()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }

        $this->form_validation->set_rules('name', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches'   =>  'Password dont matches',
            'min_length' =>  'Password to short'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[3]|matches[password1]');


        if ($this->form_validation->run() == false) {
            $data['tittle'] = "Regristation";

            $this->load->view('template/admin/login_header');
            $this->load->view('admin/registration');
            $this->load->view('template/admin/login_footer');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Akun berhasil dibuat </div>');
        } else {
            $email  = $this->input->post('email', true);
            $data = [
                'id'            => htmlspecialchars($this->input->post('id', true)),
                'name'          => htmlspecialchars($this->input->post('name', true)),
                'email'         => htmlspecialchars($email),
                'image'         => 'default.png',
                'password'      => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id'       => 2,
                'is_active'     => 1,
                'd_created'     => time()
            ];

            // token 

            // ini bisa pake email tapi harus register dulu emailnya
            $token = base64_encode(openssl_random_pseudo_bytes(32));
            $user_token = [
                'email' => $email,
                'token' => $token,
                'date_created' => time()
            ];
            //matiin dulu
            $this->db->insert('user', $data);
            // $this->db->insert('user_token', $user_token);
            // $this->_sendEmail($token, 'verify');




            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Akun berhasil dibuat </div>');

            redirect('auth');
        }
    }

    private function _sendEmail($token, $type)
    {
        $config = [
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => '@gmail.com',
            'smtp_pass' => 'pass',
            'smtp_port' => 465,
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'newline'   => "\r\n"
        ];

        $this->load->library('email', $config);
        $this->email->initialize($config);

        $this->email->from('@gmail.com', 'Verifikasi Akun');
        $this->email->to($this->input->post('email'));

        if ($type == 'verify') {

            $this->email->subject('Account Verification');
            $this->email->message('Klik link ini untuk verifikasi akunmu : <a href="' . base_url() . 'auth/verify?email=' . $this->input->post('email') . '& token=' . urlencode($token) . '">Activate</a>');
        } else if ($type == 'forgot') {
            $this->email->subject('Reset Password');
            $this->email->message('Klik link ini untuk mengganti password akunmu : <a href="' . base_url() . 'auth/resetpassword?email=' . $this->input->post('email') . '& token=' . urlencode($token) . '">Reset PAssword</a>');
        }

        // $this->email->send();

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        };
    }

    public function verify()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

            if ($user_token) {

                if (time() - $user_token['date_created'] < (60 * 60 * 24)) {
                    $this->db->set('is_active', 1);
                    $this->db->where('email', $email);
                    $this->db->update('user');

                    $this->db->delete('user_token', ['email' => $email]);

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">' . $email . '
                     berhasil diaktivasi. Silahkan login akun</div>');
                    redirect('auth');
                } else {
                    $this->db->delete('user', ['email' => $email]);
                    $this->db->delete('user_token', ['email' => $email]);

                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Aktivasi akun gagal! Token Kadaluarsa</div>');

                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Aktivasi akun gagal! Token Salah</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Aktivasi akun gagal! Email Salah</div>');

            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            You has been logged out</div>');

        redirect('auth');
    }

    public function blocked()
    {
        $data['tittle'] = "404";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('blocked', $data);
        $this->load->view('templates/footer');
    }

    public function forgotPassword()
    {
        // if ($this->session->userdata('email')) {
        //     redirect('user');
        // }
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');

        if ($this->form_validation->run() == false) {
            $data['tittle'] = "Lupa Password";
            $this->load->view('template/admin/login_header',$data);
            $this->load->view('forgot-password');
            $this->load->view('template/admin/login_footer');
        } else {
            $email  = $this->input->post('email');
            $user   = $this->db->get_where('user', ['email' => $email, 'is_active' => 1])->row_array();

            if ($user) {
                $token = base64_encode(openssl_random_pseudo_bytes(32));
                $user_token = [
                    'email' => $email,
                    'token' => $token,
                    'date_created' => time()
                ];

                $this->db->insert('user_token', $user_token);
                $this->_sendEmail($token, 'forgot');

                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Silahkan cek email anda untuk mengubah password</div>');
                redirect('auth/forgotPassword');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Email belum terdaftar atau belum aktivasi akun</div>');
                redirect('auth/forgotPassword');
            }

            //     if ($user) {
            //         $token = base64_encode(openssl_random_pseudo_bytes(32));
            //         $user_token = [
            //             'email' => $email,
            //             'token' => $token,
            //             'date_created' => time()
            //         ];

            //         $this->db->insert('user_token', $user_token);
            //         $this->_sendEmail($token, 'forgot');

            //         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            //         Please check your email to reset your password!</div>');

            //         redirect('auth');
            //     } else {
            //         $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            //         Email is not registered or activated</div>');

            //         redirect('auth/forgotPassword');
            //     }
        }
    }

    public function resetpassword()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

            if ($user_token) {
                $this->session->set_userdata('reset_email', $email);
                $this->ChangePassword();
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Reset Password gagal. Token salah</div>');

                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Reset Password gagal. Email salah</div>');

            redirect('auth');
        }
    }

    public function ChangePassword()
    {
        if (!$this->session->userdata('reset_email')) {
            redirect('auth');
        }

        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches'   =>  'Password tidak sama',
            'min_length' =>  'Password terlalu pendek'
        ]);
        $this->form_validation->set_rules('password2', 'Repeate Password', 'required|trim|min_length[3]|matches[password1]');
        if ($this->form_validation->run() == false) {
            $data['tittle'] = "Ganti Password";
            $this->load->view('templates/auth_header', $data);
            $this->load->view('change-password');
            $this->load->view('templates/auth_footer');
        } else {
            $password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
            $email = $this->session->userdata('reset_email');

            $this->db->set('password', $password);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->unset_userdata('reset_email');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Password berhasil diganti</div>');

            redirect('auth');
        }
    }
}
