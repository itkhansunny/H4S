<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * File: members_add.php
 * Created Date: 13 03 2019, 5:01:46 PM
 * Author: Khan Sunny
 * -----
 * Last Modified: 18 03 2019, 5:46:41 PM
 * Modified By: Khan Sunny
 * -----
 * 
 */

$this->load->view('header');

?>
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body">
			<?php echo msg_validation(); ?>
			<?php if(isset($msg_error)) { echo msg_error($msg_error); } ?>
			<?php if(isset($msg_success)) { echo msg_success($msg_success); } ?>
				<div class="form-validation">
					<?php echo form_open_multipart('members/store', 'class="form-valide"'); ?>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="name-bn">Name (Bangla) <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="name-bn" name="name-bn" placeholder="Enter your name (Bangla)..">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="name-en">Name (English) <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="name-en" name="name-en" placeholder="Enter your name (English)..">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="fname">Father's Name <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="fname" name="fname" placeholder="Enter your father's name..">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="mname">Mother's Name <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="mname" name="mname" placeholder="Enter your mother's name..">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="mobile">Mobile <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Your valid Mobile..">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="fbid">Facebook ID <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="fbid" name="fbid" placeholder="Your valid facebook address..">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="email">Email <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="email" name="email" placeholder="Your valid email..">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="bgroup">Blood group <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<select class="js-select2 form-control" id="bgroup" name="bgroup" style="width: 100%;"
								 data-placeholder="Choose one..">
									<option value="none">Don't know</option>
									<option value="A+">A+</option>
									<option value="A-">A-</option>
									<option value="B+">B+</option>
									<option value="B-">B-</option>
									<option value="O+">O+</option>
									<option value="O-">O-</option>
									<option value="AB+">AB+</option>
									<option value="AB-">AB-</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="dob">Date of Birth<span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="dob" name="dob" placeholder="Your valid date of birth..">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="gender">Gender<span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<div class="form-check-inline">
									<label class="form-check-label">
										<input type="radio" class="form-check-input" name="gender">Male
									</label>
								</div>
								<div class="form-check-inline">
									<label class="form-check-label">
										<input type="radio" class="form-check-input" name="gender">Female
									</label>
								</div>
								<div class="form-check-inline">
									<label class="form-check-label">
										<input type="radio" class="form-check-input" name="gender">Other
									</label>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="religion">Religion<span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<select class="js-select2 form-control" id="religion" name="religion" style="width: 100%;"
								 data-placeholder="Choose one..">
									<option value="">Please select</option>
									<option value="Islam">Islam</option>
									<option value="Hinduism">Hinduism</option>
									<option value="Christianity">Christianity</option>
									<option value="Buddhism">Buddhism</option>
									<option value="None">None</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="occupation">Occupation <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="occupation" name="occupation" placeholder="Enter your occupation name..">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="institute">Institute name <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="institute" name="institute" placeholder="Enter your institute name..">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="eduquali">Education qualification <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="eduquali" name="eduquali" placeholder="Enter your education qualification..">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="nidno">NID number <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="number" class="form-control" id="nidno" name="nidno" placeholder="Enter your valid NID name..">
							</div>
						</div>
						<hr>
						<p class="text-dark"><strong>Permanent address</strong></p>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="per-village">Village <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="per-village" name="per-village" placeholder="Enter your village name..">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="per-poffice">Post Office <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="per-poffice" name="per-poffice" placeholder="Enter your post office name..">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="per-thana">Thana <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="per-thana" name="per-thana" placeholder="Enter your thana name..">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="per-upzilla">Upzilla <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="per-upzilla" name="per-upzilla" placeholder="Enter your upzilla name..">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="per-zilla">Zilla <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="per-zilla" name="per-zilla" placeholder="Enter your zilla name..">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="per-division">Division <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="per-division" name="per-division" placeholder="Enter your division name..">
							</div>
						</div>
						<hr>
						<p class="text-dark"><strong>Present address</strong></p>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="pre-village">Village <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="pre-village" name="pre-village" placeholder="Enter your village name..">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="pre-poffice">Post Office <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="pre-poffice" name="pre-poffice" placeholder="Enter your post office  name..">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="pre-thana">Thana <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="pre-thana" name="pre-thana" placeholder="Enter your valid thana name..">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="pre-upzilla">Upzilla <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="pre-upzilla" name="pre-upzilla" placeholder="Enter your upzilla name..">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="pre-zilla">Zilla <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="pre-zilla" name="pre-zilla" placeholder="Enter your zilla name..">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="pre-division">Division <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="pre-division" name="pre-division" placeholder="Enter your division name..">
							</div>
						</div>
						<hr>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="password">Password <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="password" class="form-control" id="password" name="password" placeholder="Enter your password..">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="confirm-password">Confirm Password <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="password" class="form-control" id="confirm-password" name="confirm-password" placeholder="Enter confirm password..">
							</div>
						</div>
						<hr>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="confirm-password">Photo <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<div id="imagePreview"></div>
								<div class="upload-btn-wrapper">
									<button class="btn btn-success">Chose a file</button>
									<input id="imageUpload"  type="file" name="myfile"/>
								</div>
							</div>
						</div>
						<hr>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label"><a data-toggle="modal" data-target="#modal-terms" href="#">Terms &amp;
									Conditions</a> <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<label class="css-control css-control-primary css-checkbox" for="val-terms">
									<input type="checkbox" class="css-control-input" id="val-terms" name="val-terms" value="1">
									<span class="css-control-indicator"></span> I agree to the terms
								</label>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-lg-8 ml-auto">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</div>
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('footer'); ?>
