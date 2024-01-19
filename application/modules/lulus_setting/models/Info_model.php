<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Info_model extends CI_Model
{
    // data_pengumuman
    public function getDataPengumuman()
    {
        $bagidata =
            $this->db->select('*')
            ->from('alumni_pengumuman')
            ->get()->result_array();
        return $bagidata;
    }

    public function getEdit_Pengumuman($id)
    {
        $bagidata =
            $this->db->select('*')
            ->from('alumni_pengumuman')
            ->where(['id' => $id])
            ->get()->row_array();
        return $bagidata;
    }


    public function simpan_tambah_pengumuman()
    {

        $npsn = htmlspecialchars($this->input->post('npsn', true));
        $id_user = htmlspecialchars($this->input->post('id_user', true));
        $judul = htmlspecialchars($this->input->post('judul', true));
        $deskripsi = $this->input->post('deskripsi', true);
        $jenis = htmlspecialchars($this->input->post('jenis', true));

        $data = [
            'npsn' => $npsn,
            'id_user' => $id_user,
            'judul' => $judul,
            'deskripsi' => stripslashes($deskripsi),
            'jenis' => $jenis,
        ];
        // insert ke table user
        $this->db->insert('alumni_pengumuman', $data);
    }

    public function simpan_edit_pengumuman()
    {
        $id = htmlspecialchars($this->input->post('id', true));
        $judul = htmlspecialchars($this->input->post('judul', true));
        $jenis = htmlspecialchars($this->input->post('jenis', true));
        $deskripsi = stripslashes($this->input->post('deskripsi', true));

        $this->db->set('judul', $judul);
        $this->db->set('jenis', $jenis);
        $this->db->set('deskripsi', $deskripsi);
        $this->db->where('id', $id);
        $this->db->update('alumni_pengumuman');
    }
    // end data_pengumuman
}
