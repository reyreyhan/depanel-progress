<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class M_depanel extends CI_Model{

	function tampil_data_newsflash($limit,$id){
		$this->db->order_by("id", "desc");
		return $this->db->get('newsflash',$limit,$id);
	}

	function jumlah_data(){
		return $this->db->get('newsflash')->num_rows();
	}

    function search($keyword)
    {
    	$this->db->order_by("id", "desc");
        $this->db->like('judul',$keyword);
        $this->db->select('*');
    	$this->db->from('newsflash');
   		$query  =   $this->db->get();
        return $query->result();
    }

	function hapus_data_newsflash($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function hapus_gambar_newsflash($where,$table) {
		$data = $this->db->get_where('newsflash',array($where=>$table))->result();
		if(empty($data)) {
			return null;
		} else {
			return $data[0];
		}
	}

	function drop($id) {	
		return $this->db->delete('newsflash', array('id' => $id));
	}


	function edit_data_newsflash($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function edit_data_newsflash2(){		
		//return $this->db->get_where($table,$where);
  		$this->db->select('*');
    	$this->db->from('newsflash');
   		return $this->db->get();	
	}

	function update($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}



}

?>