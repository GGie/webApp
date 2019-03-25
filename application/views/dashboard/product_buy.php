<div class="container-indent">
    <div class="container">

      <div class="row">
        <div class="col-sm-12 col-xl-12">
          <div class="tt-shopcart-table">
            <table>
              <tbody>
                <?php foreach($Dataproduct->result() as $product) { ?>
                <tr class="<?php echo $product->product_id ?>">
                  <td>
                  <?php if ($product->status_order_id == 1){ ?>
                    <a href="javascript:void(0)" onclick="delete_modal_notif('<?php echo $product->product_id ?>')" class="tt-btn-close"></a>
                  <?php } ?>
                  </td>
                  <td>
                    <div class="tt-product-img">
                      <img src="<?php echo base_url('assets') ?>/images/loader.svg" data-src="<?php echo getProductPhoto($product->product_id) ?>" alt="">
                    </div>
                  </td>
                  <td>
                    <div class="tt-title" style="vertical-align: top!important">
                      <p style="color:grey">INVOICE : <?php echo $product->invoice_id; ?></p>
                      <b>
                        <a href="<?php echo base_url('p/product/' . $product->product_id . '-' . replace_url_char($product->product_name)) ?>">
                          <?php echo $product->product_name ?>
                        </a>
                      </b><br>Rp. <?php echo @number_format(@$product->price,0,',','.'); ?>
                      
                    </div>
                    <ul class="tt-list-parameters">
                      <li>
                        <div class="detach-quantity-mobile">
                          <?php status_order($product->order_id) ?>
                        </div>
                      </li>
                      <li>
                        <div class="tt-price subtotal">
                          <?php if ( $product->status_order_id == 1 AND $product->payment_status != "settlement") { ?>
                            <a href="<?php echo base_url('/cart/invoice/' . $product->invoice_id) ?>" class="btn btn-border">Detail Pembayaran</a>
                          <?php } ?>
                         <!-- Rp. <?php echo @number_format(@$product->price,0,',','.'); ?> -->
                        </div>
                      </li>
                    </ul>
                  </td>
                  <td style="width: auto !important">
                    <?php status_order($product->order_id) ?>
                  </td>
                  <td>
                    <div class="tt-price subtotal">
                      <?php if ( $product->status_order_id == 1 AND $product->payment_status != "settlement") { ?>
                        <a href="<?php echo base_url('/cart/invoice/' . $product->invoice_id) ?>" class="btn btn-border">Detail Pembayaran</a>
                      <?php } ?>
                      <!-- Rp. <?php echo @number_format(@$product->price,0,',','.'); ?> -->
                    </div>
                  </td>
                </tr>
              <?php } ?>
              </tbody>
            </table>
            <div class="tt-shopcart-btn">
              <div class="col-left">
                  <?php echo $this->pagination->create_links(); ?>
              </div>
            </div>

                    <?php if ( $Dataproduct->num_rows() <= 0 ) { ?>
          
<div>
  <a href="<?php echo base_url() ?>" class="btn btn-small" style="margin: 10px"><i class="icon-f-39"></i>Pergi Belanja</a>

   <table width="100%" height="100%" align="center" valign="center">
    <tr>
      <td>
        <div class="tt-empty-search">
                    <span class="tt-icon icon-f-45"></span>
        </div>
      </td>
    </tr>
    <tr>
      <td>
        Belum Ada Barang yang anda minati
      </td>
    </tr>
   </table>
</div>
        <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
<script type="text/javascript">
function delete_modal(paramId){

        $.confirm({
            title: '<i class="icon-h-07"></i> <?php echo $this->lang->line('delete'); ?>!',
            content: '<?php echo $this->lang->line('delete_text_product'); ?>test',
            animation: 'news',
            closeAnimation: 'news',
            buttons: {
                confirm: function () {
                   $.post( "<?php echo base_url('cart/sku_delete') ?>", { id: paramId } );
                   $("#" + paramId).hide();
                },
                cancel: function () {
                    
                },
            }
        });

}
</script>