<?php

class Auth_model extends CI_Model
{

	// Model Tampil Data
	public function ceklogin($username, $password)
	{
		return $this->db->get_where('tbl_user', ['Username' => $username, 'Password' => md5($password)]);
	}
}
