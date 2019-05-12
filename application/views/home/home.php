<style type="text/css">
body {
	font-family: 'Oxygen', sans-serif;
	/*background-color:#edf2f6*/
	background-image: linear-gradient(rgb(229, 245, 255));
	height: 100%;
	color:#888da8;background-color:#ecf3ff;
}


/*body{margin:0;font-family:Roboto,-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI","Helvetica Neue",Arial,sans-serif;font-size:.812rem;font-weight:400;line-height:1.5;color:#888da8;background-color:#edf2f6}
	.ui-block {
    background-color: #fff;
    border-radius: 5px;
    border: 1px solid #e6ecf5;
    margin-bottom: 15px;
}*/
.modal {
  right: 0!important;
  bottom: 0;
  left: 0;
}
.author-date {
	width: 60%;
}
.css-options {
	width:23%;
	text-align: right;
    padding-left: 10px;
    font-size: 11px;
    color: rgba(0, 0, 0, 0.38);
    line-height: 1.55;
    margin-bottom: 10px;
}
/* Status */
.css-product-head {
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    margin: 0px 0px 8px;
}
.css-product-img {
    display: block;
    width: 32px;
    height: 32px;
    object-fit: cover;
    flex-shrink: 0;
    border-radius: 50%;
}
.css-product-label {
    display: block;
    -webkit-box-flex: 1;
    flex-grow: 1;
    min-width: 0px;
    margin: 0px 8px;
}
.css-product-label .username {
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    margin-bottom: 4px;
}
.css-product-label .username span {
    display: block;
    -webkit-box-flex: 1;
    flex-grow: 1;
    white-space: nowrap;
    text-overflow: ellipsis;
    font-size: 0.857143rem;
    line-height: 1rem;
    color: rgba(0, 0, 0, 0.7);
    font-weight: 700;
    overflow: hidden;
}
.css-product-label .posttime {
    white-space: nowrap;
    text-overflow: ellipsis;
    font-size: 0.714286rem;
    color: rgba(0, 0, 0, 0.38);
    overflow: hidden;
}
/* Status EOF */
.unf-menu__action {
    text-align: center;
    color: rgb(66, 181, 73);
    font-size: 1rem;
    font-weight: 600;
    line-height: 16px;
    padding: 24px 0px;
}
/* product box */
.css-product-footer {
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    justify-content: space-between;
    padding: 16px 0px 16px 0px;
}
.css-product-footer-left {
    display: flex;
    flex-shrink: 0;
}
.css-diskusi {
    background-color: transparent;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    color: rgba(49, 53, 59, 0.68);
    font-size: 0.857143rem;
    flex-shrink: 0;
    margin-right: 16px;
    margin-left: -20px;
    border-width: initial;
    border-style: none;
    border-color: initial;
    border-image: initial;
    outline: none;
    padding: 0px;
}
.css-diskusi span {
    margin-left: 4px;
}
.css-diskusi::before {
    content: "";
    width: 18px;
    height: 18px;
    background-size: 20px;
    display: block;
    animation-duration: 1s;
    background-position: center center;
    background-repeat: no-repeat;
}
.css-viewed:last-child {
    margin-right: 0px;
}
.css-viewed {
    background-color: transparent;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    color: rgba(49, 53, 59, 0.68);
    font-size: 0.857143rem;
    flex-shrink: 0;
    margin-right: 16px;
    border-width: initial;
    border-style: none;
    border-color: initial;
    border-image: initial;
    outline: none;
    padding: 0px;
}
.css-viewed::before {
    content: "";
    width: 18px;
    height: 18px;
    background-size: 20px;
    display: block;
    background-position: center center;
    background-repeat: no-repeat;
}
.css-share:last-child {
    margin-right: 0px;
}
.css-share {
    background-color: transparent;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    color: rgba(49, 53, 59, 0.68);
    font-size: 0.857143rem;
    flex-shrink: 0;
    margin-right: 16px;
    border-width: initial;
    border-style: none;
    border-color: initial;
    border-image: initial;
    outline: none;
    padding: 0px;
}
/* product box EOF */
</style>

