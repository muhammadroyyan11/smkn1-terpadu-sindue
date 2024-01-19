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
        $this->load->model('Dashboard_model', 'dashboard');
    }

    public function messageAlert($type, $title)
    {
        $messageAlert = "const Toast = Swal.mixin({
			toast: true,
			position: 'top-end',
			showConfirmButton: false,
			timer: 3000
		});
		Toast.fire({
			type: '" . $type . "',
			title: '" . $title . "'
		});";
        return $messageAlert;
    }

    public function index()
    {
        $this->benchmark->mark('code_start');
        $data['title'] = 'Dashboard';
        $data['home'] = 'Home';
        $data['subtitle'] = $data['title'];
        $data['main_menu'] = main_menu();
        $data['sub_menu'] = sub_menu();
        $data['cek_akses'] = cek_akses_user();
        $data['cek_akses'] = cek_akses();
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
        $data['sekolah'] = $this->dashboard->sekolah();
        $data['kepsek'] = $this->db->get('profil_kepsek')->row_array();        

        $data['registrasi'] = $this->dashboard->Registrasi();
        $data['diterima'] = $this->dashboard->getDaftarDiterima();
        $data['cadangan'] = $this->dashboard->getDaftarCadangan();
        $data['kuota'] = $this->dashboard->kuota();

        $data['online'] = $this->dashboard->online();
        $data['guru'] = $this->dashboard->TotalGuru();
        $data['siswa'] = $this->dashboard->TotalSiswa();
        $data['lulus'] = $this->dashboard->TotalLulus();
        $data['online'] = $this->dashboard->TotalOnline();

        $get_tasm = $this->db->get_where('t_tahun', ['aktif' => 'Y'])->row_array();
        $data['tp'] = $get_tasm['th_pelajaran'];
        $data['semester'] = substr($get_tasm['tahun'], 4);
        $data['tasm'] = $get_tasm['tahun'];
        $data['ta'] = substr($get_tasm['tahun'], 0, 4);
        $ta = substr($get_tasm['tahun'], 0, 4);
       
        $data['rombel'] = $this->dashboard->jml_kelas();
        $data['tampil'] = $this->dashboard->get_tampil();
        $data['peserta'] = $this->dashboard->get_siswarombel($ta);
        $data['mapel'] = $this->db->get_where('m_mapel')->result_array();

        $this->load->view('layout/header-top', $data);
        $this->load->view('layout/header-bottom', $data);
        $this->load->view('layout/main-navigation', $data);
        $this->load->view('dashboard_scan_desktop_v', $data);
        $this->load->view('layout/footer-top');
        $this->load->view('layout/footer-bottom');
        $this->benchmark->mark('code_end');
    }

}
