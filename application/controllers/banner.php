<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends CI_Controller {

    var $gallery_path;
    var $gallery_path_url;

	function __construct(){
		parent::__construct();	
            $this->gallery_path = realpath(APPPATH . '../assets/uploads/banner/');
            $this->gallery_path_url = 'http://localhost:8080/depanel/assets/uploads/banner';
			      $this->load->model('m_depanel_banner');
          	$this->load->helper('url');
          	$this->load->helper(array('url','html','form'));
            $this->load->library('pagination');

    if($this->session->userdata('status') != "login"){
      redirect ('../login/');
    }

	}

	public function index($id=NULL) {
    $jumlah_data = $this->m_depanel_banner->jumlah_data();

    $config['base_url'] = base_url().'/banner/index';
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
      
    $data['ok'] = $this->m_depanel_banner->tampil_data_banner($config['per_page'],$id)->result();
    $this->load->view('/banner/data_banner',$data);
	}

  public function hasil_search($id=NULL) {    

  $jumlah_data = $this->m_depanel_banner->jumlah_data();

  $config['base_url'] = base_url().'/banner/index';
  $config['total_rows'] = $jumlah_data;
  $config['per_page'] = '100';

  $this->pagination->initialize($config);
  $data['halaman'] = $this->pagination->create_links();   

  $keyword    =   $this->input->post('keyword');
  $data['ok']    =   $this->m_depanel_banner->search($keyword);

  $this->load->view('banner/data_banner',$data);

  }

	public function data() {
  $this->load->view('banner/upload');
    if($this->input->post('upload')) {

                //////// START ,Sintak untuk menyimpan data hasil upload ke database mysql 
                //$file = $this->upload->file_name;
                $B = $this->input->post('url');
                $C = $this->input->post('gambar');
                $D = $this->input->post('keterangan');
                $E = $this->input->post('posisi');
                $F = $this->input->post('judul');
                //$F = date('Y-m-d H:i:s');
                if(empty($C)) {
                  redirect ('../banner/');
                } else if(empty($D)) {
                  redirect ('../banner/');
                } else {
                $config = array(
                         'allowed_types' => 'jpg|jpeg|gif|png',
                         'upload_path' => $this->gallery_path,
                         'max_size' => 2000,
                         'file_name' => url_title($this->input->post('file_upload'))
                );

                $this->load->library('upload', $config);
                $this->upload->do_upload();

          $this->db->insert('banner',array(
                        //'img' => $file,
                        'url' => $B,
                        'gambar' => $C,
                        'keterangan' => $D,
                        'posisi' => $E,
                        'judul' => $F,
                        //'tgl' => $F,
                ));
                ///////// END

           redirect ('../banner/');
         }
    }
	}

  public function hapus($del_no){
    $data = $this->m_depanel_banner->hapus_gambar_banner('id',$del_no);
    if($data->gambar != "") {
      unlink(FCPATH."assets/uploads/banner/".$data->gambar);
    }
    
    $where = array('id' => $del_no);
    $this->m_depanel_banner->hapus_data_banner($where,'banner');
    redirect('../banner/');
  }

  public function edit($e_no){
    $where = array('id' => $e_no);
    $data['banner'] = $this->m_depanel_banner->edit_data_banner($where,'banner')->result();
    $this->load->view('/banner/edit_data_banner',$data);
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
      'url' => $B,
      'posisi' => $C,
      'keterangan' => $D,
      'judul' => $F
    );

    $where = array(
      'id' => $A
    );

    $this->m_depanel_banner->update($where,$data,'banner');
    redirect('../banner/');

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
      'url' => $B,
      'posisi' => $C,
      'keterangan' => $D,
      'gambar' => $E,
      'judul' => $F
    );

    $where = array(
      'id' => $A
    );

    $this->m_depanel_banner->update($where,$data,'banner');
    redirect('../banner/');
    }
  }

/*	public function upload(){
		$this->load->view('upload');
	}*/
}
