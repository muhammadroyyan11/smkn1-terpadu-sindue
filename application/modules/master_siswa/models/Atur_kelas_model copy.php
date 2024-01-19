<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Atur_kelas_model extends CI_Model

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
    
    // index
    // public function get_tampil()
    // {
    //     $get_tasm = $this->db->get_where('t_tahun', ['aktif' => 'Y'])->row_array();
    //     $tasm = $get_tasm['tahun_aktif'];
    //     $bagidata =
    //         $this->db->select('a.*,COUNT(a.id_siswa) as total,b.nama')
    //         ->from('t_kelas_siswa a')
    //         ->join('m_kelas b', 'a.id_kelas = b.tingkat', 'left')
    //         ->where('a.npsn', $this->session->npsn)
    //         ->where(['a.ta' => $tasm ])
    //         ->group_by('a.id_kelas', 'ASC')
    //         ->get()->result_array();
    //     return $bagidata;
    // }

    public function get_tampil()
    {
        $bagidata =
            $this->db->select('a.*,b.nama')
            ->from('t_kelas_siswa a')
            ->join('m_kelas b', 'a.id_kelas = b.tingkat', 'left')
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

    // public function get_siswarombel($ta)
    // {
    //     $get_tasm = $this->db->get_where('t_tahun', ['aktif' => 'Y'])->row_array();
    //     $data['tasm'] = $get_tasm['tahun'];
    //     $ta = substr($data['tasm'], 0, 4);

    //     $bagidata =
    //         $this->db->select('k.*,COUNT(k.id_siswa) as total,s.*')
    //         ->from('t_kelas_siswa k')
    //         ->join('m_siswa s', 'k.id_siswa = s.nis', 'left')
    //         ->where('k.ta',  $ta)
    //         ->where('k.npsn', $this->session->npsn)
    //         ->group_by('k.rombel')
    //         ->get()->result_array();
    //     return $bagidata;
    // }
    // end index
    // atur rombel
    public function get_aturrombel($id)
    {
        $bagidata =
            $this->db->select('k.*')
            ->from('m_kelas k')
            ->where(['k.tingkat' => $id])
            ->where('k.npsn', $this->session->npsn)
            ->get()->row_array();
        return $bagidata;
    }

    public function get_siswa_at($id)
    {
        $bagidata =
            $this->db->select('k.*,s.nama,nk.nis')
            ->from('t_kelas_siswa k')
            ->join('m_naik_kelas nk', 'k.id_siswa = nk.nis', 'left')
            ->join('m_siswa s', 'nk.nis = s.nis', 'left')
            ->where(['k.id_kelas' => $id])
            ->where('k.npsn', $this->session->npsn)
            ->group_by('s.nama', 'ASC')
            ->get()->result_array();
        return $bagidata;
    }
    // end atur rombel
    // rombel
    public function get_rombel($id)
    {
        $get_tasm = $this->db->get_where('t_tahun', ['aktif' => 'Y'])->row_array();
        $data['tasm'] = $get_tasm['tahun'];
        $ta = substr($data['tasm'], 0, 4);

        $bagidata =
            $this->db->select('k.*')
            ->from('t_kelas_siswa k')         
            ->where(['k.rombel' => $id])
            ->where('k.ta',  $ta)
            ->where('k.npsn', $this->session->npsn)
            ->get()->row_array();
        return $bagidata;
    }

    public function get_siswa_r($id)
    {
        $get_tasm = $this->db->get_where('t_tahun', ['aktif' => 'Y'])->row_array();
        $data['tasm'] = $get_tasm['tahun'];
        $ta = substr($data['tasm'], 0, 4);

        $bagidata =
            $this->db->select('k.*,s.*,nk.*')
            ->from('t_kelas_siswa k')
            ->join('m_naik_kelas nk', 'k.id_siswa = nk.nis', 'left')
            ->join('m_siswa s', 'nk.nis = s.nis', 'left')
            ->where(['k.rombel' => $id])
            ->where('k.ta',  $ta)
            ->where('k.npsn', $this->session->npsn)
            ->group_by('s.nama','ASC')
            ->get()->result_array();
        return $bagidata;
    }
    // end rombel
    // proses tambah
    public function get_kelas()
    {
        $this->db->select('*');
        $this->db->from('m_kelas');
        // $this->db->where(['tingkat' => $id]);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_tahun()
    {
        $this->db->select('*');
        $this->db->from('t_tahun');
        $this->db->where(['aktif' => 'Y']);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_sekolah()
    {
        $this->db->select('*');
        $this->db->from('m_sekolah');
        $query = $this->db->get();
        return $query->result();
    }

    public function getLokasi()
    {
        return $this->db->get('m_sekolah')->result_array();
    }

    public function kelas_simpan()
    {
        $id_siswa = $this->input->post('id_siswa', true);
        $p = $this->input->post();

        for ($i = 0; $i < sizeof($id_siswa); $i++) {
            $data = [
                "id_siswa" =>  $id_siswa[$i],
                "npsn" => $p['npsn'],
                "id_kelas" => $p['id_kelas'],
                "rombel" => $p['rombel'],
                "ta" => $p['ta'],
            ];
            $this->db->insert('t_kelas_siswa', $data);
        }

        $nis = $this->input->post('id_siswa', true);

        for ($i = 0; $i < sizeof($nis); $i++) {
            $data1 = [
                "tingkat_active" => 1,
            ];
            $this->db->where('nis', $nis[$i]);
            $this->db->update('m_naik_kelas', $data1);
        }        
    }
    // end proses tambah
    public function simpan_ubah()
    {       
        $nis = $this->input->post('nis', true);
        for ($i = 0; $i < sizeof($nis); $i++) {            
            $data = ['id_siswa' => $nis[$i]];
            $this->db->delete('t_kelas_siswa', $data);
        }      

        $nis = $this->input->post('nis', true);
        for ($i = 0; $i < sizeof($nis); $i++) {            
            $data1 = ['tingkat_active' => 0];
            $this->db->where('nis', $nis[$i]);
            $this->db->update('m_naik_kelas', $data1);
        }
    }
}
