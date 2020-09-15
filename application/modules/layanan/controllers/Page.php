<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function index()
	{
		$data['title']  = 'Beranda';
		$data['layout'] = 'index';
		$this->load->view('layout',$data);
	}

	public function layanan_web()
	{
		$data['title'] = 'Layanan Pembuatan Web';
		$data['layout'] = 'layanan_web';
		$this->load->view('layout',$data);
	}

}