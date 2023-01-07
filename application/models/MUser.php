<?php

class MUser extends CI_Model
{

	// Model Tampil Data
	public function tampilData()
	{
		return $this->db->get('tbl_user');
	}

	// Model Detail Data
	public function detailData($kb)
	{
		return $this->db->get_where('tbl_user', ['Id_User' => $kb]);
	}

	// Model Tambah Data
	public function addData($data)
	{
		return $this->db->insert('tbl_user', $data);
	}

	// Model Edit Data
	public function editData($kb, $data)
	{
		return $this->db->update('tbl_user', $data, ['Id_User' => $kb]);
	}

	// Model Hapus Data
	public function deleteData($kb)
	{
		return $this->db->delete('tbl_user', ['Id_User' => $kb]);
		redirect('tbl_user');
	}
}
