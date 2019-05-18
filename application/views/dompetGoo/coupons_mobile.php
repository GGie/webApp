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
  background: #d2e4ff;
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

/* coupons */
.coupons {
  background: #d2e4ff;
  padding: 20px;
  min-width: 400px;
  max-width: 500px;
}
.coupons-title {
  color: #000;
  font-weight: bold;
}
.coupons .coupon {
  margin-bottom: 20px;
  display: flex;
  align-items: stretch;
  justify-content: stretch;
}
.coupons .coupon > div {
  padding: 10px 20px;
  border-radius: 12px;
}
.coupons .coupon .coupon-intro {
  position: relative;
  background: #fff;
  flex: 3;
}
.coupons .coupon .coupon-intro ul {
  color: #aaa;
  padding-left: 20px;
  font-size: 11px;
}
.coupons .coupon .coupon-intro:after {
  content: ' ';
  border: 2px dashed #d2e4ff;
  height: 100%;
  position: absolute;
  top: 0;
  right: -2px;
  z-index: 2;
}
.coupons .coupon .coupon-value {
  width: 40%;
  display: flex;
  flex: 1;
  position: relative;
  background: #5c8ffa;
  color: #fff;
  font-size: 38px;
  align-items: center;
  justify-content: center;
}
.coupons .coupon .coupon-value:before {
  content: ' ';
  width: 24px;
  height: 24px;
  position: absolute;
  top: -12px;
  left: -12px;
  border-radius: 100%;
  background: #d2e4ff;
}
.coupons .coupon .coupon-value:after {
  content: ' ';
  width: 24px;
  height: 24px;
  position: absolute;
  bottom: -12px;
  left: -12px;
  border-radius: 100%;
  background: #d2e4ff;
}
/* coupons EOF */
</style>

<div id="outerbox">
<div style="margin-top: 60px"></div>

<div class="coupons">
<?php foreach ($coupons->result() as $coupon) { ?>
  <div class="coupon ">
    <div class="coupon-intro">
      <h4 class="coupons-title"><?php echo $coupon->name ?></h4>
      <ul>
        <li><?php echo number_rp($coupon->discount) ?></li>
        <li>Berlaku sampai <?php echo format_indo($coupon->date_end) ?></li>
      </ul>
    </div>
    <div class="coupon-value">
      <?php echo strtoupper($coupon->code) ?>
    </div>
  </div>
<?php } ?>
</div>

<?php if ( $coupons->num_rows() <= 0 ) { ?>          
<div id="tt-pageContent">
  <div class="container-indent nomargin">
    <div class="tt-empty-search">
      <!-- <span class="tt-icon icon-f-85"></span> -->
      <img src="<?php echo base_url('assets/images/icon/icon-search.png') ?>" width="300px">
      <div style="font-family: arial">Belum mendapatkan kupon</div>
    </div>
  </div>
</div>
<?php } ?>
<div class="col-left" style="bottom:0">
  <?php //echo $this->pagination->create_links(); ?>
</div>
</div>