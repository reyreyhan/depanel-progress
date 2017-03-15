<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dpp extends CI_Controller {

    var $gallery_path;
    var $gallery_path_url;
    var $gallery_path_kaprodi;
    var $gallery_path_url_kaprodi;

	function __construct(){
		parent::__construct();	
            $this->gallery_path = realpath(APPPATH . '../assets/uploads/departemen/');
            $this->gallery_path_url = 'http://localhost:8080/depanel/assets/uploads/departemen/';
            $this->gallery_path_kaprodi = realpath(APPPATH . '../assets/uploads/departemen_k/');
            $this->gallery_path_url_kaprodi = 'http://localhost:8080/depanel/assets/uploads/departemen_k/';
			      
            $this->load->model('m_depanel_departemen');
          	$this->load->helper('url');
          	$this->load->helper(array('url','html','form'));
            $this->load->library('pagination');

    if($this->session->userdata('status') != "login"){
      redirect ('../login/');
    }
    
	}

	public function index() {
    $jumlah_data = $this->m_depanel_departemen->jumlah_data();

        //$data['ok'] = $this->m_depanel_angdota->data();
    $data['ok'] = $this->m_depanel_departemen->tampil_data_departemen()->result();    

    //$data['ok'] = $this->m_depanel_departemen->tampil_data_departemen()->result();
    $this->load->view('/departemen/data_departemen',$data);
	}

  public function hasil_search() {
    $jumlah_data = $this->m_depanel_departemen->jumlah_data();

    $config['base_url'] = base_url().'/departemen/index';
    $config['total_rows'] = $jumlah_data;
    $config['per_page'] = '100';

    $this->pagination->initialize($config);
    $data['halaman'] = $this->pagination->create_links();   

    $keyword    =   $this->input->post('keyword');
    $data['ok']    =   $this->m_depanel_departemen->search($keyword);

    $this->load->view('departemen/data_departemen',$data);
  }

	public function data() {
  //$this->load->view('departemen/up');
    if($this->input->post('up')) {

                //////// START ,Sintak untuk menyimpan data hasil upload ke database mysql 
                //$file = $this->upload->file_name;
                $this->load->helper('url');
                $G = url_title($this->input->post('nama_dp'), 'dash', TRUE);
                $B = $this->input->post('nama_dp');
                $C = $this->input->post('deskripsi');
                $D = $this->input->post('gambar');
                $E = $this->input->post('kadep');
                $F = $this->input->post('gambar_k');
                //$F = date('Y-m-d H:i:s');

        if(empty($C)) {
          redirect ('../dpp/');
        } else if(empty($D)) {
          redirect ('../dpp/');
        } else if(empty($F)) {
          redirect ('../dpp/');
        } else {

        $this->load->library('upload');
        //config untuk upload gambar
        $config['upload_path'] = $this->gallery_path;
        $config['allowed_types'] = 'jpg|jpeg|gif|png';
        //$config['overwrite'] = FALSE;
        $config['max_size'] = '2000';
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('userfile')) {
          echo "error upload pertama";
        } else {
            unset($config);
            $config['upload_path'] = $this->gallery_path_kaprodi;
            $config['allowed_types'] = 'jpg|jpeg|gif|png';
            $config['max_size'] = '2000';
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('userfile2')) {
                echo "error 2";
            } 
        }



          $this->db->insert('departemen',array(
                        //'img' => $file,
                        'nama_dp' => $B,
                        'deskripsi  ' => $C,
                        'gambar' => $D,
                        'kadep' => $E,
                        'gambar_k' => $F,
                        'link' => $G
                        //'tgl' => $F,
                ));
                ///////// END

           redirect ('../dpp/');
        }
    }
	}

  public function hapus($del_no){
    $data = $this->m_depanel_departemen->hapus_gambar_departemen('id',$del_no);
    if($data->gambar != "") {
      unlink(FCPATH."assets/uploads/departemen/".$data->gambar);
    }

    $data = $this->m_depanel_departemen->hapus_gambar_departemen_k('id',$del_no);
    if($data->gambar_k != "") {
      unlink(FCPATH."assets/uploads/departemen_k/".$data->gambar_k);
    }

/*    if($data->gambar_k != "") {
      unlink(FCPATH."assets/uploads/departemen_k/".$data->gambar_k);
    }*/

    $where = array('id' => $del_no);
    $this->m_depanel_departemen->hapus_data_departemen($where,'departemen');
    redirect('../dpp/');
  }

  public function edit($e_no){
    $where = array('id' => $e_no);
    $data['departemen'] = $this->m_depanel_departemen->edit_data_departemen($where,'departemen')->result();
    $this->load->view('/departemen/edit_data_departemen',$data);
  }

  public function update() {
    $this->load->helper('url');
    $G = url_title($this->input->post('nama_dp'), 'dash', TRUE);
    $A = $this->input->post('id');
    $B = $this->input->post('nama_dp');
    $C = $this->input->post('deskripsi');
    $D = $this->input->post('gambar');
    $E = $this->input->post('kadep');
    $F = $this->input->post('gambar_k');

    $data = array(
      'nama_dp' => $B,
      'deskripsi' => $C,
      'gambar' => $D,
      'kadep' => $E,
      'gambar_k' => $F,
      'link' => $G
    );

    $where = array(
      'id' => $A
    );

    $this->m_depanel_departemen->update($where,$data,'departemen');
    redirect('../dpp/');
  }

/*	public function upload(){
		$this->load->view('upload');
	}*/
}
