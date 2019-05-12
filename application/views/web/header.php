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

	<link rel="icon" type="image/x-icon" href="assets/icon/favicon.ico">
  	<link rel="manifest" href="manifest.json">
	<meta name="viewport" content="viewport-fit=cover, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/theme.css">
	<link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/main.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/minimalect.css" />
   	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/upload.css" />
   	<!-- <link rel="manifest" href="manifest.json"> -->

<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-title" content="Goopiz Lite">
<meta name="msapplication-starturl" content="/">
<!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
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
	</div>
</div>
<!--     <style>
  .initial_spinner_wrapper {
    width: 100%;
    height: 100%;
    z-index: 9999;
    background-color: #fff;
    position: absolute;
  }

  .initial_spinner {
    position: relative;
    top: 45%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: auto;
    width: 60px;
    height: 60px;
  }

  .initial_spinner:before {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 5px solid #fff;
    border-top: 5px solid #2879fe;
    border-radius: 50%;
    content: '';
    animation: initial_spin 1s linear infinite;
  }

  @keyframes initial_spin {
    0% {
      transform: rotate(0deg);
    }
    100% {
      transform: rotate(360deg);
    }
  }
</style>
<div id="loader-wrapper">
    <div id='initial-loader-wrapper' class='initial_spinner_wrapper'>
      <div id='initial-loader' class='initial_spinner'></div>
    </div>
</div> -->
<header>
<style>
.css-tjm0gv-unf-navbar-container {
    height: 40px;
    position: relative;
}
.css-1epzir5 {
    width: 100%;
    top: 0px;
    right: 0px;
    left: 0px;
    position: fixed;
    z-index: 21;
    box-shadow: rgba(0, 0, 0, 0.15) 0px 1px 3px 0px;
}

.css-olgprp {
    width: 100%;
    height: 52px;
/*    color: rgba(0, 0, 0, 0.7);
    background-color: white;*/
	color: #fff;
    background-color: #2879fe;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    position: relative;
    z-index: 1;
    box-shadow: initial;
    transition: background-color 0.24s ease 0s;
}

.css-zpcvgg {
    position: relative;
    width: 48px;
    height: 100%;
    background-color: transparent;
    border-width: 0px;
    border-style: initial;
    border-color: initial;
    border-image: initial;
    outline: none;
}

.css-zpcvgg::before {
    content: "";
    background-color: transparent;
    background-size: 18px 16px;
    position: absolute;
    top: 0px;
    right: 0px;
    bottom: 0px;
    left: 0px;
    background-repeat: no-repeat;
    background-position: center center;
    margin: auto;
}


.css-1a7d65i {
    min-width: 0px;
    padding-right: 0px;
    flex: 1 1 0%;
}
.unf-navbar__title {
    min-width: 0px;
    padding-right: 8px;
    flex: 1 1 0%;
}

