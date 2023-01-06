<?php

class Datapelanggan_model extends CI_Model
{
    //menampilkan data pelanggan yang sudah dibuat
    public function list_pelanggan()
    {
        $this->db->from('pelanggan');
        $this->db->order_by('id_pelanggan', 'asc'); //urut data berdasarkan kolom Merek_id ascending
        return $this->db->get()->result();
    }
}
