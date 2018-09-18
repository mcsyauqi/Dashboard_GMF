<?php
$connect = mysqli_connect('localhost','root','','db_gmf');
defined('BASEPATH') OR exit('No direct script access allowed');
class Db_training extends CI_Model{
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
		
		return $this->db->select('*')
		->from('training')
		->join('pegawai', 'pegawai.no_peg=training.no_peg')
		->get();
	}

	public function edit_training($id){
		
		return $this->db->select('pegawai.no_peg, pegawai.nama_peg, training.done_human, training.done_cas, training.done_fts, training.done_sms, training.done_ewis, training.done_module, training.done_gqs, training.done_batk, training.done_basic, training.done_cont, training.stat_typer1')
		->from('pegawai')
		->join('training', 'pegawai.no_peg=training.no_peg')
		->where('pegawai.no_peg',$id)
		->get();
	}

	public function input_training($data) //input data baru
	{
		$this->db->insert('training', $data);
		return TRUE;
	}

	public function update_training($data,$id){
		$this->db->where('no_peg', $id)->update('training', $data);
	}

	public function update_due($id,$due){
		$this->db->where('no_peg', $id)->update('training', $due);
	}

	public function delete_training($id){
		$this->db->delete('training', $id);
	}
	
}