<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * File: header.php
 * Created Date: 13 03 2019, 1:35:11 PM
 * Author: Khan Sunny
 * -----
 * Last Modified: 21 10 2019, 3:39:52 PM
 * Modified By: Khan Sunny
 * -----
 * 
 */

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Focus Admin: Creative Admin Dashboard</title>
        <!-- ================= Favicon ================== -->
        <!-- Standard -->
        <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
        <!-- Retina iPad Touch Icon-->
        <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
        <!-- Retina iPhone Touch Icon-->
        <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
        <!-- Standard iPad Touch Icon-->
        <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
        <!-- Standard iPhone Touch Icon-->
		<link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
		<!-- fonts -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <!-- Styles -->
        <link href="<?php echo base_url('assets/css/lib/calendar2/pignose.calendar.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/lib/chartist/chartist.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/lib/font-awesome.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/lib/themify-icons.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/lib/owl.carousel.min.css'); ?>" rel="stylesheet" />
        <link href="<?php echo base_url('assets/css/lib/owl.theme.default.min.css'); ?>" rel="stylesheet" />
        <link href="<?php echo base_url('assets/css/lib/weather-icons.css'); ?>" rel="stylesheet" />
		<link href="<?php echo base_url('assets/css/lib/menubar/sidebar.css'); ?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/css/lib/bootstrap-datepicker/bootstrap-datepicker.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/lib/data-table/dataTables.bootstrap.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/lib/data-table/buttons.bootstrap.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/lib/sweetalert/sweetalert.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/lib/bootstrap.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/lib/bootstrap-material-datetimepicker/bootstrap-material-datetimepicker.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/lib/helper.css'); ?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/css/custom.css'); ?>" rel="stylesheet">
    </head>
    <body>
	<?php $this->load->view('sidebar'); ?>
	<?php $this->load->view('head'); ?>
		<div class="content-wrap">
            <div class="main">
                <div class="container-fluid">
                    <section id="main-content">
