<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

	public function index()
	{
		$this->load->view('post');
	}

	public function write(){
		$this->load->view('write');
	}
}
