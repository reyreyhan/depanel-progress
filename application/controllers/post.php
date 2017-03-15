<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

    var $gallery_path;
    var $gallery_path_url;

	function __construct(){
		parent::__construct();
            $this->gallery_path = realpath(APPPATH . '../assets/uploads/post/');
            $this->gallery_path_url = 'http://localhost:8080/depanel/assets/uploads/post';

			$this->load->model('m_depanel_post');
            $this->load->model('m_depanel_home');

          	$this->load->helper('url');
            $this->load->helper('string');
          	$this->load->helper(array('url','html','form','string'));
            $this->load->library('pagination');



        if($this->session->userdata('status') != "login"){
            redirect ('../login/');
        }
	}

	public function index($id=NULL) {

    if($this->session->userdata('nama') != "superadmin"){

    $jumlah_data = $this->m_depanel_home->count_post()->result()[0]->count;;

    $config['base_url'] = base_url().'/post/index';
    $config['total_rows'] = $jumlah_data;
    $config['per_page'] = '5';

    $data['ok'] = $this->m_depanel_post->tampil_data_post($config['per_page'],$id)->result();

    } else {

    $jumlah_data = $this->m_depanel_post->jumlah_data();

    $config['base_url'] = base_url().'/post/index';
    $config['total_rows'] = $jumlah_data;
    $config['per_page'] = '5';
    $data['ok'] = $this->m_depanel_post->tampil_data_post_admin($config['per_page'],$id)->result();

    }


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
    //$data['ok'] = $this->m_depanel_post->tampil_data_post($config['per_page'],$id)->result();
    /*$data['ok2'] = $this->m_depanel_post->tampil_data_post_penulis()->result();*/

    $data['ok_p'] = $this->m_depanel_post->tampil_data_post_penulis()->result();
    $data['ok_e'] = $this->m_depanel_post->tampil_data_post_editor()->result();
    $data['ok_poto'] = $this->m_depanel_post->tampil_data_post_poto()->result();
    $data['ok_k'] = $this->m_depanel_post->tampil_data_post_kategori()->result();

    $this->load->view('post/data_post',$data);
	}


    public function hasil_search($id=NULL) {

    $jumlah_data = $this->m_depanel_post->jumlah_data();

    $config['base_url'] = base_url().'/post/hasil_search';
    $config['total_rows'] = $jumlah_data;
    $config['per_page'] = '100';

    $this->pagination->initialize($config);
    $data['halaman'] = $this->pagination->create_links();

    $keyword    =   $this->input->post('keyword');

    if($this->session->userdata('nama') != "superadmin") {
    $data['ok']    =   $this->m_depanel_post->search($config['per_page'],$keyword);
    } else {
    //$keyword    =   $this->input->post('keyword');
    $data['ok']    =   $this->m_depanel_post->search_admin($config['per_page'],$keyword);
    }



    $this->load->view('post/data_post',$data);

    }


	public function data() {

    $data['ok2'] = $this->m_depanel_post->tampil_data_post_penulis()->result();
    $data['ok3'] = $this->m_depanel_post->tampil_data_post_editor()->result();
    $data['ok4'] = $this->m_depanel_post->tampil_data_post_poto()->result();
    $data['ok'] = $this->m_depanel_post->tampil_data_post_kategori()->result();
    $this->load->view('post/upload', $data);


        if($this->input->post('upload')) {
                $config = array(
                         'allowed_types' => 'jpg|jpeg|gif|png',
                         'upload_path' => $this->gallery_path,
                         'max_size' => 2000,
                         'file_name' => url_title($this->input->post('file_upload'))
                );

                $this->load->library('upload', $config);

                $this->upload->do_upload();

                $Y = url_title($this->input->post('judul_id'), 'dash', TRUE);
                $Z = url_title($this->input->post('judul_en'), 'dash', TRUE);

                $A = $this->input->post ('id');
                $B = $this->input->post ('id_kategori');
                $C = $this->input->post ('judul_id');
                //$D = $this->input->post ('url_id');
                $E = $this->input->post ('isi_id');
                $F = $this->input->post ('judul_en');
                //$G = $this->input->post ('url_en');
                $H = $this->input->post ('isi_en');
                $I = $this->input->post ('gambar');
                $J = $this->input->post ('gambar_keterangan');
                $K = $this->input->post ('id_fotografer');
                $L = $this->input->post ('featured');
                $M = date('Y-m-d H:i:s');
                $N = $this->input->post ('id_penulis');
                $O = $this->input->post ('id_editor');
                $P = $this->input->post ('youtube');

                $this->db->insert('post',array(
                        'id' => $A,
                        'id_kategori' => $B,
                        'judul_id' => $C,
                        //'url_id' => $D,
                        'isi_id' => $E,
                        'judul_en' => $F,
                        //'url_en' => $G,
                        'isi_en' => $H,
                        'gambar' => $I,
                        'gambar_keterangan' => $J,
                        'id_fotografer' => $K,
                        'featured' => $L,
                        'tanggal' => $M,
                        'id_penulis' => $N,
                        'id_editor' => $O,
                        'youtube' => $P,
                        'url_id' => $Y,
                        'url_en' => $Z,

                ));
                ///////// END
             redirect ('../post');
        }
	}



  // public function hapus($del_no){
  //   $where = array('id' => $del_no);
  //   $this->m_depanel->hapus_data_newsflash($where,'newsflash');
  //   redirect('/upload/data');

  // }

  public function hapus($del_no) {
    $data = $this->m_depanel_post->hapus_gambar_post('id',$del_no);
    if($data->gambar != "") {
      unlink(FCPATH."assets/uploads/post/".$data->gambar);
    }

    $where = array('id' => $del_no);
    $this->m_depanel_post->hapus_data_post($where,'post');
    redirect('../post/');
  }

  public function edit($A){
    //$where = array('id' => $e_no);
    //$data['post'] = $this->m_depanel_post->edit_data_post($where,'post')->result();

/*    $data['ok2'] = $this->m_depanel_post->tampil_data_post_penulis()->result();
    $data['ok3'] = $this->m_depanel_post->tampil_data_post_editor()->result();
    $data['ok4'] = $this->m_depanel_post->tampil_data_post_poto()->result();*/

    //$data['ok'] = $this->m_depanel_post->tampil_data_post_kategori()->result();
    //$this->load->view('post/edit_data_post',$data);

    $where = array('id' => $A);
    $data['post'] = $this->m_depanel_post->edit_data_post($where,'post')->result();
    //$this->m_depanel_post->join_post_kategori();
    $this->load->view('/post/edit_data_post',$data);
  }

  public function upload() {

    $data['ok_p'] = $this->m_depanel_post->tampil_data_post_penulis()->result();
    $data['ok_e'] = $this->m_depanel_post->tampil_data_post_editor()->result();
    $data['ok_poto'] = $this->m_depanel_post->tampil_data_post_poto()->result();
    $data['ok_k'] = $this->m_depanel_post->tampil_data_post_kategori()->result();

    $this->load->view('/post/upload',$data);
  }

  public function update() {

    $Y = url_title($this->input->post('judul_id'), 'dash', TRUE);
    $Z = url_title($this->input->post('judul_en'), 'dash', TRUE);

    $A = $this->input->post ('id');
    $B = $this->input->post ('id_kategori');
    $C = $this->input->post ('judul_id');
    //$D = $this->input->post ('url_id');
    $E = $this->input->post ('isi_id');
    $F = $this->input->post ('judul_en');
    //$G = $this->input->post ('url_en');
    $H = $this->input->post ('isi_en');
    $I = $this->input->post ('gambar');
    $J = $this->input->post ('gambar_keterangan');
    //$K = $this->input->post ('id_fotografer');
    $L = $this->input->post ('featured');
    //$N = $this->input->post ('id_penulis');
    //$O = $this->input->post ('id_editor');
    $P = $this->input->post ('youtube');

    $data = array(
    'id_kategori' => $B,
    'judul_id' => $C,
    //'url_id' => $D,
    'isi_id' => $E,
    'judul_en' => $F,
    //'url_en' => $G,
    'isi_en' => $H,
    'gambar' => $I,
    'gambar_keterangan' => $J,
    //'id_fotografer' => $K,
    'featured' => $L,
    //'id_penulis' => $N,
    //'id_editor' => $O,
    'youtube' => $P,
    'url_id' => $Y,
    'url_en' => $Z,
    );

    $where = array(
      'id' => $A
    );

    $this->m_depanel_post->update($where,$data,'post');
    redirect('../post');
  }

  public function detail($e_no){
    $where = array('id' => $e_no);
    $data['post'] = $this->m_depanel_post->detail_data_post($where,'post')->result();

    $this->load->view('post/detail_data_post',$data);
    //echo "Hello World";
  }

/*	public function upload(){
		$this->load->view('upload');
	}*/
}
