<?php if(!empty($product)){ ?>
<?php foreach($product as $produk){ ?>
<div class="ui-block">

		<article class="hentry post has-post-thumbnail">
		
			<div class="row" style="margin-right: 10px;margin-left: 0 !important">
				<img src="<?php echo get_photo($produk->user_id) ?>" alt="author" width="40px" height="40px" style="margin-right: 10px;">
		
				<div class="author-date">
					<a class="text-right" href="<?php echo base_url('u/' . $produk->user_id) ?>"><?php echo $produk->fullname ?></a>
					<div class="">
						<time class="published" datetime="2004-07-24T18:18">
							<?php echo format_indo($produk->input_date) ?>
						</time>
					</div>
				</div>
		
			</div>
			<b style="font-size: 14px;margin-top:10px"><?php echo $produk->product_name ?></b>
			<p class="readmore"><?php echo xxs_filter($produk->product_desc) ?>
			</p>
			<span class="tt-img"><img src="<?php echo getProductPhoto($produk->product_id) ?>" alt="" width="100%"></span>
			<div class="row border-top py-1">

									<?php if ($produk->input_by != user_id() ) { ?>
										<div class="col-4 text-center">
											<div class="align-center">
												<div class="tt-rating">
													<i class="icon-star"></i>
													<i class="icon-star"></i>
													<i class="icon-star"></i>
													<i class="icon-star-half"></i>
													<i class="icon-star-empty"></i>
												</div>
											</div>
										</div>
										<div class="col-4 text-center">
											<a href="<?php echo base_url('p/product/' . $produk->product_id . '-' . replace_url_char($produk->product_name)) ?>" class="btn-link btn-small inline-items" style="width: 85px">
												<i class="icon-f-88"></i>Goo
											</a>
										</div>
										<div class="col-4 text-center">
													<a href="<?php echo base_url('cart/cart/' . $produk->product_id) ?>" class="btn-link btn-small inline-items" style="width: 85px"><i class="icon-f-39"></i>PIZ</a>
										</div>
									<?php } else { ?>
										<div class="col-6 text-center">
											<div class="align-center">
												<div class="tt-rating">
													<i class="icon-star"></i>
													<i class="icon-star"></i>
													<i class="icon-star"></i>
													<i class="icon-star-half"></i>
													<i class="icon-star-empty"></i>
												</div>
											</div>
										</div>
										<div class="col-6 text-center">
											<a href="<?php echo base_url('p/product/' . $produk->product_id . '-' . replace_url_char($produk->product_name)) ?>" class="btn-link btn-small inline-items" style="width: 85px">
												<i class="icon-f-88"></i>Goo
											</a>
										</div>
									<?php } ?>
								</div>
		
		</article>
</div>
<?php } ?>

<script type="text/javascript">
$(document).ready(function () {
$('.readmore').expander({
            slicePoint: 100,
            expandText: ' Lihat Semua',
            userCollapseText: ''
        });
});
</script>
<?php } ?>