.css-1q4sco0-unf-searchbar {
    position: relative;
    margin: 0px;
    transition: margin 0.24s ease 0s;
}
.css-1q4sco0-unf-searchbar::before {
    content: "";
    display: inline-block;
    position: absolute;
    top: 50%;
    left: 6px;
    transform: translateY(-50%);
    width: 20px;
    height: 20px;
    background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjxzdmcgaGVpZ2h0PSIzMnB4IiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCAzMiAzMiIgd2lkdGg9IjMycHgiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6c2tldGNoPSJodHRwOi8vd3d3LmJvaGVtaWFuY29kaW5nLmNvbS9za2V0Y2gvbnMiIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48dGl0bGUvPjxkZXNjLz48ZGVmcy8+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIiBpZD0iUGFnZS0xIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSI+PGcgZmlsbD0iIzkyOTI5MiIgaWQ9Imljb24tMTExLXNlYXJjaCI+PHBhdGggZD0iTTE5LjQyNzExNjQsMjEuNDI3MTE2NCBDMTguMDM3MjQ5NSwyMi40MTc0ODAzIDE2LjMzNjY1MjIsMjMgMTQuNSwyMyBDOS44MDU1NzkzOSwyMyA2LDE5LjE5NDQyMDYgNiwxNC41IEM2LDkuODA1NTc5MzkgOS44MDU1NzkzOSw2IDE0LjUsNiBDMTkuMTk0NDIwNiw2IDIzLDkuODA1NTc5MzkgMjMsMTQuNSBDMjMsMTYuMzM2NjUyMiAyMi40MTc0ODAzLDE4LjAzNzI0OTUgMjEuNDI3MTE2NCwxOS40MjcxMTY0IEwyNy4wMTE5MTc2LDI1LjAxMTkxNzYgQzI3LjU2MjExODYsMjUuNTYyMTE4NiAyNy41NTc1MzEzLDI2LjQ0MjQ2ODcgMjcuMDExNzE4NSwyNi45ODgyODE1IEwyNi45ODgyODE1LDI3LjAxMTcxODUgQzI2LjQ0Mzg2NDgsMjcuNTU2MTM1MiAyNS41NTc2MjA0LDI3LjU1NzYyMDQgMjUuMDExOTE3NiwyNy4wMTE5MTc2IEwxOS40MjcxMTY0LDIxLjQyNzExNjQgTDE5LjQyNzExNjQsMjEuNDI3MTE2NCBaIE0xNC41LDIxIEMxOC4wODk4NTExLDIxIDIxLDE4LjA4OTg1MTEgMjEsMTQuNSBDMjEsMTAuOTEwMTQ4OSAxOC4wODk4NTExLDggMTQuNSw4IEMxMC45MTAxNDg5LDggOCwxMC45MTAxNDg5IDgsMTQuNSBDOCwxOC4wODk4NTExIDEwLjkxMDE0ODksMjEgMTQuNSwyMSBMMTQuNSwyMSBaIiBpZD0ic2VhcmNoIi8+PC9nPjwvZz48L3N2Zz4=);
    background-repeat: no-repeat;
    background-position: center center;
}
.css-1q4sco0-unf-searchbar .unf-searchbar__input {
    display: block;
    height: 36px;
    width: 100%;
    background-color: rgb(246, 246, 246);
    color: rgba(49, 53, 59, 0.68);
    font-size: 1rem;
    line-height: 20px;
    padding: 12px 24px 12px 28px;
    border-width: initial;
    border-style: none;
    border-color: initial;
    border-image: initial;
    border-radius: 8px;
    outline: none;
}
.css-1jzsl4r {
    width: 40px;
    height: 40px;
    cursor: pointer;
    background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTQiIGhlaWdodD0iMTQiIHhtbG5zPSJod…AwIDAgMCA3IDB6IiBmaWxsPSIjOUZBNkIwIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiLz48L3N2Zz4=);
    background-size: 16px;
    background-color: transparent;
    position: absolute;
    right: 0px;
    top: 50%;
    transform: translateY(-50%) scale(0);
    font-size: 0px;
    background-repeat: no-repeat;
    background-position: center center;
    border-width: 0px;
    border-style: initial;
    border-color: initial;
    border-image: initial;
    outline: none;
    transition: transform 0.32s ease 0s;
}
.css-1vy75ml {
    background-color: transparent;
    margin: 0px 4px 0px 10px;
    color: #fff!important;
}
.css-79elbk {
    position: relative;
}
.css-a9tdsy {
    height: 16px;
    max-width: 26px;
    background-color: rgb(234, 33, 45);
    color: rgb(255, 255, 255);
    font-size: 10px;
    display: flex;
    -webkit-box-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    align-items: center;
    position: absolute;
    top: -7px;
    left: 15px;
    z-index: 1;
    font-weight: 800;
    border-radius: 8px;
    padding: 7px;
}
.css-1g63vce {
    background-color: transparent;
    margin: 0px 8px 0px 4px;
}
.css-77ay6q {
    position: relative;
    background-color: transparent;
    margin: 0px 16px 0px 0px;
    padding: 0px;
    border-width: initial;
    border-style: none;
    border-color: initial;
    border-image: initial;
}

