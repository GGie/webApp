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
    <link rel="manifest" href="manifest.json">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/theme.css">
</head>
<body>
<script src="<?php echo base_url('assets') ?>/external/jquery/jquery.min.js"></script>
<script src="<?php echo base_url('assets') ?>/external/bootstrap/js/bootstrap.min.js"></script>


<div class="css-7diskt e14i8oev0">
    <a href="<?php echo base_url() ?>">
        <button type="button" class="css-o4j45q"><i class="css-15ra8wm"></i></button>
    </a>
    <div class="css-1k716hv e14i8oev2">
        <button type="button" class="css-o4j45q" onclick="modal_bagikan('<?php echo base_url('p/product/' . $product->product_id . '-' . replace_url_char($product->product_name)) ?>')"><i class="css-1yyhqwz"></i></button>
        <button type="button" class="css-o4j45q" onclick="modal_options('<?php echo $product->product_id ?>')"><i class="css-1gke5lo"></i></button>
    </div>
</div>

<style>
body {
	font-family: 'Oxygen', sans-serif;
	/*background-image: linear-gradient(rgb(255, 255, 255), rgb(229, 245, 255));*/
	height: 100%;
}

/* header product */
.css-7diskt {
    position: fixed;
    display: flex;
    -webkit-box-pack: justify;
    justify-content: space-between;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 58px;
    z-index: 10;
    box-shadow: none;
    background-color: transparent;
    background-image: linear-gradient(to top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.35));
    padding: 10px 0px;
}

.css-1gpvpqr {
    position: fixed;
    display: flex;
    -webkit-box-pack: justify;
    justify-content: space-between;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 58px;
    z-index: 10;
    box-shadow: rgba(0, 0, 0, 0.12) 0px 2px 4px 0px;
    background-color: white;
    background-image: none;
    padding: 10px 0px;
}

.css-o4j45q {
    cursor: pointer;
    width: 40px;
    height: 40px;
    position: relative;
    display: inline-block;
    border-width: initial;
    border-style: none;
    border-color: initial;
    border-image: initial;
    margin: 0px;
    padding: 0px;
    background: none;
}

