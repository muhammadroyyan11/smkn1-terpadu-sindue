<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataTuk_model extends CI_Model
{
    // tampil 
    public function getDataTuk()
    {
        $bagidata =
            $this->db->select('')
            ->from('lsp_data_tuk')
            ->order_by('id_tuk', 'DESC')
            ->get()->result_array();
        return $bagidata;
    }

    public function simpan_tambah()
    {
        $kode = htmlspecialchars($this->input->post('kode', true));
        $jenis_tuk = htmlspecialchars($this->input->post('jenis_tuk', true));
        $nama_tuk = htmlspecialchars($this->input->post('nama_tuk', true));
        $alamat = htmlspecialchars($this->input->post('alamat', true));
        $data = [
            'kode' => $kode,
            'jenis_tuk' => $jenis_tuk,
            'nama_tuk' => $nama_tuk,
            'alamat' => $alamat,
            'status' => 1,
        ];
        // insert ke table 
        $this->db->insert('lsp_data_tuk', $data);
    }

    public function simpan_edit()
    {
        $id_tuk = htmlspecialchars($this->input->post('id_tuk', true));
        $kode = htmlspecialchars($this->input->post('kode', true));
        $jenis_tuk = htmlspecialchars($this->input->post('jenis_tuk', true));
        $nama_tuk = htmlspecialchars($this->input->post('nama_tuk', true));
        $alamat = htmlspecialchars($this->input->post('alamat', true));  
        $status = htmlspecialchars($this->input->post('status', true)); 

        $this->db->set('status', $status);
        $this->db->set('alamat', $alamat);
        $this->db->set('nama_tuk', $nama_tuk);
        $this->db->set('jenis_tuk', $jenis_tuk);
        $this->db->set('kode', $kode);
        $this->db->where('id_tuk', $id_tuk);
        $this->db->update('lsp_data_tuk');
    }
    // end tampil 

}
