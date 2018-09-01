<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Training extends CI_Controller {

	public function index()
	{
		$this->template->load('static','training');
	}

		public function training_super()
	{
		$this->template->load('super_admin/static','super_admin/training_super');
	}
}