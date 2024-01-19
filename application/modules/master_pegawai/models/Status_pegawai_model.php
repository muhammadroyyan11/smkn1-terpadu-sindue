<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Status_pegawai_model extends CI_Model

{
    public function updateData()
    {
        $pegawai = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai'), 'npsn' => $this->session->userdata('npsn')])->row_array();
        $sekolah = $this->db->get('m_sekolah')->row_array();     
        // $npsn = $pegawai['npsn'];
        $npsn = $this->input->post('npsn');
        $nik = $this->input->post('nik');       
        $nama_pegawai = $this->input->post('nama_pegawai');
        $email_pegawai = $this->input->post('email');
        $role_id =  $this->input->post('id');
      
        $nik = $this->input->post('nik');
        $cekh = $this->db->get_where('pegawai', ['nik' => $nik])->row_array();
        $data_1 = [
            'nik' => $nik,
            'npsn' => $npsn,           
            'nama_pegawai' =>  $nama_pegawai,
            'email_pegawai ' => $email_pegawai,
            'password' => password_hash('12345678', PASSWORD_DEFAULT),
            'role_id' => $role_id,
            'img' => 'default.jpg',
            'is_active' => 1,
            ];
        
        $data_2 = [                
                'is_active' => 0,
                'role_id' => 0,
                ];
            if ($cekh == 0) {
                $this->db->insert('pegawai', $data_1);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil ubah data !!!</div>');
            } else {
                if($role_id !== '') {
                    $this->db->where('nik', $nik);
                    $this->db->update('pegawai', $data_1);       
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil ubah data !!!</div>');
                } else{
                    $this->db->where('nik', $nik);
                    $this->db->update('pegawai', $data_2);       
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil ubah data !!!</div>');
                }
                
            }
        
    }

    public function get_departemen()
    {
        $this->db->select('*');
        $this->db->from('access_departemen');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_data()
    {
        $pegawai =
            $this->db->select('a.*,b.*,c.*')
            ->from('pegawai_data a')
            ->join('pegawai b', 'a.nik = b.nik', 'left')           
            ->join('pegawai_role c', 'b.role_id = c.id', 'left')
            ->where(['a.status' => 1])
            ->get()->result_array();
        return $pegawai;
    }

    public function get_data_admin()
    {
        $pegawai =
            $this->db->select('a.*,b.*,c.*')
            ->from('pegawai_data a')
            ->join('pegawai b', 'a.nik = b.nik', 'left')           
            ->join('pegawai_role c', 'b.role_id = c.id', 'left')            
            ->where(['a.status' => 1])
            ->get()->result_array();
        return $pegawai;
    }

    public function get_editData($id)
    {
        $bagidata =
            $this->db->select('k.*')
            ->from('pegawai_data k')
            ->where(['k.data_id' => $id])
            ->get()->row_array();
        return $bagidata;
    }
}
