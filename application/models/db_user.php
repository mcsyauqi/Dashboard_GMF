<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Db_user extends CI_Model{
	# menampilkan daftar pegawai
	public function loadpegawai()
	{
		$this->db->select('pegawai.*');
		$this->db->from('pegawai');
		$query = $this->db->get();
		return $query->result();
	}
	# menampilkan daftar admin
	public function loadadmin()
	{
		$this->db->select('user.*');
		$this->db->select('pegawai.nama_peg');
		$this->db->from('user');
		$this->db->from('pegawai');
		$this->db->where('user.no_peg = pegawai.no_peg');
		$query = $this->db->get();
		return $query->result();
	}

	# mangambil data di tabel 'pagawai'
	public function loadpeg()
	{
		$this->db->select('*');
		$this->db->from('pegawai');
		$query = $this->db->get();
		return $query->result();
	}

	# ambil data admin 
	public function loadprofil($username)
	{
		$this->db->select('*');
		$this->db->select('user.tipe, user.username');
		$this->db->from('user');
		$this->db->from('pegawai');
		$this->db->where('pegawai.no_peg = user.no_peg');
		$this->db->where('user.username', $username);

		$query = $this->db->get();
		return $query->result();
	}

	# ambil data unit admin manager
	public function loadunitmanager($username)
	{
		$this->db->from('pegawai');
		$this->db->from('user');
		$this->db->where('user.no_peg = pegawai.no_peg');
		$this->db->where('user.username', $username);
		$query = $this->db->get();
		return $query->result();
	}

	# ambil data tipe dari admin 
	public function tipe($username)
	{
		$this->db->select('tipe');
		$this->db->from('user');
		$this->db->where('username', $username);
		$query = $this->db->get();
		return $query->result();
		//return $this->db->get_where('admin', array('username' => $username));
	}
#-------------------------------------------------
	#cek pegawai sudah ada/belum
	public function cekpegawai($datapegawainew)
	{
		$jumlah = $this->db->get_where('pegawai', $datapegawainew);
		return $jumlah->num_rows();
	}
	public function cekadmin($dataadminnew)
	{
		$jum = $this->db->get_where('user', $dataadminnew);
		return $jum->num_rows();
	}
	# mengambil data pegawai dari database untuk proses edit
	public function getpegawai($no_peg)
	{
		//return $this->db->get_where('pegawai', array('no_peg' => $no_peg));
		$this->db->select('*');
		$this->db->from('pegawai');
		$this->db->where('no_peg', $no_peg);
		return $this->db->get();		
	}
	# mengambil data pegawai dari database untuk proses edit
	public function getadmin($id_admin)
	{
		// return $this->db->get_where('admin', array('id_admin'=> $id_admin));
		$this->db->select('*');
		$this->db->from('user');
		$this->db->join('pegawai', 'pegawai.no_peg = user.no_peg');
		$this->db->where('id_admin', $id_admin);
		return $this->db->get();
	}

	#---------------------------------------------------------------------------
	public function findpegawai($cari)
	{
		//$cari = $this->input->post('search');
		
		$this->db->select('pegawai.*');
		$this->db->from('pegawai');
		$this->db->where('pegawai.nama_peg', $cari);
		$query = $this->db->get();
		return $query->result();
	}
}