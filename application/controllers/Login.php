<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
	
	function __construct() {
		parent:: __construct();
		$this->load->model('Db_login');
	
	}

	public function index()
	{
		if ($this->session->userdata('isLogin')==TRUE) { //ngecek udah login belum, kalau sudah kembali ke halaman admin

				if ($_SESSION['tipe']=='super_admin') {
					redirect('Dashboard_super');
				}

				elseif ($_SESSION['tipe']=='admin'){
					redirect('Dashboard_admin');
				}
			
		} else {
				$this->load->view('login'); 
		} 
	}

	function do_login() {
		include 'Koneksi.php';
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$cek = $this->Db_login->cek_user($username, $password);
		if (count($cek) > 0 ) { 
			$sql = mysqli_query($connect,"SELECT * from user where username = '$username' and password = '$password' ");
			while ($kolom = mysqli_fetch_array($sql)) {

			$cek_type = $this->db->get_where('user', array('username'=> $username,'password'=>$password));
			foreach ($cek_type->result() as $cek) {
				if ($cek->tipe=='super_admin') {

					$this->session->set_userdata(array(
					'isLogin' => TRUE, //set data telah login atau belum
					'username' => $username, //set session username
					'password' => $password,
					'tipe' => $cek->tipe,
					'no_peg' => $cek->no_peg,
					//'username' => $cek->username, //set sessiom password
				/*	'nama' => $cek->nama,
					'email' => $cek->email,
					'hp' => $cek->hp,
					'level' => $cek->level,*/

					));

					redirect('Dashboard_super');
				}

				elseif ($cek->tipe=='admin'){
					$this->session->set_userdata(array(
					'isLogin' => TRUE, //set data telah login atau belum
					'username' => $username, //set session username
					'password' => $password,
					'tipe' => $cek->tipe,
					'no_peg' => $cek->no_peg,
					//'username' => $cek->username, //set sessiom password
					/*'nama' => $cek->nama,
					'email' => $cek->email,
					'hp' => $cek->hp,
					'level' => $cek->level,*/

					));

					redirect('Dashboard_admin');
				}	
		
			  }	
		  }		
		}
		else {
			$this->session->set_flashdata('gagallogin','Maaf, Username atau Password yang anda masukkan salah');
			redirect('Login');
			/*$this->load->view('login');*/
		}

	}

	}