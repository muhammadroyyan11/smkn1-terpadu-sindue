<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PersiapanJurusan_model extends CI_Model
{
    public function getLJurusan()
    {
        return $this->db->get('m_jurusan')->result_array();
    }

    public function getJurusan()
    {
        $this->db->select('k.*');
        $this->db->from('m_jurusan k');
        $query = $this->db->get();
        return $query;
    }
}
