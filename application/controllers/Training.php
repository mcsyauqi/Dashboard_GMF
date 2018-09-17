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
		$data['pegawai'] = $this->Db_pegawai->getAll('pegawai');
		$data['training'] = $this->Db_training->getAll('training');		
		$this->template->load('static','training',$data);
	}

	public function training_super()
	{
		$data['training'] = $this->Db_training->getAll('training');
		$this->template->load('super_admin/static','super_admin/training_super',$data);
	}

	public function training_admin()
	{
		$data['pegawai'] = $this->Db_pegawai->getAll('pegawai');
		$data['training'] = $this->Db_training->getAll('training');
		$this->template->load('admin/static','admin/training_admin',$data);
	}

	public function edit_training()
	{
		$id = $this->uri->segment(3);
		$data['training'] = $this->Db_training->edit_training($id);
		$this->template->load('super_admin/static','super_admin/edit_training',$data);
	}

	public function update_training()
	{
		$data = array(
			'done_human' => $this->input->post('done_human'),
			'done_cas' => $this->input->post('done_cas'),
			'done_fts' => $this->input->post('done_fts'),
			'done_sms' => $this->input->post('done_sms'),
			'done_ewis' => $this->input->post('done_ewis'),
			'done_module' => $this->input->post('done_module'),
			'done_gqs' => $this->input->post('done_gqs'),
			'done_batk' => $this->input->post('done_batk'),
			'done_basic' => $this->input->post('done_basic'),
			'done_cont' => $this->input->post('done_cont'),
			'stat_typer1' => $this->input->post('stat_typer1'),
		);
		$id = $this->input->post('no_peg');

		$this->Db_training->update_training($data, $id);

		redirect (site_url('Training/training_super'));
	}
}