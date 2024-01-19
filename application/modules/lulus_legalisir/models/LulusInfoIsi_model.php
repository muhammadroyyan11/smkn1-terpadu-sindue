<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LulusInfoIsi_model extends CI_Model
{
    // kelulusan
    public function getPublish()
    {
        $bagidata =
            $this->db->select('')
            ->from('m_lulus_data')           
            ->get()->row_array();
        return $bagidata;
    }    

    public function getKelulusan()
    {
        $bagidata =
            $this->db->select('')
            ->from('m_lulus')
            ->order_by('nama_siswa', 'DESC')
            ->get()->result_array();
        return $bagidata;
    }   

    public function simpan_verifikasi()
    {
        $alumni_id = htmlspecialchars($this->input->post('alumni_id', true)); 
        // $npsn = htmlspecialchars($this->input->post('npsn', true));
        $nis = htmlspecialchars($this->input->post('nis', true));
        // $nisn = htmlspecialchars($this->input->post('nisn', true));
        // $nama_siswa = htmlspecialchars($this->input->post('nama_siswa', true));
        // $tahun_pelajaran = htmlspecialchars($this->input->post('tahun_pelajaran', true));

        // $data = [
        //     'npsn' => $npsn,           
        //     'tahun_pelajaran' => $tahun_pelajaran,
        //     'nama_siswa' => $nama_siswa,
        //     'nis' => $nis,
        //     'nisn' => $nisn,            
        //     'verifikasi' => 1,
        // ];
        // insert ke table user
        $cek = $this->db->get_where('alumni_legalisir',['nis' => $nis])->row_array();
        if($cek['nis'] == 0){            
            $this->db->set('verifikasi', 1);
            $this->db->where('alumni_id',$alumni_id);
            $this->db->update('alumni_register');
            // $this->db->insert('alumni_legalisir', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil verifikasi data !!!</div>');
            redirect('lulus_legalisir/verifikasi_data');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert"> Sudah verifikasi data !!!</div>');
            redirect('lulus_legalisir/verifikasi_data');
        }
       
        
    }

    public function simpan_legalisir()
    {
        $legalisir_id = htmlspecialchars($this->input->post('legalisir_id', true));       
        $verifikasi = htmlspecialchars($this->input->post('verifikasi', true));
        // $ket_pengajuan = htmlspecialchars($this->input->post('ket_pengajuan', true));
      
        // $this->db->set('tgl_pengajuan', date('Y-m-d'));
        // $this->db->set('ket_pengajuan', $ket_pengajuan);
        // $this->db->set('status_pengajuan', 1);
        // $this->db->set('tujuan', $tujuan);
        $this->db->set('verifikasi', $verifikasi);
        $this->db->where('legalisir_id', $legalisir_id);
        $this->db->update('alumni_legalisir');
    }

    public function simpan_bayar()
    {
        // $upload_image = $_FILES['file_bayar'];
        // //var_dump($upload_image);
        // //die;
        // if ($upload_image) {
        //     $config['allowed_types'] = 'jpeg|jpg|png';
        //     $config['max_size'] = '2048';
        //     $config['upload_path'] = './panel/dist/upload/file_bayar/';
        //     $this->load->library('upload', $config);

        //     if ($this->upload->do_upload('file_bayar')) {

        //         $old_img = $this->input->post('old_image', true);
        //         // var_dump($old_img);
        //         // die;
        //         if ($old_img != '') {
        //             unlink(FCPATH . './panel/dist/upload/file_bayar/' . $old_img);
        //         }
        //         $new_img = $this->upload->data('file_name');
        //         $this->db->set('file_bayar', $new_img);
        //     } else {
        //         echo $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
        //     }
        // }
        
        $legalisir_id = htmlspecialchars($this->input->post('legalisir_id', true));      
        // $tgl_bayar = htmlspecialchars($this->input->post('tgl_bayar', true));
        $jum_bayar = htmlspecialchars($this->input->post('jum_bayar', true)); 
        // $status_bayar = $this->input->post('status_bayar', true);              

        // $data = [
        //     'tgl_bayar' => $tgl_bayar,  
        //     'jum_bayar' => $jum_bayar, 
        //     'status_bayar' => $status_bayar,           
        // ];
        $this->db->set('jum_bayar', $jum_bayar);      
        $this->db->set('status_pengajuan', 2);
        $this->db->where('legalisir_id', $legalisir_id);
        $this->db->update('alumni_legalisir');
    }

    public function simpan_periksa()
    {
        $upload_image = $_FILES['file_bayar'];
        //var_dump($upload_image);
        //die;
        if ($upload_image) {
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size'] = '2048';
            $config['upload_path'] = './panel/dist/upload/file_bayar/';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file_bayar')) {

                $old_img = $this->input->post('old_image', true);
                // var_dump($old_img);
                // die;
                if ($old_img != '') {
                    unlink(FCPATH . './panel/dist/upload/file_bayar/' . $old_img);
                }
                $new_img = $this->upload->data('file_name');
                $this->db->set('file_bayar', $new_img);
            } else {
                echo $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
            }
        }
        
        $legalisir_id = htmlspecialchars($this->input->post('legalisir_id', true));      
        // $tgl_bayar = htmlspecialchars($this->input->post('tgl_bayar', true));
        // $jum_bayar = htmlspecialchars($this->input->post('jum_bayar', true)); 
        $status_bayar = $this->input->post('status_bayar', true);              

        // $data = [
        //     'tgl_bayar' => $tgl_bayar,  
        //     'jum_bayar' => $jum_bayar, 
        //     'status_bayar' => $status_bayar,           
        // ];
        $this->db->set('status_bayar', $status_bayar);      
        // $this->db->set('status_pengajuan', 2);
        $this->db->where('legalisir_id', $legalisir_id);
        $this->db->update('alumni_legalisir');
    }

    public function simpan_ambil()
    {
        $legalisir_id = htmlspecialchars($this->input->post('legalisir_id', true));       
        $tgl_pengambilan = htmlspecialchars($this->input->post('tgl_pengambilan', true));
        $ket_pengambilan = htmlspecialchars($this->input->post('ket_pengambilan', true));
        $alamat_terbaru = htmlspecialchars($this->input->post('alamat_terbaru', true));
        $status_ambil = htmlspecialchars($this->input->post('status_ambil', true));
      
        $this->db->set('tgl_pengambilan', $tgl_pengambilan);
        $this->db->set('ket_pengambilan', $ket_pengambilan);
        $this->db->set('alamat_terbaru', $alamat_terbaru);
        $this->db->set('status_ambil', $status_ambil);      
        $this->db->where('legalisir_id', $legalisir_id);
        $this->db->update('alumni_legalisir');
    }
    // end kelulusan   

}
