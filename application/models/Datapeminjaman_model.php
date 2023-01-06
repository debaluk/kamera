<?php

class Datapeminjaman_model extends CI_Model
{
    public function list_peminjaman()
    {
        $this->db->from('peminjaman');
        $this->db->order_by('id_peminjaman', 'asc');
        $this->db->join('pelanggan', 'peminjaman.id_pelanggan = pelanggan.id_pelanggan', 'LEFT');
        $this->db->order_by('id_peminjaman', 'ASC');
        $this->db->join('kamera', 'peminjaman.id_kamera = kamera.id_kamera', 'LEFT');
        $this->db->order_by('id_peminjaman', 'ASC');

        return $this->db->get()->result();
    }
}
