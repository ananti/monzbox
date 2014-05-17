<?php

class Menu extends CI_Controller {
	public function index()
	{
		$data['title'] = "Menu | Mon'Zbox";
		$this->load->view('templates/header', $data);
		$this->load->view('menu/menuView');
		$this->load->view('templates/footer');
	}
}