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
		$data['DataUser'] = $this->MSudi->GetData('tbl_user');
		$data['content'] = 'VUser';
		$this->load->view('welcome_message', $data);
	}

	public function VFormAddUser()
	{
		$data['content'] = 'VFormAddUser';
		$this->load->view('welcome_message', $data);

	}

	public function AddDataUser()
	{
		$add['id'] = $this->input->post('id');
		$add['username'] = $this->input->post('username');
		$add['password'] = $this->input->post('password');
		$add['fullname'] = $this->input->post('fullname');
		$add['hak_akses'] = $this->input->post('hak_akses');
		$this->MSudi->AddData('tbl_user', $add);
		redirect(site_url('Welcome/DataUser'));

	}

	public function VFormUpdateUser()
	{


		$data['content'] = 'VFormUpdateUser';
		$this->load->view('welcome_message', $data);

	}

	public function DataJenisMenu()
	{

		$data['DataJenisMenu'] = $this->MSudi->GetData('tbl_jenis_menu');
		$data['content'] = 'VJenisMenu';
		$this->load->view('welcome_message', $data);


	}
	public function VFormAddJenisMenu()
	{


		$data['content'] = 'VFormAddJenisMenu';
		$this->load->view('welcome_message', $data);

	}

	public function AddDataJenisMenu()
	{
	$add['id'] = $this->input->post('id');
	$add['nama_jenis'] = $this->input->post('nama_jenis');
	$this->MSudi->AddData('tbl_jenis_menu', $add);
	redirect(site_url('Welcome/DataJenisMenu'));

	}

	
	public function VFormUpdateJenisMenu()
	{
		$data['content'] = 'VFormUpdateJenisMenu';
		$this->load->view('welcome_message', $data);
	}


	public function DataMenu()
	{

		$join = "tbl_jenis_menu.id = tbl_menu.id_jenis_menu  ";
		$data['DataMenu'] = $this->MSudi->GetDataJoin('tbl_jenis_menu', 'tbl_menu', $join)->result();
		$data['content'] = 'VMenu';
		$this->load->view('welcome_message', $data);

	}

	public function VFormAddMenu()
	{

		$data['JenisMenu'] = $this->MSudi->GetData('tbl_jenis_menu');
		$data['Company'] = $this->MSudi->GetData('tbl_company');
		$data['content'] = 'VFormAddMenu';
		$this->load->view('welcome_message', $data);

	}

	public function AddDataMenu()
	{
		$add['id'] = $this->input->post('id');
		$add['nama_menu'] = $this->input->post('nama_menu');
		$add['harga_menu'] = $this->input->post('harga_menu');
		$add['deskripsi_menu'] = $this->input->post('deskripsi_menu');
		$add['id_jenis_menu'] = $this->input->post('id_jenis_menu');
		$add['id_company'] = $this->input->post('id_company');

		$config['upload_path'] = '././upload/menu';
		$config['allowed_types'] = 'gif|jpg|png|JPG';
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('userfile')) {
			$error = array('error' => $this->upload->display_errors());
			redirect(site_url('Welcome/VFormAddMenu'));
		} else {
			$data = array('upload_data' => $this->upload->data());
			$add['foto_menu'] = implode($this->upload->data());
			$filename = site_url('upload/') . 'menu/' . $add['foto_menu'];
			$replcate = str_replace("index.php/", "", $filename);
			$replcate = str_replace("\/", "/", $replcate);
			$add['foto_menu'] = $replcate;
		}
		$this->MSudi->AddData('tbl_menu', $add);
		redirect(site_url('Welcome/DataMenu'));

	}

	public function VFormUpdateMenu()
	{
		$data['content'] = 'VFormUpdateMenu';
		$this->load->view('welcome_message', $data);
	}

	public function DataPesanan()
	{
		$data['content'] = 'VPesanan';
		$this->load->view('welcome_message', $data);
	}

	public function Logout()
	{
		$data['username'] = $this->session->userdata('username');
		$this->load->library('session');
		$this->session->unset_userdata('Login');
		redirect(site_url('Login'));
	}
}
