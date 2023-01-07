<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggan extends CI_Controller
{

	// Penjelasan
	// public function (Method)  index(Parameter)

	// parrent construct model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MPelanggan');
	}

	// Tampil Data
	public function index()
	{
		$data = [
			'judul' => 'DATA PELANGGAN',
			'subjudul' => 'List Data Pelanggan',
			'datapelanggan' => $this->MPelanggan->tampilData()->result(),
		];
		// $this->load->view('v_user', $data);
		$this->template->load('pages_admin/index', 'dt_pelanggan/v_pelanggan', $data);
	}

	// Detail Data
	public function detail($kb)
	{
		$data = [
			'judul' => 'DATA PELANGGAN',
			'subjudul' => 'Detail Data Pelanggan',
			'datapelanggan' => $this->MPelanggan->detailData($kb)->row()
		];
		$this->template->load('pages_admin/index', 'dt_pelanggan/detail_pelanggan', $data);
	}

	// Tambah Data
	public function add()
	{

		if (isset($_POST['simpan'])) {
			$data = [
				'Id_Pelanggan' => $this->input->post('id_pelanggan'),
				'Nama_Pelanggan' => $this->input->post('nama_pelanggan'),
				'Nama' => $this->input->post('nama'),
				'No_Wa' => $this->input->post('no_wa'),
				'Alamat' => $this->input->post('alamat'),
			];

			$this->MPelanggan->addData($data);

			redirect('pelanggan/add');
		}
		$data = [
			'judul' => 'DATA PELANGGAN',
			'subjudul' => 'Tambah Data Pelanggan'
		];
		$this->template->load('pages_admin/index', 'dt_pelanggan/tambah_pelanggan', $data);
	}

	// Edit Data
	public function edit($kb)
	{

		if (isset($_POST['ubah'])) {
			$data = [
				'Nama_Pelanggan' => $this->input->post('nama_pelanggan'),
				'Nama' => $this->input->post('nama'),
				'No_Wa' => $this->input->post('no_wa'),
				'Alamat' => $this->input->post('alamat'),
			];

			$this->MPelanggan->editData($kb, $data);

			redirect('pelanggan');
		}

		$data = [
			'judul' => 'DATA PELANGGAN',
			'subjudul' => 'Edit Data Pelanggan',
			'datapelanggan' => $this->MPelanggan->detailData($kb)->row()
		];
		$this->template->load('pages_admin/index', 'dt_pelanggan/edit_pelanggan', $data);
	}

	// Hapus Data
	public function hapus($kb)
	{
		$this->MPelanggan->deleteData($kb);
		redirect('pelanggan');
	}
}
