<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_pegawai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_aktif_login();
        cek_akses_user();
        is_logged_in();
        cek_akses();  
        $this->load->library('form_validation');
        $this->load->model('Data_pegawai_model', 'data_pegawai');
    }

    public function index()
    {
        if ($this->form_validation->run() == false) {
            $this->benchmark->mark('code_start');
            $data['title'] = 'Data Pegawai';
            $data['home'] = 'Master Pegawai';
            $data['subtitle'] = $data['title'];
            $data['main_menu'] = main_menu();
            $data['sub_menu'] = sub_menu();
            $data['cek_akses'] = cek_akses_user();        
            $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
            $data['sekolah'] = $this->db->get_where('m_sekolah')->row_array(); 
            
            $data['pegawai_data'] = $this->db->get_where('pegawai_data',['status' => 1])->result_array();

            $this->load->view('layout/header-top',$data);
            $this->load->view('master_pegawai/data_pegawai/list_css');
            $this->load->view('layout/header-bottom',$data);
            $this->load->view('layout/main-navigation', $data);
            $this->load->view('master_pegawai/data_pegawai/list', $data);
            $this->load->view('layout/footer-top');
            $this->load->view('master_pegawai/data_pegawai/list_js');
            $this->load->view('layout/footer-bottom');
            $this->benchmark->mark('code_end');
        } else {
        }
    }

    public function tambah()
    {
        cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        } 
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
        $data['sekolah'] = $this->db->get_where('m_sekolah')->row_array();     

        $sekolah = $this->db->get_where('m_sekolah')->row_array(); 
        $data['sek_web'] = substr($sekolah['web'], 4, 100);
    
        $this->load->view('master_pegawai/data_pegawai/list_css');
        $this->load->view('master_pegawai/data_pegawai/list_tambah', $data);
        $this->load->view('master_pegawai/data_pegawai/list_js');
    }

    public function tambah_admin()
    {
        cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai'), 'npsn' => $this->session->userdata('npsn')])->row_array();
        $data['sekolah'] = $this->db->get('m_sekolah')->row_array();         
        $sekolah = $this->db->get('m_sekolah')->row_array(); 
        $data['sek_web'] = substr($sekolah['web'], 4, 100);

        $data['data_sekolah'] = $this->db->get('m_sekolah')->result_array(); 
        $data['data_pegawai'] = $this->db->get_where('pegawai_data', ['status' => 1])->result_array();   
    
        $this->load->view('master_pegawai/data_pegawai/list_css');
        $this->load->view('master_pegawai/data_pegawai/list_admin', $data);
        $this->load->view('master_pegawai/data_pegawai/list_js');
    }

    function add_ajax_jabatan($id_jab)
    {
        $query = $this->db->get_where('access_jabatan', array('departemen_id' => $id_jab));
        $data = "<option value=''>- Select Jabatan -</option>";
        foreach ($query->result() as $value) {
            $data .= "<option value='" . $value->jabatan_id . "'>" . $value->jenis_jabatan . "</option>";
        }
        echo $data;
    }

    function add_ajax_tempat($id_lok)
    {
        $query = $this->db->get_where('access_lokasi', array('jabatan_id' => $id_lok));
        $data = "<option value=''>- Select Tempat -</option>";
        foreach ($query->result() as $value) {
            $data .= "<option value='" . $value->lokasi_id . "'>" . $value->lokasi . "</option>";
        }
        echo $data;
    }

    public function simpan_tambah()
    {
        cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        echo $this->data_pegawai->simpan_tambah();       
        redirect('master_pegawai/data_pegawai');
    }

    public function delPegawai($id)
    {
        $data = ['data_id' => $id];
        $this->db->delete('pegawai_data', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Berhasil hapus data !!!</div>');
        redirect('master_pegawai/data_pegawai');
    }

    public function editData($id)
    {
        $this->benchmark->mark('code_start');
        $data['title'] = 'Data Pegawai';
        $data['home'] = 'Master Pegawai';
        $data['subtitle'] = $data['title'];
        $data['main_menu'] = main_menu();
        $data['sub_menu'] = sub_menu();
        $data['cek_akses'] = cek_akses_user();
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai'), 'npsn' => $this->session->userdata('npsn')])->row_array();
                 
        $data['sekolah'] = $this->db->get('m_sekolah')->row_array();

        $data['data_pegawai'] = $this->data_pegawai->get_editData($id);
        // var_dump($data['data_pegawai']);
        // die;
        $data['role'] = $this->db->get('pegawai_role')->result_array();
        
        $this->load->view('layout/header-top',$data);
        $this->load->view('master_pegawai/data_pegawai/edit_css');
        $this->load->view('layout/header-bottom',$data);
        // $this->load->view('layout/header-notif');
        $this->load->view('layout/main-navigation', $data);
        $this->load->view('master_pegawai/data_pegawai/list_edit', $data);
        $this->load->view('layout/footer-top');
        $this->load->view('master_pegawai/data_pegawai/edit_js');
        $this->load->view('layout/footer-bottom');
        $this->benchmark->mark('code_end');
    }

    public function updateData()
    {
        cek_post();
        if (cek_akses_user()['role_id'] == 0) {
            redirect(base_url('unauthorized'));
        }
        echo $this->data_pegawai->updateData();
        redirect('master_pegawai/data_pegawai');
    }

    public function create()
    {
        $this->benchmark->mark('code_start');
        $data['title'] = 'Data Pegawai';
        $data['home'] = 'Master Pegawai';
        $data['subtitle'] = $data['title'];
        $data['main_menu'] = main_menu();
        $data['sub_menu'] = sub_menu();
        $data['cek_akses'] = cek_akses_user();       
        $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai'), 'npsn' => $this->session->userdata('npsn')])->row_array();
        $data['sekolah'] = $this->db->get('m_sekolah')->row_array();

        $this->load->view('layout/header-top',$data);
        $this->load->view('master_pegawai/data_pegawai/list_css');
        $this->load->view('layout/header-bottom',$data);
        $this->load->view('layout/main-navigation', $data);
        $this->load->view('master_pegawai/data_pegawai/list_create', $data);
        $this->load->view('layout/footer-top');
        $this->load->view('master_pegawai/data_pegawai/list_js');
        $this->load->view('layout/footer-bottom');
        $this->benchmark->mark('code_end');
    }

    public function lakukan_download()
    {
        force_download('panel/dist/excel/Template_PegawaiData.xlsx', NULL);
    }

    public function excel()
    {
        if (isset($_FILES["file"]["name"])) 

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

                    $nik = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
                    $email_pribadi = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
                    $email = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
                    $nama_lengkap = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
                    $alamat = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
                    $telp = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
                    $tgl_lahir = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
                    $tgl_masuk = $worksheet->getCellByColumnAndRow(7, $row)->getValue();

                    $sekolah = $this->db->get('m_sekolah')->row_array();
                    $data_web = substr($sekolah['web'], 4, 100);
                    $npsn = $sekolah['npsn'];

                    $data[] = array(
                        "nik" => $nik,
                        "npsn" =>  $npsn,
                        "email_pribadi" => $email_pribadi,
                        "email" => $email ."@". $data_web,
                        "nama_lengkap" => $nama_lengkap,
                        "alamat" => $alamat,
                        "telp" => $telp,
                        "tgl_lahir" => $tgl_lahir,
                        "tgl_masuk" => $tgl_masuk,              
                        "foto" => 'default.jpg',
                        "status" => 1,
                    );
                }
            }
                $this->db->insert_batch('pegawai_data', $data);
                $message = array(
                    'message' => '<div class="alert alert-success">Import file excel berhasil disimpan di database</div>',
                );

                $this->session->set_flashdata($message);
                redirect('master_pegawai/data_pegawai');
            }          
        }
    


/* End of file Import.php */
/* Location: ./application/controllers/Import.php */
