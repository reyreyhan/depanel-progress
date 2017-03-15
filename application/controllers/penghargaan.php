<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penghargaan extends CI_Controller {

	function __construct(){
		parent::__construct();

        $this->load->model('m_depanel_departemen');
        $this->load->model('m_depanel_jurusan');
        $this->load->model('m_depanel_post');
        $this->load->model('m_depanel_blog');
        $this->load->model('m_depanel');

        $this->load->helper('url');
        $this->load->helper('string');
        $this->load->helper('text');
        //$this->load->helper(array('url','html','form','string'));


        $this->load->library('pagination');

	}

      public function index() {

        $data['departemen'] = $this->m_depanel_departemen->tampil_data_departemen()->result();
        $data['jurusan'] = $this->m_depanel_jurusan->tampil_data_jurusan_no_limit()->result();

        $data['dp_elka'] = $this->m_depanel_departemen->elka()->result();
        $data['dp_itce'] = $this->m_depanel_departemen->itce()->result();
        $data['dp_me'] = $this->m_depanel_departemen->me()->result();
        $data['dp_mmk'] = $this->m_depanel_departemen->mmk()->result();


        $this->load->view('welcome/penghargaan',$data);
	    }

}
