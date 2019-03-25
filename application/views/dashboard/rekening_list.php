  <div class="container-indent">
    <div class="container">

<?php $this->load->view("dashboard/dashboard_tabs"); ?>

      <div class="row">
        <div class="col-sm-12 col-xl-12">
          <div class="tt-shopcart-table">
<?php if ( $DataRekening->num_rows() >= 1 ) { ?> 
        <blockquote class="tt-blockquote" style="margin-top: 12px">
          <span><a href="<?php echo base_url('dashboard/rekening/add') ?>" class="btn btn-lg" style="margin: 10px;width: 180px"><i class="icon-f-49"> </i>Tambahkan Rekening</a></span>
        <span class="">Pastikan Nomor Rekening & Nama Pemilik Rekening benar, agar proses pencarian dana masuk ke rekening Anda.</span>
        </blockquote>

            <table>
              <tbody>
                <?php foreach($DataRekening->result() as $rekening) { ?>
                <tr class="<?php echo $rekening->rekening_id ?>">
                  <td>
                  <?php if ($rekening->rekening_id == 1){ ?>
                    <a href="javascript:void(0)" onclick="delete_modal('<?php echo $rekening->rekening_id ?>')" class="tt-btn-close"></a>
                  <?php } ?>
                  </td>
                  <td style="width: 70%">
                    <div class="tt-title" style="vertical-align: top!important">
                      <p style="color:grey"><?php echo $rekening->bankName; ?></p>
                      <b>
                      <?php echo $rekening->bankAccount ?><br><?php echo $rekening->beneficiary ?>
                      </b>
                    </div>
                    <ul class="tt-list-parameters">
                      <li>
                        <div class="detach-quantity-mobile">
                          <?php //status_order($product->order_id) ?>
                        </div>
                      </li>
                      <li>
                        <div class="tt-price subtotal">

                        <?php if ( $rekening->type == 0 ) { ?>
                          <a href="javascript:void(0)" class="btn btn-small btn-border" style="width: 65px" onclick="set_modal('<?php echo $rekening->rekening_id ?>')" data-tooltip="Sebagai Rekening Utama">Set Utama</a>
                        <?php } ?>
                        <a href="<?php echo base_url('dashboard/rekening/edit?id=' . $rekening->rekening_id) ?>" class="btn btn-small btn-border" style="width: 65px" data-tooltip="Rubah Rekening ini"> Edit</a>
                        <?php if ( $rekening->type == 0 ) { ?>
                          <a href="javascript:void(0)" class="btn btn-small btn-border" style="width: 65px" onclick="delete_modal('<?php echo $rekening->rekening_id ?>', '<?php echo $rekening->bankAccount ?>')" data-tooltip="Hapus Rekening ini"> Delete</a>
                        <?php } ?>
                         <!-- <a href="javascript:void(0)" class="btn btn-small btn-border" style="width: 100px" onclick=""> Set Utama</a>
                         <a href="javascript:void(0)" class="btn btn-small btn-border" style="width: 100px" onclick="delete_modal('<?php echo $rekening->rekening_id ?>', '<?php echo $rekening->bankAccount ?>')"> Delete</a>
                         -->
                        </div>
                      </li>
                    </ul>
                  </td>
                  
                  <td style="width: auto !important;text-align: center">
                    <?php if ($rekening->type == 1){ ?>
                      <span class="tt-label-new"> Rekening Utama </span>
                    <?php } ?>
                  </td>
                  <td>
                    <div class="tt-price subtotal">
                      <?php if ( $rekening->type == 0 ) { ?>
                        <a href="javascript:void(0)" class="icon-f-49" onclick="set_modal('<?php echo $rekening->rekening_id ?>')" data-tooltip="Sebagai Rekening Utama"></a>
                        <br><br>
                      <?php } ?>
                      <a href="<?php echo base_url('dashboard/rekening/edit?id=' . $rekening->rekening_id) ?>" class="icon-01" data-tooltip="Rubah Rekening ini"> </a>
                      <?php if ( $rekening->type == 0 ) { ?>
                        <a href="javascript:void(0)" class="icon-02" onclick="delete_modal('<?php echo $rekening->rekening_id ?>', '<?php echo $rekening->bankAccount ?>')" data-tooltip="Hapus Rekening ini"> </a>
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
<?php if ( $DataRekening->num_rows() <= 0 ) { ?>        
<div>
   <table width="100%" height="100%">
    <tr>
      <td>

        <div class="tt-empty-search" style="padding: 10px!important">
          <a href="<?php echo base_url('dashboard/rekening/add') ?>" class="btn btn-lg" style="margin: 10px"><i class="icon-f-49"> </i>Tambahkan Rekening</a><br>
          <img src="<?php echo base_url('assets/images/icon/Logistics7.png') ?>" width="35%">
                    <!-- <span class="tt-icon icon-f-24"></span> -->
                    <br>Tambahkan rekening bank untuk mempermudah proses pencairan dana
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
                   $.post( "<?php echo base_url('dashboard/rekening/set') ?>", { id: paramId } );
                   // $("." + paramId).hide('slow');

                   location.reload();
                },
                cancel: function () {
                    
                },
            }
        });

}

function delete_modal(paramId, bankAccount){
        $.confirm({
            title: '<?php echo $this->lang->line('delete'); ?>!',
            content: 'Nomor Rekening <b>' + bankAccount + '</b> akan dihapus ?',
            buttons: {
                confirm: function () {
                   $.post( "<?php echo base_url('dashboard/rekening/delete') ?>", { id: paramId } );
                   $("." + paramId).hide('slow');
                },
                cancel: function () {
                    
                },
            }
        });

}
</script>