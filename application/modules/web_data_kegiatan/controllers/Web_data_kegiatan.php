<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web_data_kegiatan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        cek_aktif_login();
        cek_akses_user();
        cek_akses();
        $this->load->library('form_validation');
        $this->load->model('SchKegiatan_m', 'sch');
    }

    // P5SD
    public function p5()
    {
        $this->benchmark->mark('code_start');
        $data['title'] = 'P5 SMA';
        $data['home'] = 'Web Kegiatan';
        $data['subtitle'] = $data['title'];
        $data['main_menu'] = main_menu();
        $data['sub_menu'] = sub_menu();
        $data['cek_akses'] = cek_akses_user();
        $data['sekolah'] = $this->db->get('m_sekolah')->row_array();
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
        $data['p5'] = $this->sch->getp5();
        // var_dump($data['pegawai']);
        // die;
        $this->load->view('layout/header-top', $data);
        $this->load->view('web_data_kegiatan/p5/list_css');
        $this->load->view('layout/header-bottom', $data);
        $this->load->view('layout/main-navigation', $data);
        $this->load->view('web_data_kegiatan/p5/p5_v', $data);
        $this->load->view('layout/footer-top');
        $this->load->view('web_data_kegiatan/p5/list_js');
        $this->load->view('layout/footer-bottom');
        $this->benchmark->mark('code_end');
    }

    function detail_p5($id)
    {
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
        $data['p5'] = $this->db->get_where('profil_p5', ['id_p5' => $id])->row_array();
        $this->load->view('web_data_kegiatan/p5/list_css');
        $this->load->view('web_data_kegiatan/p5/p5_detail', $data);
        $this->load->view('web_data_kegiatan/p5/list_add_js');
    }

    public function tambah_p5()
    {
        cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
        $this->load->view('web_data_kegiatan/p5/list_css');
        $this->load->view('web_data_kegiatan/p5/p5_add', $data);
        $this->load->view('web_data_kegiatan/p5/list_add_js');
    }

    function edit_p5($id)
    {
        cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
        $data['p5'] = $this->db->get_where('profil_p5', ['id_p5' => $id])->row_array();
        $this->load->view('web_data_kegiatan/p5/list_css');
        $this->load->view('web_data_kegiatan/p5/p5_edit', $data);
        $this->load->view('web_data_kegiatan/p5/list_add_js');
    }

    public function simpan_tambah_p5()
    {
        // cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        echo $this->sch->simpan_tambah_p5();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil tambah data !!!</div>');
        redirect('web_data_kegiatan/p5');
    }

    public function simpan_edit_p5()
    {
        // cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        echo $this->sch->simpan_edit_p5();
        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert"> Berhasil ubah data !!!</div>');
        redirect('web_data_kegiatan/p5');
    }

    public function delp5($id)
    {
        $data = ['id_p5' => $id];
        $this->db->delete('profil_p5', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Berhasil hapus data !!!</div>');
        redirect('web_data_kegiatan/p5');
    }
    // end P5SD

    // Portal
    public function portal()
    {
        $this->benchmark->mark('code_start');
        $data['title'] = 'Portal';
        $data['home'] = 'Web Kegiatan';
        $data['subtitle'] = $data['title'];
        $data['main_menu'] = main_menu();
        $data['sub_menu'] = sub_menu();
        $data['cek_akses'] = cek_akses_user();
        $data['sekolah'] = $this->db->get('m_sekolah')->row_array();
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
        $data['belajar'] = $this->sch->getBelajar();
        // var_dump($data['pegawai']);
        // die;
        $this->load->view('layout/header-top', $data);
        $this->load->view('web_data_kegiatan/portal/list_css');
        $this->load->view('layout/header-bottom', $data);
        $this->load->view('layout/main-navigation', $data);
        $this->load->view('web_data_kegiatan/portal/portal_v', $data);
        $this->load->view('layout/footer-top');
        $this->load->view('web_data_kegiatan/portal/list_js');
        $this->load->view('layout/footer-bottom');
        $this->benchmark->mark('code_end');
    }

    public function tambah()
    {
        cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
        $this->load->view('web_data_kegiatan/portal/list_css');
        $this->load->view('web_data_kegiatan/portal/portal_add', $data);
        $this->load->view('web_data_kegiatan/portal/list_js_add');
    }

    function edit($id)
    {
        cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
        $data['belajar'] = $this->db->get_where('profil_belajar', ['belajar_id' => $id])->row_array();
        $this->load->view('web_data_kegiatan/portal/list_css');
        $this->load->view('web_data_kegiatan/portal/portal_edit', $data);
        $this->load->view('web_data_kegiatan/portal/list_js_add');
    }

    public function simpan_tambah()
    {
        // cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        echo $this->sch->simpan_tambah();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil tambah data !!!</div>');
        redirect('web_data_kegiatan/portal');
    }

    public function simpan_edit()
    {
        // cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        echo $this->sch->simpan_edit();
        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert"> Berhasil ubah data !!!</div>');
        redirect('web_data_kegiatan/portal');
    }

    public function delbelajar($id)
    {
        $data = ['belajar_id' => $id];
        $this->db->delete('profil_belajar', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Berhasil hapus data !!!</div>');
        redirect('web_data_kegiatan/portal');
    }
    // end Portal
    // berita
    public function berita()
    {
        $this->benchmark->mark('code_start');
        $data['title'] = 'Berita';
        $data['home'] = 'Web Kegiatan';
        $data['subtitle'] = $data['title'];
        $data['main_menu'] = main_menu();
        $data['sub_menu'] = sub_menu();
        $data['cek_akses'] = cek_akses_user();
        $data['sekolah'] = $this->db->get('m_sekolah')->row_array();
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
        $data['berita'] = $this->sch->getBerita();
        // var_dump($data['pegawai']);
        // die;
        $this->load->view('layout/header-top', $data);
        $this->load->view('web_data_kegiatan/berita/list_css');
        $this->load->view('layout/header-bottom', $data);
        $this->load->view('layout/main-navigation', $data);
        $this->load->view('web_data_kegiatan/berita/berita_v', $data);
        $this->load->view('layout/footer-top');
        $this->load->view('web_data_kegiatan/berita/list_js');
        $this->load->view('layout/footer-bottom');
        $this->benchmark->mark('code_end');
    }

    public function tambah_berita()
    {
        cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
        $this->load->view('web_data_kegiatan/berita/list_css');
        $this->load->view('web_data_kegiatan/berita/berita_add', $data);
        $this->load->view('web_data_kegiatan/berita/list_js_add');
    }

    function edit_berita($id)
    {
        cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
        $data['berita'] = $this->db->get_where('profil_artikel', ['id_artikel' => $id])->row_array();
        $this->load->view('web_data_kegiatan/berita/list_css');
        $this->load->view('web_data_kegiatan/berita/berita_edit', $data);
        $this->load->view('web_data_kegiatan/berita/list_js_add');
    }

    function detail_berita($id)
    {
        $data['title'] = 'Berita';
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
        $data['berita'] = $this->db->get_where('profil_artikel', ['id_artikel' => $id])->row_array();
        $this->load->view('web_data_kegiatan/berita/list_css');
        $this->load->view('web_data_kegiatan/berita/berita_detail', $data);
        $this->load->view('web_data_kegiatan/berita/list_js_add');
    }

    public function simpan_berita()
    {
        // cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        echo $this->sch->simpan_berita();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil tambah data !!!</div>');
        redirect('web_data_kegiatan/berita');
    }

    public function simpan_editberita()
    {
        // cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        echo $this->sch->simpan_editberita();
        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert"> Berhasil ubah data !!!</div>');
        redirect('web_data_kegiatan/berita');
    }

    public function delberita($id)
    {
        $data = ['id_artikel' => $id];
        $this->db->delete('profil_artikel', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Berhasil hapus data !!!</div>');
        redirect('web_data_kegiatan/berita');
    }
    // end berita
    // galery
    public function galery()
    {
        $this->benchmark->mark('code_start');
        $data['title'] = 'Galery';
        $data['home'] = 'Web Kegiatan';
        $data['subtitle'] = $data['title'];
        $data['main_menu'] = main_menu();
        $data['sub_menu'] = sub_menu();
        $data['cek_akses'] = cek_akses_user();
        $data['sekolah'] = $this->db->get('m_sekolah')->row_array();
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
        $data['galery'] = $this->sch->getGalery();
        // var_dump($data['pegawai']);
        // die;
        $this->load->view('layout/header-top', $data);
        $this->load->view('web_data_kegiatan/galery/list_css');
        $this->load->view('layout/header-bottom', $data);
        $this->load->view('layout/main-navigation', $data);
        $this->load->view('web_data_kegiatan/galery/galery_v', $data);
        $this->load->view('layout/footer-top');
        $this->load->view('web_data_kegiatan/galery/list_js');
        $this->load->view('layout/footer-bottom');
        $this->benchmark->mark('code_end');
    }

    public function tambah_galery()
    {
        cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
        $this->load->view('web_data_kegiatan/galery/list_css');
        $this->load->view('web_data_kegiatan/galery/galery_add', $data);
        $this->load->view('web_data_kegiatan/galery/list_js_add');
    }

    function edit_galery($id)
    {
        cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
        $data['galery'] = $this->db->get_where('profil_galeri', ['id_galeri' => $id])->row_array();
        $this->load->view('web_data_kegiatan/galery/list_css');
        $this->load->view('web_data_kegiatan/galery/galery_edit', $data);
        $this->load->view('web_data_kegiatan/galery/list_js_add');
    }

    function detail_galery($id)
    {
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
        $data['galery'] = $this->db->get_where('profil_galeri', ['id_galeri' => $id])->row_array();
        $data['galery_plus'] = $this->db->get_where('profil_galeri_sub', ['id_galeri' => $id])->result_array();
        $this->load->view('web_data_kegiatan/galery/list_css');
        $this->load->view('web_data_kegiatan/galery/galery_detail', $data);
        $this->load->view('web_data_kegiatan/galery/list_js_add');
    }

    public function simpan_galery()
    {
        // cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        echo $this->sch->simpan_galery();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil tambah data !!!</div>');
        redirect('web_data_kegiatan/galery');
    }

    public function simpan_editgalery()
    {
        // cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        echo $this->sch->simpan_editgalery();
        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert"> Berhasil ubah data !!!</div>');
        redirect('web_data_kegiatan/galery');
    }

    public function delgalery($id)
    {
        $data = ['id_galeri' => $id];
        $this->db->delete('profil_galeri', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Berhasil hapus data !!!</div>');
        redirect('web_data_kegiatan/galery');
    }
    // end galery
    // galery plus    
    public function galery_plus($id)
    {
        $this->benchmark->mark('code_start');
        $data['title'] = 'Galery';
        $data['home'] = 'Web Kegiatan';
        $data['subtitle'] = $data['title'];
        $data['main_menu'] = main_menu();
        $data['sub_menu'] = sub_menu();
        $data['cek_akses'] = cek_akses_user();
        $data['sekolah'] = $this->db->get('m_sekolah')->row_array();
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
        $data['galery'] = $this->sch->getGaleryPlus($id);
        $data['galery_plus'] = $this->db->get_where('profil_galeri_sub', ['id_galeri' => $id])->result_array();
        // var_dump($data['galery']);
        // die;
        $this->load->view('layout/header-top', $data);
        $this->load->view('web_data_kegiatan/galery/list_css');
        $this->load->view('layout/header-bottom', $data);
        $this->load->view('layout/main-navigation', $data);
        $this->load->view('web_data_kegiatan/galery/galery_v_plus', $data);
        $this->load->view('layout/footer-top');
        $this->load->view('web_data_kegiatan/galery/list_js');
        $this->load->view('layout/footer-bottom');
        $this->benchmark->mark('code_end');
    }

    public function tambah_galery_plus($id)
    {
        cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
        $data['galery'] = $this->db->get_where('profil_galeri', ['id_galeri' => $id])->row_array();
        $this->load->view('web_data_kegiatan/galery/list_css');
        $this->load->view('web_data_kegiatan/galery/galery_add_plus', $data);
        $this->load->view('web_data_kegiatan/galery/list_js_add');
    }

    function edit_galery_plus($id)
    {
        cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
        $data['galery'] = $this->db->get_where('profil_galeri_sub', ['id_galeri_sub' => $id])->row_array();
        $this->load->view('web_data_kegiatan/galery/list_css');
        $this->load->view('web_data_kegiatan/galery/galery_edit_plus', $data);
        $this->load->view('web_data_kegiatan/galery/list_js_add');
    }

    public function simpan_galeryplus()
    {
        // cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        echo $this->sch->simpan_galeryplus();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil tambah data !!!</div>');
        $id_galeri = $this->input->post('id_galeri', true);
        redirect('web_data_kegiatan/galery_plus/' . $id_galeri);
    }

    public function simpan_editgaleryplus()
    {
        // cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        echo $this->sch->simpan_editgaleryplus();
        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert"> Berhasil ubah data !!!</div>');
        $id_galeri = $this->input->post('id_galeri', true);
        redirect('web_data_kegiatan/galery_plus/' . $id_galeri);
    }

    public function delgaleryplus($id)
    {
        $data = ['id_galeri_sub' => $id];
        $this->db->delete('profil_galeri_sub', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Berhasil hapus data !!!</div>');
        $id_galeri = $this->input->post('id_galeri', true);
        redirect('web_data_kegiatan/galery_plus/' . $id_galeri);
    }
    // end galery plus
    
    // video
     public function video()
     {
         $this->benchmark->mark('code_start');
         $data['title'] = 'Video';
         $data['home'] = 'Web Kegiatan';
         $data['subtitle'] = $data['title'];
         $data['main_menu'] = main_menu();
         $data['sub_menu'] = sub_menu();
         $data['cek_akses'] = cek_akses_user();
         $data['sekolah'] = $this->db->get('m_sekolah')->row_array();
         $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
         $data['video'] = $this->sch->getVideo();
         // var_dump($data['pegawai']);
         // die;
         $this->load->view('layout/header-top', $data);
         $this->load->view('web_data_kegiatan/video/list_css');
         $this->load->view('layout/header-bottom', $data);
         $this->load->view('layout/main-navigation', $data);
         $this->load->view('web_data_kegiatan/video/video_v', $data);
         $this->load->view('layout/footer-top');
         $this->load->view('web_data_kegiatan/video/list_js');
         $this->load->view('layout/footer-bottom');
         $this->benchmark->mark('code_end');
     }
 
     public function tambah_video()
     {
         cek_post();
         if (cek_akses_user()['role_id'] == 0) {
             redirect(base_url('unauthorized'));
         }
         $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
         $this->load->view('web_data_kegiatan/video/list_css');
         $this->load->view('web_data_kegiatan/video/video_add', $data);
         $this->load->view('web_data_kegiatan/video/list_js_add');
     }
 
     function edit_video($id)
     {
         cek_post();
         if (cek_akses_user()['role_id'] == 0) {
             redirect(base_url('unauthorized'));
         }
         $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
         $data['video'] = $this->db->get_where('profil_video', ['id_video' => $id])->row_array();
         $this->load->view('web_data_kegiatan/video/list_css');
         $this->load->view('web_data_kegiatan/video/video_edit', $data);
         $this->load->view('web_data_kegiatan/video/list_js_add');
     }
 
     public function simpan_tambah_video()
     {
         // cek_post();
         if (cek_akses_user()['role_id'] == 0) {
             redirect(base_url('unauthorized'));
         }
         echo $this->sch->simpan_tambah_video();
         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil tambah data !!!</div>');
         redirect('web_data_kegiatan/video');
     }
 
     public function simpan_edit_video()
     {
         // cek_post();
         if (cek_akses_user()['role_id'] == 0) {
             redirect(base_url('unauthorized'));
         }
         echo $this->sch->simpan_edit_video();
         $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert"> Berhasil ubah data !!!</div>');
         redirect('web_data_kegiatan/video');
     }
 
     public function delvideo($id)
     {
         $data = ['id_video' => $id];
         $this->db->delete('profil_video', $data);
         $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Berhasil hapus data !!!</div>');
         redirect('web_data_kegiatan/video');
     }
     // end video

}
