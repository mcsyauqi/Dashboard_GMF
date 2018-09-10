<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Db_admin extends CI_Model{

	public function input_admin($data) //input data baru
	{
		$this->db->insert('user', $data);
		return TRUE;
	}
	
}