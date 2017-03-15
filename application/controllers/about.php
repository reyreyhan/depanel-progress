<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	function __construct(){
		parent::__construct();

        $this->load->model('m_depanel_departemen');
        $this->load->model('m_depanel_jurusan');
        $this->load->model('m_depanel_page');



        $this->load->helper('url');
        $this->load->helper('string');
        $this->load->helper('text');
        //$this->load->helper(array('url','html','form','string'));


        $this->load->library('pagination');

	}

	public function index() {

        $data['departemen'] = $this->m_depanel_departemen->tampil_data_departemen()->result();
        $data['jurusan'] = $this->m_depanel_jurusan->tampil_data_jurusan_no_limit()->result();

        $data['about_pens'] = $this->m_depanel_page->tampil_data_page_about_pens()->result();

        $this->load->view('welcome/aboutpens',$data);

    }


    public function post($slug=NULL) {

        $where = array('url_id' => $slug);
        $data['post'] = $this->m_depanel_post->detail_data_post_blog($where,'post')->result();

        $data['departemen'] = $this->m_depanel_departemen->tampil_data_departemen()->result();
        $data['jurusan'] = $this->m_depanel_jurusan->tampil_data_jurusan_no_limit()->result();

        //$data['join'] = $this->m_depanel_post->detail_data_post_join()->result();
        $config['per_page'] = '10';
        $this->pagination->initialize($config);
        $data['post_ALL'] = $this->m_depanel_post->tampil_data_postALL($config['per_page'])->result();

        $config['per_page'] = '1';
        $this->pagination->initialize($config);
        $data['post_F'] = $this->m_depanel_post->tampil_data_postF($config['per_page'])->result();

        $this->load->view('welcome/blogpost',$data);

    }

    public function allpost($id=NULL) {

        $jumlah_data = $this->m_depanel_blog->jumlah_data_allpost();

        $config['base_url'] = base_url().'/news/allpost/';
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = '12';

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

        $data['post_all'] = $this->m_depanel_blog->tampil_data_allpost($config['per_page'],$id)->result();

        $data['departemen'] = $this->m_depanel_departemen->tampil_data_departemen()->result();
        $data['jurusan'] = $this->m_depanel_jurusan->tampil_data_jurusan_no_limit()->result();

        $this->load->view('welcome/semuapost',$data);

    }

    public function mahasiswa($id=NULL) {

        $jumlah_data = $this->m_depanel_blog->jumlah_data_mahasiswa();

        $config['base_url'] = base_url().'/news/mahasiswa/';
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = '12';

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

        $data['post_mahasiswa'] = $this->m_depanel_blog->tampil_data_kmahasiswa($config['per_page'],$id)->result();

        $data['departemen'] = $this->m_depanel_departemen->tampil_data_departemen()->result();
        $data['jurusan'] = $this->m_depanel_jurusan->tampil_data_jurusan_no_limit()->result();

        $this->load->view('welcome/kmahasiswa',$data);

    }

    public function kampus($id=NULL) {

        $jumlah_data = $this->m_depanel_blog->jumlah_data_kampus();

        $config['base_url'] = base_url().'/news/kampus/';
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = '12';

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

        $data['post_kampus'] = $this->m_depanel_blog->tampil_data_kkampus($config['per_page'],$id)->result();


        $data['departemen'] = $this->m_depanel_departemen->tampil_data_departemen()->result();
        $data['jurusan'] = $this->m_depanel_jurusan->tampil_data_jurusan_no_limit()->result();


        $this->load->view('welcome/kkampus',$data);

    }

    public function nf(){
 //       $where = array('id' => $id);


        $config['per_page'] = '5';
        $data['newsflash'] = $this->m_depanel_post->tampil_data_newsflash($config['per_page'])->result();


        $this->load->view('welcome/testing',$data);


    }

    public function cari($cari=NULL) {

        $jumlah_data = $this->m_depanel_post->jumlah_data_news_post();

        $config['base_url'] = base_url().'/news/cari';
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = '12';

        $keyword    =   $this->input->post('cari');
        $data['ok']    =   $this->m_depanel_post->search_news($config['per_page'],$keyword);

        $data['departemen'] = $this->m_depanel_departemen->tampil_data_departemen()->result();
        $data['jurusan'] = $this->m_depanel_jurusan->tampil_data_jurusan_no_limit()->result();

        $this->load->view('welcome/pencarian',$data);
    }

    public function golek() {
        // tangkap variabel keyword dari URL
        $keyword = $this->uri->segment(3);

        // cari di database
        $data = $this->db->from('post')->like('judul_id',$keyword)->get();

        // format keluaran di dalam array
        foreach($data->result() as $row)
        {
            $arr['query'] = $keyword;
            $arr['suggestions'][] = array(
                'judul_id' =>$row->judul_id
            );
        }
        // minimal PHP 5.2
        echo json_encode($arr);
    }
}
