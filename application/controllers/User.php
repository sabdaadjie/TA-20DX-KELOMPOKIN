<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	// Penjelasan
	// public function (Method)  index(Parameter)

	// parrent construct model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MUser');
	}

	// Tampil Data
	public function index()
	{
		$data = [
			'judul' => 'DATA USER',
			'subjudul' => 'List Data User',
			'datauser' => $this->MUser->tampilJoinJabatan()->result(),
		];
		// $this->load->view('v_user', $data);
		$this->template->load('pages/index', 'dt_user/v_user', $data);
	}

	// Detail Data
	public function detail($kb)
	{
		$data = [
			'judul' => 'DATA USER',
			'subjudul' => 'Detail Data User',
			'datauser' => $this->MUser->detailData($kb)->row()
		];
		$this->template->load('pages/index', 'dt_user/detail_user', $data);
	}

	// Tambah Data
	public function add()
	{

		if (isset($_POST['simpan'])) {
			$data = [
				'Id_User' => $this->input->post('id_user'),
				'UserName' => $this->input->post('username'),
				'Password' => $this->input->post('password'),
				'Id_Jabatan' => $this->input->post('id_jabatan'),
			];

			$this->MUser->addData($data);

			redirect('user/add');
		}
		$data = [
			'judul' => 'DATA USER',
			'subjudul' => 'Tambah Data User',
			'datajabatan' => $this->MUser->tampilJabatan()->result(),
		];
		$this->template->load('pages/index', 'dt_user/tambah_user', $data);
	}

	// Edit Data
	public function edit($kb)
	{

		if (isset($_POST['ubah'])) {
			$data = [
				'Username' => $this->input->post('username'),
				'Password' => $this->input->post('password'),
				'Id_Jabatan' => $this->input->post('id_jabatan'),
			];

			$this->MUser->editData($kb, $data);

			redirect('user');
		}

		$data = [
			'judul' => 'DATA USER',
			'subjudul' => 'Edit Data User',
			'datauser' => $this->MUser->detailData($kb)->row(),
			'datajabatan' => $this->MUser->tampilJabatan()->result()
		];
		$this->template->load('pages/index', 'dt_user/edit_user', $data);
	}

	// Hapus Data
	public function hapus($kb)
	{
		$this->MUser->deleteData($kb);
		redirect('user');
	}
}
