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
						<span><a href="<?php echo base_url('dashboard/product/add') ?>" class="btn btn-lg" style="margin: 10px;width: 180px"><i class="icon-f-29"> </i>Tambahkan Kreasimu</a></span>
						<span class="">Kamu dapat menjual <b>IDE</b> dan <b>Kreatifitasmu</b> dalam hal apa saja di Goopiz</span>
					</blockquote>
					<!-- UI POST -->
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
								<span class="tt-img"><img src="<?php echo base_url('assets') ?>/images/loader.svg" data-src="<?php echo getProductPhoto($produk->product_id) ?>" alt="" width="100%"></span>
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