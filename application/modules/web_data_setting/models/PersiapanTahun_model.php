<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PersiapanTahun_model extends CI_Model
{
    public function getTahun()
    {
        $this->db->select('*');
        $this->db->from('t_tahun');
        $this->db->group_by('id', 'DESC');
        $query = $this->db->get();
        return $query;
    }
}
