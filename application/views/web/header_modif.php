<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title><?php echo  (ENVIRONMENT === 'development') ?  '{elapsed_time}' : ($title != '') ? @$title : 'Goopiz' ?></title>
	<meta name="keywords" content="HTML5 Template">
	<meta name="description" content="Wokiee - Responsive HTML5 Template">
	<meta name="author" content="wokiee">
	<link rel="shortcut icon" href="<?php echo base_url('favicon.ico') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/theme.css">
	   <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/minimalect.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/upload.css" />
</head>
<body>

<div id="loader-wrapper">
	<div id="loader">
		<div class="dot"></div>
		<div class="dot"></div>
		<div class="dot"></div>
		<div class="dot"></div>
		<div class="dot"></div>
		<div class="dot"></div>
		<div class="dot"></div>
	</div>
</div>

<header>

<style type="text/css">
	.header-content {
		margin-left:6px;
		padding: 12px 5px 5px 0px;
		font-weight: bold;
		font-size: 18px;
	}
</style>
	<!-- HEADER MOBILE ICON -->
	<div class="tt-mobile-header tt-dropdown-menu fixed-top" style="display: block;
    background: #fff;
    box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;">
		<a href="<?php echo @$link ?>">
		<div class="container-fluid tt-top-line">
			<div class="header-content row float-left">
						<div class="col-xs-2 col-md-2 col-lg-2 float-left">
							<i class="icon-e-30"></i>
						</div>
						 
					</div>
			<div class="tt-header-row">				
				<div class="header-content row">
					<div class="float-right">
						<i> <?php echo @$title ?></i>
					</div>
					 
				</div>
				<!-- search -->
				<!-- /search -->
			</div>
		</div>
		</a>
	</div>


	<!-- /tt-desktop-header -->
	<!-- stuck nav -->

</header>

<script src="<?php echo base_url('assets') ?>/external/jquery/jquery.min.js"></script>
<script src="<?php echo base_url('assets') ?>/external/bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>