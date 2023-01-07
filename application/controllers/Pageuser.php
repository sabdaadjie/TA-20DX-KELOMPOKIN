<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pageuser extends CI_Controller
{

	public function index()
	{
		$this->template->load('pages_user/index', 'pages_user/index');
	}
}
