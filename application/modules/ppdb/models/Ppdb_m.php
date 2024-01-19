<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Ppdb_m extends CI_Model
{

    public function getSekolah()
    {
        $sekolah = $this->db->select('a.*,b.*,c.*,d.*')
            ->from('m_sekolah a')
            ->join('m_provinsi b', 'a.sekolah_provinsi_id = b.provinsi_id')
            ->join('m_kota c', 'a.sekolah_kota_id = c.kota_id')
            ->join('m_kecamatan d', 'a.sekolah_kecamatan_id = d.kecamatan_id', 'left')
            ->where(['a.is_active'=>1])
            ->get()->row_array();
        return $sekolah;
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

    public function getAllJenis()
    {
        return $this->db->get_where('ppdb_jenis', ['status' => 1])->result_array();
    }

    public function getAllPeriode()
    {
        return $this->db->get_where('ppdb_periode', ['is_active' => 1])->result_array();
    }

    public function getAsalSekolah()
    {
        return $this->db->get_where('ppdb_sekolah', ['status' => 1])->result_array();
    }

    public function getId()
    {
        $bagidata =
            $this->db->select('max(no_daftar) as maxKode')
            ->from('ppdb_daftar')
            ->get()->row_array();
        return $bagidata;
    }    
    
    public function pendaftar_jml()
    {
        $allPeriode =  $this->db->get_where('ppdb_periode', ['status'=> 'Aktif','is_active' => 1])->row_array();;
        // $tahun = substr($allPeriode['tahun'],0,-5);
        $tahun = $allPeriode['tahun'];

        $sekolah = $this->db->select('*,COUNT(no_daftar) as total')
            ->from('ppdb_daftar')
            ->where(['tahun_daftar' => $tahun])
            ->where(['jenis_daftar' => 'Siswa Baru'])
            ->get()->result_array();
        return $sekolah;
    }

    public function kuota_jml()
    {
        $kuota = $this->db->select('*,SUM(kuota) as total_kuota')
            ->from('ppdb_jurusan')           
            ->where(['status' => 1])
            ->where(['jenis_daftar' => 'Siswa Baru'])
            ->get()->result_array();
        return $kuota;
    }
}
