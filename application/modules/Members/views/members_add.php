<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * File: members_add.php
 * Created Date: 13 03 2019, 5:01:46 PM
 * Author: Khan Sunny
 * -----
 * Last Modified: 20 10 2019, 4:48:01 AM
 * Modified By: Khan Sunny
 * -----
 * 
 */

$this->load->view('header');
?>
<div class="row">
	<div class="col-lg-12">
		<div class="card">
		<div class="card-body text-center">
			<h6>Member Registration Form</h6>
		</div>
			<div class="form-group row">
				<div class="col-lg-12">
					<?php echo msg_validation(); ?>
					<?php if(isset($msg_error)) { echo msg_error($msg_error); } ?>
					<?php if(isset($msg_success)) { echo msg_success($msg_success); } ?>
				</div>
				<label class="col-lg-4 col-form-label">Registration type<span class="text-danger">*</span></label>
				<div class="col-lg-8">
					<div class="form-check-inline">
						<label class="form-check-label">
							<input type="radio" class="form-check-input" name="reg-type" value="1" <?php echo (set_value('reg-type')=='1')?'checked':''; ?>>Member
						</label>
					</div>
					<div class="form-check-inline">
						<label class="form-check-label">
							<input type="radio" class="form-check-input" name="reg-type" value="2" <?php echo (set_value('reg-type')=='2')?'checked':''; ?>>Donor 
						</label>
					</div>
				</div>
			</div>
		</div>
		<div id="form-1" class="card member-regi">
			<div class="card-body">
				<div class="form-validation">
					<?php echo form_open_multipart("members/store", "class=form-valide"); ?>
						<input type="hidden" name="reg-type" value="1">
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="name-bn">Name (Bangla) <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="name-bn" name="name-bn" placeholder="Enter your name (Bangla).." value="<?php echo set_value('name-bn'); ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="name-en">Name (English) <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="name-en" name="name-en" placeholder="Enter your name (English).." value="<?php echo set_value('name-en'); ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="fname">Father's Name</label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="fname" name="fname" placeholder="Enter your father's name.." value="<?php echo set_value('fname'); ?>" >
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="mname">Mother's Name</label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="mname" name="mname" placeholder="Enter your mother's name.." value="<?php echo set_value('fname'); ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="mobile">Mobile <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Your Mobile.." value="<?php echo set_value('mobile'); ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="fbid">Facebook ID</label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="fbid" name="fbid" placeholder="Your facebook address.." value="<?php echo set_value('fbid'); ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="email">Email <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="email" name="email" placeholder="Your email.." value="<?php echo set_value('email'); ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="bgroup">Blood group <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<select class="js-select2 form-control" id="bgroup" name="bgroup" style="width: 100%;"
								data-placeholder="Choose one..">
									<option value="none"<?php echo (set_value('bgroup')=='none')?'checked':''; ?>>Don't know</option>
									<option value="A+" <?php echo (set_value('bgroup')=='A+')?'checked':''; ?>>A+</option>
									<option value="A-" <?php echo (set_value('bgroup')=='A-')?'checked':''; ?>>A-</option>
									<option value="B+" <?php echo (set_value('bgroup')=='B+')?'checked':''; ?>>B+</option>
									<option value="B-" <?php echo (set_value('bgroup')=='B-')?'checked':''; ?>>B-</option>
									<option value="O+" <?php echo (set_value('bgroup')=='O+')?'checked':''; ?>>O+</option>
									<option value="O-" <?php echo (set_value('bgroup')=='O-')?'checked':''; ?>>O-</option>
									<option value="AB+"<?php echo (set_value('bgroup')=='AB+')?'checked':''; ?>>AB+</option>
									<option value="AB-"<?php echo (set_value('bgroup')=='AB-')?'checked':''; ?>>AB-</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="dob">Date of Birth</label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="dob" name="dob" placeholder="Your valid date of birth.." value="<?php echo set_value('dob'); ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="gender">Gender<span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<div class="form-check-inline">
									<label class="form-check-label">
										<input type="radio" class="form-check-input" name="gender" value="male" <?php echo (set_value('gender')=='male')?'checked':''; ?>>Male
									</label>
								</div>
								<div class="form-check-inline">
									<label class="form-check-label">
										<input type="radio" class="form-check-input" name="gender" value="female" <?php echo (set_value('gender')=='female')?'checked':''; ?>>Female
									</label>
								</div>
								<div class="form-check-inline">
									<label class="form-check-label">
										<input type="radio" class="form-check-input" name="gender" value="other" <?php echo (set_value('gender')=='other')?'checked':''; ?>>Other
									</label>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="religion">Religion</label>
							<div class="col-lg-8">
								<select class="js-select3 form-control" id="religion" name="religion" style="width: 100%;"
								data-placeholder="Choose one..">
									<option value="" <?php echo (set_value('religion')=='')?'checked':''; ?>>Please select</option>
									<option value="Islam" <?php echo (set_value('religion')=='Islam')?'checked':''; ?>>Islam</option>
									<option value="Hinduism" <?php echo (set_value('religion')=='Hinduism')?'checked':''; ?>>Hinduism</option>
									<option value="Christianity" <?php echo (set_value('religion')=='Christianity')?'checked':''; ?>>Christianity</option>
									<option value="Buddhism" <?php echo (set_value('religion')=='Buddhism')?'checked':''; ?>>Buddhism</option>
									<option value="None" <?php echo (set_value('religion')=='None')?'checked':''; ?>>None</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="occupation">Occupation</label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="occupation" name="occupation" placeholder="Enter your occupation name.." value="<?php echo set_value('occupation'); ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="institute">Institute name</label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="institute" name="institute" placeholder="Enter your institute name.." value="<?php echo set_value('institute'); ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="eduquali">Education qualification</label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="eduquali" name="eduquali" placeholder="Enter your education qualification.." value="<?php echo set_value('eduquali'); ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="nidno">NID number</label>
							<div class="col-lg-8">
								<input type="number" class="form-control" id="nidno" name="nidno" placeholder="Enter your valid NID name.." value="<?php echo set_value('nidno'); ?>">
							</div>
						</div>
						<hr>
						<p class="text-dark"><strong>Present address</strong></p>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label"></label>
							<div class="col-lg-8">
								<label class="css-control css-control-primary css-checkbox" for="val-terms">
									<textarea name="address" id="" cols="90" rows="5"><?php echo set_value('address'); ?></textarea>
								</label>
							</div>
						</div>
						<p class="text-dark"><strong>Permanent address</strong></p>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label"></label>
							<div class="col-lg-8">
								<label class="css-control css-control-primary css-checkbox" for="val-terms">
									<textarea name="per-address" id="" cols="90" rows="5"></textarea>
								</label>
							</div>
						</div>
						<hr>
						<p class="text-dark"><strong>Donation information</strong></p>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="gender">Donation type<span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<div class="form-check-inline">
									<label class="form-check-label">
										<input type="radio" class="form-check-input" name="donation-type" value="one-time" <?php echo (set_value('donation-type')=='one-time')?'checked':''; ?>>One time
									</label>
								</div>
								<div class="form-check-inline">
									<label class="form-check-label">
										<input type="radio" class="form-check-input" name="donation-type" value="monthly" <?php echo (set_value('donation-type')=='monthly')?'checked':''; ?>>Monthly
									</label>
								</div>
								<div class="form-check-inline">
									<label class="form-check-label">
										<input type="radio" class="form-check-input" name="donation-type" value="yearly" <?php echo (set_value('donation-type')=='yearly')?'checked':''; ?>>Yearly
									</label>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="amount">Donation Amount <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="amount" name="amount" placeholder="0.00" value="<?php echo set_value('amount'); ?>">
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
		<div id="form-2" class="card member-regi">
			<div class="card-body">
				<div class="form-validation">
					<?php echo form_open_multipart('members/store', 'class="form-valide"'); ?>
						<input type="hidden" name="reg-type" value="2">
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="name-bn">Name (Bangla) <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="name-bn" name="name-bn" placeholder="Enter your name (Bangla).." value="<?php echo set_value('name-bn'); ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="name-en">Name (English) <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="name-en" name="name-en" placeholder="Enter your name (English).." value="<?php echo set_value('name-en'); ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="mobile">Mobile <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Your valid Mobile.." value="<?php echo set_value('mobile'); ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="email">Email <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="email" name="email" placeholder="Your valid email.." value="<?php echo set_value('email'); ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="bgroup">Blood group <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<select class="js-select2 form-control" id="bgroup" name="bgroup" style="width: 100%;"
								data-placeholder="Choose one..">
									<option value="none"<?php echo (set_value('bgroup')=='none')?'checked':''; ?>>Don't know</option>
									<option value="A+" <?php echo (set_value('bgroup')=='A+')?'checked':''; ?>>A+</option>
									<option value="A-" <?php echo (set_value('bgroup')=='A-')?'checked':''; ?>>A-</option>
									<option value="B+" <?php echo (set_value('bgroup')=='B+')?'checked':''; ?>>B+</option>
									<option value="B-" <?php echo (set_value('bgroup')=='B-')?'checked':''; ?>>B-</option>
									<option value="O+" <?php echo (set_value('bgroup')=='O+')?'checked':''; ?>>O+</option>
									<option value="O-" <?php echo (set_value('bgroup')=='O-')?'checked':''; ?>>O-</option>
									<option value="AB+"<?php echo (set_value('bgroup')=='AB+')?'checked':''; ?>>AB+</option>
									<option value="AB-"<?php echo (set_value('bgroup')=='AB-')?'checked':''; ?>>AB-</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="gender">Gender<span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<div class="form-check-inline">
									<label class="form-check-label">
										<input type="radio" class="form-check-input" name="gender" value="male">Male
									</label>
								</div>
								<div class="form-check-inline">
									<label class="form-check-label">
										<input type="radio" class="form-check-input" name="gender" value="female">Female
									</label>
								</div>
								<div class="form-check-inline">
									<label class="form-check-label">
										<input type="radio" class="form-check-input" name="gender" value="other">Other
									</label>
								</div>
							</div>
						</div>
						<hr>
						<p class="text-dark"><strong>Present address</strong></p>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label"><span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<label class="css-control css-control-primary css-checkbox" for="val-terms">
									<textarea name="address" id="" cols="90" rows="5"></textarea>
								</label>
							</div>
						</div>
						<hr>
						<p class="text-dark"><strong>Donation information</strong></p>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="gender">Donation type<span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<div class="form-check-inline">
									<label class="form-check-label">
										<input type="radio" class="form-check-input" name="donation-type" value="one-time" <?php echo (set_value('donation-type')=='one-time')?'checked':''; ?>>One time
									</label>
								</div>
								<div class="form-check-inline">
									<label class="form-check-label">
										<input type="radio" class="form-check-input" name="donation-type" value="monthly" <?php echo (set_value('donation-type')=='monthly')?'checked':''; ?>>Monthly
									</label>
								</div>
								<div class="form-check-inline">
									<label class="form-check-label">
										<input type="radio" class="form-check-input" name="donation-type" value="yearly" <?php echo (set_value('donation-type')=='yearly')?'checked':''; ?>>Yearly
									</label>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="amount">Donation Amount <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="amount" name="amount" placeholder="0.00" value="<?php echo set_value('amount'); ?>">
							</div>
						</div>
						<hr>
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
