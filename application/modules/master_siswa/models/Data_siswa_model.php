<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_siswa_model extends CI_Model

{
    function get_datasekolah()
    {
        $this->db->select('s.*,p.*,k.*,c.*');
        $this->db->from('m_sekolah s');
        $this->db->join('m_provinsi p', 's.sekolah_provinsi_id = p.provinsi_id', 'left');
        $this->db->join('m_kota k', 's.sekolah_kota_id = k.kota_id', 'left');
        $this->db->join('m_kecamatan c', 's.sekolah_kecamatan_id = c.kecamatan_id', 'left');
        $this->db->where('npsn', $this->session->npsn);
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function get_kelas()
    {
        $this->db->select('*');
        $this->db->from('m_kelas');
        $query = $this->db->get();
        return $query->result();
    }

    public function simpan_tambah()
    {
        $get_tasm = $this->db->get_where('t_tahun', ['aktif' => 'Y'])->row_array();
        $tasm = $get_tasm['tahun_aktif'];
        
        $p = $this->input->post();               
        $data['npsn'] = $p['npsn'];
        $data['tingkat'] = $p['tingkat'];
        $data['th_active'] = $tasm;
        $data['th_masuk'] = $tasm;
        $data['nis'] = $p['nis'];
        $data['nisn'] = $p['nisn'];
        $data['nama'] = addslashes($p['nama']);
        $data['jk'] = $p['jk'];
        $data['tmp_lahir'] = $p['tmp_lahir'];
        $data['tgl_lahir'] = $p['tgl_lahir'];
        $data['agama'] = $p['agama'];
        $data['status'] = $p['status'];
        $data['anakke'] = $p['anakke'];
        $data['alamat'] = $p['alamat'];
        $data['notelp'] = $p['notelp'];
        $data['sek_asal'] = $p['sek_asal'];
        $data['sek_asal_alamat'] = $p['sek_asal_alamat'];
        $data['diterima_kelas'] = $p['tingkat'];
        $data['diterima_tgl'] = $p['diterima_tgl'];
        $data['diterima_smt'] = $p['tingkat'];
        $data['ijazah_no'] = $p['ijazah_no'];
        $data['ijazah_thn'] = $p['ijazah_thn'];
        $data['skhun_no'] = $p['skhun_no'];
        $data['skhun_no'] = $p['skhun_no'];
        $data['skhun_thn'] = $p['skhun_thn'];
        $data['ortu_ayah'] = $p['ortu_ayah'];
        $data['ortu_ibu'] = $p['ortu_ibu'];
        $data['ortu_alamat'] = $p['ortu_alamat'];
        $data['desa'] = $p['desa'];
        $data['kecamatan'] = $p['kecamatan'];
        $data['kota'] = $p['kota'];
        $data['provinsi'] = $p['provinsi'];
        $data['ortu_notelp'] = $p['ortu_notelp'];
        $data['ortu_ayah_pkj'] = $p['ortu_ayah_pkj'];
        $data['ortu_ibu_pkj'] = $p['ortu_ibu_pkj'];
        $data['wali'] = $p['wali'];
        $data['wali_alamat'] = $p['wali_alamat'];
        $data['notelp_rumah'] = $p['notelp_rumah'];
        $data['wali_pkj'] = $p['wali_pkj'];
        $data['foto'] = 'default.jpg';
        $this->db->insert('m_siswa', $data);
    }

    public function get_edit($id)
    {
        $bagidata =
            $this->db->select('k.*')
            ->from('m_siswa k')
            ->where(['k.siswa_id' => $id])
            ->get()->row_array();
        return $bagidata;
    }

    public function update()
    {
        $p = $this->input->post();

        $data['nis'] = $p['nis'];
        $data['nisn'] = $p['nisn'];
        $data['nama'] = addslashes($p['nama']);
        $data['jk'] = $p['jk'];
        $data['tmp_lahir'] = $p['tmp_lahir'];
        $data['tgl_lahir'] = $p['tgl_lahir'];
        $data['agama'] = $p['agama'];
        $data['status'] = $p['status'];
        $data['anakke'] = $p['anakke'];
        $data['alamat'] = $p['alamat'];
        $data['notelp'] = $p['notelp'];
        $data['sek_asal'] = $p['sek_asal'];
        $data['sek_asal_alamat'] = $p['sek_asal_alamat'];
        $data['diterima_kelas'] = $p['diterima_kelas'];
        $data['diterima_tgl'] = $p['diterima_tgl'];
        $data['diterima_smt'] = $p['diterima_kelas'];
        $data['ijazah_no'] = $p['ijazah_no'];
        $data['ijazah_thn'] = $p['ijazah_thn'];
        $data['skhun_no'] = $p['skhun_no'];
        $data['skhun_no'] = $p['skhun_no'];
        $data['skhun_thn'] = $p['skhun_thn'];
        $data['ortu_ayah'] = $p['ortu_ayah'];
        $data['ortu_ibu'] = $p['ortu_ibu'];
        $data['ortu_alamat'] = $p['ortu_alamat'];
        $data['desa'] = $p['desa'];
        $data['kecamatan'] = $p['kecamatan'];
        $data['kota'] = $p['kota'];
        $data['provinsi'] = $p['provinsi'];
        $data['ortu_notelp'] = $p['ortu_notelp'];
        $data['ortu_ayah_pkj'] = $p['ortu_ayah_pkj'];
        $data['ortu_ibu_pkj'] = $p['ortu_ibu_pkj'];
        $data['wali'] = $p['wali'];
        $data['wali_alamat'] = $p['wali_alamat'];
        $data['notelp_rumah'] = $p['notelp_rumah'];
        $data['wali_pkj'] = $p['wali_pkj'];
        $data['foto'] = 'default.jpg';

        $this->db->where('siswa_id', $p['_id']);
        $this->db->update('m_siswa', $data);
    }
}
