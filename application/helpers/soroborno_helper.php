<?php
/*
 * File: soroborno_helper.php
 * Created Date: 18 03 2019, 3:34:32 PM
 * Author: Khan Sunny
 * -----
 * Last Modified: 18 03 2019, 4:28:52 PM
 * Modified By: Khan Sunny
 * -----
 * 
 */

// Flash Message 
function msg_validation()
{
	if (validation_errors()) {
		return "<div class='alert alert-danger alert-dismissible' role='alert'>
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
			<span aria-hidden='true'>&times;</span></button>
			<span class='message'>". validation_errors() ."</span></div>";
	}
}


function msg_error($msg_error)
{
	return"<div class='alert alert-danger alert-dismissible' role='alert'>
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
			<span aria-hidden='true'>&times;</span></button>"
			.$msg_error.
			"</div>";
}


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

