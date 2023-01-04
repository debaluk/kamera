<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('Website_model', 'website');
    }

	public function index()
	{

		$data['kontak']=$this->website->get_Profile();		
		$this->load->view('frontend/kontak',$data);
		
	}
}
