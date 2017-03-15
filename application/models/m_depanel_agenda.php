<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class M_depanel_agenda extends CI_Model{

	function tampil_data_agenda(){
		return $this->db->get('agenda');
	}

	function hapus_data_agenda($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data_agenda($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function detail_data_agenda($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}



}

?>