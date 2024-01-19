<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{

    public function list_level_user()
    {
        return $this->db->get('pegawai_role')->result_array();
    }

    public function TotalGuru()
    {
        $total_guru =
            $this->db->select('a.*,COUNT(a.nik) as total_guru,b.*,c.*')
            ->from('pegawai_data a')
            ->join('pegawai b', 'a.nik = b.nik', 'left')           
            ->join('pegawai_role c', 'b.role_id = c.id', 'left')
            ->get()->result_array();
        return $total_guru;
    }

    public function TotalSiswa()
    {        
        $get_tasm = $this->db->get_where('t_tahun', ['aktif' => 'Y'])->row_array();
        $data['tasm'] = $get_tasm['tahun'];
        $ta = substr($data['tasm'], 0, 4);

        $bagidata =
            $this->db->select('k.*,s.*, count(k.id_siswa) as peserta')
            ->from('t_kelas_siswa k')
            ->join('m_siswa s', 'k.id_siswa = s.nis', 'left')
            ->where('k.ta',  $ta)
            // ->group_by('k.id_siswa')
            ->get()->result_array();
        return $bagidata;
    }

    public function TotalAlumni()
    {
        $total_buku = 
            $this->db->select('*,COUNT(buku_id) as total_buku')
                ->from('perpus_buku')
                // ->where(['stat_data' => 'K'])
                ->get()->result_array();
        return $total_buku;
    }
   
    public function TotalOnline()
    {
        $total_online = 
            $this->db->select('*,COUNT(nik) as total_online')
                ->from('pegawai')
                ->where(['is_online' => 1])
                ->get()->result_array();
        return $total_online;
    }

    public function TotalLulus()
    {
        $total_buku = 
            $this->db->select('*,COUNT(nis) as total_lulus')
                ->from('m_lulus')
                // ->where(['stat_data' => 'K'])
                ->get()->result_array();
        return $total_buku;
    }

    public function sekolah()
    {
        $sekolah = $this->db->select('a.*,b.*,c.*,d.*')
            ->from('m_sekolah a')
            ->join('m_provinsi b', 'a.sekolah_provinsi_id = b.provinsi_id')
            ->join('m_kota c', 'a.sekolah_kota_id = c.kota_id')
            ->join('m_kecamatan d', 'a.sekolah_kecamatan_id = d.kecamatan_id', 'left')
            ->get()->row_array();
        return $sekolah;
    }

    public function Registrasi()
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

    public function transakasi()
    {
        $sekolah = $this->db->select('COUNT(id_daftar) as total')
            ->from('ppdb_bayar')
            ->where(['verifikasi' => 1])
            ->get()->result_array();
        return $sekolah;
    }

    public function online()
    {
        $get_tasm = $this->db->get_where('ppdb_periode', ['is_active' => 1])->row_array();
        $tahun = $get_tasm['tahun'];

        $bagidata =
            $this->db->select('*,COUNT(no_daftar) as total')
            ->from('ppdb_daftar')
            ->where(['tgl_daftar' =>  $tahun])
            ->where(['online' => 1])
            ->get()->result_array();
        return $bagidata;
    }

    public function statistik_sekolah()
    {
        $get_tasm = $this->db->get_where('ppdb_periode', ['is_active' => 1])->row_array();
        $tahun = $get_tasm['tahun'];

        $bagidata =
            $this->db->select('*,COUNT(no_daftar) as total')
            ->from('ppdb_daftar')
            ->where(['tgl_daftar' =>  $tahun])
            ->group_by('asal_sekolah')
            ->where(['is_active' => 1])
            ->get()->result_array();
        return $bagidata;
    }

    public function peminat_jml()
    {
        $sekolah = $this->db->select('COUNT(a.no_daftar) as total,b.id_jurusan,b.kuota')
            ->from('ppdb_daftar a')
            ->join('ppdb_jurusan b', 'b.id_jurusan = a.kelas', 'left')
            ->group_by('a.kelas')
            ->where(['a.is_active' => 1])
            ->get()->result_array();
        return $sekolah;
    }

    public function jml_sekolah()
    {
        $sekolah = $this->db->select('SUM(status) as total')
            ->from('ppdb_sekolah')
            ->get()->result_array();
        return $sekolah;
    }

    public function jml_kelas()
    {
        $get_tasm = $this->db->get_where('t_tahun', ['aktif' => 'Y'])->row_array();
        $data['tasm'] = $get_tasm['tahun'];
        $ta = substr($data['tasm'], 0, 4);

        $bagidata =
            $this->db->select('count(id_kelas) AS rombel')
            ->from('t_kelas_siswa k')
            ->join('m_siswa s', 'k.id_siswa = s.nis', 'left')
            ->where('k.ta',  $ta)
            ->group_by('k.rombel')
            ->get()->num_rows();
        return $bagidata;
    }

    // public function get_tampil()
    // {
    //     $bagidata =
    //         $this->db->select('a.*,b.nama')
    //         ->from('t_kelas_siswa a')
    //         ->join('m_kelas b', 'a.id_kelas = b.tingkat', 'left')
    //         ->group_by('a.id_kelas', 'ASC')
    //         ->get()->result_array();
    //     return $bagidata;
    // }

    public function get_tampil()
    {
        $get_tasm = $this->db->get_where('t_tahun', ['aktif' => 'Y'])->row_array();
        $tasm = $get_tasm['tahun_aktif'];
        $bagidata =
            $this->db->select('a.*,COUNT(a.id_siswa) as total,b.nama')
            ->from('t_kelas_siswa a')
            ->join('m_kelas b', 'a.id_kelas = b.tingkat', 'left')
            ->where('a.npsn', $this->session->npsn)
            ->where(['a.ta' => $tasm ])
            ->group_by('a.id_kelas', 'ASC')
            ->get()->result_array();
        return $bagidata;
    }

    public function get_siswarombel($ta)
    {
        $get_tasm = $this->db->get_where('t_tahun', ['aktif' => 'Y'])->row_array();
        $data['tasm'] = $get_tasm['tahun'];
        $ta = substr($data['tasm'], 0, 4);

        $bagidata =
            $this->db->select('k.*,s.*, count(k.id_siswa) as peserta')
            ->from('t_kelas_siswa k')
            ->join('m_siswa s', 'k.id_siswa = s.nis', 'left')
            ->where('k.ta',  $ta)
            ->group_by('k.rombel')
            ->get()->result_array();
        return $bagidata;
    }
}
