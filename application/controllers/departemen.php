<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Departemen extends CI_Controller {

	function __construct(){
		parent::__construct();	
        $this->load->model('m_depanel_departemen');
        $this->load->model('m_depanel_jurusan');

        $this->load->helper('url');
        $this->load->helper('string');
        $this->load->helper(array('url','html','form','string', 'text'));

        $this->load->library('pagination');

	}

	public function index($link=NULL) {    
    $where = array('link' => $link);
    $data['detail_departemen'] = $this->m_depanel_departemen->detail_data_departemen($where,'departemen')->result();

    $data['departemen'] = $this->m_depanel_departemen->tampil_data_departemen()->result();
    $data['jurusan'] = $this->m_depanel_jurusan->tampil_data_jurusan_no_limit()->result();

    $data['dp_elka'] = $this->m_depanel_departemen->elka()->result();
    $data['dp_itce'] = $this->m_depanel_departemen->itce()->result();
    $data['dp_me'] = $this->m_depanel_departemen->me()->result();
    $data['dp_mmk'] = $this->m_depanel_departemen->mmk()->result();


    $this->load->view('welcome/departemen',$data);
    }

    public function pasca() {
        redirect('http://pascasarjana.pens.ac.id/');
    }






}
