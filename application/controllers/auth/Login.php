<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth/m_login');
    }

    public function index()
    {
        // load view admin/overview.php
        $this->load->view("auth/login");
    }

    public function update_password()
    {
        $this->load->view('admin/update_pw');
    }


    public function prosesReset()
    {
        $password = $this->input->post('password');
        $passwordKonf = $this->input->post('passwordKonf');

        // var_dump($passwordKonf);
        // die;
        if ($password != $passwordKonf) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success">Password harus sama!</div>');
            redirect(base_url('auth/login/update_password'));
        } else {
            $id = $this->session->userdata('id');

            $where = [
                "id" => $id
            ];
            $data = [
                "password" => md5($password)
            ];

            $this->db->where($where);
            $update = $this->db->update("tbl_admin", $data);
            if ($update) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil update password</div>');
                redirect(base_url('auth/login'));
                $this->session->sess_destroy();
            }
        }
    }

    public function aksi_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => md5($password)
        );
        $cek = $this->m_login->cek_login("tbl_admin", $where)->result_array();

        if (count($cek) > 0) {
            $data_session = array(
                'nama' => $username,
                "id" => $cek[0]['id'],
                'status' => "login"
            );
            $this->session->set_userdata($data_session);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success">Anda berhasil login</div>');
            redirect(base_url('admin/dashboard'));
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger">Username atau password salah!</div>');
            redirect(base_url('auth/login'));
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('auth/login'));
    }
}
