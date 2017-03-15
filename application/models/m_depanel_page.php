<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class M_depanel_page extends CI_Model{


	function tampil_data_page($limit,$id){
		$this->db->order_by("id", "desc");
		return $this->db->get('page',$limit,$id);
	}

	function tampil_data_page_about_pens(){
		$this->db->where('kategori','Tentang Pens');
		$this->db->order_by("id", "desc");
		return $this->db->get('page');
	}

    function search($keyword)
    {

        $this->db->like('judul_id',$keyword);
        $query  =   $this->db->get('page');
        return $query->result();
    }

	function jumlah_data(){
		return $this->db->get('page')->num_rows();
	}

	function edit_data_page($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function hapus_data_page($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function hapus_gambar_page($where,$table) {
		$data = $this->db->get_where('page',array($where=>$table))->result();
		if(empty($data)) {
			return null;
		} else {
			return $data[0];
		}
	}

/*	function tampil_data_post_penulis(){
		//return $this->db->get('post');
		$this->db->select('*');
    	$this->db->from('pengguna');
   		$this->db->join('post', 'post.id_penulis = pengguna.id');
   		return $this->db->get();
	}*/

	/*function tampil_data_post_penulis(){
		$this->db->like('jabatan', 'penulis');
		$this->db->from('pengguna');
		return $this->db->get();
	}

	function tampil_data_post_editor(){
		$this->db->like('jabatan', 'editor');
		$this->db->from('pengguna');
		return $this->db->get();
	}

	function tampil_data_post_poto(){
		$this->db->like('jabatan', 'fotografer');
		$this->db->from('pengguna');
		return $this->db->get();
	}

	function tampil_data_post_penulis_e($table,$where){
		$this->db->like('jabatan', 'penulis');
		$this->db->from('pengguna');
		return $this->db->get_where($table,$where);
	}

	function tampil_data_post_editor_e($table,$where){
		$this->db->like('jabatan', 'editor');
		$this->db->from('pengguna');
		return $this->db->get_where($table,$where);
	}

	function tampil_data_post_poto_e($table,$where){
		$this->db->like('jabatan', 'fotografer');
		$this->db->from('pengguna');
		return $this->db->get_where($table,$where);
	}

	function hapus_data_post($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function hapus_gambar_post($where,$table) {
		$data = $this->db->get_where('post',array($where=>$table))->result();
		if(empty($data)) {
			return null;
		} else {
			return $data[0];
		}
	}

	function edit_data_post($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function detail_data_post($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}*/



}

?>