<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

	function __construct(){
		parent::__construct();	
			      $this->load->model('m_depanel_anggota');
          	$this->load->helper('url');
          	$this->load->helper(array('url','html','form'));
            $this->load->database();
            $this->load->library('pagination');

    if($this->session->userdata('status') != "login"){
      redirect ('../login/');
    }

    if($this->session->userdata('nama') != "superadmin"){
      redirect ('../home/');
    }
    
	}

	public function index($id_pengguna=NULL) {
    $jumlah_data = $this->m_depanel_anggota->jumlah_data();

    $config['base_url'] = base_url().'/anggota/index';
    $config['total_rows'] = $jumlah_data;
    $config['per_page'] = '5';
/*    $config['first_page'] = 'Awal';
    $config['last_page'] = 'Akhir';
    $config['next_page'] = 'Next';
    $config['prev_page'] = 'Prev';
*/    
    $config['full_tag_open']='<ul class="pagination">';
    $config['full_tag_close']='</ul>';

    $config['first_tag_open']='<li>';
    $config['first_tag_close']='</li>';

    $config['last_tag_open']='<li>';
    $config['last_tag_close']='</li>';

    $config['prev_tag_open']='<li>';
    $config['prev_tag_close']='</li>';

    $config['num_tag_open']='<li>';
    $config['num_tag_close']='</li>';

    $config['cur_tag_open']="<li class='active'><a href='#'>";
    $config['cur_tag_close']='</a></li>';

    $config['next_tag_open']='<li>';
    $config['next_tag_close']='</li>';


    $this->pagination->initialize($config);
    $data['halaman'] = $this->pagination->create_links();   
    //$data['ok'] = $this->m_depanel_angdota->data();
    $data['ok'] = $this->m_depanel_anggota->tampil_data_anggota($config['per_page'],$id_pengguna)->result();    
    $this->load->view('/anggota/data_anggota',$data);    

    //$this->load->view('/anggota/data_anggota',$data);
	}

  public function hasil_search() {
    $jumlah_data = $this->m_depanel_anggota->jumlah_data();

    $config['base_url'] = base_url().'/anggota/index';
    $config['total_rows'] = $jumlah_data;
    $config['per_page'] = '100';

    $this->pagination->initialize($config);
    $data['halaman'] = $this->pagination->create_links();   

    $keyword    =   $this->input->post('kw');
    $data['ok']    =   $this->m_depanel_anggota->search($keyword);

    $this->load->view('anggota/data_anggota',$data);
  }

	public function data() {
  $this->load->view('anggota/upload');
    if($this->input->post('upload')) {

                //////// START ,Sintak untuk menyimpan data hasil upload ke database mysql 
                //$file = $this->upload->file_name;
                $B = $this->input->post('nama');
                $C = $this->input->post('jabatan');
                $D = $this->input->post('email');
                $E = md5($this->input->post('password'));

                //$F = date('Y-m-d H:i:s');

          $this->db->insert('pengguna',array(
                        //'img' => $file,
                        'nama' => $B,
                        'jabatan' => $C,
                        'email' => $D,
                        'password' => $E
                ));
                ///////// END

           redirect ('../anggota/');
    }
	}

  public function hapus($del_no){

    $where = array('id_pengguna' => $del_no);
    $this->m_depanel_anggota->hapus_data_anggota($where,'pengguna');
    redirect('../anggota/');
  }

  public function edit($e_no){
    $where = array('id_pengguna' => $e_no);
    $data['anggota'] = $this->m_depanel_anggota->edit_data_anggota($where,'pengguna')->result();
    $this->load->view('/anggota/edit_data_anggota',$data);
  }

  public function update() {
    $Z = $this->input->post('id_pengguna');
    $B = $this->input->post('nama');
    $C = $this->input->post('jabatan');
    $D = $this->input->post('email');
    $E = $this->input->post('password');

    $data = array(
      'nama' => $B,
      'jabatan' => $C,
      'email' => $D,
      'password' => $E
    );

    $where = array(
      'id_pengguna' => $Z
    );

    $this->m_depanel_anggota->update($where,$data,'pengguna');
    redirect('../anggota/');
  }

/*	public function upload(){
		$this->load->view('upload');
	}*/
}

