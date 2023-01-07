<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	// parrent construct model
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('Level') == 'Administrator') {
			redirect('auth');
		}
	}

	public function index()
	{
		$data = [
			'judul' => "Dashboard",
			'subjudul' => "Dashboard"
		];
		$this->template->load('pages_admin/index', 'pages_admin/dashboard', $data);
	}
}
