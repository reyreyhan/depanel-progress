<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class M_depanel_departemen extends CI_Model{


    function detail_data_departemen($where,$table){
        return $this->db->get_where($table,$where);
    }

	function tampil_data_departemen(){
		return $this->db->get('departemen');
	}

	function jumlah_data(){
		return $this->db->get('departemen')->num_rows();
	}

    function search($keyword)
    {
        $this->db->like('nama_dp',$keyword);
        $this->db->select('*');
    	$this->db->from('departemen');
   		$query =  $this->db->get();
        return $query->result();
    }


	function hapus_data_departemen($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function hapus_gambar_departemen($where,$table) {
		$data = $this->db->get_where('departemen',array($where=>$table))->result();
		if(empty($data)) {
			return null;
		} else {
			return $data[0];
		}
	}

	function hapus_gambar_departemen_k($where,$table) {
		$data = $this->db->get_where('departemen',array($where=>$table))->result();
		if(empty($data)) {
			return null;
		} else {
			return $data[0];
		}
	}


	function edit_data_departemen($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

    function elka() {
        $this->db->select('*');
        $this->db->from('departemen');
        $this->db->join('jurusan', 'jurusan.id_departemen = departemen.id');
        $this->db->where('id_departemen','28');
        return $this->db->get();
    }

    function itce() {
        $this->db->select('*');
        $this->db->from('departemen');
        $this->db->join('jurusan', 'jurusan.id_departemen = departemen.id');
        $this->db->where('id_departemen','29');
        return $this->db->get();
    }

    function me() {
        $this->db->select('*');
        $this->db->from('departemen');
        $this->db->join('jurusan', 'jurusan.id_departemen = departemen.id');
        $this->db->where('id_departemen','30');
        return $this->db->get();
    }

    function mmk() {
        $this->db->select('*');
        $this->db->from('departemen');
        $this->db->join('jurusan', 'jurusan.id_departemen = departemen.id');
        $this->db->where('id_departemen','34');
        return $this->db->get();
    }


}

?>