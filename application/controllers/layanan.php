<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends CI_Controller {

	function __construct(){
		parent::__construct();

        $this->load->model('m_depanel_departemen');
        $this->load->model('m_depanel_jurusan');
        $this->load->model('m_depanel_page');



        $this->load->helper('url');
        $this->load->helper('string');
        $this->load->helper('text');
        //$this->load->helper(array('url','html','form','string'));


        $this->load->library('pagination');

	}

	public function index() {

        $data['departemen'] = $this->m_depanel_departemen->tampil_data_departemen()->result();
        $data['jurusan'] = $this->m_depanel_jurusan->tampil_data_jurusan_no_limit()->result();

        //$data['about_pens'] = $this->m_depanel_page->tampil_data_page_about_pens()->result();

        $this->load->view('welcome/layanan',$data);

    }

}
