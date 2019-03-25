<div class="tt-breadcrumb">
	<div class="container">
		<ul>
			<li><a href="/">HOME</a></li>
			<?php if (getKategori($product->id_parent)) { ?>
				<li><a href="javascript:void(0)"><?php echo getKategori($product->id_parent) ?></a></li>
			<?php } ?>
			<li><?php echo $product->detail ?></li>
		</ul>
	</div>
</div>
<div id="tt-pageContent">
	<div class="container-indent">
		<!-- mobile product slider  -->
		<div class="tt-mobile-product-layout visible-xs">
			<div class="tt-mobile-product-slider arrow-location-center slick-animated-show-js">
				<?php $images = $this->ProductModel->getImage($product->product_id); ?>
				<?php foreach($images as $ImagesMobile) { ?>
					<div><img src="<?php echo base_url($ImagesMobile->file_url) ?>" alt=""></div>
				<?php } ?>
				<?php if (!isset($ImagesMobile->file_url)) { ?>
					<img class="zoom-product" src='<?php echo base_url('assets/images/custom/noimage.png') ?>' data-zoom-image="<?php echo base_url('images/custom/noimage.png') ?>" alt="">
				<?php } ?>
				<?php if($product->url_video != "") { ?>
				<div>
					<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="<?php echo $product->url_video ?>" allowfullscreen></iframe>
					</div>
				</div>
				<?php } ?>
				<!-- <div>
					<div class="tt-video-block">
						<a href="#" class="link-video"></a>
						<video class="movie" src="<?php echo base_url('assets') ?>/images/skin-snowboards/video/video.mp4" poster="<?php echo base_url('assets') ?>/images/video/video_img.jpg"></video>
					</div>
				</div> -->
			</div>
			<?php $music = $this->ProductModel->getMusic($product->product_id); ?>
			<?php foreach($music as $MusicMobile) { ?>
				<audio controls>
					<source src="<?php echo base_url($MusicMobile->file_url) ?>">
				</audio>
			<?php } ?>
		</div>

		<!-- /mobile product slider  -->
		<div class="container container-fluid-mobile">
			<div class="row">
				<div class="col-12 col-lg-9">
					<div class="row custom-single-page">
						<div class="col-6 hidden-xs">
							<div class="tt-product-vertical-layout">
								<div class="tt-product-single-img">
									<div>
										<?php $images = $this->ProductModel->getImage($product->product_id); ?>
										<?php foreach($images as $imagess) {} ?>
										<?php if (isset($imagess->file_url)) { ?>
										<img class="zoom-product" src='<?php echo base_url($imagess->file_url) ?>' data-zoom-image="<?php echo base_url($imagess->file_url) ?>" alt="">
										<?php } else  { ?>
										<img class="zoom-product" src='<?php echo base_url('assets/images/custom/noimage.png') ?>' data-zoom-image="<?php echo base_url('images/custom/noimage.png') ?>" alt="">
										<?php } ?>
									</div>
								</div>
								<div class="tt-product-single-carousel-vertical">
									<ul id="smallGallery" class="tt-slick-button-vertical  slick-animated-show-js">
										
										<?php foreach($images as $image) { ?>
										<li><a href="javascript:void(0)" data-image="<?php echo base_url($image->file_url) ?>" data-zoom-image="<?php echo base_url($image->file_url) ?>"><img src="<?php echo base_url($image->file_url) ?>" alt=""></a></li>
										<?php } ?>
										<?php if($product->url_video != "") { ?>
										<li>
											<div class="video-link-product" data-toggle="modal" data-type="youtube" data-target="#modalVideoProduct" data-value="<?php echo $product->url_video ?>">
												<img src="<?php echo base_url('assets') ?>/images/product/product-small-empty.png" alt="">
												<div>
													<i class="icon-f-32"></i>
												</div>
											</div>
										</li>
										<?php } ?>
										<!-- <li>
											<div class="video-link-product" data-toggle="modal" data-type="video" data-target="#modalVideoProduct" data-value="<?php echo base_url('assets') ?>/images/skin-snowboards/video/video.mp4" data-poster="<?php echo base_url('assets') ?>/images/skin-snowboards/video/video_img.jpg">
												<img src="<?php echo base_url('assets') ?>/images/product/product-small-empty.png" alt="" >
												<div>
													<i class="icon-f-32"></i>
												</div>
											</div>
										</li> -->
									</ul>
								</div>
							</div>
							<?php foreach($music as $musics) { ?>
								<audio controls>
									<source src="<?php echo base_url($musics->file_url) ?>">
								</audio>
							<?php } ?>
						</div>
						<div class="col-6">
							<div class="tt-product-single-info">
								<h3 class="tt-title"><?php echo xxs_filter($product->product_name) ?></h3>
								<div class="tt-price">
									<span class="new-price">Rp. <?php echo @number_format(@$product->price,0,',','.'); ?></span>
								</div>	

								<!-- <div class="bg-danger">
									<span class="new-price">Stock Ini Habis</span>
								</div>	 -->					


								<?php if ($product->input_by != user_id() ) { ?>
								<form method="post" action="<?php echo base_url('cart/cart/' . $product->product_id) ?>">
								<div class="col-item">
									<div class="tt-input-counter style-01">
										<span class="minus-btn"></span>
										<input type="text" name="qty"  id="qty" value="1" size="<?php echo $product->product_stock ?>" readonly/>
										<span class="plus-btn"></span>
									</div>
								</div>
								<div class="tt-wrapper">
									<div class="tt-row-custom-01  tt-responsive-lg">

											<?php if (isset($product->whatsapp)) { ?>
												<div class="col-item">
													<a href="https://api.whatsapp.com/send?phone=<?php echo number_hp_prefix($product->whatsapp) ?>" target="blank" class="btn btn-small"><i class="icon-f-88"></i>Hubungi Penjual</a>
												</div>
											<?php } ?>
												<div class="col-item">
													<button class="btn btn-small btn-loader"><i class="icon-f-39"></i>PIZ</button>
												</div>
									
									</div>
								</div>
								<div class="tt-wrapper">
									<div class="tt-add-info">
										<ul>
											<li><i>Gunakan tombol PIZ untuk membeli atau Hubungi Penjual</i></li>
										</ul>
									</div>
								</div>
								</form>
								<?php } else { ?>
									<div class="tt-wrapper">
										<div class="tt-add-info">
											<ul>
												<li><i><span class="tt-badge tt-fatured">Anda Bisa mengubah product ini pada menu dashboard</span></i></li>
											</ul>
										</div>
									</div>
								<?php } ?>



							</div>
						</div>

				<div class="col-12">
					<div class="tt-product-single-info" style="padding-left:0px!important;padding-right:0px!important">
					
						<div class="tt-collapse-block tt-blockquote" style="padding:18px !important;text-align: left">
							<div class="tt-item active">
								<div class="tt-collapse-title">DESCRIPTION</div>
								<div class="tt-collapse-content">
									<div class="tt-wrapper">
									<?php echo xxs_filter($product->product_desc) ?>
								</div>
								</div>
							</div>
						</div>
					</div>
				</div>	

					</div>
