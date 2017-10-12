<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_crud extends CI_Model {

	public function prosesLogin($user,$pass)
	{
		$this->db->where('username',$user);
		$this->db->where('password',$pass);
		return $this->db->get('user')->row();
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

	public function editData($table_name,$data,$id)
	{
		$this->db->where('id',$id);
		$edit = $this->db->update($table_name,$data);
		return $edit;
	}

	public function hapusData($table_name,$id)
	{
		$this->db->where('id',$id);
		$hapus = $this->db->delete($table_name);
		return $hapus;
	}

	public function dataEdit($table_name,$id)
	{
		$this->db->where('id',$id);
		$get_user = $this->db->get($table_name);
		return $get_user->row();
	}

}
