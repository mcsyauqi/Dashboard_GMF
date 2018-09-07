<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Db_user extends CI_Model{
	// public function __construct()
	// {
	// 	$this->load->database();
	// }
	// public function login()
	// {
	// 	$username = $this->input->post('username', TRUE);
	// 	$password = $thiss->input->post('password', TRUE);
	// 	$data = $this->db->query("SELECT * from admin where username = '$username' and password = '$password' LIMIT 1");
	// 	return $data->row();
	// }

	public function getAll($table) {
		
		return $this->db->get($table)->result();
	}
	
}