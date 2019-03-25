<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

   <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/minimalect.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/upload.css" />
    
    <script src="<?php echo base_url() ?>/assets/js/minimalect.js?c=201305202005"></script>
    <style type="text/css">
	/***
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
***/

body {
  /*background: #F1F3FA;*/
}

/* Profile container */
.profile {
  margin: 20px 0;
}

/* Profile sidebar */
.profile-sidebar {
  padding: 0px 0 10px 0;
  background: #fff;
}

.profile-userpic img {
  float: none;
  margin: 0 auto;
  width: 50%;
  height: 50%;
  -webkit-border-radius: 50% !important;
  -moz-border-radius: 50% !important;
  border-radius: 30% !important;
}

.profile-usertitle {
  text-align: center;
  margin-top: 20px;
}

.profile-usertitle-name {
  color: #5a7391;
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 7px;
}

.profile-usertitle-job {
  text-transform: uppercase;
  color: #5b9bd1;
  font-size: 12px;
  font-weight: 600;
  margin-bottom: 15px;
}

.profile-userbuttons {
  text-align: center;
  margin-top: 10px;
}

.profile-userbuttons .btn {
  text-transform: uppercase;
  font-size: 11px;
  font-weight: 600;
  padding: 6px 15px;
  margin-right: 5px;
}

.profile-userbuttons .btn:last-child {
  margin-right: 0px;
}
    
.profile-usermenu {
  margin-top: 30px;
}

.profile-usermenu ul li {
  border-bottom: 1px solid #f0f4f7;
}

.profile-usermenu ul li:last-child {
  border-bottom: none;
}

.profile-usermenu ul li a {
  color: #93a3b5;
  font-size: 14px;
  font-weight: 400;
}

.profile-usermenu ul li a i {
  margin-right: 8px;
  font-size: 14px;
}

.profile-usermenu ul li a:hover {
  background-color: #fafcfd;
  color: #5b9bd1;
}

.profile-usermenu ul li.active {
  border-bottom: none;
}

.profile-usermenu ul li.active a {
  color: #007bff;
  background-color: #f6f9fb;
  border-left: 2px solid #007bff;
  margin-left: -2px;
}

/* Profile Content */
.profile-content {
  background: #fff;
  min-height: 460px;
}
</style>

<div id="content-block">
		
		<div class="container-fluid custom-container">
			<div class="row">
				
				<div class="col-md-12 col-sm-12">

					<div class="row profile">
						<div class="col-md-9 col-sm-9">
				            <div class="profile-content">
							         <!-- FORM -->


<form method="post" action="<?php echo base_url('dashboard/location/update') ?>" enctype="multipart/form-data">
  <div class="form-group">
    <label for="alamat_name">Nama</label>
    <input type="hidden" name="alamat_id" value="<?php echo $data->alamat_id ?>">
    <input type="hidden" name="link_ref" value="<?php echo @link_ref()?>">
    <input type="text" class="form-control" id="alamat_name" name="alamat_name" value="<?php echo $data->alamat_name; ?>" placeholder="Alamat Rumah/Alamat Kontrakan" autocomplete="off" required="true" maxlength="30">
  </div>

<div class="row">
  <div class="col-lg-5">
    <label>Nama Penerima</label>
    <div class="input-group">
      <input type="text" id="penerima" name="penerima" class="form-control" value="<?php echo $data->penerima; ?>" placeholder="Tulis Nama Kamu" required="true" maxlength="50">
    </div>
  </div>
  <div class="col-lg-3">
    <label>Nomor Handphone</label>
    <div class="input-group">
      <input type="number" id="no_hp" name="no_hp" class="form-control" value="<?php echo $data->no_hp; ?>" required="true" maxlength="16">
    </div>
  </div>
</div>


