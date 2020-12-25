<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('MSudi');
		$this->load->database();
	}
	public function index()
	{
		
		$data['DataJenis'] = $this->MSudi->GetData('tbl_jenis_menu');
		foreach($data['DataJenis'] as $index => $dataJenis){
			$dataMenu = $this->MSudi->GetDataJoinWhereMenu('tbl_menu','tbl_company','tbl_menu.id_company = tbl_company.id','id_jenis_menu',$dataJenis->id)->result();
			$data['DataJenis'][$index]->DataMenu = $dataMenu;
		}
		$data['content'] = 'VHome';
		$this->load->view('welcome_message', $data);
		
	}

	public function AddOrder()
	{
		$totalharga = 0;
		$listMenu = [];
		if(isset($_POST['qty']) && isset($_POST['id_menu'])){
			foreach($_POST['qty'] as $index1 => $qty){
				foreach($_POST['id_menu'] as $index2 => $idMenu){
					if($index1 == $index2 && $qty != 0){
						$menu = $this->MSudi->GetDataWhere('tbl_menu','id',$idMenu)->result();
						$totalHargamenu = $menu[0]->harga_menu * $qty;
						$totalharga = $totalharga + $totalHargamenu;
						$add['id_menu'] = $idMenu;
						$add['no_meja'] = $_POST['no_meja'];
						$add['qty'] = $qty;
						$add['total_harga_menu']  = $totalHargamenu;
						$add['total_harga'] = $totalharga;
						$add['status'] = 0;
						$add['tgl_order'] = date("Y-m-d H:i:s");

						$this->MSudi->AddData('tbl_order', $add);
						
						$obj = new stdClass();
						$obj->namaMenu = $menu[0]->nama_menu;
						$obj->qty = $qty;
						$obj->hargaSatuan = $menu[0]->harga_menu;
						$obj->totalHarga = $totalHargamenu;
						array_push($listMenu,$obj);
					}
				}
			}
		}
		$myObj = new stdClass();
		$myObj->totalharga = $totalharga;
		$myObj->status = "Belum Bayar";
		$myObj->noMeja = $_POST['no_meja'];
		$myObj->listMenu = $listMenu;

		$myJSON = json_encode($myObj);
		
		echo $myJSON;

	}

}
