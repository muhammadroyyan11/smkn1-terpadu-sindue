<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LulusInfoIsi_model extends CI_Model
{
    // kelulusan
    public function getPublish()
    {
        $bagidata =
            $this->db->select('')
            ->from('alumni_register')           
            ->get()->row_array();
        return $bagidata;
    }   

    public function simpan()
    {
        $get_tasm = $this->db->get_where('t_tahun', ['aktif' => 'Y'])->row_array();
        $tasm = $get_tasm['tahun'];

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
            'tasm' => $tasm,
            'status' => 1,
            'alumni_aktif' => 1,
        ];
        // insert ke table user
        $cek = $this->db->get_where('alumni_register',['nis' => $nis])->row_array();
        if ($cek['nis'] == 0){
            $this->db->insert('alumni_register', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil tambah data !!!</div>');
            redirect('lulus_data/data_aktivasi');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert"> Data sudah ada !!!</div>');
            redirect('lulus_data/data_aktivasi');
        }
        
    }
    
    public function ubah()
    {
        $alumni_id = htmlspecialchars($this->input->post('alumni_id', true));
        $no_surat = htmlspecialchars($this->input->post('no_surat', true));
        $tahun_pelajaran = htmlspecialchars($this->input->post('tahun_pelajaran', true));
        $nama_siswa = htmlspecialchars($this->input->post('nama_siswa', true));
        $nis = htmlspecialchars($this->input->post('nis', true));
        $nisn = htmlspecialchars($this->input->post('nisn', true));
        $tempat_lahir = htmlspecialchars($this->input->post('tempat_lahir', true));
        $tanggal_lahir = htmlspecialchars($this->input->post('tanggal_lahir', true));     
        $keterangan = htmlspecialchars($this->input->post('keterangan', true));
        $alamat_siswa = htmlspecialchars($this->input->post('alamat_siswa', true));
        $alumni_aktif = htmlspecialchars($this->input->post('alumni_aktif', true));

        $this->db->set('no_surat', $no_surat);
        $this->db->set('tahun_pelajaran', $tahun_pelajaran);
        $this->db->set('nama_siswa', $nama_siswa);
        $this->db->set('nis', $nis);       
        $this->db->set('nisn', $nisn);
        $this->db->set('tempat_lahir', $tempat_lahir);
        $this->db->set('tanggal_lahir', $tanggal_lahir);
        $this->db->set('keterangan', $keterangan);
        $this->db->set('alamat_siswa', $alamat_siswa);
        $this->db->set('alumni_aktif', $alumni_aktif);
        $this->db->where('alumni_id', $alumni_id);
        $this->db->update('alumni_register');
    }

    public function ubah_baru()
    {
        $alumni_id = htmlspecialchars($this->input->post('alumni_id', true));
        $telp = htmlspecialchars($this->input->post('telp', true));
        $email = htmlspecialchars($this->input->post('email', true));       
        $this->db->set('telp', $telp);
        $this->db->set('email', $email);
        $this->db->set('perbaikan', 1);       
        $this->db->where('alumni_id', $alumni_id);
        $this->db->update('alumni_register');
    }

    public function ubah_file()
    {
        $upload_image = $_FILES['file_ijazah'];
        //var_dump($upload_image);
        //die;
        if ($upload_image) {
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size'] = '2048';
            $config['upload_path'] = './panel/dist/upload/file_ijazah/';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file_ijazah')) {

                $old_img = $this->input->post('old_image', true);
                // var_dump($old_img);
                // die;
                if ($old_img != '') {
                    unlink(FCPATH . './panel/dist/upload/file_ijazah/' . $old_img);
                }
                $new_img = $this->upload->data('file_name');
                $this->db->set('file_ijazah', $new_img);
            } else {
                echo $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
            }
        }       
        
        $alumni_id = htmlspecialchars($this->input->post('alumni_id', true));     
        $data = [
            'aktive_ijazah' => 1,  
            
        ];
        $this->db->where('alumni_id', $alumni_id);
        $this->db->update('alumni_register', $data);
    }

    // end kelulusan   

}
