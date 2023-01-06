<?php

class Datakamera_model extends CI_Model
{
    //menampilkan Merek yang sudah dibuat
    public function list_kamera()
    {
        $this->db->from('kamera');
        $this->db->join('merek', 'kamera.id_merek = merek.id_merek', 'LEFT'); 
        $this->db->order_by('id_kamera', 'ASC');
        return $this->db->get()->result();

    }

    //simpan Merek
    public function simpan($data, $table)
    {
        return $this->db->insert($table, $data);
    }

    //update
    public function update($id, $data, $table)
    {
        $this->db->where($id);
        return $this->db->update($table, $data);
    }

    public function detail_kamera($id)
    {
        $this->db->from('kamera');
        $this->db->join('merek', 'kamera.id_merek = merek.id_merek', 'LEFT'); 
        $this->db->where('id_kamera',$id);
        return $this->db->get()->row();

    }

    //hapus Merek
    public function hapus($id)
    {
        $this->db->where($id);
        return $this->db->delete('kamera');
    }
}
