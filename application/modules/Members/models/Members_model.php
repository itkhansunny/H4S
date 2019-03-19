<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * File: Member_model.php
 * Created Date: 18 03 2019, 5:08:23 PM
 * Author: Khan Sunny
 * -----
 * Last Modified: 19 03 2019, 1:37:20 AM
 * Modified By: Khan Sunny
 * -----
 * 
 */
class Members_model extends CI_Model{
	
	//Save member information
	public function memberSave()
	{
		$attr=array(
			'name-bn'			=>$this->input->post('name-bn'),
			'name-en'			=>$this->input->post('name-en'),
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
			'per-village'		=>$this->input->post('per-village'),
			'per-poffice'		=>$this->input->post('per-poffice'),
			'per-thana'			=>$this->input->post('per-thana'),
			'per-upzilla'		=>$this->input->post('per-upzilla'),
			'per-zilla'			=>$this->input->post('per-zilla'),
			'per-division'		=>$this->input->post('per-division'),
			'pre-village'		=>$this->input->post('pre-village'),
			'pre-poffice'		=>$this->input->post('pre-poffice'),
			'pre-thana'			=>$this->input->post('pre-thana'),
			'pre-upzilla'		=>$this->input->post('pre-upzilla'),
			'pre-zilla'			=>$this->input->post('pre-zilla'),
			'pre-division'		=>$this->input->post('pre-division'),
			'password'			=>$this->input->post('password')
		);
		if($this->db->insert('members', $attr)){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function updateMID($id, $mid)
	{
		
	}

	public function getMemberID() {
		// $result = $this->db->where('id', $id)-> get('student_m');
		return sprintf("%02d",rand(10,100));
	}

}
 