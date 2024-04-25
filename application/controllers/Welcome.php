<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_welcome','model');
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function index($kode = FALSE)
	{
		$data['hasil'] = $this->model->read();
		$this->load->view('table', $data);
	}

	// public function create()
	// {
	// 	$this->load->helper('form');
	// 	$this->load->library('form_validation');

	// 	$this->form_validation->set_rules('name', 'Name', 'required|max_length[30]');
	// 	$this->form_validation->set_rules('description', 'Description', 'required');

	// 	if ($this->form_validation->run() == FALSE) {
			
	// 		$this->load->view('header');
	// 		$this->load->view('create');
	// 		$this->load->view('footer');
	// 	}else{
	// 		$kode = uniqid('item', TRUE);

	// 		$config['upload_path'] = './asset/uploads/post';
	// 		$config['allowed_types'] = 'jpg|png|jpeg';
	// 		$config['max_size'] = '1000000';
	// 		$config['file_ext_tolower'] = TRUE;
	// 		$config['filename'] = str_replace('.','_',$kode);

	// 		$this->load->library('upload', $config);

	// 		if  (!$this->upload->do_upload('image')){
	// 			$this->session->set_flashdata('error', $this->upload->display_errors());
	// 			redirect('welcome/index');
	// 		}else{
	// 			$filename = $this->upload->data('file_name');
	// 			$this->model->create($kode, $filename);
	// 			redirect();
	// 		}
	// 	}

	// }

	public function update($kode) // ubah menjadi update
{
    $this->load->helper('form');
    $this->load->library('form_validation');

    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('harga', 'Harga', 'required');
    $this->form_validation->set_rules('stock', 'Stock', 'required');
	$this->form_validation->set_rules('jenis', 'Jenis', 'required');
	$this->form_validation->set_rules('perusahaan', 'Perusahaan', 'required');

    if ($this->form_validation->run() == FALSE) {
        $data['barang'] = $this->model->read($kode);
        $this->load->view('update', $data);
    } else {
        if (!empty($_FILES['image']['name'])) { 
            $post = $this->model->read($kode);
            $config['upload_path'] = './asset/images'; // Ubah 'asset' menjadi 'assets' sesuai dengan struktur folder Anda
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = '1000000';
            $config['file_ext_tolower'] = TRUE;
            $config['overwrite'] = TRUE; // tambahkan overwrite untuk menimpa file yang ada
            // Ubah $gambar menjadi 'gambar' karena $gambar tidak didefinisikan dalam konteks ini
            $config['file_name'] = $post->gambar;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                echo '<script>console.log("eror");</script>';
            } else {
                $this->model->update($kode);
				echo '<script>console.log("Upload successful");</script>';
                redirect();
            }
        } else {
            $this->model->update($kode);
			echo '<script>console.log("No image uploaded");</script>';
            redirect();
        }
    }
}


	// public function delete($kode = FALSE){
	// 	$post = $this->model->read($kode);
	// 	$this->model->delete($kode);

	// 	unlink('./asset/uploads/post/'. $post->filename);
	// 	redirect();
	// }

	// public function deleteAll($kode = FALSE){
	// 	$this->model->deleteAll();

	// 	$directory = './asset/uploads/post/';

	// 	// Mendapatkan daftar semua file dalam direktori
	// 	$files = glob($directory . '*');

	// 	// Menghapus setiap file
	// 	foreach ($files as $file) {
	// 		if (is_file($file)) {
	// 			unlink($file);
	// 		}
	// 	}

	// 	// Redirect atau tindakan lainnya setelah menghapus semua file
	// 	redirect();
	// }

}
