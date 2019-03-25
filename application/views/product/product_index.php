<style type="text/css">
body{margin:0;font-family:Roboto,-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI","Helvetica Neue",Arial,sans-serif;font-size:.812rem;font-weight:400;line-height:1.5;color:#888da8;background-color:#edf2f6}
	.ui-block {
    background-color: #fff;
    border-radius: 5px;
    border: 1px solid #e6ecf5;
    margin-bottom: 15px;
}


.phone_wrapper main {
  flex: 1;
  width: 200%;
}
.phone_wrapper main .tab_reel {
  width: 100%;
  display: flex;
  justify-content: space-between;
  transition: 0.5s cubic-bezier(0.18, 1.14, 0.5, 1.18);
}
.phone_wrapper main .tab_reel .tab_panel1, .phone_wrapper main .tab_reel .tab_panel2 {
  width: 50%;
  padding: 10px;
}
.phone_wrapper main .card {
  width: 100%;
  height: auto;
  padding-right: 10px;
  margin-right: 10px;
  border-radius: 6px;
  background: white;
}
.phone_wrapper main .card_large figure {
  width: 100%;
  height: 100px;
  margin: 0;
  background: #bfd3f8;
}
.phone_wrapper main .card_large .desc {
  padding-left: 0px;
}
.phone_wrapper main .card_list {
  display: flex;
  align-items: center;
  flex-direction: row;
}
.phone_wrapper main .card_list figure {
  width: 40px;
  height: 40px;
  background: #bfd3f8;
  margin-right: 4px;
  margin-bottom: 4px;
}
.phone_wrapper main .card_list .desc {
  flex: 1;
}
.phone_wrapper main .desc {
  width: 100%;
  padding: 10px;
}
.phone_wrapper main .desc .block {
  width: 40%;
  height: 7px;
  margin-bottom: 5px;
  background: #92b4f2;
}
.phone_wrapper main .desc .block:nth-child(2) {
  width: 35%;
  margin-bottom: 0px;
}

.tab1.active ~ .indicator {
  left: 0;
}

.tab2.active ~ .indicator {
  left: 50%;
}

.loading-image {display: block;margin: 5px auto;}
.end-record-info {text-align: center;border-top: 1px solid #ddd;padding: 5px 0;background: #f9f9f9;}


.friend-list {
  list-style: none;
margin-left: -40px;
}

.friend-list li {
  border-bottom: 1px solid #eee;
}

.friend-list li a img {
  float: left;
  width: 45px;
  height: 45px;
  margin-right: 0px;
}

 .friend-list li a {
  position: relative;
  display: block;
  padding: 10px;
  transition: all .2s ease;
  -webkit-transition: all .2s ease;
  -moz-transition: all .2s ease;
  -ms-transition: all .2s ease;
  -o-transition: all .2s ease;
}

.friend-list li.active a {
  background-color: #f1f5fc;
}

.friend-list li a .friend-name, 
.friend-list li a .friend-name:hover {
  color: #777;
}

.friend-list li a .last-message {
  width: 65%;
  white-space: nowrap;
  text-overflow: ellipsis;
  overflow: hidden;
}

.friend-list li a .time {
  position: absolute;
  top: 10px;
  right: 8px;
}

small, .small {
  font-size: 85%;
}

.friend-list li a .chat-alert {
  position: absolute;
  right: 8px;
  top: 27px;
  font-size: 10px;
  padding: 3px 5px;
}

.chat {
    list-style: none;
    margin: 0;
    padding: 4px;
}

.chat-message{
    background: #f9f9f9;
    margin-top: 52px;  
}

.chat li img {
  width: 45px;
  height: 45px;
  border-radius: 50em;
  -moz-border-radius: 50em;
  -webkit-border-radius: 50em;
}

img {
  max-width: 100%;
}

.chat-body {
  padding-bottom: 20px;
}

.chat li.left .chat-body {
  margin-left: 70px;
  background-color: #fff;
}

.chat li .chat-body {
  position: relative;
  font-size: 11px;
  padding: 10px;
  border: 1px solid #f1f5fc;
  box-shadow: 0 1px 1px rgba(0,0,0,.05);
  -moz-box-shadow: 0 1px 1px rgba(0,0,0,.05);
  -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);
}

.chat li .chat-body .header {
  padding-bottom: 5px;
  border-bottom: 1px solid #f1f5fc;
}

.chat li .chat-body p {
  margin: 0;
}

.chat li.left .chat-body:before {
  position: absolute;
  top: 10px;
  left: -8px;
  display: inline-block;
  background: #fff;
  width: 16px;
  height: 16px;
  border-top: 1px solid #f1f5fc;
  border-left: 1px solid #f1f5fc;
  content: '';
  transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
}

.chat li.right .chat-body:before {
  position: absolute;
  top: 10px;
  right: -8px;
  display: inline-block;
  background: #fff;
  width: 16px;
  height: 16px;
  border-top: 1px solid #f1f5fc;
  border-right: 1px solid #f1f5fc;
  content: '';
  transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -o-transform: rotate(45deg);
}

.chat li {
  margin: 15px 0;
}

.chat li.right .chat-body {
  margin-right: 70px;
  background-color: #fff;
}

.chat-message {
  padding: 4px;
  padding-bottom: 60px;
}

.chat-box {
  position: fixed;
  bottom: 0;
  right: 0;
  padding: 15px;
  border-top: 1px solid #eee;
  transition: all .5s ease;
  -webkit-transition: all .5s ease;
  -moz-transition: all .5s ease;
  -ms-transition: all .5s ease;
  -o-transition: all .5s ease;
}

.primary-font {
  color: #3c8dbc;
}

a:hover, a:active, a:focus {
  text-decoration: none;
  outline: 0;
}
</style>

<div id="tt-pageContent">
	<div class="container-indent" style="margin-top: 10px !important">
		<div class="container">


			<div class="row" style="padding-top: 10px">
				<div class="col-sm-1 col-md-2 col-lg-2 tt-hidden-mobile">
				</div>

				<div class="col-sm-12 col-md-8 col-lg-5">

					<div class="ui-block">
							<article class="hentry post has-post-thumbnail">

							<div class="col-12 hidden-xs hidden-sm">
								<div class="tt-product-single-img">
									<div>
										<?php $images = $this->ProductModel->getImage($product->product_id); ?>
										<?php foreach($images as $imagess) {} ?>
										<?php if (isset($imagess->file_url)) { ?>
										<img class="zoom-product" src='<?php echo base_url($imagess->file_url) ?>' width="100%">
										<?php } else  { ?>
										<img class="zoom-product" src='<?php echo base_url('assets/images/custom/noimage.png') ?>' width="100%">
										<?php } ?>
									</div>
								</div>
								<div class="product-images-carousel pb-2">
									<ul id="smallGallery" class="arrow-location-02  slick-animated-show-js">
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

								<div class="col-12 p-2 visible-xs visible-sm">
									
									<div class="tt-mobile-product-layout visible-xs visible-sm">
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

								</div>
							</article>


							<?php if ($product->input_by != user_id() ) { ?>
								<form method="post" action="<?php echo base_url('cart/cart/' . $product->product_id) ?>">

								<div class="tt-wrapper">
									<div class="row tt-row-custom-01 tt-responsive-lg pt-2">

											<?php if (isset($product->whatsapp) AND $product->whatsapp != "" ) { ?>
												<div class="col-item pl-5 pr-1">
													<a href="https://api.whatsapp.com/send?phone=<?php echo number_hp_prefix($product->whatsapp) ?>" target="blank" class="btn btn-border btn-small" style="width: 120px"><i class="icon-f-88"></i>Whatsapp</a>
												</div>
												<div class="col-item">
													<button class="btn btn-small btn-loader" style="width: 120px"><i class="icon-f-39"></i>PIZ</button>
												</div>
											<?php } else { ?>
												<div class="col-item pl-5 pr-1">
													<button class="btn btn-small btn-loader" style="width: 220px"><i class="icon-f-39"></i>PIZ</button>
												</div>
											<?php } ?>
												
									
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

				<div class="col-sm-12 col-md-4 col-lg-5 m-0">
					<div class="ui-block">
							<article class="">
								<div class="media text-muted p-0"></div>
								
								<div class="p-1">
					<div class="">
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
					</div>
				</div>
							<article class="p-2"><?php echo xxs_filter($product->product_desc) ?></article>
							</article>
					</div>
				</div>

				<div class="col-sm-1 col-md-2 col-lg-2 tt-hidden-mobile" style="position: fixed!important">
					<?php //echo $list_chat ?>
				</div>



			</div>

			<div class="row">
				<div class="col-sm-1 col-md-2 col-lg-2 tt-hidden-mobile">
				</div>

				<div class="col-sm-12 col-md-4 col-lg-5">

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

	            <div class="ui-block m-0 p-1">
	                <ul class="chat tt-comments-layout">
	                	<?php if ($comments != "" )  { ?>
						<?php foreach ($comments->result() as $coment) { ?>
	                            <li class="left clearfix">
	                              <span class="chat-img float-left">
	                                <img src="<?php echo get_photo($coment->input_by) ?>" alt="User Avatar">
	                              </span>
	                              <div class="chat-body clearfix">
	                                <div class="header">
	                                  <strong class="primary-font"><?php echo $coment->fullname ?></strong>
	                                  <small class="float-right text-muted"><i class="fa fa-clock-o"></i> <?php echo timeAgo(strtotime($coment->input_date)); ?></small>
	                                </div>
	                                <p>
	                                  <?php echo $coment->comment ?>
	                                </p>
	                              </div>
	                              <ul>
	                              	<?php $parentsCom = $this->CommentsModel->getByParentCom($product->product_id, $coment->com_id); ?>
									<?php if ($parentsCom != "" )  { ?>
									<?php foreach ($parentsCom as $parentCom) { ?>
		                              	<li class="left clearfix">
			                              <span class="chat-img float-left">
			                                <img src="<?php echo get_photo($parentCom->input_by) ?>" alt="User Avatar">
			                              </span>
			                              <div class="chat-body clearfix">
			                                <div class="header">
			                                  <strong class="primary-font"><?php echo $parentCom->fullname ?></strong>
			                                  <small class="float-right text-muted"><i class="fa fa-clock-o"></i> <?php echo timeAgo(strtotime($parentCom->input_date)); ?></small>
			                                </div>
			                                <p>
			                                  <?php echo $parentCom->comment ?>
			                                </p>
			                              </div>
			                            </li>

									<?php } ?>
									<?php } ?>
	                              </ul>
	                            </li>
	                    <?php } ?>
						<?php } ?>
	                </ul>

	            <?php if (user_id()) { ?>
					<form method="post" action="<?php echo base_url('p/comment/add') ?>">
						<div class="form-group mb-2">
							<label for="textarea" class="control-label"></label>
							<input type="hidden" name="product_id" value="<?php echo $product->product_id ?>">
							<input type="hidden" name="com_parent_id" id="com_parent_id" value="">
							<textarea class="form-control"  id="comment" name="comment" placeholder="Write a Comment" rows="1" required="true" maxlength="100" style="min-height: 65px!important"></textarea>
						</div>
						<div class="form-group mb-1">
							<button type="submit" class="btn btn-loader btn-small"><?php echo $this->lang->line('send'); ?></button>
						</div>
					</form>
					<?php } ?>
	            </div>         
 

					
				</div>
				<div class="col-sm-1 col-md-2 col-lg-2 tt-hidden-mobile" style="position: fixed!important">
					<?php //echo $list_chat ?>
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
        itemsOnPage: 20,
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