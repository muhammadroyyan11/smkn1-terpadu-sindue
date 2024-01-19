<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PersiapanRuang_model extends CI_Model
{
    public function getLRuang()
    {
        return $this->db->get('m_ruang')->result_array();
    }

    public function getRuang()
    {
        $this->db->select('k.*');
        $this->db->from('m_ruang k');
        $query = $this->db->get();
        return $query;
    }
}
