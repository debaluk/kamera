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


    

    
}
