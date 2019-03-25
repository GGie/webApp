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
                    <a href="<?php echo base_url('dashboard/product/edit?id=' . $product->product_id) ?>" class="icon-01" ></a>
                    <a href="javascript:void(0)" class="tt-btn-close" onclick="delete_modal('<?php echo $product->product_id ?>')"></a>
                  </td>
                  <td>
                    <div class="tt-product-img">
                      <img src="<?php echo base_url('assets') ?>/images/loader.svg" data-src="<?php echo getProductPhoto($product->product_id) ?>" alt="">
                    </div>
                  </td>
                  <td style="vertical-align: top">
                    <div class="tt-title">
                      <b style="color:#2879fe !important" ="tt-white-color"><a href="<?php echo base_url('p/product/' . $product->product_id . '-' . replace_url_char($product->product_name)) ?>"><?php echo $product->product_name ?></a></b><br>
                       Harga : Rp. <?php echo @number_format(@$product->price,0,',','.'); ?><br>
                       Stock : Rp. <?php echo ($product->product_stock) ?>
                    </div>
                    <ul class="tt-list-parameters">
                      <li>
                        <div class="detach-quantity-mobile"></div>
                      </li>
                      <li>
                        <div class="tt-price subtotal">
                         Rp. <?php echo @number_format(@$product->price,0,',','.'); ?>
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
                      Rp. <?php echo @number_format(@$product->price,0,',','.'); ?>
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
        Belum Ada Barang untuk di jual
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