<?php

class Order extends CI_Controller {
	public function index()
	{
		$data['title'] = "Pemesanan | Mon'Zbox";
		$this->load->view('templates/header', $data);
		$this->load->view('order/orderView');
		$this->load->view('templates/footer');
	}
}