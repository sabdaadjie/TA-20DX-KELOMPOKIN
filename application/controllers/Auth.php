<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	// parrent construct model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_model');
	}

	public function index()
	{
		$this->template->load('pages_login/index', 'pages_login/v_login');
	}

	public function proseslogin()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$cek = $this->Auth_model->ceklogin($username, $password);
		$row = $cek->row();
		$total = $cek->num_rows();

		if ($total > 0) {
			$this->session->set_userdata(
				[
					'$Username' => $row->Username,
					'$Nama' => $row->Nama,
					'$Level' => $row->Level
				]
			);
			$this->session->set_flashdata('pesan', 'Login Berhasil');
			redirect('welcome', 'refresh');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth', 'refresh');
	}
}
