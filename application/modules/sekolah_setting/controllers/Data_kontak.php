<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_kontak extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_aktif_login();
        cek_akses_user();
        is_logged_in();
        cek_akses();
        $this->load->library('form_validation');
        $this->load->model('Data_kontak_model', 'data_kontak');
    }

    public function index()
    {
        if ($this->form_validation->run() == false) {
            $this->benchmark->mark('code_start');
            $data['title'] = 'Data Kontak';
            $data['home'] = 'Sekolah Setting';
            $data['subtitle'] = $data['title'];
            $data['main_menu'] = main_menu();
            $data['sub_menu'] = sub_menu();
            $data['cek_akses'] = cek_akses_user();        
            // $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
            // $data['sekolah'] = $this->db->get_where('m_sekolah')->row_array(); 
            $pegawai = $this->db->get_where('pegawai',['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
            if($pegawai['role_id'] == 1){
                $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
                $data['sekolah'] = $this->db->get_where('m_sekolah')->row_array();
            } else{
                $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai'), 'npsn' => $this->session->userdata('npsn')])->row_array();
                $data['sekolah'] = $this->db->get_where('m_sekolah',['npsn' => $this->session->userdata('npsn')])->row_array();
            }
            
            $data['kontak_data'] = $this->data_kontak->get_data();

            $this->load->view('layout/header-top',$data);
            $this->load->view('sekolah_setting/data_kontak/list_css');
            $this->load->view('layout/header-bottom',$data);
            $this->load->view('layout/main-navigation', $data);
            $this->load->view('sekolah_setting/data_kontak/list', $data);
            $this->load->view('layout/footer-top');
            $this->load->view('sekolah_setting/data_kontak/list_js');
            $this->load->view('layout/footer-bottom');
            $this->benchmark->mark('code_end');
        } else {
        }
    }

    public function tambah()
    {
        cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        } 
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
        $data['sekolah'] = $this->db->get_where('m_sekolah')->row_array();     

        $sekolah = $this->db->get_where('m_sekolah')->row_array(); 
        $data['sek_web'] = substr($sekolah['web'], 4, 100);

        $data['pegawai_data'] = $this->db->get_where('pegawai_data')->result_array();
        $data['mapel'] = $this->db->get_where('m_mapel')->result_array();   
        $data['ruang'] = $this->db->get_where('m_ruang')->result_array();      
    
        $this->load->view('sekolah_setting/data_kontak/list_css');
        $this->load->view('sekolah_setting/data_kontak/list_tambah', $data);
        $this->load->view('sekolah_setting/data_kontak/list_js');
    }

    public function simpan_tambah()
    {
        cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        echo $this->data_kontak->simpan_tambah();       
        redirect('sekolah_setting/data_kontak');
    }

    public function delPegawai($id)
    {
        $data = ['id_kontak' => $id];
        $this->db->delete('sekolah_data_kontak', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Berhasil hapus data !!!</div>');
        redirect('sekolah_setting/data_kontak');
    }

    public function editData($id)
    {
        $this->benchmark->mark('code_start');
        $data['title'] = 'Walikelas';
        $data['home'] = 'Sekolah Setting';
        $data['subtitle'] = $data['title'];
        $data['main_menu'] = main_menu();
        $data['sub_menu'] = sub_menu();
        $data['cek_akses'] = cek_akses_user();
        $data['sekolah'] = $this->db->get('m_sekolah')->row_array();
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai'), 'npsn' => $this->session->userdata('npsn')])->row_array();
                 
        $data['data_kontak'] = $this->data_kontak->get_editData($id);
        $data['pegawai_data'] = $this->db->get_where('pegawai_data')->result_array();
        $data['mapel'] = $this->db->get_where('m_mapel')->result_array();   
        $data['ruang'] = $this->db->get_where('m_ruang')->result_array();
        
        $this->load->view('layout/header-top',$data);
        $this->load->view('sekolah_setting/data_kontak/edit_css');
        $this->load->view('layout/header-bottom',$data);
        $this->load->view('layout/main-navigation', $data);
        $this->load->view('sekolah_setting/data_kontak/list_edit', $data);
        $this->load->view('layout/footer-top');
        $this->load->view('sekolah_setting/data_kontak/edit_js');
        $this->load->view('layout/footer-bottom');
        $this->benchmark->mark('code_end');
    }

    public function updateData()
    {
        cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        echo $this->data_kontak->updateData();
        redirect('sekolah_setting/data_kontak');
    }    
}


/* End of file Import.php */
/* Location: ./application/controllers/Import.php */
