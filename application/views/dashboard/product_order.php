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
                    <a href="<?php echo base_url('p/product/' . $product->product_id . '-' . replace_url_char($product->product_name)) ?>" target="blank" class="icon-e-95" data-tooltip="Lihat Lebih Detail"></a><br><br>
                  </td>
                  <td>
                    <div class="tt-product-img">
                      <img src="<?php echo base_url('assets') ?>/images/loader.svg" data-src="<?php echo getProductPhoto($product->product_id) ?>" alt="">
                    </div>
                  </td>
                  <td>
                    <div class="tt-title" style="vertical-align: top">
                      <p style="color:grey">INVOICE : <?php echo $product->invoice_id; ?></p>
                      <b style="color:#2879fe !important" ="tt-white-color"><a href="<?php echo base_url('p/product/' . $product->product_id . '-' . replace_url_char($product->product_name)) ?>"><?php echo $product->product_name ?></a></b><br>
                      Rp. <?php echo @number_format(@$product->price,0,',','.'); ?>
                    </div>
                    <ul class="tt-list-parameters">
                      <li>
                        <div class="detach-quantity-mobile">
                          <?php status_order($product->order_id) ?>
                        </div>
                      </li>
                      <li>
                        <div class="tt-price subtotal">
                            <?php if ($product->status_order_id == 2 AND $product->is_order == 99) { ?>
                              <a href="<?php echo base_url('dashboard/order/is_order/' . $product->order_id) ?>/1" class="btn btn-border" style="width: 100px"><i class="icon-h-13"></i>Terima</a><div style="margin: 6px"></div>
                              <a href="<?php echo base_url('dashboard/order/is_order/' . $product->order_id) ?>/0" class="btn btn-border" style="width: 100px;color:green"><i class="icon-h-08"></i>Tolak</a>
                            <?php } elseif ($product->status_order_id == 3 AND $product->no_resi == "") { ?>
                              <a href="<?php echo base_url('dashboard/order/resi/' . $product->order_id) ?>" class="btn btn-border" style="width: 120px;"><i class="icon-g-95"></i>Input Resi</a>
                            <?php } ?>
                        </div>
                      </li>
                    </ul>
                  </td>
                  <td>
                    <td style="width: auto !important">
                    <?php status_order($product->order_id) ?>
                  </td>
                  </td>
                  <td>
                    <div class="tt-price subtotal">
                      <?php if ($product->status_order_id == 2 AND $product->is_order == 99) { ?>
                        <a href="<?php echo base_url('dashboard/order/is_order/' . $product->order_id) ?>/1" class="btn btn-border" style="width: 100px"><i class="icon-h-13"></i>Terima</a><div style="margin: 6px"></div>
                        <a href="<?php echo base_url('dashboard/order/is_order/' . $product->order_id) ?>/0" class="btn btn-border" style="width: 100px;color:green"><i class="icon-h-08"></i>Tolak</a>
                      <?php } elseif ($product->status_order_id == 3 AND $product->no_resi == "") { ?>
                        <a href="<?php echo base_url('dashboard/order/resi/' . $product->order_id) ?>" class="btn btn-border" style="width: 120px;"><i class="icon-g-95"></i>Input Resi</a>
                      <?php } ?>
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
  <a href="<?php echo base_url('dashboard/product/add') ?>" class="btn btn-small" style="margin: 10px"><i class="icon-f-39"></i>Jual Produk</a>

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
        Belum Ada Pesanan
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
            title: '<?php echo $this->lang->line('delete'); ?>!',
            content: '<?php echo $this->lang->line('delete_text_product'); ?>',
            buttons: {
                confirm: function () {
                   $.post( "<?php echo base_url('dashboard/product/delete') ?>", { id: paramId } );
                   $("." + paramId).hide('slow');
                },
                cancel: function () {
                    
                },
            }
        });

}
</script>