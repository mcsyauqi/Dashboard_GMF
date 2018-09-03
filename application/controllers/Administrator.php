<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {

	public function index()
	{
		$this->template->load('super_admin/static','super_admin/administrator');
	}

		public function Add_admin()
	{
		$this->template->load('super_admin/static','super_admin/add_admin');
	}

			public function Edit_admin()
	{
		$this->template->load('super_admin/static','super_admin/edit_admin');
	}

}

?>