/* akun profile */
.css-1q0b0je-unf-card {
    display: block;
    position: relative;
    background-color: rgb(255, 255, 255);
    box-shadow: rgba(49, 53, 59, 0.12) 0px 1px 6px 0px;
    background-image: url(https://images.all-free-download.com/images/graphicthumb/transparent_bubbles_with_background_vector_541557.jpg);
    background-size: cover;
    margin: 16px 0px;
    padding: 16px;
    overflow: hidden;
    background-position: center top;
    border-radius: 4px !important;
}
.css-1kukc4r {
    display: flex;
    margin-bottom: 16px;
}
.css-1mf51g1 {
    width: 40px;
    height: 40px;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 2px 6px 0px;
    border-radius: 50%;
}
img {
    vertical-align: middle;
    border-style: none;
}
.css-1c2mwzn {
    margin-left: 16px;
    flex-direction: column;
    overflow: hidden;
}
.css-2wqymv {
    font-size: 17px;
    font-weight: 600;
    color: rgba(0, 0, 0, 0.7);
    line-height: 22px;
    max-width: 100%;
    text-overflow: ellipsis;
    white-space: nowrap;
    margin: 0px;
    overflow: hidden;
}
.css-1igmekv {
    font-size: 12px;
    color: #000;
    font-style: italic;
}
/* akun profile EOF */
</style>

<nav class="css-tjm0gv-unf-navbar-container">
    <div class="css-1epzir5">
        <div class="unf-navbar css-olgprp">
            <!-- <button class="css-zpcvgg" role="button" aria-label="navbar-menu"></button> -->
            <div class="tt-mobile-parent-menus">
				<div class="tt-menu-toggle">
					<span class="css-1vy75ml">
		            	<i class="icon-h-27" style="font-size: 18px;color: #fff!important"></i>
		            </span>
				</div>
			</div>
            
            <span class="css-1vy75ml">
            	<img src="<?php echo base_url('favicon.ico') ?>" width="28px">
            </span>
            <form action="<?php echo site_url('p/search') ?>" method="get" class="unf-navbar__title css-1a7d65i">
	            <div>
	                <div class="css-1q4sco0-unf-searchbar">
	                    <input name="search" class="unf-searchbar__input" type="text" placeholder="Cari aja yang kamu mau" margin="0" value="<?php echo @$this->input->get('search') ?>">
	                </div>
	            </div>
        	</form>
            <a href="<?php echo site_url('messages') ?>" class="css-77ay6q">
            	<i class="icon-g-88" style="font-size: 18px;color: #fff"></i>
            </a>
            <a href="<?php echo site_url('dashboard') ?>" class="css-77ay6q">
            	<i class="icon-h-23" style="font-size: 18px;color: #fff"></i>
            </a>

        </div>
    </div>
</nav>
<nav class="panel-menu mobile-main-menu">


	<span class="tt-icon icon-e-40"></span>

	<ul>
		<li>
		<!-- profile -->
		<div class="unf-card css-1q0b0je-unf-card">
		    <div class="css-xs3fld">
		        <div role="presentation" class="css-1kukc4r">
		            <img class="css-1mf51g1" src="<?php echo get_photo(user_id()) ?>" alt="profile">
		            <div class="css-1c2mwzn">
		                <div class="css-2wqymv"><?php echo ucwords($user->fullname) ?></div><span class="css-1igmekv">Personal Account</span></div>
		        </div>
		    </div>
		</div>
		</li>
		<!-- profile EOF -->
		<li>
			<a href="<?php echo base_url() ?>">
				<i class="icon-f-74"></i>
				<span>BERANDA</span>
			</a>
		</li>
		<?php if (is_login()) { ?>
		<li>
			<a href="<?php echo base_url('dashboard') ?>">
				<i class="icon-f-19"></i>
				<span>DASHBOARD</span>
			</a>
		</li>
		<?php } ?>
		<li>
			<a href="<?php echo base_url() ?>">
				<i class="icon-f-57"></i>
				<span>KATEGORI</span>
			</a>
			<ul>
				<?php foreach( $data as $kategori) { ?>
				<li>
					<a href="<?php echo base_url('p/detail/' . replace_url_char($kategori->slug)) ?>">
						<i class="<?php echo $kategori->icon ?>"></i>
						<span><?php echo $kategori->detail ?></span>
					</a>
					<ul>
					<?php $parent = $this->kategoryModel->getIdParent($kategori->kategori_id); ?>
					<?php foreach( $parent as $KategoriParent) { ?>
						<li>
							<a href="<?php echo base_url('p/detail/' . replace_url_char($KategoriParent->detail)) ?>">
								<i class="<?php echo $KategoriParent->icon ?>"></i>
								<span><?php echo strtoupper($KategoriParent->detail) ?></span>
							</a>
						</li>
					<?php } ?>
					</ul>
				</li>
				<?php } ?>
			</ul>
		</li>
		<li>
			<a href="<?php echo base_url('page/about') ?>">
				<i class="icon-f-19"></i>
				<span>TENTANG</span>
			</a>
			<ul>
				<li>
					<a href="<?php echo base_url('page/privacy') ?>">
						<i class="icon-f-19"></i>
						<span>KEBIJAKAN PRIVASI</span>
					</a>
				</li>
				<li>
					<a href="<?php echo base_url('page/term') ?>">
						<i class="icon-f-19"></i>
						<span>SYARAT & KETENTUAN</span>
					</a>
				</li>
			</ul>
		</li>
		
	</ul>

	<div class="mm-navbtn-names">
		<div class="mm-closebtn"><?php echo $this->lang->line('close'); ?></div>
		<div class="mm-backbtn"><?php echo $this->lang->line('back'); ?></div>
	</div>
</nav>

</header>

<script src="<?php echo base_url('assets') ?>/external/jquery/jquery.min.js"></script>
<script src="<?php echo base_url('assets') ?>/external/bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/simplePagination.css" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<script src="<?php echo base_url() ?>/assets/js/simplePagination.js"></script>




<script type="text/javascript">
function delete_modal_notif(paramId){
        $.confirm({
            title: '<?php echo $this->lang->line('delete'); ?>!',
            content: '<?php echo $this->lang->line('delete_text_product'); ?>',
            buttons: {
                confirm: function () {
                   $.post( "<?php echo base_url('cart/sku_delete') ?>/", {id:paramId});
                   $("." + paramId).hide('slow');

                   var cart = $('.tt-badge-cart').text();
                   var total = cart - 1;
                   $('.tt-badge-cart').text(total);
                },
                cancel: function () {
                    
                },
            }
        });

}
</script>