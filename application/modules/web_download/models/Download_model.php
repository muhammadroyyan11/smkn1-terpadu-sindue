<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Download_model extends CI_Model
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

    public function add($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function get($table, $where = null)
    {
        if ($where != null) {
            $this->db->where($where);
        }
        $sql = $this->db->get($table);
        return $sql;
    }

    public function del($table, $where)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

}
