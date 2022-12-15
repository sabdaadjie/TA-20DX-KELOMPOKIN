<?php

class MPricelist extends CI_Model
{

	// Model Tampil Data
	public function tampilData()
	{
		return $this->db->get('tbl_pricelist');
	}

	// Model Detail Data
	public function detailData($kb)
	{
		return $this->db->get_where('tbl_pricelist', ['Id_Pricelist' => $kb]);
	}

	// Model Tambah Data
	public function addData($data)
	{
		return $this->db->insert('tbl_pricelist', $data);
	}

	// Model Edit Data
	public function editData($kb, $data)
	{
		return $this->db->update('tbl_pricelist', $data, ['Id_Pricelist' => $kb]);
	}

	// Model Hapus Data
	public function deleteData($kb)
	{
		return $this->db->delete('tbl_pricelist', ['Id_Pricelist' => $kb]);
		redirect('tbl_pricelist');
	}
}
