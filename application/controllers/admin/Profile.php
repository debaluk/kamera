<?php
/*
	controller datakategori
	hanya user level admin boleh akses halaman datakategori
*/
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dataprofile_model', 'profile');
    }
    public function index()
    {
        //jika session user_id dan level nya nol
        if (!empty($_SESSION['id_user'])) {
            //maka baca data kategori, yang berada di model kategori subclass list_kategori
            $data['profile'] = $this->profile->detail_profile(1);
            //menampilkan halaman dan tampilkan data kategori
            $this->load->view('backend/profile', $data);
        } else {
            //jika session user id dan level kosong akan menuju ke halaman login
            $this->load->view('backend/login');
        }
    }

    public function update()
    {
    
        $data_update = array(
            'profile' => $this->input->post('profile'),
            'no_wa' => $this->input->post('no_wa'),
            'alamat'   => $this->input->post('alamat'),
            'alamat_fb'   => $this->input->post('alamat_fb'),
            'alamat_ig'   => $this->input->post('alamat_ig')
        );
        $this->profile->update('1',$data_update, 'profile');
        $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Profile berhasil di update</div>');
        redirect('admin/profile');
        
    }
    
}
