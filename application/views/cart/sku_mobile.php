<style type="text/css">
body {
  font-family: 'Oxygen', sans-serif;
  background-image: linear-gradient(rgb(174, 204, 255), rgb(255, 255, 255));
  height: 100%;
}
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
    border-image: initial;
    padding: 7px;
}

.css-rp {
    position: absolute;
    background-color: rgb(255, 255, 255);
    border-radius: 8px;
    border-width: 1px;
    border-image: initial;
    padding: 7px;
    color: #2879fe;
    font-weight: 600;
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

/* product */
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
    padding: 12px 4px 4px;
    border-radius: 8px;
    overflow: hidden;
}

.css-1ghrxnh {
    position: relative;
    width: 72px;
    height: 72px;
    float: left;
}
.css-1ghrxnh .img {
    width: 100%;
    height: 100%;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    border-radius: 3px;
}
.css-b691yt {
    padding-right: 40px;
    padding-left: 88px;
    font-size: 14px;
    line-height: 18px;
}
.css-b691yt .name {
    font-weight: 600;
    color: rgba(0, 0, 0, 0.7);
    white-space: nowrap;
    text-overflow: ellipsis;
    /*width: 50vw;*/
    overflow: hidden;
}
.css-b691yt .stock {
    padding-top: 8px;
    color: rgba(0, 0, 0, 0.38);
}
.css-b691yt .price {
    font-weight: 600;
    padding-top: 8px;
    color: #007bff!important;
}
/* product EOF */
/* RINGKASAN BELANJA */
.css-u0qtpu-unf-card {
    display: block;
    position: relative;
    background-color: rgb(255, 255, 255);
    box-shadow: rgba(49, 53, 59, 0.12) 0px 1px 6px 0px;
    padding: 0px;
    border-radius: initial;
    overflow: hidden;
    margin: 6px 0px 0px;
}
.css-1gynyxc {
    font-size: 14px;
    font-weight: 600;
    color: rgba(0, 0, 0, 0.7);
    line-height: 1.5;
    padding: 16px 16px 0px;
}
.css-19midj6 {
    padding: 16px;
}

/* RINGKASAN BELANJA EOF */
</style>

<div style="margin-bottom: 55px"></div>
<!-- PRODUCT -->
 <div class="css-product">
    <div class="css-product-box">
        <div class="css-1ghrxnh">
            <img class="img" src="<?php echo base_url('assets') ?>/images/loader.svg" data-src="<?php echo getProductPhoto($product->product_id) ?>">
        </div>
        <div class="css-b691yt">
            <div class="name"><?php echo $product->product_name ?></div>
            <div class="stock">Diskusi ( <?php echo $product->comment ?> )</div>
            <div class="price">Rp. <?php echo @number_format(@$product->price,0,',','.'); ?></div>
            <div class="css-8aa4fn"></div><span class="css-1gh2ab9" role="presentation"><i class="icon-font icon-font-more-vertical"></i></span></div>
    </div>
 </div> 
<!-- PRODUCT EOF -->

<!-- ALAMAT BELANJA -->
<div class="unf-card unf-card--container css-u0qtpu-unf-card eue3g1e0">
    <div>
        <div class="css-1gynyxc">Tujuan Pengiriman</div>
        <div class="css-19midj6">
            <div class="row">
                <div class="col col-12">
                    <div class="css-oq7xsu" data-cy="checkoutTotalHarga"><?php echo $alamat->penerima ?></div>
                </div>
            </div>
            <div class="row u-mt2">
                <div class="col col-12">
                    <div class="css-oq7xsu" data-cy="checkoutOngkosKirim"><?php echo $alamat->alamat_detail ?></div>
                </div>
            </div>
            <div class="row u-mt2">
            	<div class="col col-6">
            		<a href="<?php echo base_url('dashboard/location/edit?id=' . $alamat->alamat_id) ?>" class="btn btn-border btn-small">
		                <span>Ganti Alamat</span>
		            </a>
            	</div>
            	<div class="col col-6">
            	</div>
            </div>
        </div>
    </div>
</div>
<!-- ALAMAT EOF -->

<!-- RINGKASAN BELANJA -->
<div class="unf-card unf-card--container css-u0qtpu-unf-card eue3g1e0">
    <div>
        <div class="css-1gynyxc">Ringkasan Belanja</div>
        <div class="css-19midj6">
            <div class="row">
                <div class="col col-7">
                    <div class="css-oq7xsu">Total Harga (1 Barang) </div>
                </div>
                <div class="col col-5 text-right">
                    <div data-cy="checkoutTotalPrice" class="u-right css-oq7xsu css-35ezg3">Rp 35.000</div>
                </div>
            </div>
            <div class="row u-mt2">
                <div class="col col-7">
                    <div class="css-oq7xsu">Total Ongkos Kirim</div>
                </div>
                <div class="col col-5 text-right">
                    <div data-cy="checkoutAmountPriceShipment" class="u-right css-oq7xsu css-35ezg3">Rp 10.000</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- RINGKASAN BELANJA EOF -->

<div style="margin-bottom: 70px"></div>
<div class="unf-card css-btn-overlay">
    <div class="css-gq7rz0">
        <div class="pdpButtonGrid col">
            <a href="<?php //echo base_url('messages/d/' . $product->input_by . user_id()) ?>">
                <span class="css-ytsv0f">Total</span>
            </a>
                <a href="<?php //echo base_url('diskusi/p/' . $product->product_id) ?>" class="css-rp"><span>Rp 50000</span></a>
        </div>
        <div class="pdpButtonGrid">
            <a href="<?php //echo base_url('cart/sku/' . $product->product_id) ?>" class="btn">
                <span>Beli</span>
            </a>
        </div>
    </div>
</div>