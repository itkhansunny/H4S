<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * File: Library_model.php
 * Created Date: 18 03 2019, 5:08:23 PM
 * Author: Khan Sunny
 * -----
 * Last Modified: 03 07 2019, 1:49:00 AM
 * Modified By: Khan Sunny
 * -----
 * 
 */
class Library_model extends CI_Model{

	#Member list query
	public function bookList()
	{
		$query = $this->db->get('books');
		$result = $query->result();
		return $result;
	}
	
	#Save member information
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
			'password'			=> passHash($this->input->post('password')),
			'cdate'				=> time(),
		);
		if($this->db->insert('members', $attr)){
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
		return $this->db->get_where('members',array('id' =>$id))->result();
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

	#Update member information
	public function deleteMember($id)
	{
		if($this->db->delete('members',array('id' => $id))){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}

	#Get Category list
	public function getCategoryList()
	{
		$query = $this->db->get('category');
		if ($query->num_rows() > 0) {
			return $query->result();
		}else{
			return false;
		}
	}
	
	#Save category data
	public function saveCategoryData()
	{
		$attr=array(
			'name'			=>$this->input->post('name'),
			'cdate'			=> time(),
			'udate'			=> time(),
		);
		
		if($this->db->insert('category', $attr)){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	#Get category data
	public function getCategoryData($id)
	{
		$attr=array(
			'id'			=>$id,
		);
		$query = $this->db->get_where('category',array('id'=>$id))->result();
		if($query){
			return $query;
		}else{
			return FALSE;
		}
	}

	#Update category date store
	public function updateCategoryStore($id,$data)
	{
		if($this->db->where('id',$id)->update('category',$data)){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	#Delete Category data
	public function deleteCategory($id)
	{
		if($this->db->delete('category',array('id' => $id))){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}
	
	#Get author list
	public function getAuthorList()
	{
		$query = $this->db->get('author');
		if ($query->num_rows() > 0) {
			return $query->result();
		}else{
			return false;
		}
	}
	
	#Save author data
	public function saveAuthorData()
	{
		$attr=array(
			'name'			=>$this->input->post('name'),
			'cdate'			=> time(),
			'udate'			=> time(),
		);
		
		if($this->db->insert('author', $attr)){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	#Get author data
	public function getAuthorData($id)
	{
		$attr=array(
			'id'			=>$id,
		);
		$query = $this->db->get_where('author',array('id'=>$id))->result();
		if($query){
			return $query;
		}else{
			return FALSE;
		}
	}

	#Update author date store
	public function updateAuthorStore($id,$data)
	{
		if($this->db->where('id',$id)->update('author',$data)){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	#Delete author data
	public function deleteAuthor($id)
	{
		if($this->db->delete('author',array('id' => $id))){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}

}
