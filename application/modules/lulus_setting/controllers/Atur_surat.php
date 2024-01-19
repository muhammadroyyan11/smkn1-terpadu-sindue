<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Atur_surat extends CI_Controller
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
        $data['title'] = 'Atur Surat';
        $data['home'] = 'Lulus Setting';
        $data['subtitle'] = $data['title'];
        $data['main_menu'] = main_menu();
        $data['sub_menu'] = sub_menu();
        $data['cek_akses'] = cek_akses_user();
        $data['sekolah'] = $this->db->get('m_sekolah')->row_array();
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
        $data['publis'] = $this->sch->getPublish();
        // var_dump($data['pegawai']);
        // die;
        $this->load->view('layout/header-top', $data);
        $this->load->view('lulus_setting/atur_surat/list_css');
        $this->load->view('layout/header-bottom', $data);
        $this->load->view('layout/main-navigation', $data);
        $this->load->view('lulus_setting/atur_surat/isi_v', $data);
        $this->load->view('layout/footer-top');
        $this->load->view('lulus_setting/atur_surat/list_js');
        $this->load->view('layout/footer-bottom');
        $this->benchmark->mark('code_end');
    }
      
    public function simpan_lulus_data()
    {
        // cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        echo $this->sch->simpan_lulus_data();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil tambah data !!!</div>');
        redirect('lulus_setting/atur_surat');
    }   

}
