<?php

class MTransaksi extends CI_Model
{

	// Model Tampil Data
	public function tampilData()
	{
		return $this->db->get('tbl_transaksi');
	}

	// Model Detail Data
	public function detailData($kb)
	{
		return $this->db->get_where('tbl_transaksi', ['Id_Transaksi' => $kb]);
	}

	// Model Tambah Data
	public function addData($data)
	{
		return $this->db->insert('tbl_transaksi', $data);
	}

	// Model Edit Data
	public function editData($kb, $data)
	{
		return $this->db->update('tbl_transaksi', $data, ['Id_Transaksi' => $kb]);
	}

	// Model Hapus Data
	public function deleteData($kb)
	{
		return $this->db->delete('tbl_transaksi', ['Id_Transaksi' => $kb]);
		redirect('tbl_transaksi');
	}

	// Tampil Join Table ID_User tbl transaksi dengan ID_User tbl user
	public function tampilJoinUser()
	{
		$this->db->select('*');
		$this->db->from('tbl_transaksi');
		$this->db->join('tbl_user', 'tbl_transaksi.Id_User = tbl_user.Id_User', 'left');
		$query = $this->db->get();

		return $query;
	}

	// Tampil User
	public function tampilUser()
	{
		return $this->db->get('tbl_user');
	}

	// Tampil Join Table ID_Pelanggan tbl transaksi dengan ID_Pelanggan tbl Pelanggan
	public function tampilJoinPelanggan()
	{
		$this->db->select('*');
		$this->db->from('tbl_transaksi');
		$this->db->join('tbl_pelanggan', 'tbl_transaksi.Id_Pelanggan = tbl_pelanggan.Id_Pelanggan', 'left');
		$query = $this->db->get();

		return $query;
	}

	// Tampil Pelanggan
	public function tampilPelanggan()
	{
		return $this->db->get('tbl_pelanggan');
	}
}
