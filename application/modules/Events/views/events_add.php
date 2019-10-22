<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * File: members_add.php
 * Created Date: 13 03 2019, 5:01:46 PM
 * Author: Khan Sunny
 * -----
 * Last Modified: 22 10 2019, 5:52:14 AM
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
					<div class="ml-2"><span class="h3">Add New Event<span></div>
					<div class="form-group row">
						<div class="col-lg-12">
							<?php echo msg_validation(); ?>
							<?php if(isset($msg_error)) { echo msg_error($msg_error); } ?>
							<?php if(isset($msg_success)) { echo msg_success($msg_success); } ?>
						</div>
					</div>
					<div class="form-validation">
					<?php echo form_open_multipart("events/store", "class=form-valide"); ?>
						<div class="form-group row">
							<label class="col-lg-12 col-form-label" for="name"><span class="h5">Events Name<span><span class="text-danger">*</span></label>
							<div class="col-lg-12">
								<input type="text" class="form-control" id="name" name="name" placeholder="Enter your name (Bangla).." value="<?php echo set_value('name-bn'); ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-12 col-form-label" for="starttime"><span class="h5">Events Start Date<span><span class="text-danger">*</span></label>
							<div class="col-lg-4">
								<input type="text" class="form-control" id="starttime" name="starttime" placeholder="DD/MM/YYYY hh:mm A" value="<?php echo set_value('startdate'); ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-12 col-form-label" for="endtime"><span class="h5">Events End Date<span><span class="text-danger">*</span></label>
							<div class="col-lg-4">
								<input type="text" class="form-control" id="endtime" name="endtime" placeholder="DD/MM/YYYY hh:mm A" value="<?php echo set_value('enddate'); ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-12 col-form-label" for="venue"><span class="h5">Events Venue<span><span class="text-danger">*</span></label>
							<div class="col-lg-12">
								<input type="text" class="form-control" id="venue" name="venue" placeholder="Enter event venue" value="<?php echo set_value('venue'); ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-12 col-form-label" for="details"><span class="h5">Events Details<span><span class="text-danger">*</span></label>
							<div class="col-lg-12">
								<textarea id="details" name="details" cols="90" rows="5"><?php echo set_value('details'); ?></textarea>
							</div>
							<script src="https://cdn.tiny.cloud/1/3s41mtatzftttp70l1nwoowm0y20ebrzuu5pwcffz9l53tjz/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
							<script>tinymce.init({ selector:'#details' });</script>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="imageUpload"><span class="h5">Events Photo/Banner<span><span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<div id="imagePreview"></div>
								<div class="upload-btn-wrapper">
									<button class="btn btn-success">Chose a file</button>
									<input id="imageUpload"  type="file" name="eventphoto"/>
								</div>
							</div>
						</div>
						<hr>
						<div class="form-group row">
							<div class="col-lg-8 ml-auto">
								<button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i>  Save</button>
							</div>
						</div>
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('footer'); ?>
