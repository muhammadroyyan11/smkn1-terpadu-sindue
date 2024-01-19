<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PpdbSetting_m extends CI_Model
{
    public function ppdb_daftar()
    {
        $get_tasm = $this->db->get_where('ppdb_periode', ['is_active' => 1])->row_array();
        $tahun = $get_tasm['tahun'];

        $bagidata =
            $this->db->select('*,COUNT(no_daftar) as total')
            ->from('ppdb_daftar')
            ->where(['tgl_daftar' =>  $tahun])
            ->where(['is_active' => 1])
            ->get()->result_array();
        return $bagidata;
    }

    public function getDaftarDiterima()
    {
        $get_tasm = $this->db->get_where('ppdb_periode', ['is_active' => 1])->row_array();
        $tahun = $get_tasm['tahun'];

        $bagidata =
            $this->db->select('*,COUNT(no_daftar) as total')
            ->from('ppdb_daftar')
            ->where(['tgl_daftar' =>  $tahun])
            ->where(['status' => 1])
            ->get()->result_array();
        return $bagidata;
    }

    public function getDaftarCadangan()
    {
        $get_tasm = $this->db->get_where('ppdb_periode', ['is_active' => 1])->row_array();
        $tahun = $get_tasm['tahun'];

        $bagidata =
            $this->db->select('*,COUNT(no_daftar) as total')
            ->from('ppdb_daftar')
            ->where(['tgl_daftar' =>  $tahun])
            ->where(['status' => 2])
            ->get()->result_array();
        return $bagidata;
    }

    public function kuota()
    {
        $sekolah = $this->db->select('SUM(kuota) as total')
            ->from('ppdb_jurusan')
            ->where(['status' => 1])
            ->get()->result_array();
        return $sekolah;
    }

    public function ppdb_materi()
    {
        $sekolah = $this->db->select('COUNT(id_materi) as total')
            ->from('ppdb_materi')
            ->where(['status' => 1])
            ->get()->result_array();
        return $sekolah;
    }

    public function ppdb_nilai_quiz()
    {
        $get_tasm = $this->db->get_where('ppdb_periode', ['is_active' => 1])->row_array();
        $tahun = $get_tasm['tahun'];
        $sekolah = $this->db->select('COUNT(id_nilai) as total')
            ->from('ppdb_nilai_quiz')
            ->where(['ta' =>  $tahun])
            ->get()->result_array();
        return $sekolah;
    }

}
