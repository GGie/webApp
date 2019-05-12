<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo  (ENVIRONMENT === 'development') ?  '{elapsed_time}' : ($title != '') ? @$title : 'Goopiz' ?></title>
    <meta name="keywords" content="<?php echo  (ENVIRONMENT === 'development') ?  '{elapsed_time}' : ($title != '') ? @$title : 'Goopiz' ?>">
    <meta name="description" content="<?php echo  (ENVIRONMENT === 'development') ?  '{elapsed_time}' : ($desc != '') ? @$desc : 'Goopiz' ?>">
    <meta name="theme-color" content="#2879fa">
      <meta name="msapplication-navbutton-color" content="#2879fa">
      <meta name="keywords" content="Social E Commerce">
      <meta name="description" content="Social E Commerce">
      <meta name="author" content="goopiz official">
    <link rel="shortcut icon" href="<?php echo base_url('favicon.ico') ?>">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="manifest" href="manifest.json">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/theme.css">
</head>
<body>
<script src="<?php echo base_url('assets') ?>/external/jquery/jquery.min.js"></script>
<script src="<?php echo base_url('assets') ?>/external/bootstrap/js/bootstrap.min.js"></script>

<style type="text/css">
/* comment */
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
    padding: 4px;
    border-radius: 8px;
    overflow: hidden;
}
.css-7ieh0i {
    padding-left: 4px;
    padding-right: 4px;
}
.css-uudpsy {
    flex-direction: row;
    -webkit-box-pack: justify;
    justify-content: space-between;
    align-items: flex-start;
}
.css-yb5pdp {
    font-size: 14px;
    color: rgba(0, 0, 0, 0.54);
}
.css-f618cd {
    display: flex;
    height: 40px;
    -webkit-box-pack: justify;
    justify-content: space-between;
    -webkit-box-align: center;
    align-items: center;
    color: rgba(0, 0, 0, 0.38);
    font-size: 11px;
    border-top: 1px solid rgb(241, 241, 241);
    margin: 0px -8px;
    padding: 8px;
}
.css-hidden {
    display: none;
}
.css-comment>:first-child {
    height: auto;
    opacity: 1;
    border-top: 1px solid rgb(241, 241, 241);
    margin-left: 0px;
    padding: 4px 4px 4px 15px;
}
.css-name {
    width: 60%;
    float: left;
    color: #007bff!important;
    font-size: 14px;
    line-height: 1.5;
    color: rgba(0, 0, 0, 0.54);
    margin-bottom: 4px;
}
.css-date {
    text-align: right;
    padding-left: 10px;
    font-size: 11px;
    color: rgba(0, 0, 0, 0.38);
    line-height: 1.55;
    margin-bottom: 10px;
}
.css-label-penjual span {
    display: inline-block;
    background-color: rgb(218, 227, 245);
    font-size: 11px;
    font-weight: 600;
    line-height: 1.36;
    text-align: center;
    color: #007bff;
    padding: 2px 8px;
    border-radius: 20px;
    margin-bottom: 4px;
}
.css-1vpo0ep {
    font-size: 14px;
    line-height: 1.5;
    color: rgba(0, 0, 0, 0.54);
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
    height: calc(100vh - 55px);
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

/* messages */
#msg {  
  overflow: hidden;
  outline: 0;
}
.chat-message {
  padding: 4px;
  padding-bottom: 60px;
}

.chat-box {
  /*position: fixed;*/
  position: fixed;
  bottom: 0;
  right: 0;
  padding: 6px;
  border-top: 1px solid #eee;
  transition: all .5s ease;
  -webkit-transition: all .5s ease;
  -moz-transition: all .5s ease;
  -ms-transition: all .5s ease;
  -o-transition: all .5s ease;
}
#style-4::-webkit-scrollbar-track
{
  background-color: #fff;
}

#style-4::-webkit-scrollbar
{
  width: 6px;
  background-color: rgb(218, 227, 245);
}

#style-4::-webkit-scrollbar-thumb
{
  background-color: rgb(218, 227, 245);
  border: 2px solid rgb(218, 227, 245);
  border-radius: 8px;
}
.btn-messages {
    outline: none;
    width: calc(100% - 45px);
/*    min-height: 30px;
    max-height: 36px;*/
    /*line-height: 1.43;*/
    overflow-y: scroll;
    overflow-x: hidden;
    border-width: 1px;
    border-style: solid;
    border-color: rgb(224, 224, 224);
    border-image: initial;
    border-radius: 8px;
    padding: 8px 16px;
}

/* Product */
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
</style>




<div class="modal animated fadeInUpSm h-100 w-100 p-0" id="modalDiskusi">
<div class="modal-dialog modal-dialog-centered h-100 w-100 m-0">
<div class="modal-content h-100 w-100">
   <nav class="css-nav-modal-header">
      <div class="css-modal-header">
         <div class="css-description">
            <div class="css-back">
              <div class="header-content row float-left">
                <div class="col-xs-2 col-md-2 col-lg-2 float-left">
                  <span class="icon-e-30"></span>
                </div>
              </div>
            </div>
            <div class="header-content row">
              
              <div class="float-right">
                <span id="title"> Diskusi</span>
              </div>
            </div>
         </div>
      </div>
   </nav>



