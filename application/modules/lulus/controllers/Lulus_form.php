<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Lulus_form extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        cek_akses();  
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('Lulus_m', 'lulus');
    }

    public function index()
    {        
        if ($this->form_validation->run() ==  false) {
            $data['title'] = 'Cetak SKL';
          
            $data['kontak'] = $this->db->get_where('ppdb_kontak', ['status' => 1])->result_array();
            $data['kelas'] = $this->db->get_where('m_kelas')->result_array();
            $data['sekolah'] = $this->lulus->getSekolah();     
            
            // statistik
		    $ip    = $this->input->ip_address(); // Mendapatkan IP user
		    $date  = date("Y-m-d"); // Mendapatkan tanggal sekarang
		    $waktu = time(); //
		    $timeinsert = date("Y-m-d H:i:s");

		    // Cek berdasarkan IP, apakah user sudah pernah mengakses hari ini
		    $s = $this->db->query("SELECT * FROM visitor WHERE ip='" . $ip . "' AND date='" . $date . "'")->num_rows();
		    $ss = isset($s) ? ($s) : 0;

		    // Kalau belum ada, simpan data user tersebut ke database
		    if ($ss == 0) {
			    $this->db->query("INSERT INTO visitor(ip, date, hits, online, time) VALUES('" . $ip . "','" . $date . "','1','" . $waktu . "','" . $timeinsert . "')");
		    }

		    // Jika sudah ada, update
		    else {
			    $this->db->query("UPDATE visitor SET hits=hits+1, online='" . $waktu . "' WHERE ip='" . $ip . "' AND date='" . $date . "'");
		    }

		    $pengunjunghariini  = $this->db->query("SELECT * FROM visitor WHERE date='" . $date . "' GROUP BY ip")->num_rows(); // Hitung jumlah pengunjung
		    $dbpengunjung = $this->db->query("SELECT COUNT(hits) as hits FROM visitor")->row();
		    $totalpengunjung = isset($dbpengunjung->hits) ? ($dbpengunjung->hits) : 0; // hitung total pengunjung
		    $bataswaktu = time() - 300;
		    $pengunjungonline  = $this->db->query("SELECT * FROM visitor WHERE online > '" . $bataswaktu . "'")->num_rows(); // hitung pengunjung online

		    $data['pengunjunghariini'] = $pengunjunghariini;
		    $data['totalpengunjung'] = $totalpengunjung;
		    $data['pengunjungonline'] = $pengunjungonline;
		    // end statistik

            $data['publish'] = $this->db->get('m_lulus_data')->row_array();               

            //css for this page only
            $this->load->view('web_lulus/_css', $data);
            //======== end 
            $this->load->view('lulus_form/_css', $data);              
            $this->load->view('lulus_form/_v', $data);
            $this->load->view('lulus_form/_js', $data);
            // js for this page only
            $this->load->view('web_lulus/_js');
            //========= end
        } else {
        }
    }

    public function lulus_cari($id)
    {
        $data['lulus'] = $this->lulus->get_lulus($id);
        $this->load->view('lulus/lulus_form/lulus_data', $data);
    }

    public function print_lulus($id)
    {
        $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);

        $data['sekolah'] = $this->db->get('m_sekolah')->row_array();
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
        $data['lulus'] = $this->db->get_where('m_lulus', ['lulus_id' => $id])->row_array();
        $data['publish'] = $this->db->get('m_lulus_data')->row_array();

        $data['tampil'] = $this->db->get_where('t_kelas_siswa')->result_array();      
        $data['siswa'] = $this->lulus->get_siswa();
        $data['nilai'] = $this->db->get_where('alumni_nilai')->result_array();        
        $data['mapel'] = $this->db->get_where('alumni_mapel')->result_array();
        $data['avg'] = $this->lulus->get_avg();
       
        // Set the new Header before you AddPage
        $mpdf->SetHeader();
        $mpdf->AddPage();       
        // var_dump($data['siswa']);
        // die;
        // Set the new Footer after you AddPage
        $mpdf->SetHTMLFooter();
        $html1 = $this->load->view('lulus/lulus_form/lulus_cetak', $data, TRUE);
        $mpdf->WriteHTML($html1);

        $data = $this->db->get_where('m_lulus', ['lulus_id' => $id])->row_array();

        $nama_file_pdf = ($data['nama_siswa']);
        $mpdf->Output($nama_file_pdf . '.pdf', 'I');
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