<!-- comment -->
<div class="">
			<div class="row justify-content-center">
				<div class="col-12">
					<h6 class="tt-title-border">COMMENTS</h6>
					
					<div class="tt-comments-layout">
						<!-- <iframe frameborder="0" scrolling="no" src="<?php echo base_url('ajax/comment?product_id=' . $product->product_id) ?>"></iframe> -->
						<?php if ($comments != "" )  { ?>
						<?php foreach ($comments->result() as $coment) { ?>
						<div class="tt-item">
							<blockquote class="tt-blockquote" style="padding:18px !important;text-align: left">
								<div class="tt-comments-level-1">
								<div class="tt-avatar"><img src="<?php echo get_photo($coment->input_by) ?>"></div>
								<div class="tt-content" style="margin-left: 70px;">
									<div class="tt-comments-title">
										<b class="username"><span><?php echo $coment->fullname ?></span></b>
										<span class="time">on <?php echo timeAgo(strtotime($coment->input_date)); ?></span>
									</div>
									<p>
										<?php echo $coment->comment ?>
									</p>
									<a href="javascript:void(0)" class="tt-btn" onclick="replay(<?php echo $coment->com_id ?>)"><i class="icon-g-06"></i></a>
								</div>
								</div>
							</blockquote>
							<?php $parentsCom = $this->CommentsModel->getByParentCom($product->product_id, $coment->com_id); ?>
							<?php if ($parentsCom != "" )  { ?>
							<?php foreach ($parentsCom as $parentCom) { ?>
							<div class="tt-comments-level-2 tt-blockquote" style="padding:18px !important;text-align: left">
								<div class="tt-avatar"><img src="<?php echo get_photo($parentCom->input_by) ?>"></div>
								<div class="tt-content" style="margin-left: 70px;">
									<div class="tt-comments-title">
										<b class="username"><span><?php echo $parentCom->fullname ?></span></b>
										<span class="time">on <?php echo timeAgo(strtotime($parentCom->input_date)); ?></span>
									</div>
									<p><?php echo $parentCom->comment ?></p>
								</div>
							</div>
							<?php } ?>
							<?php } ?>

						</div>
					<?php } ?>
					<?php } ?>
					</div>

					<br>
					<?php if ( $commentsRows > 0 ) { ?>
					<nav><ul class="pagination">
					<?php if(!empty($commentsRows)):for($i=1; $i<=$commentsRows; $i++):  
					            if($i == 1):?>
					            <li class='btn btn-border active'  id="<?php echo $i;?>"><a href='<?php echo base_url("ajax/comment?product_id=" . $product->product_id . "&per_page=") ?><?php echo $i;?>'><?php echo $i;?></a></li> 
					            <?php else:?>
					            <li class="btn btn-border" id="<?php echo $i;?>"><a href='<?php echo base_url("ajax/comment?product_id=" . $product->product_id . "&per_page=") ?><?php echo $i;?>'><?php echo $i;?></a></li>
					        <?php endif;?>          
					<?php endfor;endif;?>
					</ul></nav>
				<?php } else { ?>
					Belum Ada Komentar
				<?php } ?>

				</div>
			</div>
		</div>
		<?php if (user_id()) { ?>
		<form method="post" action="<?php echo base_url('p/comment/add') ?>">
			<div class="form-group">
				<label for="textarea" class="control-label"></label>
				<input type="hidden" name="product_id" value="<?php echo $product->product_id ?>">
				<input type="hidden" name="com_parent_id" id="com_parent_id" value="">
				<textarea class="form-control"  id="comment" name="comment" placeholder="Write a Comment" rows="2" required="true" maxlength="100"></textarea>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-loader btn-small">POST COMMENT</button>
			</div>
		</form>
		<?php } ?>
