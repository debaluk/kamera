<?php

class Website_model extends CI_Model
{
    
    public function get_Profile()
    {
       
        $this->db->from('profile');
        return $this->db->get()->row();
    }
    
    public function get_SemuaMerek()
    {
       
        $this->db->from('merek');
        $this->db->order_by('nama_merek', 'asc'); 
        return $this->db->get()->result();
    }

    public function get_SemuaKamera()
    {
       
        $this->db->from('kamera');
        $this->db->where('stok','>', 0);
        $this->db->order_by('nama_kamera', 'asc'); 
        return $this->db->get()->result();
    }

    public function get_KameraById($id)
    {
       
        $this->db->from('kamera');
        $this->db->where('id_kamera',$id);
        return $this->db->get()->row();
    }

    public function get_PesananByIdPelanggan($id)
    {
       
        $this->db->from('peminjaman');
        $this->db->where('id_pelanggan',$id);
        $this->db->order_by('tgl_pinjam', 'dsc'); 
        return $this->db->get()->result();
    }

    public function get_PesananByIdPesanan($id)
    {
       
        $this->db->from('peminjaman');
        $this->db->where('id_peminjaman',$id);
        return $this->db->get()->row();
    }

    public function buatPeminjaman()
    {
        $query = $this->db->insert('peminjaman', $data);
		return $query;
    }
    
    public function uploadBuktiBayar()
    {
        $query = $this->db->insert('pembayaran', $data);
		return $query;
    }

    //login pelanggan

    //pendaftaran pelanggan



    
}
