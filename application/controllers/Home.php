<?php

/**
* 
*/
class Home extends CI_Controller
{
	public function index($nama = "World")
	{
		$data['judul'] = 'Home';
		$data['nama'] = $nama;
		$this->load->view('templates/header',$data);
		$this->load->view('index',$data);
		$this->load->view('templates/footer');
	}
}