<?php
/*
 * File: soroborno_helper.php
 * Created Date: 18 03 2019, 3:34:32 PM
 * Author: Khan Sunny
 * -----
 * Last Modified: 03 07 2019, 2:12:02 PM
 * Modified By: Khan Sunny
 * -----
 * 
 */

#Form Validation Flash Message 
function msg_validation()
{
	if (validation_errors()) {
		return "<div class='alert alert-danger alert-dismissible' role='alert'>
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
			<span aria-hidden='true'>&times;</span></button>
			<span class='message'>". validation_errors() ."</span></div>";
	}
}

#Flash Message 
function flashMsg()
{
	$CI =& get_instance();
	if ($CI->session->flashdata('msg_success')) {
		echo "<div class='alert alert-success alert-dismissible' role='alert'>
		<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		<span aria-hidden='true'>&times;</span></button>"
		.$CI->session->flashdata('msg_success').
		"</div>";
		if(isset($_SESSION['msg_success'])){
			unset($_SESSION['msg_success']);
		}
	}else if($CI->session->flashdata('msg_error')){
		echo "<div class='alert alert-danger alert-dismissible' role='alert'>
		<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		<span aria-hidden='true'>&times;</span></button>"
		.$CI->session->flashdata('msg_error').
		"</div>";
		if(isset($_SESSION['msg_error'])){
			unset($_SESSION['msg_error']);
		}
	}
}

#Hash password with bcrypt 
function passHash($password){
    $options = ['cost' => 10];
    return password_hash($password, PASSWORD_BCRYPT, $options);
}

#Return value from db by argument
function getValue($table,$query,$key,$value)
{
	$CI =& get_instance();
	$CI->load->model('Home_model','home');
	if($CI->home->getValue($table,$query,$key,$value)){
		return $CI->home->getValue($table,$query,$key,$value);
	}else{
		return FALSE;
	}
}
