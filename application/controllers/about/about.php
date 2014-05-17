<?php

class About extends CI_Controller {
	public function index()
	{
		$data['title'] = "Tentang Mon'Zbox | Mon'Zbox";
		$this->load->view('templates/header', $data);
		$this->load->view('about/aboutView');
		$this->load->view('templates/footer');
	}
}