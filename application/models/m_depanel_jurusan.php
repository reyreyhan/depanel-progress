<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class M_depanel_jurusan extends CI_Model{

	function d_d() {
		return $this->db->get('departemen');
	}

	function tampil_data_jurusan($limit,$id){
		
		$this->db->select('*');
    	$this->db->from('departemen');
   		$this->db->join('jurusan', 'jurusan.id_departemen = departemen.id');

		return $this->db->get('',$limit,$id);
	}

	function tampil_data_jurusan_no_limit(){
		return $this->db->get('jurusan');
	}

	function jumlah_data(){
		return $this->db->get('jurusan')->num_rows();
	}

    function search($keyword)
    {
        $this->db->like('nama',$keyword);
        $this->db->select('*');
    	$this->db->from('departemen');
   		$this->db->join('jurusan', 'jurusan.id_departemen = departemen.id');
   		$query =  $this->db->get();
        return $query->result();
    }


	function hapus_data_jurusan($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function hapus_gambar_jurusan($where,$table) {
		$data = $this->db->get_where('jurusan',array($where=>$table))->result();
		if(empty($data)) {
			return null;
		} else {
			return $data[0];
		}
	}

	function edit_data_jurusan($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}



}

?>