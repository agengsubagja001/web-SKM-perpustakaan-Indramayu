<?php 

class Totaldata extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(base_url('auth/login'));
          }     
    }

    function index()
    {
        $this->load->model('admin/m_total');
        $data['internet'] = $this->m_total->get_internet();
        $data['sudutbaca'] = $this->m_total->get_sudutbaca();
        $data['bacaditempat'] = $this->m_total->get_bacaditempat();
        $data['pusling'] = $this->m_total->get_pusling();
        $data['peminjaman'] = $this->m_total->get_peminjaman();
        $data['pengembalian'] = $this->m_total->get_pengembalian();
        $data['pembuatankta'] = $this->m_total->get_pembuatankta();
        $data['perpanjangkta'] = $this->m_total->get_perpanjangkta();
        $data['totaldata'] = $this->m_total->get_total();
        $this->load->view('admin/totaldata',$data);
    }
}
