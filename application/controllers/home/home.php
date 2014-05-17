<?php

class Home extends CI_Controller {
	public function index()
	{
		$data['title'] = "Home | Mon'Zbox";
		$this->load->view('templates/header', $data);
		$this->load->view('home/homeView');
		$this->load->view('templates/footer');
	}
}