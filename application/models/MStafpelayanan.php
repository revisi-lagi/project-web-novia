<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MStafpelayanan extends CI_Model
{

    public function get_count_warga()
    {
        return $this->db->count_all('warga'); // mengambil semua data dari tabel warga
    }

    public function get_all_warga()
    {
        return $this->db->get('warga')->result_array();
    }

    // Hapus Data warga berdasarkan ID
    public function delete_data_warga($id)
    {
    $this->db->where('id', $id);
    return $this->db->delete('warga');
    }

    public function update_data_warga($id, $data)
{
    $this->db->where('id', $id);
    return $this->db->update('warga', $data);
}

    public function get_pengaduan_by_kategori()
    {
        $this->db->select('kategori, COUNT(*) as total');
        $this->db->from('pengaduan');
        $this->db->group_by('kategori');
        return $this->db->get()->result_array();
    }

    // Ambil Semua Data Pengaduan
    public function get_all_pengaduan()
    {
        return $this->db->get('pengaduan')->result_array();
    }

    // Ambil Pengaduan Berdasarkan ID
    public function get_pengaduan_by_id($id)
    {
        return $this->db->get_where('pengaduan', ['id' => $id])->row_array();
    }

    // Update Status Pengaduan
    public function update_status_pengaduan($id, $status)
    {
        $this->db->where('id', $id);
        return $this->db->update('pengaduan', ['status' => $status]);
    }

    // Hapus Pengaduan berdasarkan ID
    public function delete_pengaduan($id)
    {
    $this->db->where('id', $id);
    return $this->db->delete('pengaduan');
    }

    public function get_konsultasi_by_kategori()
    {
        $this->db->select('kategori, COUNT(*) as total');
        $this->db->from('konsultasi');
        $this->db->group_by('kategori');
        return $this->db->get()->result_array();
    }

    // Ambil Semua Data Konsultasi
    public function get_all_konsultasi()
    {
        return $this->db->get('konsultasi')->result_array();
    }

    // Ambil Konsultasi Berdasarkan ID (PERBAIKAN: Salah ejaan tabel)
    public function get_konsultasi_by_id($id)
    {
        return $this->db->get_where('konsultasi', ['id' => $id])->row_array();
    }

    // Update Status Konsultasi (PERBAIKAN: Ganti nama fungsi)
    public function update_status_konsultasi($id, $status)
    {
        $this->db->where('id', $id);
        return $this->db->update('konsultasi', ['status' => $status]);
    }

    public function simpan_tanggapan($id, $tanggapan)
    {
    $this->db->where('id', $id);
    return $this->db->update('konsultasi', ['tanggapan' => $tanggapan]);
    }

    public function simpan_tanggapan_pengaduan($id, $tanggapan)
    {
    $this->db->where('id', $id);
    return $this->db->update('pengaduan', ['tanggapan' => $tanggapan]);
    }

    public function update_tanggapan($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('konsultasi', $data);
    }



    // Hapus Konsultasi berdasarkan ID
    public function delete_konsultasi($id)
    {
    $this->db->where('id', $id);
    return $this->db->delete('konsultasi');
    }

    public function insert_pengumuman($data)
    {
        return $this->db->insert('pengumuman', $data);
    }

    public function get_all_kategori_pengumuman()
    {
        return $this->db->get('kategori')->result_array();
    }
    
}
