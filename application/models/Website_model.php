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

    public function buatPeminjaman($data)
    {
        $query = $this->db->insert('peminjaman', $data);
		return $query;
    }
    
    public function uploadBuktiBayar($data)
    {
        $query = $this->db->insert('pembayaran', $data);
		return $query;
    }

    //pendaftaran pelanggan
    public function daftarPelanggan($data)
    {
        $query = $this->db->insert('pelanggan', $data);
		return $query;
    }
    //login pelanggan
    public function get_LoginPelanggan($namauser,$katakunci)
    {
       
        $this->db->from('pelanggan');
        $this->db->where('nama_user',$namauser);
        $this->db->where('password_user',$katakunci);
        return $this->db->get()->row();
    }
    public function get_ProfilePelanggan($id)
    {
       
        $this->db->from('pelanggan');
        $this->db->where('id_pelanggan',$id);
        return $this->db->get()->row();
    }
    //update profile pelanggan
    public function updateProfile($data,$idpelanggan)
    {
        $this->db->where($idpelanggan);
        return $this->db->update('pelanggan', $data);
    }





    
}
