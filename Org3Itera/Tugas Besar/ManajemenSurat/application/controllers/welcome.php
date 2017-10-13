<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function lamanlogin()
	{
		$this->load->view('viewlogin');
	}

	public function login(){
		$user = $this->input->post('user',true);
		$pass = $this->input->post('pass',true);
		$cek  = $this->model_crud->prosesLogin($user,$pass);
		$hasil = count($cek);
		$query = $this->model_crud->getStatus('user',$user);
		$status = $query->status_user;
		if($hasil > 0){
			if($status != "A"){
				redirect('welcome/pageUser');
			} else {
				redirect('welcome/pageAdmin');
			}
			//redirect('welcome/pageUser');
		} else {
			$this->session->set_flashdata('error','     Username atau password salah!');
			redirect('welcome/lamanlogin');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('welcome/lamanlogin');
	}


	public function pageUser(){	
		$this->data['hasil'] = $this->model_crud->getUser('user');
		$this->load->view('luser', $this->data);
	}

	public function LupaPass(){	
		$this->data['hasil'] = $this->model_crud->getUser('user');
		$this->load->view('lupapass', $this->data);
	}


	public function pageBI(){
		$this->load->view('bantuaninformasi');	
	}

	public function pageDataUser()
	{
		$this->data['hasil'] = $this->model_crud->getUser('user');
		$this->load->view('welcome_message', $this->data);
	}

	public function pageAdmin()
	{
		$this->load->view('ladmin');
	}

	public function pageSMuserA()
	{
		$this->data['hasilsm'] = $this->model_crud->getUser('surat_masuk');
		$this->load->view('lsmusera', $this->data);
	}

	public function pageSMuserB()
	{
		$this->data['hasilsm'] = $this->model_crud->getUser('surat_masuk');
		$this->load->view('lsmuser', $this->data);
	}

	public function pageSMuserC()
	{
		$this->data['hasilsm'] = $this->model_crud->getUser('surat_masuk');
		$this->load->view('lsmuserc', $this->data);
	}

	public function pageSKuserA()
	{
		$this->data['hasilsm'] = $this->model_crud->getUser('surat_keluar');
		$this->load->view('lskusera', $this->data);
	}

	public function pageSKuserB()
	{
		$this->data['hasilsm'] = $this->model_crud->getUser('surat_keluar');
		$this->load->view('lskuser', $this->data);
	}

	public function pageSKuserC()
	{
		$this->data['hasilsm'] = $this->model_crud->getUser('surat_keluar');
		$this->load->view('lskuserc', $this->data);
	}


	public function pageSMadmin()
	{
		$this->data['hasilsm'] = $this->model_crud->getUser('surat_masuk');
		$this->load->view('lsmadmin', $this->data);
	}
	public function pageSKadmin()
	{
		$this->data['hasilsk'] = $this->model_crud->getUser('surat_keluar');
		$this->load->view('lskadmin', $this->data);
	}

	public function form_input(){
		$this->load->view('form_input');
	}

	public function form_inputsm(){
		$this->load->view('form_inputsm');
	}

	public function form_inputsk(){
		$this->load->view('form_inputsk');
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
			redirect('welcome/pageDataUser');
		} else {
			echo 'Gagal disimpan';
		}
	}

	public function insertsm(){
		$pengirim 		=$_POST['pengirim'];
		$perihal 		=$_POST['perihal'];
		$nosurat 		=$_POST['nosurat'];
		$tglsuratmasuk 	=$_POST['tglsuratmasuk'];
		$tglmasuksurat	=$_POST['tglmasuksurat'];
		$statussurat 			=$_POST['statussurat'];
		$data = array(
				'pengirim_surat_masuk' 		=> $pengirim,
				'perihal_surat_masuk' 		=> $perihal,
				'no_surat_masuk'			=> $nosurat,
				'tanggal_surat_masuk'		=> $tglsuratmasuk,
				'tanggal_masuk_surat'		=> $tglmasuksurat,
				'status_surat_masuk' 		=> $statussurat
				);
		$tambah = $this->model_crud->tambahDataSM($data);
		if( $tambah > 0 ){
			redirect('welcome/pageSMadmin');
		} else {
			echo 'Gagal disimpan';
		}
	}

		public function insertsk(){
		$penerima 			=$_POST['penerima'];
		$perihal 			=$_POST['perihal'];
		$nosurat 			=$_POST['nosurat'];
		$tglkeluarsurat 	=$_POST['tglkeluarsurat'];
		$filesuratkeluar	=$_POST['filesuratkeluar'];
		$statussuratkeluar 	=$_POST['statussuratkeluar'];
		$data = array(
				'penerima_surat_keluar' 	=> $penerima,
				'perihal_surat_keluar' 		=> $perihal,
				'no_surat_keluar'			=> $nosurat,
				'tanggal_keluar_surat'		=> $tglkeluarsurat,
				'file_surat_keluar'			=> $filesuratkeluar,
				'status_surat_keluar' 		=> $statussuratkeluar
				);
		$tambah = $this->model_crud->tambahDataSK($data);
		if( $tambah > 0 ){
			redirect('welcome/pageSKadmin');
		} else {
			echo 'Gagal disimpan';
		}
	}

	public function delete($id){
		$hapus = $this->model_crud->hapusData('user',$id);
		if( $hapus > 0 ){
			redirect('welcome/pageDataUser');
		} else {
			echo 'Gagal dihapus';
		}
	}

	public function deleteSM($id_surat_masuk){
		$hapus = $this->model_crud->hapusDataSM('surat_masuk',$id_surat_masuk);
		if( $hapus > 0 ){
			redirect('welcome/pageSMadmin');
		} else {
			echo 'Gagal dihapus';
		}
	}

	public function deleteSK($id_surat_keluar){
		$hapus = $this->model_crud->hapusDataSK('surat_keluar',$id_surat_keluar);
		if( $hapus > 0 ){
			redirect('welcome/pageSKadmin');
		} else {
			echo 'Gagal dihapus';
		}
	}


	public function form_edit($id){
		$this->data['dataEdit'] = $this->model_crud->dataEdit('user',$id);
		$this->load->view('form_edit',$this->data);
	}

	public function form_editsm($id_surat_masuk){
		$this->data['dataEdit'] = $this->model_crud->dataEditSM('surat_masuk',$id_surat_masuk);
		$this->load->view('form_editsm',$this->data);
	}

	public function form_editsk($id_surat_keluar){
		$this->data['dataEdit'] = $this->model_crud->dataEditSK('surat_keluar',$id_surat_keluar);
		$this->load->view('form_editsk',$this->data);
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
			redirect('welcome/pageDataUser');
		} else {
			echo 'Gagal disimpan';
		}
	}

	public function updateSM($id_surat_masuk){
		$pengirim_surat_masuk 		=$_POST['pengirim_surat_masuk'];
		$perihal_surat_masuk 		=$_POST['perihal_surat_masuk'];
		$no_surat_masuk 			=$_POST['no_surat_masuk'];
		$tanggal_surat_masuk		=$_POST['tanggal_surat_masuk'];
		$tanggal_masuk_surat 		=$_POST['tanggal_masuk_surat'];
		$status_surat_masuk 		=$_POST['status_surat_masuk'];
		$data = array(
				'pengirim_surat_masuk' 		=> $pengirim_surat_masuk,
				'perihal_surat_masuk' 		=> $perihal_surat_masuk,
				'no_surat_masuk'			=> $no_surat_masuk,
				'tanggal_surat_masuk'		=> $tanggal_surat_masuk,
				'tanggal_masuk_surat'		=> $tanggal_masuk_surat,
				'status_surat_masuk' 		=> $status_surat_masuk
				);
		$edit = $this->model_crud->editDataSM('surat_masuk',$data,$id_surat_masuk);
		if( $edit > 0 ){
			redirect('welcome/pageSMadmin');
		} else {
			echo 'Gagal disimpan';
		}
	}

	public function updateSK($id_surat_keluar){
		$penerima_surat_keluar 		=$_POST['penerima_surat_keluar'];
		$perihal_surat_keluar 		=$_POST['perihal_surat_keluar'];
		$no_surat_keluar 			=$_POST['no_surat_keluar'];
		$tanggal_keluar_surat		=$_POST['tanggal_keluar_surat'];
		$file_surat_keluar	 		=$_POST['file_surat_keluar'];
		$status_surat_keluar 		=$_POST['status_surat_keluar'];
		$data = array(
				'penerima_surat_keluar' 	=> $penerima_surat_keluar,
				'perihal_surat_keluar' 		=> $perihal_surat_keluar,
				'no_surat_keluar'			=> $no_surat_keluar,
				'tanggal_keluar_surat'		=> $tanggal_keluar_surat,
				'file_surat_keluar'		=> $file_surat_keluar,
				'status_surat_keluar' 		=> $status_surat_keluar
				);
		$edit = $this->model_crud->editDataSK('surat_keluar',$data,$id_surat_keluar);
		if( $edit > 0 ){
			redirect('welcome/pageSKadmin');
		} else {
			echo 'Gagal disimpan';
		}
	}
}

