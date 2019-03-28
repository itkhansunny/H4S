<?php
/*
 * File: soroborno_helper.php
 * Created Date: 18 03 2019, 3:34:32 PM
 * Author: Khan Sunny
 * -----
 * Last Modified: 28 03 2019, 10:50:55 AM
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

#Error Flash Message 
function msg_error($msg_error)
{
	return"<div class='alert alert-danger alert-dismissible' role='alert'>
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
			<span aria-hidden='true'>&times;</span></button>"
			.$msg_error.
			"</div>";
}

#Success Flash Message 
function msg_success($msg_success)
{
	if (isset($msg_success)) {
		return"<div class='alert alert-success alert-dismissible' role='alert'>
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
			<span aria-hidden='true'>&times;</span></button>"
			.$msg_success.
			"</div>";
	}
}

#Hash password with bcrypt 
function passHash($password){
    $options = ['cost' => 10];
    return password_hash($password, PASSWORD_BCRYPT, $options);
}
