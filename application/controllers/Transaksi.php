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
			'datapelanggan' => $this->MTransaksi->tampilJoinPelanggan()->result()
		];
		// $this->load->view('v_user', $data);
		$this->template->load('pages/index', 'dt_transaksi/v_transaksi', $data);
	}

	// Detail Data
	public function detail($kb)
	{
		$data = [
			'judul' => 'DATA TRANSAKSI',
			'subjudul' => 'Detail Data Transaksi',
			'datatransaksi' => $this->MTransaksi->detailData($kb)->row()
		];
		$this->template->load('pages/index', 'dt_transaksi/detail_transaksi', $data);
	}

	// Tambah Data
	public function add()
	{

		if (isset($_POST['simpan'])) {
			$data = [
				'Id_Transaksi' => $this->input->post('id_transaksi'),
				'Kode_Invoice' => $this->input->post('kode_invoice'),
				'Id_User' => $this->input->post('id_user'),
				'Id_pelanggan' => $this->input->post('id_pelanggan'),
				'Tanggal_Masuk' => $this->input->post('tanggal_masuk'),
				'Tipe' => $this->input->post('tipe'),
				'Model' => $this->input->post('model'),
				'Kelengkapan' => $this->input->post('kelengkapan'),
				'Kendala' => $this->input->post('kendala'),
				'Harga' => $this->input->post('harga'),
				'Garansi' => $this->input->post('garansi'),
				'Status_Transaksi' => $this->input->post('status_transaksi'),
				'Status' => $this->input->post('status'),
				'Tanggal_Keluar' => $this->input->post('tanggal_keluar'),
				'Konfirmasi' => $this->input->post('konfirmasi'),
			];

			$this->MTransaksi->addData($data);

			redirect('transaksi/add');
		}
		$data = [
			'judul' => 'DATA TRANSAKSI',
			'subjudul' => 'Tambah Data Transaksi',
			'datauser' => $this->MTransaksi->tampiluser()->result(),
			'datapelanggan' => $this->MTransaksi->tampilpelanggan()->result(),
		];
		$this->template->load('pages/index', 'dt_transaksi/tambah_transaksi', $data);
	}

	// Edit Data
	public function edit($kb)
	{

		if (isset($_POST['ubah'])) {
			$data = [
				'Kode_Invoice' => $this->input->post('kode_invoice'),
				'Id_User' => $this->input->post('id_user'),
				'Id_pelanggan' => $this->input->post('id_pelanggan'),
				'Tanggal_Masuk' => $this->input->post('tanggal_masuk'),
				'Tipe' => $this->input->post('tipe'),
				'Model' => $this->input->post('model'),
				'Kelengkapan' => $this->input->post('kelengkapan'),
				'Kendala' => $this->input->post('kendala'),
				'Harga' => $this->input->post('harga'),
				'Garansi' => $this->input->post('garansi'),
				'Status_Transaksi' => $this->input->post('status_transaksi'),
				'Status' => $this->input->post('status'),
				'Tanggal_Keluar' => $this->input->post('tanggal_keluar'),
				'Konfirmasi' => $this->input->post('konfirmasi'),
			];

			$this->MTransaksi->editData($kb, $data);

			redirect('transaksi');
		}

		$data = [
			'judul' => 'DATA TRANSAKSI',
			'subjudul' => 'Edit Data Transaksi',
			'datatransaksi' => $this->MTransaksi->detailData($kb)->row(),
			'datauser' => $this->MTransaksi->tampiluser()->result(),
			'datapelanggan' => $this->MTransaksi->tampilpelanggan()->result()
		];
		$this->template->load('pages/index', 'dt_transaksi/edit_transaksi', $data);
	}

	// Hapus Data
	public function hapus($kb)
	{
		$this->MTransaksi->deleteData($kb);
		redirect('transaksi');
	}
}
