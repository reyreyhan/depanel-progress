<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
		parent::__construct();

 			$this->load->model('m_depanel_departemen');
 			$this->load->model('m_depanel_jurusan');
 			$this->load->model('m_depanel_post');
 			$this->load->model('m_depanel');

 			$this->load->library('pagination');
 			$this->load->helper('url');

	}

	public function index()
	{

		$data['departemen'] = $this->m_depanel_departemen->tampil_data_departemen()->result();

		$data['jurusan'] = $this->m_depanel_jurusan->tampil_data_jurusan_no_limit()->result();

		$config['per_page'] = '1';
		$this->pagination->initialize($config);
		$data['post_F'] = $this->m_depanel_post->tampil_data_postF($config['per_page'])->result();

		$config['per_page'] = '4';
		$this->pagination->initialize($config);
		$data['post_NF'] = $this->m_depanel_post->tampil_data_postNF($config['per_page'])->result();

		$config['per_page'] = '12';
		$this->pagination->initialize($config);
		$data['post_ALL'] = $this->m_depanel_post->tampil_data_postALL($config['per_page'])->result();

		$config['per_page'] = '5';
		$data['newsflash'] = $this->m_depanel_post->tampil_data_newsflash($config['per_page'])->result();

		$this->load->view('welcome/pens', $data);
	}

    public function nf($id=NULL){
 		$this->load->model('m_depanel');
/*        $where = array('id' => $id);
        $data['newsflash'] = $this->m_depanel->edit_data_newsflash($where,'newsflash')->result();
        $this->load->view('welcome/testing',$data); */
    }

	public function tes() {
		$this->load->view('write');
	}

}
