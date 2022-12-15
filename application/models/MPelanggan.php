<?php

class MPelanggan extends CI_Model
{

	// Model Tampil Data
	public function tampilData()
	{
		return $this->db->get('tbl_pelanggan');
	}

	// Model Detail Data
	public function detailData($kb)
	{
		return $this->db->get_where('tbl_pelanggan', ['Id_Pelanggan' => $kb]);
	}

	// Model Tambah Data
	public function addData($data)
	{
		return $this->db->insert('tbl_pelanggan', $data);
	}

	// Model Edit Data
	public function editData($kb, $data)
	{
		return $this->db->update('tbl_pelanggan', $data, ['Id_Pelanggan' => $kb]);
	}

	// Model Hapus Data
	public function deleteData($kb)
	{
		return $this->db->delete('tbl_pelanggan', ['Id_Pelanggan' => $kb]);
		redirect('tbl_pelanggan');
	}
}
