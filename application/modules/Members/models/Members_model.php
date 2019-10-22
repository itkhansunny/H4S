<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * File: Member_model.php
 * Created Date: 18 03 2019, 5:08:23 PM
 * Author: Khan Sunny
 * -----
 * Last Modified: 20 10 2019, 6:33:34 AM
 * Modified By: Khan Sunny
 * -----
 * 
 */
class Members_model extends CI_Model{

	#Member list query
	public function memberList()
	{
		$query = $this->db->get('members');
		$result = $query->result();
		return $result;
	}
	
	#Save member information
	public function memberSave()
	{
		$data=array(
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
			'password'			=> passHash($this->input->post('password')),
			'cdate'				=> time(),
		);
		if($this->db->insert('members', $data)){
			return TRUE;
		}else{
			return FALSE;
		}
	}
	
	#Set Member id
	public function updateMID($id, $mid)
	{
		$this->db->where('id', $id);
		$this->db->update('members', array('mid'=>$mid));
	}
	
	#New uploaded photo path set to DB
	public function setPhotoPath($id,$fileName)
	{
		$this->db->where('id', $id);
		$this->db->update('members', array('path'=>$fileName));
	}

	#Member information by id
	public function getMemberInfo($id)
	{
		return $this->db->get_where('members',array('id' =>$id))->row();
	}
	
	#Update member information store
	public function updateStore($id,$data)
	{
		if($this->db->where('id',$id)->update('members',$data)){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	#Delete member information
	public function deleteMember($id)
	{
		if($this->db->delete('members',array('id' => $id))){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}
}
