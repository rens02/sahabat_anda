<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_welcome','model');
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function index($id = FALSE)
	{
		if ($id === FALSE){
			$data['home_post'] = $this->model->read();
			$this->load->view('header');
			$this->load->view('home', $data);
			$this->load->view('footer');
		}else{
			$data['post'] = $this->model->read($id);
			$this->load->view('header');
			$this->load->view('post', $data);
			$this->load->view('footer');
		}
	}

	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'Name', 'required|max_length[30]');
		$this->form_validation->set_rules('description', 'Description', 'required');

		if ($this->form_validation->run() == FALSE) {
			
			$this->load->view('header');
			$this->load->view('create');
			$this->load->view('footer');
		}else{
			$id = uniqid('item', TRUE);

			$config['upload_path'] = './asset/uploads/post';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size'] = '1000000';
			$config['file_ext_tolower'] = TRUE;
			$config['filename'] = str_replace('.','_',$id);

			$this->load->library('upload', $config);

			if  (!$this->upload->do_upload('image')){
				$this->session->set_flashdata('error', $this->upload->display_errors());
				redirect('welcome/index');
			}else{
				$filename = $this->upload->data('file_name');
				$this->model->create($id, $filename);
				redirect();
			}
		}

	}

	public function update($id)//ubah menjadi update
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'Name', 'required|max_length[30]');
		$this->form_validation->set_rules('description', 'Description', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data['post'] = $this->model->read($id); //tambhakan data dari tabel post
			$this->load->view('header');
			$this->load->view('update', $data); //ubah menjadi post dan beri data
			$this->load->view('footer');
		}else{
			if($this->input->post('file')){ //hapus uniqid lalu buatlah sebuah kondisi dimana jika dia mengupdate gambar
				$post = $this->model->read($id);
				$config['upload_path'] = './asset/uploads/post';
				$config['allowed_types'] = 'jpg|png|jpeg';
				$config['max_size'] = '1000000';
				$config['file_ext_tolower'] = TRUE;
				$config['overwrite'] = TRUE;//tambahkan overwrite untuk menimpa file yang ada
				$config['file_name'] = $post->filename;

				$this->load->library('upload', $config);

				if  (!$this->upload->do_upload('image')){
					$this->session->set_flashdata('error', $this->upload->display_errors());
					redirect('welcome/update/'.$id);
				}else{
					$this->model->update($id);
					redirect();
				}
			}else{
				$this->model->update($id);
				redirect();
			}	
		}

	}

	public function delete($id = FALSE){
		$post = $this->model->read($id);
		$this->model->delete($id);

		unlink('./asset/uploads/post/'. $post->filename);
		redirect();
	}

	public function deleteAll($id = FALSE){
		$this->model->deleteAll();

		$directory = './asset/uploads/post/';

		// Mendapatkan daftar semua file dalam direktori
		$files = glob($directory . '*');

		// Menghapus setiap file
		foreach ($files as $file) {
			if (is_file($file)) {
				unlink($file);
			}
		}

		// Redirect atau tindakan lainnya setelah menghapus semua file
		redirect();
	}

}
