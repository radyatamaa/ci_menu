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
// Start Controller Data User 
	public function DataUser()
	{
		$data['username'] = $this->session->userdata('username');
	
		if ($this->uri->segment(4) == 'view') {
			$id = $this->uri->segment(3);
			$tampil = $this->MSudi->GetDataWhere('tbl_user', 'id', $id)->row();
			$data['detail']['id'] = $tampil->id;
			$data['detail']['username'] = $tampil->username;
			$data['detail']['password'] = $tampil->password;
			$data['detail']['fullname'] = $tampil->fullname;
			// $data['detail']['hak_akses'] = $tampil->hak_akses;
			$data['content'] = 'VFormUpdateUser';
		} else {
			// $join="tbl_staff.kd_staff = tbl_users.kd_staff AND tbl_pegawai.kd_pegawai = tbl_staff.kd_pegawai";
			// $data['DataUser']=$this->MSudi->GetData2Join('tbl_users','tbl_staff','tbl_pegawai', $join)->result();
			$data['DataUser'] = $this->MSudi->GetData('tbl_user');
			$data['content'] = 'VUser';
		}
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
		// $add['hak_akses'] = $this->input->post('hak_akses');
		$this->MSudi->AddData('tbl_user', $add);
		redirect(site_url('Welcome/DataUser'));

	}

	public function UpdateDataUser()
	{
		$id = $this->input->post('id');
		$update['username'] = $this->input->post('username');
		$update['password'] = $this->input->post('password');
		$update['fullname'] = $this->input->post('fullname');
		$this->MSudi->UpdateData('tbl_user', 'id', $id, $update);
		redirect(site_url('Welcome/DataUser'));

	}

// End Controller Data User


// Controller Data Jenis Menu
	public function DataJenisMenu()
	{
		if ($this->uri->segment(4) == 'view') {
			$id = $this->uri->segment(3);
			$tampil = $this->MSudi->GetDataWhere('tbl_jenis_menu', 'id', $id)->row();
			$data['detail']['id'] = $tampil->id;
			$data['detail']['nama_jenis'] = $tampil->nama_jenis;
			$data['content'] = 'VFormUpdateJenisMenu';
		} else {
			$data['DataJenisMenu'] = $this->MSudi->GetData('tbl_jenis_menu');
			$data['content'] = 'VJenisMenu';
		}
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
	public function UpdateDataJenisMenu()
	{
		$id = $this->input->post('id');
		$update['nama_jenis'] = $this->input->post('nama_jenis');
		$this->MSudi->UpdateData('tbl_jenis_menu', 'id', $id, $update);
		redirect(site_url('Welcome/DataJenisMenu'));
	}

// End Controller Data Jenis Menu

// Start Controller Data Menu
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
// End Controller Data Menu

// Start Controller Data Pesanan
	public function DataPesanan()
	{
		$data['content'] = 'VPesanan';
		$this->load->view('welcome_message', $data);
	}
// End Controller Data User	

// Start Controller Data Company
	public function DataCompany()
	{
		if ($this->uri->segment(4) == 'view') {
			$id = $this->uri->segment(3);
			$tampil = $this->MSudi->GetDataWhere('tbl_company', 'id', $id)->row();
			$data['detail']['id'] = $tampil->id;
			$data['detail']['nama_company'] = $tampil->nama_company;
			$data['content'] = 'VFormUpdateCompany';
		} else {
			$data['DataCompany'] = $this->MSudi->GetData('tbl_company');
			$data['content'] = 'VCompany';
		}
		$this->load->view('welcome_message', $data);
	}
	public function VFormAddCompany()
	{
		$data['content'] = 'VFormAddCompany';
		$this->load->view('welcome_message', $data);
	}

	public function AddDataCompany()
	{
	$add['id'] = $this->input->post('id');
	$add['nama_company'] = $this->input->post('nama_company');
	$this->MSudi->AddData('tbl_company', $add);
	redirect(site_url('Welcome/DataCompany'));
	}

	public function UpdateDataCompany()
	{
		$id = $this->input->post('id');
		$update['nama_company'] = $this->input->post('nama_company');
		$this->MSudi->UpdateData('tbl_company', 'id', $id, $update);
		redirect(site_url('Welcome/DataCompany'));
	}

	public function DeleteDataCompany()
	{
		// $data['username'] = $this->session->userdata('username');
		// $data['foto'] = $this->session->userdata('foto');
		$id = $this->input->post('id');

		foreach ($id as $id_id) {
		$this->MSudi->DeleteData('tbl_company', 'id', $id_id);
		}

		redirect(site_url('Welcome/DataCompany'));
	}


	// End Controller Data Company

	public function Logout()
	{
		$data['username'] = $this->session->userdata('username');
		$this->load->library('session');
		$this->session->unset_userdata('Login');
		redirect(site_url('Login'));
	}
}
