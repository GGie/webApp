<div id="tt-pageContent">
	<div class="container-indent">
		<div class="container">
			<div class="">
				<div class="row justify-content-center">
					<div class="col-md-8 col-lg-6">
						<div class="tt-item">
							<div class="">
									<div id="">
	<form method="post" action="<?php echo base_url('dashboard/order/save_resi') ?>">
	<div class="container">
		<div class="" style="text-align: center">
			<a class="tt-logo" href="index.html"><img class="tt-retina" src="images/custom/logo.png" alt=""></a>
			
			<blockquote class="tt-blockquote col-12">

								Harap masukan no resi yang benar
								
								  <div class="form-group">
								  	<input type="hidden" id="order_id" name="order_id" value="<?php echo $this->uri->segment(4) ?>">
								    <input type="text" class="form-control" id="no_resi" name="no_resi" placeholder="Masukan No Resi Pengiriman" autocomplete="off" required="true" minlength="5" maxlength="50">
								  </div>
								
			</blockquote>

			<div class="tt-gift-dissembled">
				<img src="images/loader.svg" data-src="images/custom/gift-img-02.png" alt="">
			</div>
			<input type="submit" name="submit" class="btn btn-border tt-icon-left" style="width: 150px" value="OK">
			<a href="<?php echo base_url('dashboard/product_order') ?>" class="btn btn-border tt-icon-left" style="width: 150px">NANTI SAJA</a>
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
	</div>
</div>
  <link rel="stylesheet" rel="stylesheet" media="screen" href="<?php echo base_url() ?>/assets/css/amaran.min.css">
  <script src="<?php echo base_url() ?>/assets/js/jquery-2.1.4.min.js"></script>
  <script src="<?php echo base_url() ?>/assets/js/jquery-ui.min.js"></script>
  <script src="<?php echo base_url('assets/js/jquery.amaran.min.js') ?>"></script>
<?php if ($this->session->flashdata('message')) { ?>
  <script type="text/javascript">
$(function(){
      $.amaran({
                'message'           :"<?php echo $this->session->flashdata('message') ?>",
                'position'          :'top right',
                'clearAll'          : true
            });
}); 
  </script>
<?php } ?>