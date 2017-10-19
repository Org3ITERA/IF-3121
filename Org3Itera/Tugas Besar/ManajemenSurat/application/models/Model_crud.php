<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_crud extends CI_Model {

	public function prosesLogin($user,$pass)
	{
		$this->db->where('username',$user);
		$this->db->where('password',$pass);
		return $this->db->get('user')->row();
	}

	public function prosesVerifikasi($email){
		$this->db->where('email',$email);
		return $this->db->get('user')->row();
	}

	public function getStatus($table_name,$user){
		$this->db->where('username',$user);
		$query = $this->db->get($table_name);
		return $query->row();
	}

	public function getUser($table_name)
	{
		$get_user = $this->db->get($table_name);
		return $get_user->result_array();
	}

	public function tambahData($data)
	{
		$tambah = $this->db->insert('user',$data);
		return $tambah;
	}

	public function tambahDataSM($data)
	{
		$tambah = $this->db->insert('surat_masuk',$data);
		return $tambah;
	}

	public function tambahDataSK($data)
	{
		$tambah = $this->db->insert('surat_keluar',$data);
		return $tambah;
	}

	public function editData($table_name,$data,$id)
	{
		$this->db->where('id',$id);
		$edit = $this->db->update($table_name,$data);
		return $edit;
	}

	public function editDataSM($table_name,$data,$id_surat_masuk)
	{
		$this->db->where('id_surat_masuk',$id_surat_masuk);
		$edit = $this->db->update($table_name,$data);
		return $edit;
	}

	public function editDataSK($table_name,$data,$id_surat_keluar)
	{
		$this->db->where('id_surat_keluar',$id_surat_keluar);
		$edit = $this->db->update($table_name,$data);
		return $edit;
	}

	public function hapusData($table_name,$id)
	{
		$this->db->where('id',$id);
		$hapus = $this->db->delete($table_name);
		return $hapus;
	}

	public function hapusDataSM($table_name,$id_surat_masuk)
	{
		$this->db->where('id_surat_masuk',$id_surat_masuk);
		$hapus = $this->db->delete($table_name);
		return $hapus;
	}

	public function hapusDataSK($table_name,$id_surat_keluar)
	{
		$this->db->where('id_surat_keluar',$id_surat_keluar);
		$hapus = $this->db->delete($table_name);
		return $hapus;
	}


	public function dataEdit($table_name,$id)
	{
		$this->db->where('id',$id);
		$get_user = $this->db->get($table_name);
		return $get_user->row();
	}

	public function dataEditSM($table_name,$id_surat_masuk)
	{
		$this->db->where('id_surat_masuk',$id_surat_masuk);
		$get_user = $this->db->get($table_name);
		return $get_user->row();
	}

	public function dataEditSK($table_name,$id_surat_keluar)
	{
		$this->db->where('id_surat_keluar',$id_surat_keluar);
		$get_user = $this->db->get($table_name);
		return $get_user->row();
	}

}
