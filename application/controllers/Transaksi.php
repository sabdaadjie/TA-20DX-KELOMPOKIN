<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{

	// Penjelasan
	// public function (Method)  index(Parameter)

	// parrent construct model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MTransaksi');
	}

	// Tampil Data
	public function index()
	{
		$data = [
			'judul' => 'DATA TRANSAKSI',
			'subjudul' => 'List Data Transaksi',
			'datatransaksi' => $this->MTransaksi->tampilJoinUser()->result(),
			'datapelanggan' => $this->MTransaksi->tampilJoinPelanggan()->result(),
		];
		// $this->load->view('v_user', $data);
		$this->template->load('pages_admin/index', 'dt_transaksi/v_transaksi', $data);
	}

	// Detail Data
	public function detail($kb)
	{
		$data = [
			'judul' => 'DATA TRANSAKSI',
			'subjudul' => 'Detail Data Transaksi',
			'datatransaksi' => $this->MTransaksi->detailData($kb)->row()
		];
		$this->template->load('pages_admin/index', 'dt_transaksi/detail_transaksi', $data);
	}

	// Tambah Data
	public function add()
	{

		if (isset($_POST['simpan'])) {
			$data = [
				'Id_Transaksi' => $this->input->post('id_transaksi'),
				'Id_User' => $this->input->post('id_user'),
				'Id_Pelanggan' => $this->input->post('id_pelanggan'),
				'Tanggal_Masuk' => $this->input->post('tanggal_masuk'),
				'Tipe' => $this->input->post('tipe'),
				'Model' => $this->input->post('model'),
				'Kelengkapan' => $this->input->post('kelengkapan'),
				'Kendala' => $this->input->post('kendala'),
			];

			$this->MTransaksi->addData($data);

			redirect('transaksi/add');
		}
		$data = [
			'judul' => 'DATA TRANSAKSI',
			'subjudul' => 'Tambah Data Transaksi',
			'datauser' => $this->MTransaksi->tampilUser()->result(),
			'datapelanggan' => $this->MTransaksi->tampilPelanggan()->result(),
		];
		$this->template->load('pages_admin/index', 'dt_transaksi/tambah_transaksi', $data);
	}

	// Edit Data
	public function edit($kb)
	{

		if (isset($_POST['ubah'])) {
			$data = [
				'Id_User' => $this->input->post('id_user'),
				'Id_Pelanggan' => $this->input->post('id_pelanggan'),
				'Tanggal_Masuk' => $this->input->post('tanggal_masuk'),
				'Tipe' => $this->input->post('tipe'),
				'Model' => $this->input->post('model'),
				'Kelengkapan' => $this->input->post('kelengkapan'),
				'Kendala' => $this->input->post('kendala'),
			];

			$this->MTransaksi->editData($kb, $data);

			redirect('transaksi');
		}

		$data = [
			'judul' => 'DATA TRANSAKSI',
			'subjudul' => 'Edit Data Transaksi',
			'datatransaksi' => $this->MTransaksi->detailData($kb)->row(),
			'datauser' => $this->MTransaksi->tampilUser()->result(),
			'datapelanggan' => $this->MTransaksi->tampilPelanggan()->result()
		];
		$this->template->load('pages_admin/index', 'dt_transaksi/edit_transaksi', $data);
	}

	// Hapus Data
	public function hapus($kb)
	{
		$this->MTransaksi->deleteData($kb);
		redirect('transaksi');
	}
}
