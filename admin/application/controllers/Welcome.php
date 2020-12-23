<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('MSudi');
	}
	public function index()
	{
		if ($this->session->userdata('Login')) {
			$data['username'] = $this->session->userdata('username');
			$data['content'] = 'VPesanan';
			$this->load->view('welcome_message', $data);
		} else {
			redirect(site_url('Login'));
		}
	}

	public function DataUser()
	{
		// if ($this->session->userdata('Login')) {
		// 	$data['nama'] = $this->session->userdata('nama');
		// 	$data['level'] = $this->session->userdata('level');
		$data['DataUser'] = $this->MSudi->GetData('tbl_user');
		$data['content'] = 'VUser';
		$this->load->view('welcome_message', $data);
		// } else {
		// 	redirect(site_url('Login'));
		// }
	}

	public function VFormAddUser()
	{
		// if ($this->session->userdata('Login')) {
		// 	$data['nama'] = $this->session->userdata('nama');
		// 	$data['level'] = $this->session->userdata('level');

		$data['content'] = 'VFormAddUser';
		$this->load->view('welcome_message', $data);
		// } else {
		// 	redirect(site_url('Login'));
		// }
	}

	public function VFormUpdateUser()
	{
		// if ($this->session->userdata('Login')) {
		// 	$data['nama'] = $this->session->userdata('nama');
		// 	$data['level'] = $this->session->userdata('level');

		$data['content'] = 'VFormUpdateUser';
		$this->load->view('welcome_message', $data);
		// } else {
		// 	redirect(site_url('Login'));
		// }
	}

	public function DataJenisMenu()
	{
		// if ($this->session->userdata('Login')) {
		// 	$data['nama'] = $this->session->userdata('nama');
		// 	$data['level'] = $this->session->userdata('level');
		$data['DataJenisMenu'] = $this->MSudi->GetData('tbl_jenis_menu');
		$data['content'] = 'VJenisMenu';
		$this->load->view('welcome_message', $data);

		// $data['content'] = 'VJenisMenu';
		// $this->load->view('welcome_message', $data);
		// } else {
		// 	redirect(site_url('Login'));
		// }
	}
	public function VFormAddJenisMenu()
	{
		// if ($this->session->userdata('Login')) {
		// 	$data['nama'] = $this->session->userdata('nama');
		// 	$data['level'] = $this->session->userdata('level');

		$data['content'] = 'VFormAddJenisMenu';
		$this->load->view('welcome_message', $data);
		// } else {
		// 	redirect(site_url('Login'));
		// }
	}

	public function VFormUpdateJenisMenu()
	{
		// if ($this->session->userdata('Login')) {
		// 	$data['nama'] = $this->session->userdata('nama');
		// 	$data['level'] = $this->session->userdata('level');

		$data['content'] = 'VFormUpdateJenisMenu';
		$this->load->view('welcome_message', $data);
		// } else {
		// 	redirect(site_url('Login'));
		// }
	}


	public function DataMenu()
	{
		// if ($this->session->userdata('Login')) {
		// 	$data['nama'] = $this->session->userdata('nama');
		// 	$data['level'] = $this->session->userdata('level');
		$join = "tbl_jenis_menu.id_jenis = tbl_menu.kd_jenis_menu  ";
		$data['DataMenu'] = $this->MSudi->GetDataJoin('tbl_jenis_menu', 'tbl_menu', $join)->result();
		$data['content'] = 'VMenu';
		$this->load->view('welcome_message', $data);
		// } else {
		// 	redirect(site_url('Login'));
		// }
	}

	public function VFormAddMenu()
	{
		// if ($this->session->userdata('Login')) {
		// 	$data['nama'] = $this->session->userdata('nama');
		// 	$data['level'] = $this->session->userdata('level');

		$data['content'] = 'VFormAddMenu';
		$this->load->view('welcome_message', $data);
		// } else {
		// 	redirect(site_url('Login'));
		// }
	}

	public function VFormUpdateMenu()
	{
		// if ($this->session->userdata('Login')) {
		// 	$data['nama'] = $this->session->userdata('nama');
		// 	$data['level'] = $this->session->userdata('level');

		$data['content'] = 'VFormUpdateMenu';
		$this->load->view('welcome_message', $data);
		// } else {
		// 	redirect(site_url('Login'));
		// }
	}

	public function DataPesanan()
	{
		// if ($this->session->userdata('Login')) {
		// 	$data['nama'] = $this->session->userdata('nama');
		// 	$data['level'] = $this->session->userdata('level');

		$data['content'] = 'VPesanan';
		$this->load->view('welcome_message', $data);
		// } else {
		// 	redirect(site_url('Login'));
		// }
	}

	public function Logout()
	{
		$data['username'] = $this->session->userdata('username');
		$this->load->library('session');
		$this->session->unset_userdata('Login');
		redirect(site_url('Login'));
	}
}