<br>
<div class="row">
  <div class="col-lg-8">
    <label>Provinsi dan Kota</label>
    <div class="input-group">
		<select id="pro_kec" name="pro_kec" class="form-control" value="<?php echo $data->pro_kec; ?>" style="width:300px" >
      <option value="<?php echo $data->pro_kec ?>"><?php echo is_cityName($data->pro_kec) ?></option>

    </select>
		</select>
    </div>
  </div>

  <div class="col-lg-3">
    <label>Kode Pos</label>
    <div class="input-group">
      <input type="number" id="kode_pos" name="kode_pos" value="<?php echo $data->kode_pos; ?>"class="form-control" value="" required="true" maxlength="10">
    </div>
  </div>
</div>

<div class="form-group">
		<label for="product_desc">Alamat Rumah</label>
		<textarea class="form-control" id="alamat_detail" name="alamat_detail" placeholder="Nama Jalan, Nomor Rumah RT/RW" required="true" maxlength="350"><?php echo $data->alamat_detail; ?></textarea>
</div>



  <button type="submit" class="btn-accent btn-small btn size-3" style="width: 120px"><i class="fa fa-paper-plane-o"></i> <?php echo $this->lang->line('edit'); ?></button>
  <a href="<?php echo site_url('dashboard/location_list') ?>" class="btn btn-small btn-border" style="margin: 10px;width: 120px"> <?php echo $this->lang->line('back'); ?></a>
</form>
                       <!-- FORM END -->
				            </div>
						</div>
					</div>


				</div>
			</div>
		</div>
	</div>


<script>
$(document).ready(function(){
    $(".example1").minimalect({ theme: "bubble", placeholder: "Select Kategori...", name : "",
        onfilter :function(param){

            $.ajax({
                  url : "<?php echo base_url() ?>dashboard/lokasi_detail/" + param,
                  success : function(data) {
                    $("#pro_kec option").remove("");
                    $("#pro_kec").html(data).change();
                    alert(data);
                    // $("#kategori_detail").val("").change();
                  }
            });
        }
    });
    $(".example2").minimalect({ theme: "bubble", placeholder: "Select Kategori...", name : "", });
});

function delete_person(id)
{
$(this).hide();
if(confirm('Are you sure delete this data?'))
{
// ajax delete data to database
//$(this).attr('src', '');
    $('.file' + id).show();
    $('img.file' + id).attr('src', '');
    $('span.file' + id).hide();
        
      $('input[type=file].file' + id).val('');
      //$('.file' + id . '.delete').show();
      //jQuery(".upld").next('img').show();
    

}
}
//Ajax delete status
function delete_status(id){
  $.ajax({
    type: "POST",
    url: "<?php echo base_url('home/status_delete') ?>",
    data: {id:id},
    success:
    function(data){
      if (data.msg == 'true'){
        $('#status_' + id).hide('fadeOut');
      } else {
        alert(data.msg);
      }
    }
  });
}

    </script>
<script type="text/javascript">
$( document ).ready(function() {
  jQuery('.upload').hide();
});
function readURL(input) {
if (input.files && input.files[0]) {
var reader = new FileReader();
reader.onload = function (e) {
      if (input.files && input.files[0] && input.files[0].name.match(/\.(jpg|jpeg|png|gif)$/) )
        $(input).next('img').attr('src', e.target.result);
      
      if (input.files && input.files[0] && input.files[0].name.match(/\.(mp3)$/) )
        $(input).next('img').attr('src', './assets/img/format/music.png');
      
      if (input.files && input.files[0] && input.files[0].name.match(/\.(avi|mp4)$/) )
        $(input).next('img').attr('src', './assets/img/format/video.png');
}
reader.readAsDataURL(input.files[0]);
}
}
$(".upld").change(function () {
readURL(this);
  
  
  jQuery(this).next('img').next('span.delete').show();
  jQuery(this).next('img').show();
  jQuery(this).hide();
});
</script>


<script type="text/javascript">
    $('#pro_kec').select2({
        placeholder: '-Select Kota-',
        minimumInputLength: 1,
        ajax: {
            url: "<?php echo base_url();?>/dashboard/getlokasi",
            dataType: 'json',
            delay: 250,
            processResults: function (data) {
                return {
                    results: data,
                    value: data.id
                };
            },
            cache: true
        }
    });
</script>