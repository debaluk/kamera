<?php

class Datakamera_model extends CI_Model
{
    //menampilkan Merek yang sudah dibuat
    public function list_kamera()
    {
        $this->db->from('kamera');
        $this->db->join('merek', 'kamera.id_merek = merek.id_merek', 'LEFT'); //join table, untuk menampilkan nama kategori dari tabel kategori
        $this->db->order_by('id_kamera', 'ASC');
        return $this->db->get()->result();

        //select berita.*,kategori.* from berita,kategori where berita.idkategori=kategori.kategori_id order by idberita desc
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
        return $this->db->delete('kamera');
    }
}
