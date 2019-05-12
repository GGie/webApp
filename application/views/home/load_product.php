<?php if(!empty($product)){ ?>
<?php foreach($product as $produk){ ?>
<div class="ui-block">

		<article class="hentry post has-post-thumbnail">
			<!-- Head -->
			<div class="css-product-head">
			    <a class="" href="<?php echo base_url('u/' . $produk->user_id) ?>">
			    	<img src="<?php echo get_photo($produk->user_id) ?>" class="css-product-img">
			    </a>
			    <div class="css-product-label">
			    	<a class="username" href="<?php echo base_url('u/' . $produk->user_id) ?>">
			    		<span><?php echo $produk->fullname ?></span>
			    	</a>
			        <div class="posttime"><span><?php echo format_indo($produk->input_date) ?></span></div>
			    </div>
			    <i class="icon-03" onclick="modal_options('<?php echo $produk->product_id ?>')"></i>
			</div>
			<!-- Head EOF -->

			<!-- Content -->
			<b style="font-size: 14px;margin-top:10px"><?php echo $produk->product_name ?></b>
			<p class="readmore"><?php echo xxs_filter($produk->description) ?>
			</p>
			<span class="tt-img">
				<a href="<?php echo base_url('p/product/' . $produk->product_id . '-' . replace_url_char($produk->product_name)) ?>">
					<img src="<?php echo getProductPhoto($produk->product_id) ?>" alt="" width="100%">
				</a>
			</span>	
			<!-- Content EOF -->

			<!-- Footer -->
			<div class="css-product-footer">
			    <div class="css-product-footer-left">
			        <button class="css-diskusi" title="Diskusi"> <span><?php echo $produk->comment ?></span> <i class="icon-h-12"></i> Diskusi</button>
			        <button class="css-viewed" title="Viewed"> <span><?php echo $produk->viewed ?></span><i class="icon-h-13"></i> Viewer</button>
			    </div>
			    <button class="css-share" onclick="modal_bagikan('<?php echo base_url('p/product/' . $produk->product_id . '-' . replace_url_char($produk->product_name)) ?>')"><i class="icon-h-30"></i><span>Share</span></button>
			</div>
			<!-- Footer EOF -->
			<!-- <div class="row border-top py-1">

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
								</div> -->
		
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