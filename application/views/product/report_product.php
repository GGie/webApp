<style type="text/css">
body {
  font-family: 'Oxygen', sans-serif;
  background-image: linear-gradient(rgb(174, 204, 255), rgb(255, 255, 255));
  height: 100%;
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
/* comment */

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

.css-textarea {
    font-size: 14px;
    font-weight: normal;
    line-height: 21px;
    color: rgba(0, 0, 0, 0.54);
    background-image: linear-gradient(rgb(255, 255, 255), rgb(229, 245, 255));
    text-align: justify;
    overflow-y: auto;
    resize: none;
    width: 100%;
    height: calc(100vh - 250px);
    padding: 16px;
    border-width: initial;
    border-style: none;
    border-color: initial;
    border-image: initial;
    outline: none;

    padding: 4px;
    padding-bottom: 60px;
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

/* Product */
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
.css-product-box {
    position: relative;
    margin-left: 0px;
    flex: 1 1 0%;
    padding: 16px;
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
    width: 50vw;
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
/*product box*/
</style>
      <div class="modal-content h-100 w-100">
   <nav class="css-nav-modal-header">
      <div class="css-modal-header">
      </div>
   </nav>

 <div class="css-product">
    <div class="css-product-box">
        <div class="css-1ghrxnh">
            <img class="img" src="<?php echo base_url('assets') ?>/images/loader.svg" data-src="<?php echo getProductPhoto($product->product_id) ?>">
        </div>
        <div class="css-b691yt">
            <div class="name"><?php echo $product->product_name ?></div>
            <div class="stock">Comment ( <?php echo $product->comment ?> )</div>
            <div class="price">Rp. <?php echo @number_format(@$product->price,0,',','.'); ?></div>
            <div class="css-8aa4fn"></div><span class="css-1gh2ab9" role="presentation"><i class="icon-font icon-font-more-vertical"></i></span></div>
    </div>
 </div> 

  <div class="css-product p-0">
    <div class="css-product-box">
    <i class="icon-h-08" style="font-size: 18px"></i> Deskripsikan bentuk pelanggaran, spam, atau barang terlarang!!!
    </div>
  </div> 

  <form method="post" action="<?php echo base_url('p/report/' . $product->product_id) ?>">
     <textarea class="css-textarea" id="css-textarea" name="report_desc" autofocus></textarea>
        <div class="css-over">
          <button type="submit" id="btn-desc" class="btn-accent btn size-3 btn-block"><i class="fa fa-paper-plane-o"></i> Kirim</button>
        </div>
  </form>

  </div>
  <script type="text/javascript">
    $("#css-textarea").focus();
  </script>