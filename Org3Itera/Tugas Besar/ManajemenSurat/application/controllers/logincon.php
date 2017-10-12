<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logincon extends CI_Controller {

	
	public function index()
	{
		$this->load->view('viewlogin');
	}

	public function login(){
		$user = $this->input->post('user',true);
		$pass = $this->input->post('pass',true);
		$cek = $this->login_model->prosesLogin($user,$pass);
		$hasil = count($cek);
		if($hasil>0){
			redirect('logincon/pageUser');
		} else {
			$this->session->set_flashdata('error','     Username atau password salah!');
			redirect('logincon/index');
		}
	}

	public function pageUser(){
		$this->load->view('welcome/index');
	}
}

