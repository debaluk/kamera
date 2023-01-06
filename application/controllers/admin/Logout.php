<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Logout extends CI_Controller
{
    public function index()
    {
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('username');
        redirect('admin/login');
    }
}
