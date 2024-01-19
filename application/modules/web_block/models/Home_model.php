<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{

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

    public function getActive()
    {
        $bagidata =
            $this->db->select('')
            ->from('profil_slide')
            ->where(['slide_id' => 1])            
            ->get()->row_array();
        return $bagidata;
    }

    function profil_slide()
    {
        $this->db->select('*');
        $this->db->from('profil_slide');
        $this->db->where(['status' => 1]);
        $this->db->order_by('slide_id', 'DESC');
        $this->db->limit(6);
        $hasil = $this->db->get();
        // return $query;
        if ($hasil->num_rows() > 0) {
            return $hasil->result();
        } else {
            return array();
        }
    }

    function profil_guru()
    {
        $this->db->select('*');
        $this->db->from('profil_guru');
        $this->db->where(['status' => 1]);
        $this->db->order_by('profil_id', 'ASC');      
        $hasil = $this->db->get();
        // return $query;
        if ($hasil->num_rows() > 0) {
            return $hasil->result();
        } else {
            return array();
        }
    }

    function profil_belajar()
    {
        $this->db->select('*');
        $this->db->from('profil_belajar');
        $this->db->where(['status' => 1]);
        $this->db->order_by('belajar_id', 'DESC');
        $this->db->limit(6);
        $hasil = $this->db->get();
        if ($hasil->num_rows() > 0) {
            return $hasil->result();
        } else {
            return array();
        }
    }

    function profil_artikel()
    {
        $this->db->select('*');
        $this->db->from('profil_artikel');
        $this->db->where(['status' => 1]);
        $this->db->order_by('id_artikel', 'DESC');
        $this->db->limit(6);
        $hasil = $this->db->get();
        if ($hasil->num_rows() > 0) {
            return $hasil->result();
        } else {
            return array();
        }
    }

    function profil_galeri()
    {
        $this->db->select('*');
        $this->db->from('profil_galeri');
        $this->db->where(['status' => 1]);
        $this->db->order_by('id_galeri', 'DESC');
        $this->db->limit(5);
        $hasil = $this->db->get();
        if ($hasil->num_rows() > 0) {
            return $hasil->result();
        } else {
            return array();
        }
        // $hasil = $this->db->select('*')
        //     ->from('profil_galeri')
        //     ->where(['status' => 1])
        //     ->order_by('id_galeri', 'DESC')
        //     ->limit(4)
        //     ->get()->result_array();
        // return $hasil;
    }
    
    function profil_video()
    {
        $this->db->select('*');
        $this->db->from('profil_video');
        $this->db->where(['status' => 1]);
        $this->db->order_by('id_video', 'DESC');
        $this->db->limit(5);
        $hasil = $this->db->get();
        if ($hasil->num_rows() > 0) {
            return $hasil->result();
        } else {
            return array();
        }

        // $hasil = $this->db->select('*')
        //     ->from('profil_video')
        //     ->where(['status' => 1])
        //     ->order_by('id_video', 'DESC')
        //     ->limit(4)
        //     ->get()->result_array();
        // return $hasil;
    }

    function profil_p5()
    {
        $this->db->select('*');
        $this->db->from('profil_p5');
        $this->db->where(['status' => 1]);
        $this->db->order_by('id_p5', 'DESC');
        $this->db->limit(5);
        $hasil = $this->db->get();
        if ($hasil->num_rows() > 0) {
            return $hasil->result();
        } else {
            return array();
        }
    }    

    function profil_perpus()
    {
        $this->db->select('*');
        $this->db->from('perpus_buku');
        // $this->db->where(['status' => 1]);
        $this->db->order_by('id_buku', 'DESC');
        $this->db->limit(5);
        $hasil = $this->db->get();
        if ($hasil->num_rows() > 0) {
            return $hasil->result();
        } else {
            return array();
        }
    }

    // data siswa
    function get_totalsiswa()
    {
        $get_tasm = $this->db->get_where('t_tahun', ['aktif' => 'Y'])->row_array();
        $data['tasm'] = $get_tasm['tahun'];
        $ta = substr($data['tasm'], 0, 4);

        $bagidata =
            $this->db->select('count(id_siswa) AS totalsiswa')
            ->from('t_kelas_siswa k')
            ->join('m_siswa s', 'k.id_siswa = s.nis', 'left')
            ->where('k.ta',  $ta)
            ->group_by('k.id_siswa')
            ->get()->num_rows();
        return $bagidata;
    }

    function get_pria()
    {
        $get_tasm = $this->db->get_where('t_tahun', ['aktif' => 'Y'])->row_array();
        $data['tasm'] = $get_tasm['tahun'];
        $ta = substr($data['tasm'], 0, 4);

        $bagidata =
            $this->db->select('count(id_siswa) AS pria')
            ->from('t_kelas_siswa k')
            ->join('m_siswa s', 'k.id_siswa = s.nis', 'left')
            ->where('k.ta',  $ta)
            ->where('s.jk', 'L')
            ->group_by('k.id_siswa')
            ->get()->num_rows();
        return $bagidata;
    }

    function get_wanita()
    {
        $get_tasm = $this->db->get_where('t_tahun', ['aktif' => 'Y'])->row_array();
        $data['tasm'] = $get_tasm['tahun'];
        $ta = substr($data['tasm'], 0, 4);

        $bagidata =
        $this->db->select('count(id_siswa) AS wanita')
        ->from('t_kelas_siswa k')
        ->join('m_siswa s', 'k.id_siswa = s.nis', 'left')
        ->where('k.ta',  $ta)
        ->where('s.jk', 'P')
        ->group_by('k.id_siswa')
        ->get()->num_rows();
        return $bagidata;
    }

    function get_rombel()
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
    // end data siswa

    // ppdb
    public function pendaftar_jml()
    {
        $allPeriode =  $this->db->get_where('ppdb_periode', ['status'=> 'Aktif','is_active' => 1])->row_array();;
        // $tahun = substr($allPeriode['tahun'],0,-5);
        $tahun = $allPeriode['tahun'];

        $sekolah = $this->db->select('*,COUNT(no_daftar) as total')
            ->from('ppdb_daftar')
            ->where(['tahun_daftar' => $tahun])
            ->where(['status' => 1])
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
    // end ppdb

    // lulus
    public function data_lulus()
    {       
        $sekolah = $this->db->select('COUNT(lulus_id) as total')
            ->from('m_lulus')
            ->group_by('lulus_id')
            ->get()->num_rows();
        return $sekolah;
    }

    public function th_lulus()
    {
        $get_tasm = $this->db->get_where('t_tahun', ['aktif' => 'Y'])->row_array();
        $tahun = $get_tasm['tahun_aktif'];
        $sekolah = $this->db->select('COUNT(lulus_id) as total')
            ->from('m_lulus')
            ->where(['tasm' =>  $tahun])
            ->group_by('lulus_id')
            ->get()->num_rows();
        return $sekolah;
    }
    // end lulus

    // absensi
    public function total_masuk(){

        $tgl = date('Y-m-d');
        $bagidata =
            $this->db->select('count(id_siswa) as total_masuk')
            ->from('ab_presensi a')
            ->join('m_siswa b', 'a.id_siswa = b.nis', 'left')                     
            ->where(['a.tgl' => $tgl])
            ->where(['a.id_status' => 1])
            ->get()->row_array();
        return $bagidata;  
    }

    public function total_pulang(){

        $tgl = date('Y-m-d');
        $bagidata =
            $this->db->select('count(id_siswa) as total_pulang')
            ->from('ab_presensi a')
            ->join('m_siswa b', 'a.id_siswa = b.nis', 'left')                     
            ->where(['a.tgl' => $tgl])
            ->where(['a.id_status' => 2])
            ->get()->row_array();
        return $bagidata;  
    }
    // end absesni

     function profil_jurusan()
    {
        $this->db->select('*');
        $this->db->from('profil_jurusan');
        $this->db->where(['status' => 1]);
        $this->db->order_by('id_jurusan', 'DESC');
        // $this->db->limit(6);
        $hasil = $this->db->get();
        if ($hasil->num_rows() > 0) {
            return $hasil->result();
        } else {
            return array();
        }
    }
}
