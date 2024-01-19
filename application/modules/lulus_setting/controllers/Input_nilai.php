<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Input_nilai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        cek_aktif_login();
        cek_akses_user();
        cek_akses();  
        $this->load->library('form_validation');
        $this->load->helper('array');
        $this->load->model('LulusInfoSiswa_model', 'sch');
    }
  
    // lulus_siswa
    public function index()
    {
        $this->benchmark->mark('code_start');
        $data['title'] = 'Input Nilai';
        $data['home'] = 'Lulus Setting';
        $data['subtitle'] = $data['title'];
        $data['main_menu'] = main_menu();
        $data['sub_menu'] = sub_menu();
        $data['cek_akses'] = cek_akses_user();
        $data['sekolah'] = $this->db->get('m_sekolah')->row_array();
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
      
        $data['tampil'] = $this->sch->get_tampil();
        $data['lulus'] = $this->sch->getKelulusan();
        $data['siswa'] = $this->sch->get_siswa();
        $data['nilai'] = $this->db->get_where('alumni_nilai')->result_array();        
        $data['mapel'] = $this->db->get_where('alumni_mapel')->result_array();
        // var_dump( $data['tampil']);
        // die;
        $this->load->view('layout/header-top', $data);
        $this->load->view('lulus_setting/input_nilai/list_css');
        $this->load->view('layout/header-bottom', $data);
        $this->load->view('layout/main-navigation', $data);
        $this->load->view('lulus_setting/input_nilai/lulus_v', $data);
        $this->load->view('layout/footer-top');
        $this->load->view('lulus_setting/input_nilai/list_js');
        $this->load->view('layout/footer-bottom');
        $this->benchmark->mark('code_end');
    }

    public function siswa()
    {
        $this->benchmark->mark('code_start');
        $data['title'] = 'Input Nilai';
        $data['home'] = 'Lulus Setting';
        $data['subtitle'] = $data['title'];
        $data['main_menu'] = main_menu();
        $data['sub_menu'] = sub_menu();
        $data['cek_akses'] = cek_akses_user();
        $data['sekolah'] = $this->db->get('m_sekolah')->row_array();
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
      
        $data['tampil'] = $this->sch->get_tampil();
        $data['siswa'] = $this->sch->get_siswa();
    
        $this->load->view('layout/header-top', $data);
        $this->load->view('lulus_setting/input_nilai/list_css');
        $this->load->view('layout/header-bottom', $data);
        $this->load->view('layout/main-navigation', $data);
        $this->load->view('lulus_setting/input_nilai/lulus_siswa_v', $data);
        $this->load->view('layout/footer-top');
        $this->load->view('lulus_setting/input_nilai/list_js');
        $this->load->view('layout/footer-bottom');
        $this->benchmark->mark('code_end');
    }

    public function mapel()
    {
        $this->benchmark->mark('code_start');
        $data['title'] = 'Input Mapel';
        $data['home'] = 'Lulus Setting';
        $data['subtitle'] = $data['title'];
        $data['main_menu'] = main_menu();
        $data['sub_menu'] = sub_menu();
        $data['cek_akses'] = cek_akses_user();
        $data['sekolah'] = $this->db->get('m_sekolah')->row_array();
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
      
        $get_tasm = $this->db->get_where('t_tahun', ['aktif' => 'Y', ])->row_array();
        $data['tasm'] = $get_tasm['tahun'];
        $data['ta'] = $get_tasm['tahun_aktif'];

        $data['tampil'] = $this->sch->get_tampil();       
        $data['mapel'] = $this->db->get_where('m_mapel')->result_array();        
        
        $this->load->view('layout/header-top', $data);
        $this->load->view('lulus_setting/input_nilai/list_css');
        $this->load->view('layout/header-bottom', $data);
        $this->load->view('layout/main-navigation', $data);
        $this->load->view('lulus_setting/input_nilai/lulus_mapel_v', $data);
        $this->load->view('layout/footer-top');
        $this->load->view('lulus_setting/input_nilai/list_js');
        $this->load->view('layout/footer-bottom');
        $this->benchmark->mark('code_end');
    }

    public function simpan_mapel()
    {
        cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        echo $this->sch->simpan_mapel();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil tambah rombel !!!</div>');
        redirect('lulus_setting/input_nilai');
    }

    public function create_linai()
    {
        $this->benchmark->mark('code_start');
        $data['title'] = 'Import Excel';
        $data['home'] = 'Lulus Setting';
        $data['subtitle'] = $data['title'];
        $data['main_menu'] = main_menu();
        $data['sub_menu'] = sub_menu();
        $data['cek_akses'] = cek_akses_user();
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
        $data['sekolah'] = $this->db->get('m_sekolah')->row_array();

        $get_tasm = $this->db->get_where('t_tahun', ['aktif' => 'Y'])->row_array();
        $data['tasm'] = $get_tasm['tahun_aktif'];
        // var_dump($data['pegawai']);
        // die;
        $this->load->view('layout/header-top', $data);
        $this->load->view('lulus_setting/input_nilai/list_css');
        $this->load->view('layout/header-bottom', $data);
        $this->load->view('layout/main-navigation', $data);
        $this->load->view('lulus_setting/input_nilai/lulus_nilai_create', $data);
        $this->load->view('layout/footer-top');
        $this->load->view('lulus_setting/input_nilai/list_js');
        $this->load->view('layout/footer-bottom');
        $this->benchmark->mark('code_end');
    }

    public function export_excel($id)
    {
        $kolom_hidden = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "AA", "AB", "AC", "AD", "AE", "AF", "AG", "AH", "AI", "AJ", "AK", "AL", "AM", "AN", "AO", "AP", "AQ", "AR", "AS", "AT", "AU", "AV", "AW", "AX", "AY", "AZ");
        $kolom_xl = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "AA", "AB", "AC", "AD", "AE", "AF", "AG", "AH", "AI", "AJ", "AK", "AL", "AM", "AN", "AO", "AP", "AQ", "AR", "AS", "AT", "AU", "AV", "AW", "AX", "AY", "AZ");
        
        $get_tasm = $this->db->get_where('t_tahun', ['aktif' => 'Y'])->row_array();
        $tasm = $get_tasm['tahun_aktif'];
        
        $data['siswa'] =    $this->db->select('a.*,b.*')
                            ->from('t_kelas_siswa a')   
                            ->join('m_lulus b', 'a.id_siswa = b.nis', 'left')                
                            ->where(['a.rombel' => $id ])
                            ->where(['a.ta'=>$tasm])                   
                            ->get()->result_array();

        $data['nilai'] =    $this->db->select('a.*,b.*')
                            ->from('t_kelas_siswa a')   
                            ->join('alumni_mapel b', 'a.rombel = b.rombel', 'left')                
                            ->where(['a.rombel' => $id ])
                            ->where(['a.ta'=>$tasm])                   
                            ->get()->result_array();

        // require_once(APPPATH . 'libraries/PHPExcel.php');
        // require_once(APPPATH . 'libraries/PHPExcel/Writer/Excel2007.php');
        $this->load->library('excel');

        $object = new PHPExcel();

        $object->getProperties()->setCreator("SISTEM ANAK DESA");
        $object->getProperties()->setLastModifiedBy("SISTEM ANAK DESA");
        $object->getProperties()->setTitle("Leger Nilai");

        $object->setActiveSheetIndex(0);       

        $object->setActiveSheetIndex(0)->setCellValue('A1', "No");
        // $object->getActiveSheet()->mergeCells('A6');
        $object->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
        $object->getActiveSheet()->getStyle('A1')->getFont()->getColor()->setARGB('ffffff');
        $object->getActiveSheet()->getStyle('A1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('041170'); // Set bold kolom A1
        $object->getActiveSheet()->getStyle('A1')->getFont()->setSize(14); // Set font size 15 untuk kolom A1
        $object->getActiveSheet()->getStyle('A1')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
        $object->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

        $object->setActiveSheetIndex(0)->setCellValue('B1', "NIS");
        // $object->getActiveSheet()->mergeCells('B6');
        $object->getActiveSheet()->getStyle('B1')->getFont()->setBold(TRUE); // Set bold kolom A1
        $object->getActiveSheet()->getStyle('B1')->getFont()->getColor()->setARGB('ffffff');
        $object->getActiveSheet()->getStyle('B1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('041170'); // Set bold kolom A1
        $object->getActiveSheet()->getStyle('B1')->getFont()->setSize(14); // Set font size 15 untuk kolom A1
        $object->getActiveSheet()->getStyle('B1')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
        $object->getActiveSheet()->getStyle('B1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

        $object->setActiveSheetIndex(0)->setCellValue('C1', "Nama Siswa");
        // $object->getActiveSheet()->mergeCells('C6:C7');
        $object->getActiveSheet()->getStyle('C1')->getFont()->setBold(TRUE); // Set bold kolom A1
        $object->getActiveSheet()->getStyle('C1')->getFont()->getColor()->setARGB('ffffff');
        $object->getActiveSheet()->getStyle('C1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('041170'); // Set bold kolom A1
        $object->getActiveSheet()->getStyle('C1')->getFont()->setSize(14); // Set font size 15 untuk kolom A1
        $object->getActiveSheet()->getStyle('C1')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
        $object->getActiveSheet()->getStyle('C1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

        $baris_a = 2;
        $baris_b = 5;
        $no = 1;
        $kolomdanbaris1 = 3;
        foreach ($data['siswa'] as $s) {
            $object->getActiveSheet()->setCellValue('A' .  $baris_a, $no++);
            $object->getActiveSheet()->setCellValue('B' .  $baris_a, $s['nis']);
            $object->getActiveSheet()->getStyle('B')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $object->getActiveSheet()->setCellValue('C' .  $baris_a, $s['nama_siswa']);
            $baris_a++;

            // Mapel          
            $baris_c = 1;
            $kolom_a1 = $kolomdanbaris1;
            foreach ($data['nilai'] as $a)
                if ($a['tasm'] == $tasm)
                    if ($a['id_siswa'] == $s['nis']) {                        
                            $object->getActiveSheet()->setCellValue($kolom_xl[$kolom_a1] . $baris_c, $a['kode_mapel']);
                            $object->getActiveSheet()->getStyle($kolom_xl[$kolom_a1] . $baris_c)->getFont()->getColor()->setARGB('ffffff');
                            $object->getActiveSheet()->getStyle($kolom_xl[$kolom_a1] . $baris_c)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('041170'); // Set bold kolom A1
                            $object->getActiveSheet()->getStyle($kolom_xl[$kolom_a1] . $baris_c)->getFont()->setSize(14); // Set font size 15 untuk kolom A1
                            $object->getActiveSheet()->getStyle($kolom_xl[$kolom_a1] . $baris_c)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                            $kolom_a1++;
                        };
                          
            // // END PAS

            $baris_b++;
        };

        $filemane = "Leger Nilai Siswa" .'_' . $id . '.xlsx';
        $object->getActiveSheet()->setTitle(" Nilai Akhir Siswa ");
        
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition:attachment; filename="' . $filemane . '"');
        header('Cache-Control: max-age=0');
        $writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        // ob_end_clean();
        // if (ob_get_contents())
        ob_get_contents();
        $writer->save('php://output');
       
        exit;
    }
   
    public function import_nilai()
    {
        if (isset($_FILES['file']['name'])) {
            $path   = $_FILES['file']['tmp_name'];
            $object = PHPExcel_IOFactory::load($path);

            foreach ($object->getWorksheetIterator() as $worksheet) {
                $highestRow    = $worksheet->getHighestRow();
                $highestColumn = $worksheet->getHighestColumn();
                //$n = 3;
                $n = 0;
                for ($n = 0; $n < $n + 10; $n++) {
                    $kode_mapel = $worksheet->getCellByColumnAndRow(3 + $n, 1)->getValue();
                    if ($kode_mapel == "") {
                        break;
                    }
                    for ($row = 2; $row <= $highestRow; $row++) {
                        $nis = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
                        $nilai = $worksheet->getCellByColumnAndRow(3 + $n, $row)->getValue();
                                        
                        $npsn = $this->input->post('npsn');
                        $tasm = $this->input->post('tasm');
                        $rombel = $this->input->post('rombel');                        
                       
                        $data1 = [
                            'npsn' => $npsn,
                            'nis' => $nis,
                            'rombel' => $rombel,
                            'kode_mapel' => $kode_mapel,
                            'nilai' => $nilai,
                            'tasm' => $tasm,
                        ];    
                                         
                        $data2 = [
                            'nilai' => $nilai,
                        ];

                        $cek = $this->db->get_where('alumni_nilai', ['nis' => $nis, 'rombel' => $rombel, 'kode_mapel' => $kode_mapel, 'tasm' => $tasm,])->row_array();
                        // var_dump($cek);
                        // die;   
                        if ($cek == 0) {                               
                            $this->db->insert('alumni_nilai', $data1);
                            $message = array(
                                'message' => '<div class="alert alert-warning">data yang dimasukkan tidak sesuai !!!</div>',
                            );
                        } else {
                            $this->db->where('id_nilai', $cek['id_nilai']);
                            $this->db->update('alumni_nilai', $data2);
                            $message = array(
                                'message' => '<div class="alert alert-success">Import file excel berhasil disimpan !!!</div>',
                            );                   
                        }
                    }
                }
            }
          
            redirect('lulus_setting/input_nilai/');
        } else {
            $message = array(
                'message' => '<div class="alert alert-danger">Import file gagal, coba lagi</div>',
            );
            $this->session->set_flashdata($message);           
            redirect('lulus_setting/input_nilai/');
        }
    }
    // end lulus_siswa   

}
