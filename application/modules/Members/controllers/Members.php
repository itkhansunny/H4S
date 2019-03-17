<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Members extends CI_Controller {
	
		public function __construct()
		{
			parent::__construct();
			//Load Dependencies
	
		}
	
		// List all your items
		public function index( $offset = 0 )
		{
		
		}
	
		// Add a new item
		public function add()
		{
			$this->load->view('members_add');
		}

		// Add a new item
		public function store()
		{
			$this->form_validation->set_rules('title', 'Title', 'required');
		}
	
		//Update one item
		public function update( $id = NULL )
		{
	
		}
	
		//Delete one item
		public function delete( $id = NULL )
		{
	
		}
}
