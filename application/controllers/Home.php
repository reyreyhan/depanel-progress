<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();	
		$this->load->model('m_depanel_anggota');
		$this->load->model('m_depanel_home');
		$this->load->model('m_depanel_blog');
		$this->load->library('pagination');
		$this->load->database(); 

        $this->load->helper('url');
        $this->load->helper('string');
        $this->load->helper(array('url','html','form','string', 'text'));



		if($this->session->userdata('status') != "login") {
			redirect ('../login/');
		}

	}
	
	public function index()
	{
		$data['total_post'] = $this->db->count_all('post');
		//$data['ok'] = $this->m_depanel_anggota->tampil_data_anggota2()->result();

		$config['per_page'] = '1';
		$this->pagination->initialize($config);
		$data['post_ALL'] = $this->m_depanel_home->tampil_data_postALL($config['per_page'])->result();

		$data['count'] = $this->m_depanel_home->count_post()->result()[0]->count;
		//$this->session->userdata("nama");
		//$data['u_post'] =  $this->m_depanel_home->count_post()->result();
		
		//$data['pst'] = $this->m_depanel_home->coba()->result();
	
		//$data['tanggal'] = $this->m_depanel_home->LastPost();
		//print_r( $data );
		$this->load->view('home',$data);
	}
}
