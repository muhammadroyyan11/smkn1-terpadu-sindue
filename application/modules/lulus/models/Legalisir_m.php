<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Legalisir_m extends CI_Model
{

    public function getTotalBiaya($periode)
    {
        $bagidata =
            $this->db->select('sum(jumlah) as total')
            ->from('ppdb_biaya')
            ->where(['status' => 1])
            ->where(['periode' => $periode])
            ->get()->row_array();
        return $bagidata;
    }

    public function getBayar()
    {
        $bagidata =
            $this->db->select('a.*,b.nama')
            ->from('ppdb_bayar a')
            ->join('ppdb_daftar b', 'a.id_daftar=b.id_daftar')
            ->where(['a.id_daftar' => $this->session->userdata('id_daftar')])
            ->get()->result_array();
        return $bagidata;
    }

    public function getTotalBayar()
    {
        $bagidata =
            $this->db->select('sum(jumlah) as total')
            ->from('ppdb_bayar')
            ->where(['id_daftar' => $this->session->userdata('id_daftar')])
            ->get()->row_array();
        return $bagidata;
    }

    public function getIdbayar()
    {
        $bagidata =
            $this->db->select('max(id_bayar) AS last')
            ->from('ppdb_bayar')
            ->get()->row_array();
        return $bagidata;
    }

    public function detail($id)
    {
        $bagidata =
            $this->db->select('*')
            ->from('ppdb_bayar')
            ->where(['id_bayar' => $id])
            ->get()->row_array();
        return $bagidata;
    }

    public function hapusdata($id)
    {
        $this->db->delete('ppdb_bayar', ['id_bayar' => $id]);
    }

    public function simpan_pengajuan()
    {        
        $npsn = htmlspecialchars($this->input->post('npsn', true));
        $nis = htmlspecialchars($this->input->post('nis', true));
        $nisn = htmlspecialchars($this->input->post('nisn', true));
        $nama_siswa = htmlspecialchars($this->input->post('nama_siswa', true));
        $tahun_pelajaran = htmlspecialchars($this->input->post('tahun_pelajaran', true));
        $tujuan = htmlspecialchars($this->input->post('tujuan', true));
        $ket_pengajuan = htmlspecialchars($this->input->post('ket_pengajuan', true));

        $data = [
            'npsn' => $npsn, 
            'nis' => $nis,
            'nisn' => $nisn,    
            'nama_siswa' => $nama_siswa,        
            'tahun_pelajaran' => $tahun_pelajaran,
            'tgl_pengajuan' => date('Y-m-d'),
            'tujuan' => $tujuan,
            'ket_pengajuan' => $ket_pengajuan,
            'status_pengajuan' => 1,   
        ];
        // insert ke table user
        $this->db->insert('alumni_legalisir', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil tambah data !!!</div>');
        redirect('lulus/legalisir');
        // $cek = $this->db->get_where('alumni_legalisir',['nis' => $nis])->row_array();
        // if($cek['nis'] == 0){   
        //     $this->db->insert('alumni_legalisir', $data);
        //     $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil tambah data !!!</div>');
        //     redirect('lulus/legalisir');
        // } else {
        //     $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert"> Sudah tambah data !!!</div>');
        //     redirect('lulus/legalisir');
        // } 
    }

    public function simpan_bayar()
    {
        $upload_image = $_FILES['file_bayar'];
        //var_dump($upload_image);
        //die;
        if ($upload_image) {
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size'] = '2048';
            $config['upload_path'] = './panel/dist/upload/file_bayar/';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file_bayar')) {

                $old_img = $this->input->post('old_image', true);
                // var_dump($old_img);
                // die;
                if ($old_img != '') {
                    unlink(FCPATH . './panel/dist/upload/file_bayar/' . $old_img);
                }
                $new_img = $this->upload->data('file_name');
                $this->db->set('file_bayar', $new_img);
            } else {
                echo $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
            }
        }
        
        $legalisir_id = htmlspecialchars($this->input->post('legalisir_id', true));      
        $tgl_bayar = htmlspecialchars($this->input->post('tgl_bayar', true));
        $jum_bayar = htmlspecialchars($this->input->post('jum_bayar', true)); 
        $status_bayar = $this->input->post('status_bayar', true);              

        $data = [
            'tgl_bayar' => $tgl_bayar,  
            'jum_bayar' => $jum_bayar, 
            'status_bayar' => $status_bayar,           
        ];
        $this->db->set('jum_bayar', $jum_bayar);      
        $this->db->set('status_pengajuan', 3);
        $this->db->where('legalisir_id', $legalisir_id);
        $this->db->update('alumni_legalisir',$data);
    }
    
}
