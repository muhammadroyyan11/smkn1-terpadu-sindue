<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web_data_informasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        cek_aktif_login();
        cek_akses_user();
        cek_akses();
        $this->load->library('form_validation');
        $this->load->model('SchInformasi_m', 'sch');
    }

    // Vaksin
    public function vaksin()
    {
        $this->benchmark->mark('code_start');
        $data['title'] = 'Vaksin';
        $data['home'] = 'Web Informasi';
        $data['subtitle'] = $data['title'];
        $data['main_menu'] = main_menu();
        $data['sub_menu'] = sub_menu();
        $data['cek_akses'] = cek_akses_user();
        $data['sekolah'] = $this->db->get('m_sekolah')->row_array();
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
        $data['vaksin'] = $this->sch->getVaksin();
        // var_dump($data['pegawai']);
        // die;
        $this->load->view('layout/header-top', $data);
        $this->load->view('web_data_informasi/vaksin/list_css');
        $this->load->view('layout/header-bottom', $data);
        $this->load->view('layout/main-navigation', $data);
        $this->load->view('web_data_informasi/vaksin/vaksin_v', $data);
        $this->load->view('layout/footer-top');
        $this->load->view('web_data_informasi/vaksin/list_js');
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
        $this->load->view('web_data_informasi/vaksin/list_css');
        $this->load->view('web_data_informasi/vaksin/vaksin_add', $data);
        $this->load->view('web_data_informasi/vaksin/list_js_add');
    }

    function edit($id)
    {
        cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
        $data['vaksin'] = $this->db->get_where('m_vaksin', ['id_vaksin' => $id])->row_array();
        $this->load->view('web_data_informasi/vaksin/list_css');
        $this->load->view('web_data_informasi/vaksin/vaksin_edit', $data);
        $this->load->view('web_data_informasi/vaksin/list_js_add');
    }

    public function simpan_tambah()
    {
        // cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        echo $this->sch->simpan_tambah();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil tambah data !!!</div>');
        redirect('web_data_informasi/vaksin');
    }

    public function simpan_edit()
    {
        // cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        echo $this->sch->simpan_edit();
        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert"> Berhasil ubah data !!!</div>');
        redirect('web_data_informasi/vaksin');
    }

    public function deldata($id)
    {
        $data = ['id_vaksin' => $id];
        $this->db->delete('m_vaksin', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Berhasil hapus data !!!</div>');
        redirect('web_data_informasi/vaksin');
    }
    // end Vaksin  

    // Beasiswa
    public function beasiswa()
    {
        $this->benchmark->mark('code_start');
        $data['title'] = 'Beasiswa';
        $data['home'] = 'Web Informasi';
        $data['subtitle'] = $data['title'];
        $data['main_menu'] = main_menu();
        $data['sub_menu'] = sub_menu();
        $data['cek_akses'] = cek_akses_user();
        $data['sekolah'] = $this->db->get('m_sekolah')->row_array();
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
        $data['beasiswa'] = $this->sch->getBeasiswa();
        // var_dump($data['pegawai']);
        // die;
        $this->load->view('layout/header-top', $data);
        $this->load->view('web_data_informasi/beasiswa/list_css');
        $this->load->view('layout/header-bottom', $data);
        $this->load->view('layout/main-navigation', $data);
        $this->load->view('web_data_informasi/beasiswa/beasiswa_v', $data);
        $this->load->view('layout/footer-top');
        $this->load->view('web_data_informasi/beasiswa/list_js');
        $this->load->view('layout/footer-bottom');
        $this->benchmark->mark('code_end');
    }

    public function tambah_beasiswa()
    {
        cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
        $this->load->view('web_data_informasi/beasiswa/list_css');
        $this->load->view('web_data_informasi/beasiswa/beasiswa_add', $data);
        $this->load->view('web_data_informasi/beasiswa/list_js_add');
    }

    function edit_beasiswa($id)
    {
        cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
        $data['beasiswa'] = $this->db->get_where('m_beasiswa', ['beasiswa_id' => $id])->row_array();
        $this->load->view('web_data_informasi/beasiswa/list_css');
        $this->load->view('web_data_informasi/beasiswa/beasiswa_edit', $data);
        $this->load->view('web_data_informasi/beasiswa/list_js_add');
    }

    public function simpan_beasiswa()
    {
        // cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        echo $this->sch->simpan_beasiswa();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil tambah data !!!</div>');
        redirect('web_data_informasi/beasiswa');
    }

    public function simpan_editbeasiswa()
    {
        // cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        echo $this->sch->simpan_editbeasiswa();
        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert"> Berhasil ubah data !!!</div>');
        redirect('web_data_informasi/beasiswa');
    }

    public function delbeasiswa($id)
    {
        $data = ['beasiswa_id' => $id];
        $this->db->delete('m_beasiswa', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Berhasil hapus data !!!</div>');
        redirect('web_data_informasi/beasiswa');
    }
    // end Beasiswa
    // webinar
    public function webinar()
    {
        $this->benchmark->mark('code_start');
        $data['title'] = 'Webinar';
        $data['home'] = 'Web Informasi';
        $data['subtitle'] = $data['title'];
        $data['main_menu'] = main_menu();
        $data['sub_menu'] = sub_menu();
        $data['cek_akses'] = cek_akses_user();
        $data['sekolah'] = $this->db->get('m_sekolah')->row_array();
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
        $data['webinar'] = $this->sch->getWebinar();
        // var_dump($data['pegawai']);
        // die;
        $this->load->view('layout/header-top', $data);
        $this->load->view('web_data_informasi/webinar/list_css');
        $this->load->view('layout/header-bottom', $data);
        $this->load->view('layout/main-navigation', $data);
        $this->load->view('web_data_informasi/webinar/webinar_v', $data);
        $this->load->view('layout/footer-top');
        $this->load->view('web_data_informasi/webinar/list_js');
        $this->load->view('layout/footer-bottom');
        $this->benchmark->mark('code_end');
    }

    public function tambah_webinar()
    {
        cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
        $this->load->view('web_data_informasi/webinar/list_css');
        $this->load->view('web_data_informasi/webinar/webinar_add', $data);
        $this->load->view('web_data_informasi/webinar/list_js');
    }

    function edit_webinar($id)
    {
        cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
        $data['webinar'] = $this->db->get_where('m_webinar', ['id_webinar' => $id])->row_array();
        $this->load->view('web_data_informasi/webinar/list_css');
        $this->load->view('web_data_informasi/webinar/webinar_edit', $data);
        $this->load->view('web_data_informasi/webinar/list_js');
    }

    public function simpan_tambah_webinar()
    {
        // cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        echo $this->sch->simpan_tambah_webinar();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil tambah data !!!</div>');
        redirect('web_data_informasi/webinar');
    }

    public function simpan_edit_webinar()
    {
        // cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        echo $this->sch->simpan_edit_webinar();
        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert"> Berhasil ubah data !!!</div>');
        redirect('web_data_informasi/webinar');
    }

    public function deldata_webinar($id)
    {
        $data = ['id_webinar' => $id];
        $this->db->delete('m_webinar', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Berhasil hapus data !!!</div>');
        redirect('web_data_informasi/webinar');
    }
    // end webinar
    // jurusan
     public function jurusan()
     {
         $this->benchmark->mark('code_start');
         $data['title'] = 'Jurusan';
         $data['home'] = 'Jurusan';
         $data['subtitle'] = $data['title'];
         $data['main_menu'] = main_menu();
         $data['sub_menu'] = sub_menu();
         $data['cek_akses'] = cek_akses_user();
         $data['sekolah'] = $this->db->get('m_sekolah')->row_array();
         $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
         $data['jurusan'] = $this->sch->getJurusan();
         // var_dump($data['pegawai']);
         // die;
         $this->load->view('layout/header-top', $data);
         $this->load->view('web_data_informasi/jurusan/list_css');
         $this->load->view('layout/header-bottom', $data);
         $this->load->view('layout/main-navigation', $data);
         $this->load->view('web_data_informasi/jurusan/jurusan_v', $data);
         $this->load->view('layout/footer-top');
         $this->load->view('web_data_informasi/jurusan/list_js');
         $this->load->view('layout/footer-bottom');
         $this->benchmark->mark('code_end');
     }
 
     function detail_jurusan($id)
     {
         $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
         $data['jurusan'] = $this->db->get_where('profil_jurusan', ['id_jurusan' => $id])->row_array();
         $this->load->view('web_data_informasi/jurusan/list_css');
         $this->load->view('web_data_informasi/jurusan/jurusan_detail', $data);
         $this->load->view('web_data_informasi/jurusan/list_js');
     }
 
     public function tambah_jurusan()
     {
         cek_post();
         if (cek_akses_user()['role_id'] == 0) {
             redirect(base_url('unauthorized'));
         }
         $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
         $this->load->view('web_data_informasi/jurusan/list_css');
         $this->load->view('web_data_informasi/jurusan/jurusan_add', $data);
         $this->load->view('web_data_informasi/jurusan/list_js');
     }
 
     function edit_jurusan($id)
     {
         cek_post();
         if (cek_akses_user()['role_id'] == 0) {
             redirect(base_url('unauthorized'));
         }
         $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
         $data['jurusan'] = $this->db->get_where('profil_jurusan', ['id_jurusan' => $id])->row_array();
         $this->load->view('web_data_informasi/jurusan/list_css');
         $this->load->view('web_data_informasi/jurusan/jurusan_edit', $data);
         $this->load->view('web_data_informasi/jurusan/list_js');
     }
 
     public function simpan_tambah_jurusan()
     {
         // cek_post();
         if (cek_akses_user()['role_id'] == 0) {
             redirect(base_url('unauthorized'));
         }
         echo $this->sch->simpan_tambah_jurusan();
         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil tambah data !!!</div>');
         redirect('web_data_informasi/jurusan');
     }
 
     public function simpan_edit_jurusan()
     {
         // cek_post();
         if (cek_akses_user()['role_id'] == 0) {
             redirect(base_url('unauthorized'));
         }
         echo $this->sch->simpan_edit_jurusan();
         $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert"> Berhasil ubah data !!!</div>');
         redirect('web_data_informasi/jurusan');
     }
 
     public function deljurusan($id)
     {
         $data = ['id_jurusan' => $id];
         $this->db->delete('profil_jurusan', $data);
         $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Berhasil hapus data !!!</div>');
         redirect('web_data_informasi/jurusan');
     }
     // end jurusan
}