<div id="tt-pageContent">
	<div class="container-indent" style="margin-top: 10px !important">
		<div class="container">


			<div class="row" style="padding-top: 10px">
				<div class="col-sm-1 col-md-2 col-lg-2 tt-hidden-mobile">
					<div class="ui-block sticky-top" style="height: 100px;z-index: 1!important">
						
						<div class="p-3 bg-white rounded shadow-sm">
				        <h6>Profile</h6>
				        <div class="media text-muted pt-3">
				          
				          	<div class="row">
								<img width="50px" height="50px" src="<?php echo get_photo(user_id()) ?>" class="profile-pic">
						
								<div class="author-date">
									<a class="text-right pl-2" href="<?php echo base_url('u/' . $user->user_id) ?>"><?php echo $user->fullname ?></a>

									
									<div class="">
										<time class="published" datetime="2004-07-24T18:18">
											<a class="text-right pl-2" href="#"><?php echo number_rp($user->saldo) ?></a>
										</time>
									</div>
								</div>
						
							</div>

				        </div>
				    	</div>

						<div class="tt-collapse open">
						<div class="tt-collapse-content">
							<ul class="tt-list-row">
								<li class="py-2" <?php if ($this->uri->segment(3) == 'add') { echo 'class="active"'; } ?>><a href="<?php echo base_url('dashboard/product/add') ?>"><i class="icon-f-69"> </i> Tambah Produk</a></li>
								<li class="py-2" <?php if ($this->uri->segment(2) == 'product_order') { echo 'class="active"'; } ?>><a href="<?php echo base_url('dashboard/product_order') ?>"><i class="icon-f-64"> </i> Daftar Order</a></li>
								<li class="py-2" <?php if ($this->uri->segment(2) == 'product_buy') { echo 'class="active"'; } ?>><a href="<?php echo base_url('dashboard/product_buy') ?>"><i class="icon-e-45"> </i> Daftar Beli</a></li>
                                <li class="py-2" <?php if ($this->uri->segment(2) == 'product_list') { echo 'class="active"'; } ?>><a href="<?php echo base_url('dashboard/product_list') ?>"><i class="icon-f-46"> </i> Daftar Jual</a></li>
                                <li class="py-2" <?php if ($this->uri->segment(2) == 'product_stock') { echo 'class="active"'; } ?>><a href="<?php echo base_url('dashboard/product_stock') ?>"><i class="icon-f-46"> </i> Daftar Stock</a></li>
								<li class="py-2" <?php if ($this->uri->segment(2) == 'account_setting') { echo 'class="active"'; } ?>><a href="<?php echo base_url('dashboard/account_setting') ?>"><i class="icon-f-81"> </i> Pengaturan</a></li>
						</div>
						</div>

					</div>
				</div>

				<div class="col-sm-12 col-md-8 col-lg-5">

					<blockquote class="tt-blockquote mb-1">
						<span><a href="<?php echo base_url('dashboard/product/add') ?>" class="btn btn-lg" id="posting" style="margin: 10px;width: 180px"><i class="icon-f-29"> </i>Tambahkan Kreasimu</a></span>
						<span class="">Kamu dapat menjual <b>IDE</b> dan <b>Kreatifitasmu</b> dalam hal apa saja di Goopiz</span>
						<span class="">Goopiz Tempat Anda Mencari Uang!!!</span>
					</blockquote>
					<!-- UI POST -->
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

					
					<div id="results"><!-- results appear here as list --></div>
					<div class="ui-block phone_wrapper">
					<main>
					<div class="tab_reel">
					  <div class="tab_panel1">
					    <div class="card card_large">
					    <div class="card card_list">
				          <figure></figure>
				          <div class="desc">
				            <div class="block"></div>
				            <div class="block"></div>
				          </div>
				        </div>
					      <figure></figure>
					      <div class="desc">
					        <div class="block"></div>
					        <div class="block"></div>
					      </div>
					    </div>
					  </div>
					</div>
					</main>
					</div>
					<div class="ui-block phone_wrapper">
					<main>
					<div class="tab_reel">
					  <div class="tab_panel1">
					    <div class="card card_large">
					    <div class="card card_list">
				          <figure></figure>
				          <div class="desc">
				            <div class="block"></div>
				            <div class="block"></div>
				          </div>
				        </div>
					      <figure></figure>
					      <div class="desc">
					        <div class="block"></div>
					        <div class="block"></div>
					      </div>
					    </div>
					  </div>
					</div>
					</main>
					</div>
					<!-- UI POST EOF -->
				</div>

				<div class="col-sm-1 col-md-3 col-lg-3 tt-hidden-mobile">

					<div class="p-3 bg-white rounded shadow-sm">
				      	<div class="media text-muted pt-3">
				          <img data-src="" alt="" class="mr-2 rounded">
				          <div class="tt-content-aside">
						<a href="listing-left-column.html" class="tt-promo-03">
							<img src="<?php echo base_url('assets') ?>/images/custom/gift-img-01.png" alt="">
						</a>
						</div>
				        </div>
				       </div>

				      <div class="p-3 my-3 bg-white rounded shadow-sm sticky-top" style="margin-top: 100px;z-index: 3!important">
				      	<div class="media text-muted pt-3">
				          <img data-src="" alt="" class="mr-2 rounded">
				          <div class="tt-content-aside">
						<a href="listing-left-column.html" class="tt-promo-03">
							<img src="<?php echo base_url('assets') ?>/images/custom/gift-img-01.png" alt="">
						</a>
						</div>
				        </div>
				       </div>
					</div>

				<div class="col-sm-1 col-md-2 col-lg-2 tt-hidden-mobile" style="position: fixed!important">
					<?php echo $list_chat ?>
				</div>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
