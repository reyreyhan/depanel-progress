<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class M_depanel_blog extends CI_Model{

/*	function lastPost {
		$query ="SELECT $tanggal as tanggal_terakhir from post where $tanggal = LAST_INSERT_ID()";
		return $query;
	}*/

	function tampil_data_kkampus($limit,$id) {
		$this->db->select('*');
    	$this->db->from('kategori');
   		$this->db->join('post', 'post.id_kategori = kategori.id_kategori');
   		$this->db->order_by("id", "desc");
   		$this->db->where('nama_kategori','Kegiatan Kampus'); // variable
   		return $this->db->get('',$limit,$id);
	}

	function jumlah_data_kampus(){
		$this->db->select('*');
    	$this->db->from('kategori');
   		$this->db->join('post', 'post.id_kategori = kategori.id_kategori');
   		$this->db->order_by("id", "desc");
   		$this->db->where('nama_kategori','Kegiatan Kampus'); // variable
		return $this->db->get('')->num_rows();
	}

	function tampil_data_kmahasiswa($limit,$id) {
		$this->db->select('*');
    	$this->db->from('kategori');
   		$this->db->join('post', 'post.id_kategori = kategori.id_kategori');
   		$this->db->order_by("id", "desc");
   		$this->db->where('nama_kategori','Kegiatan Kemahasiswa'); // variable
   		return $this->db->get('',$limit,$id);
	}

	function jumlah_data_mahasiswa(){
		$this->db->select('*');
    	$this->db->from('kategori');
   		$this->db->join('post', 'post.id_kategori = kategori.id_kategori');
   		$this->db->order_by("id", "desc");
   		$this->db->where('nama_kategori','Kegiatan Kemahasiswa'); // variable
		return $this->db->get('')->num_rows();
	}

	function tampil_data_allpost($limit,$id) {
		$this->db->select('*');
    	$this->db->from('kategori');
   		$this->db->join('post', 'post.id_kategori = kategori.id_kategori');
   		$this->db->order_by("id", "desc");
   		//$this->db->where('nama_kategori','Kegiatan Kemahasiswa'); // variable
   		return $this->db->get('',$limit,$id);
	}

	function jumlah_data_allpost(){
		$this->db->select('*');
    	$this->db->from('kategori');
   		$this->db->join('post', 'post.id_kategori = kategori.id_kategori');
   		$this->db->order_by("id", "desc");
   		//$this->db->where('nama_kategori','Kegiatan Kemahasiswa'); // variable
		return $this->db->get('')->num_rows();
	}

	
}

?>