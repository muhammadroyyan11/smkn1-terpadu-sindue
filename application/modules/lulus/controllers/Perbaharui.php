<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perbaharui extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        cek_akses();  
    }

    public function index()
    {
        $data['title'] = 'Perbaharui Data';
        $data['user'] = $this->db->get_where('alumni_register', ['nis' => $this->session->userdata('nis')])->row_array();
        $data['sekolah'] = $this->db->get_where('m_sekolah')->row_array();
        $data['kontak'] = $this->db->get_where('ppdb_kontak', ['status' => 1])->result_array();

        $data['siswa'] = $this->db->get_where('alumni_register', ['nis' => $this->session->userdata('nis')])->row_array();
        $update = $this->db->get_where('alumni_register', ['nis' => $this->session->userdata('nis')])->row_array();
        $data['datadiri'] = $update['telp'] == '' || $update['email'] == '';
        $data['ijazah'] = $update['file_ijazah'] == '' ;    
        // var_dump($data['datadiri']);
        // die;
        $this->load->view('web_lulus_user/header', $data);
        $this->load->view('web_lulus_user/sidebar', $data);
        $this->load->view('web_lulus_user/topbar', $data);
        // $this->load->view('css', $data);
        $this->load->view('lulus/perbaharui_data/index', $data);
        // $this->load->view('js', $data);
        $this->load->view('web_lulus_user/footer');
    }


    public function simpandatadiri()
    {
        $id = $this->input->post('alumni_id');
        $p = $this->input->post();
        $data = [
            'telp'              => $p['telp'],
            'email'             => $p['email'],
            'perbaikan'         => 1,           
        ];

        $this->db->where('alumni_id', $id);
        $this->db->update('alumni_register', $data);

        $this->session->set_flashdata('message', ' <div class="alert alert-success" role="alert"> Data berhasil disimpan !!! </div>');
        redirect('lulus/perbaharui');
    }

    public function simpanijazah()
    {
      
        $upload_image = $_FILES['file_ijazah'];    
        // var_dump($upload_image);
        // die;
        if ($upload_image) {
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size'] = '2048';
            $config['upload_path'] = './panel/dist/upload/file_ijazah/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('file_ijazah')) {
                $old_img = $this->input->post('old_image', true);             
                if ($old_img != '') {
                    unlink(FCPATH . './panel/dist/upload/file_ijazah/' . $old_img);
                }
                $new_img = $this->upload->data('file_name');
                $this->db->set('file_ijazah', $new_img);
            } else {
                echo $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
            }
        }       
        $id = $this->input->post('alumni_id');        
        $data = [
            'aktive_ijazah'            => 1,           
        ];
        $this->db->where('alumni_id', $id);
        $this->db->update('alumni_register', $data);
        $this->session->set_flashdata('message', ' <div class="alert alert-success" role="alert"> Data berhasil disimpan !!! </div>');
        redirect('lulus/perbaharui');
    }

   
    public function mpdf_cetak()
    {
        $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
        $data['siswa'] = $this->db->get_where('alumni_register', ['no_daftar' => $this->session->userdata('no_daftar')])->row_array();
        $data['sekolah'] = $this->db->get_where('m_sekolah')->row_array();
        $update = $this->db->get_where('alumni_register', ['no_daftar' => $this->session->userdata('no_daftar')])->row_array();
        $sekolah = $this->db->get_where('m_sekolah')->row_array();
        $data['tahun'] =  $this->db->get_where('ppdb_periode', ['periode' => $this->input->post('periode', true), 'is_active' => 1])->row_array();;
        // var_dump( $data['tahun'] );
        // die;
        // Set the new Header before you AddPage
        $mpdf->SetHeader();
        $mpdf->AddPage();

        // Set the new Footer after you AddPage
        $mpdf->SetHTMLFooter(' <table width="100%" style="font-size: 8pt;">
            <tr>
                <td width="25%">{PAGENO}/{nbpg} | {DATE j-m-Y}</td>
                <td width="0%" align="center"></td>
                <td width="75%" style="text-align: right;  "><p>'  . $update['nama'] . ' | ' . $sekolah['nama_sekolah'] . ' </p></td>
            </tr>
        </table>');
        $html1 = $this->load->view('formulir/data_diri_pdf', $data, TRUE);
        $mpdf->WriteHTML($html1);

        // Set the new Header before you AddPage
        $mpdf->SetHeader();
        $mpdf->AddPage();

        // Set the new Footer after you AddPage
        $mpdf->SetHTMLFooter(' <table width="100%" style="font-size: 8pt;">
            <tr>
                <td width="25%">{PAGENO}/{nbpg} | {DATE j-m-Y}</td>
                <td width="0%" align="center"></td>
                <td width="75%" style="text-align: right;  "><p>' . $update['nama'] . ' | ' . $sekolah['nama_sekolah'] . ' </p></td>
            </tr>
        </table>');
        $html2 = $this->load->view('formulir/surat_peryantaan_pdf_1', $data, TRUE);
        $mpdf->WriteHTML($html2);       

        // $siswa  = $this->db->get_where('m_siswa', ['kd_sekolah' => $this->session->userdata('kd_sekolah'), 'nis' => $target])->row_array();
        $nama_file_pdf = ($update['nik'] . ' _ ' . $update['nama']);
        $mpdf->Output($nama_file_pdf . '.pdf', 'I');
        // $mpdf->Output($nama_dokumen . ".pdf", 'I');
        // var_dump($data['nilai_pts']);
        // die;
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

