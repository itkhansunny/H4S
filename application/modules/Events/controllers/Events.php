<?php
/*
 * File: Events.php
 * Created Date: 20 10 2019, 7:26:50 AM
 * Author: Khan Sunny
 * -----
 * Last Modified: 22 10 2019, 11:52:51 AM
 * Modified By: Khan Sunny
 * -----
 * 
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {
	
		public function __construct()
		{
			parent::__construct();
			//Load Dependencies
			$this->load->model('Events_model','events');
			
		}
	
		#Show all events
		public function index()
		{
			$data['events_list'] = $this->events->getAll();
			$this->load->view('events_index',$data);
		}
	
		// Add new event
		public function add()
		{
			$this->load->view('events_add');
		}

		// Add a new event
		public function store()
		{
			$this->form_validation->set_rules('name','Event Name','trim|required|min_length[5]');
			$this->form_validation->set_rules('starttime','Events Start Date','required|min_length[5]');
			$this->form_validation->set_rules('endtime','Events End Date','required|min_length[5]');
			$this->form_validation->set_rules('venue','Events Venue','trim|required|min_length[5]');
			$this->form_validation->set_rules('details','Events Details','trim|required|min_length[5]');
			
			if ($this->form_validation->run()==FALSE) {
				$this->load->view('events_add');
			}
			else {
					if ($this->events->eventSave()){
					#Image/Photo Upload
					$id = $this->db->insert_id();
					#Generate Event ID
					$eid=date('y').sprintf("%03d",$id);
					#Update Event ID
					$this->events->updateEID($id,$eid);
					if(mkdir("assets/upload/events/$eid",0775)){
					#Upload Image To Event/**ID** Folder 
					$config['upload_path'] 	= './assets/upload/events/'.$eid;
					$config['allowed_types']= 'jpg';
					$config['max_size']	= '500';
					$new_name = date('dmY').time();
					$config['file_name'] = $new_name;
					$this->load->library('upload', $config);
						if (!$this->upload->do_upload('eventphoto') && $this->input->post('file')!=null):
							$data['msg_error'] = $this->upload->display_errors();
							$this->load->view('events_add', $data);
						endif;
						$upload_data = $this->upload->data();
						$file_name = $upload_data['file_name'];
						$this->events->setPhotoPath($id,$file_name);
						redirect('events');
					}else{
						$data['msg_error'] = 'Unable to create folder to store event\'s photo' ;
						$this->load->view('events_add',$data);
					}
				}
				else{
					#insert error
					$data['msg_error'] = 'Something may wrong';
					$this->load->view('events_add',$data);
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

		public function test()
		{
		
            
			
		}
}
