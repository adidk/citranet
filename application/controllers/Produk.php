<?php
defined('BASEPATH') or exit('No direct script access allowed');

class produk extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['dashboard'] = '';
        $data['daftar'] = '';
        $data['validasi'] = '';
        $data['keluhanactivate'] = '';
        $data['berita'] = 'active';
        $user = $this->session->userdata();
        $data['user'] = $this->db->get_where('user', ['id' => $user['id']])->row_array();
        $this->form_validation->set_rules('about', 'about', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/admin/header', $data);
            $this->load->view('template/admin/sidebar', $data);
            $this->load->view('admin/home/internet');
            $this->load->view('template/admin/footer');
        } else {
            if ($this->input->post('boardboand') != null) {
                $layanan = $this->input->post('boardboand');
                # code...
            } else {
                if ($this->input->post('infinite') != null) {
                    $layanan = $this->input->post('infinite');
                    # code...
                } else {
                    if ($this->input->post('corp') != null) {
                        $layanan = $this->input->post('corp');
                        # code...
                    } else {
                        redirect('internet');
                    }
                }
            }

            $config['upload_path'] = './assets/img/produk/internetservices/';
            $config['allowed_types'] = 'jpg|png|jpeg|gif';
            $config['file_name'] = $_FILES['header']['name'];

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if (!empty($_FILES['header']['name'])) {
                if ($this->upload->do_upload('header')) {
                    $header = $this->upload->data();
                    $subproduk = $this->input->post('internet');
                    $about = $this->input->post('about');
                    $data = array(

                        'produk'          => $layanan,
                        'mainproduk'          => 'INTERNET SERVICES',
                        'subproduk' => $subproduk,
                        'about'          => htmlspecialchars($about, true),
                        'by'         => $user['name'],
                        'header' => $_FILES['header']['name'],
                        'sidebar1' => $_FILES['sidebar1']['name'],
                        'sidebar2' => $_FILES['sidebar2']['name'],
                        'footer' => $_FILES['footer']['name'],
                        'spesifikasi' => $_FILES['spesifikasi']['name'],
                        'dcreated 	'     =>  date('Y-m-d H:i:s', time())

                    );
                    $this->db->insert('menu', $data);

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            			Berita Berhasil Ditambahkan</div>');

                    redirect('admin/berita');
                } else {
                    $error = array('error' => $this->upload->display_errors());
                    var_dump($error);
                }
            } else {
                echo "Gambar tidak masuk";
            }
        }
    }
    public function cctv()
    {
        $data['dashboard'] = '';
        $data['daftar'] = '';
        $data['validasi'] = '';
        $data['keluhanactivate'] = '';
        $data['berita'] = 'active';
        $user = $this->session->userdata();
        $data['user'] = $this->db->get_where('user', ['id' => $user['id']])->row_array();
        $this->form_validation->set_rules('about', 'about', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/admin/header', $data);
            $this->load->view('template/admin/sidebar', $data);
            $this->load->view('admin/home/integrated');
            $this->load->view('template/admin/footer');
        } else {
            if ($this->input->post('boardboand') != null) {
                $layanan = $this->input->post('boardboand');
                # code...
            } else {
                if ($this->input->post('infinite') != null) {
                    $layanan = $this->input->post('infinite');
                    # code...
                } else {
                    if ($this->input->post('corp') != null) {
                        $layanan = $this->input->post('corp');
                        # code...
                    } else {
                        redirect('internet');
                    }
                }
            }

            $config['upload_path'] = './assets/img/produk/internetservices/';
            $config['allowed_types'] = 'jpg|png|jpeg|gif';
            $config['file_name'] = $_FILES['header']['name'];

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if (!empty($_FILES['header']['name'])) {
                if ($this->upload->do_upload('header')) {
                    $header = $this->upload->data();
                    $subproduk = $this->input->post('internet');
                    $about = $this->input->post('about');
                    $data = array(

                        'produk'          => $layanan,
                        'mainproduk'          => 'INTEGRATED SYSTEM',
                        'subproduk' => $subproduk,
                        'about'          => htmlspecialchars($about, true),
                        'by'         => $user['name'],
                        'header' => $_FILES['header']['name'],
                        'sidebar1' => $_FILES['sidebar1']['name'],
                        'sidebar2' => $_FILES['sidebar2']['name'],
                        'footer' => $_FILES['footer']['name'],
                        'spesifikasi' => $_FILES['spesifikasi']['name'],
                        'dcreated 	'     =>  date('Y-m-d H:i:s', time())

                    );
                    $this->db->insert('menu', $data);

                    // elseif ($layanan !=null) {
                    //     echo $layanan;
                    //     # code...
                    // } elseif ($this->input->post('corp') != null) {
                    //     # code...
                    //     echo $this->input->post('corp');
                    // }

                    // $layanan = $this->input->post('corp');

                    // var_dump($layanan);



                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            			Berita Berhasil Ditambahkan</div>');

                    redirect('admin/berita');
                } else {
                    $error = array('error' => $this->upload->display_errors());
                    var_dump($error);
                }
            } else {
                echo "Gambar tidak masuk";
            }
        }
    }
}
