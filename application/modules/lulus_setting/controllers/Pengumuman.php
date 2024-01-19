<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pengumuman extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        cek_aktif_login();
        cek_akses_user();
        is_logged_in();
        cek_akses();  
        $this->load->library('form_validation');
        $this->load->model('Info_model', 'ion_auth');
    }

    // pengumuman
    public function index()
    {
        $this->benchmark->mark('code_start');
        $data['title'] = 'Pengumuman';
        $data['home'] = 'Lulus Setting';
        $data['subtitle'] = $data['title'];
        $data['main_menu'] = main_menu();
        $data['sub_menu'] = sub_menu();
        $data['cek_akses'] = cek_akses_user();
        $data['sekolah'] = $this->db->get('m_sekolah')->row_array();
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
        $data['pengumuman'] = $this->ion_auth->getDataPengumuman();
        // var_dump($data['pegawai']);
        // die;
        $this->load->view('layout/header-top', $data);
        $this->load->view('lulus_setting/pengumuman/list_css');
        $this->load->view('layout/header-bottom', $data);
        $this->load->view('layout/main-navigation', $data);
        $this->load->view('lulus_setting/pengumuman/_v', $data);
        $this->load->view('layout/footer-top');
        $this->load->view('lulus_setting/pengumuman/list_js');
        $this->load->view('layout/footer-bottom');
        $this->benchmark->mark('code_end');
    }

    public function tambah_pengumuman()
    {
        cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        $data['title'] = 'Info Kademik';
        $data['home'] = 'Absensi Setting';
        $data['subtitle'] = $data['title'];
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
        $this->load->view('lulus_setting/pengumuman/list_css');
        $this->load->view('lulus_setting/pengumuman/_add', $data);
        $this->load->view('lulus_setting/pengumuman/list_js');
    }

    function edit_pengumuman($id)
    {
        cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        $data['title'] = 'Info Kademik';
        $data['home'] = 'Absensi Setting';
        $data['subtitle'] = $data['title'];
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
        $data['pengumuman'] = $this->ion_auth->getEdit_Pengumuman($id);
        $this->load->view('lulus_setting/pengumuman/list_css');
        $this->load->view('lulus_setting/pengumuman/_edit', $data);
        $this->load->view('lulus_setting/pengumuman/list_js');
    }

    public function simpan_tambah_pengumuman()
    {
        // cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        echo $this->ion_auth->simpan_tambah_pengumuman();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil tambah data !!!</div>');
        redirect('lulus_setting/pengumuman');
    }

    public function simpan_edit_pengumuman()
    {
        // cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        echo $this->ion_auth->simpan_edit_pengumuman();
        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert"> Berhasil ubah data !!!</div>');
        redirect('lulus_setting/pengumuman');
    }

    public function del_pengumuman($id)
    {
        $data = ['id' => $id];
        $this->db->delete('alumni_pengumuman', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Berhasil hapus data !!!</div>');
        redirect('lulus_setting/pengumuman');
    }
    // end pengumuman
}
