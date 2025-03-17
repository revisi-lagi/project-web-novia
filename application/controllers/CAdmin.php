<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CAdmin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('MAdmin');

        if (!$this->session->userdata('role_id')) {
            $this->session->set_flashdata('error', 'Silakan login terlebih dahulu untuk mengakses halaman ini.');
            redirect('CAuth'); // Redirect ke halaman login jika belum login
        }
    }

    public function menu_data_warga()
    {
        $data['data_warga'] = $this->MAdmin->get_all_warga();

        $this->load->view('Template/header');
        $this->load->view('Template/sidebar_pages_admin');
        $this->load->view('Pages/Admin/data_warga', $data);
        $this->load->view('Template/footer');
    }

    public function edit_data_warga($id)
    {
        $data['warga'] = $this->MAdmin->get_warga_by_id($id);

        $this->load->view('Template/header');
        $this->load->view('Template/sidebar_pages_admin');
        $this->load->view('Pages/Admin/edit_data_warga', $data);
        $this->load->view('Template/footer');
    }


    public function update_data_warga()
    {
        $id = $this->input->post('id');
        $data = [
            'nama_warga' => $this->input->post('nama_warga'),
            'nik' => $this->input->post('nik'),
            'alamat' => $this->input->post('alamat'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin')
        ];
        $this->MAdmin->update_data_warga($id, $data);

        redirect('CAdmin/menu_data_warga');
    }

    // Hapus Data warga
    public function hapus_data_warga($id)
    {
        $this->MAdmin->delete_data_warga($id);
        $this->session->set_flashdata('success', 'data warga berhasil dihapus.');
        redirect('CAdmin/menu_data_warga');
    }

    public function simpan_edit_warga()
    {
        $id = $this->input->post('id');
        $data = [
            'nama_warga' => $this->input->post('nama_warga'),
            'nik' => $this->input->post('nik'),
            'alamat' => $this->input->post('alamat'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin')
        ];
    }

    public function menu_data_stafpelayanan()
    {
        $data['data_stafpelayanan'] = $this->MAdmin->get_all_stafpelayanan();

        $this->load->view('Template/header');
        $this->load->view('Template/sidebar_pages_admin');
        $this->load->view('Pages/Admin/data_stafpelayanan', $data);
        $this->load->view('Template/footer');
    }


    public function menu_laporan_pengaduan()
    {
        $data['pengaduan'] = $this->MAdmin->get_all_pengaduan();

        $this->load->view('Template/header');
        $this->load->view('Template/sidebar_pages_admin');
        $this->load->view('Pages/Admin/laporan_pengaduan', $data);
        $this->load->view('Template/footer');
    }

    public function menu_cetak_laporan_pengaduan()
    {
        $data['pengaduan'] = $this->MAdmin->get_all_pengaduan();

        $this->load->view('Template/header');
        $this->load->view('Template/sidebar_pages_admin');
        $this->load->view('Pages/Admin/cetak_laporan_pengaduan', $data);
        $this->load->view('Template/footer');
    }

    // Hapus Pengaduan
    public function hapus_pengaduan($id)
    {
        $this->MAdmin->delete_pengaduan($id);
        $this->session->set_flashdata('success', 'pengaduan berhasil dihapus.');
        redirect('CAdmin/menu_laporan_pengaduan');
    }

    public function menu_laporan_konsultasi()
    {
        $data['konsultasi'] = $this->MAdmin->get_all_konsultasi();

        $this->load->view('Template/header');
        $this->load->view('Template/sidebar_pages_admin');
        $this->load->view('Pages/Admin/laporan_konsultasi', $data);
        $this->load->view('Template/footer');
    }

    // Hapus Konsultasi
    public function hapus_konsultasi($id)
    {
        $this->MAdmin->delete_konsultasi($id);
        $this->session->set_flashdata('success', 'Konsultasi berhasil dihapus.');
        redirect('CAdmin/menu_laporan_konsultasi');
    }

    public function update_status_form_pengaduan()
    {
        $id = $this->input->post('id');
        $status = $this->input->post('status');

        if ($this->MAdmin->update_status_pengaduan($id, $status)) {
            $this->session->set_flashdata('success', 'Status pengaduan berhasil diperbarui.');
        } else {
            $this->session->set_flashdata('error', 'Gagal memperbarui status pengaduan.');
        }

        redirect('CAdmin/menu_laporan_pengaduan');
    }

    public function update_status_form_konsultasi()
    {
        $id = $this->input->post('id');
        $status = $this->input->post('status');

        if ($this->MAdmin->update_status_konsultasi($id, $status)) {
            $this->session->set_flashdata('success', 'Status konsultasi berhasil diperbarui.');
        } else {
            $this->session->set_flashdata('error', 'Gagal memperbarui status konsultasi.');
        }

        redirect('CAdmin/menu_laporan_konsultasi');
    }
}
