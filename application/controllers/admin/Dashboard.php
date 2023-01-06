<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        if (!empty($_SESSION['id_user'])) {
            $this->load->view('backend/dashboard.php');
        } else {
            $this->load->view('backend/login.php');
        }
       
    }
}
