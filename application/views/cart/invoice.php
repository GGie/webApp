<div id="tt-pageContent">
	<div class="">
		<div class="container">
			<div class="">
				<div class="row justify-content-center">
					<div class="col-md-8 col-lg-6">
						<div class="tt-item">
							<div class="">
								<form id="contactform" method="post" novalidate="novalidate">
									<div id="">
	<div class="container">
		<div class="" style="text-align: center">
			<a class="tt-logo" href="index.html"><img class="tt-retina" src="images/custom/logo.png" alt=""></a>
			
			<blockquote class="tt-blockquote col-12">
								Jumlah tagihan :
								<span class="tt-title" style="margin-top: 20px !important">Rp. <?php echo number_format($invoice->gross_amount,0,',','.') ?></span>


								Transfer pembayaran ke nomor Virtual Account <?php echo strtoupper($invoice->va_bank) ?> :
								<span class="tt-title" style="margin-top: 20px !important"><?php echo $invoice->va_number ?></span>
								<span class="tt-title-description">— <span>NOMOR INVOICE : <?php echo strtoupper($invoice->invoice_id) ?> —</span></span>
			</blockquote>
			<p style="color: #ff0000">
				Batas pembayaran: <?php echo date('Y-m-d H:i:s',strtotime($invoice->input_date . "+1 days")) ?>
			</p>
			<div class="tt-gift-dissembled">
				<img src="images/loader.svg" data-src="images/custom/gift-img-02.png" alt="">
			</div>
			<a href="<?php echo base_url('dashboard/product_buy') ?>" class="btn btn-border tt-icon-left" style="width: 160px"><i class="icon-e-19"></i> GOO VIEW CART</a>
			<a href="<?php echo base_url() ?>" class="btn btn-border tt-icon-right" style="width: 160px">START SHOPPING <i class="icon-e-20"></i></a>
		</div>
	</div>
</div>
									


								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>