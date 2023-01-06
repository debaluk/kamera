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

		$data['merek']=$this->website->get_Semuamerek();	
		$data['kamera']=$this->website->get_Semuakamera();		
		$this->load->view('frontend/kamera',$data);
		
	}

	public function detail($idkamera)
	{

		$data['merek']=$this->website->get_Semuamerek();	
		$data['kamera']=$this->website->get_Semuakamera();
		$data['detailkamera']=$this->website->get_KameraById($idkamera);		
		$this->load->view('frontend/kamera_detail',$data);
		
	}

	public function sewa($idkamera)
	{

		$data['detailkamera']=$this->website->get_KameraById($idkamera);		
		$this->load->view('frontend/kamera_sewa',$data);
		
	}

}
