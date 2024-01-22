<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataSkema_model extends CI_Model
{

    public function getSkema()
    {
        $bagidata =
            $this->db->select('')
            ->from('lsp_data_skema')
            ->order_by('id_skema', 'DESC')
            ->get()->result_array();
        return $bagidata;
    }

    public function getCount(){
        $this->db->select('*');
        $this->db->from('jurusan');
        return $this->db->get();
    }

    public function simpan_tambah()
    {
        $kode_skema = htmlspecialchars($this->input->post('kode_skema', true));
        $nama_skema = htmlspecialchars($this->input->post('nama_skema', true));
        $kategori = htmlspecialchars($this->input->post('kategori', true));
        $bidang = htmlspecialchars($this->input->post('bidang', true));
        $mea = htmlspecialchars($this->input->post('mea', true));
        $unit = htmlspecialchars($this->input->post('unit', true));

        $data = [
            'kode_skema' => $kode_skema,
            'nama_skema' => $nama_skema,
            'kategori' => $kategori,
            'bidang' => $bidang,
            'mea' => $mea,
            'unit' => $unit,
            'status' => 1,
        ];
        // insert ke table 
        $this->db->insert('lsp_data_skema', $data);
    }

    public function simpan_edit()
    {
        $id_skema = htmlspecialchars($this->input->post('id_skema', true));      
        $kode_skema = htmlspecialchars($this->input->post('kode_skema', true));
        $nama_skema = htmlspecialchars($this->input->post('nama_skema', true));
        $kategori = htmlspecialchars($this->input->post('kategori', true));
        $bidang = htmlspecialchars($this->input->post('bidang', true));
        $mea = htmlspecialchars($this->input->post('mea', true));
        $unit = htmlspecialchars($this->input->post('unit', true));
        $status = htmlspecialchars($this->input->post('status', true));

        $this->db->set('status', $status);
        $this->db->set('kode_skema', $kode_skema);
        $this->db->set('nama_skema', $nama_skema);
        $this->db->set('kategori', $kategori);
        $this->db->set('bidang', $bidang);
        $this->db->set('mea', $mea);
        $this->db->set('unit', $unit);
        $this->db->where('id_skema', $id_skema);
        $this->db->update('lsp_data_skema');
    }
    // end tampil master foto

}
