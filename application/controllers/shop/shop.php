<?php

class Shop extends CI_Controller {
	public function index()
	{
		$data['title'] = "Mon'Z Shop | Mon'Zbox";
		$this->load->view('templates/header', $data);
		$this->load->view('shop/shopView');
		$this->load->view('templates/footer');
	}
}