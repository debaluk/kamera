<?php
/*
	controller datakategori
	hanya user level admin boleh akses halaman datakategori
*/
defined('BASEPATH') or exit('No direct script access allowed');

class Datakamera extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Datakamera_model', 'kamera');
    }
    public function index()
    {
        //jika session user_id dan level nya nol
        if (!empty($_SESSION['id_user'])) {
            //maka baca data kategori, yang berada di model kategori subclass list_kategori
            $data['kamera'] = $this->kamera->list_kamera();
            //menampilkan halaman dan tampilkan data kategori
            $this->load->view('backend/datakamera', $data);
        } else {
            //jika session user id dan level kosong akan menuju ke halaman login
            $this->load->view('backend/login');
        }
    }

    // proses simpan berita
    public function simpan()
    {
        // jika file tidak kosong
        if (!empty($_FILES)) {
            $config['upload_path']          = getcwd() . '/assets/images/'; //lokasi penyimpan file yang diupload ada difolder upload
            $config['allowed_types']        = 'gif|jpg|png|jpeg|PNG'; //type file yang diizinkan untuk diupload
            $config['encrypt_name']         = true; // encrypt_name = true artinya file yang diupload diencrypt secara acak jika false nama filenya utuh sesuai nama filenya
            //proses upload sesuai dengan konfigurasi ( keterangan diatasnya )
            $this->load->library('upload', $config);
            //jika tidak berhasil upload gambar akan muncul pesan error " contoh upload doc/pdf< karena tidak sesuai dengan konfigurasi diawal
            if (!$this->upload->do_upload('gambar')) {
                $error = 'File Yang Anda Upload Tidak Sesuai!'; /*array('error' => $this->upload->display_errors());*/
                print_r($error);
            } else {
                //data sama dengan proses upload
                $data = array('upload_data' => $this->upload->data()); //variabel data menampung nilai proses upload
                $filename = $data['upload_data']['file_name']; //nama file diambil dari nama file proses upload
                $data_update = array(
                    'id_kamera' => $this->input->post('id_kamera'),
                    'nama_kamera' => $this->input->post('nama_kamera'),
                    'id_merek' => $this->input->post('id_merek'),
                    'spesifikasi' => $this->input->post('spesifikasi'),
                    'stok'   => $this->input->post('stok'),
                    'harga_sewa'   => $this->input->post('harga_sewa')
                );
                $this->kamera->simpan($data_update, 'kamera');
                redirect('admin/datakamera');
            }
        }
    }

    public function tambahkamera()
    {
        // $data['merek'] = $this->merek->list_merek();
        $this->load->view('backend/tambahkamera');
    }

    public function editkamera()
    {
        // $data['kategori'] = $this->kategori->list_kategori();
        //$data['berita'] = $this->berita->ambilberita(array('idberita' => $idberita));
        $this->load->view('backend/editkamera');
    }

    public function update()
    {
    }
    public function hapus($id)
    {
        $this->kamera->hapus(array('id_kamera' => $id)); {
            redirect('admin/datakamera');
        }
    }
}
