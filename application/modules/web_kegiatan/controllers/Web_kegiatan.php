<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web_kegiatan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_akses();
        $this->load->model('Kegiatan_model', 'home');
    }

    // belajar
    public function belajar()
    {
        $this->benchmark->mark('code_start');
        $data['title'] = 'Portal Aplikasi';
        $data['home'] = 'Belajar';
        $data['subtitle'] = $data['title'];
        $data['sekolah'] = $this->home->sekolah();
        $data['kepsek'] = $this->db->get('profil_kepsek')->row_array();
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
        // end statistik

        // var_dump($data['osis']);
        // die;
        $this->load->view('website/header', $data);
        $this->load->view('belajar_v', $data);
        $this->load->view('website/footer', $data);
        $this->benchmark->mark('code_end');
    }
    // end belajar

    // contact
    public function contact()
    {
        $this->benchmark->mark('code_start');
        $data['title'] = 'Contact';
        $data['home'] = 'Contact';
        $data['subtitle'] = $data['title'];
        $data['sekolah'] = $this->home->sekolah();
        $data['kepsek'] = $this->db->get('profil_kepsek')->row_array();
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
        // end statistik

        $this->load->view('website/header', $data);
        $this->load->view('contact_v', $data);
        $this->load->view('website/footer', $data);
        $this->benchmark->mark('code_end');
    }
    // end contact

}
