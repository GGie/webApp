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
		<div class="dot"></div>
	</div>
</div>

<header>
	<!-- MENU MOBILE -->
	<nav class="panel-menu mobile-main-menu">
		<span class="tt-icon icon-e-40"></span>
		<ul>
			<li>
				<a href="<?php echo base_url() ?>">
					<i class="icon-f-74"></i>
					<span>HOME</span>
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
			
		</ul>

		<div class="mm-navbtn-names">
			<div class="mm-closebtn"><?php echo $this->lang->line('close'); ?></div>
			<div class="mm-backbtn"><?php echo $this->lang->line('back'); ?></div>
		</div>
	</nav>

	<!-- HEADER MOBILE ICON -->
	<div class="tt-mobile-header">

		<div class="container-fluid tt-top-line">
			<div class="tt-header-row">
				<div class="tt-mobile-parent-menu">
					<div class="tt-menu-toggle">
						<i class="icon-03"></i>
					</div>
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
				<div class="tt-col-obj tt-obj-logo">
					<!-- logo -->
					<a class="" href="<?php echo base_url() ?>">
						<img src="<?php echo base_url('assets') ?>/images/custom/logo.png" alt="" height="39px" style="padding-right: 10px">
					</a>
					<!-- /logo -->
				</div>
				<div class="tt-col-obj tt-obj-menu-categories tt-desctop-parent-menu-categories">
					<div class="tt-menu-categories">
						<button class="tt-dropdown-toggle">
							<i class="icon-f-39"></i>
							KATEGORI BELANJA
						</button>
						<div class="tt-dropdown-menu">
							<nav>
								<ul>
								<?php foreach( $data as $kategori) { ?>
									<li>
										<a href="<?php echo base_url('p/detail/' . replace_url_char($kategori->slug)) ?>">
											<i class="<?php echo $kategori->icon ?>"></i>
											<span><?php echo $kategori->detail ?></span>
										</a>
										<div class="dropdown-menu size-md">
									       <div class="dropdown-menu-wrapper">
									       		<div class="row">
													<div class="col-sm-4">
														<div class="row tt-col-list">
															
															<div class="col-sm-4">
																<a class="tt-title-submenu" href="javascript:void(0)">
																	DETAIL
																	<img  src="<?php echo base_url('assets') ?>/images/loader.svg" data-src="<?php echo base_url('assets') ?>/images/custom/header-category-02.jpg" alt="">
																</a>
																<ul class="tt-megamenu-submenu">
																<?php $parent = $this->kategoryModel->getIdParent($kategori->kategori_id); ?>
																<?php foreach( $parent as $KategoriParent) { ?>
																	<li><a href="<?php echo base_url('p/detail/' . replace_url_char($KategoriParent->slug)) ?>"><span class="tt-badge tt-fatured"><?php echo $KategoriParent->detail ?></span></a></li>
																<?php } ?>
																</ul>
															</div>
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-sm-12">
														<a href="listing-left-column.html" class="tt-promo-02">
															<img src="<?php echo base_url('assets') ?>/images/custom/header-promo-01.jpg" alt="">
															<div class="tt-description tt-point-h-l">
																<div class="tt-description-wrapper">
																	<div class="tt-title-small">SUMMER <span class="tt-base-color">2018</span></div>
																	<div class="tt-title-large">NEW ARRIVALS</div>
																</div>
															</div>
														</a>
													</div>
												</div>
									       </div>

									    </div>
									</li>
								<?php } ?>
								</ul>
							</nav>
						</div>
					</div>
				</div>

				<!-- menu -->
				<div class="tt-col-obj tt-obj-menu">
					<!-- tt-menu -->
					<div class="tt-desctop-parent-menu tt-parent-box">
						<div class="tt-desctop-menu">
							<nav>
								<ul>
									<li class="dropdown">
										<div class="tt-col-obj tt-obj-search-type2">
											<div class="tt-search-type2">
									 			<!-- tt-search -->
												<form action="<?php echo site_url('p/search') ?>" method="get" role="search">
													<i class="icon-f-85"></i>
													<input class="tt-search-input" type="search" name="search" id="search" placeholder="GOO PRODUCTS..." aria-label="SEARCH PRODUCTS..." autocomplete="off" value="<?php echo $this->input->get('search') ?>" data-tooltip="yuk cari apa aja yang kamu suka" data-tposition="bottom">
													
													<div class="search-results" style="display: none;"></div>
												</form>
												<!-- /tt-search -->
											</div>
										</div>
									</li>
								</ul>
							</nav>
						</div>
					</div>
					<!-- /tt-menu -->
				</div>
				<div class="tt-col-obj tt-obj-options obj-move-right">
					<!-- tt-search -->
					<div class="tt-desctop-parent-search tt-parent-box tt-obj-desktop-hidden">
						<div class="tt-search tt-dropdown-obj">
							<button class="tt-dropdown-toggle tt-hidden-desctope" data-tooltip="Search" data-tposition="bottom">
								<i class="icon-f-85"></i>
							</button>
							<div class="tt-dropdown-menu">
								<div class="container">
									<form action="<?php echo site_url('p/search') ?>" method="get" role="search">
										<div class="tt-col">
											<input type="text" class="tt-search-input" name="search" id="search" placeholder="GO PRODUCTS..." autocomplete="off" value="<?php echo $this->input->get('search') ?>">
											<button class="tt-btn-search" type="submit"></button>
										</div>
										<div class="tt-col">
											<button class="tt-btn-close icon-g-80"></button>
										</div>
										<div class="tt-info-text">
											What are you Looking for?
										</div>
										<div class="search-results">
											<ul>
												<li>
										            <a href="product.html">
										            	<div class="thumbnail"><img src="<?php echo base_url('assets') ?>/images/loader.svg" data-src="<?php echo base_url('assets') ?>/images/product/product-03.jpg" alt=""></div>
										            	<div class="tt-description">
										            		<div class="tt-title">Flared Shift Bag</div>
										            		<div class="tt-price">
																<span class="new-price">$14</span>
																<span class="old-price">$24</span>
															</div>
										            	</div>
										            </a>
										        </li>
										        <li>
										           <a href="product.html">
										            	<div class="thumbnail"><img src="<?php echo base_url('assets') ?>/images/loader.svg" data-src="<?php echo base_url('assets') ?>/images/product/product-02.jpg" alt=""></div>
										            	<div class="tt-description">
										            		<div class="tt-title">Flared Shift Bag</div>
										            		<div class="tt-price">
																$24
															</div>
										            	</div>
										            </a>
										        </li>
										        <li>
										           <a href="product.html">
										            	<div class="thumbnail"><img src="<?php echo base_url('assets') ?>/images/loader.svg" data-src="<?php echo base_url('assets') ?>/images/product/product-01.jpg" alt=""></div>
										            	<div class="tt-description">
										            		<div class="tt-title">Flared Shift Bag</div>
										            		<div class="tt-price">
																$14
															</div>
										            	</div>
										            </a>
										        </li>
										        <li>
										           <a href="product.html">
										            	<div class="thumbnail"><img src="<?php echo base_url('assets') ?>/images/loader.svg" data-src="<?php echo base_url('assets') ?>/images/product/product-04.jpg" alt=""></div>
										            	<div class="tt-description">
										            		<div class="tt-title">Flared Shift Bag</div>
										            		<div class="tt-price">
																$24
															</div>
										            	</div>
										            </a>
										        </li>
										        <li>
										           <a href="product.html">
										            	<div class="thumbnail"><img src="<?php echo base_url('assets') ?>/images/loader.svg" data-src="<?php echo base_url('assets') ?>/images/product/product-05.jpg" alt=""></div>
										            	<div class="tt-description">
										            		<div class="tt-title">Flared Shift Bag</div>
										            		<div class="tt-price">
																$17
															</div>
										            	</div>
										            </a>
										        </li>
										        <li>
										           <a href="product.html">
										            	<div class="thumbnail"><img src="<?php echo base_url('assets') ?>/images/loader.svg" data-src="<?php echo base_url('assets') ?>/images/product/product-06.jpg" alt=""></div>
										            	<div class="tt-description">
										            		<div class="tt-title">Flared Shift Bag</div>
										            		<div class="tt-price">
																$20
															</div>
										            	</div>
										            </a>
										        </li>
											</ul>
											<button type="button" class="tt-view-all">View all products</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!-- /tt-search -->
					<!-- tt-cart -->
					<div class="tt-desctop-parent-cart tt-parent-box">
						<div class="tt-cart tt-dropdown-obj" data-tposition="bottom">
							<?php if (is_login()) { ?>

							<button class="tt-dropdown-toggle">
								<i class="icon-f-39"></i>
								<?php if ($cart->num_rows() > 0) { ?>
								<span class="tt-badge-cart"><?php echo $cart->num_rows() ?></span>
							<?php } ?>
							</button>
							<?php } else { ?>
								<a href="<?php echo site_url('auth/login') ?>" class="btn btn-border btn-small"><?php echo $this->lang->line('login') ?></a>
							<?php } ?>
							<div class="tt-dropdown-menu">
								<div class="tt-mobile-add">
									<h6 class="tt-title">SHOPPING CART</h6>
									<button class="tt-close">Close</button>
								</div>
								<div class="tt-dropdown-inner">
									<div class="tt-cart-layout">
										<!-- layout emty cart -->
										<!-- <a href="empty-cart.html" class="tt-cart-empty">
											<i class="icon-f-39"></i>
											<p>No Products in the Cart</p>
										</a> -->
										<div class="tt-cart-content">

										<?php if (empty( $cart->result() )){ ?>
											<div class="container-indent nomargin">
												<div class="tt-empty-search">
													<span class="tt-icon icon-e-40"></span>
												</div>
											</div>
										<?php } ?>


											<div class="tt-cart-list">
											<?php foreach ($cart->result() as $carts) { ?>
												<div class="tt-item <?php echo $carts->product_id ?>">
													<a href="<?php echo base_url('p/product/' . $carts->product_id . '-' . replace_url_char($carts->product_name)) ?>">
														<div class="tt-item-img">
															<img src="<?php echo base_url('assets') ?>/images/loader.svg" data-src="<?php echo getProductPhoto($carts->product_id) ?>" alt="">
														</div>
														<div class="tt-item-descriptions">
															<h2 class="tt-title"><?php echo xxs_filter($carts->product_name) ?></h2>
															<ul class="tt-add-info">
																<li>Status : <?php echo xxs_filter($carts->status) ?></li>
															</ul>
															<div class="tt-price">Rp. <?php echo @number_format(@$carts->price,0,',','.'); ?></div>
														</div>
													</a>
													<div class="tt-item-close">
														<a href="javascript:void(0)" onclick="delete_modal_notif('<?php echo $carts->product_id ?>')" class="tt-btn-close"></a>
													</div>
												</div>
											<?php } ?>
											</div>
											<div class="tt-cart-btn">
												<div class="tt-item">
													<a href="<?php echo base_url('dashboard/product_buy') ?>" class="btn btn-border">LIHAT SEMUA...</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /tt-cart -->
					<!-- tt-account -->
					<div class="tt-desctop-parent-account tt-parent-box">
						<div class="tt-account tt-dropdown-obj">
						<?php if (is_login()) { ?>
							<button class="tt-dropdown-toggle"  data-tooltip="My Account" data-tposition="bottom"><i class="icon-f-94"></i></button>
							<div class="tt-dropdown-menu">
								<div class="tt-mobile-add">
									<button class="tt-close">Close</button>
								</div>
								<div class="tt-dropdown-inner">
									<ul>
									    <li><a href="<?php echo base_url('dompetGoo/detail') ?>" class="btn btn-gie" style="width:100%"><i class="icon-e-54"></i><?php echo number_rp($user->saldo) ?></a></li>
									    <li><a href="<?php echo base_url('dashboard/account_setting') ?>"><i class="icon-f-94"></i>Account</a></li>
									<!--     <li><a href="wishlist.html"><i class="icon-n-072"></i>Wishlist</a></li>
									    <li><a href="compare.html"><i class="icon-n-08"></i>Compare</a></li> -->
									    <li><a href="<?php echo site_url('dashboard') ?>"><i class="icon-f-68"></i>Dashboard</a></li>
									    <!-- <li><a href="login.html"><i class="icon-f-76"></i>Sign In</a></li> -->
									    <li><a href="<?php echo site_url('auth/logout') ?>"><i class="icon-f-77"></i><?php echo $this->lang->line('logout'); ?></a></li>
									</ul>
								</div>
							</div>
						<?php } else { ?>
								<a href="<?php echo site_url('auth/register') ?>" class="btn btn-border btn-small"><?php echo $this->lang->line('register') ?></a>
						<?php } ?>
							
						</div>
					</div>
					<!-- /tt-account -->

					<!-- tt-langue and tt-currency -->
					<div class="tt-desctop-parent-multi tt-parent-box">
						<div class="tt-multi-obj tt-dropdown-obj">
							<?php if (is_login()) { ?>
								<button class="tt-dropdown-toggle" data-tooltip="Settings" data-tposition="bottom"><i class="icon-f-64"></i></button>
							<?php } ?>
							<div class="tt-dropdown-menu">
								<div class="tt-mobile-add">
									<button class="tt-close">Close</button>
								</div>
								<div class="tt-dropdown-inner" style="padding: 4px !important">
									<?php if($messages->num_rows() > 0) { ?>
									<?php foreach($messages->result() as $msg) { ?>
									<a href="<?php echo base_url($msg->link) ?>">
									<blockquote class="tt-blockquote" style="margin-top: 2px; padding: 6px!important">
                                    	<div class="row text-left">
                                    		<div class="col-lg-12 col-md-12 col-12">
                                        		<span class=""><?php echo $msg->message_detail ?> <br><?php if ($msg->param != "") { echo "#" . $msg->param; } ?></span>
                                        		<br><i style="font-size: 10px"><?php echo format_indo($msg->input_date) ?></i>
                                        	</div>
                                        </div>
                                    </blockquote>
                                    </a>
                                	<?php } ?>
                                	<?php } else { ?>
                                		<div class="container-indent nomargin">
											<div class="tt-empty-search">
												<span class="tt-icon icon-g-22"></span>
											</div>
										</div>
                                	<?php } ?>

											<div class="tt-cart-btn">
												<div class="tt-item">
													<a href="<?php echo base_url('dashboard/product_buy') ?>" class="btn-link">Lihat Semua...</a>
												</div>
											</div>
								</div>
							</div>

						</div>
					</div>
					<!-- /tt-langue and tt-currency -->
				</div>
			</div>
		</div>
	</div>
	<!-- /tt-desktop-header -->
	<!-- stuck nav -->
	<div class="tt-stuck-nav">
		<div class="container">
			<div class="tt-header-row ">
				<div class="tt-stuck-desctop-menu-categories"></div>
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