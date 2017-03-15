<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class M_depanel_kategori extends CI_Model{

	function tampil_data_kategori(){
		return $this->db->get('kategori');
	}

	function hapus_data_kategori($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function hapus_gambar_kategori($where,$table) {
		$data = $this->db->get_where('kategori',array($where=>$table))->result();
		if(empty($data)) {
			return null;
		} else {
			return $data[0];
		}
	}

	function edit_data_kategori($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}



}

?>