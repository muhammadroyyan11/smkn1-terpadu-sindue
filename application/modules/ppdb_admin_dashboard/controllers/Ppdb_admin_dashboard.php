<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ppdb_admin_dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        cek_aktif_login();
        cek_akses_user();
        cek_akses();
        $this->load->library('form_validation');
        $this->load->model('PpdbSetting_m', 'psb');
    }

    // Dashboard
    public function dashboard()
    {
        $this->benchmark->mark('code_start');
        $data['title'] = 'Dashboard';
        $data['home'] = 'PPDB Dashboard';
        $data['subtitle'] = $data['title'];
        $data['main_menu'] = main_menu();
        $data['sub_menu'] = sub_menu();
        $data['cek_akses'] = cek_akses_user();
        $data['sekolah'] = $this->db->get('m_sekolah')->row_array();
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
                
        $data['ppdb_kuota'] = $this->db->get_where('ppdb_jurusan',['status' => 1, 'jenis_daftar' => 'Siswa Baru'])->result_array();
        $data['ppdb_daftar'] = $this->psb->ppdb_daftar();
        $data['ppdb_diterima'] = $this->psb->getDaftarDiterima();
        $data['ppdb_cadangan'] = $this->psb->getDaftarCadangan();

        $data['ppdb_materi'] = $this->psb->ppdb_materi();
        $data['ppdb_nilai_quiz'] = $this->psb->ppdb_nilai_quiz();

        $data['ppdb_sekolah'] = $this->db->get('ppdb_sekolah')->result_array();
        $data['ppdb_periode'] = $this->db->get_where('ppdb_periode',['is_active' => 1])->row_array();

        $this->load->view('layout/header-top', $data);
        $this->load->view('layout/header-bottom', $data);
        $this->load->view('layout/main-navigation', $data);
        $this->load->view('ppdb_admin_dashboard/dashboard/_view', $data);
        $this->load->view('layout/footer-top');
        $this->load->view('layout/footer-bottom');
        $this->benchmark->mark('code_end');
    }
    // end Dashboard
}
