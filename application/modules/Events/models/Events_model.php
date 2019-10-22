<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * File: Events_model.php
 * Created Date: 20 10 2019, 7:26:50 AM
 * Author: Khan Sunny
 * -----
 * Last Modified: 22 10 2019, 6:10:11 AM
 * Modified By: Khan Sunny
 * -----
 * 
 */

class Events_model extends CI_Model{

	#Events list query
	public function getAll()
	{
		$query = $this->db->get('events');
		$result = $query->result();
		return $result;
	}
	
	#Save event information
	public function eventSave()
	{
		$starttime = date('Y-m-d H:i:s', strtotime(str_replace('/', '-', $this->input->post('starttime'))));
		$endtime = date('Y-m-d H:i:s', strtotime(str_replace('/', '-', $this->input->post('endtime'))));
		$data=array(
			'name'				=>$this->input->post('name'),
			'starttime'			=>$starttime,
			'endtime'			=>$endtime,
			'venue'				=>$this->input->post('venue'),
			'details'			=>$this->input->post('details')
		);
		
		if($this->db->insert('events', $data)){
			return TRUE;
		}else{
			return FALSE;
		}
	}
	
	#Set Event id
	public function updateEID($id, $mid)
	{
		$this->db->where('id', $id);
		$this->db->update('events', array('eid'=>$mid));
	}
	
	#New uploaded photo path set to DB
	public function setPhotoPath($id,$fileName)
	{
		$this->db->where('id', $id);
		$this->db->update('events', array('path'=>$fileName));
	}

	#Event information by id
	public function getEventInfo($id)
	{
		return $this->db->get_where('events',array('id' =>$id))->row();
	}
	
	#Update event information store
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
