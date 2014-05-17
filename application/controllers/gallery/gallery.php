<?php

class Gallery extends CI_Controller {
	public function index()
	{
		$data['title'] = "Galeri | Mon'Zbox";
		$this->load->view('templates/header', $data);
		$this->load->view('gallery/galleryView');
		$this->load->view('templates/footer');
	}
}