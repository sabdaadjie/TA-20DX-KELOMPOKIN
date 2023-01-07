<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detailtransaksi extends CI_Controller
{

	// Penjelasan
	// public function (Method)  index(Parameter)

	// parrent construct model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MDetailtransaksi');
	}

	// Tampil Data
	public function index()
	{
		$data = [
			'judul' => 'DATA DETAIL TRANSAKSI',
			'subjudul' => 'List Data Detail Transaksi',
			'datadetailtransaksi' => $this->MDetailtransaksi->tampilJoinTransaksi()->result(),
		];
		// $this->load->view('v_user', $data);
		$this->template->load('pages_admin/index', 'dt_detailtransaksi/v_detailtransaksi', $data);
	}

	// Detail Data
	public function detail($kb)
	{
		$data = [
			'judul' => 'DATA DETAIL TRANSAKSI',
			'subjudul' => 'Detail Data Transaksi',
			'datadetailtransaksi' => $this->MDetailtransaksi->detailData($kb)->row()
		];
		$this->template->load('pages_admin/index', 'dt_detailtransaksi/detail_transaksi', $data);
	}

	// Tambah Data
	public function add()
	{

		if (isset($_POST['simpan'])) {
			$data = [
				'Id_Detailtrans' => $this->input->post('id_detailtrans'),
				'Id_Transaksi' => $this->input->post('id_transaksi'),
				'Kode_Invoice' => $this->input->post('kode_invoice'),
				'Harga' => $this->input->post('harga'),
				'Garansi' => $this->input->post('garansi'),
				'Status_Transaksi' => $this->input->post('status_transaksi'),
				'Status_Servis' => $this->input->post('status_servis'),
				'Tanggal_Keluar' => $this->input->post('tanggal_keluar'),
				'Konfirmasi' => $this->input->post('konfirmasi'),
			];

			$this->MDetailtransaksi->addData($data);

			redirect('detailtransaksi/add');
		}
		$data = [
			'judul' => 'DATA DETAIL TRANSAKSI',
			'subjudul' => 'Tambah Data Detail Transaksi',
			'datatransaksi' => $this->MDetailtransaksi->tampilTransaksi()->result(),
		];
		$this->template->load('pages_admin/index', 'dt_detailtransaksi/tambah_detailtransaksi', $data);
	}

	// Edit Data
	public function edit($kb)
	{

		if (isset($_POST['ubah'])) {
			$data = [
				'Id_Transaksi' => $this->input->post('id_transaksi'),
				'Harga' => $this->input->post('harga'),
				'Garansi' => $this->input->post('garansi'),
				'Status_Transaksi' => $this->input->post('status_transaksi'),
				'Status_Servis' => $this->input->post('status_servis'),
				'Tanggal_Keluar' => $this->input->post('tanggal_keluar'),
				'Konfirmasi' => $this->input->post('konfirmasi'),
			];

			$this->MDetailtransaksi->editData($kb, $data);

			redirect('detailtransaksi');
		}

		$data = [
			'judul' => 'DATA DETAIL TRANSAKSI',
			'subjudul' => 'Edit Data Detail Transaksi',
			'datadetailtransaksi' => $this->MDetailtransaksi->detailData($kb)->row(),
			'datatransaksi' => $this->MDetailtransaksi->tampilTransaksi()->result()
		];
		$this->template->load('pages_admin/index', 'dt_detailtransaksi/edit_detailtransaksi', $data);
	}

	// Hapus Data
	public function hapus($kb)
	{
		$this->MDetailtransaksi->deleteData($kb);
		redirect('detailtransaksi');
	}
}
