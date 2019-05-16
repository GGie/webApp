<div class="tt-breadcrumb">
</div>
<div id="tt-pageContent">
	<div class="container-indent">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-lg-3 col-xl-3 leftColumn aside">
					<div class="tt-btn-col-close">
						<a href="#">Close</a>
					</div>
					<div class="tt-collapse open tt-filter-detach-option">
						<div class="tt-collapse-content">
							<div class="filters-mobile">
								<div class="filters-row-select">

								</div>
							</div>
						</div>
					</div>
					<div class="tt-collapse open">
						<h3 class="tt-collapse-title">Harga</h3>
						<div class="tt-collapse-content">
						<form onsubmit="return false">
							<div class="form-group">
								<input type="number" name="min" id="min" class="form-control" style="background: #f7f8fa" placeholder="Minimum" value="<?php echo $this->input->get('min') ?>">
							</div>
							<div class="form-group">
								<input type="number" name="max" id="max" class="form-control" style="background: #f7f8fa" placeholder="Maximum" value="<?php echo $this->input->get('max') ?>">
							</div>
							<button type="submit" onclick="filter()" class="btn btn-small"><i class="icon-f-85"></i>Filter</button>
							</div>
						</form>
					</div>
				
				</div>
				<div class="col-md-12 col-lg-9 col-xl-9">
					<div class="content-indent container-fluid-custom-mobile-padding-02">
						<div class="tt-filters-options">
							<?php if ($DataSearch->num_rows() > 0) { ?>
								<h1 class="tt-title" style="font-size: 14px;color:#aaa">
									Menampilkan : <span><i><b><?php echo xxs_filter($this->input->get('search')) ?></b></i></span>
								</h1>
							<?php } ?>
							<div class="tt-btn-toggle">
								<a href="#">FILTER</a>
							</div>
							<div class="tt-sort">
								<label>Urutkan</label>
								<select name="order_by" id="order_by" onchange="filter()">
									<option value="">Show</option>
									<option value="1" <?php if($this->input->get('order_by') == 1){ echo "selected"; } ?>>Terbaru</option>
									<option value="2" <?php if($this->input->get('order_by') == 2){ echo "selected"; } ?>>Harga Termurah</option>
									<option value="3" <?php if($this->input->get('order_by') == 3){ echo "selected"; } ?>>Harga Termahal</option>
									<option value="4" <?php if($this->input->get('order_by') == 4){ echo "selected"; } ?>>View Terbanyak</option>
								</select>
							</div>
							<div class="tt-quantity">
								<a href="#" class="tt-col-one" data-value="tt-col-one"></a>
								<a href="#" class="tt-col-two" data-value="tt-col-two"></a>
								<a href="#" class="tt-col-three" data-value="tt-col-three"></a>
								<a href="#" class="tt-col-four" data-value="tt-col-four"></a>
								<a href="#" class="tt-col-six" data-value="tt-col-six"></a>
							</div>
						</div>
						<?php if ($DataSearch->num_rows() > 0) { ?>
						<div class="tt-product-listing row">
							<?php foreach ($DataSearch->result() as $key => $produk) { ?>
							<div class="col-6 col-md-3 tt-col-item">
								<div class="tt-product thumbprod-center">
									<div class="tt-image-box">
										<a href="javascript:void(0)" class="tt-btn-wishlist" data-tooltip="<?php echo $produk->viewed ?> Viewer" data-tposition="left"></a>
										<a href="<?php echo base_url('p/product/' . $produk->product_id . '-' . replace_url_char($produk->product_name)) ?>">
											<span class="tt-img"><img src="<?php echo base_url('assets') ?>/images/loader.svg" data-src="<?php echo getProductPhoto($produk->product_id) ?>"></span>
											<span class="tt-img-roll-over"><img src="<?php echo base_url('assets') ?>/images/loader.svg" data-src="<?php echo getProductPhoto($produk->product_id) ?>" alt=""></span>
											<span class="tt-label-location">
												<span class="tt-label-new">Rp. <?php echo @number_format(@$produk->price,0,',','.'); ?></span>
											</span>
										</a>
									</div>
									<div class="tt-description">
										<!-- <div class="tt-row">
											<ul class="tt-add-info">
												<li><a href="#"><?php echo $produk->detail ?></a></li>
											</ul>
											<div class="tt-rating">
												<i class="icon-star"></i>
												<i class="icon-star"></i>
												<i class="icon-star"></i>
												<i class="icon-star"></i>
												<i class="icon-star"></i>
											</div>
										</div> -->
										<h2 class="tt-title _trjst"><a href="<?php echo base_url('p/product/' . $produk->product_id . '-' . replace_url_char($produk->product_name)) ?>"><?php echo $produk->product_name ?></a></h2>
										<div class="tt-product-inside-hover">
											<div class="tt-row-btn">
												<a href="<?php echo base_url('p/product/' . $produk->product_id . '-' . replace_url_char($produk->product_name)) ?>" class="btn btn-small"><i class="icon-f-39"></i>PIZ</a>
											</div>
											<div class="tt-row-btn">
												<a href="javascript:void(0)" class="tt-btn-wishlist"> <?php echo $produk->viewed ?> Viewer</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php } ?>
							
						</div>
						
						<?php } else { ?>
							<div id="tt-pageContent">
								<div class="container-indent nomargin">
									<div class="tt-empty-search">
										<!-- <span class="tt-icon icon-f-85"></span> -->
										<img src="<?php echo base_url('assets/images/icon/icon-search.png') ?>" width="300px">
										<div style="font-family: arial">Tidak ditemukan apapun</div>
									</div>
								</div>
							</div>
						<?php } ?>


						<div class="text-center tt_product_showmore">
							<?php echo $this->pagination->create_links(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	function filter(){
		var min = $('#min').val();
		var max = $('#max').val();
		var order_by = $('#order_by').val();
		var search = $('#search').val();
		window.location = "<?php echo base_url() ?>/p/search.php?search=" + search + "&order_by=" + order_by + "&min=" + min + "&max=" + max;
	}
</script>