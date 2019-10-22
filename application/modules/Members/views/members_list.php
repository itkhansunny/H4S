<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * File: members_list.php
 * Created Date: 28 03 2019, 11:05:33 AM
 * Author: Khan Sunny
 * -----
 * Last Modified: 20 10 2019, 6:20:35 AM
 * Modified By: Khan Sunny
 * -----
 * 
 */
$this->load->view('header');?>
<section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>SL</th>
                                                    <th>Name</th>
                                                    <th>Member ID</th>
                                                    <th>Address</th>
                                                    <th>Email</th>
                                                    <th>Mobile</th>
                                                    <th>Manage</th>
                                                </tr>
                                            </thead>
                                            <tbody>
												<?php $count =1; foreach ($membersData as $data):  ?>
                                                <tr>
                                                    <td><?php echo $count; ?> </td>
                                                    <td><?php echo $data->name_en; ?> </td>
                                                    <td><?php echo $data->mid; ?></td>
													<td><?php echo $data->address; ?></td>
                                                    <td><?php echo $data->email; ?></td>
                                                    <td><?php echo $data->mobile; ?></td>
                                                    <td>
														<a href="<?php echo base_url().'member/'.$data->id; ?>" class="btn btn-success btn-sm">View</a>
														<a href="<?php echo base_url().'members/update/'.$data->id; ?>" class="btn btn-warning btn-sm">Update</a>
														<button href="<?php echo base_url().'members/delete/'.$data->id; ?>" class="btn btn-danger btn-sm sweet-success-cancel">Delete</button>
													</td>
												</tr>
												<?php $count++; endforeach; ?>
                                            </tbody>
                                        </table>
									</div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->
<?php $this->load->view('footer');?>