<!-- comment EOF -->
				</div>



				<div class="col-12 col-lg-3 ">
					<div class="tt-product-single-aside">
						<div class="tt-collapse open tt-services-aside">
						<div class="tt-collapse-content">
						<table class="table d-xl-table-row" style="width: 100%">
							<tbody>
								<tr>
									<td style="width: 100px !important"></td>
									<td><?php echo ucfirst($product->fullname) ?></td>
								</tr>
								<tr>
									<td>Ratting</td>
									<td>	

										<div class="tt-review">
											<div class="tt-rating">
												<i class="icon-star"></i>
												<i class="icon-star"></i>
												<i class="icon-star"></i>
												<i class="icon-star-half"></i>
												<i class="icon-star-empty"></i>
											</div>
										</div>
									</td>
								</tr>

								<tr>
									<td colspan="2"></td>
								</tr>
							</tbody>
						</table>
						<a href="" class="text-center btn-link">Kunjungi</a>
								
						<br><br>
						<table class="table" style="width: 100%">
							<tbody>
								<tr>
									<td style="width: 100px !important">Kategori</td>
									<td><?php echo ucfirst($product->detail) ?></td>
								</tr>
								<tr>
									<td>Product Stock</td>
									<td><?php echo ucfirst($product->product_stock) ?></td>
								</tr>
								<tr>
									<td>Viewer</td>
									<td><?php echo ucfirst($product->view) ?></td>
								</tr>
								<tr>
									<td>Comment</td>
									<td><?php echo ucfirst($product->comment) ?></td>
								</tr>
								<tr>
									<td>Terjual</td>
									<td><?php echo ucfirst($product->terjual) ?></td>
								</tr>
							</tbody>
						</table>	
						</div>
						</div>
						<div class="tt-services-aside">
							<a href="#" class="tt-services-block">
								<div class="tt-col-icon">
									<i class="icon-f-48"></i>
								</div>
								<div class="tt-col-description">
									<h4 class="tt-title">FREE SHIPPING</h4>
									<p>Free shipping on all US order or order above $99</p>
								</div>
							</a>
							<a href="#" class="tt-services-block">
								<div class="tt-col-icon">
									<i class="icon-f-35"></i>
								</div>
								<div class="tt-col-description">
									<h4 class="tt-title">SUPPORT 24/7</h4>
									<p>Contact us 24 hours a day, 7 days a week</p>
								</div>
							</a>
							<a href="#" class="tt-services-block">
								<div class="tt-col-icon">
									<i class="icon-e-09"></i>
								</div>
								<div class="tt-col-description">
									<h4 class="tt-title">30 DAYS RETURN</h4>
									<p>Simply return it within 30 days for an exchange.</p>
								</div>
							</a>
						</div>
						<div class="tt-promo-brand">
							<img src="images/custom/tt-promo-brand-mobile.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container-indent wrapper-social-icon">
		<div class="container">
			<ul class="tt-social-icon justify-content-center">
				<li><a class="icon-g-64" href="http://www.facebook.com/"></a></li>
				<li><a class="icon-h-58" href="http://www.facebook.com/"></a></li>
				<li><a class="icon-g-66" href="http://www.twitter.com/"></a></li>
				<li><a class="icon-g-67" href="http://www.google.com/"></a></li>
				<li><a class="icon-g-70" href="https://instagram.com/"></a></li>
			</ul>
		</div>
	</div>


