<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CKepalaDinas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('MStafpelayanan');

        if (!$this->session->userdata('role_id')) {
            $this->session->set_flashdata('error', 'Silakan login terlebih dahulu untuk mengakses halaman ini.');
            redirect('CAuth');
        }
    }

    public function menu_laporan_pengaduan()
    {
        $data['pengaduan'] = $this->MStafpelayanan->get_all_pengaduan();
        $this->load->view('Template/header');
        $this->load->view('Template/sidebar_pages_kepalaDinas');
        $this->load->view('pages/KepalaDinas/laporan_pengaduan.php', $data);
        $this->load->view('Template/footer');
    }

    public function menu_laporan_konsultasi()
    {
        $data['konsultasi'] = $this->MStafpelayanan->get_all_konsultasi();
        $this->load->view('Template/header');
        $this->load->view('Template/sidebar_pages_kepalaDinas');
        $this->load->view('pages/KepalaDinas/laporan_konsultasi.php', $data);
        $this->load->view('Template/footer');
    }
}
