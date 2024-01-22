<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_Sekolah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        cek_aktif_login();
        cek_akses_user();
        cek_akses();
        $this->load->library('form_validation');
        $this->load->model('Download_model', 'download');
    }

    public function index()
    {
        $this->benchmark->mark('code_start');
        $data['title'] = 'Data Download Sekolah';
        $data['home'] = 'Data Download';
        $data['subtitle'] = $data['title'];
        $data['main_menu'] = main_menu();
        $data['sub_menu'] = sub_menu();
        $data['cek_akses'] = cek_akses_user();
        $data['sekolah'] = $this->db->get('m_sekolah')->row_array();
        $data['data_download'] = $this->download->get('media', ['type' => 'Data Sekolah'])->result_array();
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
        $data['skema'] = $this->download->getSkema();
        // $data['count'] = $this->sch->getCount();
        // var_dump($data['main_menu']);
        $this->load->view('layout/header-top', $data);
        $this->load->view('layout/header-bottom', $data);
        $this->load->view('layout/main-navigation', $data);
        $this->load->view('data_download/download_v', $data);
        $this->load->view('layout/footer-top');
        $this->load->view('layout/footer-bottom');
        $this->benchmark->mark('code_end');
    }

    public function add()
    {
        $this->benchmark->mark('code_start');
        $data['title'] = 'Tambah Data Download Sekolah';
        $data['home'] = 'Data Download';
        $data['subtitle'] = $data['title'];
        $data['main_menu'] = main_menu();
        $data['sub_menu'] = sub_menu();
        $data['cek_akses'] = cek_akses_user();
        $data['sekolah'] = $this->db->get('m_sekolah')->row_array();
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
        $data['skema'] = $this->download->getSkema();
    }

    public function add_action()
    {
        $post = $this->input->post(null, true);

        $config['upload_path']          = './assets/uploads/sekolah/';
        $config['allowed_types']        = 'rar|xls|xlsx|doc|docs|pdf|zip|jpg|jpeg|png|gif';
        $config['max_height']           = 10000;
        $config['file_name']            = 'sekolah-' . date('ymd');

        $this->load->library('upload', $config);

        if (@$_FILES['fileUploads']['name'] != null) {
            if ($this->upload->do_upload('fileUploads')) {
                $post['fileUploads'] = $this->upload->data('file_name');

                $params = [
                    'name_file'         => $post['file_name'],
                    'uploads_file'      => $this->upload->data('file_name'),
                    'type'              => 'Data Sekolah',
                    'ext'               => $this->upload->data('file_ext'),
                    'size'              => $this->upload->data('file_size'),
                    'jml_download'      => 0
                ];

                $this->download->add('media', $params);

                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil tambah data !!!</div>');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Terjadi Kesalahan !!!</div>');
                }
            } else {
                echo 'error';
            }
        } else {
            echo 'error';
        }
        redirect('data_download/data_sekolah');
    }

    public function deldata($id){
        $this->download->del('media', ['id' => $id]);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data Berhasil dihapus !!!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Terjadi Kesalahan !!!</div>');
        }
        redirect('data_download/data_sekolah');
    }
}
