/*
 * File: custom.js
 * Created Date: 17 03 2019, 4:54:58 PM
 * Author: Khan Sunny
 * -----
 * Last Modified: 22 10 2019, 5:20:39 AM
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

//# Delete confirmation via sweet alert
$(".sweet-success-cancel").on('click', function(event){
	var url = $(this).attr('href');
    swal({
            title: "Are you sure to delete ?",
            text: "You will not be able to recover this member information !!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "Crimson",
            confirmButtonText: "Yes, delete it !!",
            cancelButtonText: "No, cancel it !!",
            closeOnConfirm: false,
            closeOnCancel: false
        },
        function(isConfirm){
			if (isConfirm){
			$.ajax({
				url: url,
				type: "POST",
				success: function () {
					swal({title: "Done!",text: "It was successfully deleted!",type: "success"},function () {
						location.reload();
					});
				},
				error: function (xhr, ajaxOptions, thrownError) {
					swal("Error deleting!", "Please try again", "error");
				}
			});
			}else{
				swal("Canceled!", "Your data is safe!", "info");
			}
        });
});

//# Member type chooser radio button
$(function() {
	$("#form-1").hide();
	$("#form-2").hide();
	$("#form-"+$("[checked]").val()).show('slow');
    $("[name=reg-type]").click(function(){
            $('.member-regi').hide();
            $("#form-"+$(this).val()).show('slow');
    });
});

//# Event start Selector
$('#starttime').bootstrapMaterialDatePicker({ 
	weekStart : 0,
	shortTime:true,
	format : 'DD/MM/YYYY hh:mm A',
	clearButton:true,
	nowButton:true,
	switchOnClick:true
});

//# Event end Selector
$('#endtime').bootstrapMaterialDatePicker({ 
	weekStart : 0,
	shortTime:true,
	format : 'DD/MM/YYYY hh:mm A',
	clearButton:true,
	nowButton:true,
	switchOnClick:true
});


// $('#bootstrap').DataTable({
// 	dom: 'lBfrtip',
// 	lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
// 	buttons: [
// 		'copy', 'csv', 'excel', 'pdf', 'print'
// 	]
// });


// (function ($) {
//     //    "use strict";


//     /*  Data Table
//     -------------*/

//  	// $('#bootstrap-data-table').DataTable();


//     $('#bootstrap-data-table').DataTable({
//         lengthMenu: [[10, 20, 50, -1], [10, 20, 50, "All"]],
//     });



//     $('#booklist').DataTable({
//         dom: 'f',
        
//     });
	
// })(jQuery);
