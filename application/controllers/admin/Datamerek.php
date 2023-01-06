<?php
/*
	controller datakategori
	hanya user level admin boleh akses halaman datakategori
*/
defined('BASEPATH') or exit('No direct script access allowed');

class Datamerek extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Datamerek_model', 'merek');
    }
    public function index()
    {
        //jika session user_id dan level nya nol
        if (!empty($_SESSION['id_user'])) {
            //maka baca data kategori, yang berada di model kategori subclass list_kategori
            $data['merek'] = $this->merek->list_merek();
            //menampilkan halaman dan tampilkan data kategori
            $this->load->view('backend/datamerek', $data);
        } else {
            //jika session user id dan level kosong akan menuju ke halaman login
            $this->load->view('backend/login');
        }
    }

    public function simpan()
    {
        $id_merek      = $this->input->post('id_merek');    //post nilai kategori_id dari form
        $nama_merek  = $this->input->post('nama_merek');    //post nilai nama kategori dari form

        if (!empty($id_merek)) { //jika kategori_id tidak kosong, terjadi proses update
            //proses update
            $this->merek->update(array('id_merek' => $id_merek), array('nama_merek' => $nama_merek), 'merek');
            redirect('admin/datamerek');
        } else {      // proses simpan                  
            $this->merek->simpan(array('nama_merek' => $nama_merek), 'merek');
            redirect('admin/datamerek');
        }
    }
    public function hapus($id)
    {
        $this->merek->hapus(array('id_merek' => $id)); {
            redirect('admin/datamerek');
        }
    }
}
