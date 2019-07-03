<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * File: home_model.php
 * Created Date: 03 07 2019, 1:48:13 PM
 * Author: Khan Sunny
 * -----
 * Last Modified: 03 07 2019, 2:10:01 PM
 * Modified By: Khan Sunny
 * -----
 * 
 */

class Home_model extends CI_Model{

	#Get values from db by argument
	/**
	 * getValue
	 *
	 * @param  mixed $table
	 * @param  mixed $query
	 * @param  mixed $key
	 * @param  mixed $value
	 *
	 * @return void
	 */
	public function getValue($table,$query,$key,$value)
	{
		if($this->db->get_where($table,array($query=>$key))->row()){
			return $this->db->get_where($table,array($query=>$key))->row()->$value;
		}else{
			return FALSE;
		}
	}
	
}
