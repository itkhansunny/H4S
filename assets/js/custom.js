/*
 * File: custom.js
 * Created Date: 17 03 2019, 4:54:58 PM
 * Author: Khan Sunny
 * -----
 * Last Modified: 18 03 2019, 12:22:11 AM
 * Modified By: Khan Sunny
 * -----
 * 
 */

//# Bootstrap date picker
$('#dob').datepicker({
	weekStart: 6,
	daysOfWeekHighlighted: "5",
	autoclose: true,
	todayHighlight: true,
	startView:2,
	format: 'dd/mm/yyyy'
});
$('#dob').datepicker("setDate", new Date());

//# Upload photo preview
function readURL(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();
		reader.onload = function(e) {
			$('#imagePreview').css('background-image', 'url('+e.target.result +')');
			$('#imagePreview').css('border', '2px solid #2d7eff');
			$('#imagePreview').hide();
			$('#imagePreview').fadeIn(650);
		}
		reader.readAsDataURL(input.files[0]);
	}
}
$("#imageUpload").change(function() {
	readURL(this);
});  
