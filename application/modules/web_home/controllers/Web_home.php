<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web_home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();  
        cek_akses();      
        $this->load->model('Home_model', 'home');
    }

    public function index()
    {
        $this->benchmark->mark('code_start');
        $data['title'] = 'Home';
        $data['home'] = 'Home';
        $data['subtitle'] = $data['title'];
        $data['cek_akses'] = cek_akses();
        $data['sekolah'] = $this->home->sekolah();
        $data['kepsek'] = $this->db->get('profil_kepsek')->row_array();
        $data['active'] = $this->home->getActive();
        $data['sliders'] = $this->home->profil_slide();
        $data['belajara'] = $this->home->profil_belajar();
        $data['berita'] = $this->home->profil_artikel();
        $data['galery'] = $this->home->profil_galeri();
        $data['video'] = $this->home->profil_video();
        
        $data['kontak'] = $this->db->get_where('ppdb_kontak', ['status' => 1])->result_array();
        $data['kepsek'] = $this->db->get('profil_kepsek')->row_array();
        $data['info'] = $this->db->get('profil_info')->row_array();

        $data['profil_guru'] = $this->home->profil_guru();
        $get_tasm = $this->db->get_where('t_tahun', ['aktif' => 'Y'])->row_array();
        $data['tp'] = $get_tasm['th_pelajaran'];

        $data['jurusan'] = $this->home->profil_jurusan();
        $data['p5'] = $this->home->profil_p5();
             
        $data['count_pria']= $this->home->get_pria();
        $data['count_wanita']= $this->home->get_wanita();
        $data['count_siswa_aktif']= $this->home->get_totalsiswa();
        $data['count_rombel']= $this->home->get_rombel();
              
        $data['jml_pend'] = $this->home->pendaftar_jml(); 
        $data['jml_kuota'] = $this->home->kuota_jml();  

        $data['count_data_lulus'] = $this->home->data_lulus();
        $data['count_th_lulus'] = $this->home->th_lulus();

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

        $this->load->view('website/header', $data);
        $this->load->view('home_v', $data);
        $this->load->view('website/footer', $data);
        $this->benchmark->mark('code_end');
    }
}
