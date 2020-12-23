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
		// if ($this->session->userdata('Login')) {
		// 	$data['nama'] = $this->session->userdata('nama');
		// 	$data['level'] = $this->session->userdata('level');

		$data['DataJenis'] = $this->MSudi->GetData('tbl_jenis_menu');
		$data['DataMenu'] = $this->MSudi->GetDataJoinWhereMenu('tbl_menu','tbl_company','tbl_menu.id_company = tbl_company.id','id_jenis_menu','1')->result();
		$data['DataMenuNonCoffe'] = $this->MSudi->GetDataJoinWhereMenu('tbl_menu','tbl_company','tbl_company.id = tbl_menu.id_company','id_jenis_menu','2')->result();
		$data['content'] = 'VHome';
		$this->load->view('welcome_message', $data);
		// } else {
		// 	redirect(site_url('Login'));
		// }
	}

	public function AddOrder()
	{
		$totalharga = 0;
		if(isset($_POST['qty']) && isset($_POST['id_menu'])){
			foreach($_POST['qty'] as $index1 => $qty){
				foreach($_POST['id_menu'] as $index2 => $idMenu){
					if($index1 == $index2){
						$menu = $this->MSudi->GetDataWhere('tbl_menu','id',$idMenu)->result();
						$totalHargamenu = $menu[0]->harga_menu * $qty;
						$totalharga = $totalharga + $totalHargamenu;
						$add['no_meja'] = $_POST['no_meja'];
						$add['qty'] = $qty;
						$add['total_harga_menu']  = $totalHargamenu;
						$add['total_harga'] = $totalharga;
						$add['status'] = 0;
						$add['tgl_order'] = date("Y-m-d H:i:s");
					
		
						 $this->MSudi->AddData('tbl_order', $add);
					}
				}
			}
		}
		redirect(site_url('Welcome'));
	}

}
