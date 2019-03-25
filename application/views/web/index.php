<style type="text/css">
	.wrapper {
    display: grid;
    margin-top: 10px;
    grid-gap: 10px;
        background-color: #fff;
        color: #444;
    }

    .box {
        background: #84abf1;
		justify-content: space-between;
  		transition: 0.5s cubic-bezier(0.18, 1.14, 0.5, 1.18);
  		transition: 0.3s ease;
        color: #fff;
        border-radius: 5px;
        padding: 20px;
        font-size: 150%;

    }

    .a {
        grid-column: 1 / 3;
        grid-row: 1;
    }
    .b {
        grid-column: 3 ;
        grid-row: 1 / 3;
    }
    .c {
        grid-column: 1 ;
        grid-row: 2 ;
    }
    .d {
        grid-column: 2;
        grid-row: 2;
    }    
</style>

<div id="tt-pageContent">
	<div class="container-indent nomargin">
		<div class="container-fluid">
			<div class="row">
				<div class="tt-promo-fullwidth-02">
					<img src="<?php echo base_url('assets/images/promo/index15-promo-img-01.jpg') ?>" alt="">
					<div class="tt-description">
						<div class="tt-description-wrapper">
							<div class="tt-title-large"><span class="tt-base-color">Masa Depan Kamu</span></div>
							<p>Berawal dari sini</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid-custom container-fluid-custom-mobile-padding">
		<script src='../../../../snapppt.com/widgets/widget_loader/bfbf61a0-9821-4761-8e38-f283c5aaa83f/grid.js' class='snapppt-widget'></script>
		</div>
	</div>
</div>
<br>


