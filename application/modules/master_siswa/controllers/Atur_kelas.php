<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Atur_kelas extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        cek_aktif_login();
        cek_akses_user();
        is_logged_in();
        cek_akses();  
        $this->load->library('form_validation');
        $this->load->model('Atur_kelas_model', 'atur_kelas');
    }

    public function index()
    {
        if ($this->form_validation->run() == false) {
            $this->benchmark->mark('code_start');
            $data['title'] = 'Daftar Rombel';
            $data['home'] = 'Master Siswa';
            $data['subtitle'] = $data['title'];
            $data['main_menu'] = main_menu();
            $data['sub_menu'] = sub_menu();
            $data['cek_akses'] = cek_akses_user();           
            $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai'), 'npsn' => $this->session->userdata('npsn')])->row_array();
            $data['sekolah'] = $this->db->get_where('m_sekolah',['npsn' => $this->session->userdata('npsn')])->row_array();
            $data['data_sekolah'] = $this->atur_kelas->get_datasekolah();
        
            $data['tampil'] = $this->atur_kelas->get_tampil();
       
            $this->load->view('layout/header-top', $data);
            $this->load->view('master_siswa/atur_kelas/atur_kelas_css');
            $this->load->view('layout/header-bottom', $data);
            $this->load->view('layout/main-navigation', $data);
            $this->load->view('master_siswa/atur_kelas/atur_kelas_v', $data);
            $this->load->view('layout/footer-top');
            $this->load->view('master_siswa/atur_kelas/atur_kelas_js');
            $this->load->view('layout/footer-bottom');
            $this->benchmark->mark('code_end');
        } else {
        }
    }

    public function tambah()
    {
        if ($this->form_validation->run() == false) {
            $this->benchmark->mark('code_start');
            $data['title'] = 'Daftar Rombel';
            $data['home'] = 'Master Siswa';
            $data['subtitle'] = $data['title'];
            $data['main_menu'] = main_menu();
            $data['sub_menu'] = sub_menu();
            $data['cek_akses'] = cek_akses_user();           
            $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai'), 'npsn' => $this->session->userdata('npsn')])->row_array();
            $data['sekolah'] = $this->db->get_where('m_sekolah',['npsn' => $this->session->userdata('npsn')])->row_array();
            $data['data_sekolah'] = $this->atur_kelas->get_datasekolah();

            $get_tasm = $this->db->get_where('t_tahun', ['aktif' => 'Y'])->row_array();
            $data['tasm'] = $get_tasm['tahun'];
            $data['ta'] = substr($data['tasm'], 0, 4);
            $ta = substr($data['tasm'], 0, 4);

            $data['kelas'] = $this->db->get_where('m_kelas', ['npsn' => $this->session->userdata('npsn')])->result_array();
            $get_tasm = $this->db->get_where('t_tahun', ['aktif' => 'Y', ])->row_array();
            $data['tasm'] = $get_tasm['tahun'];
            $data['ta'] = substr($data['tasm'], 0, 4);
            $data['ruang'] = $this->db->get_where('m_ruang', ['npsn' => $this->session->userdata('npsn')])->result_array();

            $this->load->view('layout/header-top', $data);
            $this->load->view('master_siswa/atur_kelas/atur_kelas_css');
            $this->load->view('layout/header-bottom', $data);
            $this->load->view('layout/main-navigation', $data);
            $this->load->view('master_siswa/atur_kelas/atur_kelas_tambah', $data);
            $this->load->view('layout/footer-top');
            $this->load->view('master_siswa/atur_kelas/atur_kelas_js');
            $this->load->view('layout/footer-bottom');
            $this->benchmark->mark('code_end');
        } else {
        }
    }

    function add_ajax_kelas($id_kel)
    {
        $query = $this->db->get_where('m_kelas', array('npsn' => $id_kel));
        $data = "<option value=''>- Select sekolah -</option>";
        foreach ($query->result() as $value) {
            $data .= "<option value='" . $value->tingkat  . "'>" . $value->nama . "</option>";
        }
        echo $data;
    }

    public function tabel($id)
    {
        $get_tasm = $this->db->get_where('t_tahun', ['aktif' => 'Y', ])->row_array();
        $data['tasm'] = $get_tasm['tahun'];
        $data['ta'] = substr($data['tasm'], 0, 4);
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai'),'npsn' => $this->session->userdata('npsn')])->row_array();
        $data['siswa'] =
            $this->db->select('a.*,b.nama nm_kelas,c.nis,c.nama nm_siswa')
            ->from('m_naik_kelas a')
            ->join('m_kelas b', 'a.tingkat = b.tingkat', 'left')
            ->join('m_siswa c', 'a.nis = c.nis', 'left')
            ->where(['a.tingkat' => $id])
            ->where(['a.tingkat_active' => 0])
            ->group_by('c.nama', 'ASC')
            ->get()->result_array();

        // var_dump($data['siswa']);
        // die;
        $this->load->view('master_siswa/atur_kelas/atur_kelas_table', $data);
    }

    public function kelas_simpan()
    {
        cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        echo $this->atur_kelas->kelas_simpan();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil tambah rombel !!!</div>');
        redirect('master_siswa/atur_kelas');
    }

    public function aturrombel($id)
    {
        if ($this->form_validation->run() == false) {
            $this->benchmark->mark('code_start');
            $data['title'] = 'Daftar Rombel';
            $data['home'] = 'Master Siswa';
            $data['subtitle'] = $data['title'];
            $data['main_menu'] = main_menu();
            $data['sub_menu'] = sub_menu();
            $data['cek_akses'] = cek_akses_user();
    
            $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai'), 'npsn' => $this->session->userdata('npsn')])->row_array();
            $data['sekolah'] = $this->db->get_where('m_sekolah',['npsn' => $this->session->userdata('npsn')])->row_array();
            
            $get_tasm = $this->db->get_where('t_tahun', ['aktif' => 'Y', ])->row_array();
            $data['tasm'] = $get_tasm['tahun'];
            $data['ta'] = substr($data['tasm'], 0, 4);

            $data['data'] = $this->atur_kelas->get_aturrombel($id);
            $data['siswa'] = $this->atur_kelas->get_siswa_at($id);

            $this->load->view('layout/header-top', $data);
            $this->load->view('master_siswa/atur_kelas/atur_kelas_css');
            $this->load->view('layout/header-bottom', $data);
            $this->load->view('layout/main-navigation', $data);
            $this->load->view('master_siswa/atur_kelas/atur_kelas_aturrombel', $data);
            $this->load->view('layout/footer-top');
            $this->load->view('master_siswa/atur_kelas/atur_kelas_js');
            $this->load->view('layout/footer-bottom');
            $this->benchmark->mark('code_end');
        } else {
        }
    }

    public function del()
    {
        cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        echo $this->atur_kelas->simpan_ubah();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil Hapus Data !!!</div>');
        $id_kelas = $this->input->post('id_kelas');
        redirect('master_siswa/atur_kelas/rombel/' . $id_kelas);
    }

    public function rombel($id)
    {
        if ($this->form_validation->run() == false) {
            $this->benchmark->mark('code_start');
            $data['title'] = 'Daftar Rombel';
            $data['home'] = 'Master Siswa';
            $data['subtitle'] = $data['title'];
            $data['main_menu'] = main_menu();
            $data['sub_menu'] = sub_menu();
            $data['cek_akses'] = cek_akses_user();

            $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai'), 'npsn' => $this->session->userdata('npsn')])->row_array();
            $data['sekolah'] = $this->db->get_where('m_sekolah',['npsn' => $this->session->userdata('npsn')])->row_array();
         
            $get_tasm = $this->db->get_where('t_tahun', ['aktif' => 'Y', ])->row_array();
            $data['tasm'] = $get_tasm['tahun'];
            $data['ta'] = $get_tasm['tahun_aktif'];

            $data['data'] = $this->atur_kelas->get_rombel($id);
            $data['siswa'] = $this->atur_kelas->get_siswa_r($id);
          
            $this->load->view('layout/header-top', $data);
            $this->load->view('master_siswa/atur_kelas/atur_kelas_css');
            $this->load->view('layout/header-bottom', $data);
            $this->load->view('layout/main-navigation', $data);
            $this->load->view('master_siswa/atur_kelas/atur_kelas_rombel', $data);
            $this->load->view('layout/footer-top');
            $this->load->view('master_siswa/atur_kelas/atur_kelas_js');
            $this->load->view('layout/footer-bottom');
            $this->benchmark->mark('code_end');
        } else {
        }
    }
}
