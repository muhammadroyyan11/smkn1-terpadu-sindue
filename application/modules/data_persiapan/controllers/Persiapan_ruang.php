<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Persiapan_ruang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        cek_akses();  
        $this->load->library('form_validation');
        $this->load->model('PersiapanRuang_model', 'ruang');
    }

    public function index()
    {
        $this->form_validation->set_rules('kode_ruang', 'Kode Ruangan', 'required');
        $this->form_validation->set_rules('keterangan', 'Nama Ruangan', 'required');
       
        if ($this->form_validation->run() == false) {
            $this->benchmark->mark('code_start');
            $data['title'] = 'Master Ruang';
            $data['home'] = 'Panel Setting';
            $data['subtitle'] = $data['title'];
            $data['main_menu'] = main_menu();
            $data['sub_menu'] = sub_menu();
            $data['cek_akses'] = cek_akses_user();
            $data['sekolah'] = $this->db->get('m_sekolah')->row_array();
            $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
            $data['ruang'] = $this->ruang->getRuang();

            $this->load->view('layout/header-top', $data);
            $this->load->view('layout/header-bottom', $data);
            $this->load->view('layout/main-navigation', $data);
            $this->load->view('data_persiapan/persiapan_ruang/list', $data);
            $this->load->view('layout/footer-top');
            $this->load->view('layout/footer-bottom');
            $this->benchmark->mark('code_end');
        } else {

            $data =
                [
                    'npsn' => $this->input->post('npsn', true),
                    'kode_ruang' => $this->input->post('kode_ruang', true),
                    'keterangan' => $this->input->post('keterangan', true),
                ];
            $this->db->insert('m_ruang', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
           Berhasi Tambah Data !</div>');
            redirect('data_persiapan/persiapan_ruang');
        }
    }

    public function delRuang($sek_id)
    {
        $data = ['kode_ruang' => $sek_id];
        $this->db->delete('m_ruang', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Berhasil Hapus Data !</div>');
        redirect('data_persiapan/persiapan_ruang');
    }

    public function editRuang()
    {
        $id = $this->input->post('ed_id', true);       
        $keterangan = $this->input->post('ed_keterangan', true);       
        $npsn = $this->input->post('npsn', true);
        $data = [
            'npsn' => $npsn,
            'keterangan' => $keterangan,           
        ];
        $this->db->where('kode_ruang', $id);
        $this->db->update('m_ruang', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Berhasil Ubah Data !</div>');
        redirect('data_persiapan/persiapan_ruang');
    }
}