<div class="container-indent1">
		<div class="container-fluid-custom container-fluid-custom-mobile-padding">
			<div class="tt-block-title text-left">
				<h2 class="tt-title">Product Terlaris</h2>
			</div>
			<div class="tt-tab-wrapper">
				<ul class="nav nav-tabs tt-tabs-default" role="tablist">
					<li class="nav-item">
						<br>
					</li>
				</ul>

				<div class="tab-content">
					<div class="tab-pane active" id="tt-tab01-01">
						<div class="tt-carousel-products row arrow-location-tab tt-alignment-img tt-layout-product-item slick-animated-show-js"  data-item="6">
							
							<?php foreach($product as $produk){ ?>
							<div class="col-6 col-md-4 col-lg-2">
								<div class="tt-product thumbprod-center">
									<div class="tt-image-box">
										<a href="javascript:void(0)" class="tt-btn-wishlist" data-tooltip="<?php echo $produk->view ?> Viewer" data-tposition="left"></a>
										<a href="<?php echo base_url('p/product/' . $produk->product_id . '-' . replace_url_char($produk->product_title)) ?>">
											<span class="tt-img"><img src="<?php echo getProductPhoto($produk->product_id) ?>" alt=""></span>
											<span class="tt-img-roll-over"><img src="<?php echo getProductPhoto($produk->product_id) ?>" alt=""></span>
											<span class="tt-label-location">
												<span class="tt-label-new">Rp. <?php echo @number_format(@$produk->price,0,',','.'); ?></span>
											</span>
										</a>
										<div class="tt-countdown_box">
											<div class="tt-countdown_inner">
												<div class="tt-countdown"
													data-date="2018-11-01"
													data-year="Yrs"
													data-month="Mths"
													data-week="Wk"
													data-day="Day"
													data-hour="Hrs"
													data-minute="Min"
													data-second="Sec"></div>
											</div>
										</div>
									</div>
									<div class="tt-description">
										<div class="tt-row">
											<ul class="tt-add-info">
												<li><a href="#"><?php echo $produk->detail ?></a></li>
											</ul>
											<div class="tt-rating">
												<i class="icon-star"></i>
												<i class="icon-star"></i>
												<i class="icon-star"></i>
												<i class="icon-star-half"></i>
												<i class="icon-star-empty"></i>
											</div>
										</div>
										<h4 class="tt-title _trjst"><a href="<?php echo base_url('p/product/' . $produk->product_id . '-' . replace_url_char($produk->product_title)) ?>"><?php echo $produk->product_name ?></a></h4>

										<div class="" style="margin-top: 8px">
										<?php if ($produk->input_by != user_id() ) { ?>
											<div class="tt-row-btn">
												<a href="<?php echo base_url('cart/cart/' . $produk->product_id) ?>" class="btn btn-small" style="width:70%"><i class="icon-f-39"></i>PIZ</a>
											</div>
										<?php } ?>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
						
						</div>
					</div>


				</div>
			</div>
		</div>
	</div>
</div>
<br>


<div class="container-indent1 container-fluid-custom" style="margin-right: auto;
    margin-left: auto;
    padding-right: 20px;
    padding-left: 20px;">
<div class="tt-product-listing row">
	<?php foreach ($product2 as $key => $product) { ?>
	<div class="col-6 col-md-2 tt-col-item">
		<div class="tt-product thumbprod-center">
			<div class="tt-image-box">
				<a href="javascript:void(0)" class="tt-btn-wishlist" data-tooltip="<?php echo $product->view ?> Viewer" data-tposition="left"></a>
				<a href="<?php echo base_url('p/product/' . $product->product_id . '-' . replace_url_char($product->product_name)) ?>">
					<span class="tt-img"><img src="<?php echo base_url('assets') ?>/images/loader.svg" data-src="<?php echo getProductPhoto($product->product_id) ?>" alt=""></span>
					<span class="tt-img-roll-over"><img src="<?php echo base_url('assets') ?>/images/loader.svg" data-src="<?php echo getProductPhoto($product->product_id) ?>" alt=""></span>
					<span class="tt-label-location">
						<span class="tt-label-new">Rp. <?php echo @number_format(@$product->price,0,',','.'); ?></span>
					</span>
				</a>
			</div>
			<div class="tt-description">
				<div class="tt-row">
					<ul class="tt-add-info">
						<li><a href="#"><?php echo $product->detail ?></a></li>
					</ul>
					<div class="tt-rating">
						<i class="icon-star"></i>
						<i class="icon-star"></i>
						<i class="icon-star"></i>
						<i class="icon-star"></i>
						<i class="icon-star"></i>
					</div>
				</div>
				<h4 class="tt-title _trjst"><a href="<?php echo base_url('p/product/' . $product->product_id . '-' . replace_url_char($product->product_name)) ?>"><?php echo $product->product_name ?></a></h4>
				<div class="" style="margin-top: 8px">
		<?php if ($product->input_by != user_id() ) { ?>
			<div class="tt-row-btn">
				<a href="<?php echo base_url('cart/cart/' . $product->product_id) ?>" class="btn btn-small" style="width:70%"><i class="icon-f-39"></i>PIZ</a>
			</div>
		<?php } ?>
	</div>
			</div>
		</div>
	</div>
	<?php } ?>
	
</div>
</div>

<div class="container-indent1 container-fluid-custom" style="margin-right: auto;
    margin-left: auto;
    padding-right: 20px;
    padding-left: 20px;">
<div class="tt-product-listing row">
	<?php foreach ($product3 as $key => $product) { ?>
	<div class="col-6 col-md-2 tt-col-item">
		<div class="tt-product thumbprod-center">
			<div class="tt-image-box">
				<a href="javascript:void(0)" class="tt-btn-wishlist" data-tooltip="<?php echo $product->view ?> Viewer" data-tposition="left"></a>
				<a href="<?php echo base_url('p/product/' . $product->product_id . '-' . replace_url_char($product->product_name)) ?>">
					<span class="tt-img"><img src="<?php echo base_url('assets') ?>/images/loader.svg" data-src="<?php echo getProductPhoto($product->product_id) ?>" alt=""></span>
					<span class="tt-img-roll-over"><img src="<?php echo base_url('assets') ?>/images/loader.svg" data-src="<?php echo getProductPhoto($product->product_id) ?>" alt=""></span>
					<span class="tt-label-location">
						<span class="tt-label-new">Rp. <?php echo @number_format(@$product->price,0,',','.'); ?></span>
					</span>
				</a>
			</div>
			<div class="tt-description">
				<div class="tt-row">
					<ul class="tt-add-info">
						<li><a href="#"><?php echo $product->detail ?></a></li>
					</ul>
					<div class="tt-rating">
						<i class="icon-star"></i>
						<i class="icon-star"></i>
						<i class="icon-star"></i>
						<i class="icon-star"></i>
						<i class="icon-star"></i>
					</div>
				</div>
				<h4 class="tt-title _trjst"><a href="<?php echo base_url('p/product/' . $product->product_id . '-' . replace_url_char($product->product_name)) ?>"><?php echo $product->product_name ?></a></h4>
				<div class="" style="margin-top: 8px">
		<?php if ($product->input_by != user_id() ) { ?>
			<div class="tt-row-btn">
				<a href="<?php echo base_url('cart/cart/' . $product->product_id) ?>" class="btn btn-small" style="width:70%"><i class="icon-f-39"></i>PIZ</a>
			</div>
		<?php } ?>
	</div>
			</div>
		</div>
	</div>
	<?php } ?>
	
</div>
</div>


</div>