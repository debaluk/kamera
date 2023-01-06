<?php
/*
	controller datakategori
	hanya user level admin boleh akses halaman datakategori
*/
defined('BASEPATH') or exit('No direct script access allowed');

class Datapelanggan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Datapelanggan_model', 'pelanggan');
    }
    public function index()
    {
        //jika session user_id dan level nya nol
        if (!empty($_SESSION['id_user'])) {
            //maka baca data kategori, yang berada di model kategori subclass list_kategori
            $data['pelanggan'] = $this->pelanggan->list_pelanggan();
            //menampilkan halaman dan tampilkan data kategori
            $this->load->view('backend/datapelanggan', $data);
        } else {
            //jika session user id dan level kosong akan menuju ke halaman login
            $this->load->view('backend/login');
        }
    }
}
