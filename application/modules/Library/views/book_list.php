<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * File: book_list.php
 * Created Date: 28 03 2019, 11:05:33 AM
 * Author: Khan Sunny
 * -----
 * Last Modified: 27 06 2019, 12:38:53 AM
 * Modified By: Khan Sunny
 * -----
 * 
 */
$this->load->view('header');?>
<section id="main-content">
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
												src="<?php echo base_url(); ?>assets/images/user-profile.jpg" alt="">
										</div>
										<div class="book-info">
											<div class="book-title">আমার বন্ধু রাশেদ</div>
											<div class="book-author"><i class="ti-ink-pen"></i> <span>ড. জাফর ইকবাল</span> </div>
											<!-- <div class="ratings">
												<h4>Ratings</h4>
												<div class="rating-star">
													<span>8.9</span>
													<i class="ti-star color-primary"></i>
													<i class="ti-star color-primary"></i>
													<i class="ti-star color-primary"></i>
													<i class="ti-star color-primary"></i>
													<i class="ti-star"></i>
												</div>
											</div> -->
											<div class="book-category">	<span>Category :</span> গল্প </div>
											<div class="book-id">  <span>Book ID : </span> 15</div>
											<div class="book-available"><i class="ti-arrow-circle-right"></i>  <span>In Stock (50+ copies available)</span> </div>
											
										</div>
										
										<!-- <div class="custom-tab user-profile-tab">
											<ul class="nav nav-tabs" role="tablist">
												<li role="presentation" class="active">
													<a href="#1" aria-controls="1" role="tab" data-toggle="tab">About</a>
												</li>
											</ul>
											<div class="tab-content">
												<div role="tabpanel" class="tab-pane active" id="1">
													<div class="contact-information">
														<h4>Contact information</h4>
														<div class="phone-content">
															<span class="contact-title">Phone:</span>
															<span class="phone-number">+8801629599859</span>
														</div>
														<div class="address-content">
															<span class="contact-title">Address:</span>
															<span class="mail-address">123, Rajar Goli, South Mugda</span>
														</div>
														<div class="email-content">
															<span class="contact-title">Email:</span>
															<span class="contact-email">hello@Admin Board.com</span>
														</div>
														<div class="website-content">
															<span class="contact-title">Website:</span>
															<span class="contact-website">www.Admin Board.com</span>
														</div>
														<div class="skype-content">
															<span class="contact-title">Skype:</span>
															<span class="contact-skype">Admin Board</span>
														</div>
													</div>
													<div class="basic-information">
														<h4>Basic information</h4>
														<div class="birthday-content">
															<span class="contact-title">Birthday:</span>
															<span class="birth-date">January 31, 1990 </span>
														</div>
														<div class="gender-content">
															<span class="contact-title">Gender:</span>
															<span class="gender">Male</span>
														</div>
													</div>
												</div>
											</div>
										</div> -->
									</div>
								</div>
							</div>
						</div>
					</div>
				
			</div>
		<?php $count++; endforeach; ?>
		
	</div>
	<?php $this->load->view('footer');?>
