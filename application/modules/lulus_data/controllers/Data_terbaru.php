<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_terbaru extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        cek_aktif_login();
        cek_akses_user();
        cek_akses();  
        $this->load->library('form_validation');
        $this->load->model('LulusInfoIsi_model', 'sch');
    }
  
    // kelulusan
    public function index()
    {
        $this->benchmark->mark('code_start');
        $data['title'] = 'Data Terbaru';
        $data['home'] = 'Lulus Data';
        $data['subtitle'] = $data['title'];
        $data['main_menu'] = main_menu();
        $data['sub_menu'] = sub_menu();
        $data['cek_akses'] = cek_akses_user();
        $data['sekolah'] = $this->db->get('m_sekolah')->row_array();
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
        $data['publis'] = $this->sch->getPublish();
        $data['aktivasi'] = $this->db->get('alumni_register')->result_array();
        // var_dump($data['pegawai']);
        // die;
        $this->load->view('layout/header-top', $data);
        $this->load->view('lulus_data/data_terbaru/list_css');
        $this->load->view('layout/header-bottom', $data);
        $this->load->view('layout/main-navigation', $data);
        $this->load->view('lulus_data/data_terbaru/data_terbaru_v', $data);
        $this->load->view('layout/footer-top');
        $this->load->view('lulus_data/data_terbaru/list_js');
        $this->load->view('layout/footer-bottom');
        $this->benchmark->mark('code_end');
    }

    function edit($id)
    {
        cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
        $data['alumni'] = $this->db->get_where('alumni_register', ['alumni_id' => $id])->row_array();
        $this->load->view('lulus_data/data_terbaru/list_css');
        $this->load->view('lulus_data/data_terbaru/data_terbaru_edit', $data);
        $this->load->view('lulus_data/data_terbaru/list_js');
    }
      
    public function ubah_baru()
    {
        // cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        echo $this->sch->ubah_baru();
        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert"> Berhasil ubah data !!!</div>');
        redirect('lulus_data/data_terbaru');
    }   

    function detail($id)
    {
        cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
        $data['alumni'] = $this->db->get_where('alumni_register', ['alumni_id' => $id])->row_array();
        $this->load->view('lulus_data/data_terbaru/list_css');
        $this->load->view('lulus_data/data_terbaru/data_terbaru_detail', $data);
        $this->load->view('lulus_data/data_terbaru/list_js');
    }

}
