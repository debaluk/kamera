<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('Website_model', 'website');
    }

	public function index()
	{

		$data['profile']=$this->website->get_Profile();		
		$this->load->view('frontend/profile',$data);
		
	}
}
