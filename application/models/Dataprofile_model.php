<?php

class Dataprofile_model extends CI_Model
{
    
    public function detail_profile($id)
    {
        $this->db->from('profile');
        $this->db->where('id_profile',$id);
        return $this->db->get()->row();

    }
    //update
    public function update($id, $data, $table)
    {
        $this->db->where('id_profile',$id);
        return $this->db->update($table, $data);
    }

}
