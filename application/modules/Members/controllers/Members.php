<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Members extends CI_Controller {
	
		public function __construct()
		{
			parent::__construct();
			//Load Dependencies
			$this->load->model('Members_model','members');
			
	
		}
	
		// List all your items
		public function index( $offset = 0 )
		{
			$data['membersData'] = $this->members->memberList();
			$this->load->view('members_list', $data);
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
						if (!$this->upload->do_upload('myfile')):
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
			if ($this->form_validation->run()==FALSE) {
				$data['memberData'] = $this->members->getMemberInfo($id);
				$this->load->view('members_update',$data);
			}
			else {
				$data = array(
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
					'per_village'		=>$this->input->post('per-village'),
					'per_poffice'		=>$this->input->post('per-poffice'),
					'per_thana'			=>$this->input->post('per-thana'),
					'per_upzilla'		=>$this->input->post('per-upzilla'),
					'per_zilla'			=>$this->input->post('per-zilla'),
					'per_division'		=>$this->input->post('per-division'),
					'pre_village'		=>$this->input->post('pre-village'),
					'pre_poffice'		=>$this->input->post('pre-poffice'),
					'pre_thana'			=>$this->input->post('pre-thana'),
					'pre_upzilla'		=>$this->input->post('pre-upzilla'),
					'pre_zilla'			=>$this->input->post('pre-zilla'),
					'pre_division'		=>$this->input->post('pre-division'),
					'password'			=> passHash($this->input->post('password')),
					'cdate'				=> time(),
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
