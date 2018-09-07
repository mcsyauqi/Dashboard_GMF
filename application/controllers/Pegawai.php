<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	function __construct() {
		parent:: __construct();
		$this->load->model('Db_pegawai');
		$this->load->model('Db_training');

	}

	public function index()
	{
		$data['pegawai'] = $this->Db_pegawai->getAll('pegawai');
		$data['training'] = $this->Db_training->getAll('training');
		$this->template->load('static','pegawai',$data);
	}

	public function pegawai_super()
	{
		$data['pegawai'] = $this->Db_pegawai->getAll('pegawai');
		$this->template->load('super_admin/static','super_admin/pegawai_super',$data);
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
