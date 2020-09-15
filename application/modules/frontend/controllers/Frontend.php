<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {

	public function index()
	{
		$data['title']  = 'Beranda';
		$data['layout'] = 'index';
		$this->load->view('layout',$data);
	}

}