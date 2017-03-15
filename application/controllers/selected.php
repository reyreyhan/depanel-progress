<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Selected extends CI_Controller {

	public function index() {
    $this->load->view('/selected/data_selected');
	}

	
}