function modal_options(id) {
	$("#modal-options-href"). attr("href", "p/report/" + id);
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


$("#posting").click(function(){
	$("#myModal").modal();
	return false;
});
</script>

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
<!-- modal-options -->
<!-- <div id="modal-options" class="css-options-modal-overlay" style="display: none">
<div class="css-options-modal animated fadeInUpSm">
    <ul class="css-options-content m-0">
    	<a href="" id="modal-options-href">
        <li class="css-list-item css-list-item--image"><i class="icon-h-08" style="font-size: 36px"></i>
            <div class="css-list-item-container" style="padding-left: 4px;">
                <div class="css-list-item-text">Laporkan ke Admin</div>
            </div>
        </li>
        </a>
        <a href="javascript:void(0)" onclick="modal_options_hidden()">
        <li class="css-list-item css-list-item--image"><i class="icon-h-10" style="font-size: 36px"></i>
            <div class="css-list-item-container" style="padding-left: 4px;">
                <div class="css-list-item-text">Batal</div>
            </div>
        </li>
        </a>
    </ul>
</div>
</div> -->
<!-- modal-options EOF -->
    <!-- Modal Kategori -->
    <div class="modal animated fadeInUpSm" id="myModal" style="top: calc(100% - 200px); left:0px!important;">
        <div class="modal-dialog modal-dialog-centered" style="width: 90%">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                	-
					<button type="button" class="close" data-dismiss="modal"><span class="icon icon-clear"></span></button>
				</div>
                <!-- Modal body -->
                <div class="modal-body">
                    
                    		<fieldset>
						    <legend style="margin-bottom: 20px">Pilih Kategori:</legend>
						    <div class="row" style="width: 100%">
						   		<div class="col-4"><a href="<?php echo base_url('dashboard/product/add?type=1') ?>"><div class="icon-belanja"></div>Belanja</a></div>
		                    	<div class="col-4"><a href="<?php echo base_url('dashboard/product/add?type=2') ?>"><div class="icon-proposal"></div>Proposal</a></div>
		                    	<div class="col-4"><a href="<?php echo base_url('dashboard/product/add?type=3') ?>"><div class="icon-karya"></div>Hasil Karya</a></div>
		                    </div>
						  </fieldset>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Kategori EOF -->