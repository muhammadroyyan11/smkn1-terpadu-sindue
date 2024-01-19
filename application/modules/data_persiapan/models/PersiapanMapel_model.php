<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PersiapanMapel_model extends CI_Model
{
    public function getLMapel()
    {
        return $this->db->get('m_mapel')->result_array();
    }

    public function getMapel()
    {
        $this->db->select('k.*');
        $this->db->from('m_mapel k');
        $query = $this->db->get();
        return $query;
    }
}
