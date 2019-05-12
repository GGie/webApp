<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title><?php echo  (ENVIRONMENT === 'development') ?  '{elapsed_time}' : ($title != '') ? @$title : 'Goopiz' ?></title>
	<meta name="keywords" content="<?php echo  (ENVIRONMENT === 'development') ?  '{elapsed_time}' : ($title != '') ? @$title : 'Goopiz' ?>">
	<meta name="description" content="<?php echo  (ENVIRONMENT === 'development') ?  '{elapsed_time}' : ($desc != '') ? @$desc : 'Goopiz' ?>">
	<meta name="theme-color" content="#2879fa">
	  <meta name="msapplication-navbutton-color" content="#2879fa">
	  <meta name="keywords" content="Social E Commerce">
	  <meta name="description" content="Social E Commerce">
	  <meta name="author" content="goopiz official">
	<link rel="shortcut icon" href="<?php echo base_url('favicon.ico') ?>">
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<link rel="manifest" href="manifest.json">
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/theme.css">
  	<link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/main.min.css">
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
	padding: 12px 5px 5px 0px;
	font-size: 18px;
}
.tt-mobile-header .tt-top-line {
font-weight: bold;
}
.css-fsr8b3 {
    width: 52px;
    height: 100%;
    display: flex;
    position: relative;
}
.css-fsr8b3::before {
    content: "";
    width: 100%;
    height: 100%;
    background-color: transparent;
    background-size: 20px 20px;
    background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMTkiIHhtbG5zPSJod…N0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIvPjwvc3ZnPg==);
    position: absolute;
    top: 0px;
    right: 0px;
    bottom: 0px;
    left: 0px;
    background-repeat: no-repeat;
    background-position: center center;
    margin: auto;
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
							<div class="icon-e-30"></div>
						</div>
						 
					</div>
			<div class="tt-header-row">				
				<div class="header-content">
					<div class="float-right">
						<div id="title"> <?php echo @$title ?></div>
					</div>
					 
				</div>
				<!-- search -->
				<!-- /search -->
			</div>
		</div>
		</a>
	</div>

</header>

<script src="<?php echo base_url('assets') ?>/external/jquery/jquery.min.js"></script>
<script src="<?php echo base_url('assets') ?>/external/bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>