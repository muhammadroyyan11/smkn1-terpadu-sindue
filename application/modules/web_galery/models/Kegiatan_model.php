<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan_model extends CI_Model
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

    // wajib
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
    }
    // end wajib    
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

    function profil_gambar()
    {
        $hasil = $this->db->select('*')
            ->from('profil_galeri')
            ->where(['status' => 1])
            ->order_by('id_galeri', 'DESC')
            ->limit(9)
            ->get()->result_array();
        return $hasil;
    }

    function profil_galery_all()
    {
        $hasil = $this->db->select('*')
            ->from('profil_galeri')
            ->where(['status' => 1])
            ->order_by('id_galeri', 'DESC')
            ->get()->result_array();
        return $hasil;
    }

    function profil_galeri_sub($id)
    {
        $data =  $this->db->select('*')
            ->from('profil_galeri_sub')
            ->where(['id_galeri' => $id])
            ->get()->result_array();
        return $data;
    }  
    
    function profil_filem()
    {
        $hasil = $this->db->select('*')
            ->from('profil_video')
            ->where(['status' => 1])
            ->order_by('id_video', 'DESC')
            ->limit(9)
            ->get()->result_array();
        return $hasil;
    }
    
    function profil_video_all()
    {
        $hasil = $this->db->select('*')
            ->from('profil_video')
            ->where(['status' => 1])
            ->order_by('id_video', 'DESC')
            ->get()->result_array();
        return $hasil;
    }

    function profil_belajar()
    {
        $this->db->select('*');
        $this->db->from('profil_belajar');
        $this->db->where(['status' => 1]);
        $this->db->order_by('belajar_id', 'DESC');
        // $this->db->limit(6);
        $hasil = $this->db->get();
        if ($hasil->num_rows() > 0) {
            return $hasil->result();
        } else {
            return array();
        }
    }
}
