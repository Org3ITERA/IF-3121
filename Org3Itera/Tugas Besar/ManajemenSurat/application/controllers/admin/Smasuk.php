<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Smasuk extends CI_Controller {

	 public function __construct()
        {
                parent::__construct();
                //load model -> model_smasuk
                $this->load->model('model_smasuk');
        }

	public function index()
	{
		$data['surat_masuk'] = $this->model_smasuk->all();
		$this->load->view('backend/view_all_smasuk',$data);
	}

	public function regristrasisurat(){
		//form validation sebelum mengeksekusi query insert
		$this->form_validation->set_rules('pengirim_surat_masuk', 'Pengirim', 'required');
		$this->form_validation->set_rules('perihal_surat_masuk', 'Perihal', 'required');
		$this->form_validation->set_rules('no_surat_masuk', 'No. Surat', 'required');
		$this->form_validation->set_rules('tanggal_masuk_surat', 'Tanggal Masuk Surat', 'required|date');
		$this->form_validation->set_rules('tanggal_surat_masuk', 'Tanggal Surat', 'required|date');
		//$this->form_validation->set_rules('userfile', 'File', 'required');

                if ($this->form_validation->run() == FALSE)
                {
					$this->load->view('backend/form_regristrasisurat');
				} else {
					//load uploading file library
					$config['upload_path'] = './upload/';
					$config['allowed_types'] = 'doc|docx|pdf';
					$config['max_size'] = '300'; //mb
					$config['max_width'] = '2000'; 
					$config['max_height'] = '2000';

					$this->load->library('upload',$config);

					if ( ! $this->upload->do_upload()){
						$this->load->view('backend/form_regristrasisurat');
						//file gagal di upload
						//kembali ke form create
					} else {
						//file berhasil di upload lanjutkan ke query insert
						// eksekusi query insert
						$file = $this->upload->data();
						$data_smasuk = array(
							'pengirim_surat_masuk' => set_value('pengirim_surat_masuk'),
							'perihal_surat_masuk'  => set_value('perihal_surat_masuk'),
							'no_surat_masuk'       => set_value('no_surat_masuk'),
							'tanggal_masuk_surat'  => set_value('tanggal_masuk_surat'),
							'tanggal_surat_masuk'  => set_value('tanggal_surat_masuk'),
							'userfile'				   => $file['file_name']
						);

					$this-> model_smasuk->regristrasisurat($data_smasuk);
					redirect('admin/smasuk');
					}

					
				}
	}

	public function suntingsurat($id_surat_masuk){
		$this->form_validation->set_rules('pengirim_surat_masuk', 'Pengirim', 'required');
		$this->form_validation->set_rules('perihal_surat_masuk', 'Perihal', 'required');
		$this->form_validation->set_rules('no_surat_masuk', 'No. Surat', 'required');
		$this->form_validation->set_rules('tanggal_masuk_surat', 'Tanggal Masuk Surat', 'required|date');
		$this->form_validation->set_rules('tanggal_surat_masuk', 'Tanggal Surat', 'required|date');
		

        if ($this->form_validation ->run() == FALSE)
        {
        	$data['smasuk'] = $this-> model_smasuk ->find ($id_surat_masuk);
			$this->load->view('backend/form_suntingsurat', $data);
		} else {
			$data_smasuk = array(
				'pengirim_surat_masuk' => set_value('pengirim_surat_masuk'),
				'perihal_surat_masuk'  => set_value('perihal_surat_masuk'),
				'no_surat_masuk'       => set_value('no_surat_masuk'),
				'tanggal_masuk_surat'  => set_value('tanggal_masuk_surat'),
				'tanggal_surat_masuk'  => set_value('tanggal_surat_masuk')
							);
			$this-> model_smasuk-> suntingsurat($id_surat_masuk, $data_smasuk);
			redirect ('admin/smasuk');
		}
		
	}

	public function hapus($id_surat_masuk){
		$this-> model_smasuk ->delete($id_surat_masuk);
		redirect('admin/smasuk');
	}
}
