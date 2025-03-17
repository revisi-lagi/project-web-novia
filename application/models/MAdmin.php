<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MAdmin extends CI_Model
{

    public function get_count_stafpelayanan()
    {
        return $this->db->count_all('stafpelayanan'); // mengambil semua data dari tabel stafpelayanan
    }

    public function get_count_warga()
    {
        return $this->db->count_all('warga'); // mengambil semua data dari tabel warga
    }

    public function get_all_warga()
    {
        return $this->db->get('warga')->result_array();
    }

    public function get_warga_by_id($id)
    {
        return $this->db->get_where('warga', ['id' => $id])->row_array();
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

    public function get_all_stafpelayanan()
    {
        return $this->db->get('stafpelayanan')->result_array();
    }

    public function get_stafpelayanan_by_jenis_usaha()
    {
        $this->db->select('jenis_usaha, COUNT(*) as total');
        $this->db->from('stafpelayanan');
        $this->db->group_by('jenis_usaha');
        return $this->db->get()->result_array();
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

    // Ambil Konsultasi Berdasarkan ID
    public function get_konsultasi_by_id($id)
    {
        return $this->db->get_where('konsultasi', ['id' => $id])->row_array();
    }

    // Update Status Konsultasi
    public function update_status_konsultasi($id, $status)
    {
        $this->db->where('id', $id);
        return $this->db->update('konsultasi', ['status' => $status]);
    }

    // Hapus Konsultasi berdasarkan ID
    public function delete_konsultasi($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('konsultasi');
    }
}
