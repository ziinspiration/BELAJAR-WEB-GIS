<?php

defined('BASEPATH') or exit('No direct script acces allowed');

class M_tps extends CI_Model
{
    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('tbl_tps');
        return $this->db->get()->result();
    }
}
