<?php

class Datapeminjaman_model extends CI_Model
{
    
    public function detail($id)
    {
        $this->db->from('peminjaman');
        $this->db->join('pelanggan', 'peminjaman.id_pelanggan = pelanggan.id_pelanggan', 'LEFT');
        $this->db->join('kamera', 'peminjaman.id_kamera = kamera.id_kamera', 'LEFT');
        $this->db->where('id_peminjaman',$id);
        return $this->db->get()->row();

    }
    
    public function list_peminjaman()
    {
        $this->db->from('peminjaman');
        $this->db->join('pelanggan', 'peminjaman.id_pelanggan = pelanggan.id_pelanggan', 'LEFT');
        $this->db->join('kamera', 'peminjaman.id_kamera = kamera.id_kamera', 'LEFT');
        $this->db->order_by('tgl_pinjam', 'desc');

        return $this->db->get()->result();
    }

    public function hapus($id)
    {
        $this->db->where($id);
        return $this->db->delete('peminjaman');
    }
}
