<link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/logo.css">
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

<style type="text/css">
.c-input-label {
    width: 100%;
    font-size: 1rem;
    line-height: 1.4;
    padding: 12px;
    color: #333;
    display: inline-block;
    font-family: -apple-system, BlinkMacSystemFont, "Helvetica Neue", Roboto, "Segoe UI", Oxygen, Ubuntu, Cantarell, "Open Sans", sans-serif;
}
.co-input-radio {
    position: absolute;
    overflow: hidden;
    width: 1px;
    height: 1px;
    padding: 0;
    opacity: 0;
}
input[type="radio" i] {
    margin: 3px 3px 0px 5px;
}
input[type="radio" i] {
    -webkit-appearance: radio;
    box-sizing: border-box;
}
input[type="radio" i] {
    background-color: initial;
    cursor: default;
    margin: 3px 0.5ex;
    padding: initial;
    border: initial;
}
.co-input-radio+.co-input__inner-label {
    position: relative;
    padding-left: 24px;
}

.co-input-radio:checked+.co-input__inner-label:before {
    border-color: #2879fe;
    background-color: #2879fe;
    box-shadow: none;
}

.co-input-radio+.co-input__inner-label:before {
    content: "";
    display: block;
    width: 20px;
    height: 20px;
    border: 2px solid;
    border-color: #e8eaef;
    border-radius: 50%;
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    transition: border .2s ease-in-out;
}
.o-flag {
    display: table;
    width: 100%;
    border-spacing: 0;
}
.o-flag__head {
    width: 1px;
    padding-right: 1.14286rem;
}
.o-flag__head, .o-flag__body {
    display: table-cell;
    vertical-align: middle;
}

.o-flag__body, .o-flag__body>:last-child {
    margin-bottom: 0;
}
.o-flag__body {
    width: auto;
}
.o-flag__head, .o-flag__body {
    display: table-cell;
    vertical-align: middle;
}
.o-flag__body, .o-flag__body>:last-child {
    margin-bottom: 0;
}

.u-fg--ash-dark, .u-fg--ash-dark:focus, .u-fg--ash-dark:hover {
    color: #999 !important;
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

.css-kurir {
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
    overflow-x: scroll;
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
.css-1hltsbh {
    line-height: 16px;
    overflow: hidden;
    text-overflow: ellipsis;
}

</style>
<!-- RINGKASAN BELANJA -->
<div class="unf-card unf-card--container css-u0qtpu-unf-card eue3g1e0" id="btn-kurir">

        <div class="css-1gynyxc">Kurir</div>
        <div class="css-19midj6">
            <div>
                <label class="c-input-label">
                    <span class="co-input__inner-label o-flag">
                        <div class="o-flag__head">
                            <div class="css-logo-jne"></div>
                        </div>
                        <div class="o-flag__body">
                            <div>JNE EXPRESS</div> 
                            <div class="u-fg--ash-dark"><span>Rp 18.000</span> ( 1 hari )</div>
                        </div>
                    </span>
                </label>
                <i class="css-aqsu6h"></i>
            </div>
        </div>

</div>
<!-- RINGKASAN BELANJA EOF -->

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

<!-- modalKurir -->
<div class="modal animated fadeInUpSm h-100 w-100 p-0" id="modalKurir">
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
                  <span id="title"> Pilih Kurir</span>
                </div>
            </div>
         </div>
      </div>
   </nav>
    <div class="css-kurir" id="css-kurir">
    </div>
</div>
</div>
</div>
<!-- modalKurir EOF -->

<script type="text/javascript">
function selectKurir(){
    $("#modalKurir").modal('hide');
}
$('#btn-kurir').click(function(){
    var content = $("#css-kurir").text();
    if (content.length <= 10) {
        var load_img = $('<img/>').attr('src','http://localhost:8080/dev/frontend/assets/images/loader.svg').addClass('loading-image').css({"position": "fixed", "top": "0px", "width": "100%"}); //create load image
        $("#modalKurir").append(load_img);
        var id = "";
        $.ajax({
            url: "<?php echo base_url('ajax/kurir') ?>",
            data: {id:id},
            success:
            function(data){
                $("#css-kurir").html(data);
                load_img.remove();
            }
        });
    }

  $("#modalKurir").modal('show');
});
</script>