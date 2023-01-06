<?php

class Datamerek_model extends CI_Model
{
    //menampilkan Merek yang sudah dibuat
    public function list_merek()
    {
        $this->db->from('merek');
        $this->db->order_by('id_merek', 'asc'); //urut data berdasarkan kolom Merek_id ascending
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


    //hapus Merek
    public function hapus($id)
    {
        $this->db->where($id);
        return $this->db->delete('merek');
    }
}
