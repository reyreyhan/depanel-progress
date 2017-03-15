<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kartun extends CI_Controller {

    var $gallery_path;
    var $gallery_path_url;

	function __construct(){
		parent::__construct();	
            $this->gallery_path = realpath(APPPATH . '../assets/uploads/kartun/');
            $this->gallery_path_url = 'http://localhost:8080/depanel/assets/uploads/kartun';
			      $this->load->model('m_depanel_kartun');
          	$this->load->helper('url');
          	$this->load->helper(array('url','html','form'));
            $this->load->library('pagination');

    if($this->session->userdata('status') != "login"){
      redirect ('../login/');
    }
    
	}

  public function hasil_search($id=NULL) {    

  $jumlah_data = $this->m_depanel_kartun->jumlah_data();

  $config['base_url'] = base_url().'/kartun/index';
  $config['total_rows'] = $jumlah_data;
  $config['per_page'] = '100';

  $this->pagination->initialize($config);
  $data['halaman'] = $this->pagination->create_links();   

  $keyword    =   $this->input->post('keyword');
  $data['ok']    =   $this->m_depanel_kartun->search($keyword);

  $this->load->view('kartun/data_kartun',$data);

  }

	public function index($id=NULL) {
    $jumlah_data = $this->m_depanel_kartun->jumlah_data();

    $config['base_url'] = base_url().'/kartun/index';
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
	  
    $data['ok'] = $this->m_depanel_kartun->tampil_data_kartun($config['per_page'],$id)->result();
    //$data['ok'] = $this->m_depanel_kartun->tampil_data_kartun()->result();
    $this->load->view('/kartun/data_kartun',$data);
	}

	public function data() {
    $this->load->view('kartun/upload');
                    //////// START ,Sintak untuk menyimpan data hasil upload ke database mysql 
                    //$file = $this->upload->file_name;
                    $B = $this->input->post('url');
                    $C = $this->input->post('gambar');
                    $D = $this->input->post('keterangan');
                    $E = $this->input->post('posisi');
                    $F = $this->input->post('judul');
                    //$F = date('Y-m-d H:i:s');

          if(empty($C)) {
            redirect ('../kartun/');
          } else if(empty($D)) {
            redirect ('../kartun/');
          } else {

        if($this->input->post('upload')) {
                    $config = array(
                             'allowed_types' => 'jpg|jpeg|gif|png',
                             'upload_path' => $this->gallery_path,
                             'max_size' => 2000,
                             'file_name' => url_title($this->input->post('file_upload'))
                    );

                    $this->load->library('upload', $config);
                    $this->upload->do_upload();


              $this->db->insert('kartun',array(
                            //'img' => $file,
                            'url' => $B,
                            'gambar' => $C,
                            'keterangan' => $D,
                            'posisi' => $E,
                            'judul' => $F
                            //'tgl' => $F,
                    ));
                    ///////// END

               redirect ('../kartun/');
             }
        }
	}

  public function hapus($del_no){
    $data = $this->m_depanel_kartun->hapus_gambar_kartun('id',$del_no);
    if($data->gambar != "") {
      unlink(FCPATH."assets/uploads/kartun/".$data->gambar);
    }

    $where = array('id' => $del_no);
    $this->m_depanel_kartun->hapus_data_kartun($where,'kartun');
    redirect('../kartun/');
  }

  public function edit($e_no){
    $where = array('id' => $e_no);
    $data['kartun'] = $this->m_depanel_kartun->edit_data_kartun($where,'kartun')->result();
    $this->load->view('/kartun/edit_data_kartun',$data);
  }

  public function update() {
    $A = $this->input->post('id');
    $B = $this->input->post('url');
    $C = $this->input->post('posisi');
    $D = $this->input->post('keterangan');
    $E = $this->input->post('gambar');
    $F = $this->input->post('judul');

    if(empty($E)) {

    $data = array(
      'judul' => $F,
      'url' => $B,
      'posisi' => $C,
      'keterangan' => $D
    );

    $where = array(
      'id' => $A
    );

    $this->m_depanel_kartun->update($where,$data,'kartun');
    redirect('../kartun/');

    }

    $config = array(
             'allowed_types' => 'jpg|jpeg|gif|png',
             'upload_path' => $this->gallery_path,
             'max_size' => 2000,
             'file_name' => url_title($this->input->post('file_upload'))
    );

    $this->load->library('upload', $config);
    $this->upload->do_upload();

    $data = array(
      'url' => $B,
      'posisi' => $C,
      'keterangan' => $D,
      'gambar' => $E,
      'judul' => $F
    );

    $where = array(
      'id' => $A
    );

    $this->m_depanel_kartun->update($where,$data,'kartun');
    redirect('../kartun/');
  }

/*	public function upload(){
		$this->load->view('upload');
	}*/
}
