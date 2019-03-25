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


	<!-- HEADER MOBILE ICON -->
	<div class="tt-mobile-header">

		<div class="container-fluid tt-top-line">
			<div class="tt-header-row">
				<div class="tt-mobile-parent-menu">
					<a href="<?php echo base_url() ?>">
					<div class="tt-menu-toggle">
						
					</div>
					</a>
				</div>
				<!-- search -->
				<div class="tt-mobile-parent-search tt-parent-box"></div>
				<!-- /search -->
				<!-- cart -->

				<div class="tt-mobile-parent-cart tt-parent-box"></div>
				<!-- /cart -->
				<!-- account -->
				<div class="tt-mobile-parent-account tt-parent-box"></div>
				<!-- /account -->
				<!-- currency -->
				<!-- /currency -->
			</div>
		</div>
	</div>

	<!-- tt-desktop-header -->
	<div class="tt-desktop-header headerunderline">
		<!-- CATEGORIES -->
		<div class="container small-header">

			<div class="tt-header-holder">
				<a href="<?php echo base_url() ?>">
					<div class="tt-menu-toggle">
						<img src="<?php echo base_url('assets/images/custom/logo2.png') ?>" height="30px">
					</div>
					</a>
			
			</div>
		</div>
	</div>
	<!-- /tt-desktop-header -->
	<!-- stuck nav -->
	<div class="tt-stuck-nav">
		<div class="container">
			<div class="tt-header-row ">
				<div class="tt-stuck-desctop-menu-categories"><a href="<?php echo base_url() ?>">
					<div class="tt-menu-toggle">
						<i class="icon-e-30"></i><i>Kembali</i>
					</div>
					</a></div>
				<div class="tt-stuck-parent-menu"></div>
				<div class="tt-stuck-mobile-menu-categories"></div>
				<div class="tt-stuck-parent-search tt-parent-box"></div>
				<div class="tt-stuck-parent-cart tt-parent-box"></div>
				<div class="tt-stuck-parent-account tt-parent-box"></div>
				<div class="tt-stuck-parent-multi tt-parent-box"></div>
			</div>
		</div>
	</div>
</header>

<script src="<?php echo base_url('assets') ?>/external/jquery/jquery.min.js"></script>
<script src="<?php echo base_url('assets') ?>/external/bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>