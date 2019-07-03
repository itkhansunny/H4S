<?php 
/*
 * File: book_add.php
 * Created Date: 03 07 2019, 10:45:03 AM
 * Author: Khan Sunny
 * -----
 * Last Modified: 03 07 2019, 12:32:37 PM
 * Modified By: Khan Sunny
 * -----
 * 
 */
$this->load->view('header');
?>
<div class="row d-flex justify-content-center">
	<div class="col-lg-6">
		<div class="card">
            <div class="card-title pr">
                <h4>Add New Book</h4>
            </div>
			<div class="card-body">
			<?php echo msg_validation(); ?>
			<?php flashMsg(); ?>
				<div class="form-validation">
					<?php echo form_open_multipart('library/storeBook', 'class="form-valide"'); ?>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="name">Book Name<span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="name" name="name" placeholder="Enter new book name.." value="<?php echo set_value('name'); ?>" required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="category">Category Name<span class="text-danger">*</span></label>
							<div class="col-lg-8">
                                <select class="js-select2 form-control valid" id="category" name="category" style="width: 100%;" required>
                                    <option>Select one</option>
                                    <?php if(is_array($categoriesData)): foreach ($categoriesData as $data): ?>
                                        <option value="<?php echo $data->id; ?>"><?php echo $data->name; ?></option>
                                    <?php endforeach; endif; ?>
                                </select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="author">Author Name<span class="text-danger">*</span></label>
                            <div class="col-lg-8">
                                <select class="js-select2 form-control valid" id="author" name="author" style="width: 100%;" required>
                                    <option>Select one</option>
                                    <?php if(is_array($authorsData)): foreach ($authorsData as $data): ?>
                                        <option value="<?php echo $data->id; ?>"><?php echo $data->name; ?></option>
                                    <?php endforeach; endif; ?>
                                </select>
                            </div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="tbook">Total Book<span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="number" class="form-control" id="tbook" name="tbook" placeholder="Enter total number of book.." value="<?php echo set_value('tbook'); ?> required">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="bookid">Book ID<span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="number" class="form-control" id="bookid" name="bookid" placeholder="Enter book ID.." value="<?php echo set_value('tbook'); ?> required">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="isbn">Book ISBN</label>
							<div class="col-lg-8">
								<input type="number" class="form-control" id="isbn" name="isbn" placeholder="Enter ISBN.." value="<?php echo set_value('tbook'); ?>">
							</div>
						</div>
						<hr>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="confirm-password">Book Image <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<div id="imagePreview"></div>
								<div class="upload-btn-wrapper">
									<button class="btn btn-success">Chose a file</button>
									<input id="imageUpload"  type="file" name="bookImage"/>
								</div>
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
</div>
<?php
$this->load->view('footer');
?>