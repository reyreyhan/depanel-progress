<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

    var $gallery_path;
    var $gallery_path_url;

	function __construct(){
		parent::__construct();	
            $this->gallery_path = realpath(APPPATH . '../assets/uploads/newsflash/');
            $this->gallery_path_url = 'http://localhost:8080/depanel/assets/uploads/newsflash';
			      $this->load->model('m_depanel');
          	$this->load->helper('url');
          	$this->load->helper(array('url','html','form'));
            $this->load->library('pagination');

    if($this->session->userdata('status') != "login"){
      redirect ('../login/');
    }
	}

	public function index($id=NULL) {
    $jumlah_data = $this->m_depanel->jumlah_data();

    $config['base_url'] = base_url().'/upload/index';
    $config['total_rows'] = $jumlah_data;
    $config['per_page'] = '5';

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

    $data['ok'] = $this->m_depanel->tampil_data_newsflash($config['per_page'],$id)->result();
    //$data['ok'] = $this->m_depanel->tampil_data_newsflash()->result();


    $this->load->view('data_newsflash',$data);
	}

  public function hasil_search($id=NULL) {    

  $jumlah_data = $this->m_depanel->jumlah_data();

  $config['base_url'] = base_url().'/upload/index';
  $config['total_rows'] = $jumlah_data;
  $config['per_page'] = '100';

  $this->pagination->initialize($config);
  $data['halaman'] = $this->pagination->create_links();   

  $keyword    =   $this->input->post('keyword');
  $data['ok']    =   $this->m_depanel->search($keyword);

  $this->load->view('data_newsflash',$data);

  }

	public function data() {
  $this->load->view('upload');
    if($this->input->post('upload')) {

                //////// START ,Sintak untuk menyimpan data hasil upload ke database mysql 
                //$file = $this->upload->file_name;
                $A = $this->input->post('judul');
                $B = $this->input->post('url');
                $C = $this->input->post('gambar');
                $D = $this->input->post('keterangan');
                $E = $this->input->post('posisi');
                $F = date('Y-m-d H:i:s');

                if(empty($D)) {
                  redirect ('../upload');
                } else if (empty($C)){
                  redirect ('../upload');
                } else {
                $config = array(
                         'allowed_types' => 'jpg|jpeg|gif|png',
                         'upload_path' => $this->gallery_path,
                         'max_size' => 2000,
                         'file_name' => url_title($this->input->post('file_upload'))
                );

                $this->load->library('upload', $config);
                $this->upload->do_upload();



          $this->db->insert('newsflash',array(
                        //'img' => $file,
                        'judul' => $A,
                        'url' => $B,
                        'gambar' => $C,
                        'keterangan' => $D,
                        'posisi' => $E,
                        'tgl' => $F,
                ));
                ///////// END

           redirect ('../upload');
           }
    }
	}

  // public function hapus($del_no){
  //   $where = array('id' => $del_no);
  //   $this->m_depanel->hapus_data_newsflash($where,'newsflash');
  //   redirect('/upload/data');

  // }

  public function hapus($del_no) {
    $data = $this->m_depanel->hapus_gambar_newsflash('id',$del_no);
    if($data->gambar != "") {
      unlink(FCPATH."assets/uploads/newsflash/".$data->gambar);
    }
    
    $where = array('id' => $del_no);
    $this->m_depanel->hapus_data_newsflash($where,'newsflash');

    redirect('../upload/');
  }

  public function edit($e_no){
    $where = array('id' => $e_no);
    $data['newsflash'] = $this->m_depanel->edit_data_newsflash($where,'newsflash')->result();
    $this->load->view('edit_data_newsflash',$data);
  }

  public function update() {
    $A = $this->input->post('id');
    $B = $this->input->post('judul');
    $C = $this->input->post('url');
    $D = $this->input->post('posisi');
    $E = $this->input->post('keterangan');
    $F = $this->input->post('gambar');

    if(empty($F)) {
      
    $data = array(
      'judul' => $B,
      'url' => $C,
      'posisi' => $D,
      'keterangan' => $E
    );

    $where = array(
      'id' => $A
    );

    $this->m_depanel->update($where,$data,'newsflash');
    redirect('../upload/');

    } else {

    $config = array(
             'allowed_types' => 'jpg|jpeg|gif|png',
             'upload_path' => $this->gallery_path,
             'max_size' => 2000,
             'file_name' => url_title($this->input->post('file_upload'))
    );

    $this->load->library('upload', $config);
    $this->upload->do_upload();

    $data = array(
      'judul' => $B,
      'url' => $C,
      'posisi' => $D,
      'keterangan' => $E,
      'gambar' => $F
    );

    $where = array(
      'id' => $A
    );

    $this->m_depanel->update($where,$data,'newsflash');
    redirect('../upload/');
    }
  }

/*	public function upload(){
		$this->load->view('upload');
	}*/
}
