<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('Website_model', 'website');
    }

	public function index()
	{
		if ($this->session->userdata('masuk')) {
			$IdSessionPelanggan='';
			$data['profile']=$this->website->get_ProfilePelanggan($IdSessionPelanggan);		
			$this->load->view('frontend/akun',$data);
			
		} else {
			$this->load->view('frontend/login');
			redirect(base_url('akun/pendaftaran'));
		}
		
	}
	public function pendaftaran()
	{
		$this->load->view('frontend/pendaftaran');
	}
	public function proses_pendaftaran()
	{
		
	}

	public function login()
	{
		if ($this->session->userdata('masuk')) {
			redirect(base_url('akun/profile'));
		} else {
			$this->load->view('frontend/login');
		}
	}

	public function proses_login()
	{
		$username = $this->db->escape_str($this->input->post('username'));
		$password = $this->db->escape_str($this->input->post('password'));
		$result = $this->website->get_LoginPelanggan($username, $pass);
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

	public function logout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Logout Telah Berhasil. Silahkan Login</div>');
		redirect(base_url('akun/login'));
	}

}
