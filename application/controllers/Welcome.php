<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('Website_model', 'website');
    }

	public function index()
	{

		$data['merek']=$this->website->get_SemuaMerek();		
		$this->load->view('frontend/home',$data);
		
	}
}
