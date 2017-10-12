<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function lamanlogin()
	{
		$this->load->view('viewlogin');
	}

	public function login(){
		$user = $this->input->post('user',true);
		$pass = $this->input->post('pass',true);
		$cek = $this->model_crud->prosesLogin($user,$pass);
		$hasil = count($cek);
		if($hasil>0){
			redirect('welcome/pageUser');
		} else {
			$this->session->set_flashdata('error','     Username atau password salah!');
			redirect('welcome/lamanlogin');
		}
	}

	public function pageUser()
	{
		$this->data['hasil'] = $this->model_crud->getUser('user');
		$this->load->view('welcome_message', $this->data);
	}

	public function form_input(){
		$this->load->view('form_input');
	}

	public function insert(){
		$username 		=$_POST['username'];
		$password 		=$_POST['password'];
		$namalengkap 	=$_POST['namalengkap'];
		$jabatan 		=$_POST['jabatan'];
		$statususer 	=$_POST['statususer'];
		$email 			=$_POST['email'];
		$data = array(
				'username' 		=> $username,
				'password' 		=> $password,
				'nama_lengkap'	=> $namalengkap,
				'jabatan'		=> $jabatan,
				'status_user'	=> $statususer,
				'email' 		=> $email
				);
		$tambah = $this->model_crud->tambahData($data);
		if( $tambah > 0 ){
			redirect('welcome');
		} else {
			echo 'Gagal disimpan';
		}
	}

	public function delete($id){
		$hapus = $this->model_crud->hapusData('user',$id);
		if( $hapus > 0 ){
			redirect('welcome');
		} else {
			echo 'Gagal dihapus';
		}
	}


	public function form_edit($id){
		$this->data['dataEdit'] = $this->model_crud->dataEdit('user',$id);
		$this->load->view('form_edit',$this->data);
	}

	public function update($id){
		$username 		=$_POST['username'];
		$password 		=$_POST['password'];
		$namalengkap 	=$_POST['namalengkap'];
		$jabatan 		=$_POST['jabatan'];
		$statususer 	=$_POST['statususer'];
		$email 			=$_POST['email'];
		$data = array(
				'username' 		=> $username,
				'password' 		=> $password,
				'nama_lengkap'	=> $namalengkap,
				'jabatan'		=> $jabatan,
				'status_user'	=> $statususer,
				'email' 		=> $email
				);
		$edit = $this->model_crud->editData('user',$data,$id);
		if( $edit > 0 ){
			redirect('welcome/index');
		} else {
			echo 'Gagal disimpan';
		}
	}
}

