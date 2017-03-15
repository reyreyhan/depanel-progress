<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		$this->load->model('m_depanel_login');
		$this->load->model('m_depanel_anggota');
	}

	public function index()
	{
		$this->load->view('/login/v_login');
	}

	public function aksi_login(){
	
			$A = $this->input->post('nama');
			$B = $this->input->post('password');

		    //$data['ok']    =   $this->m_depanel_anggota->search($A);

			$where = array(
				'nama' => $A,
				'password' => md5($B)
				);

			$cek = $this->m_depanel_login->cek_login("pengguna",$where)->num_rows();
			if($cek > 0){

				$data_session = array(
					'nama' => $A,
					'status' => "login",
					//$this->m_depanel_anggota->search_login($A)
				); 

				//$A = $this->input->post('nama');
    			//$data_session['ok']    =   $this->m_depanel_anggota->search($keyword);

				//$data_session = $this->m_depanel_anggota->search_login($A);

				$this->session->set_userdata($data_session);

				redirect ('../home/');

			} else{
				echo "Username dan password salah !";
			}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect ('../login/');
	}
}
