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
		if ($this->session->userdata('id_pelanggan') != null) {
			$data['profile']=$this->website->get_ProfilePelanggan($_SESSION['id_pelanggan']);		
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
		$customer = $this->website->get_LoginPelanggan($username, $password); 
		if ($customer) {
			$data =[
				'id_pelanggan' => $customer->id_pelanggan,
				'nama_user' => $customer->nama_user,
				'nama_lengkap'=>$customer->nama_lengkap,
				'alamat_lengkap' => $customer->alamat_lengkap,
				'no_wa' => $customer->no_wa,
				'email' => $customer->email,
			];
			$this->session->set_userdata($data);
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Berhasil login</div>');
			redirect(base_url('welcome'));
		} else {
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Gagal login, coba kembali</div>');
        	redirect(base_url('akun/login'));
		}
		
	}

	public function logout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Logout Telah Berhasil. Silahkan Login</div>');
		redirect(base_url('akun/login'));
	}

}
