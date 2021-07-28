<?php

class M_login extends CI_Model
{
    function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    public function get_user($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('tbl_admin');
        return $query->row();
    }

    public function update_user($id, $userdata)
    {
        $this->db->where('id', $id);
        $this->db->update('tbl_admin', $userdata);
    }
}
