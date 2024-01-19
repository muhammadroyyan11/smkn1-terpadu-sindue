<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
        $data['title'] = 'Dashboard';
        $data['home'] = 'Lulus Dashboard';
        $data['subtitle'] = $data['title'];
        $data['main_menu'] = main_menu();
        $data['sub_menu'] = sub_menu();
        $data['cek_akses'] = cek_akses_user();
        $data['sekolah'] = $this->db->get('m_sekolah')->row_array();
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
       
        $get_tasm = $this->db->get_where('t_tahun', ['aktif' => 'Y'])->row_array();
        $data['tp'] = $get_tasm['th_pelajaran'];
        $data['semester'] = substr($get_tasm['tahun'], 4);
        $data['tasm'] = $get_tasm['tahun'];
        $data['ta'] = substr($get_tasm['tahun'], 0, 4);
        $ta = substr($get_tasm['tahun'], 0, 4);

        $data['all_lulus'] = $this->sch->data_lulus();
        $data['th_lulus'] = $this->sch->th_lulus();
        $data['cek_lulus'] = $this->sch->cek_lulus();

        $data['alumni_register'] = $this->sch->alumni_register();
        $data['perbaikan'] = $this->sch->alumni_perbaikan();
   
        $data['data_register'] = $this->sch->data_register();
        $data['info_register'] = $this->sch->info_register();

        $this->load->view('layout/header-top', $data);
        $this->load->view('lulus_dashboard/dashboard/_css');
        $this->load->view('layout/header-bottom', $data);
        $this->load->view('layout/main-navigation', $data);
        $this->load->view('lulus_dashboard/dashboard/_view', $data);
        $this->load->view('layout/footer-top');
        $this->load->view('lulus_dashboard/dashboard/_js');
        $this->load->view('layout/footer-bottom');
        $this->benchmark->mark('code_end');
    }

}
