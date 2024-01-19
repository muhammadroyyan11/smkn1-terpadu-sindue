<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        cek_akses();  
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $user = $this->db->get_where('alumni_register', ['nis' => $this->session->userdata('nis')])->row_array();
        $data['user'] =  $user;
        $data['pengumuman'] = $this->db->get_where('alumni_pengumuman', ['jenis' => 1])->result_array();
        $data['sekolah'] = $this->db->get_where('m_sekolah')->row_array();    
        $data['kontak'] = $this->db->get_where('ppdb_kontak', ['status' => 1])->result_array();

        $this->load->view('web_lulus_user/header', $data);
        $this->load->view('web_lulus_user/sidebar', $data);
        $this->load->view('web_lulus_user/topbar', $data);
        // $this->load->view('css', $data);
        $this->load->view('lulus/user/index', $data);
        // $this->load->view('js', $data);
        $this->load->view('web_lulus_user/footer');
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