.css-15ra8wm {
    width: 40px;
    height: 40px;
    display: block;
    background-image: url(https://ecs7.tokopedia.net/assets-tokopedia-lite/v2/atreus/production/585d3084.svg);
    background-size: 18px 15.8px;
    background-color: transparent;
    margin: 0px auto;
    background-repeat: no-repeat;
    background-position: center center;
}

.css-1k716hv {
    width: auto;
    height: 40px;
}

.css-o4j45q {
    width: 40px;
    height: 40px;
    position: relative;
    display: inline-block;
    border-width: initial;
    border-style: none;
    border-color: initial;
    border-image: initial;
    margin: 0px;
    padding: 0px;
    background: none;
}

.css-1yyhqwz {
    width: 40px;
    height: 40px;
    display: block;
    background-image: url(https://ecs7.tokopedia.net/assets-tokopedia-lite/v2/atreus/production/ff6dd2ae.svg);
    background-size: 18px 18px;
    background-color: transparent;
    background-repeat: no-repeat;
    background-position: center center;
}
.css-1i1sjxo {
    width: 40px;
    height: 40px;
    display: block;
    background-image: url(https://ecs7.tokopedia.net/assets-tokopedia-lite/v2/atreus/production/2440e2b9.svg);
    background-size: 20px 20px;
    background-color: transparent;
    background-repeat: no-repeat;
    background-position: center center;
}

.css-1gke5lo {
    width: 40px;
    height: 40px;
    display: block;
    background-image: url(https://ecs7.tokopedia.net/assets-tokopedia-lite/v2/atreus/production/437980b7.svg);
    background-size: 5px 20px;
    background-color: transparent;
    background-repeat: no-repeat;
    background-position: center center;
}
.css-2rhlht {
    width: 100%;
    height: auto;
    position: relative;
    overflow: hidden;
    margin: 0px 0px 8px;
}

.css-1ir259t {
    width: 33.3333%;
    float: left;
    box-sizing: border-box;
}
.css-1q8bmtq {
    font-size: 12px;
    text-align: center;
    cursor: pointer;
    display: block;
    color: rgb(66, 181, 73);
}
.css-5ix92y {
    text-align: center;
    display: block;
}
.css-1a1m5rp {
    height: auto;
    background-color: rgb(246, 246, 246);
    text-align: center;
    font-size: 12px;
    overflow: hidden;
    border-radius: 4px;
    margin: 16px 0px 10px;
}
.css-1v140f9 {
    width: 25%;
    float: left;
	padding: 8px;
    box-sizing: border-box;
}
.css-1tfwnyr {
    width: 50%;
    float: left;
	padding: 8px;
    box-sizing: border-box;
}
.css-qzs10p {
    color: rgba(0, 0, 0, 0.38);
    line-height: 1.5;
}
.css-ams8qx {
    font-weight: bold;
    color: rgba(0, 0, 0, 0.7);
    line-height: normal;
}

.css-h6c0kg {
    width: 27px;
    height: 27px;
    margin-right: auto;
    margin-left: auto;
    margin-bottom: 4px;
    background: url(https://ecs7.tokopedia.net/assets-tokopedia-lite/v2/atreus/production/76136a83.svg) 0% 0% / cover no-repeat transparent;
}
.css-jtc8x8 {
    width: 27px;
    height: 27px;
    margin-right: auto;
    margin-left: auto;
    margin-bottom: 4px;
    background: url(https://ecs7.tokopedia.net/assets-tokopedia-lite/v2/atreus/production/2ef7fadc.png) 0% 0% / cover no-repeat transparent;
}

/* card */
.tt-review {
    border-bottom: #eee 1px solid;
    font-weight: 600;
}
.css-gmv7gc-unf-card {
    display: block;
    position: relative;
    background-color: rgb(255, 255, 255);
    box-shadow: rgba(49, 53, 59, 0.12) 0px 1px 6px 0px;
    margin: 16px 0px;
    padding: 0px;
    border-radius: initial;
    overflow: hidden;
}
.css-12jlrxv-unf-list.unf-list--no-margin {
    margin: 0px;
}
.css-12jlrxv-unf-list {
    margin: 16px 0px;
    padding: 0px;
    list-style: none;
}
ul, menu, dir {
    display: block;
    list-style-type: disc;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    padding-inline-start: 40px;
}
.css-18svnoq {
    width: 100%;
    font-size: 1rem;
    margin-top: 0px;
    color: rgba(0, 0, 0, 0.7);
    position: relative;
    padding: 16px;
}
.css-1hltsbh {
    line-height: 16px;
    overflow: hidden;
    text-overflow: ellipsis;
}
.css-aj7x79 {
    font-size: 12px;
    margin-top: 8px;
	font-weight: normal!important;
}
.css-1f7grzx {
    display: inline-block;
    vertical-align: middle;
    background-image: url(https://ecs7.tokopedia.net/assets-tokopedia-lite/v2/atreus/production/045aaecb.svg);
    width: 24px;
    height: 24px;
    background-size: 20px 22px;
    margin-right: 10px;
    background-repeat: no-repeat;
    background-position: center center;
}
.css-111ezrj {
    display: inline-block;
    vertical-align: middle;
    background-image: url(https://ecs7.tokopedia.net/assets-tokopedia-lite/v2/atreus/production/69cc71e4.svg);
    width: 24px;
    height: 24px;
    background-size: 23.2px 13.6px;
    margin-right: 10px;
    background-repeat: no-repeat;
    background-position: center center;
}

/* button */
.css-btn-overlay {
    display: block;
    background-color: rgb(255, 255, 255);
    box-shadow: rgba(49, 53, 59, 0.12) 0px 1px 6px 0px;
    position: fixed;
    width: 100%;
    height: 60px;
    bottom: 0px;
    left: 0px;
    right: 0px;
    z-index: 2;
    padding: 10px 0px;
    overflow: hidden;
    border-radius: 0px;
    margin: 0px !important;
}
.css-gq7rz0 {
    width: 100%;
    height: 40px;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    padding: 0px 4px;
}
.css-gq7rz0 .pdpButtonGrid.col {
    padding-left: 52px;
}

.css-gq7rz0 .pdpButtonGrid {
    display: flex;
    flex-direction: column;
    flex: 1 1 50%;
    padding: 0px 4px;
}
.css-ytsv0f {
    position: absolute;
    left: 8px;
    background-color: rgb(255, 255, 255);
    border-radius: 8px;
    border-width: 1px;
    border-style: solid;
    border-color: rgb(224, 224, 224);
    border-image: initial;
    padding: 7px;
}
.css-ytsv0f i {
    width: 24px;
    height: 24px;
    display: block;
    background-image: url(https://ecs7.tokopedia.net/assets-tokopedia-lite/v2/atreus/production/faed9550.svg);
}
.css-gq7rz0 .pdpButtonGrid button {
    line-height: 40px;
    font-size: 13px;
    font-weight: 400;
    text-align: center;
    padding: 0px;
}

.css-gq7rz0 .pdpButtonGrid {
    display: flex;
    flex-direction: column;
    flex: 1 1 50%;
    padding: 0px 4px;
}
.css-gq7rz0 .pdpButtonGrid button {
    line-height: 40px;
    font-size: 13px;
    font-weight: 400;
    text-align: center;
    padding: 0px;
}

.css-aqsu6h {
    display: inline-block;
    width: 16px;
    height: 16px;
    background-image: url(https://ecs7.tokopedia.net/assets-tokopedia-lite/v2/atreus/production/96498aee.svg);
    background-size: 8px 13px;
    position: absolute;
    top: 0px;
    bottom: 0px;
    right: 16px;
    background-repeat: no-repeat;
    background-position: right center;
    margin: auto;
}
/* comment */
.header-content {
    padding: 12px 5px 5px 0px;
    font-size: 18px;
}
.css-product {
    display: block;
    position: relative;
    background-color: rgb(255, 255, 255);
    box-shadow: rgba(49, 53, 59, 0.12) 0px 1px 6px 0px;
    margin: 6px;
    padding: 4px;
    border-radius: 8px;
    overflow: hidden;
}
.css-7ieh0i {
    padding-left: 4px;
    padding-right: 4px;
}
.css-uudpsy {
    flex-direction: row;
    -webkit-box-pack: justify;
    justify-content: space-between;
    align-items: flex-start;
}
.css-yb5pdp {
    font-size: 14px;
    color: rgba(0, 0, 0, 0.54);
}
.css-f618cd {
    display: flex;
    height: 40px;
    -webkit-box-pack: justify;
    justify-content: space-between;
    -webkit-box-align: center;
    align-items: center;
    color: rgba(0, 0, 0, 0.38);
    font-size: 11px;
    border-top: 1px solid rgb(241, 241, 241);
    margin: 0px -8px;
    padding: 8px;
}
.css-hidden {
    display: none;
}
.css-comment {
    height: auto;
    opacity: 1;
    border-top: 1px solid rgb(241, 241, 241);
    margin-left: 0px;
    padding: 4px 4px 4px 15px;
}
.css-name {
    width: 60%;
    float: left;
    color: #007bff!important;
    font-size: 14px;
    line-height: 1.5;
    color: rgba(0, 0, 0, 0.54);
    margin-bottom: 4px;
}
.css-date {
    text-align: right;
    padding-left: 10px;
    font-size: 11px;
    color: rgba(0, 0, 0, 0.38);
    line-height: 1.55;
    margin-bottom: 10px;
}
.css-label-penjual span {
    display: inline-block;
    background-color: rgb(218, 227, 245);
    font-size: 11px;
    font-weight: 600;
    line-height: 1.36;
    text-align: center;
    color: #007bff;
    padding: 2px 8px;
    border-radius: 20px;
    margin-bottom: 4px;
}
.css-1vpo0ep {
    font-size: 14px;
    line-height: 1.5;
    color: rgba(0, 0, 0, 0.54);
}

/* MODAL MOBILE */
.css-nav-modal-header {
    height: 52px;
    position: relative;
}
.css-modal-header {
    position: relative;
    z-index: 40;
}
.css-description {
    width: 100%;
    height: 52px;
    color: rgba(0, 0, 0, 0.7);
    background-color: white;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    position: relative;
    z-index: 1;
    box-shadow: rgba(0, 0, 0, 0.15) 0px 1px 3px 0px;
    transition: background-color 0.24s ease 0s;
    cursor: pointer;
}
.css-back {
    width: 52px;
    height: 100%;
    display: flex;
    position: relative;
    padding: 6px;
}

.css-textarea {
    font-size: 14px;
    font-weight: normal;
    line-height: 21px;
    color: rgba(0, 0, 0, 0.54);
    background-color: white;
    text-align: justify;
    resize: none;
    width: 100%;
    height: calc(100vh - 55px);
    padding: 16px;
    border-width: initial;
    border-style: none;
    border-color: initial;
    border-image: initial;
    outline: none;
}
.css-over {
    position: fixed;
    bottom: 0px;
    left: 0px;
    width: 100%;
    box-shadow: rgba(0, 0, 0, 0.15) 0px -1px 7px 0px;
    background-color: rgba(255, 255, 255, 0.96);
    z-index: 20;
    padding: 8px 16px;
}

.css-title {
    color: rgba(0, 0, 0, 0.7);
    font-size: 10px;
    font-weight: 600;
    line-height: 1.38;
    overflow-wrap: break-word;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    margin: 13px 0px 8px;
    overflow: hidden;
}
.css-2rhlht {
    width: 100%;
    height: auto;
    position: relative;
    overflow: hidden;
    margin: 0px 0px 8px;
}
.css-1lrkg2s {
    font-size: 16px;
    font-weight: bold;
    font-style: normal;
    font-stretch: normal;
    line-height: 2.13;
    letter-spacing: normal;
    color: #2879fe;
    margin: 0px;
    border-bottom: 1px solid #eee;
}

/* messages */
.chat-message {
  padding: 4px;
  padding-bottom: 60px;
}

.chat-box {
  position: fixed;
  bottom: 0;
  right: 0;
  padding: 6px;
  border-top: 1px solid #eee;
  transition: all .5s ease;
  -webkit-transition: all .5s ease;
  -moz-transition: all .5s ease;
  -ms-transition: all .5s ease;
  -o-transition: all .5s ease;
}
.btn-messages {
    outline: none;
    width: calc(100% - 45px);
    min-height: 30px;
    max-height: 36px;
    line-height: 1.43;
    overflow-y: scroll;
    overflow-x: hidden;
    border-width: 1px;
    border-style: solid;
    border-color: rgb(224, 224, 224);
    border-image: initial;
    border-radius: 8px;
    padding: 10px 16px;
}
</style>
<body class="tt-page-product-single">
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


<div id="tt-pageContent">
	<div class="">
		<!-- mobile product slider  -->
		<div class="tt-mobile-product-layout visible-xs">
			<div class="tt-mobile-product-slider arrow-location-center slick-animated-show-js">
                <?php if (count($images)) { ?>
                    <?php foreach($images as $product_images) { ?>
                            <div><img src="<?php echo getProductPhotoUrl($product_images->image_url) ?>" alt=""></div>                    
                    <?php } ?>
                <?php } else  { ?>
                    <img class="zoom-product" src='<?php echo base_url('assets/images/custom/noimage.png') ?>' width="100%">
                <?php } ?>

                <?php if($product->video_youtube_url != "") { ?>
                <div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="<?php echo $product->video_youtube_url ?>" allowfullscreen></iframe>
                    </div>
                </div>
                <?php } ?>
                <meta property="og:image" content="<?php echo base_url(@$product_images->image_url) ?>">
				
				
				<div>
					<div class="tt-video-block">
						<a href="#" class="link-video"></a>
						<video class="movie" src="http://softali.net/victor/wookie/html/video/video.mp4" poster="http://softali.net/victor/wookie/html/video/video_img.jpg"></video>
					</div>
				</div>
			</div>
		</div>

		<!-- /mobile product slider  -->
		<div class="container  container-fluid-mobile">
			<div class="row">
				<div class="col-6 hidden-xs">
					<div class="tt-product-single-img">
						<div>
							<button class="tt-btn-zomm tt-top-right"><i class="icon-f-86"></i></button>
							<img class="zoom-product" src='http://softali.net/victor/wookie/html/images/product/product-41.jpg' data-zoom-image="http://softali.net/victor/wookie/html/images/product/product-41.jpg" alt="">
						</div>
					</div>
					<div class="product-images-carousel">
						<ul id="smallGallery" class="arrow-location-02  slick-animated-show-js">
                            <?php foreach($images as $product_images) { ?>
                                <?php if (isset($product_images->image_url)) { ?>
                                    <li><a href="#" data-image="<?php echo base_url($product_images->image_url) ?>" data-zoom-image=""><img src="<?php echo base_url($product_images->image_url) ?>" alt="" /></a></li>
                                <?php } else  { ?>
                                <li><a href="#" data-image="<?php echo base_url('assets/images/custom/noimage.png') ?>" data-zoom-image=""><img src="<?php echo base_url('assets/images/custom/noimage.png') ?>" alt="" /></a></li>
                                <?php } ?>
                            <?php } ?>
							<li><a class="zoomGalleryActive" href="#" data-image="http://softali.net/victor/wookie/html/images/product/product-41.jpg" data-zoom-image="http://softali.net/victor/wookie/html/images/product/product-41.jpg"><img src="http://softali.net/victor/wookie/html/images/product/product-41.jpg" alt="" /></a></li>
							<li><a href="#" data-image="http://softali.net/victor/wookie/html/images/product/product-41-02.jpg" data-zoom-image="http://softali.net/victor/wookie/html/images/product/product-41-02.jpg"><img src="http://softali.net/victor/wookie/html/images/product/product-41-02.jpg" alt="" /></a></li>
							<li><a href="#" data-image="http://softali.net/victor/wookie/html/images/product/product-41-03.jpg" data-zoom-image="http://softali.net/victor/wookie/html/images/product/product-41-03.jpg"><img src="http://softali.net/victor/wookie/html/images/product/product-41-03.jpg" alt="" /></a></li>
							<li>
								<div class="video-link-product" data-toggle="modal" data-type="youtube" data-target="#modalVideoProduct" data-value="http://www.youtube.com/embed/GhyKqj_P2E4">
									<img src="http://softali.net/victor/wookie/html/images/product/product-small-empty.png" alt="" />
									<div>
										<i class="icon-f-32"></i>
									</div>
								</div>
							</li>
							<li>
								<div class="video-link-product" data-toggle="modal" data-type="video" data-target="#modalVideoProduct" data-value="http://softali.net/victor/wookie/html/video/video.mp4" data-poster="http://softali.net/victor/wookie/html/video/video_img.jpg">
									<img src="http://softali.net/victor/wookie/html/images/product/product-small-empty.png" alt="" />
									<div>
										<i class="icon-f-32"></i>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-6 p-0">
<div class="tt-product-single-info pt-2">
    <h3 class="css-title pb-0"><?php echo xxs_filter($product->product_name) ?></h3>
    <div class="css-2rhlht"><p class="css-1lrkg2s"><?php echo number_rp($product->price) ?></p></div>
<style>
audio{
	background-color: #f1f3f4;
	border-radius: 4px;
    outline: none;
}
</style>
</div>
<!-- <div class="css-2rhlht tt-product-single-info">
    <div class="css-1ir259t">
        <a class="css-5ix92y" href="/mka-official/hand-warmer-and-powerbank-merah-muda/review">
            <div class="css-1hn3111"><span class="large-text">5.0</span><i class="css-1a48x6f"></i><span class="small-text">/5</span></div>
            <div class="css-dp39bs">1 Ulasan</div>
        </a>
    </div>
    <div class="css-1ir259t">
        <a class="css-1q8bmtq" href="/mka-official/hand-warmer-and-powerbank-merah-muda/talk">
            <div class="css-h6c0kg"></div>1 Diskusi</a>
    </div>
    <div class="css-1ir259t">
        <div role="presentation" class="css-1q8bmtq">
            <div class="css-jtc8x8"></div>Kurir</div>
    </div>
</div> -->



                <div class="tt-product-single-info pt-0">
                        <div class="css-1a1m5rp mt-4">
                            <div class="css-1v140f9">
                                <div class="css-qzs10p">Diskusi</div>
                                <div class="css-ams8qx"><?php echo $product->comment ?></div>
                            </div>
                            <div class="css-1tfwnyr">
                                <div class="css-qzs10p">Ratting</div>
                                <div class="css-ams8qx">100% Aman</div>
                            </div>
                            <div class="css-1v140f9">
                                <div class="css-qzs10p">Dilihat</div>
                                <div class="css-ams8qx"><?php echo $product->viewed ?></div>
                            </div>
                        </div>

                        <?php foreach($music as $product_music) { ?>
                            <?php if($product_music->file_url != "") { ?>
                            <audio controls>
                                <source src="<?php echo base_url($product_music->file_url) ?>">
                            </audio>
                            <?php } ?>
                        <?php } ?>


						<div class="tt-review">
							<a href="#">DESKRIPSI</a>
						</div>
						<div class="tt-wrapper">
                            <?php echo description($product->description) ?>
                            <?php if ( strlen($product->description) >= 150 ) { ?>...
                                <div><a href="javascript:void(0)" class="btn-link" id="btn-desc">Selengkapnya</a></div>
                            <?php } ?>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php foreach($document as $product_docx) {} ?>
    <?php if($document != null) { ?>
    </div>
        <div class="unf-card unf-card--container css-gmv7gc-unf-card eue3g1e0">
            <ul class="css-12jlrxv-unf-list unf-list unf-list--no-margin"></ul>
            <div class="row css-18svnoq e1k9fmrc0">
                <div class="css-1hltsbh" style="width: 80%"><?php echo $product_docx->file_name ?></div>
                <div class="css-1hltsbh" style="width: 20%"><!-- 
                    <a href="javascript:void(0)" onclick="show_docx('<?php echo base_url($product_docx->file_url) ?>')">SHOW</a> -->
                    <a href="javascript:void(0)" class="btn-link" id="btn-docx">SHOW</a>
                </div>
                <i class="css-aqsu6h"></i>
            </div>
        </div>
    <?php } ?>



<!-- <div class="unf-card unf-card--container css-gmv7gc-unf-card eue3g1e0">
    <ul class="css-12jlrxv-unf-list unf-list unf-list--no-margin"></ul>
    <div class="css-18svnoq e1k9fmrc0">
        <div class="css-1hltsbh">2 Kurir • Ongkos Kirim mulai dari Rp18.000</div>
        <div class="css-aj7x79"><i class="css-1f7grzx"></i>Dari <b>Kota Administrasi Jakarta Selatan</b></div>
        <div class="css-aj7x79"><i class="css-111ezrj"></i>Ke <b>Kab. Bekasi</b></div><i class="css-aqsu6h"></i></div>
</div> -->

<!-- Comment -->
<?php if ($comments->num_rows() > 0) { ?>
<?php foreach ($comments->result() as $coment) { ?>
<?php $parentsCom = $this->CommentsModel->getByParentCom($product->product_id, $coment->com_id); ?>
<div class="css-product">
    <div class="css-7ieh0i">
        <div class="css-uudpsy">
     
                <div>
                    <a class="css-name" href="https://www.tokopedia.com/people/9012755">
                        <?php echo is_username($coment->input_by) ?>
                    </a>
                    <div class="css-date"><?php echo $coment->input_date ?></div>
                </div>
            
        </div>
        <div class="css-yb5pdp">
            <div class="css-1d7niuo">
                <?php echo $coment->comment ?>
            </div>
            <div class="css-1es2ftq"></div>
        </div>

        <?php if ($parentsCom->num_rows() > 0 ) { ?>
        <div class="css-f618cd">
            <div><i class="icon-h-12"> </i>Lihat <?php echo $parentsCom->num_rows() ?> jawaban lainnya</div>
            <div onclick="view_diskusi(<?php echo $coment->com_id ?>)" style="cursor:pointer;" class="test"><strong> Lihat Balasan</strong></div>
        </div>
        <?php } else { ?>
        <div class="css-f618cd">
            <div><i class="icon-h-12"> </i>Belum ada jawaban</div>
            <div onclick="view_diskusi(<?php echo $coment->com_id ?>)" style="cursor:pointer;" class="test"></strong></div>
        </div>
        <?php } ?>
        <!-- <div class="css-hidden"> -->
        <div class="<?php echo $coment->com_id ?> css-hidden">
        
        <?php if ($parentsCom != null )  { ?>
            <?php foreach ($parentsCom->result() as $parentCom) { ?>
            <div class="css-comment">
              <div>
                <div class="css-name"><strong><?php echo is_username($coment->input_by) ?></strong><div class="css-label-penjual"><span>Penjual</span></div></div>
                <div class="css-date"><?php echo $coment->input_date ?></div>
              </div>
                <?php if ($product->input_by == $parentCom->input_by) { ?>
                    <div class="css-label-penjual"><span>Penjual</span></div>
                <?php } ?>
                <div class="css-1vpo0ep"><span> Ditunggu ulasan dan foto-nya ya agar </span></div>
            </div>
            <?php } ?>
        <?php } ?>
        

        </div>

    </div>
</div>
<?php } ?>
<?php } else { ?>
<div class="container-indent nomargin">
    <div class="tt-empty-search">
        <span class="tt-icon icon-e-40"></span>
        <div>Belum ada diskusi</div>
    </div>
</div>
<?php } ?>
<!-- Comment EOF -->

<?php if ( user_id() != $product->input_by ) { ?>
<div class="unf-card css-btn-overlay eue3g1e0">
    <div class="css-gq7rz0">
        <div class="pdpButtonGrid col">
            <a href="<?php echo base_url('messages/d/' . $product->input_by . user_id()) ?>">
                <span role="presentation" class="css-ytsv0f"><i></i></span>
            </a>
                <a href="<?php echo base_url('diskusi/p/' . $product->product_id) ?>" class="btn btn-border"><span>Berdiskusi</span></a>
        </div>
        <div class="pdpButtonGrid">
            <!-- <a href="<?php echo base_url('cart/p/' . $product->product_id) ?>" class="btn btn-border">
                <button class="btn" type="button"><span>Piz</span></button>
            </a> -->
            <a href="<?php echo base_url('cart/order/' . $product->product_id) ?>" class="btn">
                <span>PIZ</span>
            </a>
        </div>
    </div>
</div>
<?php } else { ?>
    <!-- button jika product adalah milik penjual -->
<?php } ?>


<script type="text/javascript">
    $('#btn-desc').click(function(){
      $("#modalDeskripsi").modal();
    });

    $('#btn-docx').click(function(){
      $("#modalDocx").modal();
    });

    function view_diskusi(id){
      $('.' + id).toggle(function () {
        $("." + id).removeClass("hidden");
        
    }, function () {
        $("." + id).addClass("hidden");
    });
    }

    function show_docx(url){
        $.confirm({
            title: '',
            content: '<iframe src=' + url + ' frameborder="0" width="100%"></iframe >',
            onContentReady: function () {
                var self = this;

            },
            columnClass: 'medium',
        });
    }
    function modal_options(id) {
        $("#modal-options-href"). attr("href", "<?php echo base_url('p/report/') ?>" + id);
        $("#modal-options").show();
    }

    function modal_options_hidden() {
        $("#modal-options-href"). attr("href", "");
        $("#modal-options").hide();
    }
    function modal_bagikan(id) {
        $("#modal-fb"). attr("href", "//www.facebook.com/sharer/sharer.php?u=" +id);
        $("#modal-wa"). attr("href", "https://api.whatsapp.com/send?phone=&text=Kunjungi product => " +id); 
        $("#modal-tw"). attr("href", "//twitter.com/intent/tweet/?text=Kunjungi dan beli product&amp;url=" +id);
        $("#modal-bagikan").show();
    }

    function modal_bagikan_hidden() {
        $("#modal-fb"). attr("href", "");
        $("#modal-wa"). attr("href", "");
        $("#modal-tw"). attr("href", "");
        $("#modal-bagikan").hide();
    }
</script>
<!-- modal options -->
<div id="modal-options" class="overlay active" style="display: none">
<div class="modal-bottomsheet  animated fadeInUpSm modal-bottomsheet--active">
    <div class="modal-bottomsheet__header">
        <div class="modal-close-btn" onclick="modal_options_hidden()">
            <img width="24px" height="24px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwBAMAAAClLOS0AAAAG1BMVEVHcEyfp7Gfp7KfprCfp7CfprCfprGqqrifprATGtrfAAAACHRSTlMAgF3wptnYEpfVhR4AAACYSURBVDjL3ZO9EQIhEEbBCgwJDa3AuQ7O3MRCbAB1br6yvZmDBYHXABvtD2+B5cO5iex1u5Tg9FjNvyuWQtDX/EU6Z99LHys8VZAgbVa4ypAd0NtVeEaCqrZVWC35RxrAEi1gmQ5IqR5IyAA4kAFwICMgIXEwew8AF6gVbk7HxQvSSHCINHZ8KHpaFAPKBwWHEkVR4zeYwH5fLGpn9kSs2QAAAABJRU5ErkJggg==">
        </div>
            <div class="header-title">
                <strong>Options</strong>
            </div>
    </div>
    <div class="social-media-list">
        <ul class="css-options-content">
        <a href="" id="modal-options-href">
        <li class="css-list-item css-list-item--image"><i class="icon-h-08" style="font-size: 36px"></i>
            <div class="css-list-item-container" style="padding-left: 4px;">
                <div class="css-list-item-text">Laporkan ke Admin</div>
            </div>
        </li>
        </a>
    </ul>
    </div>
</div>
</div>
<!-- modal options EOF -->
<!-- modal bagikan -->
<div id="modal-bagikan" class="overlay active" aria-hidden="true" style="display: none">
<div class="modal-bottomsheet  animated fadeInUpSm modal-bottomsheet--active" style="transition: all 0.3s ease-out 0s;">
    <div class="modal-bottomsheet__header">
        <div class="modal-close-btn" onclick="modal_bagikan_hidden()">
            <img width="24px" height="24px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwBAMAAAClLOS0AAAAG1BMVEVHcEyfp7Gfp7KfprCfp7CfprCfprGqqrifprATGtrfAAAACHRSTlMAgF3wptnYEpfVhR4AAACYSURBVDjL3ZO9EQIhEEbBCgwJDa3AuQ7O3MRCbAB1br6yvZmDBYHXABvtD2+B5cO5iex1u5Tg9FjNvyuWQtDX/EU6Z99LHys8VZAgbVa4ypAd0NtVeEaCqrZVWC35RxrAEi1gmQ5IqR5IyAA4kAFwICMgIXEwew8AF6gVbk7HxQvSSHCINHZ8KHpaFAPKBwWHEkVR4zeYwH5fLGpn9kSs2QAAAABJRU5ErkJggg==">
        </div>
            <div class="header-title">
                <strong>Bagikan</strong>
            </div>
    </div>
    <div class="social-media-list">
        <a class="social-media-item" id="modal-wa" href="" target="_blank">
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEQAAABECAMAAAAPzWOAAAAB/lBMVEVHcEwqqioYnQ4YnQ4YnQ4doBEYng4Zng4Yng8YnQ7////+/v79/v0joRq84rrv+O4tpiQmox02qi4nox5buVP5/Pnu+O0dnxPW7dQbnhHh8t/8/fwZnQ9Vt06Z05UkohvY7tdLskM0qSzr9uv4/PgenxRzw20cnhLF5sI6qzFFsD00qCsvpib7/fuByXvi8+GAyXoioRkqpCAgoBbT7NGt3Knm9OVkvV3A5L3p9egfoBWu3KqX05N7x3Xq9ul9yHdeulfG58RmvmDg8d7C5b+ByXzR68+LzYZqv2Sz37CEy3+x3a31+/Wo2qV3xXGc1Ze037EwpyfI58Y3qi/2+/ae1pqY05TY7taf1ptculVgu1mm2aLl9OR+yHhlvV4rpSF/yHm+47vH58WS0I1fu1hWt0+137I7qzJUtk1rwGSn2aOV0pFIsUBxw2tTtkwoox9KskKb1Jfx+fD6/fp4xXKKzYVGsD4xpyhHsD+R0IxswGWa1JYanhCJzYQyqCmo2qQ+rTXz+vKV0pBRtUlov2IupiXL6cl0xG6l2KFNs0We1Zn3+/dbuVS24LM5qzCGy4HO6svM6crn9eZlvl95xnRRtUq64bdvwmmW0pJQtEiQ0IvO6syPz4o/rTfX7tVMs0Ss3KiDyn4ppB/D5cCq26dyw2yLzob1+vQ8rDM1qS3e7o65AAAACnRSTlMABr3//SuP1ZTzz4NBeAAAArxJREFUWMPt2NVTW0EUx/GlP/R7E4I7FHcrdcfrpaUtUHd3d3d3d2//yz5A2hAykw25feM87e5JPjN37rlrxhhj4uITkjSKSEqIjzODEZMYq1FHbGKMMcbEjFNUMS7GGJOoKCPRmLjYaJHYOBOvqCPeJESPJJik6JEkIxdiDBlDJtScOJkbDVLT2HsZwJk+s3386JDnjwmIzIGUyJEVyQDl1RdPLyxaVAzw80duhEihD0je4PWTzU1AdUtEyLF8ePQ6cKRikw/yfkWATHXg7Lmgwd85kNdijdQuxqkM8bY3w5ZsSyS7A46HrJkceGeJrIcFkqT04OKo87FyuRWSmjX0y604hSP9tVbIM3gjSduA5OAnzaMh3QbpxLNRkqYBTlpQchOcsUDSG9giSZoCsDcomwbLLJAMaJQkFQMUBaf7KbNAKmG1JGkPkOMNTi/AyQ6PzINaSdI+oGtEugfqwiOr4MJgazKUjfj+z8Op8MgVuDTYOjgFuoOfpwjSwiML4epQ81A5VKdKUsZ2f3oRzAiPrIG5/vZ8D3QckHblM2lqgSSpG5/F26mH+3877ZlA51wfQJsk1TsjqjhkxRaz+F9lF2b9nWUnSdJSuGmDPITmf72UmZ4hZJ6kghw8KTZI/V3mpAb0d86aDuQfrpL0MlTVh5xP+uDOsIGCktn7SyWp5QkNNXbIPegJOfVWtcEqy5ntFtwOZeR+gw9eO6Qqi3WhjC9foazUcrbPgD5p/LVZw/+woQmySmzXnSXQWpmcCeUDtf4x79O3QH+a7QpYcQQcf4Hlffr8fX7zq82ZgGet13otbgXAudE1uylwV8CL9xHsCibD0WlLr0vKXb1k3SDg6W18EMn+ZMacHbsD6nXjx4w1JXUVEe6UJk4c24KOIf8JceUg6cqR1pXDtSvHfFcuHNy5+nDlEsaF66A/PIeJurFfDZcAAAAASUVORK5CYII=">
            <p>WhatsApp</p>
        </a>
        <a class="social-media-item" id="modal-fb" href="" target="_blank">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEQAAABECAMAAAAPzWOAAAAAk1BMVEVHcEw7WZg7WZg7WZhVf6o7WZg7Xpo7WZg8WZk8WZn///9of6/t8PX9/f7DzN/a3+uGmL/e4+5tg7La4OxBXpuElr5Vb6ayvtf+/v6Yp8hac6ils9CBlL1NaKFEYZ2pttLn6vI8Wpg/XJr7/P3k6PGruNKFmL9mfa7d4u1pgLBuhLPb4eyTo8Z4jbhje61UbqXq7fT51qnAAAAACnRSTlMA873/Bv0r1Y+U0usVvQAAANpJREFUWMPt2LkWgyAQRmEUFcUoSTT7vu/L+z9diNikZf4qZ25l41coBTNC2JJUBdKjQKWJcEVZLL2Ls6gxQkkq/CqZJJbZ7xFTkTgRqSSXCkVHlAjoSCAkIEYYsdXDU26b+iP1/aZdpTfyOmtNRbZG05GBBiAlAtm3wNsYs/JFOs4YbSjnpEWuEoD0/wB5VFW1c8i6Z5v5IF392wGBTBDIHIFcfJBjURTt+2P7WCyIvzhHnBNGGGGEETLyzJuWfAVlBIBABknISAsZriFjPmThgFl9QJYwgHXQB8C9RDTTEMkIAAAAAElFTkSuQmCC">
            <p>Facebook</p>
        </a>
        <!-- <a class="social-media-item" id="modal-line" href="" target="_blank">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEQAAABECAMAAAAPzWOAAAABp1BMVEVHcEwhziYhzif///8hzicizichzyYjzykhziYq1CohziYizie577ojzig60z74/fnx+/G78LyD44bk+eQpzy79/v000jj8/vw10jpU2Vj+/v6E44c91EL7/vvF8sa17rbz/PPq+uv6/vo/1EOj6qWX6Jl74X5b2l/u++7C8cQr0DAx0TZD1Uj1/PXQ9NHg+OHM882F5Iea6Jzp+ulW2VmO5pHy/PO78L3v+++U55et7K9x33TX9tjB8cKQ5pKv7bHn+eiC44XJ88rE8sW07rXk+eX4/fh34Xpd22E40zzw+/As0DGd6Z+M5Y/Z9tqG5Ikq0C+/8MBj3GaA44M10jmS5pTK88vI8sle22Lt++0kzimu7a944Xui6qSc6Z5Y2lxh3GRW2Vrx/PJO11Ko66rm+eee6aB64X1p3Wwozy3H8siq7KzW9ddC1Ubi+OJ04Hf5/fm+8MCl66fU9dWW55jP9NG677u88L6K5YxZ2l3f+ODR9dI70z+x7bPs+u3d997J88vr+uxV2Vm377lt3nBi3GVd22AlzipC1UfS9dM700BS2FZI1kyeRSUJAAAACnRSTlMA873/j5TVK/0GpZ2TwwAAAhVJREFUWMPt2GV3GlEQBuAhLzrAbgWHQLAQb9zTJHV3d3d3b+r6o/thaU8OB7aze+9H3h/wnHNX5s4MEREFvH4Pu4jH7w2QlZAvyK4T9IWIiEIdrJSOEBH5WDE+okBQFQkGyMvK8ZJfHfGTRx3xEGtIG2kj4Wg0rILksgfHAADxq6fnEq6QC5uwOpnCgGNk5y00Jjmbc4Yc6kGTdO1wgpxD83RulyPX0DJ7pch12OSGDCkP2iGXEiJkC2xzRYIMxO2R0hEBMmO9zYlJAE/mUXgHLMyiO51Ov3wMANgvQPYBAJ7zFDDJI2M8HsfXnybHUqk3eQBArwCxTrOWI8AaXreeeQY1w+Tuf+cZ/D8SRSPy7UfNMPn38vKnuhJ2jnyOff9lmMzMH90jGyvMhslzS0slMcKZOjL6+pWF4AsbJtcWF99OAwB6BA/2HgBggZn5afhFkav4kCgnY8zMEwCAvAA5CwB4UKlWH3U+LOLZNPB+BfORSGSqCwBwVICct/9gkSlL/p0heyQv+gFP2BrJy7J6ctsO2SMsSruHWxtDMWl57DveytiQkBfq2OYWRs7JlXHq8K4mxp2Uwxuwv5JsNAp9zu9iIztcWn3nZF12BTfHR/8axYvuW4t03ehNKfQnVlXcNqLU5JwBgGN31Tql/pPYel+93TrQbkHbiCZEyyCpZaTVMlxrGfO1LBz0rD60LGE0rIP+AGgEy2LJsw/pAAAAAElFTkSuQmCC">
            <p>Line</p>
        </a> -->
        <a class="social-media-item" id="modal-tw" href="" target="_blank">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEQAAABECAMAAAAPzWOAAAABj1BMVEVHcEwArO0ArO3///8Ase0A1P8ArO0ArO0ArO0ArO0ArO3+/v77/f4CrO33/P635/kHru1rzvQuuvDp9/0zvPBAwPHK7fvj9f1Iw/L9/v7w+v3d8/wKr+0pue+X3fdfyvOh4Pg2vfDz+/4rufD4/P6j4fj8/v6k4fiD1vZUx/IYs+4Fre0cte4OsO2M2faQ2ven4vje9PzW8fyL2fYIru130vWA1fYXs+6i4PgbtO510vW86foxu/Ds+P0Gre3c8/yx5fnI7fvJ7fsLr+0Usu45vvEtuvDr+P1gy/NFwvHm9v0NsO2J2PZPxfJ81PVjzPPX8fxeyvMMr+2a3vcWs+625/nG7Po0vPCm4vji9fz6/f4Jru2z5vmO2ve56PoEre2E1vbu+f0+wPHA6vqB1fYete/q+P1LxPKR2/dmzfSq4/k9v/EVsu7H7PtSxvK96fqZ3fdCwfFcyfPZ8vxJw/K66PqK2Pb2/P6w5fkDrO276PqG1/Y8v/Fx0PS+6fooue8Tsu7k9v3T8Pshtu9Tx/L/SoJOAAAACnRSTlMA873/KwbVj/2UTKaznwAAAexJREFUWMPtmGdTAkEMhg8XKQsHgnQRBUUFAQEVe++99957773+cCnqwMHd7nH7wXF4v5HJPEN2c8kmFBWWWCoRwTQkkkjFVEzZchlMWzJ5dpSRBQUpK0KRQ4GSh89DJhQiE1NSKFhSSiIcIqFEwiEiChJQBpKB/DHI5HBbkyrgNMV+vXpRkPycZIbGAWJ69kD44XunUZBFdRLFB371VhEE4BMVTqcZMCkFIFEhSFdxQ7rCXmprvGU8NwGhrDZV+su5Ia6IY4ue/Y+YATDWIMI5iHoqbAO/Fj8jGhB4QZ2JWxHznOtt/rZMMxiGGnSenPw495dpo4Z2BsSFkWyXcf55tZq+oikGZAcnY08Bt3RoyNm518kNqUNDjoHyQsnFUJSjIR5EMGAU5yu+QkAqcCBFJdwQE1Y9KeNkqBbwitKTmQMyi1vZ9Les96PoxoQ8Vofu2SCtuDXWfcMejR27UD+wMibwqz1dysIIWnm0jLvr4lSMYi2/vrO1e+RIupkR3s3rcJ/BUI7x7YBVe9vMVB3i10Zp3WYuMxajHr8Xr69WFi6vJR3p/GAHn4Zu30hxLQ35fF8F2qXEWHpsjek8LVZ0mlJDnqXEYjQU1s/QmedWBvLvIEQGSSIjLZHhmsiYT2ThQGb1QWQJQ2Ad9AVtP8JN8bd9ggAAAABJRU5ErkJggg==">
            <p>Twitter</p>
        </a>
    </div>
</div>
</div>
<!-- modal bagikan EOF -->
<!-- modalDeskripsi -->
<div class="modal animated fadeInUpSm h-100 w-100 p-0" id="modalDeskripsi">
<div class="modal-dialog modal-dialog-centered h-100 w-100 m-0">
<div class="modal-content h-100 w-100">
   <nav class="css-nav-modal-header">
      <div class="css-modal-header">
         <div class="css-description close" data-dismiss="modal" aria-hidden="false">
            <div class="css-back">
              <div class="header-content row float-left">
            <div class="col-xs-2 col-md-2 col-lg-2 float-left">
              <span class="icon-e-30"></span>
            </div>
             
          </div>
            </div>
              <div class="header-content row">
                <div class="float-right">
                  <span id="title"> Deskripsi</span>
                </div>
            </div>
         </div>
      </div>
   </nav>
    <div class="css-textarea" id="css-textarea"><?php echo xxs_filter($product->description) ?></div>
</div>
</div>
</div>
<!-- modalDeskripsi EOF -->
<!-- modalDocx -->
<div class="modal animated fadeInUpSm h-100 w-100 p-0" id="modalDocx">
<div class="modal-dialog modal-dialog-centered h-100 w-100 m-0">
<div class="modal-content h-100 w-100">
   <nav class="css-nav-modal-header">
      <div class="css-modal-header">
         <div class="css-description close" data-dismiss="modal" aria-hidden="false">
            <div class="css-back">
              <div class="header-content row float-left">
            <div class="col-xs-2 col-md-2 col-lg-2 float-left">
              <span class="icon-e-30"></span>
            </div>
             
          </div>
            </div>
              <div class="header-content row">
                <div class="float-right">
                  <span id="title"> DOKUMEN</span>
                </div>
            </div>
         </div>
      </div>
   </nav>
    <div class="css-textarea p-0" id="css-textarea">
        <iframe src='<?php echo base_url(@$product_docx->file_url) ?>' frameborder="0" width="100%"  height="100%"></iframe>
    </div>
</div>
</div>
</div>
<!-- modalDocx EOF -->
<div style="margin-top: 70px"></div>
</body>