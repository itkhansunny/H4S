<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * File: members_update.php
 * Created Date: 28 03 2019, 7:37:22 PM
 * Author: Khan Sunny
 * -----
 * Last Modified: 03 07 2019, 1:04:50 AM
 * Modified By: Khan Sunny
 * -----
 * 
 */
$this->load->view('header');
?>

<div class="row d-flex justify-content-center">
	<div class="col-lg-4">
		<div class="card">
			<div class="card-title pr">
                <h4>Update Category Name</h4>
            </div>
			<div class="card-body">
			<?php echo msg_validation(); ?>
			<?php if(isset($msg_error)) { echo msg_error($msg_error); } ?>
			<?php if(isset($msg_success)) { echo msg_success($msg_success); } ?>
				<div class="form-validation">
					<?php if(is_array($categoryData)):foreach ($categoryData as $data):?>
					<?php echo form_open_multipart('library/updateCategoryStore/'.$data->id, 'class="form-valide"'); ?>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="name">Name <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="name" name="name" placeholder="Enter category name.." value="<?php echo $data->name; ?>">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-lg-8 ml-auto">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</div>
					<?php echo form_close(); endforeach; endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('footer'); ?>
