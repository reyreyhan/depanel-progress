<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class M_depanel_home extends CI_Model{

/*	function lastPost {
		$query ="SELECT $tanggal as tanggal_terakhir from post where $tanggal = LAST_INSERT_ID()";
		return $query;
	}*/

	function coba() {
		$this->db->select('count(*)');
		$this->db->from('post');
		$this->db->where('id_penulis','makmum');
		return $this->db->get();
	}

	function count_post() {
		$user = $this->session->userdata("nama");

    	$sql = $this->db->query('SELECT COUNT(url_id) AS count FROM post WHERE id_editor = "' 
    		. $user . '"');

    	return $sql;
    	
/*    	$sql = $this->db->query('SELECT COUNT(url_id) AS count FROM post WHERE id_editor = "makmum"');

    	return $sql;*/

/*    	$sql = $this->db->query('SELECT COUNT(url_id) AS count FROM post WHERE id_editor = 
    		\'alhamdulillah\' ');*/
    	//return $sql;

	}

	function tampil_data_postALL($limit) {
		$this->db->select('*');
    	$this->db->from('kategori');
   		$this->db->join('post', 'post.id_kategori = kategori.id_kategori');
   		$this->db->order_by("id", "desc");
   		$this->db->where('id_editor',$this->session->userdata("nama")); // variable
   		return $this->db->get('',$limit);
	}

	
}

?>