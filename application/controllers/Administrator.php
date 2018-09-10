<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {

	function __construct() {
		parent:: __construct();
		$this->load->model('Db_user');
		$this->load->model('Db_admin');
	}
	public function index()
	{
		$data['user'] = $this->Db_user->getAll();
		$this->template->load('super_admin/static','super_admin/administrator', $data);
	}

	public function Add_admin()
	{
		$data['user'] = $this->Db_user->getAll('user');
		$this->template->load('super_admin/static','super_admin/add_admin', $data);
	}

	public function Edit_admin()
	{
		$data['user'] = $this->Db_user->getAll('user');
		$this->template->load('super_admin/static','super_admin/edit_admin', $data);
	}

	public function input_admin()
	{
		$data = array(
			'no_peg' => $this->input->post('no_peg'),
			'tipe' => $this->input->post('tipe'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
		);

		$this->Db_admin->input_admin($data);

		redirect (site_url('Administrator'));
	}

}

?>