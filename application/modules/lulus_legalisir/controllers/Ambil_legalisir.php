<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ambil_legalisir extends CI_Controller
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
  
    // lulus_siswa
    public function index()
    {
        $this->benchmark->mark('code_start');
        $data['title'] = 'Ambil Legalisir';
        $data['home'] = 'Lulus Legalisir';
        $data['subtitle'] = $data['title'];
        $data['main_menu'] = main_menu();
        $data['sub_menu'] = sub_menu();
        $data['cek_akses'] = cek_akses_user();
        $data['sekolah'] = $this->db->get('m_sekolah')->row_array();
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
         
        $data['aktivasi'] = $this->db->get('alumni_legalisir')->result_array();
       
        $this->load->view('layout/header-top', $data);
        $this->load->view('lulus_legalisir/ambil_legalisir/list_css');
        $this->load->view('layout/header-bottom', $data);
        $this->load->view('layout/main-navigation', $data);
        $this->load->view('lulus_legalisir/ambil_legalisir/ambil_legalisir_v', $data);
        $this->load->view('layout/footer-top');
        $this->load->view('lulus_legalisir/ambil_legalisir/list_js');
        $this->load->view('layout/footer-bottom');
        $this->benchmark->mark('code_end');
    }    

    function ambil($id)
    {
        cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
        $data['legalisir'] = $this->db->get_where('alumni_legalisir', ['legalisir_id' => $id])->row_array();
        $this->load->view('lulus_legalisir/ambil_legalisir/list_css');
        $this->load->view('lulus_legalisir/ambil_legalisir/ambil_legalisir_edit', $data);
        $this->load->view('lulus_legalisir/ambil_legalisir/list_js');
    }

    public function simpan_ambil()
    {
        // cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        echo $this->sch->simpan_ambil();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil tambah data !!!</div>');
        redirect('lulus_legalisir/ambil_legalisir');
    }    
    
    function detail($id)
    {
        cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
        $data['legalisir'] = $this->db->get_where('alumni_legalisir', ['legalisir_id' => $id])->row_array();
        $this->load->view('lulus_legalisir/ambil_legalisir/list_css');
        $this->load->view('lulus_legalisir/ambil_legalisir/ambil_legalisir_detail', $data);
        $this->load->view('lulus_legalisir/ambil_legalisir/list_js');
    }
    // end lulus_siswa   

}
