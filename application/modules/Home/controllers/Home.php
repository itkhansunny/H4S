<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->model('Home_model','home');
		$this->load->model('Library/Library_model','library');
	}

	//Return home page view
	public function index()
	{
		
		$this->load->view('home');
	}
}
