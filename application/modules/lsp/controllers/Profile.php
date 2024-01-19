<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        cek_aktif_login();
        cek_akses_user();
        cek_akses();  
        $this->load->library('form_validation');
        $this->load->model('ProfilSekolah_model', 'sekolah');
    }

    public function index()
    {
        if ($this->form_validation->run() == false) {
            $this->benchmark->mark('code_start');
            $data['title'] = 'Profil';
            $data['home'] = 'LSP';
            $data['subtitle'] = $data['title'];
            $data['main_menu'] = main_menu();
            $data['sub_menu'] = sub_menu();
            $data['cek_akses'] = cek_akses_user();
            $data['sekolah'] = $this->db->get('m_sekolah')->row_array();
            $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
            $data['sch'] = $this->sekolah->get_lokasi();
            $data['provinsi'] = $this->sekolah->get_all_provinsi();
            $this->load->view('layout/header-top', $data);
            $this->load->view('layout/header-bottom', $data);
            $this->load->view('layout/main-navigation', $data);
            $this->load->view('lsp/profil/list', $data);
            $this->load->view('layout/footer-top');
            $this->load->view('layout/footer-bottom');
            $this->benchmark->mark('code_end');
        } else {
        }
    }

    public function data_profile()
    {
        $this->form_validation->set_rules('no_sk', 'No SK', 'required');
        $this->form_validation->set_rules('no_lisensi', 'No Lisensi', 'required');
        $this->form_validation->set_rules('jenis', 'Jenis', 'required');
        $this->form_validation->set_rules('no_telp', 'No Telp', 'required');
        $this->form_validation->set_rules('no_hp', 'No HP', 'required');
        $this->form_validation->set_rules('no_fax', 'No Fax', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('website', 'Website', 'required');
        $this->form_validation->set_rules('masa_berlaku', 'Masa Berlaku', 'required');

        if ($this->form_validation->run() == false) {
        } else {

            $upload_image = $_FILES['logo'];
            // var_dump($upload_image);
            // die;
            if ($upload_image) {
                $config['allowed_types'] = 'jpeg|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './panel/dist/upload/logo/';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('logo')) {

                    $old_img = $this->input->post('old_image', true);
                    // var_dump($old_img);
                    // die;
                    if ($old_img != '') {
                        unlink(FCPATH . './panel/dist/upload/logo/' . $old_img);
                    }
                    $new_img = $this->upload->data('file_name');
                    $this->db->set('logo', $new_img);
                } else {
                    echo $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                }
            }

            $id_profil = $this->input->post('id_profil');
            $cekh = $this->db->get_where('lsp_profile', ['id_profil' => $id_profil])->row_array();
            $data =
                [
                    'no_sk' => $this->input->post('no_sk'),
                    'no_lisensi' => $this->input->post('no_lisensi'),
                    'jenis' => $this->input->post('jenis'),
                    'no_telp' => $this->input->post('no_telp'),
                    'no_hp' => $this->input->post('no_hp'),
                    'no_fax' => $this->input->post('no_fax'),
                    'email' => $this->input->post('email'),
                    'website' => $this->input->post('website'),
                    'masa_berlaku' => $this->input->post('masa_berlaku'),                    
                ];

            if ($cekh == 0) {
                $this->db->insert('lsp_profile', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                                Berhasil Tambah Data !</div>');
                redirect('lsp/profile');
            } else {
                $this->db->where('id_profil', $id_profil);
                $this->db->update('lsp_profile', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                                Berhasil Ubah Data !</div>');
                redirect('lsp/profile');
            }
        }
    }

    public function data_banner_top()
    {
        $this->form_validation->set_rules('npsn', 'NPSN', 'required');

        if ($this->form_validation->run() == false) {
        } else {

            $upload_image = $_FILES['banner'];
            //var_dump($upload_image);
            //die;
            if ($upload_image) {
                $config['allowed_types'] = 'jpeg|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './panel/dist/upload/logo/';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('banner')) {

                    $old_img = $this->input->post('old_image', true);
                    // var_dump($old_img);
                    // die;
                    if ($old_img != '') {
                        unlink(FCPATH . './panel/dist/upload/logo/' . $old_img);
                    }
                    $new_img = $this->upload->data('file_name');
                    $this->db->set('banner', $new_img);
                } else {
                    echo $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                }
            }

            $sekolah_id = $this->input->post('sekolah_id');
            $cekh = $this->db->get_where('m_sekolah', ['sekolah_id' => $sekolah_id])->row_array();

            $data =
                [
                    'npsn' => $this->input->post('npsn'),
                    'active_banner' => 2,
                ];

            if ($cekh == 0) {
                $this->db->insert('m_sekolah', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                                Berhasil Tambah Data !</div>');
                redirect('lsp/profil');
            } else {
                $this->db->where('sekolah_id', $sekolah_id);
                $this->db->update('m_sekolah', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                                Berhasil Ubah Data !</div>');
                redirect('lsp/profil');
            }
        }
    }

    public function data_sejarah()
    {
        $this->form_validation->set_rules('sejarah', 'Sejarah', 'required');

        if ($this->form_validation->run() == false) {
        } else {

            $sekolah_id = $this->input->post('sekolah_id');
            $cekh = $this->db->get_where('m_sekolah', ['sekolah_id' => $sekolah_id])->row_array();
            $data =
                [
                    'sejarah' => $this->input->post('sejarah'),
                ];

            if ($cekh == 0) {
                $this->db->insert('m_sekolah', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                                Berhasil Tambah Data !</div>');
                redirect('lsp/profil');
            } else {
                $this->db->where('sekolah_id', $sekolah_id);
                $this->db->update('m_sekolah', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                                Berhasil Ubah Data !</div>');
                redirect('lsp/profil');
            }
        }
    }

    public function data_visi_misi()
    {
        $this->form_validation->set_rules('visi_misi', 'Visi dan Misi', 'required');

        if ($this->form_validation->run() == false) {
        } else {

            $sekolah_id = $this->input->post('sekolah_id');
            $cekh = $this->db->get_where('m_sekolah', ['sekolah_id' => $sekolah_id])->row_array();
            $data =
                [
                    'visi_misi' => $this->input->post('visi_misi'),
                ];

            if ($cekh == 0) {
                $this->db->insert('m_sekolah', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                                Berhasil Tambah Data !</div>');
                redirect('lsp/profil');
            } else {
                $this->db->where('sekolah_id', $sekolah_id);
                $this->db->update('m_sekolah', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                                Berhasil Ubah Data !</div>');
                redirect('lsp/profil');
            }
        }
    }

    public function data_mars()
    {
        $this->form_validation->set_rules('mars', 'Mars Sekolah', 'required');

        if ($this->form_validation->run() == false) {
        } else {

            $sekolah_id = $this->input->post('sekolah_id');
            $cekh = $this->db->get_where('m_sekolah', ['sekolah_id' => $sekolah_id])->row_array();
            $data =
                [
                    'mars' => $this->input->post('mars'),
                ];

            if ($cekh == 0) {
                $this->db->insert('m_sekolah', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                                Berhasil Tambah Data !</div>');
                redirect('lsp/profil');
            } else {
                $this->db->where('sekolah_id', $sekolah_id);
                $this->db->update('m_sekolah', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                                Berhasil Ubah Data !</div>');
                redirect('lsp/profil');
            }
        }
    }

    public function data_kurikulum()
    {
        $this->form_validation->set_rules('kurikulum', 'Kurikulum Sekolah', 'required');

        if ($this->form_validation->run() == false) {
        } else {

            $sekolah_id = $this->input->post('sekolah_id');
            $cekh = $this->db->get_where('m_sekolah', ['sekolah_id' => $sekolah_id])->row_array();
            $data =
                [
                    'kurikulum' => $this->input->post('kurikulum'),
                ];

            if ($cekh == 0) {
                $this->db->insert('m_sekolah', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                                Berhasil Tambah Data !</div>');
                redirect('lsp/profil');
            } else {
                $this->db->where('sekolah_id', $sekolah_id);
                $this->db->update('m_sekolah', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                                Berhasil Ubah Data !</div>');
                redirect('lsp/profil');
            }
        }
    }

    public function data_akreditasi()
    {
        $this->form_validation->set_rules('npsn', 'NPSN', 'required');

        if ($this->form_validation->run() == false) {
        } else {

            $upload_image = $_FILES['akreditasi'];
            //var_dump($upload_image);
            //die;
            if ($upload_image) {
                $config['allowed_types'] = 'jpeg|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './panel/dist/upload/logo/';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('akreditasi')) {

                    $old_img = $this->input->post('old_image', true);
                    // var_dump($old_img);
                    // die;
                    if ($old_img != '') {
                        unlink(FCPATH . './panel/dist/upload/logo/' . $old_img);
                    }
                    $new_img = $this->upload->data('file_name');
                    $this->db->set('akreditasi', $new_img);
                } else {
                    echo $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                }
            }

            $sekolah_id = $this->input->post('sekolah_id');
            $cekh = $this->db->get_where('m_sekolah', ['sekolah_id' => $sekolah_id])->row_array();

            $data =
                [
                    'npsn' => $this->input->post('npsn'),
                ];

            if ($cekh == 0) {
                $this->db->insert('m_sekolah', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                                Berhasil Tambah Data !</div>');
                redirect('lsp/profil');
            } else {
                $this->db->where('sekolah_id', $sekolah_id);
                $this->db->update('m_sekolah', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                                Berhasil Ubah Data !</div>');
                redirect('lsp/profil');
            }
        }
    }

    function add_ajax_kab($id_prov)
    {
        $query = $this->db->get_where('m_kota', array('provinsi_id' => $id_prov));
        $data = "<option value=''>- Select Kabupaten -</option>";
        foreach ($query->result() as $value) {
            $data .= "<option value='" . $value->kota_id . "'>" . $value->kota . "</option>";
        }
        echo $data;
    }

    function add_ajax_kec($id_kab)
    {
        $query = $this->db->get_where('m_kecamatan', array('kota_id' => $id_kab));
        $data = "<option value=''> - Pilih Kecamatan - </option>";
        foreach ($query->result() as $value) {
            $data .= "<option value='" . $value->kecamatan_id . "'>" . $value->kecamatan . "</option>";
        }
        echo $data;
    }
}
