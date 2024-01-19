<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web_informasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_akses();    
        $this->load->model('Informasi_model', 'home');
    }

    // vaksin
    public function vaksin()
    {
        $this->benchmark->mark('code_start');
        $data['title'] = 'Vaksin';
        $data['home'] = 'Informasi';
        $data['subtitle'] = $data['title'];
        $data['sekolah'] = $this->home->sekolah();
        $data['kepsek'] = $this->db->get('profil_kepsek')->row_array();
        $data['kontak'] = $this->db->get_where('ppdb_kontak', ['status' => 1])->result_array();
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

        // var_dump($data['ekstra']);
        // die;
        $this->load->view('website/header', $data);
        $this->load->view('vaksin_v', $data);
        $this->load->view('_js');
        $this->load->view('website/footer', $data);
        $this->benchmark->mark('code_end');
    }

    public function vaksin_cari($id)
    {
        $data['vaksin'] = $this->home->get_vaksin($id);
        $this->load->view('web_informasi/vaksin_data', $data);
    }

    public function mpdf_cetak($id)
    {
        $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L']);
        $data['vaksin'] = $this->home->get_vaksin($id);
        $vaksin = $this->home->get_vaksin($id);
        $sekolah = $this->home->sekolah();

        // Set the new Header before you AddPage
        $mpdf->SetHeader();
        $mpdf->AddPage();

        // Set the new Footer after you AddPage
        $mpdf->SetHTMLFooter(' <table width="100%" style="font-size: 8pt;">
            <tr>
                <td width="25%">{PAGENO}/{nbpg} | {DATE j-m-Y}</td>
                <td width="0%" align="center"></td>
                <td width="75%" style="text-align: right;  "><p>' . $vaksin['nik'] . ' | ' . $vaksin['nama_siswa'] . ' | ' . $sekolah['web'] . ' </p></td>
            </tr>
        </table>');
        $html1 = $this->load->view('vaksin_pdf_1', $data, TRUE);
        $mpdf->WriteHTML($html1);

        // Set the new Header before you AddPage
        $mpdf->SetHeader();
        $mpdf->AddPage();

        // Set the new Footer after you AddPage
        $mpdf->SetHTMLFooter(' <table width="100%" style="font-size: 8pt;">
              <tr>
                  <td width="25%">{PAGENO}/{nbpg} | {DATE j-m-Y}</td>
                  <td width="0%" align="center"></td>
                  <td width="75%" style="text-align: right;  "><p>' . $vaksin['nik'] . ' | ' . $vaksin['nama_siswa'] . ' | ' . $sekolah['web'] . ' </p></td>
              </tr>
          </table>');
        $html2 = $this->load->view('vaksin_pdf_2', $data, TRUE);
        $mpdf->WriteHTML($html2);

        $nama_file_pdf = ($vaksin['nik'] . ' _ ' . $vaksin['nama_siswa']);
        $mpdf->Output($nama_file_pdf . '.pdf', 'I');
    }
    //end vaksin   
    // beasiswa
    public function beasiswa()
    {
        $this->benchmark->mark('code_start');
        $data['title'] = 'Beasiswa';
        $data['home'] = 'Informasi';
        $data['subtitle'] = $data['title'];
        $data['sekolah'] = $this->home->sekolah();
        $data['kepsek'] = $this->db->get('profil_kepsek')->row_array();
        $data['kontak'] = $this->db->get_where('ppdb_kontak', ['status' => 1])->result_array();
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

        // var_dump($data['prestasi']);
        // die;
        $this->load->view('website/header', $data);
        $this->load->view('beasiswa_v', $data);
        $this->load->view('_js');
        $this->load->view('website/footer', $data);
        $this->benchmark->mark('code_end');
    }

    public function beasiswa_cari($id)
    {
        $data['beasiswa'] = $this->home->get_beasiswa($id);
        $this->load->view('web_informasi/beasiswa_data', $data);
    }
    //end beasiswa
    // webinar
    public function webinar()
      {
          $this->benchmark->mark('code_start');
          $data['title'] = 'Sertifikat Webinar';
          $data['home'] = 'Informasi';
          $data['subtitle'] = $data['title'];
          $data['sekolah'] = $this->home->sekolah();
          $data['kepsek'] = $this->db->get('profil_kepsek')->row_array();
          $data['kontak'] = $this->db->get_where('ppdb_kontak', ['status' => 1])->result_array();
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
  
          // var_dump($data['ekstra']);
          // die;
          $this->load->view('website/header', $data);
          $this->load->view('webinar_v', $data);
          $this->load->view('_js');
          $this->load->view('website/footer', $data);
          $this->benchmark->mark('code_end');
      }
  
      public function webinar_cari($id)
      {
          $data['webinar'] = $this->home->get_webinar($id);
          $this->load->view('web_informasi/webinar_data', $data);
      }
  
      public function webinar_mpdf_cetak($id)
      {
          $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L']);
          $data['webinar'] = $this->home->get_webinar($id);
          $webinar = $this->home->get_webinar($id);
          $sekolah = $this->home->sekolah();
  
          // Set the new Header before you AddPage
          $mpdf->SetHeader();
          $mpdf->AddPage();
  
          // Set the new Footer after you AddPage
          $mpdf->SetHTMLFooter(' <table width="100%" style="font-size: 8pt;">
              <tr>
                  <td width="25%">{PAGENO}/{nbpg} | {DATE j-m-Y}</td>
                  <td width="0%" align="center"></td>
                  <td width="75%" style="text-align: right;  "><p>' . $webinar['nip'] . ' | ' . $webinar['nama_pendidik'] . ' | ' . $sekolah['web'] . '</p></td>
              </tr>
          </table>');
          $html1 = $this->load->view('webinar_pdf_1', $data, TRUE);
          $mpdf->WriteHTML($html1);
  
          // Set the new Header before you AddPage
          $mpdf->SetHeader();
          $mpdf->AddPage();
  
          // Set the new Footer after you AddPage
          $mpdf->SetHTMLFooter(' <table width="100%" style="font-size: 8pt;">
                <tr>
                    <td width="25%">{PAGENO}/{nbpg} | {DATE j-m-Y}</td>
                    <td width="0%" align="center"></td>
                    <td width="75%" style="text-align: right;  "><p>' . $webinar['nip'] . ' | ' . $webinar['nama_pendidik'] . ' | ' . $sekolah['web'] . '</p></td>
                </tr>
            </table>');
          $html2 = $this->load->view('webinar_pdf_2', $data, TRUE);
          $mpdf->WriteHTML($html2);
  
          $nama_file_pdf = ($webinar['nip'] . ' _ ' . $webinar['nama_pendidik']);
          $mpdf->Output($nama_file_pdf . '.pdf', 'I');
      }
      //end webinar

      // lsp
    public function lsp()
    {
        $this->benchmark->mark('code_start');
        $data['title'] = 'LSP';
        $data['home'] = 'Informasi';
        $data['subtitle'] = $data['title'];
        $data['sekolah'] = $this->home->sekolah();
        $data['kepsek'] = $this->db->get('profil_kepsek')->row_array();
        $data['kontak'] = $this->db->get_where('ppdb_kontak', ['status' => 1])->result_array();
        $data['belajara'] = $this->home->profil_belajar();

        $data['lsp'] = $this->db->get_where('lsp_profile')->row_array();
        $data['tuk'] = $this->db->get_where('lsp_data_tuk', ['status' => 1])->result_array();
        $data['asesor'] = $this->db->get_where('lsp_data_asesor', ['status' => 1])->result_array();
        $data['skema'] = $this->db->get_where('lsp_data_skema', ['status' => 1])->result_array();

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
        $this->load->view('lsp_v', $data);
        $this->load->view('_js');
        $this->load->view('website/footer', $data);
        $this->benchmark->mark('code_end');
    }

    //end lsp
}
