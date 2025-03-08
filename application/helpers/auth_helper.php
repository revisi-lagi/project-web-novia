<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('cek_akses')) {
    function cek_akses($role_id)
    {
        $ci = &get_instance();
        $user_role = $ci->session->userdata('role_id');

        if ($user_role != $role_id) {
            redirect('CAuth'); // Ganti dengan halaman redirect yang sesuai
        }
    }
}
