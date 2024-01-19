<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_kontak_model extends CI_Model

{

    public function simpan_tambah()
    {
        // cek user exist
        $sekolah = $this->db->get_where('m_sekolah')->row_array();
        // $data_web = substr($sekolah['web'], 4, 100);
        $npsn = $sekolah['npsn'];
        $nik = $this->input->post('nik', true);       
        $no_kontak = $this->input->post('no_kontak', true);     
        //insert ke table data karyawan
        $data = [                      
            "npsn" =>  $npsn,   
            "no_kontak" => $no_kontak,
            "status" => 1, 
            "nik" => $nik,    
        ];
        $cekh = $this->db->get_where('sekolah_data_kontak', ['no_kontak' => $no_kontak])->row_array();
        if ($cekh == 0) {
            $this->db->insert('sekolah_data_kontak', $data); 
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil tambah data !!!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert"> Walikelas Sudah ada !!!</div>');
        }     
    }

    public function updateData()
    {
        $sekolah = $this->db->get_where('m_sekolah')->row_array();
        // $data_web = substr($sekolah['web'], 4, 100);
        $npsn = $sekolah['npsn'];
        
        $id = $this->input->post('id', true);
        $nik = $this->input->post('nik', true);    
        $no_kontak = $this->input->post('no_kontak', true);
        $status = $this->input->post('status', true);
        
        $data = [
            "nik" => $nik,          
            "no_kontak" => $no_kontak,
            "npsn" =>  $npsn,
            "status" =>  $status,           
        ];
        $cekh = $this->db->get_where('sekolah_data_kontak', ['status' =>  $status,'no_kontak' => $no_kontak])->row_array();
        if ($cekh == 0) {
            $this->db->where("id_kontak", $id);
            $this->db->update('sekolah_data_kontak', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil ubah data !!!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert"> Walikelas Sudah ada !!!</div>');
        }
        
    }

    public function get_data()
    {
        $pegawai =
            $this->db->select('a.*,b.nik,b.nama_lengkap')
            ->from('sekolah_data_kontak a')
            ->join('pegawai_data b', 'a.nik = b.nik', 'left')           
            ->get()->result_array();
        return $pegawai;
    }

    public function get_editData($id)
    {
        $bagidata =
            $this->db->select('a.*,b.nik,b.nama_lengkap')
            ->from('sekolah_data_kontak a')
            ->join('pegawai_data b', 'a.nik = b.nik', 'left')                  
            ->where(['a.id_kontak' => $id])
            ->get()->row_array();
        return $bagidata;
    }
}
