<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * File: Library_model.php
 * Created Date: 18 03 2019, 5:08:23 PM
 * Author: Khan Sunny
 * -----
 * Last Modified: 03 07 2019, 12:42:29 PM
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
	
	#Save book information
	public function bookSave()
	{
		$attr=array(
			'name'			=>$this->input->post('name'),
			'catid'			=>$this->input->post('category'),
			'authid'		=>$this->input->post('author'),
			'tbook'			=>$this->input->post('tbook'),
			'bookid'		=>$this->input->post('bookid'),
			'isbn'			=>$this->input->post('isbn'),
			'cdate'			=> time(),
		);
		if($this->db->insert('books', $attr)){
			return TRUE;
		}else{
			return FALSE;
		}
	}
	
	#New uploaded photo path set to DB
	public function setPhotoPath($id,$fileName)
	{
		$this->db->where('id', $id);
		if($this->db->update('books', array('img_path'=>$fileName))){
			return TRUE;
		}else{
			return FALSE;
		}
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
