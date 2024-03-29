<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Persiapan_kelas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        cek_akses();  
        $this->load->library('form_validation');
        $this->load->model('PersiapanKelas_model', 'kelas');
    }

    public function index()
    {
        $this->form_validation->set_rules('tingkat', 'Kelas', 'required');
        $this->form_validation->set_rules('nama', 'Nama Kelas', 'required');
       
        if ($this->form_validation->run() == false) {
            $this->benchmark->mark('code_start');
            $data['title'] = 'Master Kelas';
            $data['home'] = 'Panel Setting';
            $data['subtitle'] = $data['title'];
            $data['main_menu'] = main_menu();
            $data['sub_menu'] = sub_menu();
            $data['cek_akses'] = cek_akses_user();
            $data['sekolah'] = $this->db->get('m_sekolah')->row_array();
            $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
            $data['kelas'] = $this->kelas->getKelas();

            $this->load->view('layout/header-top', $data);
            $this->load->view('layout/header-bottom', $data);
            $this->load->view('layout/main-navigation', $data);
            $this->load->view('data_persiapan/persiapan_kelas/list', $data);
            $this->load->view('layout/footer-top');
            $this->load->view('layout/footer-bottom');
            $this->benchmark->mark('code_end');
        } else {

            $data =
                [
                    'npsn' => $this->input->post('npsn', true),
                    'tingkat' => $this->input->post('tingkat', true),
                    'nama' => $this->input->post('nama', true),
                ];
            $this->db->insert('m_kelas', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
           Berhasi Tambah Data !</div>');
            redirect('data_persiapan/persiapan_kelas');
        }
    }

    public function delKelas($sek_id)
    {
        $data = ['id' => $sek_id];
        $this->db->delete('m_kelas', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Berhasil Hapus Data !</div>');
        redirect('data_persiapan/persiapan_kelas');
    }

    public function editKelas()
    {
        $id = $this->input->post('ed_id', true);
        $tingkat = $this->input->post('ed_tingkat', true);
        $nama = $this->input->post('ed_nama', true);
        $npsn = $this->input->post('npsn', true);
        $data = [
            'npsn' => $npsn,
            'tingkat' => $tingkat,
            'nama' => $nama,
        ];
        $this->db->where('id', $id);
        $this->db->update('m_kelas', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Berhasil Ubah Data !</div>');
        redirect('data_persiapan/persiapan_kelas');
    }
}
