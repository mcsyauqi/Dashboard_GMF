<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function index()
	{
		$this->template->load('static','pegawai');
	}

	public function pegawai_super()
	{
		$this->template->load('super_admin/static','super_admin/pegawai_super');
	}

}
