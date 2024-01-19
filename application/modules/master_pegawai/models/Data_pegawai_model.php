<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_pegawai_model extends CI_Model

{

    public function simpan_tambah()
    {

        // cek user exist
        $sekolah = $this->db->get_where('m_sekolah')->row_array();
        $data_web = substr($sekolah['web'], 4, 100);
        $npsn = $sekolah['npsn'];

        $nik = $this->input->post('nik', true);
        $email_pribadi = $this->input->post('email_pribadi', true);
        $email = $this->input->post('email', true);
        $nama_lengkap = $this->input->post('nama_lengkap', true);
        $alamat = $this->input->post('alamat', true);
        $telp = $this->input->post('telp', true);
        $tgl_lahir = $this->input->post('tgl_lahir', true);
        $tgl_masuk = $this->input->post('tgl_masuk', true);
        //insert ke table data karyawan
        $data = [
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
        ];
        $cek = $this->db->get_where('pegawai_data', ['email' => $email."@".$data_web])->row_array();
        if ($cek) {
            return  $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert"> Data sudah ada !!!</div>');
        } else {          
            $this->db->insert('pegawai_data', $data); 
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil tambah data !!!</div>');
        }
            
    }

    public function updateData()
    {
        $data_id = $this->input->post('data_id', true);
        $nik = $this->input->post('nik', true);
        $email_pribadi = $this->input->post('email_pribadi', true);
        $email = $this->input->post('email', true);
        $nama_lengkap = $this->input->post('nama_lengkap', true);
        $alamat = $this->input->post('alamat', true);
        $telp = $this->input->post('telp', true);
        $tgl_lahir = $this->input->post('tgl_lahir', true);
        $tgl_masuk = $this->input->post('tgl_masuk', true);       

        $data = [
            "nik" => $nik,
            "email_pribadi" => $email_pribadi,
            "email" => $email,
            "nama_lengkap" => $nama_lengkap,
            "alamat" => $alamat,
            "telp" => $telp,
            "tgl_lahir" => $tgl_lahir,
            "tgl_masuk" => $tgl_masuk,         
            "foto" => 'default.jpg',
            "status" => 1,
        ];

        $this->db->where("data_id", $data_id);
        $this->db->update('pegawai_data', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil ubah data !!!</div>');
        // return json_encode(['status' => 'success', 'pesan' => 'Berhasil Ubah Data !']);
    }

    public function get_data()
    {
        $pegawai =
            $this->db->select('k.*,d.*,l.*,r.*')
            ->from('pegawai_data k')
            ->join('access_departemen d', 'k.dep_id = d.departemen_id', 'left')
            ->join('access_lokasi l', 'k.lok_id = l.lokasi_id', 'left')
            ->join('pegawai_role r', 'k.role_id = r.id', 'left')
            ->get()->result_array();
        return $pegawai;
    }

    public function get_editData($id)
    {
        $bagidata =
            $this->db->select('a.*')
            ->from('pegawai_data a')
            ->join('m_sekolah b', 'a.npsn = b.npsn', 'left')         
            ->where(['a.data_id' => $id])
            ->get()->row_array();
        return $bagidata;
    }
}
