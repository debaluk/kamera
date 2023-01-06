<?php

class Admin_model extends CI_Model
{
    //mengambil data dari tabel users
    public function cari_user($where = array()) //koneksi ke database untuk mencari user
    {
        $this->db->from('admin'); // cari dari tabel dari users
        $this->db->where($where); // field username dan password(data array dari controller admin/subclass aksi_login)
        return $this->db->get()->result();
    }
}
