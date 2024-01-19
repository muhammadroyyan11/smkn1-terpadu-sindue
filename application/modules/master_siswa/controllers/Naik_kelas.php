<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Naik_kelas extends CI_Controller

{

    function __construct()
    {
        parent::__construct();
        cek_aktif_login();
        cek_akses_user();
        is_logged_in();
        cek_akses();  
        $this->load->library('form_validation');
        $this->load->model('Naik_kelas_model', 'naik_kelas');
    }

    public function index()
    {
        if ($this->form_validation->run() == false) {

            $this->benchmark->mark('code_start');
            $data['title'] = 'Daftar Ulang';
            $data['home'] = 'Master Siswa';
            $data['subtitle'] = $data['title'];
            $data['main_menu'] = main_menu();
            $data['sub_menu'] = sub_menu();
            $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai'), 'npsn' => $this->session->userdata('npsn')])->row_array();
            $data['sekolah'] = $this->db->get_where('m_sekolah',['npsn' => $this->session->userdata('npsn')])->row_array();
            $data['data_sekolah'] = $this->naik_kelas->get_datasekolah();
            $data['kelas'] = $this->db->get_where('m_kelas')->result_array();
            $data['rombel'] = $this->naik_kelas->get_rombel();
            $this->load->view('layout/header-top', $data);
            $this->load->view('master_siswa/naik_kelas/naik_kelas_css');
            $this->load->view('layout/header-bottom', $data);
            $this->load->view('layout/main-navigation', $data);
            $this->load->view('master_siswa/naik_kelas/naik_kelas_v', $data);
            $this->load->view('layout/footer-top');
            $this->load->view('master_siswa/naik_kelas/naik_kelas_js');
            $this->load->view('layout/footer-bottom');
            $this->benchmark->mark('code_end');
        } else {
        }
    }

    public function daftar_ulang()
    {
        $status = $this->input->post('status');
        if('siswa_baru' == $status ){
            $id = $this->input->post('tingkat');
            redirect('master_siswa/naik_kelas/tabel_baru/'.$id);
        };
        if('naik_kelas' == $status ){            
            $id = $this->input->post('tingkat');  
            redirect('master_siswa/naik_kelas/tabel_naik/'.$id);
        };
        
    }

    public function tabel_baru($id)
    {
        if ($this->form_validation->run() == false) {
            $this->benchmark->mark('code_start');
            $data['title'] = 'Daftar Ulang';
            $data['home'] = 'Master Siswa';
            $data['subtitle'] = $data['title'];
            $data['main_menu'] = main_menu();
            $data['sub_menu'] = sub_menu();
            $data['cek_akses'] = cek_akses_user();
            $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai'), 'npsn' => $this->session->userdata('npsn')])->row_array();
                     
            $data['sekolah'] = $this->db->get_where('m_sekolah',['npsn' => $this->session->userdata('npsn')])->row_array();

            $data['data_sekolah'] = $this->naik_kelas->get_datasekolah();
            $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
            $data['siswa'] = $this->db->get_where('m_siswa', ['tingkat' => $id, 'stat_data' => 'A'])->result_array();

            $get_tasm = $this->db->get_where('t_tahun', ['aktif' => 'Y'])->row_array();
            $data['tasm'] = $get_tasm['tahun'];
            $data['ta'] = substr($data['tasm'], 0, 4);
            
            $this->load->view('layout/header-top', $data);
            $this->load->view('master_siswa/naik_kelas/naik_kelas_css');
            $this->load->view('layout/header-bottom', $data);
            $this->load->view('layout/main-navigation', $data);
            $this->load->view('master_siswa/naik_kelas/naik_kelas_table_baru', $data);
            $this->load->view('layout/footer-top');
            $this->load->view('master_siswa/naik_kelas/naik_kelas_js');
            $this->load->view('layout/footer-bottom');
            $this->benchmark->mark('code_end');
        } else {
        }      
    }
   
    public function tabel_ubah($id)
    {
        if ($this->form_validation->run() == false) {
            $this->benchmark->mark('code_start');
            $data['title'] = 'Daftar Ulang';
            $data['home'] = 'Master Siswa';
            $data['subtitle'] = $data['title'];
            $data['main_menu'] = main_menu();
            $data['sub_menu'] = sub_menu();
            $data['cek_akses'] = cek_akses_user();          
            $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai'), 'npsn' => $this->session->userdata('npsn')])->row_array();
            $data['sekolah'] = $this->db->get_where('m_sekolah',['npsn' => $this->session->userdata('npsn')])->row_array();

            $data['data_sekolah'] = $this->naik_kelas->get_datasekolah();
            $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
            $data['siswa'] = $this->db->get_where('m_siswa', ['tingkat' => $id, 'stat_data' => 'A'])->result_array();

            $get_tasm = $this->db->get_where('t_tahun', ['aktif' => 'Y'])->row_array();
            $data['tasm'] = $get_tasm['tahun'];
            $data['ta'] = substr($data['tasm'], 0, 4);

            $data['rombel'] = $this->naik_kelas->get_siswa_naik($id);
            
            $this->load->view('layout/header-top', $data);
            $this->load->view('master_siswa/naik_kelas/naik_kelas_css');
            $this->load->view('layout/header-bottom', $data);
            $this->load->view('layout/main-navigation', $data);
            $this->load->view('master_siswa/naik_kelas/naik_kelas_ubah_baru', $data);
            $this->load->view('layout/footer-top');
            $this->load->view('master_siswa/naik_kelas/naik_kelas_js');
            $this->load->view('layout/footer-bottom');
            $this->benchmark->mark('code_end');
        } else {
        }      
    }

    public function tabel_naik($id)
    {
        if ($this->form_validation->run() == false) {
            $this->benchmark->mark('code_start');
            $data['title'] = 'Daftar Ulang';
            $data['home'] = 'Master Siswa';
            $data['subtitle'] = $data['title'];
            $data['main_menu'] = main_menu();
            $data['sub_menu'] = sub_menu();
            $data['cek_akses'] = cek_akses_user();          
            $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai'), 'npsn' => $this->session->userdata('npsn')])->row_array();
            $data['sekolah'] = $this->db->get_where('m_sekolah',['npsn' => $this->session->userdata('npsn')])->row_array();
                       
            $get_tasm = $this->db->get_where('t_tahun', ['aktif' => 'Y'])->row_array();
            $data['tasm'] = $get_tasm['tahun'];
            $data['ta'] = substr($data['tasm'], 0, 4);
            $data['kelas'] = $this->db->get_where('m_kelas')->result_array();
            $data['siswa'] = $this->naik_kelas->get_siswa_naik($id);
            
            $this->load->view('layout/header-top', $data);
            $this->load->view('master_siswa/naik_kelas/naik_kelas_css');
            $this->load->view('layout/header-bottom', $data);
            $this->load->view('layout/main-navigation', $data);
            $this->load->view('master_siswa/naik_kelas/naik_kelas_table_naik', $data);
            $this->load->view('layout/footer-top');
            $this->load->view('master_siswa/naik_kelas/naik_kelas_js');
            $this->load->view('layout/footer-bottom');
            $this->benchmark->mark('code_end');
        } else {
        }     

    }


    public function simpan_baru()
    {
        cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        echo $this->naik_kelas->simpan_baru();        
        redirect('master_siswa/naik_kelas');
    }    

    public function tabel_del()
    {
        cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        echo $this->naik_kelas->simpan_ubah();
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Berhasil ubah data !!!</div>');
        redirect('master_siswa/naik_kelas');
    }    

    public function simpan_naik()
    {
        cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        echo $this->naik_kelas->simpan_naik();
        redirect('master_siswa/naik_kelas');
    }

}

