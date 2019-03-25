    <div class="container">

<?php $this->load->view("dashboard/dashboard_tabs"); ?>
      <div class="row">
        <div class="col-sm-12 col-xl-12" style="padding: 8px">
          <div class="tt-shopcart-table">


<!-- Content -->
<div class="row">
      <div class="col-lg-3 col-xs-12">
            <div class="tt-collapse open" style="padding: 10px">
                        <div class="tt-collapse-content">
                          <a href="javascript:void(0)">
                              <img width="180px" src="<?php echo get_photo(user_id()) ?>"  class="profile-pic">
                            </a><br>             
                        </div><br>
                        <input type="file" class="btn btn-gie btn-block" id="file-upload" name="profile_picture" accept="image/*">
            </div>
      </div>
      <div class="col-lg-9 col-xs-12">

            <blockquote class="tt-blockquote" style="padding: 10px!important">
              <div class="row">
                <div class="col-11 text-left">
                    <span class="">Detail Info</span>
                </div>
                <div class="col-1 text-right">
                  <a href="<?php echo site_url("dashboard/account/edit_info") ?>" data-tooltip="Edit Detail Info">
                    <div class=""><i class="icon-01"></i></div>
                  </a>
                </div>
              </div>
            </blockquote>

            <table class="table tt-table-01">
              <tbody>
                <tr>
                  <td>Nama</td>
                  <td class="text-dark"><div class="text-info"><?php echo $user->fullname ?></div></td>
                </tr>
                <tr>
                  <td>Tanggal Lahir</td>
                  <td class="text-dark"><?php echo $user->birthday ?></td>
                </tr>
                <tr>
                  <td>Jenis Kelamin</td>
                  <td class="text-dark"><?php echo $user->gender ?></td>
                </tr>
              </tbody>
            </table>

            <blockquote class="tt-blockquote" style="padding: 10px!important">
              <div class="row">
                <div class="col-11 text-left">
                    <span class="">Detail Kontak</span>
                </div>
                <div class="col-1 text-right">
                  <a href="<?php echo site_url("dashboard/account/edit_contact") ?>" data-tooltip="Edit Detail Kontak">
                    <div class=""><i class="icon-01"></i></div>
                  </a>
                </div>
              </div>
            </blockquote>

            <table class="table tt-table-01">
              <tbody>
                <tr>
                  <td> Email</td>
                  <td class="text-dark"><?php echo $data->email ?></td>
                </tr>
                <tr>
                  <td>No HP</td>
                  <td class="text-dark"><?php echo number_hp_prefix($data->nohp) ?></td>
                </tr>
                <tr>
                  <td>Whatsapp</td>
                  <td class="text-dark"><?php echo number_hp_prefix($data->whatsapp) ?></td>
                </tr>
              </tbody>
            </table>

            <blockquote class="tt-blockquote" style="padding: 10px!important">
              <div class="row">
                <div class="col-11 text-left">
                    <span class="">Password</span>
                </div>
                <div class="col-1 text-right">
                  <a href="<?php echo site_url("dashboard/account/edit_password") ?>" data-tooltip="Edit Password">
                    <div class=""><i class="icon-01"></i></div>
                  </a>
                </div>
              </div>
            </blockquote>

            <table class="table tt-table-01">
              <tbody>
                <tr>
                  <td> Terakhir diubah</td>
                  <td class="text-dark"><?php echo ($last->input_date) ?></td>
                </tr>
              </tbody>
            </table>

      </div>
</div>
<!-- Content EOF -->
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
                   // $.post( "<?php echo base_url('dashboard') ?>", { id: paramId } );
                   $("." + paramId).hide('slow');
                },
                cancel: function () {
                    
                },
            }
        });

}
</script>