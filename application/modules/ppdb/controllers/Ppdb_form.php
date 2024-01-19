<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Ppdb_form extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        cek_akses();  
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('ppdb_m', 'ppdb');
    }

    public function index()
    {
        $this->form_validation->set_rules('nik', 'NIK', 'trim|required|numeric|min_length[16]|max_length[18]|is_unique[ppdb_daftar.nik]', [
            'is_unique' => 'NIK sudah digunakan !'
        ]);
        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'Data belum di isi !'
        ]);
        $this->form_validation->set_rules('no_hp', 'NO HANDPHONE', 'required', [
            'required' => 'Data belum di isi !'
        ]);
        $this->form_validation->set_rules('tempat_lahir', 'TEMPAT LAHIR', 'required', [
            'required' => 'Data belum di isi !'
        ]);
        $this->form_validation->set_rules('password', 'PASSWORD', 'required', [
            'required' => 'Data belum di isi !'
        ]);
        if ($this->form_validation->run() ==  false) {
            $data['title'] = 'Form Pendaftaran';
            // $data['kampus'] = $this->ppdb->getAllKampus();
            $data['jenis'] = $this->ppdb->getAllJenis();
            $data['periode'] = $this->ppdb->getAllPeriode();
            $data['asal_sekolah'] = $this->ppdb->getAsalSekolah();

            $data['kontak'] = $this->db->get_where('ppdb_kontak', ['status' => 1])->result_array();
            $data['kelas'] = $this->db->get_where('m_kelas')->result_array();
            $data['sekolah'] = $this->ppdb->getSekolah();
            $data['kontak'] = $this->ppdb->get_data();

            $get_tasm = $this->db->get_where('ppdb_periode', ['is_active' => 1])->row_array();
            $tahun = $get_tasm['tahun'];
            // $tahun = substr($get_tasm['tahun'],0,-5);
            
            $data['periode_aktif'] = $this->db->get_where('ppdb_periode', ['is_active' => 1])->row_array();
            $data['pendaftar'] = $this->db->get_where('ppdb_daftar', ['is_active' => 1, 'tahun_daftar' => $tahun])->result_array();
            $data['pengumuman'] = $this->db->get_where('ppdb_pengumuman', ['jenis' => 2])->result_array();
            
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
		    
		    $allPeriode =  $this->db->get_where('ppdb_periode', ['status'=> 'Aktif','is_active' => 1])->row_array();;
            // $data['tahun'] = substr($allPeriode['tahun'],0,-5); 

            $data['jml_kuota'] = $this->ppdb->kuota_jml();
            $data['jml_pend'] = $this->ppdb->pendaftar_jml();    

            //css for this page only
            $this->load->view('web_ppdb/_css', $data);
            //======== end               
            $this->load->view('ppdb_form/ppdb_v', $data);
            // js for this page only
            $this->load->view('web_ppdb/_js');
            //========= end
        } else {          
            // $data = $this->db->select('max(no_daftar) as maxKode')
            // ->from('ppdb_daftar')
            // ->get()->row_array();
            $data = $this->ppdb->getId();
            $allPeriode =  $this->db->get_where('ppdb_periode', ['periode' => $this->input->post('periode', true), 'is_active' => 1])->row_array();
            $kodedaftar = $data['maxKode'];
            $noUrut = (int) substr($kodedaftar, 8, 3);
            $noUrut++;
            $tahun = $allPeriode['tahun'];          
            $char = "PPDB" . $tahun;
            $newID = $char . sprintf("%03s", $noUrut);   

            $jenis_daftar = $this->input->post('jenis_daftar', true);
            $nik = $this->input->post('nik', true);
            $nama = $this->input->post('nama', true);
            $periode = $this->input->post('periode', true);

            $no_hp = $this->input->post('no_hp', true);
            $kelas = $this->input->post('kelas', true);

            $npsn_asal = $this->input->post('npsn', true);
            $asal = $this->db->get_where('ppdb_sekolah', ['npsn' => $npsn_asal])->row_array();
            $asal_sekolah = $asal['nama_sekolah'];          

            $tempat_lahir = $this->input->post('tempat_lahir', true);
            $tgl_lahir = $this->input->post('tgl_lahir', true);
            $password = $this->input->post('password');
            $password1 = password_hash($this->input->post('password'), PASSWORD_DEFAULT);

            $data = [
                "no_daftar" => $newID,
                "jenis_daftar" => $jenis_daftar,
                "nik" => $nik,
                "nama" => $nama,
                "periode" => $periode,
                "no_hp" => $no_hp,
                "kelas" => $kelas,
                "asal_sekolah" => $asal_sekolah,
                "npsn_asal" => $npsn_asal,
                "tempat_lahir" => $tempat_lahir,
                "tgl_lahir" => $tgl_lahir,
                "password" => $password1,
                "password_x" => $password,
                "foto" => 'default-avatar.png',
                "is_active" => 1,
                "tgl_daftar" => $tahun,
                "tahun_daftar" => $tahun,
            ];

            $this->db->insert('ppdb_daftar', $data);
            $this->session->set_flashdata(
                'message',
                '
            <div class="alert alert-info" role="alert">
            <div class="card-header">
                <center>
                    <h4>SELAMAT PENDAFTARAN BERHASIL</h4>
                </center>
            </div>
             <div class="card-body">
                <center>
                    <h3>Hai!, ' . $nama . '  </h3>
                    <h3>"AKUN ANDA BERHASIL DIBUAT"</h3>
                    <h5>silahkan login dengan menggunakan</h5>
                    <p> USERNAME : ' . $newID . ' <b></b></p>
                    <p> PASSWORD :  ' . $password . '<b></b></p>
                    <h5>*MOHON DIINGAT JIKA PERLU SCREENSHOT</h5>
                </center>
                </div>
           </div>
           '
            );
            redirect('ppdb/ppdb_form');
        }
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
