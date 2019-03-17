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
			$this->form_validation->set_rules('name-bn','Bangla Name','trim|required|min_length[3]');
			$this->form_validation->set_rules('name-en','English Name','trim|required|min_length[3]');
			$this->form_validation->set_rules('fname','Father\'s Name','trim|required|min_length[3]');
			$this->form_validation->set_rules('mname','Mother\'s Name','trim|required|min_length[3]');
			$this->form_validation->set_rules('mobile','Mobile number','trim|required|min_length[3]');
			$this->form_validation->set_rules('fbid','Facebook ID','trim|required|min_length[3]');
			$this->form_validation->set_rules('email','Email','trim|required|min_length[3]|valid_email');
			$this->form_validation->set_rules('bgroup','Blood Group','trim|required');
			$this->form_validation->set_rules('dob','Date of Birth','trim|required|min_length[3]');
			$this->form_validation->set_rules('gender','Gender','trim|required');
			$this->form_validation->set_rules('religion','Religion','trim|required|min_length[3]');
			$this->form_validation->set_rules('occupation','Occupation Name','trim|required|min_length[3]');
			$this->form_validation->set_rules('institute','Institute Name','trim|required|min_length[3]');
			$this->form_validation->set_rules('eduquali','Education Qualification','trim|required|min_length[3]');
			$this->form_validation->set_rules('nidno','National ID Card Number','trim|required|min_length[3]|numeric');
			$this->form_validation->set_rules('per-village','Permanent village', 'trim|required|min_length[3]');
			$this->form_validation->set_rules('per-poffice','Permanent post office', 'trim|required|min_length[3]');
			$this->form_validation->set_rules('per-thana','Permanent thana', 'trim|required|min_length[3]');
			$this->form_validation->set_rules('per-upzilla','Permanent upzilla', 'trim|required|min_length[3]');
			$this->form_validation->set_rules('per-zilla','Permanent zilla', 'trim|required|min_length[3]');
			$this->form_validation->set_rules('per-division','Permanent division', 'trim|required|min_length[3]');
			$this->form_validation->set_rules('pre-village','Present village', 'trim|required|min_length[3]');
			$this->form_validation->set_rules('pre-poffice','Present post office', 'trim|required|min_length[3]');
			$this->form_validation->set_rules('pre-thana','Present thana', 'trim|required|min_length[3]');
			$this->form_validation->set_rules('pre-upzilla','Present upzilla', 'trim|required|min_length[3]');
			$this->form_validation->set_rules('pre-zilla','Present zilla', 'trim|required|min_length[3]');
			$this->form_validation->set_rules('pre-division','Present division', 'trim|required|min_length[3]');
			$this->form_validation->set_rules('password','Password','trim|required|min_length[3]');
			$this->form_validation->set_rules('confirm-password','Confirm password','trim|required|min_length[3]|matches[password]');
			
			if ($this->form_validation->run()==FALSE) {
				$data['msg'] = 'Something may wrong';
				$this->load->view('members_add',$data);
			}
			else {
					// if ($this->student_model->add_student_insert()){
					// 	#File Upload
					// 	$id = $this->db->insert_id();
					// 	#Generate Student ID
					// 	$stid=$this->student_model->get_student_id($id);
					// 	$year=date('y');
					// 	$sid=$year.$stid;
					// 	mkdir("uploads/student/$sid",0775);
					// 	#Update Student ID
					// 	if($this->student_model->update_sid($id,$sid)){
					// 		#Upload File To Student/**ID** Folder 
					// 		$config['upload_path'] = './uploads/student/'.$sid;
					// 		$config['allowed_types'] = 'gif|jpg|png';
					// 		$config['max_size']	= '2024000';
					// 		$new_name = date('dmY').time();
					// 		$config['file_name'] = $new_name;
					// 		$this->load->library('upload', $config);
					// 		if (!$this->upload->do_upload()):
					// 			$error = array('error' => $this->upload->display_errors());
					// 			$this->load->view('header');
					// 			$this->load->view('add', $error);
					// 			$this->load->view('footer');
					// 		endif;
					// 			$upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
					// 			$file_name = $upload_data['file_name'];
					// 			$this->student_model->photo_name($id,$file_name);
					// 			redirect('students');
					// 		}
					// 	}
					// 	else{
					// 		#insert error
					// 		$data['error_insert'] = 'Something may wrong';
					// 		$this->load->view('add_student',$data);
					// 	}				
					// 	}
					}
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
