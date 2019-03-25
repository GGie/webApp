<style type="text/css">
		.ui-block {
    background-color: #fff;
    border-radius: 5px;
    border: 1px solid #e6ecf5;
    margin-bottom: 15px;
}
</style>
<div class="row">
<div class="col-12 col-sm-4 col-md-2 col-lg-2" style="border-right: 1px solid #ddd;border-bottom: 1px solid #ddd">
	
	<div class="container-indent1">
	<div class="tt-tab-wrapper">
	<div class="sticky-top" style="height: 100px;z-index: 1!important;padding-left: 10px">
						
						<div class="p-3 bg-white rounded shadow-sm">
				        <h6>Profile</h6>
				        <div class="media text-muted pt-3">
				          
				          	<div class="row">
								<img width="50px" height="50px" src="<?php echo get_photo(user_id()) ?>" class="profile-pic">
						
								<div class="author-date">
									<a class="text-right pl-2" href="<?php echo base_url('u/' . $user->user_id) ?>"><b><?php echo $user->fullname ?></b></a>

									
									<div class="">
										<time class="published" datetime="2004-07-24T18:18">
											 Register <?php echo format_indo($user->input_date) ?>
										</time>
									</div>
								</div>
						
							</div>

				        </div>
				    	</div>

						<div class="tt-collapse open">
							<a href="#" class="btn btn-border btn-block">Kirim Pesan</a>
						</div>

					</div>
	</div>
	</div>

</div>
<div class="col-12 col-sm-8 col-md-10 col-lg-10 py-1" style="border-bottom: 1px solid #ddd">
	<!-- Product -->

<?php if($product->num_rows() > 0) { ?>
	<div class="container-indent1">
		<div class="container-fluid-custom container-fluid-custom-mobile-padding">
			<div class="tt-block-title text-left">
				
			</div>
			<div class="tt-tab-wrapper">

				<div class="tab-content">
					<div class="tab-pane active" id="tt-tab01-01">
						<div class="row tt-layout-product-item"  data-item="4">
							
							
							<?php foreach($product->result() as $produk) { ?>
							<div class="col-6 col-md-4 col-lg-3">
								<div class="tt-product thumbprod-center">
									<div class="tt-image-box">
										<a href="javascript:void(0)" class="tt-btn-wishlist" data-tooltip="<?php echo $produk->view ?> Viewer" data-tposition="left"></a>
										<a href="<?php echo base_url('p/product/' . $produk->product_id . '-' . replace_url_char($produk->product_name)) ?>">
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
												<li><a href="#"><?php echo xxs_filter($produk->detail) ?></a></li>
											</ul>
											<div class="tt-rating">
												<i class="icon-star"></i>
												<i class="icon-star"></i>
												<i class="icon-star"></i>
												<i class="icon-star-half"></i>
												<i class="icon-star-empty"></i>
											</div>
										</div>
										<h2 class="tt-title _trjst"><a href="<?php echo base_url('p/product/' . $produk->product_id . '-' . replace_url_char($produk->product_name)) ?>"><?php echo xxs_filter($produk->product_name) ?></a></h2>

										<div class="" style="margin-top: 8px">
										<?php if ($produk->input_by != user_id() ) { ?>
											<div class="tt-row-btn">
												<a href="<?php echo base_url('cart/cart/' . $produk->product_id) ?>" class="btn btn-small"><i class="icon-f-39"></i>PIZ</a>
											</div>
										<?php } ?>
											<div class="tt-row-btn">
												<a href="javascript:void(0)" class="tt-btn-wishlist"> <?php echo $produk->view ?> Viewer</a>
											</div>
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

<?php echo $this->pagination->create_links(); ?>
</div>

<?php } else { ?>
<div id="tt-pageContent">
	<div class="container-indent nomargin">
		<div class="tt-empty-cart">
			<img src="<?php echo base_url('assets/images/custom/web.png') ?>" width="250px">
			<h1 class="tt-title" style="color:grey">Masih Kosong</h1>
			<a href="<?php echo base_url() ?>" class="btn"><?php echo strtoupper($this->lang->line('back')) ?></a>
		</div>
	</div>
</div>
<?php } ?>


	<!-- Product EOF -->


</div>
</div>
