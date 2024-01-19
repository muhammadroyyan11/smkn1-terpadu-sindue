<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Persiapan_tahun extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        cek_akses();  
        $this->load->library('form_validation');
        $this->load->model('PersiapanTahun_model', 'tahun');
    }

    public function index()
    {
        $this->form_validation->set_rules('tahun_aktif', 'Tahun', 'required');

        if ($this->form_validation->run() == false) {
            $this->benchmark->mark('code_start');
            $data['title'] = 'Mater Tahun';
            $data['home'] = 'Panel Setting';
            $data['subtitle'] = $data['title'];
            $data['main_menu'] = main_menu();
            $data['sub_menu'] = sub_menu();
            $data['cek_akses'] = cek_akses_user();
            $data['sekolah'] = $this->db->get('m_sekolah')->row_array();
            $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
            $data['tahun'] = $this->tahun->getTahun();

            $this->load->view('layout/header-top', $data);
            $this->load->view('layout/header-bottom', $data);
            $this->load->view('layout/main-navigation', $data);
            $this->load->view('data_persiapan/persiapan_tahun/list', $data);
            $this->load->view('layout/footer-top');
            $this->load->view('layout/footer-bottom');
            $this->benchmark->mark('code_end');
        } else {

            $aktif = $this->input->post('aktif'); 
            $npsn = $this->input->post('npsn');  
            $semester = $this->input->post('semester');
            $tahun_aktif = $this->input->post('tahun_aktif');
            $th_pelajaran = $this->input->post('th_pelajaran');

            $data =
                [
                    'aktif' =>  $aktif,
                    'tahun' => $tahun_aktif.$semester,
                    'npsn' => $npsn,
                    'semester' =>  $semester,
                    'tahun_aktif' => $tahun_aktif, 
                    'th_pelajaran' => $th_pelajaran,
                ];
            $this->db->insert('t_tahun', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
           Berhasi Tambah Data !</div>');
            redirect('data_persiapan/persiapan_tahun');
        }
    }

    public function delTahun($sek_id)
    {
        $data = ['id' => $sek_id];
        $this->db->delete('t_tahun', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Berhasil Hapus Data !</div>');
        redirect('data_persiapan/persiapan_tahun');
    }

    public function editTahun()
    {
        $id = $this->input->post('ed_id', true);
        $aktif = $this->input->post('aktif',true);        
        $semester = $this->input->post('ed_semester', true);
        $tahun_aktif = $this->input->post('ed_tahun_aktif', true);
        $th_pelajaran = $this->input->post('ed_th_pelajaran', true);
        $data = [
            'aktif' => $aktif,
            'semester' => $semester,
            'tahun_aktif' => $tahun_aktif,
            'th_pelajaran' => $th_pelajaran,
        ];
        $this->db->where('id', $id);
        $this->db->update('t_tahun', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Berhasil Ubah Data !</div>');
        redirect('data_persiapan/persiapan_tahun');
    }
}
