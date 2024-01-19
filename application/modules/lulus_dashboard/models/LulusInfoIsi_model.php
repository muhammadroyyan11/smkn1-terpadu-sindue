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

    public function data_lulus()
    {
        $get_tasm = $this->db->get_where('t_tahun', ['aktif' => 'Y'])->row_array();
        $tahun = $get_tasm['tahun_aktif'];
        $sekolah = $this->db->select('COUNT(lulus_id) as total')
            ->from('m_lulus')
            // ->where(['ta' =>  $tahun])
            ->get()->result_array();
        return $sekolah;
    }

    public function th_lulus()
    {
        $get_tasm = $this->db->get_where('t_tahun', ['aktif' => 'Y'])->row_array();
        $tahun = $get_tasm['tahun_aktif'];
        $sekolah = $this->db->select('COUNT(lulus_id) as total')
            ->from('m_lulus')
            ->where(['tasm' =>  $tahun])
            ->get()->result_array();
        return $sekolah;
    }

    public function cek_lulus()
    {
        $get_tasm = $this->db->get_where('t_tahun', ['aktif' => 'Y'])->row_array();
        $tahun = $get_tasm['tahun_aktif'];
        $sekolah = $this->db->select('COUNT(lulus_id) as total')
            ->from('m_lulus')
            ->where(['cek_lulus' => 1])
            ->get()->result_array();
        return $sekolah;
    }

    public function alumni_register()
    {
        $get_tasm = $this->db->get_where('t_tahun', ['aktif' => 'Y'])->row_array();
        $tahun = $get_tasm['tahun_aktif'];
        $sekolah = $this->db->select('COUNT(alumni_id) as total')
            ->from('alumni_register')
            ->where(['alumni_aktif' => 1])
            ->get()->result_array();
        return $sekolah;
    }

    public function alumni_perbaikan()
    {
        $get_tasm = $this->db->get_where('t_tahun', ['aktif' => 'Y'])->row_array();
        $tahun = $get_tasm['tahun_aktif'];
        $sekolah = $this->db->select('COUNT(alumni_id) as total')
            ->from('alumni_register')
            ->where(['perbaikan' => 1])
            ->get()->result_array();
        return $sekolah;
    }

    function data_register()
    {
        $this->db->select('*');
        $this->db->from('alumni_register');
        $this->db->where(['alumni_aktif' => 1]);
        $this->db->order_by('alumni_id', 'DESC');
        $this->db->limit(10);
        $hasil = $this->db->get();
        // return $query;
        if ($hasil->num_rows() > 0) {
            return $hasil->result();
        } else {
            return array();
        }
    }

    function info_register()
    {
        $this->db->select('*');
        $this->db->from('alumni_pengumuman');
        // $this->db->where(['alumni_aktif' => 1]);
        $this->db->order_by('id', 'DESC');
        $this->db->limit(5);
        $hasil = $this->db->get();
        // return $query;
        if ($hasil->num_rows() > 0) {
            return $hasil->result();
        } else {
            return array();
        }
    }
  
    // end kelulusan   

}
