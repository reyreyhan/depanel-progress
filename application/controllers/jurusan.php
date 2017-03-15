<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller {

	function __construct(){
		parent::__construct();	
			      $this->load->model('m_depanel_jurusan');
          	$this->load->helper('url');
          	$this->load->helper(array('url','html','form'));
            $this->load->library('pagination');

    if($this->session->userdata('status') != "login"){
      redirect ('../login/');
    }
    
	}

	public function index($id=NULL) {
    $jumlah_data = $this->m_depanel_jurusan->jumlah_data();

    $config['base_url'] = base_url().'/jurusan/index';
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
    $data['ok'] = $this->m_depanel_jurusan->tampil_data_jurusan($config['per_page'],$id)->result();
    //$data['ok'] = $this->m_depanel_jurusan->tampil_data_jurusan()->result();
    $data['join'] = $this->m_depanel_jurusan->d_d()->result();
    $this->load->view('/jurusan/data_jurusan',$data);

	}

  public function hasil_search() {
    $jumlah_data = $this->m_depanel_jurusan->jumlah_data();

    $config['base_url'] = base_url().'/jurusan/index';
    $config['total_rows'] = $jumlah_data;
    $config['per_page'] = '100';

    $this->pagination->initialize($config);
    $data['halaman'] = $this->pagination->create_links();   

    $keyword    =   $this->input->post('keyword');
    $data['ok']    =   $this->m_depanel_jurusan->search($keyword);

    $data['join'] = $this->m_depanel_jurusan->d_d()->result();
    $this->load->view('jurusan/data_jurusan',$data);
  }

	public function data() {
  $data['ok'] = $this->m_depanel_jurusan->d_d()->result();
  $this->load->view('jurusan/upload',$data);
    if($this->input->post('upload')) {

                //////// START ,Sintak untuk menyimpan data hasil upload ke database mysql 
                //$file = $this->upload->file_name;
                $B = $this->input->post('nama');
                $C = $this->input->post('url');
                $D = $this->input->post('deskripsi');
                $E = $this->input->post('id_departemen');
                //$F = date('Y-m-d H:i:s');
        if(empty($D)) {
            redirect ('../jurusan/');
        } else {
          $this->db->insert('jurusan',array(
                        //'img' => $file,
                        'nama' => $B,
                        'url' => $C,
                        'deskripsi' => $D,
                        'id_departemen' => $E,
                        //'tgl' => $F,
                ));
                ///////// END

           redirect ('../jurusan/');
        }
        
    }       
	}

  public function hapus($del_no){
    $data = $this->m_depanel_jurusan->hapus_gambar_jurusan('id',$del_no);
    if($data->gambar != "") {
      unlink(FCPATH."assets/uploads/jurusan/".$data->gambar);
    }

    $where = array('id' => $del_no);
    $this->m_depanel_jurusan->hapus_data_jurusan($where,'jurusan');
    redirect('../jurusan/');
  }

  public function edit($e_no){
    $where = array('id' => $e_no);
    $data['jurusan'] = $this->m_depanel_jurusan->edit_data_jurusan($where,'jurusan')->result();
    $this->load->view('/jurusan/edit_data_jurusan',$data);
  }

  public function update() {
    $A = $this->input->post('id');
    $B = $this->input->post('nama');
    $C = $this->input->post('url');
    $D = $this->input->post('deskripsi');
    $E = $this->input->post('id_departemen');

    if(empty($D)) {

    $data = array(
      'nama' => $B,
      'url' => $C,
      'id_departemen' => $E
    );

    $where = array(
      'id' => $A
    );

    $this->m_depanel_jurusan->update($where,$data,'jurusan');
    redirect('../jurusan/');

    } else {

    $data = array(
      'nama' => $B,
      'url' => $C,
      'deskripsi' => $D,
      'id_departemen' => $E
    );

    $where = array(
      'id' => $A
    );

    $this->m_depanel_jurusan->update($where,$data,'jurusan');
    redirect('../jurusan/');

    }


  }

/*	public function upload(){
		$this->load->view('upload');
	}*/
}
