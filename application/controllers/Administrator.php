<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {

	function __construct() {
		parent:: __construct();
		$this->load->model('Db_user');
	}
	public function index()
	{
		$data['user'] = $this->Db_user->getAll('user');
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

}

?>