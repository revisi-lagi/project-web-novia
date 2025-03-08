<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MWarga extends CI_Model
{
    // Simpan Data Pengaduan
    public function insert_pengaduan($data)
    {
        return $this->db->insert('pengaduan', $data);
    }

    // Simpan Data Konsultasi
    public function insert_konsultasi($data)
    {
        return $this->db->insert('konsultasi', $data);
    }

    // Simpan Tanggapan Konsultasi
    public function insert_tanggapan($data)
    {
        return $this->db->insert('tanggapan', $data);
    }

    public function get_count_stafpelayanan()
    {
        return $this->db->count_all('stafpelayanan'); // mengambil semua data dari tabel stafpelayanan
    }

    public function update_tanggapan_konsultasi($data)
    {
        $this->db->where('id', $data['konsultasi_id']);
        return $this->db->update('konsultasi', ['tanggapan' => $data['tanggapan'], 'tanggal_tanggapan' => $data['tanggal_tanggapan']]);
    }

    public function get_pengaduan_by_user_id($user_id)
    {
        $this->db->select('pengaduan.*, user.*');
        $this->db->from('pengaduan');
        $this->db->join('user', 'pengaduan.user_id = user.id', 'left');
        $this->db->where('pengaduan.user_id', $user_id);
        return $this->db->get()->result_array();
    }
}
