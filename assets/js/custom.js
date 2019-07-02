/*
 * File: custom.js
 * Created Date: 17 03 2019, 4:54:58 PM
 * Author: Khan Sunny
 * -----
 * Last Modified: 03 07 2019, 2:15:43 AM
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

$(".button").on('click', function(event){
	console.log('Clicked');
	var url = $(this).attr('href');
	console.log('Clicked');
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
