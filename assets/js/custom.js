/*
 * File: custom.js
 * Created Date: 17 03 2019, 4:54:58 PM
 * Author: Khan Sunny
 * -----
 * Last Modified: 17 03 2019, 5:03:20 PM
 * Modified By: Khan Sunny
 * -----
 * 
 */
$('#dob').datepicker({
	weekStart: 6,
	daysOfWeekHighlighted: "5",
	autoclose: true,
	todayHighlight: true,
	startView:2,
	format: 'dd/mm/yyyy'
});
$('#dob').datepicker("setDate", new Date());
