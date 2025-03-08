<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CStafpelayanan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('MStafpelayanan');

        if (!$this->session->userdata('role_id')) {
            $this->session->set_flashdata('error', 'Silakan login terlebih dahulu untuk mengakses halaman ini.');
            redirect('CAuth'); // Redirect ke halaman login jika belum login
        }
    }

    public function menu_data_warga()
    {
        $data['data_warga'] = $this->MStafpelayanan->get_all_warga();

        $this->load->view('Template/header');
        $this->load->view('Template/sidebar_pages_stafpelayan');
        $this->load->view('Pages/Stafpelayanan/data_stafpelayanan', $data);
        $this->load->view('Template/footer');
    }

    // Hapus Data warga
    public function hapus_data_warga($id)
    {
    $this->MStafpelayanan->delete_data_warga($id);
    $this->session->set_flashdata('success', 'data warga berhasil dihapus.');
    redirect('CStafpelayanan/menu_data_warga');
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

    if ($this->MStafpelayanan->update_data_warga($id, $data)) {
        echo json_encode(["status" => "success", "message" => "Data warga berhasil diperbarui"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Gagal memperbarui data warga"]);
    }

    redirect('CStafpelayanan/menu_data_warga');
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

    public function menu_laporan_pengaduan()
    {
        $data['pengaduan'] = $this->MStafpelayanan->get_all_pengaduan();

        $this->load->view('Template/header');
        $this->load->view('Template/sidebar_pages_stafpelayanan');
        $this->load->view('Pages/Stafpelayanan/laporan_pengaduan', $data);
        $this->load->view('Template/footer');
    }

    // Hapus Pengaduan
    public function hapus_pengaduan($id)
    {
    $this->MStafpelayanan->delete_pengaduan($id);
    $this->session->set_flashdata('success', 'pengaduan berhasil dihapus.');
    redirect('CStafpelayanan/menu_laporan_pengaduan');
    }

    public function menu_laporan_konsultasi()
    {
        $data['konsultasi'] = $this->MStafpelayanan->get_all_konsultasi();

        $this->load->view('Template/header');
        $this->load->view('Template/sidebar_pages_stafpelayanan');
        $this->load->view('Pages/Stafpelayanan/laporan_konsultasi', $data);
        $this->load->view('Template/footer');
    }

    // Hapus Konsultasi
    public function hapus_konsultasi($id)
    {
    $this->MAdmin->delete_konsultasi($id);
    $this->session->set_flashdata('success', 'Konsultasi berhasil dihapus.');
    redirect('CStafpelayanan/menu_laporan_konsultasi');
    }

    public function tanggapi_konsultasi()
    {
        $id = $this->input->post('id');
        $tanggapan = $this->input->post('tanggapan');

        if ($this->MStafpelayanan->simpan_tanggapan($id, $tanggapan)) {
            $this->session->set_flashdata('success', 'Tanggapan berhasil dikirim.');
        } else {
            $this->session->set_flashdata('error', 'Gagal mengirim tanggapan.');
        }
        redirect('CStafpelayanan/menu_laporan_konsultasi');
        // redirect('CWarga/menu_tanggapan');
    }
    public function edit_tanggapan_konsultasi()
    {
        $id = $this->input->post('id');
        $tanggapan = $this->input->post('tanggapan');

        if ($this->MStafpelayanan->simpan_tanggapan($id, $tanggapan)) {
            $this->session->set_flashdata('success', 'Tanggapan berhasil dikirim.');
        } else {
            $this->session->set_flashdata('error', 'Gagal mengirim tanggapan.');
        }
        redirect('CStafpelayanan/menu_laporan_konsultasi');
        // redirect('CWarga/menu_tanggapan');
    }


    // TANGGAPI PENGADUAN
    public function tanggapi_pengaduan()
    {
        $id = $this->input->post('id');
        $tanggapan = $this->input->post('tanggapan');

        if ($this->MStafpelayanan->simpan_tanggapan_pengaduan($id, $tanggapan)) {
            $this->session->set_flashdata('success', 'Tanggapan berhasil dikirim.');
        } else {
            $this->session->set_flashdata('error', 'Gagal mengirim tanggapan.');
        }
        redirect('CStafpelayanan/menu_laporan_pengaduan');
        // redirect('CWarga/menu_tanggapan');
    }

    public function edit_tanggapan_pengaduan()
    {
        $id = $this->input->post('id');
        $tanggapan = $this->input->post('tanggapan');

        if ($this->MStafpelayanan->simpan_tanggapan_pengaduan($id, $tanggapan)) {
            $this->session->set_flashdata('success', 'Tanggapan berhasil dikirim.');
        } else {
            $this->session->set_flashdata('error', 'Gagal mengirim tanggapan.');
        }
        redirect('CStafpelayanan/menu_laporan_pengaduan');
        // redirect('CWarga/menu_tanggapan');
    }

    public function update_status_form_pengaduan()
    {
        $id = $this->input->post('id');
        $status = $this->input->post('status');

        if ($this->MStafpelayanan->update_status_pengaduan($id, $status)) {
            $this->session->set_flashdata('success', 'Status pengaduan berhasil diperbarui.');
        } else {
            $this->session->set_flashdata('error', 'Gagal memperbarui status pengaduan.');
        }

        redirect('CStafpelayanan/menu_laporan_pengaduan');
    }

    public function update_status_form_konsultasi()
    {
        $id = $this->input->post('id');
        $status = $this->input->post('status');

        if ($this->MStafpelayanan->update_status_konsultasi($id, $status)) {
            $this->session->set_flashdata('success', 'Status konsultasi berhasil diperbarui.');
        } else {
            $this->session->set_flashdata('error', 'Gagal memperbarui status konsultasi.');
        }

        redirect('CStafpelayanan/menu_laporan_konsultasi');
    }
    
    
}
