<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CWarga extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('MWarga');
        $this->load->model('MStafpelayanan');

        $allowed_methods = ['index']; // Metode yang tidak memerlukan login
        if (!in_array($this->router->method, $allowed_methods)) {
            if (!$this->session->userdata('role_id')) {
                $this->session->set_flashdata('error', 'Silakan login terlebih dahulu untuk mengakses halaman ini.');
                redirect('CAuth'); // Redirect ke halaman login jika belum login
            }
        }
    }

    public function menu_data_stafpelayanan()
    {
        $data['data_stafpelayanan'] = $this->MWarga->get_all_stafpelayanan();

        $this->load->view('Template/header');
        $this->load->view('Template/sidebar_pages_warga');
        $this->load->view('Pages/Warga/data_stafpelayanan', $data);
        $this->load->view('Template/footer');
    }



    public function menu_pengaduan()
    {
        $this->load->view('Template/header');
        $this->load->view('Template/sidebar_pages_warga');
        $this->load->view('Pages/Warga/pengaduan');
        $this->load->view('Template/footer');
    }

    public function menu_tanggapan_konsultasi()
    {
        $user_id = $this->session->userdata('id');
        $data['konsultasi'] = $this->MWarga->get_konsultasi_by_user_id($user_id);

        $this->load->view('Template/header');
        $this->load->view('Template/sidebar_pages_warga');
        $this->load->view('Pages/Warga/tanggapan', $data);
        $this->load->view('Template/footer');
    }

    public function menu_tanggapan_pengaduan()
    {
        $user_id = $this->session->userdata('id');
        $data['pengaduan'] = $this->MWarga->get_pengaduan_by_user_id($user_id);

        $this->load->view('Template/header');
        $this->load->view('Template/sidebar_pages_warga');
        $this->load->view('Pages/Warga/tanggapan_pengaduan', $data);
        $this->load->view('Template/footer');
    }

    public function menu_konsultasi()
    {
        $this->load->view('Template/header');
        $this->load->view('Template/sidebar_pages_warga');
        $this->load->view('Pages/Warga/konsultasi');
        $this->load->view('Template/footer');
    }

    public function submit_form_pengaduan()
    {
        $this->load->library('form_validation');

        // Validasi Input
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required');
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'Harap lengkapi semua field yang dibutuhkan.');
            redirect('CWarga/menu_pengaduan');
        } else {
            // Data dari Form
            $data = [
                'user_id' => $this->input->post('user_id'),
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'telepon' => $this->input->post('telepon'),
                'judul' => $this->input->post('judul'),
                'kategori' => $this->input->post('kategori'),
                'deskripsi' => $this->input->post('deskripsi'),
                'tanggal' => date('Y-m-d'),
                'status' => 'Pending'
            ];

            // Upload File
            if (!empty($_FILES['bukti']['name'])) {
                $config['upload_path'] = './assets/uploads/'; // Folder penyimpanan
                $config['allowed_types'] = 'jpg|jpeg|png|pdf';
                $config['max_size'] = 2048; // Maksimal 2MB
                $config['file_name'] = time() . '_' . $_FILES['bukti']['name']; // Rename file dengan timestamp

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('bukti')) {
                    $data['bukti'] = $this->upload->data('file_name'); // Simpan nama file di database
                } else {
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                    redirect('CWarga/menu_pengaduan');
                }
            }

            // Simpan ke Database
            $insert = $this->MWarga->insert_pengaduan($data);

            if ($insert) {
                $this->session->set_flashdata('success', 'Konsultasi berhasil dikirim.');
                redirect('CWarga/menu_pengaduan');
            } else {
                $this->session->set_flashdata('error', 'Terjadi kesalahan, coba lagi.');
                redirect('CWarga/menu_pengaduan');
            }
        }
    }

    // public function submit_form_pengaduan()
    // {
    //     $this->load->library('form_validation');

    //     // Validasi Input
    //     $this->form_validation->set_rules('nama', 'Nama', 'required');
    //     $this->form_validation->set_rules('telepon', 'Telepon', 'required');
    //     $this->form_validation->set_rules('judul', 'Judul', 'required');
    //     $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

    //     if ($this->form_validation->run() == FALSE) {
    //         $this->session->set_flashdata('error', 'Harap lengkapi semua field yang dibutuhkan.');
    //         redirect('CWarga/menu_pengaduan');
    //     } else {
    //         // Data dari Form
    //         $data = [
    //             'nama' => $this->input->post('nama'),
    //             'alamat' => $this->input->post('alamat'),
    //             'telepon' => $this->input->post('telepon'),
    //             'judul' => $this->input->post('judul'),
    //             'kategori' => $this->input->post('kategori'),
    //             'deskripsi' => $this->input->post('deskripsi'),
    //             'tanggal' => date('Y-m-d'),
    //             'status' => 'Pending'
    //         ];

    //         // Upload File
    //         if (!empty($_FILES['bukti']['name'])) {
    //             $config['upload_path'] = './application/uploads/';
    //             $config['allowed_types'] = 'jpg|jpeg|png|pdf';
    //             $config['max_size'] = 2048; // 2MB
    //             $this->load->library('upload', $config);

    //             if ($this->upload->do_upload('bukti')) {
    //                 $data['bukti'] = $this->upload->data('file_name');
    //             } else {
    //                 $this->session->set_flashdata('error', $this->upload->display_errors());
    //                 redirect('CWarga/menu_pengaduan');
    //             }
    //         }

    //         // Simpan ke Database
    //         $insert = $this->MWarga->insert_pengaduan($data);

    //         if ($insert) {
    //             $this->session->set_flashdata('success', 'Pengaduan berhasil dikirim.');
    //             redirect('CWarga/menu_pengaduan');
    //         } else {
    //             $this->session->set_flashdata('error', 'Terjadi kesalahan, coba lagi.');
    //             redirect('CWarga/menu_pengaduan');
    //         }
    //     }
    // }

    public function submit_form_konsultasi()
    {
        $this->load->library('form_validation');

        // Validasi Input
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required');
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'Harap lengkapi semua field yang dibutuhkan.');
            redirect('CWarga/menu_konsultasi');
        } else {
            // Data dari Form
            $data = [
                'user_id' => $this->input->post('user_id'),
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'telepon' => $this->input->post('telepon'),
                'judul' => $this->input->post('judul'),
                'kategori' => $this->input->post('kategori'),
                'deskripsi' => $this->input->post('deskripsi'),
                'tanggal' => date('Y-m-d'),
                'status' => 'Pending'
            ];

            // Upload File
            if (!empty($_FILES['bukti']['name'])) {
                $config['upload_path'] = './assets/uploads/'; // Folder penyimpanan
                $config['allowed_types'] = 'jpg|jpeg|png|pdf';
                $config['max_size'] = 2048; // Maksimal 2MB
                $config['file_name'] = time() . '_' . $_FILES['bukti']['name']; // Rename file dengan timestamp

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('bukti')) {
                    $data['bukti'] = $this->upload->data('file_name'); // Simpan nama file di database
                } else {
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                    redirect('CWarga/menu_konsultasi');
                }
            }

            // Simpan ke Database
            $insert = $this->MWarga->insert_konsultasi($data);

            if ($insert) {
                $this->session->set_flashdata('success', 'Konsultasi berhasil dikirim.');
                redirect('CWarga/menu_konsultasi');
            } else {
                $this->session->set_flashdata('error', 'Terjadi kesalahan, coba lagi.');
                redirect('CWarga/menu_konsultasi');
            }
        }
    }


    public function tanggapan_konsultasi()
    {
        $this->load->library('form_validation');

        // Validasi Input
        $this->form_validation->set_rules('konsultasi_id', 'ID Konsultasi', 'required|numeric');
        $this->form_validation->set_rules('tanggapan', 'Tanggapan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'Harap isi tanggapan dengan benar.');
        } else {
            $data = [
                'konsultasi_id' => $this->input->post('konsultasi_id'),
                'tanggapan' => $this->input->post('tanggapan'),
                'tanggal_tanggapan' => date('Y-m-d H:i:s')
            ];

            $update = $this->MWarga->update_tanggapan_konsultasi($data);

            if ($update) {
                $this->session->set_flashdata('success', 'Tanggapan berhasil dikirim.');
            } else {
                $this->session->set_flashdata('error', 'Terjadi kesalahan, coba lagi.');
            }
        }

        redirect('CWarga/menu_konsultasi');
    }
}
