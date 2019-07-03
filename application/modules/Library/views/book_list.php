<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * File: book_list.php
 * Created Date: 28 03 2019, 11:05:33 AM
 * Author: Khan Sunny
 * -----
 * Last Modified: 03 07 2019, 2:51:11 PM
 * Modified By: Khan Sunny
 * -----
 * 
 */
$this->load->view('header');
?>
	<div class="row">
		<?php $count =1; foreach ($bookData as $data):  ?>
			<div class="col-md-6">
				<?php //echo $count; ?>
				
					<div class="card">
						<div class="card-body">
							<div class="user-profile">
								<div class="row">
									<div class="col-lg-12">
										<div class="book-image m-b-30">
											<img class="img-fluid"
												src="<?php if(!$data->img_path == NULL ): echo base_url(); ?>assets/upload/books/<?php echo $data->bookid."/".$data->img_path;else:
												echo "https://via.placeholder.com/180/FF6347/FFFFFF/?text=H4S"; endif;
												?>" alt="">
										</div>
										<div class="book-info">
											<h1 class="book-title"><?php echo $data->name; ?></h1>
											<div class="book-author"><a href="#"> <i class="ti-ink-pen"></i> <span><?php echo getValue('author','id',$data->authid,'name'); ?></span></a></div>
											<div class="book-category">	<span>Category :</span> <?php echo getValue('category','id',$data->catid,'name'); ?> </div>
											<div class="book-id">Book ID :  <?php echo $data->bookid; ?></div>
											<div class="book-id"><span>ISBN ID : </span> <?php echo $data->isbn; ?></div>
											<div class="book-available"><i class="ti-arrow-circle-right"></i>  <span style="margin-left: 5px;">In Stock (<?php if($data->tbook<5):echo "<span class='text-danger'>".$data->tbook."</span>"; else: echo  $data->tbook; endif; ?>)</span> </div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				
			</div>
		<?php $count++; endforeach; ?>
	</div>
	<?php $this->load->view('footer');?>
