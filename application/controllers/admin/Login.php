<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        //pendeklarasian admin_model menjadi admin
        $this->load->model('Admin_model', 'admin');
    }
    public function index()
	{
       
        $this->load->view('backend/login.php');
    }

    public function aksi_login()
    {
        // proses cari user dimodel username dan password
        $user = $this->admin->cari_user(
            array(
                'user_login'     => $this->input->post('username'),
                'password'      => $this->input->post('password')
            ),
        );
        //aktifkan session
        if (!empty($user)) {
            //aktifkan session user_id dengan isian user_id
            $this->session->set_userdata('id_user', $user[0]->id_user); //aktifkan session user_id dengan isian user_id
            $this->session->set_userdata('nama', $user[0]->nama_lengkap);
            $this->session->set_userdata('username', $user[0]->user_login);
            // $this->session->unset_userdata('gagallogin');
            redirect('admin/dashboard');
        } else {
            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Gagal login, coba kembali</div>');
            redirect(site_url('admin/login'));
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('id_user');
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('username');
        redirect('admin/login');
    }

}