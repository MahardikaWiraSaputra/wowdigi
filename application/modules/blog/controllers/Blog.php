<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index()
	{
		$data['title']  = 'Blog';
		$data['layout'] = 'index';
		$this->load->view('layout',$data);
	}

	public function detail()
	{
		$data['title'] = 'Detail Post A';
		$data['layout'] = 'detail';
		$this->load->view('layout',$data);
	}

}