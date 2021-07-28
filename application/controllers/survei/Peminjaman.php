<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peminjaman extends CI_Controller
{

	function __construct() //method yang pertama kali di eksekusi
	{
		parent::__construct();
		// $this->load->library('form_validation');				
	}

	public function index()
	{
		$this->load->view('survei/peminjaman');
	}

	public function create()
	{
		if ($this->input->post('submit_checker') == true) {
			$umur = $this->input->post('umur');
			$jk = $this->input->post('jk');
			$pendidikan = $this->input->post('pendidikan');
			$pekerjaan = $this->input->post('pekerjaan');
			$q1 = $this->input->post('q1');
			$q2 = $this->input->post('q2');
			$q3 = $this->input->post('q3');
			$q4 = $this->input->post('q4');
			$q5 = $this->input->post('q5');
			$q6 = $this->input->post('q6');
			$q7 = $this->input->post('q7');
			$q8 = $this->input->post('q8');
			$q9 = $this->input->post('q9');

			$data = array(
				'umur' => $umur,
				'jk' => $jk,
				'pendidikan' => $pendidikan,
				'pekerjaan' =>	$pekerjaan,
				'q1' =>	$q1,
				'q2' =>	$q2,
				'q3' =>	$q3,
				'q4' =>	$q4,
				'q5' =>	$q5,
				'q6' =>	$q6,
				'q7' =>	$q7,
				'q8' =>	$q8,
				'q9' =>	$q9
			);
			$insert = $this->db->insert('tbl_peminjaman', $data);
			$insert = $this->db->insert('tbl_data', $data);

			if ($insert) {
				$this->session->set_flashdata('hasil', 'Terima kasih telah membantu kami dalam meningkatkan pelayanan');
			} else {
				echo ('Gagal mengirim survei');
			}
			redirect('survei/homepage');
		} else {
			redirect('survei/peminjaman');
		}
	}
}
