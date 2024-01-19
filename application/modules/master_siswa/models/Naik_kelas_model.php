<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Naik_kelas_model extends CI_Model

{
    function get_datasekolah()
    {
        $this->db->select('s.*,p.*,k.*,c.*');
        $this->db->from('m_sekolah s');
        $this->db->join('m_provinsi p', 's.sekolah_provinsi_id = p.provinsi_id', 'left');
        $this->db->join('m_kota k', 's.sekolah_kota_id = k.kota_id', 'left');
        $this->db->join('m_kecamatan c', 's.sekolah_kecamatan_id = c.kecamatan_id', 'left');
        $this->db->where('s.npsn', $this->session->npsn);
        $query = $this->db->get()->result_array();
        return $query;
    }
    
    // pilih kelas siswa
    public function get_kelas()
    {
        $this->db->select('*');
        $this->db->from('m_kelas');
        $this->db->where('npsn', $this->session->npsn);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_rombel()
    {
        $get_tasm = $this->db->get_where('t_tahun', ['aktif' => 'Y'])->row_array();
        $tasm = $get_tasm['tahun_aktif'];

        $bagidata =
            $this->db->select('a.tingkat,COUNT(a.nis) as total')
            ->from('m_naik_kelas a')
            ->join('m_kelas b', 'a.tingkat = b.tingkat', 'left')
            ->where(['a.npsn' => $this->session->npsn])   
            ->where(['a.th_active' => $tasm])         
            ->group_by('a.tingkat', 'ASC')
            ->get()->result_array();
        return $bagidata;
    }

    public function get_siswa_naik($id)
    {
        $bagidata =
            $this->db->select('a.*,b.nama')
            ->from('m_naik_kelas a')
            ->join('m_siswa b', 'a.nis = b.nis', 'left')
            ->where(['a.tingkat' => $id])
            ->group_by('b.nama', 'ASC')
            ->get()->result_array();
        return $bagidata;
    }

    public function getLokasi()
    {
        return $this->db->get('m_sekolah')->result_array();
    }

    public function simpan_baru()
    {
        $p = $this->input->post();
        $nis = $this->input->post('nis', true);
        for ($i = 0; $i < sizeof($nis); $i++) {
            $data = [
                "npsn" => $p['npsn'],
                "tingkat" => $p['tingkat'],
                "nis" =>  $nis[$i],
                "th_active" => $p['th_active'],
            ];
            $this->db->insert('m_naik_kelas', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil tambah data !!!</div>');
        }

        $p = $this->input->post();
        $nis = $this->input->post('nis', true);
        for ($i = 0; $i < sizeof($nis); $i++) {
            $data2 = [
                "tingkat" => $p['tingkat'],
                "th_active" => $p['th_active'],
                "stat_data" => 'K',
            ];
            $this->db->where('nis', $nis[$i]);
            $this->db->update('m_siswa', $data2);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil ubah data !!!</div>');
        }
    }

    public function simpan_naik()
    {
        $p = $this->input->post();
        $nis = $this->input->post('nis', true);
        for ($i = 0; $i < sizeof($nis); $i++) {
            $data = [
                "tingkat" => $p['tingkat'],
                "nis" =>  $nis[$i],
                "th_active" => $p['th_active'],
                "tingkat_active" => 0,
            ];
            $this->db->where('nis', $nis[$i]);
            $this->db->update('m_naik_kelas', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil ubah data !!!</div>');
        }

        $p = $this->input->post();
        $nis = $this->input->post('nis', true);
        for ($i = 0; $i < sizeof($nis); $i++) {
            $data2 = [
                "tingkat" => $p['tingkat'],
                "th_active" => $p['th_active'],
                "stat_data" => 'K',
            ];
            $this->db->where('nis', $nis[$i]);
            $this->db->update('m_siswa', $data2);
        }
    }

    public function simpan_ubah()
    {       
        $nis = $this->input->post('nis', true);
        $id = $this->input->post('naik_id', true);
        for ($i = 0; $i < sizeof($nis); $i++) {
            $data = ['naik_id' => $id[$i]];
            $this->db->delete('m_naik_kelas', $data);
        }

        $nis = $this->input->post('nis', true);
        for ($i = 0; $i < sizeof($nis); $i++) {
            $data1 = ['stat_data' => 'A',];
            $this->db->where('nis', $nis[$i]);
            $this->db->update('m_siswa', $data1);
        }
    }
}
