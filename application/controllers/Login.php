<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Website_model', 'website');
		
	}


	public function index()
	{
		if ($this->session->userdata('masuk')) {
			redirect(base_url('akun'));
		} else {
			$this->load->view('frontend/login');
		}
	}

	public function proses_login()
	{
		$username = $this->db->escape_str($this->input->post('username'));
		$password = $this->db->escape_str($this->input->post('password'));
		$pass = hash('sha512', $password . $this->encryption_key);
		$result = $this->M_login->login($username, $pass);
		if ($result) {
			$this->session->set_userdata('masuk', $result);
			$output['status_code'] = 200;
			$output['title'] = "Berhasil";
			$output['type'] = "success";
			$output['message'] = "Anda Berhasil Login";
		} else {
			$output['status_code'] = 400;
			$output['title'] = "Gagal";
			$output['type'] = "error";
			$output['message'] = "Anda Gagal Login";
		}
		echo json_encode($output);
	}

	
}
