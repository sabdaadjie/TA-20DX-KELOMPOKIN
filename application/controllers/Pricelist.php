<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pricelist extends CI_Controller
{

	// Penjelasan
	// public function (Method)  index(Parameter)

	// parrent construct model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MPricelist');
	}

	// Tampil Data
	public function index()
	{
		$data = [
			'judul' => 'DATA PRICELIST',
			'subjudul' => 'List Data Pricelist',
			'datapricelist' => $this->MPricelist->tampilData()->result()
		];
		// $this->load->view('v_user', $data);
		$this->template->load('pages_admin/index', 'dt_pricelist/v_pricelist', $data);
	}

	// Detail Data
	public function detail($kb)
	{
		$data = [
			'judul' => 'DATA PRICELIST',
			'subjudul' => 'Detail Data Pricelist',
			'datapricelist' => $this->MPricelist->detailData($kb)->row()
		];
		$this->template->load('pages_admin/index', 'dt_pricelist/detail_pricelist', $data);
	}

	// Tambah Data
	public function add()
	{

		if (isset($_POST['simpan'])) {
			$data = [
				'Id_Pricelist' => $this->input->post('id_pricelist'),
				'Nama_Servis' => $this->input->post('nama_servis'),
				'Harga' => $this->input->post('harga'),
			];

			$this->MPricelist->addData($data);

			redirect('pricelist/add');
		}
		$data = [
			'judul' => 'DATA PRICELIST',
			'subjudul' => 'Tambah Data Pricelist'
		];
		$this->template->load('pages_admin/index', 'dt_pricelist/tambah_pricelist', $data);
	}

	// Edit Data
	public function edit($kb)
	{

		if (isset($_POST['ubah'])) {
			$data = [
				'Nama_Servis' => $this->input->post('nama_servis'),
				'Harga' => $this->input->post('harga'),
			];

			$this->MPricelist->editData($kb, $data);

			redirect('pricelist');
		}

		$data = [
			'judul' => 'DATA PRICELIST',
			'subjudul' => 'Edit Data Pricelist',
			'datapricelist' => $this->MPricelist->detailData($kb)->row()
		];
		$this->template->load('pages_admin/index', 'dt_pricelist/edit_pricelist', $data);
	}

	// Hapus Data
	public function hapus($kb)
	{
		$this->MPricelist->deleteData($kb);
		redirect('pricelist');
	}
}
