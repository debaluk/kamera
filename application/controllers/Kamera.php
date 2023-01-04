<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamera extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('Website_model', 'website');
    }

	public function index()
	{

		$data['kamera']=$this->website->get_Semuakamera();		
		$this->load->view('frontend/kamera',$data);
		
	}
}
