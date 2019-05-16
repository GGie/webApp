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
							<div class="col-6 col-md-4 col-lg-2">
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
</div>
<?php echo $this->pagination->create_links(); ?>

<?php } else { ?>
<div id="tt-pageContent">
	<div class="container-indent nomargin">
		<div class="tt-empty-search">
			<!-- <span class="tt-icon icon-f-85"></span> -->
			<img src="<?php echo base_url('assets/images/icon/icon-search.png') ?>" width="300px">
			<div style="font-family: arial">Tidak ada hasil untuk di tampilkan</div>
			<a href="<?php echo base_url() ?>" class="btn"><?php echo strtoupper($this->lang->line('back')) ?></a>
		</div>
	</div>
</div>
<?php } ?>