<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class M_depanel_anggota extends CI_Model{

	function tampil_data_anggota($limit,$id_pengguna){
		return $this->db->get('pengguna',$limit,$id_pengguna);

	}

	function tampil_data_anggota2(){
		return $this->db->get('pengguna');
	}
	
 	function anggota_session(){
		return $this->db->get('pengguna');

	}

    function search($keyword)
    {
        $this->db->like('nama',$keyword);
        $this->db->select('*');
        $this->db->order_by("id_pengguna", "desc");
    	$this->db->from('pengguna');
   		$query =  $this->db->get('');
        return $query->result();
    }

    function search_login($A)
    {
        $this->db->like('nama',$A);
        $this->db->select('*');
        $this->db->order_by("id_pengguna", "desc");
    	$this->db->from('pengguna');
   		$query =  $this->db->get();
        return $query->result();
    }

	function jumlah_data(){
		return $this->db->get('pengguna')->num_rows();
	}


	function hapus_data_anggota($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function hapus_gambar_anggota($where,$table) {
		$data = $this->db->get_where('jabatan',array($where=>$table))->result();
		if(empty($data)) {
			return null;
		} else {
			return $data[0];
		}
	}

	function edit_data_anggota($where,$data){		
		return $this->db->get_where($data,$where);
	}

	function update($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function s_a($where,$anggota){		
   		return $this->db->get_where($post,$anggota);
	}



}

?>