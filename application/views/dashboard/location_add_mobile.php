<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/minimalect.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/upload.css" />
<script src="<?php echo base_url() ?>/assets/js/minimalect.js?c=201305202005"></script>
<style type="text/css">
.wrapper {

}
.form-control {
  margin: 0!important;
}
.material-textfield {
  display: inline-block;
  height: 4rem;
  padding-top:30px;
}
 
.material-textfield input,.material-textfield select,.material-textfield textarea {
    width: 100%;
    height: 32px;
    color: rgba(49,53,59,0.96);
    font-size: 14px;
    font-weight: 400;
    line-height: 22px;
    background-color: transparent;
    border: none;
    border-radius: 0;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
    position: relative;
    outline: none;
    padding: 5px 0;
    margin: 0;
    /* -webkit-transition: color 280ms ease; */
    /* transition: color 280ms ease; */
}

.material-textfield input:invalid {
  box-shadow: none;
}
*:focus {
    outline: none;
}
.material-textfield label {
  display: inline-block;
  font-size: 0;
  pointer-events: none;
  position: relative;
  width: 100%;
}
.material-textfield label::before {
  content: attr(data-content);
  position: relative;
  transition: all 0.2s ease;
  will-change: font-size, top;
}
.material-textfield label::after {
  content: "";
  height: 2px;
  left: 50%;
  position: absolute;
  transition: all 0.2s ease;
  width: 0;
  will-change: width, left;
}
.material-textfield label::before, .material-textfield input[required]:focus ~ label::before {
  font-size: 14px;
  top: -3.25rem;
  color: #eee;
  font-weight: bold;
}
.material-textfield input:focus ~ label::after {
  left: 0%;
  width: 100%;
}
.material-textfield input:invalid ~ label::before {
/*  font-size: 1rem;
  top: -2rem;*/
}

.material-textfield.blue input {
  border-bottom: 1px solid #2879fe;
  color: #000;
}
.material-textfield.blue label::after {
  background: #2879fe;
}
.material-textfield.blue label::before, .material-textfield.blue input[required]:focus ~ label::before {
  color: #47c4fd;
}
.material-textfield.blue input:invalid ~ label::before {
  color: #2879fe;
}


.material-textfield.normal input,.material-textfield.normal select,.material-textfield.normal textarea  {
  border-bottom: 1px solid #eee;
  color: #000;
}
.material-textfield.normal label::after {
  background: #2879fe;
}
.material-textfield.normal label::before, .material-textfield.normal input[required]:focus ~ label::before {
  color: #000;
}
.material-textfield.normal input:invalid ~ label::before {
  color: #000;
}

.material-textfield.red input {
  border-bottom: 1px solid #F44336;
  color: #d2190b;
}
.material-textfield.red label::after {
  background: #F44336;
}
.material-textfield.red label::before, .material-textfield.red input[required]:focus ~ label::before {
  color: #f8877f;
}
.material-textfield.red input:invalid ~ label::before {
  color: #F44336;
}

.form-control {
  border: none!important;
}

.img-container {
    margin-top: 20px;
    width: 100%;
    border: 1px solid #eee;
    border-radius: 10px;
    vertical-align: middle;
    margin-left: auto;
    margin-right: auto;
  }
.stacked-title {
  color: #fff;
  font-weight: bold;
  padding-left: 10px;
    position: relative;
    bottom: 21px;
    left: 0px;
    width: 170px;
    vertical-align: middle;
    border: 1px solid #fff;
    border-radius: 8px;
    background: linear-gradient(to right bottom, #2879fe, rgb(143, 230, 236) 88%);
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
      resize: none;
    width: 100%;
    height: calc(100vh - 55px);
    padding: 16px;
    border-width: initial;
    border-style: none;
    border-color: initial;
    border-image: initial;
    outline: none;
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
</style>

<div id="content-block">
		
		<div class="container-fluid custom-container pt-2 pb-4">
			<div class="row">
				
				<div class="col-md-12 col-sm-12">

        <blockquote class="tt-blockquote" style="margin-top: 12px;background: linear-gradient(to right bottom, #2879fe, rgb(143, 230, 236) 88%);color: #fff">
        <span class="">Pastikan Alamat Anda Sesuai</span>
        </blockquote>

					<div class="row profile">
						<div class="col-md-9 col-sm-9">
				            <div class="profile-content">
							         <!-- FORM -->

<form method="post" action="<?php echo base_url('dashboard/location/save') ?>" enctype="multipart/form-data">
    <div class="material-textfield normal form-control mt-4">
      <input type="text" id="alamat_name" name="alamat_name" value="" placeholder="Alamat Rumah/Alamat Kontrakan" autocomplete="off" required="true" maxlength="30">
      <label data-content="Nama Produk"></label>
    </div>

    <div class="material-textfield normal form-control mt-4">
      <input type="text" id="penerima" name="penerima" value="" placeholder="Tulis Nama Kamu" required="true" maxlength="50">
      <label data-content="Nama Penerima"></label>
    </div>

    <div class="material-textfield normal form-control mt-4">
      <input type="number" id="no_hp" name="no_hp"  value="" placeholder="Nomor Handphone Kamu" required="true" maxlength="16">
      <label data-content="Nomor Handphone"></label>
    </div>


    <div class="material-textfield normal form-control mt-4">
          <select id="pro_kec" name="pro_kec" class="form-control" value="<?php echo $data->pro_kec; ?>" style="width: 100%;" >
      <option value=""></option>

    </select>
      <label data-content="Provinsi dan Kota"></label>
    </div>

    <div class="material-textfield normal form-control mt-4">
      <input type="number" id="kode_pos" name="kode_pos" value="" value="" required="true" maxlength="10">
      <label data-content="Kode Pos"></label>
    </div>

  <div class="form-group">
      <label for="product_desc" class="pl-2 normal" style="font-size: 14px;
    color: #eee;
    font-weight: bold;color: #000">Alamat Rumah</label>
      <label data-content=""></label>
      <textarea class="form-control" id="alamat_detail" name="alamat_detail" placeholder="Nama Jalan, Nomor Rumah RT/RW" required="true" maxlength="350"
      style="border: 01px solid #eee!important;" 
      ></textarea>
  </div>



  <button type="submit" class="btn-accent btn-small btn size-3" style="width: 120px"><i class="fa fa-paper-plane-o"></i> <?php echo $this->lang->line('send'); ?></button>
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
  function notify() {
        $.notify("Testing");
  }

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