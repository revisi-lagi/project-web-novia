<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CPDF extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('Dompdf_lib'); // Load library Dompdf
        $this->load->model('MStafpelayanan');
    }

    public function generate_laporan_pengaduan()
    {
        $data['title'] = "Laporan PDF Dompdf";
        $data['content'] = "Ini adalah contoh laporan PDF dengan Dompdf.";

        // Load HTML dari view
        $data['pengaduan'] = $this->MStafpelayanan->get_all_pengaduan();
        $html = $this->load->view('pages/KepalaDinas/pdf_laporan_pengaduan', $data, true);

        // Buat objek Dompdf
        $dompdf = $this->dompdf_lib->load();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait'); // Ukuran kertas A4 portrait
        $dompdf->render();

        // Unduh PDF
        $dompdf->stream("Laporan_Dompdf.pdf", ["Attachment" => true]);
    }
}
