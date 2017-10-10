<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_smasuk extends CI_Model {

	public function all(){
		//query semua record di table smasuk
		$hasil = $this->db->get('surat_masuk');
		if($hasil->num_rows() > 0 ){
			return $hasil->result();
		} else {
			return array();
		}
	}

	public function find($id_surat_masuk){
		//Query mencari record berdasarkan id
		$hasil = $this->db->where('id_surat_masuk', $id_surat_masuk)
						  ->limit(1)
						  ->get('surat_masuk');
			if($hasil-> num_rows() > 0){
				return $hasil->row();
			} else {
				return array();
			}

	}

	public function regristrasisurat($data_smasuk){
		//Query insert into
		$this->db->insert('surat_masuk',$data_smasuk);

	}

	public function suntingsurat($id_surat_masuk){
		//Query update from... where id=...
		$this->db->where('id_surat_masuk',$id_surat_masuk)
				 ->update('surat_masuk', $data_smasuk);
	}

	public function hapus($id_surat_masuk){
		//Query Delete ... where id=...
		$this->db->where('id_surat_masuk',$id_surat_masuk)
				 ->delete('surat_masuk');

	}
}