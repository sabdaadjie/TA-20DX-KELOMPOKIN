<?php

class MJabatan extends CI_Model
{

	// Model Tampil Data
	public function tampilData()
	{
		return $this->db->get('tbl_jabatan');
	}

	// Model Detail Data
	public function detailData($kb)
	{
		return $this->db->get_where('tbl_jabatan', ['Id_Jabatan' => $kb]);
	}

	// Model Tambah Data
	public function addData($data)
	{
		return $this->db->insert('tbl_jabatan', $data);
	}

	// Model Edit Data
	public function editData($kb, $data)
	{
		return $this->db->update('tbl_jabatan', $data, ['Id_Jabatan' => $kb]);
	}

	// Model Hapus Data
	public function deleteData($kb)
	{
		return $this->db->delete('tbl_jabatan', ['Id_Jabatan' => $kb]);
		redirect('tbl_jabatan');
	}
}
