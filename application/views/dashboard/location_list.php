  <div class="container-indent">
    <div class="container">

<?php if ( $DataAlamat->num_rows() >= 1 ) { ?> 
          <blockquote class="tt-blockquote" style="margin-top: 12px">
          <span><a href="<?php echo base_url('dashboard/location/add') ?>" class="btn btn-lg" style="margin: 10px;width: 180px"><i class="icon-f-24"> </i>Tambahkan Lokasi</a></span>
        <span class="">Pastikan Alamat Anda Benar, agar bisa menjual dan membeli barang apa aja di Goopiz</span>
        </blockquote>
      <div class="row">
<!--       <div class="col-lg-12 tt-label-our-fatured" style="border-radius: 3px;">
          PENTING!! lokasi ini digunakan sebagai lokasi anda mengirim dan menerima barang
      </div> -->
        <div class="col-sm-12 col-xl-12">
          <div class="tt-shopcart-table">
            <table class="col-sm-12 col-xl-12">
              <tbody>
                <?php foreach($DataAlamat->result() as $alamat) { ?>
                <tr class="<?php echo $alamat->alamat_id ?>" style="border-bottom: 1px solid #ddd">
                  <td width="5px" style="vertical-align: middle;">
                  </td>
                  
                  <td style="width: 70%">
                    <div class="tt-title" style="vertical-align: top!important">
                     
                     <div class="tt-product-img">
                      <div style="font-weight: bold"><?php echo xxs_filter($alamat->alamat_name) ?></div>
                      <div style="padding-bottom: 10px;font-weight: bold"><?php echo xxs_filter($alamat->penerima) ?></div>
                      <div style="padding-bottom: 10px"><?php echo xxs_filter($alamat->alamat_detail) ?>
                        <?php echo xxs_filter($alamat->province) . ", " . xxs_filter($alamat->city) ?>
                        <?php echo xxs_filter($alamat->kode_pos) ?> - 
                        <?php echo xxs_filter($alamat->no_hp) ?>
                      </div>
                    </div>

                    </div>
                    <ul class="tt-list-parameters">
                      <li>
                        <div class="detach-quantity-mobile">
                          <?php //status_order($product->order_id) ?>
                        </div>
                      </li>
                      <li>
                        <!-- Mobile -->
                        <div class="tt-price subtotal">
                          <?php if ( $alamat->type == 0 ) { ?>
                            <a href="javascript:void(0)" class="btn btn-small btn-border" style="width: 65px" onclick="set_modal('<?php echo $alamat->alamat_id ?>')" data-tooltip="Sebagai Lokasi Utama">Set Utama</a>
                          <?php } ?>
                          <a href="<?php echo base_url('dashboard/location/edit?id=' . $alamat->alamat_id) ?>" class="btn btn-small btn-border" style="width: 65px" data-tooltip="Rubah alamat ini">Edit</a>
                          <?php if ( $alamat->type == 0 ) { ?>
                            <a href="javascript:void(0)" class="btn btn-small btn-border" style="width: 65px" onclick="delete_modal('<?php echo $alamat->alamat_id ?>')" data-tooltip="Hapus alamat ini">Hapus</a>
                          <?php } ?>

                        <!--  <a href="javascript:void(0)" class="btn btn-small btn-border" style="width: 100px" onclick="set_modal('<?php echo $alamat->alamat_id ?>')"> Set Utama</a>
                         <a href="javascript:void(0)" class="btn btn-small btn-border" style="width: 100px" onclick="delete_modal('<?php //echo $rekening->rekening_id ?>', '<?php //echo $rekening->bankAccount ?>')"> Delete</a>
                         -->
                        </div>
                      </li>
                    </ul>
                  </td>
                  
                  <td style="width: auto !important;text-align: center">
                    <?php if ($alamat->type == 1){ ?>
                      <span class="tt-label-new" style="padding:4px;border-radius: 4px"> Alamat Utama </span>
                    <?php } ?>
                  </td>
                  <td>
                    <!-- Dektop -->
                    <div class="tt-price subtotal">
                      <?php if ( $alamat->type == 0 ) { ?>
                        <a href="javascript:void(0)" class="icon-f-24" onclick="set_modal('<?php echo $alamat->alamat_id ?>')" data-tooltip="Sebagai Lokasi Utama"></a>
                        <br><br>
                      <?php } ?>
                      <a href="<?php echo base_url('dashboard/location/edit?id=' . $alamat->alamat_id) ?>" class="icon-01" data-tooltip="Rubah alamat ini"> </a>
                      <?php if ( $alamat->type == 0 ) { ?>
                        <a href="javascript:void(0)" class="icon-02" onclick="delete_modal('<?php echo $alamat->alamat_id ?>')" data-tooltip="Hapus alamat ini"> </a>
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
<?php } ?>
<?php if ( $DataAlamat->num_rows() <= 0 ) { ?>          
<div>
   <table width="100%" height="100%">
    <tr>
      <td>

        <div class="tt-empty-search" style="padding: 10px!important">
          <a href="<?php echo base_url('dashboard/location/add') ?>" class="btn btn-lg" style="margin: 10px"><i class="icon-f-24"> </i>Tambahkan Lokasi</a><br>
          <img src="<?php echo base_url('assets/images/icon/Logistics10.png') ?>" width="35%">
                    <!-- <span class="tt-icon icon-f-24"></span> -->
                    <br>Set location anda dan nikmati fitur berbelanja di goopiz
        </div>
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
function set_modal(paramId){
        $.confirm({
            title: 'Set Lokasi',
            content: 'Set Lokasi ini sebagai utama kamu?',
            buttons: {
                confirm: function () {
                   $.post( "<?php echo base_url('dashboard/location/set') ?>", { id: paramId } );

                   location.reload();
                },
                cancel: function () {
                    
                },
            }
        });

}

function delete_modal(paramId){
        $.confirm({
            title: '<?php echo $this->lang->line('delete'); ?>!',
            content: 'Lokasi ini akan dihapus dari daftar ?',
            buttons: {
                confirm: function () {
                   $.post( "<?php echo base_url('dashboard/location/delete') ?>", { id: paramId } );
                   $("." + paramId).hide('slow');
                },
                cancel: function () {
                    
                },
            }
        });

}
</script>