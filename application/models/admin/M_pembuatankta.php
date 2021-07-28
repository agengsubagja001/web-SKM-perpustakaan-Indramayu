<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_pembuatankta extends CI_Model
{
    public function view_by_date($date)
    {
        $this->db->where('DATE(waktu)', $date); // Tambahkan where tanggal nya

        return $this->db->get('tbl_pembuatankta')->result(); // Tampilkan data transaksi sesuai tanggal yang diinput oleh user pada filter
    }

    public function view_by_month($month, $year)
    {
        $this->db->where('MONTH(waktu)', $month); // Tambahkan where bulan
        $this->db->where('YEAR(waktu)', $year); // Tambahkan where tahun

        return $this->db->get('tbl_pembuatankta')->result(); // Tampilkan data transaksi sesuai bulan dan tahun yang diinput oleh user pada filter
    }

    public function view_by_year($year)
    {
        $this->db->where('YEAR(waktu)', $year); // Tambahkan where tahun

        return $this->db->get('tbl_pembuatankta')->result(); // Tampilkan data transaksi sesuai tahun yang diinput oleh user pada filter
    }

    public function view_all()
    {
        return $this->db->get('tbl_pembuatankta')->result(); // Tampilkan semua data transaksi
    }

    public function option_tahun()
    {
        $this->db->select('YEAR(waktu) AS tahun'); // Ambil Tahun dari field waktu
        $this->db->from('tbl_internet'); // select ke tabel transaksi
        $this->db->order_by('YEAR(waktu)'); // Urutkan berdasarkan tahun secara Ascending (ASC)
        $this->db->group_by('YEAR(waktu)'); // Group berdasarkan tahun pada field waktu

        return $this->db->get()->result(); // Ambil data pada tabel transaksi sesuai kondisi diatas
    }
}
