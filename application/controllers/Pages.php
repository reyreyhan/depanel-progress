<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
		$this->load->view('pages');
	}

	public function add(){
		$data = "hello";
		$this->load->view('pages/write.php');
	}
}
