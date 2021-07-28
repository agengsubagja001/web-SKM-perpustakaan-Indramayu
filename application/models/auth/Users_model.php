<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model{
    
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
