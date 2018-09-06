<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Training extends CI_Controller {

	function __construct() {
		parent:: __construct();
		$this->load->model('Db_pegawai');
		$this->load->model('Db_training');
	}
	public function index()
	{
		$this->template->load('static','training');
	}

	public function training_super()
	{
		$data['pegawai'] = $this->Db_pegawai->getAll('pegawai');
		$data['training'] = $this->Db_training->getAll('training');
		$this->template->load('super_admin/static','super_admin/training_super',$data);
	}

	public function training_admin()
	{
		$this->template->load('admin/static','admin/training_admin');
	}
}