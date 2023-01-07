<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Datapeminjaman extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Datapeminjaman_model', 'datasewa');
    }
    public function index()
    {
        //jika session user_id dan level nya nol
        if (!empty($_SESSION['id_user'])) {
            $data['datapeminjaman'] = $this->datasewa->list_peminjaman();           
            $this->load->view('backend/datapeminjam', $data);
        } else {
            //jika session user id dan level kosong akan menuju ke halaman login
            $this->load->view('backend/login');
        }
    }

    public function detail($id)
    {
        $data['datapeminjaman'] = $this->datasewa->detail($id);           
        $this->load->view('backend/datapeminjam_detail', $data);
    }
    
    public function hapus($id)
    {
        $this->kamera->hapus(array('id_peminjaman' => $id)); {
            redirect('admin/datapeminjam');
        }
    }
}
