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

	public function pegawai_admin()
	{
		$this->template->load('admin/static','admin/pegawai_admin');
	}

	public function add_pegawai()
	{
		$this->template->load('super_admin/static','super_admin/add_pegawai');
	}

		public function edit_pegawai()
	{
		$this->template->load('super_admin/static','super_admin/edit_pegawai');
	}


}

?>
