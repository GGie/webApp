<link href="<?php echo base_url() ?>/assets/css/select2.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>
<script type="text/javascript"
            src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key=SB-Mid-client-KpmADukbbpsd5qnc"></script>
    <!-- SB-Mid-client-1UKnZNkr0pJodLLM -->
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
                <a class="btn-link" href="<?php echo base_url('p/product/' . $Dataproduct->product_id . '-' . replace_url_char($Dataproduct->product_name)) ?>"><i class="icon-e-19"></i><?php echo strtoupper($this->lang->line('back')) ?></a>
              </div>
              <div class="col-right">
                <a class="btn-link" href="javascript:void(0)" onclick="clear_modal('<?php echo $Dataproduct->order_id ?>')"><i class="icon-h-02"></i>CLEAR</a>
              </div>
            </div>


          
            <table>
              <tbody>
                <tr id="<?php echo $Dataproduct->product_id ?>">
                  <td>
                  </td>
                  <td>
                    <div class="tt-product-img">
                      <img src="<?php echo base_url('assets') ?>/images/loader.svg" data-src="<?php echo getProductPhoto($Dataproduct->product_id) ?>" alt="">
                    </div>
                  </td>
                  <td>
                    <div class="tt-title" style="vertical-align: top">
                      <b style="color:#2879fe !important" ="tt-white-color"><a href="<?php echo base_url('p/product/' . $Dataproduct->product_id . '-' . replace_url_char($Dataproduct->product_name)) ?>""><?php echo $Dataproduct->product_name ?></a></b><br>
                    </div>
                    <ul class="tt-list-parameters">
                      <li>
                        <div class="detach-quantity-mobile">
                                      <div class="col-item readonly">
                                        <div class="tt-input-counter style-01">
                                          <span class="minus-btn"></span>
                                          <input type="text" name="qty"  id="qty" value="<?php echo $Dataproduct->qty ?>" min="1" size="<?php echo ($Dataproduct->qty + $product->product_stock) ?>" readonly/>
                                          <span class="plus-btn"></span>
                                        </div>
                                      </div>
                        </div>
                      </li>
                      <li>
                        <div class="tt-price subtotal">
                         Rp. <?php echo @number_format(@$Dataproduct->price,0,',','.'); ?>
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
                      Rp. <?php echo @number_format(@$Dataproduct->price,0,',','.'); ?>
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
                  <input type="hidden" name="origin" id="origin" value="<?php echo is_set_alamat($seller) ?>">
                  <input type="hidden" name="destination" id="destination" value="<?php echo is_set_alamat(user_id()) ?>">
                  <input type="hidden" name="weight" id="weight" value="<?php echo $Dataproduct->weight ?>">
                  <select id="kurir" class="form-control">
                    <option value=""> -- Select -- </option>
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
                 <td width="20px" style="text-align:right"><div id="total_price">Rp. <?php echo @number_format(@$Dataproduct->price_total,0,',','.'); ?></div></td>
               </tr>
               <tr>
                 <td>Ongkos Kirim</td>
                 <td width="20px" style="text-align:right"><div class="ongkir">Rp. 0</div></td>
               </tr>
               <tr style="border-top: 2px solid #ddd;font-style: italic;">
                 <td>Total Bayar</td>
                 <td width="20px" style="text-align:right"><div class="total">Rp. 0</div></td>
               </tr>
             </table>



              <form action="<?php echo base_url('cart/pay') ?>" method="post" id="payment-goo" class="form-default">
                <input type="hidden" name="product_qty" id="product_qty" min="1" value="<?php echo $Dataproduct->qty ?>">
                <input type="hidden" name="invoice_id" id="invoice_id" value="<?php echo $Dataproduct->invoice_id ?>">
                <input type="hidden" name="product_harga" id="product_harga" value="<?php echo $Dataproduct->price ?>">
                <input type="hidden" name="product_ongkir" id="product_ongkir" value="0">
                <input type="hidden" name="total" id="total" value="0">
                <input type="submit"  id="pay-button" class="btn btn-lg btn-disabled" disabled value="Goo Payment">
                <p>
                  Silahkan pilih kurir yang tepat untuk anda.
                </p>
              </form>

              <form id="payment-form" method="post" action="<?=site_url()?>/snap/finish">
                <input type="hidden" name="result_type" id="result-type" value=""></div>
                <input type="hidden" name="result_data" id="result-data" value=""></div>

              </form>
            </div>
          </div>

      
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
function clear_modal(paramId){

        $.confirm({
            title: '<?php echo $this->lang->line('delete'); ?>!',
            content: 'Hapus Item ini dan cari hal lain ?',
            buttons: {
                confirm: function () {
                   $.post( "<?php echo base_url('cart/order_delete') ?>", { id: paramId } );
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

      $("#pay-button").attr('disabled', true);
      $('#product_ongkir').val(0);
      $('.ongkir').text("Rp. 0");
      $('#total').val(0);
      $('.total').text("Rp. 0"); // label


      $("#ongkir").css('display','none');
      $('.loader08').css('display','block');
      //Mengambil value dari option select provinsi kemudian parameternya dikirim menggunakan ajax
      var Xcourier     = $('#kurir').val();
      var Xorigin      = $('#origin').val();
      var Xdestination = $('#destination').val();
      var Xweight      = $('#weight').val();

          $.ajax({
              type : 'POST',
              url : '<?php echo base_url('cart/ongkir') ?>',
              data :  {origin:Xorigin, destination:Xdestination, weight:Xweight, courier:Xcourier},
          success: function (data) {
          //jika data berhasil didapatkan, tampilkan ke dalam option select kabupaten
          $("#ongkir").html(data);
          $("#ongkir").css('display','block');
          $('.loader08').css('display','none');
          
        }
            });
    });

  });

$('#qty').change(function(){
    if ( $(this).val() > 0 && $(this).val() < <?php echo ($Dataproduct->qty+$product->product_stock+1) ?>) {
        var product_harga     = $('#product_harga').val()
        var total_price       = product_harga*$(this).val();
        var total_price_sum   = (total_price/1000).toFixed(3);

        $('#total_price').text("Rp. " + total_price_sum);
        $('#product_qty').val($(this).val());

          $('#total').val((parseFloat(product_harga) * parseFloat($(this).val()) ) + parseFloat($('#product_ongkir').val()));
          $('.total').text("Rp. " + $('#total').val()); // label
    }
});

function ongkir(param){
  
  //harga product satuan
  var product_harga = $('#product_harga').val();

  var output = (param/1000).toFixed(3);
  $('.ongkir').text("Rp. " + output);

  //harga ongkir
  $('#product_ongkir').val(param);

  $('#total').val( (parseFloat(product_harga) * parseFloat($('#qty').val()) ) + parseFloat(param));


  $('.total').text("Rp. " + $('#total').val());
  $("#pay-button").removeAttr('disabled');
}
</script>


  <link rel="stylesheet" rel="stylesheet" media="screen" href="<?php echo base_url() ?>assets/css/amaran.min.css">
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


<script type="text/javascript">

$('#kurir').select2({
    placeholder: '-Select Kurir-',
    minimumInputLength: 0,
});

</script>
<script type="text/javascript">
  
    $('#pay-button').click(function (event) {
      event.preventDefault();
      $(this).attr("disabled", "disabled");
    
    $.ajax({
      url: '<?=site_url()?>/snap/token',
      cache: false,
      type:'POST',
      data: $("#payment-goo").serialize(),
      success: function(data) {
        //location = data;

        console.log('token = '+data);
        
        var resultType = document.getElementById('result-type');
        var resultData = document.getElementById('result-data');

        function changeResult(type,data){
          $("#result-type").val(type);
          $("#result-data").val(JSON.stringify(data));
          //resultType.innerHTML = type;
          //resultData.innerHTML = JSON.stringify(data);
        }

        snap.pay(data, {
          
          onSuccess: function(result){
            changeResult('success', result);
            console.log(result.status_message);
            console.log(result);
            $("#payment-form").submit();
          },
          onPending: function(result){
            changeResult('pending', result);
            console.log(result.status_message);
            $("#payment-form").submit();
          },
          onError: function(result){
            changeResult('error', result);
            console.log(result.status_message);
            $("#payment-form").submit();
          },
          onClose: function(){
            $("#pay-button").removeAttr('disabled');
          }
        });
      }
    });
  });

  </script>