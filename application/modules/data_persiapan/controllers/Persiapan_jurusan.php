<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Persiapan_jurusan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        cek_akses();  
        $this->load->library('form_validation');
        $this->load->model('PersiapanJurusan_model', 'jurusan');
    }

    public function index()
    {
        $this->form_validation->set_rules('kode_jurusan', 'Kode Jurusan', 'required');
        $this->form_validation->set_rules('jurusan', 'Nama Jurusan', 'required');
       
        if ($this->form_validation->run() == false) {
            $this->benchmark->mark('code_start');
            $data['title'] = 'Master Jurusan';
            $data['home'] = 'Panel Setting';
            $data['subtitle'] = $data['title'];
            $data['main_menu'] = main_menu();
            $data['sub_menu'] = sub_menu();
            $data['cek_akses'] = cek_akses_user();
            $data['sekolah'] = $this->db->get('m_sekolah')->row_array();
            $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
            $data['jurusan'] = $this->jurusan->getJurusan();

            $this->load->view('layout/header-top', $data);
            $this->load->view('layout/header-bottom', $data);
            $this->load->view('layout/main-navigation', $data);
            $this->load->view('data_persiapan/persiapan_jurusan/list', $data);
            $this->load->view('layout/footer-top');
            $this->load->view('layout/footer-bottom');
            $this->benchmark->mark('code_end');
        } else {

            $data =
                [
                    'npsn' => $this->input->post('npsn', true),
                    'kode_jurusan' => $this->input->post('kode_jurusan', true),
                    'jurusan' => $this->input->post('jurusan', true),
                ];
            $this->db->insert('m_jurusan', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
           Berhasi Tambah Data !</div>');
            redirect('data_persiapan/persiapan_jurusan');
        }
    }

    public function delJurusan($sek_id)
    {
        $data = ['kode_jurusan' => $sek_id];
        $this->db->delete('m_jurusan', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Berhasil Hapus Data !</div>');
        redirect('data_persiapan/persiapan_jurusan');
    }

    public function editJurusan()
    {
        $id = $this->input->post('ed_id', true);
        $jurusan = $this->input->post('ed_jurusan', true);       
        $npsn = $this->input->post('npsn', true);
        $data = [
            'npsn' => $npsn,
            'jurusan' => $jurusan,           
        ];
        $this->db->where('kode_jurusan', $id);
        $this->db->update('m_jurusan', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Berhasil Ubah Data !</div>');
        redirect('data_persiapan/persiapan_jurusan');
    }
}
