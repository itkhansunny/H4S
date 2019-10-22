<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * File: sidebar.php
 * Created Date: 13 03 2019, 2:01:48 PM
 * Author: Khan Sunny
 * -----
 * Last Modified: 20 10 2019, 7:26:13 AM
 * Modified By: Khan Sunny
 * -----
 * 
 */
?>
<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
	<div class="nano">
		<div class="nano-content">
			<ul>
				<li class="logo">
					<a href="<?php echo base_url(); ?>">
						<!-- <img src="assets/images/logo.png" alt="" /> -->
						<span>Hands For Society</span></a>
				</li>
				<li class="label">Main</li>
				<li><a href="<?php echo base_url();?>"><i class="ti-home"></i> Dashboard</a></li>
				<li class="label">Apps</li>
				<li><a class="sidebar-sub-toggle"><i class="ti-bar-chart-alt"></i> Members <span class="sidebar-collapse-icon ti-angle-down"></span></a>
					<ul>
						<li><a href="<?php echo base_url();?>members/add">Add</a></li>
						<li><a href="<?php echo base_url();?>members">All Members</a></li>
					</ul>
				</li>
				<li><a class="sidebar-sub-toggle"><i class="ti-bar-chart-alt"></i> Library <span class="sidebar-collapse-icon ti-angle-down"></span></a>
					<ul>
						<li><a href="<?php echo base_url();?>library/category">Category</a></li>
						<li><a href="<?php echo base_url();?>library/author">Author</a></li>
						<li><a href="<?php echo base_url();?>library/addBook">Book Add</a></li>
						<li><a href="<?php echo base_url();?>library/bookList">Book List</a></li>
					</ul>
				</li>
				<li><a class="sidebar-sub-toggle"><i class="ti-bar-chart-alt"></i> Events <span class="sidebar-collapse-icon ti-angle-down"></span></a>
					<ul>
						<li><a href="<?php echo base_url();?>events/add">Add Events</a></li>
						<li><a href="<?php echo base_url();?>events/upcoming">Upcoming Events</a></li>
						<li><a href="<?php echo base_url();?>events/past">Past Events</a></li>
					</ul>
				</li>
				<li><a href="../documentation/index.html"><i class="ti-file"></i> Documentation</a></li>
				<li><a><i class="ti-close"></i> Logout</a></li>
			</ul>
		</div>
	</div>
</div>
<!-- /# sidebar -->
