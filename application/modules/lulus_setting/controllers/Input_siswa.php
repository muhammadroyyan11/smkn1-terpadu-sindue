<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Input_siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        cek_aktif_login();
        cek_akses_user();
        cek_akses();  
        $this->load->library('form_validation');
        $this->load->model('LulusInfoSiswa_model', 'sch');
    }
  
    // lulus_siswa
    public function index()
    {
        $this->benchmark->mark('code_start');
        $data['title'] = 'Input Siswa';
        $data['home'] = 'Lulus Setting';
        $data['subtitle'] = $data['title'];
        $data['main_menu'] = main_menu();
        $data['sub_menu'] = sub_menu();
        $data['cek_akses'] = cek_akses_user();
        $data['sekolah'] = $this->db->get('m_sekolah')->row_array();
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
        // $data['publis'] = $this->sch->getPublish();
        $data['lulus'] = $this->sch->getKelulusan();
        // var_dump($data['pegawai']);
        // die;
        $this->load->view('layout/header-top', $data);
        $this->load->view('lulus_setting/input_siswa/list_css');
        $this->load->view('layout/header-bottom', $data);
        $this->load->view('layout/main-navigation', $data);
        $this->load->view('lulus_setting/input_siswa/lulus_siswa_v', $data);
        $this->load->view('layout/footer-top');
        $this->load->view('lulus_setting/input_siswa/list_js');
        $this->load->view('layout/footer-bottom');
        $this->benchmark->mark('code_end');
    }

    public function tambah_lulus()
    {
        cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        $data['sekolah'] = $this->db->get('m_sekolah')->row_array();
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
        $this->load->view('lulus_setting/input_siswa/list_css');
        $this->load->view('lulus_setting/input_siswa/lulus_siswa_add', $data);
        $this->load->view('lulus_setting/input_siswa/list_js');
    }

    function edit_lulus($id)
    {
        cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
        $data['lulus'] = $this->db->get_where('m_lulus', ['lulus_id' => $id])->row_array();
        $this->load->view('lulus_setting/input_siswa/list_css');
        $this->load->view('lulus_setting/input_siswa/lulus_siswa_edit', $data);
        $this->load->view('lulus_setting/input_siswa/list_js');
    }

    public function simpan_lulus()
    {
        // cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        echo $this->sch->simpan_lulus();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil tambah data !!!</div>');
        redirect('lulus_setting/input_siswa');
    }    

    public function simpan_editlulus()
    {
        // cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        echo $this->sch->simpan_editlulus();
        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert"> Berhasil ubah data !!!</div>');
        redirect('lulus_setting/input_siswa');
    }

    public function dellulus($id)
    {
        $data = ['lulus_id' => $id];
        $this->db->delete('m_lulus', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Berhasil hapus data !!!</div>');
        redirect('lulus_setting/input_siswa');
    }

    public function export_lulus()
    {
        $this->benchmark->mark('code_start');
        $data['title'] = 'Export Excel';
        $data['home'] = 'Lulus Setting';
        $data['subtitle'] = $data['title'];
        $data['main_menu'] = main_menu();
        $data['sub_menu'] = sub_menu();
        $data['cek_akses'] = cek_akses_user();
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
        $data['sekolah'] = $this->db->get('m_sekolah')->row_array();
        // var_dump($data['pegawai']);
        // die;
        $this->load->view('layout/header-top', $data);
        $this->load->view('lulus_setting/input_siswa/list_css');
        $this->load->view('layout/header-bottom', $data);
        $this->load->view('layout/main-navigation', $data);
        $this->load->view('lulus_setting/input_siswa/lulus_siswa_create', $data);
        $this->load->view('layout/footer-top');
        $this->load->view('lulus_setting/input_siswa/list_js');
        $this->load->view('layout/footer-bottom');
        $this->benchmark->mark('code_end');
    }

    public function create_lulus()
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
        // var_dump($data['pegawai']);
        // die;
        $this->load->view('layout/header-top', $data);
        $this->load->view('lulus_setting/input_siswa/list_css');
        $this->load->view('layout/header-bottom', $data);
        $this->load->view('layout/main-navigation', $data);
        $this->load->view('lulus_setting/input_siswa/lulus_siswa_create', $data);
        $this->load->view('layout/footer-top');
        $this->load->view('lulus_setting/input_siswa/list_js');
        $this->load->view('layout/footer-bottom');
        $this->benchmark->mark('code_end');
    }

    public function download_lulus()
    {
        force_download('panel/dist/excel/Template_lulus.xlsx', NULL);
    }

    public function excel_lulus()
    {
        if (isset($_FILES["file"]["name"])) {
            // upload
            $file_tmp = $_FILES['file']['tmp_name'];
            $file_name = $_FILES['file']['name'];
            $file_size = $_FILES['file']['size'];
            $file_type = $_FILES['file']['type'];
            // move_uploaded_file($file_tmp,"uploads/".$file_name); // simpan filenya di folder uploads

            $object = PHPExcel_IOFactory::load($file_tmp);

            foreach ($object->getWorksheetIterator() as $worksheet) {

                $highestRow = $worksheet->getHighestRow();
                $highestColumn = $worksheet->getHighestColumn();

                for ($row = 4; $row <= $highestRow; $row++) {

                    $no_surat = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
                    $tahun_pelajaran = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
                    $nama_siswa = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
                    $nis = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
                    $nisn = $worksheet->getCellByColumnAndRow(4, $row)->getValue();                 
                    $tempat_lahir = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
                    $tanggal_lahir = $worksheet->getCellByColumnAndRow(6, $row)->getFormattedValue();                    
                    $keterangan = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
                    $alamat_siswa = $worksheet->getCellByColumnAndRow(8, $row)->getValue();                    
                   
                    $npsn = $this->input->post('npsn');           
                    $get_tasm = $this->db->get_where('t_tahun', ['aktif' => 'Y'])->row_array();
                    $tasm = $get_tasm['tahun_aktif'];

                    $data = array(
                        'no_surat' => $no_surat,
                        'tahun_pelajaran' => $tahun_pelajaran,
                        'nama_siswa' => $nama_siswa,
                        'nis' => $nis,
                        'nisn' => $nisn,
                        'tempat_lahir' => $tempat_lahir,
                        'tanggal_lahir' =>$tanggal_lahir,
                        'keterangan' => $keterangan,
                        'alamat_siswa' => $alamat_siswa,
                        'npsn' => $npsn,
                        'status' => 1,   
                        'tasm' => $tasm,       
                    );
                    // var_dump($data);
                    // die;         
                    $result = $this->db->get_where('m_lulus', ['nis' => $nis,'no_surat' => $no_surat,])->row_array();                         
                    if ($result == 0) {
                        $this->db->insert('m_lulus', $data);
                        $message = array(
                            'message' => '<div class="alert alert-success">Import file excel berhasil disimpan di database</div>',
                        );
                    } else {
                        
                        $this->db->where('nis', $result['nis']);
                        $this->db->update('m_lulus', $data);
                        $message = array(
                            'message' => '<div class="alert alert-success">Import file excel berhasil disimpan di database</div>',
                        );
                    }
                   
                }
            }

            $this->session->set_flashdata($message);
            redirect('lulus_setting/input_siswa/create_lulus');
        } else {
            $message = array(
                'message' => '<div class="alert alert-danger">Import file gagal, coba lagi</div>',
            );

            $this->session->set_flashdata($message);
            redirect('lulus_setting/lulusInfo_siswa/create_lulus');
        }
    }

    public function detail_lulus($id)
    {
        $this->benchmark->mark('code_start');
        $data['title'] = 'Input Siswa';
        $data['home'] = 'Lulus Setting';
        $data['subtitle'] = $data['title'];
        $data['main_menu'] = main_menu();
        $data['sub_menu'] = sub_menu();
        $data['cek_akses'] = cek_akses_user();
        $data['sekolah'] = $this->db->get('m_sekolah')->row_array();
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
        $data['lulus'] = $this->db->get_where('m_lulus', ['lulus_id' => $id])->row_array();
               
        $data['publish'] = $this->db->get('m_lulus_data')->row_array();
        
        $data['tampil'] = $this->db->get_where('t_kelas_siswa')->result_array();      
        $data['siswa'] = $this->sch->get_siswa();
        $data['nilai'] = $this->db->get_where('alumni_nilai')->result_array();        
        $data['mapel'] = $this->db->get_where('alumni_mapel')->result_array();
        $data['avg'] = $this->sch->get_avg();

        $this->load->view('lulus_setting/input_siswa/list_css');        
        $this->load->view('lulus_setting/input_siswa/lulus_siswa_detail', $data);        
        $this->load->view('lulus_setting/input_siswa/list_js');        
        $this->benchmark->mark('code_end');
    }

    public function print_lulus($id_bayar)
    {
        $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);

        $data['sekolah'] = $this->db->get_where('m_sekolah')->row_array();
        $sekolah = $this->db->get_where('m_sekolah')->row_array();
       
        // Set the new Header before you AddPage
        $mpdf->SetHeader('  
        <table width="100%">
        <tr>
            <td align="center">
                <img src="' . base_url() . 'panel/dist/upload/logo/' . $sekolah['logo'] . '" style="width:72%;max-width:72px">
            </td>
            <td align="center">
                <h2>LAPORAN HASIL BELAJAR <br>
                    PENILAIAN TENGAH SEMESTER (PTS) <br>
                    '.$sekolah['nama_sekolah'].' <br>
                    <p style="font-size:12px"><i>Website : '.$sekolah['website'].'</i></p>
                    <h2>
            </td>
        </tr>
        </table>');
        $mpdf->AddPage();       
        // var_dump($data['siswa']);
        // die;
        // Set the new Footer after you AddPage
        $mpdf->SetHTMLFooter();
        $html1 = $this->load->view('lulus_setting/lulus_siswa/lulus_siswa_detail', $data, TRUE);
        $mpdf->WriteHTML($html1);

        $nama_file_pdf = ('1');
        $mpdf->Output($nama_file_pdf . '.pdf', 'I');
    }

    public function tambah()
    {
        if ($this->form_validation->run() == false) {
            $this->benchmark->mark('code_start');
            $data['title'] = 'Daftar Rombel';
            $data['home'] = 'Lulus Setting';
            $data['subtitle'] = $data['title'];
            $data['main_menu'] = main_menu();
            $data['sub_menu'] = sub_menu();
            $data['cek_akses'] = cek_akses_user();           
            $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai'), 'npsn' => $this->session->userdata('npsn')])->row_array();
            $data['sekolah'] = $this->db->get_where('m_sekolah',['npsn' => $this->session->userdata('npsn')])->row_array();
            
            $data['tampil'] = $this->sch->get_tampil();
       
            $this->load->view('layout/header-top', $data);
            $this->load->view('lulus_setting/input_siswa/list_css');
            $this->load->view('layout/header-bottom', $data);
            $this->load->view('layout/main-navigation', $data);
            $this->load->view('lulus_setting/input_siswa/input_siswa_tambah', $data);
            $this->load->view('layout/footer-top');
            $this->load->view('lulus_setting/input_siswa/list_js');
            $this->load->view('layout/footer-bottom');
            $this->benchmark->mark('code_end');
        } else {
        }
    }

    public function rombel($id)
    {
        if ($this->form_validation->run() == false) {
            $this->benchmark->mark('code_start');
            $data['title'] = 'Daftar Rombel';
            $data['home'] = 'Master Siswa';
            $data['subtitle'] = $data['title'];
            $data['main_menu'] = main_menu();
            $data['sub_menu'] = sub_menu();
            $data['cek_akses'] = cek_akses_user();

            $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai'), 'npsn' => $this->session->userdata('npsn')])->row_array();
            $data['sekolah'] = $this->db->get_where('m_sekolah',['npsn' => $this->session->userdata('npsn')])->row_array();
         
            $get_tasm = $this->db->get_where('t_tahun', ['aktif' => 'Y', ])->row_array();
            $data['tasm'] = $get_tasm['tahun'];
            $data['ta'] = $get_tasm['tahun_aktif'];
           
            $data['data'] = $this->sch->get_rombel($id);
            $data['siswa'] = $this->sch->get_siswa_r($id);
          
            $this->load->view('layout/header-top', $data);
            $this->load->view('lulus_setting/input_siswa/list_css');
            $this->load->view('layout/header-bottom', $data);
            $this->load->view('layout/main-navigation', $data);
            $this->load->view('lulus_setting/input_siswa/input_siswa_rombel', $data);
            $this->load->view('layout/footer-top');
            $this->load->view('lulus_setting/input_siswa/list_js');
            $this->load->view('layout/footer-bottom');
            $this->benchmark->mark('code_end');
        } else {
        }
    }

    public function tarik()
    {
        cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        echo $this->sch->tarik();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil tarik lulus !!!</div>');
        redirect('lulus_setting/input_siswa');
    }
    // end lulus_siswa   

}
