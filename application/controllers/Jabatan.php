<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jabatan extends CI_Controller
{

	// Penjelasan
	// public function (Method)  index(Parameter)

	// parrent construct model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MJabatan');
	}

	// Tampil Data
	public function index()
	{
		$data = [
			'judul' => 'DATA JABATAN',
			'subjudul' => 'List Data Jabatan',
			'datajabatan' => $this->MJabatan->tampilData()->result()
		];
		// $this->load->view('v_user', $data);
		$this->template->load('pages/index', 'dt_jabatan/v_jabatan', $data);
	}

	// Detail Data
	public function detail($kb)
	{
		$data = [
			'judul' => 'DATA JABATAN',
			'subjudul' => 'Detail Data Jabatan',
			'datajabatan' => $this->MJabatan->detailData($kb)->row()
		];
		$this->template->load('pages/index', 'dt_jabatan/detail_jabatan', $data);
	}

	// Tambah Data
	public function add()
	{

		if (isset($_POST['simpan'])) {
			$data = [
				'Id_Jabatan' => $this->input->post('id_jabatan'),
				'Nama_Jabatan' => $this->input->post('nama_jabatan'),
			];

			$this->MJabatan->addData($data);

			redirect('jabatan/add');
		}
		$data = [
			'judul' => 'DATA JABATAN',
			'subjudul' => 'Tambah Data Jabatan'
		];
		$this->template->load('pages/index', 'dt_jabatan/tambah_jabatan', $data);
	}

	// Edit Data
	public function edit($kb)
	{

		if (isset($_POST['ubah'])) {
			$data = [
				'Nama_jabatan' => $this->input->post('nama_jabatan'),
			];

			$this->MJabatan->editData($kb, $data);

			redirect('jabatan');
		}

		$data = [
			'judul' => 'DATA JABATAN',
			'subjudul' => 'Edit Data Jabatan',
			'datajabatan' => $this->MJabatan->detailData($kb)->row()
		];
		$this->template->load('pages/index', 'dt_jabatan/edit_jabatan', $data);
	}

	// Hapus Data
	public function hapus($kb)
	{
		$this->MJabatan->deleteData($kb);
		redirect('jabatan');
	}
}
