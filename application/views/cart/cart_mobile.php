<style type="text/css">
body {
  font-family: 'Oxygen', sans-serif;
  background-image: linear-gradient(rgb(174, 204, 255), rgb(255, 255, 255));
  height: 100%;
  min-height: 400px;
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

.css-stock-count {
    display: flex;
    -webkit-box-pack: end;
    justify-content: flex-end;

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
.delete-wrapper {
    width: 17px;
    float: right;
    padding-left: 25px;
}
.css-166olu8 {
    width: 16px;
    height: 16px;
    display: inline-block;
    vertical-align: middle;
    cursor: pointer;
    background: url(https://ecs7.tokopedia.net/assets-tokopedia-lite/v2/atreus/production/b17f96b8.svg);
}

</style>
<div style="margin-bottom: 55px"></div>
<!-- PRODUCT -->
<?php foreach ($product_cart->result() as $product) { ?>
 <div class="css-product row">

        <div class="css-product-box">
        <div class="css-1ghrxnh">
            <img class="img" src="<?php echo base_url('assets') ?>/images/loader.svg" data-src="<?php echo getProductPhoto($product->product_id) ?>">
        </div>
        <div class="css-b691yt">
            <div class="name-n-delete-wrapper">
                <div class="delete-wrapper"><i class="btn-delete css-166olu8 e15ymw7z8" data-cy="cartHapusIcon"></i></div>
                <div class="name"><?php echo $product->product_name ?></div>
            </div>
            <div class="price">Rp. <?php echo @number_format(@$product->price,0,',','.'); ?></div>
            
        </div>
    <div class="css-stock-count">
            <div class="col-item pr-1">
                <div class="tt-input-counter style-02">
                    <span class="minus-btn"></span>
                    <input type="text" value="<?php echo $product->qty_order ?>" size="1000"/>
                    <span class="plus-btn"></span>
                </div>
            </div>
            <a href="<?php echo base_url('cart/sku/' . $product->product_id) ?>">
                <div class="btn btn-border">Lanjut Beli</div>
            </a>
        </div>
    </div>

 </div>
<?php } ?>
<!-- PRODUCT EOF -->