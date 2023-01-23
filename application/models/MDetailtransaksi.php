<?php

class MDetailtransaksi extends CI_Model
{

	// Model Tampil Data
	public function tampilData()
	{
		return $this->db->get('tbl_detailtransaksi');
	}

	// Model Detail Data
	public function detailData($kb)
	{
		return $this->db->get_where('tbl_detailtransaksi', ['Id_Detailtrans' => $kb]);
	}

	// Model Tambah Data
	public function addData($data)
	{
		return $this->db->insert('tbl_detailtransaksi', $data);
	}

	// Model Edit Data
	public function editData($kb, $data)
	{
		return $this->db->update('tbl_detailtransaksi', $data, ['Id_Detailtrans' => $kb]);
	}

	// Model Hapus Data
	public function deleteData($kb)
	{
		return $this->db->delete('tbl_detailtransaksi', ['Id_Detailtrans' => $kb]);
		redirect('tbl_detailtransaksi');
	}

	// Tampil Join Table ID_User tbl transaksi dengan ID_User tbl user
	public function tampilJoinTransaksi()
	{
		$this->db->select('*');
		$this->db->from('tbl_detailtransaksi');
		$this->db->join('tbl_transaksi', 'tbl_detailtransaksi.Id_Transaksi = tbl_transaksi.Id_Transaksi', 'left');
		$query = $this->db->get();

		return $query;
	}

	// Tampil Transaksi
	public function tampilTransaksi()
	{
		return $this->db->get('tbl_transaksi');
	}

	// Tampil Data Cetak Laporan
	public function tampilDetailtransaksi()
	{
		$this->db->select('Id_Detailtrans,Kode_Invoice,Nama,No_Wa,Alamat,Tipe,Model,Kelengkapan,Kendala,Garansi,Harga,Status_Transaksi,Status_Servis,Tanggal_Masuk,Tanggal_Keluar');
		$this->db->from('tbl_transaksi');
		$this->db->join('tbl_detailtransaksi', 'tbl_transaksi.Id_Transaksi = tbl_detailtransaksi.Id_Transaksi');
		$this->db->join(
			'tbl_pelanggan',
			'tbl_transaksi.Id_Pelanggan = tbl_pelanggan.Id_Pelanggan'
		);
		$query = $this->db->get();

		return $query;
	}

	// Tampil Data Cetak Nota
	public function tampilDetailnota($kb)
	{
		$this->db->select('*');
		$this->db->join('tbl_detailtransaksi', 'tbl_transaksi.Id_Transaksi = tbl_detailtransaksi.Id_Transaksi');
		$this->db->join(
			'tbl_pelanggan',
			'tbl_transaksi.Id_Pelanggan = tbl_pelanggan.Id_Pelanggan'
		);
		return $this->db->get_where('tbl_transaksi', ['tbl_transaksi.Id_Transaksi' => $kb]);
	}
}
