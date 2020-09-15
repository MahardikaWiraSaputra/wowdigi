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
		$data['layout'] = 'layanan/web';
		$this->load->view('layout',$data);
	}

	public function harga()
	{
		$data['title'] = 'Layanan Pembuatan Web';
		$data['layout'] = 'harga/index';
		$this->load->view('layout',$data);
	}

	public function testimoni()
	{
		$data['title'] = 'Testimoni';
		$data['layout'] = 'testimoni/index';
		$this->load->view('layout',$data);
	}

}