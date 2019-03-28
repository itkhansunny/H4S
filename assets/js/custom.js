/*
 * File: custom.js
 * Created Date: 17 03 2019, 4:54:58 PM
 * Author: Khan Sunny
 * -----
 * Last Modified: 29 03 2019, 1:54:14 AM
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
document.querySelector('.sweet-success-cancel').onclick = function(){
	var url = $(this).attr('href');
    swal({
            title: "Are you sure to delete ?",
            text: "You will not be able to recover this member information !!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it !!",
            cancelButtonText: "No, cancel it !!",
            closeOnConfirm: false,
            closeOnCancel: false
        },
        function(isConfirm){
            if (isConfirm) {
				window.location.replace(url);
            }
            else {
                swal("Cancelled !!", "Hey, your imaginary file is safe !!", "error");
            }
        });
};
