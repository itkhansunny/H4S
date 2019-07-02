<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * File: members_add.php
 * Created Date: 13 03 2019, 5:01:46 PM
 * Author: Khan Sunny
 * -----
 * Last Modified: 03 07 2019, 1:25:45 AM
 * Modified By: Khan Sunny
 * -----
 * 
 */

$this->load->view('header');

?>
<div class="row" style="min-height:456px">
	<div class="col-lg-4">
		<div class="card">
			<div class="card-title pr">
                <h4>Create Category</h4>
            </div>
			<div class="card-body">
			<?php echo msg_validation(); ?>
			<?php if(isset($msg_error)) { echo msg_error($msg_error); } ?>
			<?php if(isset($msg_success)) { echo msg_success($msg_success); } ?>
				<div class="form-validation">
					<?php echo form_open_multipart('library/storeCategory', 'class="form-valide"'); ?>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="name">Name<span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="name" name="name" placeholder="Enter category name.." value="<?php echo set_value('name'); ?>">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-lg-8 ml-auto">
								<button type="reset" class="btn btn-info">Reset</button>
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</div>
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-8">
	<div class="card">
	<div class="card-title pr">
                <h4>Category List</h4>
            </div>
			<?php flashMsg(); ?>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>SL</th>
                                                    <th>Category Name</th>
                                                    <th>Create Date</th>
                                                    <th>Update Date</th>
                                                    <th>Manage</th>
                                                </tr>
                                            </thead>
                                            <tbody>
												<?php if(is_array($categoriesData)): $count =1; foreach ($categoriesData as $data):  ?>
                                                <tr>
                                                    <td><?php echo $count; ?> </td>
                                                    <td><?php echo $data->name; ?> </td>
                                                    <td><?php echo $data->cdate; ?></td>
                                                    <td><?php echo $data->udate; ?></td>
                                                    <td>
														<a href="<?php echo base_url().'library/updateCategory/'.$data->id; ?>" class="btn btn-warning btn-sm">Update</a>
														<button href="<?php echo base_url().'library/deleteCategory/'.$data->id; ?>" class="btn btn-danger btn-sm sweet-success-cancel">Delete</button>
													</td>
												</tr>
												<?php $count++; endforeach; endif; ?>
                                            </tbody>
                                        </table>
									</div>
                                </div>
                            </div>
	</div>
</div>
<?php $this->load->view('footer'); ?>
