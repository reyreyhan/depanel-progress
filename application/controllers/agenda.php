<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends CI_Controller {

	function __construct(){
		parent::__construct();	
			$this->load->model('m_depanel_agenda');
          	$this->load->helper('url');
            $this->load->helper(array('url','html','form'));
    
    if($this->session->userdata('status') != "login"){
      redirect ('../login/');
    }
    
	}

	public function index() {
	$this->load->view('agenda/upload');
		if($this->input->post('upload')) {
                /*$config = array(
                         'allowed_types' => 'jpg|jpeg|gif|png',
                         'upload_path' => $this->gallery_path,
                         'max_size' => 2000,
                         'file_name' => url_title($this->input->post('file_upload'))
                );

                $this->load->library('upload', $config);
                $this->upload->do_upload();
*/
                $Z = url_title($this->input->post('nama'), 'dash', TRUE);
                $ZZ = date('Y-m-d H:i:s');
                
                $B = $this->input->post ('nama');
                $C = $this->input->post ('url');
                $D = $this->input->post ('tempat');
                $E = $this->input->post ('penyelenggara');
                $F = $this->input->post ('isi');

  				$this->db->insert('agenda',array(
                        'slug' => $Z,
                        'waktu' => $ZZ,
                        'nama' => $B,
                        'url' => $C,
                        'tempat' => $D,
                        'penyelenggara' => $E,
                        'isi' => $F

                ));
                ///////// END
             redirect ('../agenda');         
		}
	}

	public function data() {
    $data['ok'] = $this->m_depanel_agenda->tampil_data_agenda()->result();
		$this->load->view('agenda/data_agenda',$data);
	}

  // public function hapus($del_no){
  //   $where = array('id' => $del_no);
  //   $this->m_depanel->hapus_data_newsflash($where,'newsflash');
  //   redirect('/upload/data');

  // }

  public function hapus($del_no) { 
    $where = array('id' => $del_no);
    $this->m_depanel_agenda->hapus_data_agenda($where,'agenda');
    redirect('/agenda/data');
  }

  public function edit($e_no){
    $where = array('slug' => $e_no);
    $data['agenda'] = $this->m_depanel_agenda->edit_data_agenda($where,'agenda')->result();
    $this->load->view('agenda/edit_data_agenda',$data);
  }

  public function update() {
    

    $A = $this->input->post('id');            
    $B = $this->input->post ('nama');
    $C = $this->input->post ('url');
    $D = $this->input->post ('tempat');
    $E = $this->input->post ('penyelenggara');
    $F = $this->input->post ('isi');

    $data = array(
    'nama' => $B,
    'url' => $C,
    'tempat' => $D,
    'penyelenggara' => $E,
    'isi' => $F
    );

    $where = array(
      'id' => $A
    );

    $this->m_depanel_agenda->update($where,$data,'agenda');
    redirect('/agenda/data');
  }

  public function detail($e_no){
    $where = array('slug' => $e_no);
    $data['agenda'] = $this->m_depanel_agenda->detail_data_agenda($where,'agenda')->result();
    $this->load->view('agenda/detail_data_agenda',$data);

  }

/*	public function upload(){
		$this->load->view('upload');
	}*/
}
