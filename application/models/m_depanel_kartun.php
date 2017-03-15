<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class M_depanel_kartun extends CI_Model{

	function tampil_data_kartun($limit,$id){
		$this->db->order_by("id", "desc");
		return $this->db->get('kartun',$limit,$id);
	}

	function jumlah_data(){
		return $this->db->get('kartun')->num_rows();
	}

    function search($keyword)
    {
    	$this->db->order_by("id", "desc");
        $this->db->like('judul',$keyword);
        $this->db->select('*');
    	$this->db->from('kartun');
   		$query  =   $this->db->get();
        return $query->result();
    }

	function hapus_data_kartun($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function hapus_gambar_kartun($where,$table) {
		$data = $this->db->get_where('kartun',array($where=>$table))->result();
		if(empty($data)) {
			return null;
		} else {
			return $data[0];
		}
	}

	function edit_data_kartun($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}



}

?>