</div>

<!-- FOOTER ! -->
<!-- modal (AddToCartProduct) -->
<div class="modal  fade"  id="modalAddToCartProduct" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content ">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
			</div>
			<div class="modal-body">
				<div class="tt-modal-addtocart mobile">
					<div class="tt-modal-messages">
						<i class="icon-f-68"></i> Added to cart successfully!
					</div>
					<a href="#" class="btn-link btn-close-popup">CONTINUE SHOPPING</a>
			        <a href="shopping_cart_02.html" class="btn-link">VIEW CART</a>
			        <a href="page404.html" class="btn-link">PROCEED TO CHECKOUT</a>
				</div>
				<div class="tt-modal-addtocart desctope">
					<div class="row">
						<div class="col-12 col-lg-6">
							<div class="tt-modal-messages">
								<i class="icon-f-68"></i> Added to cart successfully!
							</div>
							<div class="tt-modal-product">
								<div class="tt-img">
									<img src="<?php echo base_url('assets') ?>/images/loader.svg" data-src="<?php echo base_url('assets') ?>/images/product/product-01.jpg" alt="">
								</div>
								<h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
								<div class="tt-qty">
									QTY: <span>1</span>
								</div>
							</div>
							<div class="tt-product-total">
								<div class="tt-total">
									TOTAL: <span class="tt-price">$324</span>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-6">
							<a href="#" class="tt-cart-total">
								There are 1 items in your cart
								<div class="tt-total">
									TOTAL: <span class="tt-price">$324</span>
								</div>
							</a>
							<a href="#" class="btn btn-border btn-close-popup">CONTINUE SHOPPING</a>
							<a href="shopping_cart_02.html" class="btn btn-border">VIEW CART</a>
							<a href="#" class="btn">PROCEED TO CHECKOUT</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- modal (quickViewModal) -->

<!-- modalVideoProduct -->
<div class="modal fade"  id="modalVideoProduct" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-video">
		<div class="modal-content ">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
			</div>
			<div class="modal-body">
				<div class="modal-video-content">

				</div>
			</div>
		</div>
	</div>
</div>
<!-- modal (ModalSubsribeGood) -->
<div class="modal  fade"  id="ModalSubsribeGood" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xs">
		<div class="modal-content ">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
			</div>
			<div class="modal-body">
				<div class="tt-modal-subsribe-good">
					<i class="icon-f-68"></i> You have successfully signed!
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	function replay(paramId){
		$('#com_parent_id').val(paramId);
		// $('#comment').focus();
		// $(window).scrollTop($('#comment').position().top);
		$('html, body').animate({
	        scrollTop: $("#comment").offset().top-1
	    }, 600, function(){$( "#comment" ).focus();});
	}
</script>


<script type="text/javascript">
$(document).ready(function(){
$('.pagination').pagination({
        items: <?php echo $commentsRows ?>,
        itemsOnPage: 2,
        cssStyle: 'light-theme',
		currentPage : 1,
		onPageClick : function(pageNumber) {
			jQuery(".tt-comments-layout").html('<img src="<?php echo base_url('assets') ?>/images/loader.svg">');
			jQuery(".tt-comments-layout").load('<?php echo base_url("ajax/comment?product_id=".$product->product_id."&per_page=") ?>' + pageNumber);
			$('html, body').animate({
	        scrollTop: $(".tt-comments-layout").offset().top-60
	    }, 800, function(){$( ".tt-comments-layout" ).focus();});
		}
    });
});
</script>