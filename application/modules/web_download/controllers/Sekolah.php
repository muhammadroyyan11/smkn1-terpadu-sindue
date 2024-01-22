<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sekolah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_akses();
        $this->load->model('Kesiswaan_model', 'home');
        $this->load->model('Download_model', 'download');
    }

    public function index() {
        $this->benchmark->mark('code_start');
        $data['title'] = 'Download Data Sekolah';
        $data['home'] = 'Download Data Sekolah';
        $data['subtitle'] = $data['title'];
        $data['sekolah'] = $this->home->sekolah();
        $data['kepsek'] = $this->db->get('profil_kepsek')->row_array();
        $data['osis'] = $this->home->profil_osis();
        $data['belajara'] = $this->home->profil_belajar();

         // data tampil wajib
         $get_tasm = $this->db->get_where('t_tahun', ['aktif' => 'Y'])->row_array();
         $data['tp'] = $get_tasm['th_pelajaran'];        
         $data['info'] = $this->db->get('profil_info')->row_array();
         $data['sliders'] = $this->home->profil_slide();
         $data['profil_guru'] = $this->home->profil_guru();
         $data['galery'] = $this->home->profil_galeri();
         $data['video'] = $this->home->profil_video();
         $data['count_pria']= $this->home->get_pria();
         $data['count_wanita']= $this->home->get_wanita();
         $data['count_siswa_aktif']= $this->home->get_totalsiswa();
         $data['count_rombel']= $this->home->get_rombel();
         // end data tampil wajib

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
        $data['download'] = $this->download->get('media', ['type' => 'Data Sekolah'])->result_array();
        $data['type'] = 'sekolah';
        // end statistik

        // var_dump($data['osis']);
        // die;
        $this->load->view('website/header', $data);
        $this->load->view('download_v', $data);
        $this->load->view('website/footer', $data);
        $this->benchmark->mark('code_end');
    }

}