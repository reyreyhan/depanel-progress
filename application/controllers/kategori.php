<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	function __construct(){
		parent::__construct();	
			      $this->load->model('m_depanel_kategori');
          	$this->load->helper('url');
          	$this->load->helper(array('url','html','form'));

    if($this->session->userdata('status') != "login"){
      redirect ('../login/');
    }
	}

	public function index() {
    $data['ok'] = $this->m_depanel_kategori->tampil_data_kategori()->result();
    $this->load->view('/kategori/data_kategori',$data);
	}

	public function data() {
  $this->load->view('kategori/upload');
    if($this->input->post('upload')) {

                //////// START ,Sintak untuk menyimpan data hasil upload ke database mysql 
                //$file = $this->upload->file_name;
                $Z = url_title($this->input->post('nama_kategori'), 'dash', TRUE);
                
                $B = $this->input->post('nama_kategori');
                //$C = $this->input->post('slug');
                $D = $this->input->post('deskripsi');
                //$F = date('Y-m-d H:i:s');

          $this->db->insert('kategori',array(
                        //'img' => $file,
                        'nama_kategori' => $B,
                        'slug' => $Z,
                        'deskripsi' => $D,
                        //'tgl' => $F,
                ));
                ///////// END

           redirect ('../kategori/');
    }
	}

  public function hapus($del_no){

    $where = array('id' => $del_no);
    $this->m_depanel_kategori->hapus_data_kategori($where,'kategori');
    redirect('../kategori/');
  }

  public function edit($e_no){
    $where = array('id' => $e_no);
    $data['kategori'] = $this->m_depanel_kategori->edit_data_kategori($where,'kategori')->result();
    $this->load->view('/kategori/edit_data_kategori',$data);
  }

  public function update() {
    $A = $this->input->post('id');
    $B = $this->input->post('nama_kategori');
    //$C = $this->input->post('slug');
    $D = $this->input->post('deskripsi');
    $Z = url_title($this->input->post('nama_kategori'), 'dash', TRUE);

    $data = array(
      'nama_kategori' => $B,
      'slug' => $Z,
      'deskripsi' => $D
    );

    $where = array(
      'id' => $A
    );

    $this->m_depanel_kategori->update($where,$data,'kategori');
    redirect('/kategori/');
  }

/*	public function upload(){
		$this->load->view('upload');
	}*/
}

