<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lulus_m extends CI_Model
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

    function get_lulus($id)
    {
        $lulus = $this->db->get_where('m_lulus',['nisn'=> $id])->row_array();
        $lulus_id = $lulus['lulus_id'];
        $data['cek_lulus'] = 1;
        $this->db->where('lulus_id', $lulus_id);
        $this->db->update('m_lulus', $data);

        $this->db->select('*');
        $this->db->from('m_lulus');
        $this->db->where('nisn', $id);
        $query = $this->db->get()->row_array();
        return $query;
    }

    public function get_avg()
    {
        $get_tasm = $this->db->get_where('t_tahun', ['aktif' => 'Y'])->row_array();
        $tasm = $get_tasm['tahun_aktif'];
        $bagidata =
            $this->db->select('*,AVG(nilai) as total')
            ->from('alumni_nilai')           
            ->where('npsn', $this->session->npsn)
            ->where(['tasm' => $tasm ])
            ->group_by('nis', 'ASC')
            ->get()->result_array();
        return $bagidata;
    }

    public function get_siswa()
    {
        $get_tasm = $this->db->get_where('t_tahun', ['aktif' => 'Y'])->row_array();
        $tasm = $get_tasm['tahun_aktif'];
        $bagidata =
            $this->db->select('a.*,b.*')
            ->from('t_kelas_siswa a')
            ->join('m_lulus b', 'a.id_siswa = b.nis', 'left')
            ->where('a.npsn', $this->session->npsn)
            ->where(['a.ta' => $tasm ])
            // ->group_by('a.rombel', 'ASC')
            ->get()->result_array();
        return $bagidata;
    }

}
