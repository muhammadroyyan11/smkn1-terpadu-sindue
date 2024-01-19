<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Persiapan_mapel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        cek_akses();  
        $this->load->library('form_validation');
        $this->load->model('PersiapanMapel_model','mapel');
    }

    public function index()
    {
        $this->form_validation->set_rules('kode_mapel', 'Kode Mapel', 'required');
        $this->form_validation->set_rules('nama_mapel', 'Mata Pelajaran', 'required');
       
        if ($this->form_validation->run() == false) {
            $this->benchmark->mark('code_start');
            $data['title'] = 'Master Mapel';
            $data['home'] = 'Panel Setting';
            $data['subtitle'] = $data['title'];
            $data['main_menu'] = main_menu();
            $data['sub_menu'] = sub_menu();
            $data['cek_akses'] = cek_akses_user();
            $data['sekolah'] = $this->db->get('m_sekolah')->row_array();
            $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
            $data['mapel'] = $this->mapel->getMapel();
            $data['p_kelompok'] = array("A" => "Kelompok Umum", "B" => "Kelompok Umum Pilihan", "C" => "Kelompok Kejuruan", "D" => "Kelompok Tambahan");
            $data['p_tambahansub'] = array("NO" => "NO", "PAI" => "PAI", "MULOK" => "MULOK");

            $this->load->view('layout/header-top', $data);
            $this->load->view('layout/header-bottom', $data);
            $this->load->view('layout/main-navigation', $data);
            $this->load->view('data_persiapan/persiapan_mapel/list', $data);
            $this->load->view('layout/footer-top');
            $this->load->view('layout/footer-bottom');
            $this->benchmark->mark('code_end');
        } else {
            $data =
                [
                    'npsn' => $this->input->post('npsn', true),
                    'kode_mapel' => $this->input->post('kode_mapel', true),
                    'nama_mapel' => $this->input->post('nama_mapel', true),
                    'kelompok' => $this->input->post('kelompok', true),
                    'tambahan_sub' => $this->input->post('tambahan_sub', true),
                ];
            $this->db->insert('m_mapel', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
           Berhasi Tambah Data !</div>');
            redirect('data_persiapan/persiapan_mapel');
        }
    }

    public function delMapel($sek_id)
    {
        $data = ['id' => $sek_id];
        $this->db->delete('m_mapel', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Berhasil Hapus Data !</div>');
        redirect('data_persiapan/persiapan_mapel');
    }

    public function editMapel()
    {
        $id = $this->input->post('ed_id', true);
        $kode_mapel = $this->input->post('ed_kode_mapel', true);
        $nama_mapel = $this->input->post('ed_nama_mapel', true); 
        $kelompok = $this->input->post('ed_kelompok', true); 
        $tambahan_sub = $this->input->post('ed_tambahan_sub', true);    
        $npsn = $this->input->post('npsn', true);            
        $data = [
            'npsn' => $npsn,
            'nama_mapel' => $nama_mapel,
            'kode_mapel' => $kode_mapel,  
            'kelompok' => $kelompok,  
            'tambahan_sub' => $tambahan_sub,      
        ];
        $this->db->where('id', $id);
        $this->db->update('m_mapel', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Berhasil Ubah Data !</div>');
        redirect('data_persiapan/persiapan_mapel');
    }
}
