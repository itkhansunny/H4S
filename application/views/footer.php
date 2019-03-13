<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * File: footer.php
 * Created Date: 13 03 2019, 1:35:27 PM
 * Author: Khan Sunny
 * -----
 * Last Modified: 13 03 2019, 3:48:14 PM
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
        <script src="<?php echo base_url('assets/js/lib/bootstrap.min.js'); ?>"></script><script src="assets/js/scripts.js"></script>
        <!-- bootstrap -->
        <script src="<?php echo base_url('assets/js/lib/calendar-2/moment.latest.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/lib/calendar-2/pignose.calendar.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/lib/calendar-2/pignose.init.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/lib/weather/jquery.simpleWeather.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/lib/weather/weather-init.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/lib/circle-progress/circle-progress.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/lib/circle-progress/circle-progress-init.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/lib/chartist/chartist.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/lib/sparklinechart/jquery.sparkline.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/lib/sparklinechart/sparkline.init.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/lib/owl-carousel/owl.carousel.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/lib/owl-carousel/owl.carousel-init.js'); ?>"></script>
        <!-- scripit init-->
    	<script src="<?php echo base_url('assets/js/dashboard2.js'); ?>"></script>
    </body>
</html>
