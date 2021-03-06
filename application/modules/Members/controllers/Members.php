<?php
/*
 * File: Members.php
 * Created Date: 03 04 2019, 1:57:07 AM
 * Author: Khan Sunny
 * -----
 * Last Modified: 20 10 2019, 8:00:52 PM
 * Modified By: Khan Sunny
 * -----
 * 
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Members extends CI_Controller {
	
		public function __construct()
		{
			parent::__construct();
			//Load Dependencies
			$this->load->model('Members_model','members');
			
	
		}
	
		// List all your items
		public function index()
		{
			$data['membersData'] = $this->members->memberList();
			$this->load->view('members_list', $data);
		}
	
		// Add New Member
		public function add()
		{
			$this->load->view('members_add');
		}

		// Add a new item
		public function store()
		{
			$this->form_validation->set_rules('name-bn','Name (Bangla)','trim|required|min_length[5]');
			$this->form_validation->set_rules('name-en','Name (English)','trim|required|min_length[5]');
			$this->form_validation->set_rules('mobile','Mobile','trim|required|min_length[11]|max_length[11]');
			$this->form_validation->set_rules('email','Email','trim|required|valid_email|min_length[10]');
			$this->form_validation->set_rules('bgroup','Blood Group','trim|required');
			$this->form_validation->set_rules('gender','Gender','trim|required');
			$this->form_validation->set_rules('address','Address','trim|required|min_length[5]');
			$this->form_validation->set_rules('donation-type','Donation type','trim|required');
			$this->form_validation->set_rules('amount','Donation Amount','trim|required|numeric');
			
			if ($this->form_validation->run()==FALSE) {
				$this->load->view('members_add');
			}
			else {
					if ($this->members->memberSave()){
					#File Upload
					$id = $this->db->insert_id();
					#Generate Member ID
					$mid=date('y').sprintf("%03d",$id);
					#Update Student ID
					$this->members->updateMID($id,$mid);
					if(mkdir("assets/upload/members/$mid",0775)){
					#Upload File To Student/**ID** Folder 
					$config['upload_path'] 	= './assets/upload/members/'.$mid;
					$config['allowed_types']= 'jpg';
					$config['max_size']	= '500';
					$new_name = date('dmY').time();
					$config['file_name'] = $new_name;
					$this->load->library('upload', $config);
						if (!$this->upload->do_upload('myfile') && $this->input->post('file')!=null):
							$data['msg_error'] = $this->upload->display_errors();
							$this->load->view('members_add', $data);
						endif;
						$upload_data = $this->upload->data();
						$file_name = $upload_data['file_name'];
						$this->members->setPhotoPath($id,$file_name);
						redirect('members');
					}else{
						$data['msg_error'] = 'Unable to create folder to store member\'s photo' ;
						$this->load->view('members_add',$data);
					}
				}
				else{
					#insert error
					$data['msg_error'] = 'Something may wrong';
					$this->load->view('add_student',$data);
				}				
			}
		}

	
		//Update one item
		public function update( $id = NULL )
		{
			$data['memberData'] = $this->members->getMemberInfo($id);
			$this->load->view('members_update',$data);
		}

		//Save update information
		public function updateStore()
		{
			$id = $this->uri->segment(3);
			$this->form_validation->set_rules('name-bn','Name (Bangla)','trim|required|min_length[5]');
			$this->form_validation->set_rules('name-en','Name (English)','trim|required|min_length[5]');
			$this->form_validation->set_rules('mobile','Mobile','trim|required|min_length[11]|max_length[11]');
			$this->form_validation->set_rules('email','Email','trim|required|valid_email|min_length[10]');
			$this->form_validation->set_rules('bgroup','Blood Group','trim|required');
			$this->form_validation->set_rules('gender','Gender','trim|required');
			$this->form_validation->set_rules('address','Address','trim|required|min_length[5]');
			$this->form_validation->set_rules('donation-type','Donation type','trim|required');
			$this->form_validation->set_rules('amount','Donation Amount','trim|required|numeric');

			if ($this->form_validation->run()==FALSE) {
				$data['memberData'] = $this->members->getMemberInfo($id);
				$this->load->view('members_update',$data);
			}
			else {
				$data = array(
					'type'				=>$this->input->post('reg-type'),
					'name_bn'			=>$this->input->post('name-bn'),
					'name_en'			=>$this->input->post('name-en'),
					'fname'				=>$this->input->post('fname'),
					'mname'				=>$this->input->post('mname'),
					'mobile'			=>$this->input->post('mobile'),
					'fbid'				=>$this->input->post('fbid'),
					'email'				=>$this->input->post('email'),
					'bgroup'			=>$this->input->post('bgroup'),
					'dob'				=>$this->input->post('dob'),
					'gender'			=>$this->input->post('gender'),
					'religion'			=>$this->input->post('religion'),
					'occupation'		=>$this->input->post('occupation'),
					'institute'			=>$this->input->post('institute'),
					'eduquali'			=>$this->input->post('eduquali'),
					'nidno'				=>$this->input->post('nidno'),
					'address'			=>$this->input->post('address'),
					'per_address'		=>$this->input->post('per-address'),
					'donation_type'		=>$this->input->post('donation-type'),
					'amount'			=>$this->input->post('amount'),
					'udate'				=> time(),
				);
				if($this->members->updateStore($id,$data)){
					redirect('members');
				}else{
					$data['memberData'] = $this->members->getMemberInfo($id);
					$this->load->view('members_update',$data);
				}
			}
		}
	
		#Update member information
		public function delete( $id = NULL )
		{
			if($this->members->deleteMember($id))
			{
				redirect('members');
			}
		}
}