<div class="css-textarea pb-6" id="style-4">

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
 
<div class="css-product">
    <div class="css-7ieh0i">
        <div class="css-uudpsy">
     
                <div>
                    <a class="css-name" href="https://www.tokopedia.com/people/9012755">
                        Nurdian Purnama
                    </a>
                    <div class="css-date">09 maret 2019 12:00:00</div>
                </div>
            
        </div>
        <div class="css-yb5pdp">
            <div class="css-1d7niuo e1sqnpyr20"><span width="0"><span><span>Produk luar biasa... Packing mantap... Seller ramah...</span>
                <br><span>Recomended seller</span></span><span style="position: fixed; visibility: hidden; top: 0px; left: 0px;"><span role="presentation">... <span class="css-ej5ikv e1sqnpyr21">Selengkapnya</span></span>
                </span>
                </span>
            </div>
            <div class="css-1es2ftq e1sqnpyr18"></div>
        </div>
        <div class="css-f618cd">
            <div><i class="icon-h-12"> </i>Lihat 1 jawaban lainnya</div>
            <div onclick="view_diskusi(123)" style="cursor:pointer;" class="test"><strong> Lihat Balasan</strong></div>
        </div>
        <!-- <div class="css-hidden"> -->
        <div class="123 css-hidden">
          <div class="input-group">
            <textarea class="btn-messages" placeholder="Type your message here" id="msg" name="msg" rows="1" max-rows="1" style="min-height:10px;width: 100%"></textarea> 
          </div><!-- /input-group -->

        <div class="css-comment">
          <div>
            <div class="css-name"><strong>Artdata</strong></div>
            <div class="css-date">09 maret 2019 12:00:00</div>
          </div>
          <div class="css-label-penjual"><span>Penjual</span></div>
            <div class="css-1vpo0ep e1sqnpyr28"><span> Ditunggu ulasan dan foto-nya ya agar </span></div>
        </div>
        <div class="css-comment">
          <div>
            <div class="css-name"><strong>Artdata</strong></div>
            <div class="css-date">09 maret 2019 12:00:00</div>
          </div>
          <div class="css-label-penjual"><span>Penjual</span></div>
            <div class="css-1vpo0ep e1sqnpyr28"><span> Ditunggu ulasan dan foto-nya ya agar </span></div>
        </div>
        <div class="css-comment">
          <div>
            <div class="css-name"><strong>Artdata</strong></div>
            <div class="css-date">09 maret 2019 12:00:00</div>
          </div>
          <div class="css-label-penjual"><span>Penjual</span></div>
            <div class="css-1vpo0ep e1sqnpyr28"><span> Ditunggu ulasan dan foto-nya ya agar </span></div>
        </div>

        </div>

    </div>
</div>
<!-- Comment EOF -->
        <div class="chat-box col-12 bg-white">
          <div class="input-group">
            <input type="hidden" name="to" value="">
            <textarea class="btn-messages" placeholder="Type your message here" id="msg" name="msg" rows="1" max-rows="20" style="min-height:10px;"></textarea> 
            <span class="input-group-btn">
              <i class="icon-f-96 p-1" style="font-size: 37px;color:#2879fa" @click="send()"></i>
            </span>
          </div><!-- /input-group -->
        </div>
    </div>
</div>
</div>
</div>
<script type="text/javascript">

$(".css-description").click(function(){
  window.location = "<?php echo base_url('p/product/' . $product->product_id . '-' . replace_url_char($product->product_name)) ?>";
});
$("#modalDiskusi").modal();

$(function() {
  $('textarea[max-rows]').each(function () {
    var textarea = $(this);

    var minRows = Number(textarea.attr('rows'));
    var maxRows = Number(textarea.attr('max-rows'));

    // clone the textarea and hide it offscreen
    // TODO: copy all the styles
    var textareaClone = $('<textarea/>', {
      rows: minRows,
      maxRows: maxRows,
      class: textarea.attr('class')
    }).css({
      position: 'absolute',
      left: -$(document).width() * 2
    }).insertAfter(textarea);

    var textareaCloneNode = textareaClone.get(0);

    textarea.on('input', function () {
      // copy the input from the real textarea
      textareaClone.val(textarea.val());

      // set as small as possible to get the real scroll height
      textareaClone.attr('rows', 2);

      // save the real scroll height
      var scrollHeight = textareaCloneNode.scrollHeight;

      // increase the number of rows until    the content fits
      for (var rows = minRows; rows <= maxRows; rows++) {
        textareaClone.attr('rows', rows);

        if (textareaClone.height() > scrollHeight) {
          break;
        }
      }

      // copy the rows value back to the real textarea
      textarea.attr('rows', (textareaClone.attr('rows')-2));
    }).trigger('input');
  });
});

function view_diskusi(id){
  $('.' + id).toggle(function () {
    $("." + id).removeClass("hidden");
    
}, function () {
    $("." + id).addClass("hidden");
});
}
</script>