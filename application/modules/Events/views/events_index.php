<?php
/*
 * File: events_index.php
 * Created Date: 22 10 2019, 3:03:56 AM
 * Author: Khan Sunny
 * -----
 * Last Modified: 22 10 2019, 11:53:55 AM
 * Modified By: Khan Sunny
 * -----
 * 
 */
$this->load->view('header');
?>
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<h5>List of All Events</h5>
		</div>
	</div>
	<?php
		if(is_array($events_list)):
			foreach ($events_list as $events):
	?>
	<div class="col-lg-4">
		<div class="card">
			<img class="card-img-top" src="<?php echo (is_file("assets/upload/events/19011/221020191571702978.jpg"))?(base_url('assets/upload/events/'.$events->eid.'/'.$events->path)):('https://via.placeholder.com/180/256966/FFFFFF/?text=Event Photo');?>" alt="Event photo missing"> 
			<div class="card-body"> 
				<div class="h5 text-center mt-2"><?php echo $events->name; ?></div>
				<div class="text-left">Start Time:<span class="ml-1"><?php echo date("d/m/Y H:i:s A", strtotime($events->starttime)); ?></span></div>
				<div class="text-left">End Time: <span class="ml-2"><?php echo date("d/m/Y H:i:s A", strtotime($events->endtime)); ?></span></div>
				<div class="text-left">Venue: <span class="ml-4 pl-1"><?php echo $events->venue; ?></span></div>
				<?php
				echo file_exists("http://localhost/project/h4s/assets/upload/events/19006/");
				
				if(strtotime($events->endtime)<time()){
					echo "<div class=text-danger mt-3><i>**Note: This event already end</i></div>";
				}
				?>
			</div>
			<hr>
			<div>
			<?php if(strtotime($events->endtime)<time()){ ?>
				<button class="btn btn-primary float-left" id="left" style="color:white" disabled> 
					Edit Event
				</button>
				<button class="btn btn-danger float-right" id="right" style="color:white" disabled> 
					Delete Event 
				</button> 
			<?php } else{ ?>
				<button class="btn btn-primary float-left" id="left" style="color:white"> 
				Edit Event
			</button>
			<button class="btn btn-danger float-right" id="right" style="color:white"> 
				Delete Event 
			</button> 
			<?php } ?>
				
			</div> 
		</div> 
	</div>
	<?php endforeach; else: echo "pl"; endif;  ?>
</div>
<?php $this->load->view('footer'); ?>
