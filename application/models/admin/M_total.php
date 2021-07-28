<?php 

class M_total extends CI_Model
{
    public function get_internet()
    {
        $sql = "SELECT count(id) as id FROM tbl_internet";
        $result = $this->db->query($sql);
        return $result->row()->id;
    }

    public function get_sudutbaca()
    {
        $sql = "SELECT count(id) as id FROM tbl_sudutbaca";
        $result = $this->db->query($sql);
        return $result->row()->id;
    }

    public function get_bacaditempat()
    {
        $sql = "SELECT count(id) as id FROM tbl_bacaditempat";
        $result = $this->db->query($sql);
        return $result->row()->id;
    }

    public function get_pusling()
    {
        $sql = "SELECT count(id) as id FROM tbl_pusling";
        $result = $this->db->query($sql);
        return $result->row()->id;
    }

    public function get_peminjaman()
    {
        $sql = "SELECT count(id) as id FROM tbl_peminjaman";
        $result = $this->db->query($sql);
        return $result->row()->id;
    }

    public function get_pengembalian()
    {
        $sql = "SELECT count(id) as id FROM tbl_pengembalian";
        $result = $this->db->query($sql);
        return $result->row()->id;
    }

    public function get_pembuatankta()
    {
        $sql = "SELECT count(id) as id FROM tbl_pembuatankta";
        $result = $this->db->query($sql);
        return $result->row()->id;
    }

    public function get_perpanjangkta()
    {
        $sql = "SELECT count(id) as id FROM tbl_perpanjangkta";
        $result = $this->db->query($sql);
        return $result->row()->id;
    }

    public function get_total()
    {
        $sql = "SELECT count(id) as id FROM tbl_data";
        $result = $this->db->query($sql);
        return $result->row()->id;
    }
}

?>