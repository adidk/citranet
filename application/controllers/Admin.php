<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['tittle'] = 'Dashboard';
        $data['dashboard'] = 'active';
        $data['daftar'] = '';
        $data['validasi'] = '';
        $data['keluhanactivate'] = '';
        $data['bayar'] = $this->db->get('pembayaran')->result_array();
        $user = $this->session->userdata();
        $data['user'] = $this->session->userdata();
        if ($user['role_id'] == 2) {
            $this->load->view('template/admin/header');
            $this->load->view('template/admin/sidebar', $data, $user);
            $this->load->view('admin/akun', $data, $user);
            $this->load->view('template/admin/footer');
        } elseif ($user['role_id'] == 1) {
            $this->load->view('template/admin/header');
            $this->load->view('template/admin/sidebar');
            $this->load->view('template/admin/footer');
        } else (redirect('auth'));
    }
    public function validasipembayaran()
    {
        $data['dashboard'] = '';
        $data['daftar'] = '';
        $data['validasi'] = 'active';
        $data['keluhanactivate'] = '';
        $data['bayar'] = $this->db->get('pembayaran')->result_array();
        $user = $this->session->userdata();
        $data['user'] = $this->db->get_where('user', ['id' => $user['id']])->row_array();


        if ($user['role_id'] == 2) {

            $this->load->view('template/admin/header');
            $this->load->view('template/admin/sidebar', $data);
            $this->load->view('admin/verifikasi', $data);
            $this->load->view('template/admin/footer');
            # code...


        } elseif ($user['role_id'] == 1) {
            $this->load->view('template/admin/header');
            $this->load->view('template/admin/sidebar');
            $this->load->view('admin/daftar');
            $this->load->view('template/admin/footer');
        } else (redirect('auth'));
    }
    public function akun()
    {
        $data['dashboard'] = 'active';
        $data['daftar'] = '';
        $data['validasi'] = '';
        $data['keluhanactivate'] = '';
        $data['tittle'] = 'Pengaturan Akun';
        $user = $this->session->userdata();
        $data['user'] = $this->db->get_where('user', ['id' => $user['id']])->row_array();
        $this->form_validation->set_rules('password', 'password', 'required|min_length[5]', [
            'min_length' =>  'Password minimal 5 karakter'
        ]);
        $this->form_validation->set_rules(
            'password1',
            'Ulangi Password',
            'required|matches[password]',
            [
                'matches'   =>  'Password tidak sama'
            ]
        );

        if ($user['role_id'] == 2) {
            if ($this->form_validation->run() == false) {

                $this->load->view('template/admin/header');
                $this->load->view('template/admin/sidebar', $data);
                $this->load->view('admin/akun', $data);
                $this->load->view('template/admin/footer');
            } else {

                $password = $this->input->post('password');

                $update = array(
                    'password' => password_hash($password, PASSWORD_DEFAULT)
                );

                $where = array(
                    'email' => $user['email']
                );
                $this->db->where($where);
                $this->db->update('user', $update);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Berhasil Diubah</div>');
                redirect('admin/akun');
            }
        } elseif ($user['role_id'] == 1) {
            $this->load->view('template/admin/header');
            $this->load->view('template/admin/sidebar');
            $this->load->view('admin/daftar');
            $this->load->view('template/admin/footer');
        } else (redirect('auth'));
    }
    public function unggah()
    {
        $user = $this->session->userdata();
        if ($user['role_id'] == 2) {
            $cus = $this->db->get_where('user', ['id' => $user['id']])->row_array();

            if ($cus != null) {
                $config['upload_path'] = './assets/bukti/';
                $config['allowed_types'] = 'jpg|png|jpeg|gif';
                $config['file_name'] = $_FILES['foto']['name'];

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if (!empty($_FILES['foto']['name'])) {
                    if ($this->upload->do_upload('foto')) {
                        $foto = $this->upload->data();
                        $data = array(
                            'image' => $foto['file_name']
                        );
                        $where = array(
                            'email' => $user['email']
                        );
                        $this->db->where($where);
                        $this->db->update('user', $data);
                        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
					Berhasil Diubah </div>');
                        redirect('admin/akun');
                    } else {
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
					Gagal Diubah </div>');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				Id Customer dan Email belum ditemukkan</div>');
            }
        } else (redirect('auth'));
    }
    public function keluhan()
    {
        $data['dashboard'] = '';
        $data['daftar'] = '';
        $data['validasi'] = '';
        $data['keluhanactivate'] = 'active';
        $data['keluhan'] = $this->db->get('keluhan')->result_array();
        $user = $this->session->userdata();
        $data['user'] = $this->db->get_where('user', ['id' => $user['id']])->row_array();

        if ($user['role_id'] == 2) {
            $this->load->view('template/admin/header');
            $this->load->view('template/admin/sidebar', $data);
            $this->load->view('admin/keluhan', $data);
            $this->load->view('template/admin/footer');
        } else (redirect('auth'));
    }
    public function detailkeluhan($a)
    {
        $data['dashboard'] = '';
        $data['daftar'] = '';
        $data['validasi'] = '';
        $data['keluhanactivate'] = 'active';
        $user = $this->session->userdata();
        if ($user['role_id'] == 2) {
            $data['bayar'] = $this->db->get_where('keluhan', ['id' => $a])->row_array();
            $user = $this->session->userdata();
            $data['user'] = $this->db->get_where('user', ['id' => $user['id']])->row_array();

            $data['tittle'] = 'Detail Keluhan ';

            $this->load->view('template/admin/header');
            $this->load->view('template/admin/sidebar', $data);
            $this->load->view('admin/detailkeluhan', $data);
            $this->load->view('template/admin/footer');
        } else (redirect('auth'));
    }
    public function tindakankeluhan($a)
    {
        $user = $this->session->userdata();
        if ($user['role_id'] == 2) {
            $data = array(
                'status'    => 'Sudah ditindak lanjuti',
                'responseby' => $user['name'],
                'modified' => date('Y-m-d H:i:s', time())
            );
            $this->db->where('id', $a);
            $this->db->update('keluhan', $data);
            redirect('admin/keluhan');
        } else (redirect('auth'));
    }
    public function detail($a)
    {
        $data['dashboard'] = '';
        $data['daftar'] = '';
        $data['validasi'] = 'active';
        $data['keluhanactivate'] = '';
        $user = $this->session->userdata();
        $data['user'] = $this->db->get_where('user', ['id' => $user['id']])->row_array();
        if ($user['role_id'] == 2) {

            $data['bayar'] = $this->db->get_where('pembayaran', ['idcustomer' => $a])->row_array();
            $data['tittle'] = 'Detail Pembayaran ';

            $this->load->view('template/admin/header');
            $this->load->view('template/admin/sidebar', $data);
            $this->load->view('admin/detailpembayaran', $data);
            $this->load->view('template/admin/footer');
        } else (redirect('auth'));
    }
    public function terima($bayar)
    {
        $user = $this->session->userdata();
        if ($user['role_id'] == 2) {
            $data = [

                'status'    => 'aktif',
                'masaaktif '     => date('Y-m-d H:i:s',  strtotime("+30 days"))
            ];
            $this->db->where('idcustomer', $bayar);
            $this->db->update('pembayaran', array('status'    => 'terima'));

            $this->db->where('id', $bayar);
            $this->db->update('pelanggan', $data);
            redirect('admin/validasipembayaran');
        } else (redirect('auth'));
    }
    public function aktivasi($pelanggan)
    {
        $user = $this->session->userdata();
        if ($user['role_id'] == 2) {
            
            $data = [

                'status'    => 'aktif',
                'masaaktif '     => date('Y-m-d H:i:s',  strtotime("+30 days"))
            ];

            $this->db->where('id', $pelanggan);
            $this->db->update('pelanggan', $data);
            redirect('admin/daftarpelanggan');
        } else (redirect('auth'));
    }
    public function tolak($bayar)
    {
        $data = [
            'status'    => 'belum aktifasi',
        ];
        $user = $this->session->userdata();
        if ($user['role_id'] == 2) {
            $this->db->where('idcustomer', $bayar);
            $this->db->update('pembayaran', array('status'    => 'tolak'));
            $this->db->where('id', $bayar);
            $this->db->update('pelanggan', $data);
            redirect('admin/validasipembayaran');
        } else (redirect('auth'));
    }
    public function daftar()
    {
        $data['dashboard'] = '';
        $data['daftar'] = 'active';
        $data['validasi'] = '';
        $data['keluhanactivate'] = '';
        $user = $this->session->userdata();
        $data['user'] = $this->db->get_where('user', ['id' => $user['id']])->row_array();
        if ($user['role_id'] == 2) {
            $this->form_validation->set_rules('name', 'Nama', 'required|trim');
            $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[pelanggan.email]');
            $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
            $this->form_validation->set_rules('no_telep', 'Nomor Telepon', 'required|trim|is_unique[pelanggan.no_telep]');

            if ($this->form_validation->run() == false) {
                $data['tittle'] = "Regristation";

                $this->load->view('template/admin/header');
                $this->load->view('template/admin/sidebar', $data);
                $this->load->view('admin/daftar');
                $this->load->view('template/admin/footer');
            } else {
                $email  = $this->input->post('email', true);
                $alamat = $this->input->post('alamat');
                $nomor = $this->input->post('no_telep');

                $data = [
                    'name'          => htmlspecialchars($this->input->post('name', true)),
                    'email'         => htmlspecialchars($email),
                    'alamat'       => $alamat,
                    'no_telep'     => $nomor,
                    'status'     => 'belum teraktifasi',
                    'd_created'     => date('Y-m-d H:i:s', time())
                ];

                // token 

                // ini bisa pake email tapi harus register dulu emailnya

                //matiin dulu
                $this->db->insert('pelanggan', $data);

                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Akun berhasil dibuat </div>');

                redirect('admin/daftar');
            }
        } elseif ($user['role_id'] == 1) {
        } else (redirect('auth'));
    }
    public function daftarpelanggan()
    {
        $data['dashboard'] = '';
        $data['daftar'] = 'active';
        $data['validasi'] = '';
        $data['keluhanactivate'] = '';
        $user = $this->session->userdata();
        $data['user'] = $this->db->get_where('user', ['id' => $user['id']])->row_array();

        $data['tittle'] = "Regristation";
        if ($user['role_id'] == 2) {
            $data['pelanggan'] = $this->db->get('pelanggan')->result_array();
            $this->load->view('template/admin/header');
            $this->load->view('template/admin/sidebar', $data);
            $this->load->view('admin/daftarpelanggan', $data);
            $this->load->view('template/admin/footer');
        } else {
            redirect('admin/auth');
        }
    }
    public function tabel()
    {

        $this->load->view('template/admin/header');
        // $this->load->view('template/admin/sidebar');
        $this->load->view('admin/tabel');
        $this->load->view('template/admin/footer');
    }
    public function inputproduk()
    {
        $user = $this->session->userdata();
        $data['user'] = $this->db->get_where('user', ['id' => $user['id']])->row_array();

        if ($user['role_id'] == 2) {
            $this->form_validation->set_rules('text', 'Nama', 'required|trim');

            if ($this->form_validation->run() == false) {
                $data['tittle'] = "Regristation";

                $this->load->view('template/admin/header');
                $this->load->view('template/admin/sidebar', $data);
                $this->load->view('produk/input', $data);
                $this->load->view('template/admin/footer');
            } else {
                $text = $this->input->post('text');
                $gambar = $_FILES[''];
                if ($gambar = '') {
                } else {
                    $config['upload_path']  = '.assets/img/';
                    $config['allowed_types']  = 'jppg|png|gif';
                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload('gambar$gambar')) {
                        echo "gagal";
                    } else {
                        $gambar = $this->upload->data('file_name');
                    }
                }
                $data = [

                    'gambar'     => $gambar,
                    'text'     => $text,
                    'd_created'     => time()
                ];

                // token 

                // ini bisa pake email tapi harus register dulu emailnya

                //matiin dulu
                $this->db->insert('produk', $data);

                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Akun berhasil dibuat </div>');

                redirect('admin/daftar');
            }
        } elseif ($user['role_id'] == 1) {
        } else (redirect('auth'));
    }
    private function _uploadImage()
    {
        $config['upload_path']          = './upload/product/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->product_id;
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }
    }
}
