<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProfilSekolah_model extends CI_Model
{

    function get_all_provinsi()
    {
        $this->db->select('*');
        $this->db->from('m_provinsi');
        $query = $this->db->get();

        return $query->result();
    }

    function get_lokasi()
    {
        $this->db->select('*');
        $this->db->from('lsp_profile');
        $query = $this->db->get()->row_array();
        return $query;
    }
}
