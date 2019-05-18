<link href="<?php echo base_url() ?>/assets/css/select2.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

<link rel="stylesheet" rel="stylesheet" media="screen" href="<?php echo base_url() ?>assets/css/croppie.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.min.js"></script>
<style type="text/css">
* {
    /* personal preference */
    margin: 0;
    padding: 0;
}
body {
	background-image: linear-gradient(rgb(250, 255, 255), rgb(174, 204, 255));
  font-family: 'Oxygen', sans-serif;
  min-height: 100vh;
  height: 100%;
  /*min-height: 500px;*/
}
#outerbox {
	min-height: calc(100vh);
	width: 100%;
	top: 130px;         /* free space at top */
	bottom: 0;          /* makes it lock to the bottom */
}
.wallet-box {
	background: #fff;
    padding: 10px 15px;
    -moz-box-shadow: 0 1px 1px rgba(155,155,155,.08);
    -ms-box-shadow: 0 1px 1px rgba(155,155,155,.08);
    -webkit-box-shadow: 0 1px 1px rgba(155,155,155,.08);
    box-shadow: 0 1px 1px rgba(155,155,155,.08);
    margin-bottom: 1px;
    border-radius: 4px;
    display: block;
}
</style>
<div id="outerbox">
<div style="margin-top: 60px"></div>
<tr>
	<td style="width: 10% !important;font-size: 36px">
        <a href="<?php echo base_url('dompetGoo/detail') ?>">
            <i class="icon-e-54 icon-lg"></i>
        </a>
    </td>
	<td class="text-right" style="font-size: 36px"><?php echo number_rp($users->saldo) ?></td>
</tr>

<!-- <form class="form-default" method="get" action="#">


    <div class="form-group">
        <input type="date" name="start_date" class="form-control" id="start_date" value="<?php echo $this->input->get('start_date') ?>" placeholder="Date...">
    </div>

    <div class="form-group">
        <input type="date" name="end_date" class="form-control" id="end_date" value="<?php echo $this->input->get('end_date') ?>" placeholder="Date...">
    </div>
    <button type="submit" class="btn">Cari</button>
</form> -->

<?php foreach($DataDompet->result() as $dompet){ ?>
<?php
	if ($dompet->credit != 0)
		$transaction = "<div class='text-danger'> - " . $dompet->credit . "</div>";

	if ($dompet->debit != 0)
		$transaction = "<div class='text-success'> + " . $dompet->debit . "</div>";
?>
<div class="wallet-box row">
	<div class="col-12 pr-0 row">
		<div class="col-8">
			<span class=""><?php echo $dompet->description ?> <?php echo $dompet->param_id ?></span>
			<br><i style="font-size: 10px"><?php echo format_indo($dompet->input_date) ?></i>
		</div>
		<div class="col-4 pr-0">
			<div class="text-right">
        		<?php echo $transaction ?>
    			Saldo : <?php echo number_rp($dompet->balance) ?>
    		</div>
		</div>
	</div>
</div>
<?php } ?>
<?php if ( $DataDompet->num_rows() <= 0 ) { ?>          
<div>
   <table width="100%" height="100%">
    <tr>
      <td>

        <div class="tt-empty-search" style="padding: 10px!important">
          
          <img src="<?php echo base_url('assets/images/icon/Shopping9.png') ?>" width="35%">
                    <br><h3 style="color: grey">Belum Ada Transaksi</h3>
        </div>
      </td>
    </tr>
   </table>
</div>
<?php } ?>
<div class="col-left" style="bottom:0">
  <?php echo $this->pagination->create_links(); ?>
</div>
</div>