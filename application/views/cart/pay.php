  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

<style type="text/css">
  .loader08 {
  width: 20px;
  height: 20px;
  position: relative;
  animation: loader08 1s ease infinite;
  top: 50%;
  margin: -46px auto 0; }

@keyframes loader08 {
  0%, 100% {
    box-shadow: -13px 20px 0 #0052ec, 13px 20px 0 rgba(0, 82, 236, 0.2), 13px 46px 0 rgba(0, 82, 236, 0.2), -13px 46px 0 rgba(0, 82, 236, 0.2); }
  25% {
    box-shadow: -13px 20px 0 rgba(0, 82, 236, 0.2), 13px 20px 0 #0052ec, 13px 46px 0 rgba(0, 82, 236, 0.2), -13px 46px 0 rgba(0, 82, 236, 0.2); }
  50% {
    box-shadow: -13px 20px 0 rgba(0, 82, 236, 0.2), 13px 20px 0 rgba(0, 82, 236, 0.2), 13px 46px 0 #0052ec, -13px 46px 0 rgba(0, 82, 236, 0.2); }
  75% {
    box-shadow: -13px 20px 0 rgba(0, 82, 236, 0.2), 13px 20px 0 rgba(0, 82, 236, 0.2), 13px 46px 0 rgba(0, 82, 236, 0.2), -13px 46px 0 #0052ec; } }
</style>
<div id="tt-pageContent">
  <div class="container-indent">
    <div class="container">

      <div class="row">
        <div class="col-sm-12 col-xl-8">
          <div class="tt-shopcart-table">
            <div class="tt-shopcart-btn">
              <div class="col-left">
                <a class="btn-link" href="<?php //echo base_url('p/product/' . $Dataproduct->product_id . '-' . replace_url_char($Dataproduct->product_name)) ?>"><i class="icon-e-19"></i>BACK TO PRODUCT</a>
              </div>
              <div class="col-right">
                <a class="btn-link" href="javascript:void(0)" onclick="clear_modal('<?php //echo $Dataproduct->product_id ?>')"><i class="icon-h-02"></i>CLEAR SHOPPING CART</a>
              </div>
            </div>


          
            <table>
              <tbody>
                <tr id="<?php echo $Dataproduct->product_id ?>">
                  <td>
                  </td>
                  <td>
                    <div class="tt-product-img">
                      <img src="<?php //echo base_url('assets') ?>/images/loader.svg" data-src="<?php echo getProductPhoto($Dataproduct->product_id) ?>" alt="">
                    </div>
                  </td>
                  <td>
                    <div class="tt-title" style="vertical-align: top">
                      <b style="color:#2879fe !important" ="tt-white-color"><a href="<?php //echo base_url('p/product/' . $Dataproduct->product_id . '-' . replace_url_char($Dataproduct->product_name)) ?>""><?php echo $Dataproduct->product_name ?></a></b><br>
                      <?php //echo substr(xxs_filter($Dataproduct->product_desc), 0, 50) ?>...
                    </div>
                    <ul class="tt-list-parameters">
                      <li>
                        <div class="detach-quantity-mobile"></div>
                      </li>
                      <li>
                        <div class="tt-price subtotal">
                         Rp. <?php //echo @number_format(@$Dataproduct->price,0,',','.'); ?>
                        </div>
                      </li>
                    </ul>
                  </td>
                  <td>
                    <div class="detach-quantity-desctope">
                      
                    </div>
                  </td>
                  <td>
                    <div class="tt-price subtotal">
                      Rp. <?php //echo @number_format(@$Dataproduct->price,0,',','.'); ?>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>

            <br>
            <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                  <label for="address_country">KURIR <sup>*</sup></label>
                  <select id="kurir" class="form-control">
                    <option value="jne">JNE</option>
                    <option value="tiki">TIKI</option>
                    <option value="pos">POS</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-6">
                <label for="address_province">DETAIL</label>
                <div class='loader08' style="display: none"></div>
                  
                  <div id="ongkir"></div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="tt-shopcart-box">
              <i class="tt-title">
                Ringkasan Belanja
              </i>
              <table class='tt-table-02'>
               <tr>
                 <td>Total Harga</td>
                 <td width="20px" style="text-align:right">Rp. <?php //echo @number_format(@$Dataproduct->price,0,',','.'); ?></td>
               </tr>
               <tr>
                 <td>Ongkos Kirim</td>
                 <td width="20px" style="text-align:right"><div class="ongkir"></div></td>
               </tr>
             </table>
              <form action="<?php echo base_url('cart/pay') ?>" method="post" class="form-default">
                
                <input type="hidden" name="product_harga" id="product_harga" value="<?php echo $Dataproduct->price ?>">
                <input type="hidden" name="product_ongkir" id="product_ongkir" value="">
                <input type="submit" id="submit" class="btn btn-lg btn-disabled" disabled value="Goo Payment">
                <p>
                  Silahkan pilih kurir yang tepat untuk anda.
                </p>
              </form>
            </div>
          </div>

      
      </div>
    </div>
  </div>
</div>

<a href="#" class="tt-back-to-top">BACK TO TOP</a>


<script type="text/javascript">
function clear_modal(paramId){
        $.confirm({
            title: '<?php echo $this->lang->line('delete'); ?>!',
            content: 'Hapus Item ini dan cari hal lain ?',
            buttons: {
                confirm: function () {
                   $.post( "<?php echo base_url('cart/sku_delete') ?>", { id: paramId } );
                   $("#" + paramId).hide('slow');
                   window.location = "<?php echo base_url() ?>";
                },
                cancel: function () {
                    
                },
            }
        });

}
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#kurir').change(function(){
      $("#ongkir").css('display','none');
      $('.loader08').css('display','block');
      //Mengambil value dari option select provinsi kemudian parameternya dikirim menggunakan ajax
      var courier = $('#kurir').val();
          $.ajax({
              type : 'POST',
              url : '<?php echo base_url('cart/ongkir') ?>',
              data :  {origin:'501', destination:'114', weight:'10', courier:courier},
          success: function (data) {
          //jika data berhasil didapatkan, tampilkan ke dalam option select kabupaten
          $("#ongkir").html(data);
          $("#ongkir").css('display','block');
          $('.loader08').css('display','none');
          
        }
            });
    });

  });

function ongkir(param){
  var output = (param/1000).toFixed(3);
  $('.ongkir').text("Rp. " + output);
  $('#product_ongkir').val(output);
  $("#submit").removeAttr('disabled');
}
</script>