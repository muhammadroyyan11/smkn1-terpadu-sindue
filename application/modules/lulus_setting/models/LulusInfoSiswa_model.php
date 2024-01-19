<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LulusInfoSiswa_model extends CI_Model
{
    // kelulusan
    public function get_tampil()
    {
        $get_tasm = $this->db->get_where('t_tahun', ['aktif' => 'Y'])->row_array();
        $tasm = $get_tasm['tahun_aktif'];
        $bagidata =
            $this->db->select('a.*,COUNT(a.id_siswa) as total')
            ->from('t_kelas_siswa a')           
            ->where('a.npsn', $this->session->npsn)
            ->where(['a.ta' => $tasm ])
            ->group_by('a.rombel', 'ASC')
            ->get()->result_array();
        return $bagidata;
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

    public function get_siswarombel()
    {
        $get_tasm = $this->db->get_where('t_tahun', ['aktif' => 'Y'])->row_array();
        $data['tasm'] = $get_tasm['tahun'];
        $ta = $get_tasm['tahun_aktif'];

        $bagidata =
            $this->db->select('k.*,s.*, count(k.id_siswa) as peserta')
            ->from('t_kelas_siswa k')
            ->join('m_siswa s', 'k.id_siswa = s.nis', 'left')
            ->where('k.ta', $ta)
            ->group_by('k.rombel')
            ->get()->result_array();
        return $bagidata;
    }

    public function getPublish()
    {
        $bagidata =
            $this->db->select('')
            ->from('m_lulus_data')           
            ->get()->row_array();
        return $bagidata;
    }

    public function simpan_lulus_data()
    {
        $upload_image = $_FILES['logo'];
        //var_dump($upload_image);
        //die;
        if ($upload_image) {
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size'] = '2048';
            $config['upload_path'] = './panel/dist/upload/logo/';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('logo')) {

                $old_img = $this->input->post('old_image', true);
                // var_dump($old_img);
                // die;
                if ($old_img != '') {
                    unlink(FCPATH . './panel/dist/upload/logo/' . $old_img);
                }
                $new_img = $this->upload->data('file_name');
                $this->db->set('logo', $new_img);
            } else {
                echo $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
            }
        }

        $upload_image = $_FILES['ttd_kepsek'];
        //var_dump($upload_image);
        //die;
        if ($upload_image) {
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size'] = '2048';
            $config['upload_path'] = './panel/dist/upload/logo/';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('ttd_kepsek')) {

                $old_img = $this->input->post('old_image', true);
                // var_dump($old_img);
                // die;
                if ($old_img != '') {
                    unlink(FCPATH . './panel/dist/upload/logo/' . $old_img);
                }
                $new_img = $this->upload->data('file_name');
                $this->db->set('ttd_kepsek', $new_img);
            } else {
                echo $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
            }
        }
        
        $id_data = htmlspecialchars($this->input->post('id_data', true));      
        $tanggal_publis = htmlspecialchars($this->input->post('tanggal_publis', true));  
        $kota = htmlspecialchars($this->input->post('kota', true));       

        $data = [           
            'tanggal_publis' => $tanggal_publis, 
            'kota' => $kota,
        ];      

        $cek = $this->db->get_where('m_lulus_data')->row_array();
        if($cek == 0){
            $this->db->insert('m_lulus_data', $data);
        } else{
            $this->db->where('id_data', $id_data);
            $this->db->update('m_lulus_data', $data);
        }
    }

    public function getKelulusan()
    {
        $get_tasm = $this->db->get_where('t_tahun', ['aktif' => 'Y'])->row_array();
        $tasm = $get_tasm['tahun_aktif'];

        $bagidata =
            $this->db->select('')
            ->from('m_lulus')
            ->where(['tasm' => $tasm ])
            ->order_by('nama_siswa', 'DESC')
            ->get()->result_array();
        return $bagidata;
    }

    public function simpan_lulus()
    {
        $get_tasm = $this->db->get_where('t_tahun', ['aktif' => 'Y'])->row_array();
        $tasm = $get_tasm['tahun_aktif'];

        $npsn = htmlspecialchars($this->input->post('npsn', true));
        $no_surat = htmlspecialchars($this->input->post('no_surat', true));
        $tahun_pelajaran = htmlspecialchars($this->input->post('tahun_pelajaran', true));
        $nama_siswa = htmlspecialchars($this->input->post('nama_siswa', true));
        $nis = htmlspecialchars($this->input->post('nis', true));
        $nisn = htmlspecialchars($this->input->post('nisn', true));
        $tempat_lahir = htmlspecialchars($this->input->post('tempat_lahir', true));
        $tanggal_lahir = htmlspecialchars($this->input->post('tanggal_lahir', true));     
        $keterangan = htmlspecialchars($this->input->post('keterangan', true));
        $alamat_siswa = htmlspecialchars($this->input->post('alamat_siswa', true));

        $data = [
            'npsn' => $npsn,
            'no_surat' => $no_surat,
            'tahun_pelajaran' => $tahun_pelajaran,
            'nama_siswa' => $nama_siswa,
            'nis' => $nis,
            'nisn' => $nisn,
            'tempat_lahir' => $tempat_lahir,
            'tanggal_lahir' => $tanggal_lahir,            
            'keterangan' => $keterangan,
            'alamat_siswa' => $alamat_siswa,
            'status' => 1,
            'tasm' => $tasm,
        ];
        // insert ke table user
        $this->db->insert('m_lulus', $data);
    }
    
    public function simpan_editlulus()
    {
        $get_tasm = $this->db->get_where('t_tahun', ['aktif' => 'Y'])->row_array();
        $tasm = $get_tasm['tahun_aktif'];

        $lulus_id = htmlspecialchars($this->input->post('lulus_id', true));
        $no_surat = htmlspecialchars($this->input->post('no_surat', true));
        $tahun_pelajaran = htmlspecialchars($this->input->post('tahun_pelajaran', true));
        $nama_siswa = htmlspecialchars($this->input->post('nama_siswa', true));
        $nis = htmlspecialchars($this->input->post('nis', true));
        $nisn = htmlspecialchars($this->input->post('nisn', true));
        $tempat_lahir = htmlspecialchars($this->input->post('tempat_lahir', true));
        $tanggal_lahir = htmlspecialchars($this->input->post('tanggal_lahir', true));     
        $keterangan = htmlspecialchars($this->input->post('keterangan', true));
        $alamat_siswa = htmlspecialchars($this->input->post('alamat_siswa', true));
        $status = htmlspecialchars($this->input->post('status', true));

        $this->db->set('no_surat', $no_surat);
        $this->db->set('tahun_pelajaran', $tahun_pelajaran);
        $this->db->set('nama_siswa', $nama_siswa);
        $this->db->set('nis', $nis);       
        $this->db->set('nisn', $nisn);
        $this->db->set('tempat_lahir', $tempat_lahir);
        $this->db->set('tanggal_lahir', $tanggal_lahir);
        $this->db->set('keterangan', $keterangan);
        $this->db->set('alamat_siswa', $alamat_siswa);
        $this->db->set('status', $status);
        $this->db->set('tasm', $tasm);
        $this->db->where('lulus_id', $lulus_id);
        $this->db->update('m_lulus');
    }
    // end kelulusan   

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

     public function tarik()
    {        
        $nis = $this->input->post('nis', true);
        $nisn = $this->input->post('nisn', true);
        $nama_siswa = $this->input->post('nama_siswa', true);
        $tempat_lahir = $this->input->post('tempat_lahir', true);
        $tanggal_lahir = $this->input->post('tanggal_lahir', true);       
        $alamat_siswa = $this->input->post('alamat_siswa',true);
        $p = $this->input->post();

        for ($i = 0; $i < sizeof($nis); $i++) {
            $data = [
                "nis" =>  $nis[$i],
                "nisn" =>  $nisn[$i],
                "nama_siswa" => $nama_siswa[$i],
                "tempat_lahir" => $tempat_lahir[$i],
                "tanggal_lahir" => $tanggal_lahir[$i],                
                "alamat_siswa" => $alamat_siswa[$i],
                "status" => 1,
                "tasm" => $p['tasm'],
                "npsn" => $p['npsn'],
                "no_surat" => $p['no_surat'],
                "keterangan" => $p['keterangan'],
                "tahun_pelajaran" => $p['tahun_pelajaran'],               
            ];
            $this->db->insert('m_lulus', $data);
        }

    }

    public function simpan_mapel()
    { 
        $no_urut = $this->input->post('no_urut', true);
        $kode_mapel = $this->input->post('kode_mapel', true);
        $nama_mapel = $this->input->post('nama_mapel', true);
        $kelompok = $this->input->post('kelompok', true);
      
        $p = $this->input->post();
        if (!empty($_POST['submit'])) {
            for ($i = 0; $i < sizeof($no_urut); $i++) {
                $data = [
                    "no_urut" => $no_urut[$i],
                    "kode_mapel" => $kode_mapel[$i],
                    "nama_mapel" => $nama_mapel[$i],
                    "kelompok" => $kelompok[$i],              
                    "aktif_skl" => 1,
                    "aktif_transkip" => 1,
                    "rombel" => $p['rombel'],               
                    "tasm" => $p['tasm'],
                    "npsn" => $p['npsn'],                             
                ];
                $this->db->insert('alumni_mapel', $data);
            }
            // submit button pressed
          }
          
          if (!empty($_POST['forget'])) {
            for ($i = 0; $i < sizeof($no_urut); $i++) {               
                $data = ["kode_mapel" => $kode_mapel[$i]];
                $this->db->delete('alumni_mapel', $data);
            }
            // forgot password button pressed
        }
    }
     // end rombel

     public function awal_nilai($id){

        $get_tasm = $this->db->get_where('t_tahun', ['aktif' => 'Y'])->row_array();
        $tasm = $get_tasm['tahun_aktif'];       

        $bagidata =   $this->db->select('a.*,b.*')
                        ->from('t_kelas_siswa a')   
                        ->join('alumni_mapel b', 'a.rombel = b.rombel', 'left')                
                        ->where(['a.rombel' => $id ])
                        ->where(['a.ta'=>$tasm])                   
                        ->get()->result_array(); 

        foreach($bagidata as $bg):
            $data = [
                "nis" => $bg['id_siswa'],
                "rombel" => $bg['rombel'],
                "kode_mapel" => $bg['kode_mapel'],   
                "tasm" => $tasm,                                     
            ];       
            $cek = $this->db->get_where('alumni_nilai',['nis' => $bg['id_siswa']])->row_array();
            if ($cek['nis'] == 0){
                $this->db->insert('alumni_nilai', $data); 
            } else {
                $this->db->where('id_nilai', $cek['id_nilai']);
                $this->db->update('alumni_nilai', $data);
            }
        endforeach; 
     }

}
