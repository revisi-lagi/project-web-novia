<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CPages extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->model('MAdmin');

		// Pastikan session sudah dimuat
		$allowed_methods = ['index', 'tentang_kami', 'produk_umkm']; // Metode yang tidak memerlukan login
		if (!in_array($this->router->method, $allowed_methods)) {
			if (!$this->session->userdata('role_id')) {
				$this->session->set_flashdata('error', 'Silakan login terlebih dahulu untuk mengakses halaman ini.');
				redirect('CAuth'); // Redirect ke halaman login jika belum login
			}
		}
	}

	public function Admin()
	{
		$data['data_kategori_pengaduan_warga'] = $this->MAdmin->get_pengaduan_by_kategori();

		cek_akses(1);
		$this->load->view('Template/header');
		$this->load->view('Template/sidebar_pages_admin');
		$this->load->view('Pages/Admin/index', $data);
		$this->load->view('Template/footer');
	}

	public function Warga()
	{
		cek_akses(2);
		$this->load->view('Template/header');
		$this->load->view('Template/sidebar_pages_warga');
		$this->load->view('Pages/Warga/index');
		$this->load->view('Template/footer');
	}

	public function StafPelayanan()
	{
		cek_akses(3);
		$this->load->view('Template/header');
		$this->load->view('Template/sidebar_pages_stafpelayanan');
		$this->load->view('Pages/Stafpelayanan/index');
		$this->load->view('Template/footer');
	}
}
