<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_akses();          
        $this->load->library('form_validation');
        $this->load->model('Login_m', 'login');
    }

    public function index()
    {
        if ($this->session->userdata('nis')) {
            redirect('user');
        }

        $data['title'] = 'Login';

        $data['sekolah'] = $this->login->getSekolah();       
        $data['kontak'] = $this->db->get_where('ppdb_kontak', ['status' => 1])->result_array();

        $this->form_validation->set_rules('nis', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            //css for this page only
            $this->load->view('web_lulus/_css', $data);
            //======== end               
            $this->load->view('login/login_v', $data);
            $this->load->view('login/login_js', $data);
            // js for this page only
            $this->load->view('web_lulus/_js');
            //========= end
        } else {
            // validasinya success
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('nis');
        $password = $this->input->post('password');
        $user = $this->db->get_where('alumni_register', ['nis' => $username])->row_array();
        // jika usernya ada
        if ($user) {
            // jika usernya aktif
            if ($user['alumni_aktif'] == 1) {                
                // cek password
                if ($password == $user['tanggal_lahir']) {
                    $data = [
                        'alumni_id' => $user['alumni_id'],
                        'nis' => $user['nis'],
                        'nisn' => $user['nisn'],
                        'npsn' => $user['npsn'],
                    ];             
                    $this->session->set_userdata($data);
                    if ($user['alumni_aktif'] == 1) {
                        redirect('lulus/user');
                    } else {
                        redirect('lulus/login');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Salah Password!</div>');
                    redirect('lulus/login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">NIS belum aktif!</div>');
                redirect('lulus/login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">NIS belum terdaftar!</div>');
            redirect('lulus/login');
        }
    }

    public function alumni_cari($id)
    {
        $data['alumni'] = $this->login->get_alumni($id);
        $this->load->view('lulus/login/alumni_data', $data);
    }

    public function simpanaktivasi()
    {
        $p = $this->input->post();
        $data = [
            'npsn'            => $p['npsn'],
            'no_surat'        => $p['no_surat'],
            'tahun_pelajaran' => $p['tahun_pelajaran'],            
            'nama_siswa'      => $p['nama_siswa'],
            'nis'             => $p['nis'],
            'nisn'            => $p['nisn'],
            'tempat_lahir'    => $p['tempat_lahir'],
            'tanggal_lahir'   => $p['tanggal_lahir'],
            'keterangan'      => $p['keterangan'],
            'alamat_siswa'    => $p['alamat_siswa'],
            'status'          => $p['status'],
            'tasm'            => $p['tasm'],
            'alumni_aktif'    => 1,
            // 'telp'            => $p['telp'],
            // 'email'           => $p['email'],
            // 'perbaikan'       => 1,
        ];
       
        $cek = $this->db->get_where('alumni_register',['nis' => $p['nis']])->row_array();
        if($cek['nis'] == 0 ){
            $this->db->INSERT('alumni_register', $data);
            $this->session->set_flashdata(
                'message',
                '
            <div class="alert alert-info" role="alert">
            <div class="card-header">
                <center>
                    <h4>SELAMAT AKTIVASI BERHASIL</h4>
                </center>
            </div>
             <div class="card-body">
                <center>
                    <h3>Hai!, ' . $p['nama_siswa'] . '  </h3>
                    <h3>"AKUN ANDA BERHASIL AKTIVASI"</h3>
                    <h5>silahkan login dengan menggunakan</h5>
                    <p> USERNAME : ' . $p['nis'] . ' <b></b></p>
                    <p> PASSWORD :  ' . date('Y-m-d', strtotime($p['tanggal_lahir'])) . '<b></b></p>
                    <h5>*MOHON DIINGAT JIKA PERLU SCREENSHOT</h5>
                </center>
                </div>
           </div>
           '
            );
            // $this->session->set_flashdata('message', ' <div class="alert alert-success" role="alert"> Sudah berhasil aktivasi !!! </div>');
            redirect('lulus/login');
        } else {
            $this->session->set_flashdata('message', ' <div class="alert alert-warning" role="alert"> Data sudah di aktivasi !!! </div>');
            redirect('lulus/login');
        }
        
    }

    public function logout()
    {
        $this->session->unset_userdata('nis');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
        redirect('lulus/login');
    }

    public function blocked()
    {
        $this->load->view('login/blocked');
    }
}

/*
Theme Name: CAHDESO
Author: ALBERTUS EKO WILASATRYAWAN
Author URI: 'https://sistemanakdesa.my.id/'
Description: A development theme, from static HTML-CSS-JavaScript-PHP to CMS
Version: 1.0
License: GNU General Public License v2 or later
License URI: 'https://sistemanakdesa.my.id/'
*/

