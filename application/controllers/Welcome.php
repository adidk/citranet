<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('text');
	}

	public function index()
	{
		$data['title'] = "home";
		$data['integrated'] = "";
		$data['index1'] = "active";
		$data['internet'] = "";
		$data['integrated'] = "";
		$data['it'] = "";
		$data['coverage'] = "";
		$data['support'] = "";
		$data['hubungi'] = "";
		$data['berita'] = $this->db->get('berita', 5, 2)->result_array();
		$data['popular'] = $this->db->get_where('berita', ['id' => 17])->row_array();
		$data['about'] = $this->db->get_where('berita', ['judul' => 'ABOUT CITRANET'])->row_array();
		$this->load->view('template/umum/header', $data);
		$this->load->view('index', $data);
		$this->load->view('template/umum/footer');
	}
	public function soho()
	{
		$data['integrated'] = "";
		$data['index1'] = "";
		$data['internet'] = "active";
		$data['it'] = "";
		$data['active'] = "";
		$data['support'] = "";
		$data['hubungi'] = "";

		$data['produk'] = "INTERNET SERVICES";
		$data['produk1'] = "RESIDENTAL WIRELESS";
		$data['produk2'] = "BOARBOAND SOHO";
		$data['gambar'] = "assets/img/soho/soholite.png";
		$data['gambar2'] = "assets/img/soho/soholite1.png";
		$data['gambar3'] = "assets/img/soho/soholite2.png";
		$data['gambar4'] = "assets/img/soho/soholite3.png";
		$data['gambar5'] = "assets/img/soho/soholite4.png";
		$this->load->view('template/umum/header', $data);
		$this->load->view('produk/soho', $data);
		$this->load->view('template/umum/footer');
	}
	public function soholite()
	{
		$data['integrated'] = "";
		$data['index1'] = "";
		$data['internet'] = "active";
		$data['it'] = "";
		$data['active'] = "";
		$data['support'] = "";
		$data['hubungi'] = "";

		$data['produk'] = "INTERNET SERVICES";
		$data['produk1'] = "RESIDENTAL WIRELESS";
		$data['produk2'] = "BOARBOAND SOHOLITE";
		$data['gambar'] = "assets/img/soho/soholite.png";
		$data['gambar2'] = "assets/img/soho/soholite1.png";
		$data['gambar3'] = "assets/img/soho/soholite2.png";
		$data['gambar4'] = "assets/img/soho/soholite3.png";
		$data['gambar5'] = "assets/img/soho/soholite4.png";
		$this->load->view('template/umum/header', $data);
		$this->load->view('produk/soho', $data);
		$this->load->view('template/umum/footer');
	}
	public function infinitelite()
	{
		$data['integrated'] = "";
		$data['index1'] = "";
		$data['internet'] = "active";
		$data['it'] = "";
		$data['active'] = "";
		$data['support'] = "";
		$data['hubungi'] = "";

		$data['produk'] = "INTERNET SERVICES";
		$data['produk2'] = "INFINITE LITE";
		$data['produk1'] = "RESIDENTAL FIBER OPTIC";
		$data['gambar'] = "assets/img/soho/soholite.png";
		$data['gambar2'] = "assets/img/soho/soholite1.png";
		$data['gambar3'] = "assets/img/soho/soholite2.png";
		$data['gambar4'] = "assets/img/soho/soholite3.png";
		$data['gambar5'] = "assets/img/soho/soholite4.png";
		$this->load->view('template/umum/header', $data);
		$this->load->view('produk/soho', $data);
		$this->load->view('template/umum/footer');
	}
	public function infinitehome()
	{
		$data['integrated'] = "";
		$data['index1'] = "";
		$data['internet'] = "active";
		$data['it'] = "";
		$data['active'] = "";
		$data['support'] = "";
		$data['hubungi'] = "";

		$data['produk'] = "INTERNET SERVICES";
		$data['produk2'] = "INFINITE HOME";
		$data['produk1'] = "RESIDENTAL FIBER OPTIC";
		$data['gambar'] = "assets/img/soho/soholite.png";
		$data['gambar2'] = "assets/img/soho/soholite1.png";
		$data['gambar3'] = "assets/img/soho/soholite2.png";
		$data['gambar4'] = "assets/img/soho/soholite3.png";
		$data['gambar5'] = "assets/img/soho/soholite4.png";
		$this->load->view('template/umum/header', $data);
		$this->load->view('produk/soho', $data);
		$this->load->view('template/umum/footer');
	}
	public function infinitecombo()
	{
		$data['integrated'] = "";
		$data['index1'] = "";
		$data['internet'] = "active";
		$data['it'] = "";
		$data['active'] = "";
		$data['support'] = "";
		$data['hubungi'] = "";

		$data['produk'] = "INTERNET SERVICES";
		$data['produk2'] = "INFINITE COMBO";
		$data['produk1'] = "RESIDENTAL FIBER OPTIC";
		$data['gambar'] = "assets/img/soho/soholite.png";
		$data['gambar2'] = "assets/img/soho/soholite1.png";
		$data['gambar3'] = "assets/img/soho/soholite2.png";
		$data['gambar4'] = "assets/img/soho/soholite3.png";
		$data['gambar5'] = "assets/img/soho/soholite4.png";
		$this->load->view('template/umum/header', $data);
		$this->load->view('produk/soho', $data);
		$this->load->view('template/umum/footer');
	}
	public function infinitestream()
	{
		$data['integrated'] = "";
		$data['index1'] = "";
		$data['internet'] = "active";
		$data['it'] = "";
		$data['active'] = "";
		$data['support'] = "";
		$data['hubungi'] = "";

		$data['produk'] = "INTERNET SERVICES";
		$data['produk2'] = "INFINITE STREAM";
		$data['produk1'] = "RESIDENTAL FIBER OPTIC";
		$data['gambar'] = "assets/img/soho/soholite.png";
		$data['gambar2'] = "assets/img/soho/soholite1.png";
		$data['gambar3'] = "assets/img/soho/soholite2.png";
		$data['gambar4'] = "assets/img/soho/soholite3.png";
		$data['gambar5'] = "assets/img/soho/soholite4.png";
		$this->load->view('template/umum/header', $data);
		$this->load->view('produk/soho', $data);
		$this->load->view('template/umum/footer');
	}
	public function fast()
	{
		$data['integrated'] = "";
		$data['index1'] = "";
		$data['internet'] = "active";
		$data['it'] = "";
		$data['active'] = "";
		$data['support'] = "";
		$data['hubungi'] = "";

		$data['produk'] = "INTERNET SERVICES";
		$data['produk2'] = "FAST";
		$data['produk1'] = "CORPORATE";
		$data['gambar'] = "assets/img/soho/soholite.png";
		$data['gambar2'] = "assets/img/soho/soholite1.png";
		$data['gambar3'] = "assets/img/soho/soholite2.png";
		$data['gambar4'] = "assets/img/soho/soholite3.png";
		$data['gambar5'] = "assets/img/soho/soholite4.png";
		$this->load->view('template/umum/header', $data);
		$this->load->view('produk/soho', $data);
		$this->load->view('template/umum/footer');
	}
	public function dia()
	{
		$data['integrated'] = "";
		$data['index1'] = "";
		$data['internet'] = "active";
		$data['it'] = "";
		$data['active'] = "";
		$data['support'] = "";
		$data['hubungi'] = "";

		$data['produk'] = "INTERNET SERVICES";
		$data['produk2'] = "DECIDED INTERNET ACCESS";
		$data['produk1'] = "CORPORATE";
		$data['gambar'] = "assets/img/soho/soholite.png";
		$data['gambar2'] = "assets/img/soho/soholite1.png";
		$data['gambar3'] = "assets/img/soho/soholite2.png";
		$data['gambar4'] = "assets/img/soho/soholite3.png";
		$data['gambar5'] = "assets/img/soho/soholite4.png";
		$this->load->view('template/umum/header', $data);
		$this->load->view('produk/soho', $data);
		$this->load->view('template/umum/footer');
	}


	public function pop($id)
	{
		$data['integrated'] = "";
		$data['index1'] = "active";
		$data['internet'] = "";
		$data['it'] = "";
		$data['active'] = "";
		$data['support'] = "";
		$data['hubungi'] = "";
		$data['produk'] = "INTERNET SERVICES";
		$data['produk2'] = "DECIDED INTERNET ACCESS";
		$data['produk1'] = "CORPORATE";
		$data['gambar'] = "assets/img/soho/soholite.png";
		$data['gambar2'] = "assets/img/soho/soholite1.png";
		$data['gambar3'] = "assets/img/soho/soholite2.png";
		$data['gambar4'] = "assets/img/soho/soholite3.png";
		$data['gambar5'] = "assets/img/soho/soholite4.png";
		$data['berita'] = $this->db->get_where('berita', ['id' => $id])->row_array();
		$this->load->view('template/umum/header', $data);
		$this->load->view('produk/pop', $data);
		$this->load->view('template/umum/footer');
	}
	public function coverage()
	{
		$data['integrated'] = "";
		$data['index1'] = "";
		$data['internet'] = "";
		$data['it'] = "";
		$data['active'] = "";
		$data['produk'] = "INTERNET SERVICES";
		$data['produk2'] = "DECIDED INTERNET ACCESS";
		$data['produk1'] = "CORPORATE";
		$data['gambar'] = "assets/img/soho/soholite.png";
		$data['gambar2'] = "assets/img/soho/soholite1.png";
		$data['gambar3'] = "assets/img/soho/soholite2.png";
		$data['gambar4'] = "assets/img/soho/soholite3.png";
		$data['gambar5'] = "assets/img/soho/soholite4.png";
		$this->load->view('template/umum/header', $data);
		$this->load->view('produk/pop', $data);
		$this->load->view('template/umum/footer');
	}
	public function cctv()
	{
		$data['index1'] = "";
		$data['internet'] = "";
		$data['integrated'] = "active";
		$data['active'] = "";
		$data['it'] = "";
		$data['support'] = "";
		$data['hubungi'] = "";

		$data['produk1'] = "INTEGRATED SYSTEM";
		$data['produk2'] = "CCTV";
		$data['gambar'] = "assets/img/integratedsystem/20150805043355.JPG";
		$data['gambar2'] = "assets/img/integratedsystem/CCTV_1.JPG";
		$data['gambar3'] = "assets/img/integratedsystem/CCTV_2.JPG";
		$data['gambar4'] = "assets/img/integratedsystem/CCTV_3.JPG";
		$data['gambar5'] = "assets/img/integratedsystem/CCTV_4.JPG";
		$data['spesifikasi'] = "assets/img/integratedsystem/20150810040835.JPG";
		$this->load->view('template/umum/header', $data);
		$this->load->view('produk/integratedsystem', $data);
		$this->load->view('template/umum/footer');
	}
	public function vpn()
	{
		$data['index1'] = "";
		$data['internet'] = "";
		$data['integrated'] = "active";
		$data['active'] = "";
		$data['it'] = "";
		$data['support'] = "";
		$data['hubungi'] = "";

		$data['produk1'] = "INTEGRATED SYSTEM";
		$data['produk2'] = "VPN";
		$data['gambar'] = "assets/img/integratedsystem/20150805043355.JPG";
		$data['gambar2'] = "assets/img/integratedsystem/CCTV_1.JPG";
		$data['gambar3'] = "assets/img/integratedsystem/CCTV_2.JPG";
		$data['gambar4'] = "assets/img/integratedsystem/CCTV_3.JPG";
		$data['gambar5'] = "assets/img/integratedsystem/CCTV_4.JPG";
		$data['spesifikasi'] = "assets/img/integratedsystem/20150810040835.JPG";
		$this->load->view('template/umum/header', $data);
		$this->load->view('produk/vpn', $data);
		$this->load->view('template/umum/footer');
	}
	public function ipb()
	{
		$data['integrated'] = "";
		$data['index1'] = "";
		$data['internet'] = "";
		$data['it'] = "active";
		$data['support'] = "";
		$data['hubungi'] = "";

		$data['produk1'] = "IT INFRASTRUCTURE";
		$data['produk2'] = "IP PBX";
		$data['gambar'] = "assets/img/soho/IP_PBX1.png";
		$this->load->view('template/umum/header', $data);
		$this->load->view('produk/ipbx', $data);
		$this->load->view('template/umum/footer');
	}
	public function faq()
	{
		$data['integrated'] = "";
		$data['index1'] = "";
		$data['internet'] = "";
		$data['it'] = "";
		$data['support'] = "active";
		$data['hubungi'] = "";
		$data['produk1'] = "SUPPORT";
		$data['produk2'] = "FAQ";
		$data['gambar'] = "assets/img/soho/IP_PBX1.png";
		$this->load->view('template/umum/header', $data);
		$this->load->view('produk/faq', $data);
		$this->load->view('template/umum/footer');
	}

	public function payment()
	{
		$data['title'] = "Home";
		$data['integrated'] = "";
		$data['index1'] = "";
		$data['internet'] = "";
		$data['integrated'] = "";
		$data['it'] = "";
		$data['support'] = "active";
		$data['hubungi'] = "";
		$data['produk1'] = "SUPPORT";
		$data['coverage'] = "";
		$this->load->view('template/umum/header', $data);
		$this->load->view('produk/paymentmethod', $data);
		$this->load->view('template/umum/footer');
	}
	public function konfirmasi()
	{
		$data['title'] = "Home";
		$data['integrated'] = "";
		$data['index1'] = "";
		$data['internet'] = "";
		$data['integrated'] = "";
		$data['it'] = "";
		$data['support'] = "active";
		$data['hubungi'] = "";
		$data['produk1'] = "SUPPORT";
		$data['produk2'] = "KONFIRMASI PEMBAYARAN";

		$this->form_validation->set_rules('nama', 'nama', 'required|trim');
		// $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email]');
		// $this->form_validation->set_rules('nomor', 'Nomor Telepon', 'required|trim');
		// $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
		// $this->form_validation->set_rules('keluhan', 'Keluhan', 'required|trim|');

		if ($this->form_validation->run() == false) {
			$this->load->view('template/umum/header', $data);
			$this->load->view('produk/konfirmasi', $data);
			$this->load->view('template/umum/footer');
		} else {
			$nama  = $this->input->post('nama');
			$email  = $this->input->post('email');
			$idcustomer  = $this->input->post('idcustomer');
			$norekening  = $this->input->post('norekening');
			$annorekening  = $this->input->post('annorekening');
			$nominal  = $this->input->post('nominal');
			$layanan  = $this->input->post('layanan');
			$bank  = $this->input->post('bank');

			$cus = $this->db->get_where('pelanggan', ['id' => $idcustomer, 'email' => $email])->row_array();

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

							'nama'          => htmlspecialchars($nama),
							'email'         => htmlspecialchars($email),
							'norekening'       => $norekening,
							'idcustomer'     => $idcustomer,
							'annorekening'     => $annorekening,
							'nominal'     => $nominal,
							'norekening'     => $norekening,
							'layanan'     => $layanan,
							'bank'     => $bank,
							'bukti' => $foto['file_name'],
							'd_created 	'     =>  date('Y-m-d H:i:s', time())

						);

						$this->db->insert('pembayaran', $data);
						$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
					Terima Kasih Respons Anda Sudah terkirim  </div>');
						redirect('welcome/konfirmasi');
					} else {
						$error = array('error' => $this->upload->display_errors());
						var_dump($error);
					}
				} else {
					echo "Gambar tidak masuk";
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				Id Customer dan Email belum ditemukkan</div>');
			}
		}
	}
	public function ulasan()
	{
		$data['title'] = "Home";
		$data['integrated'] = "";
		$data['index1'] = "active";
		$data['internet'] = "";
		$data['integrated'] = "";
		$data['it'] = "";
		$data['support'] = "";
		$data['hubungi'] = "";
		$data['produk1'] = "SUPPORT";
		$data['produk2'] = "KONFIRMASI PEMBAYARAN";

		$this->form_validation->set_rules('nama', 'nama', 'required|trim');
		// $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email]');
		// $this->form_validation->set_rules('nomor', 'Nomor Telepon', 'required|trim');
		// $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
		// $this->form_validation->set_rules('keluhan', 'Keluhan', 'required|trim|');

		if ($this->form_validation->run() == false) {
			$this->load->view('template/umum/header', $data);
			$this->load->view('produk/ulasan', $data);
			$this->load->view('template/umum/footer');
		} else {
			$nama  = $this->input->post('nama');
			$email  = $this->input->post('email');
			$ulasan  = $this->input->post('ulasan');
			$rating  = $this->input->post('rating');

			$config['upload_path'] = './assets/img/ulasan';
			$config['allowed_types'] = 'jpg|png|jpeg|gif';
			$config['file_name'] = $_FILES['foto']['name'];

			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if (!empty($_FILES['foto']['name'])) {
				if ($this->upload->do_upload('foto')) {
					$foto = $this->upload->data();
					$data = array(

						'nama'          => htmlspecialchars($nama),
						'email'         => htmlspecialchars($email),
						'ulasan'       	=> $ulasan,
						'rating'       	=> $rating,
						'gambar'		=> $foto['file_name'],
						'dcreated 	'     =>  date('Y-m-d H:i:s', time())

					);

					$this->db->insert('ulasan', $data);
					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
					Terima Kasih Respons Anda Sudah terkirim  </div>');
					redirect('welcome');
				} else {
				}
			} else {
				echo "Gambar tidak masuk";
			}


			// $data = [
			// 'nama'          => htmlspecialchars($nama),
			// 'email'         => htmlspecialchars($email),
			// 'norekening'       => $norekening,
			// 'idcustomer'     => $idcustomer,
			// 'annorekening'     => $annorekening,
			// 'nominal'     => $nominal,
			// 'norekening'     => $norekening,
			// 'layanan'     => $layanan,
			// 'bank'     => $bank,
			// ];
			// 	$this->db->insert('pembayaran', $data);

			// 	$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			// Terima Kasih Respons Anda Sudah terkirim  </div>');

			// redirect('welcome/konfirmasi');

		}
	}
	public function hubungi()
	{
		$data['title'] = "";
		$data['integrated'] = "";
		$data['index1'] = "";
		$data['internet'] = "";
		$data['it'] = "";
		$data['soho'] = "";
		$data['support'] = "";
		$data['hubungi'] = "active";

		$this->form_validation->set_rules('name', 'name', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->load->view('template/umum/header', $data);
			$this->load->view('produk/hubungi', $data);
			$this->load->view('template/umum/footer');
		} else {
			$name  = $this->input->post('name');
			$email  = $this->input->post('email');
			$nomor  = $this->input->post('nomor');
			$alamat  = $this->input->post('alamat');
			$keluhan  = $this->input->post('keluhan');
			$kontak  = $this->input->post('kontak');
			$layanan  = $this->input->post('layanan');

			$data = [
				'name'          => htmlspecialchars($name),
				'email'         => htmlspecialchars($email),
				'alamat'       => $alamat,
				'nomor'     => $nomor,
				'response'     => $keluhan,
				'kontak'     => $kontak,
				'alamat'     => $alamat,
				'layanan'     => $layanan,
				'status'     => 'menunggu',
				'd_created 	'     =>  date('Y-m-d H:i:s', time())
			];

			$this->db->insert('keluhan', $data);

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Terima Kasih Respons Anda Sudah terkirim  </div>');

			redirect('welcome/hubungi');
		}
	}
}
