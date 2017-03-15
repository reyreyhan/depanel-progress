<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

    var $gallery_path;
    var $gallery_path_url;

	function __construct(){
		parent::__construct();	
            $this->gallery_path = realpath(APPPATH . '../assets/uploads/page/');
            $this->gallery_path_url = 'http://localhost:8080/depanel/assets/uploads/page';
			$this->load->model('m_depanel_page');
          	$this->load->helper('url');
            $this->load->helper('string');
          	$this->load->helper(array('url','html','form','string'));
            $this->load->library('pagination');

        if($this->session->userdata('status') != "login"){
            redirect ('../login/');
        }
        
        if($this->session->userdata('nama') != "superadmin"){
          redirect ('../home/');
        }
        
	}

	public function index($id=NULL) {
    $jumlah_data = $this->m_depanel_page->jumlah_data();

    $config['base_url'] = base_url().'/page/index';
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
    $data['ok'] = $this->m_depanel_page->tampil_data_page($config['per_page'],$id)->result();
		//$data['ok'] = $this->m_depanel_page->tampil_data_page()->result();
	$this->load->view('page/post', $data);
	}

    public function hasil_search($id=NULL) {    
    $jumlah_data = $this->m_depanel_page->jumlah_data();

    $config['base_url'] = base_url().'/page/index';
    $config['total_rows'] = $jumlah_data;
    $config['per_page'] = '100';


    $this->pagination->initialize($config);
    $data['halaman'] = $this->pagination->create_links();   
    
    $keyword    =   $this->input->post('keyword');
    $data['ok']    =   $this->m_depanel_page->search($keyword);
    $this->load->view('page/post',$data);

    //$this->load->view('post/data_post',$data);
    }

	public function write(){
		$this->load->view('page/write');
		if($this->input->post('upload')) {

                $Y = url_title($this->input->post('judul_id'), 'dash', TRUE);
                $Z = url_title($this->input->post('judul_en'), 'dash', TRUE);

                $A = $this->input->post ('id');
                $B = $this->input->post ('judul_id');
                //$D = $this->input->post ('url_id');
                $C = $this->input->post ('isi_id');
                $D = $this->input->post ('judul_en');
                //$G = $this->input->post ('url_en');
                $E = $this->input->post ('isi_en');
                $F = $this->input->post ('gambar_url');
                $G = $this->input->post ('gambar_keterangan');
                $H = date('Y-m-d H:i:s');
                $X = $this->input->post ('kategori');

                if(empty($C)) {
                    redirect ('../page');
                } else if(empty($E)) {
                    redirect ('../page');
                } else if(empty($F)) {
                    redirect ('../page');
                } else if (empty($G)) {
                    redirect ('../page');
                } else {

                $config = array(
                         'allowed_types' => 'jpg|jpeg|gif|png',
                         'upload_path' => $this->gallery_path,
                         'max_size' => 2000,
                         'file_name' => url_title($this->input->post('file_upload'))
                );

                $this->load->library('upload', $config);

                $this->upload->do_upload();


  				$this->db->insert('page',array(
                        'id' => $A,
                        'judul_id' => $B,
                        //'url_id' => $D,
                        'isi_id' => $C,
                        'judul_en' => $D,
                        //'url_en' => $G,
                        'isi_en' => $E,
                        'gambar_url' => $F,
                        'gambar_keterangan' => $G,
                        'tanggal' => $H,
                        'url_id' => $Y,
                        'url_en' => $Z,
                        'kategori' => $X

                ));
                ///////// END
                redirect ('../page');         
            }
		}
	}

	  public function edit($e_url){
	    $where = array('url_id' => $e_url);
	    $data['page'] = $this->m_depanel_page->edit_data_page($where,'page')->result();
	    $this->load->view('page/edit_data_page',$data);
	  }

    public function update() {
        
        $Y = url_title($this->input->post('judul_id'), 'dash', TRUE);
        $Z = url_title($this->input->post('judul_en'), 'dash', TRUE);

        $A = $this->input->post ('id');
        $B = $this->input->post ('judul_id');
      //$D = $this->input->post ('url_id');
        $C = $this->input->post ('isi_id');
        $D = $this->input->post ('judul_en');
      //$G = $this->input->post ('url_en');
        $E = $this->input->post ('isi_en');
        $F = $this->input->post ('gambar_url');
        $G = $this->input->post ('gambar_keterangan');

        $data = array(
        'id' => $A,
        'judul_id' => $B,
        //'url_id' => $D,
        'isi_id' => $C,
        'judul_en' => $D,
        'isi_en' => $E,
        'gambar_url' => $F,
        'gambar_keterangan' => $G,
        'url_id' => $Y,
        'url_en' => $Z
        );

        $where = array(
          'id' => $A
        );

        $this->m_depanel_page->update($where,$data,'page');
        redirect('../page/');
      }

      public function hapus($del_no) { 
        $data = $this->m_depanel_page->hapus_gambar_page('id',$del_no);
        if($data->gambar_url != "") {
          unlink(FCPATH."assets/uploads/page/".$data->gambar_url);
        }

        $where = array('id' => $del_no);
        $this->m_depanel_page->hapus_data_page($where,'page');
        redirect('../page/');
      }

    }
