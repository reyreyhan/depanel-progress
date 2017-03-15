<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class M_depanel_post extends CI_Model{



	function tampil_data_post($limit,$id){
		//return $this->db->get('post');
		$this->db->select('*');
    	$this->db->from('kategori');
   		$this->db->join('post', 'post.id_kategori = kategori.id_kategori');
   		$this->db->where('id_editor',$this->session->userdata("nama"));
   		$this->db->order_by("id", "desc");
   		return $this->db->get('',$limit,$id);
	}


	function tampil_data_post_admin($limit,$id){
		//return $this->db->get('post');
		$this->db->select('*');
    	$this->db->from('kategori');
   		$this->db->join('post', 'post.id_kategori = kategori.id_kategori');
   		//$this->db->where('id_editor',$this->session->userdata("nama"));
   		$this->db->order_by("id", "desc");
   		return $this->db->get('',$limit,$id);
	}


	function tampil_data_postF($limit) {
		$this->db->select('*');
    	$this->db->from('kategori');
   		$this->db->join('post', 'post.id_kategori = kategori.id_kategori');
   		$this->db->order_by("id", "desc");
   		$this->db->where('featured','1');
   		return $this->db->get('',$limit);
	}

	function tampil_data_postNF($limit) {
		$this->db->select('*');
    	$this->db->from('kategori');
   		$this->db->join('post', 'post.id_kategori = kategori.id_kategori');
   		$this->db->order_by("id", "desc");
   		$this->db->where('featured','0');
   		return $this->db->get('',$limit);
	}

	function tampil_data_postALL($limit) {
		$this->db->select('*');
    	$this->db->from('kategori');
   		$this->db->join('post', 'post.id_kategori = kategori.id_kategori');
   		$this->db->order_by("id", "desc");
   		return $this->db->get('',$limit);
	}

	function tampil_data_newsflash($limit) {
		$this->db->select('*');
    	$this->db->from('newsflash');
   		$this->db->order_by("id", "desc");
   		return $this->db->get('',$limit);
	}


	function jumlah_data(){
		return $this->db->get('post')->num_rows();
	}

	function jumlah_data_news_post(){
		return $this->db->get('post')->num_rows();
	}

	function countlogin() {
		$user = $this->session->userdata("nama");

    	$sql = $this->db->query('SELECT COUNT(url_id) AS count FROM post WHERE id_editor = "' 
    		. $user . '"');

    	return $sql;
	}

    function search_news($limit,$keyword) {

    	$this->db->order_by("id", "desc");
        $this->db->like('judul_id',$keyword);
        $this->db->select('*');
    	$this->db->from('kategori');
   		$this->db->join('post', 'post.id_kategori = kategori.id_kategori');
        $query  =   $this->db->get('',$limit);
        return $query->result();

    }

    function search($limit,$keyword)
    {
    	$this->db->order_by("id", "desc");
        $this->db->like('judul_id',$keyword);
        $this->db->select('*');
    	$this->db->from('kategori');
   		$this->db->join('post', 'post.id_kategori = kategori.id_kategori');
   		$this->db->where('id_editor',$this->session->userdata("nama"));
   		
        $query  =   $this->db->get('',$limit);
        
        

		//$this->db->select('*');
    	//$this->db->from('kategori');
   		//$this->db->join('post', 'post.id_kategori = kategori.id');
        //$this->db->where('judul_id',$keyword)
        //$query2 = $this->db->get('',$limit,$id);
        //$query = $this->db->get();
        return $query->result();
        //return $query2->result();
    }


    function search_admin($limit,$keyword)
    {
    	$this->db->order_by("id", "desc");
        $this->db->like('judul_id',$keyword);
        $this->db->select('*');
    	$this->db->from('kategori');
   		$this->db->join('post', 'post.id_kategori = kategori.id_kategori');
   		
        $query  =   $this->db->get('',$limit);
        
        

		//$this->db->select('*');
    	//$this->db->from('kategori');
   		//$this->db->join('post', 'post.id_kategori = kategori.id');
        //$this->db->where('judul_id',$keyword)
        //$query2 = $this->db->get('',$limit,$id);
        //$query = $this->db->get();
        return $query->result();
        //return $query2->result();
    }

/*	function jumlah_data(){
		$this->db->select('*');
    	$this->db->from('kategori');
   		$this->db->join('post', 'post.id_kategori = kategori.id');
		return $this->db->get()->num_rows();
	}*/
/*	function tampil_data_post_penulis(){
		//return $this->db->get('post');
		$this->db->select('*');
    	$this->db->from('pengguna');
   		$this->db->join('post', 'post.id_penulis = pengguna.id');
   		return $this->db->get();
	}*/

	function tampil_data_post_penulis(){
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

	function tampil_data_post_kategori(){
		return $this->db->get('kategori');
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

	function edit_data_post($where,$post){		

   		return $this->db->get_where($post,$where);

		
	}

	function join_post_kategori() {
	}

	function detail_data_post($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function detail_data_post_join() {
		//$this->db->select('*');
    	//$this->db->from('kategori');
   		//$this->db->join('post', 'post.id_kategori = kategori.id_kategori');
   		//$this->db->where($table,$join);
        $this->db->select('*');
    	$this->db->from('kategori');
   		$this->db->join('post', 'post.id_kategori = kategori.id_kategori');
   		return $this->db->get('');
   	}

	function detail_data_post_blog($where,$table){	
		return $this->db->get_where($table,$where);
	}



	function update($where,$data,$post){
		$this->db->where($where);
		$this->db->update($post,$data);
	}



}

?>