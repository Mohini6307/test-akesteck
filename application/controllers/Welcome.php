<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('MenuItems');
	}

	public function index()
	{
		$this->load->view('layout/header.php');
		$this->load->view('common/index.php');
		$this->load->view('layout/footer.php');
	}
	public function navbar()
	{
		$data['menu'] = $this->MenuItems->getItems();
		$html = $this->load->view('layout/navbar.php', $data, true);
		$response['html'] = $html;
		echo json_encode($response);
	}
	public function subItem($id=''){
		$data['submenu'] = $this->MenuItems->getsubItems($id);
		$html = $this->load->view('layout/nextList.php', $data, true);
		$response['html'] = $html;
		echo json_encode($response);
	}
}
