<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * File: members_update.php
 * Created Date: 28 03 2019, 7:37:22 PM
 * Author: Khan Sunny
 * -----
 * Last Modified: 28 03 2019, 9:39:41 PM
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
					<?php foreach ($memberData as $data):?>
					<?php echo form_open_multipart('members/updateStore/'.$data->id, 'class="form-valide"'); ?>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="name-bn">Name (Bangla) <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="name-bn" name="name-bn" placeholder="Enter your name (Bangla).." value="<?php echo $data->name_bn; ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="name-en">Name (English) <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="name-en" name="name-en" placeholder="Enter your name (English).." value="<?php echo $data->name_en; ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="fname">Father's Name <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="fname" name="fname" placeholder="Enter your father's name.." value="<?php echo $data->fname; ?>" >
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="mname">Mother's Name <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="mname" name="mname" placeholder="Enter your mother's name.." value="<?php echo $data->mname; ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="mobile">Mobile <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Your valid Mobile.." value="<?php echo $data->mobile; ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="fbid">Facebook ID <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="fbid" name="fbid" placeholder="Your valid facebook address.." value="<?php echo $data->fbid; ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="email">Email <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="email" name="email" placeholder="Your valid email.." value="<?php echo $data->email; ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="bgroup">Blood group <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<select class="js-select2 form-control" id="bgroup" name="bgroup" style="width: 100%;"
								 data-placeholder="Choose one..">
									<option value="none" <?php echo $data->bgroup=='none'?'selected':'' ?>>Don't know</option>
									<option value="A+"	<?php echo $data->bgroup=='A+'?'selected':'' ?>>A+</option>
									<option value="A-"	<?php echo $data->bgroup=='A-'?'selected':'' ?>>A-</option>
									<option value="B+"	<?php echo $data->bgroup=='B+'?'selected':'' ?>>B+</option>
									<option value="B-"	<?php echo $data->bgroup=='B-'?'selected':'' ?>>B-</option>
									<option value="O+"	<?php echo $data->bgroup=='O+'?'selected':'' ?>>O+</option>
									<option value="O-"	<?php echo $data->bgroup=='O-'?'selected':'' ?>>O-</option>
									<option value="AB+"	<?php echo $data->bgroup=='AB+'?'selected':'' ?>>AB+</option>
									<option value="AB-"	<?php echo $data->bgroup=='AB-'?'selected':'' ?>>AB-</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="dob">Date of Birth<span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="dob" name="dob" placeholder="Your valid date of birth.." value="<?php echo $data->dob; ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="gender">Gender<span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<div class="form-check-inline">
									<label class="form-check-label">
										<input type="radio" class="form-check-input" name="gender" value="male" <?php echo $data->gender=='male'?'checked':'' ?>>Male
									</label>
								</div>
								<div class="form-check-inline">
									<label class="form-check-label">
										<input type="radio" class="form-check-input" name="gender" value="female" <?php echo $data->gender=='female'?'checked':'' ?>>Female
									</label>
								</div>
								<div class="form-check-inline">
									<label class="form-check-label">
										<input type="radio" class="form-check-input" name="gender" value="other" <?php echo $data->gender=='other'?'checked':'' ?>>Other
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
									<option value="Islam" <?php echo $data->religion=='Islam'?'selected':'' ?>>Islam</option>
									<option value="Hinduism" <?php echo $data->religion=='Hinduism'?'selected':'' ?>>Hinduism</option>
									<option value="Christianity" <?php echo $data->religion=='Christianity'?'selected':'' ?>>Christianity</option>
									<option value="Buddhism" <?php echo $data->religion=='Buddhism'?'selected':'' ?>>Buddhism</option>
									<option value="None" <?php echo $data->religion=='None'?'selected':'' ?>>None</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="occupation">Occupation <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="occupation" name="occupation" placeholder="Enter your occupation name.." value="<?php echo $data->occupation; ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="institute">Institute name <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="institute" name="institute" placeholder="Enter your institute name.." value="<?php echo $data->institute; ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="eduquali">Education qualification <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="eduquali" name="eduquali" placeholder="Enter your education qualification.." value="<?php echo $data->eduquali; ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="nidno">NID number <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="number" class="form-control" id="nidno" name="nidno" placeholder="Enter your valid NID name.." value="<?php echo $data->nidno; ?>">
							</div>
						</div>
						<hr>
						<p class="text-dark"><strong>Permanent address</strong></p>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="per-village">Village <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="per-village" name="per-village" placeholder="Enter your village name.." value="<?php echo $data->per_village; ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="per-poffice">Post Office <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="per-poffice" name="per-poffice" placeholder="Enter your post office name.." value="<?php echo $data->per_poffice; ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="per-thana">Thana <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="per-thana" name="per-thana" placeholder="Enter your thana name.." value="<?php echo $data->per_thana; ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="per-upzilla">Upzilla <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="per-upzilla" name="per-upzilla" placeholder="Enter your upzilla name.." value="<?php echo $data->per_upzilla; ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="per-zilla">Zilla <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="per-zilla" name="per-zilla" placeholder="Enter your zilla name.." value="<?php echo $data->per_zilla; ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="per-division">Division <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="per-division" name="per-division" placeholder="Enter your division name.." value="<?php echo $data->per_division; ?>">
							</div>
						</div>
						<hr>
						<p class="text-dark"><strong>Present address</strong></p>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="pre-village">Village <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="pre-village" name="pre-village" placeholder="Enter your village name.." value="<?php echo $data->pre_village; ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="pre-poffice">Post Office <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="pre-poffice" name="pre-poffice" placeholder="Enter your post office  name.." value="<?php echo $data->pre_poffice; ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="pre-thana">Thana <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="pre-thana" name="pre-thana" placeholder="Enter your valid thana name.." value="<?php echo $data->pre_thana; ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="pre-upzilla">Upzilla <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="pre-upzilla" name="pre-upzilla" placeholder="Enter your upzilla name.." value="<?php echo $data->pre_upzilla; ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="pre-zilla">Zilla <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="pre-zilla" name="pre-zilla" placeholder="Enter your zilla name.." value="<?php echo $data->pre_zilla; ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="pre-division">Division <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="pre-division" name="pre-division" placeholder="Enter your division name.." value="<?php echo $data->pre_division; ?>">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-lg-8 ml-auto">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</div>
					<?php echo form_close(); endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('footer'); ?>
