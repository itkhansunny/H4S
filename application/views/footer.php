<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * File: footer.php
 * Created Date: 13 03 2019, 1:35:27 PM
 * Author: Khan Sunny
 * -----
 * Last Modified: 17 03 2019, 10:38:22 PM
 * Modified By: Khan Sunny
 * -----
 * 
 */

?>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="footer">
                                    <p><?php echo date('Y') ?> &copy Hands For Society. This application built with Codeigniter <?php echo CI_VERSION ?>. Page render time {elapsed_time} sec. Page size: {memory_usage}</p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!-- jquery vendor -->
        <script src="<?php echo base_url('assets/js/lib/jquery.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/lib/jquery.nanoscroller.min.js'); ?>"></script>
		
        <!-- nano scroller -->
        <script src="<?php echo base_url('assets/js/lib/menubar/sidebar.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/lib/preloader/pace.min.js'); ?>"></script>
		
		<!-- sidebar -->
		<script src="<?php echo base_url('assets/js/lib/select2/select2.full.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/lib/form-validation/jquery.validate.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/lib/form-validation/jquery.validate-init.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/lib/bootstrap-datepicker/bootstrap-datepicker.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/lib/bootstrap.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/scripts.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>
		
    </body>
</html>
