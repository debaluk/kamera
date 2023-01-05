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
		$username = $this->db->escape_str($this->input->post('nama_user'));
		$cariusername = $this->website->cek_Pelanggan($username); 
		if ($cariusername)
		{
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Nama user sudah terdaftar</div>');
		}
		else
		{
			//simpan
			$data =[
				'nama_user' => $this->input->post('nama_user'),
				'password_user' => $this->input->post('password_user'),				
				'nama_lengkap'=>$this->input->post('nama_lengkap'),	
				'alamat_lengkap' => $this->input->post('alamat_lengkap'),	
				'no_wa' => $this->input->post('no_wa'),
				'email' => $this->input->post('email'),
				'tgl_daftar' =>date("Y-m-d H:i:s")
			];
			$daftar=$this->website->daftarPelanggan($data);
			if ($daftar)
			{
				$datalogin =[
					'nama_user' => $this->input->post('nama_user'),		
					'nama_lengkap'=>$this->input->post('nama_lengkap'),	
					'alamat_lengkap' => $this->input->post('alamat_lengkap'),	
					'no_wa' => $this->input->post('no_wa'),
					'email' => $this->input->post('email'),
					'id_pelanggan'=>$this->db->insert_id()
				];
				$this->session->set_userdata($datalogin);
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Berhasil Daftar</div>');
				redirect(base_url('akun'));
			}
			else
			{
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Gagal Daftar</div>');
				$this->load->view('frontend/pendaftaran');
			}
			

		}
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
		
		redirect(base_url('akun/login'));
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Logout Telah Berhasil. Silahkan Login</div>');
	}

}
