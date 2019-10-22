<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * File: members_update.php
 * Created Date: 28 03 2019, 7:37:22 PM
 * Author: Khan Sunny
 * -----
 * Last Modified: 20 10 2019, 6:01:44 AM
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
			<h6>Member Update Form</h6>
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
							<input type="radio" class="form-check-input" name="reg-type" value="1" <?php echo ($memberData->type=='1')?'checked':''; ?>>Member
						</label>
					</div>
					<div class="form-check-inline">
						<label class="form-check-label">
							<input type="radio" class="form-check-input" name="reg-type" value="2" <?php echo ($memberData->type=='2')?'checked':''; ?>>Donor 
						</label>
					</div>
				</div>
			</div>
		</div>
		<div id="form-1" class="card member-regi">
			<div class="card-body">
				<div class="form-validation">
					<?php echo form_open_multipart("members/updateStore", "class=form-valide"); ?>
						<input type="hidden" name="reg-type" value="1">
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="name-bn">Name (Bangla) <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="name-bn" name="name-bn" placeholder="Enter your name (Bangla).." value="<?php echo $memberData->name_bn; ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="name-en">Name (English) <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="name-en" name="name-en" placeholder="Enter your name (English).." value="<?php echo $memberData->name_en; ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="fname">Father's Name</label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="fname" name="fname" placeholder="Enter your father's name.." value="<?php echo $memberData->fname; ?>" >
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="mname">Mother's Name</label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="mname" name="mname" placeholder="Enter your mother's name.." value="<?php echo $memberData->mname; ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="mobile">Mobile <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Your Mobile.." value="<?php echo $memberData->mobile; ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="fbid">Facebook ID</label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="fbid" name="fbid" placeholder="Your facebook address.." value="<?php echo $memberData->fbid; ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="email">Email <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="email" name="email" placeholder="Your email.." value="<?php echo $memberData->email; ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="bgroup">Blood group <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<select class="js-select2 form-control" id="bgroup" name="bgroup" style="width: 100%;"
								data-placeholder="Choose one..">
									<option value="none"<?php echo $memberData->bgroup=='none'?'checked':''; ?>>Don't know</option>
									<option value="A+" <?php echo $memberData->bgroup=='A+'?'checked':''; ?>>A+</option>
									<option value="A-" <?php echo $memberData->bgroup=='A-'?'checked':''; ?>>A-</option>
									<option value="B+" <?php echo $memberData->bgroup=='B+'?'checked':''; ?>>B+</option>
									<option value="B-" <?php echo $memberData->bgroup=='B-'?'checked':''; ?>>B-</option>
									<option value="O+" <?php echo $memberData->bgroup=='O+'?'checked':''; ?>>O+</option>
									<option value="O-" <?php echo $memberData->bgroup=='O-'?'checked':''; ?>>O-</option>
									<option value="AB+"<?php echo $memberData->bgroup=='AB+'?'checked':''; ?>>AB+</option>
									<option value="AB-"<?php echo $memberData->bgroup=='AB-'?'checked':''; ?>>AB-</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="dob">Date of Birth</label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="dob" name="dob" placeholder="Your valid date of birth.." value="<?php echo $memberData->dob; ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="gender">Gender<span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<div class="form-check-inline">
									<label class="form-check-label">
										<input type="radio" class="form-check-input" name="gender" value="male" <?php echo ($memberData->gender=='male')?'checked':''; ?>>Male
									</label>
								</div>
								<div class="form-check-inline">
									<label class="form-check-label">
										<input type="radio" class="form-check-input" name="gender" value="female" <?php echo ($memberData->gender=='female')?'checked':''; ?>>Female
									</label>
								</div>
								<div class="form-check-inline">
									<label class="form-check-label">
										<input type="radio" class="form-check-input" name="gender" value="other" <?php echo ($memberData->gender=='other')?'checked':''; ?>>Other
									</label>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="religion">Religion</label>
							<div class="col-lg-8">
								<select class="js-select3 form-control" id="religion" name="religion" style="width: 100%;"
								data-placeholder="Choose one..">
									<option value="" <?php echo ($memberData->religion=='')?'checked':''; ?>>Please select</option>
									<option value="Islam" <?php echo ($memberData->religion=='Islam')?'checked':''; ?>>Islam</option>
									<option value="Hinduism" <?php echo ($memberData->religion=='Hinduism')?'checked':''; ?>>Hinduism</option>
									<option value="Christianity" <?php echo ($memberData->religion=='Christianity')?'checked':''; ?>>Christianity</option>
									<option value="Buddhism" <?php echo ($memberData->religion=='Buddhism')?'checked':''; ?>>Buddhism</option>
									<option value="None" <?php echo ($memberData->religion=='None')?'checked':''; ?>>None</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="occupation">Occupation</label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="occupation" name="occupation" placeholder="Enter your occupation name.." value="<?php echo $memberData->occupation; ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="institute">Institute name</label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="institute" name="institute" placeholder="Enter your institute name.." value="<?php echo $memberData->institute; ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="eduquali">Education qualification</label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="eduquali" name="eduquali" placeholder="Enter your education qualification.." value="<?php echo $memberData->eduquali; ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="nidno">NID number</label>
							<div class="col-lg-8">
								<input type="number" class="form-control" id="nidno" name="nidno" placeholder="Enter your valid NID name.." value="<?php echo $memberData->nidno; ?>">
							</div>
						</div>
						<hr>
						<p class="text-dark"><strong>Present address</strong></p>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label"></label>
							<div class="col-lg-8">
								<label class="css-control css-control-primary css-checkbox" for="val-terms">
									<textarea name="address" id="address" cols="90" rows="5"><?php $memberData->address; ?></textarea>
								</label>
							</div>
						</div>
						<p class="text-dark"><strong>Permanent address</strong></p>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label"></label>
							<div class="col-lg-8">
								<label class="css-control css-control-primary css-checkbox" for="val-terms">
									<textarea name="per-address" id="" cols="90" rows="5"><?php $memberData->per_address; ?></textarea>
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
										<input type="radio" class="form-check-input" name="donation-type" value="one-time" <?php echo ($memberData->donation_type=='one-time')?'checked':''; ?>>One time
									</label>
								</div>
								<div class="form-check-inline">
									<label class="form-check-label">
										<input type="radio" class="form-check-input" name="donation-type" value="monthly" <?php echo ($memberData->donation_type=='monthly')?'checked':''; ?>>Monthly
									</label>
								</div>
								<div class="form-check-inline">
									<label class="form-check-label">
										<input type="radio" class="form-check-input" name="donation-type" value="yearly" <?php echo ($memberData->donation_type=='yearly')?'checked':''; ?>>Yearly
									</label>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="amount">Donation Amount <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="amount" name="amount" placeholder="0.00" value="<?php echo $memberData->amount; ?>">
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
					<?php echo form_open_multipart('members/updateStore/'.$memberData->id, 'class="form-valide"'); ?>
						<input type="hidden" name="reg-type" value="2">
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="name-bn">Name (Bangla) <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="name-bn" name="name-bn" placeholder="Enter your name (Bangla).." value="<?php echo $memberData->name_bn; ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="name-en">Name (English) <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="name-en" name="name-en" placeholder="Enter your name (English).." value="<?php echo $memberData->name_en; ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="mobile">Mobile <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Your Mobile.." value="<?php echo $memberData->mobile; ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="email">Email <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="email" name="email" placeholder="Your email.." value="<?php echo $memberData->email; ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="bgroup">Blood group<span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<select class="form-control" id="bgroup" name="bgroup" style="width: 100%;">
									<option value="none"<?php echo ($memberData->bgroup=='none')?'selected':''; ?>>Don't know</option>
									<option value="A+" <?php echo ($memberData->bgroup=='A+')?'selected':''; ?>>A+</option>
									<option value="A-" <?php echo ($memberData->bgroup=='A-')?'selected':''; ?>>A-</option>
									<option value="B+" <?php echo ($memberData->bgroup=='B+')?'selected':''; ?>>B+</option>
									<option value="B-" <?php echo ($memberData->bgroup=='B-')?'selected':''; ?>>B-</option>
									<option value="O+" <?php echo ($memberData->bgroup=='O+')?'selected':''; ?>>O+</option>
									<option value="O-" <?php echo ($memberData->bgroup=='O-')?'selected':''; ?>>O-</option>
									<option value="AB+"<?php echo ($memberData->bgroup=='AB+')?'selected':''; ?>>AB+</option>
									<option value="AB-"<?php echo ($memberData->bgroup=='AB-')?'selected':''; ?>>AB-</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="gender">Gender<span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<div class="form-check-inline">
									<label class="form-check-label">
										<input type="radio" class="form-check-input" name="gender" value="male" <?php echo ($memberData->gender=='male')?'checked':''; ?>>Male
									</label>
								</div>
								<div class="form-check-inline">
									<label class="form-check-label">
										<input type="radio" class="form-check-input" name="gender" value="female" <?php echo ($memberData->gender=='female')?'checked':''; ?>>Female
									</label>
								</div>
								<div class="form-check-inline">
									<label class="form-check-label">
										<input type="radio" class="form-check-input" name="gender" value="other" <?php echo ($memberData->gender=='other')?'checked':''; ?>>Other
									</label>
								</div>
							</div>
						</div>
						<hr>
						<p class="text-dark"><strong>Present address</strong></p>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label"></label>
							<div class="col-lg-8">
								<label class="css-control css-control-primary css-checkbox" for="val-terms">
									<textarea name="address" id="address" cols="90" rows="5"><?php echo $memberData->address; ?></textarea>
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
										<input type="radio" class="form-check-input" name="donation-type" value="one-time" <?php echo ($memberData->donation_type=='one-time')?'checked':''; ?>>One time
									</label>
								</div>
								<div class="form-check-inline">
									<label class="form-check-label">
										<input type="radio" class="form-check-input" name="donation-type" value="monthly" <?php echo ($memberData->donation_type=='monthly')?'checked':''; ?>>Monthly
									</label>
								</div>
								<div class="form-check-inline">
									<label class="form-check-label">
										<input type="radio" class="form-check-input" name="donation-type" value="yearly" <?php echo ($memberData->donation_type=='yearly')?'checked':''; ?>>Yearly
									</label>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="amount">Donation Amount <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="amount" name="amount" placeholder="0.00" value="<?php echo $memberData->amount; ?>">
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
