<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class M_depanel_banner extends CI_Model{

	function tampil_data_banner($limit,$id){
		$this->db->order_by("id", "desc");
		return $this->db->get('banner',$limit,$id);
	}

	function jumlah_data(){
		return $this->db->get('banner')->num_rows();
	}

    function search($keyword)
    {
    	$this->db->order_by("id", "desc");
        $this->db->like('judul',$keyword);
        $this->db->select('*');
    	$this->db->from('banner');
   		$query  =   $this->db->get();
        return $query->result();
    }

	function hapus_data_banner($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function hapus_gambar_banner($where,$table) {
		$data = $this->db->get_where('banner',array($where=>$table))->result();
		if(empty($data)) {
			return null;
		} else {
			return $data[0];
		}
	}


	function edit_data_banner($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}



}

?>