<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_aktivasi extends CI_Controller
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
        $data['title'] = 'Data Aktivasi';
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
        $this->load->view('lulus_data/data_aktivasi/list_css');
        $this->load->view('layout/header-bottom', $data);
        $this->load->view('layout/main-navigation', $data);
        $this->load->view('lulus_data/data_aktivasi/data_aktivasi_v', $data);
        $this->load->view('layout/footer-top');
        $this->load->view('lulus_data/data_aktivasi/list_js');
        $this->load->view('layout/footer-bottom');
        $this->benchmark->mark('code_end');
    }
      
    public function tambah()
    {
        cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        $data['sekolah'] = $this->db->get('m_sekolah')->row_array();
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
        $this->load->view('lulus_data/data_aktivasi/list_css');
        $this->load->view('lulus_data/data_aktivasi/data_aktivasi_add', $data);
        $this->load->view('lulus_data/data_aktivasi/list_js');
    }

    function edit($id)
    {
        cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
        $data['alumni'] = $this->db->get_where('alumni_register', ['alumni_id' => $id])->row_array();
        $this->load->view('lulus_data/data_aktivasi/list_css');
        $this->load->view('lulus_data/data_aktivasi/data_aktivasi_edit', $data);
        $this->load->view('lulus_data/data_aktivasi/list_js');
    }

    public function simpan()
    {
        // cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        echo $this->sch->simpan();        
    }    

    public function ubah()
    {
        // cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        echo $this->sch->ubah();
        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert"> Berhasil ubah data !!!</div>');
        redirect('lulus_data/data_aktivasi');
    }

    public function hapus($id)
    {
        $data = ['alumni_id' => $id];
        $this->db->delete('alumni_register', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Berhasil hapus data !!!</div>');
        redirect('lulus_data/data_aktivasi');
    }

    function detail($id)
    {
        cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
        $data['alumni'] = $this->db->get_where('alumni_register', ['alumni_id' => $id])->row_array();
        $this->load->view('lulus_data/data_aktivasi/list_css');
        $this->load->view('lulus_data/data_aktivasi/data_aktivasi_detail', $data);
        $this->load->view('lulus_data/data_aktivasi/list_js');
    }

}
