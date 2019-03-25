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
                       <form method="post" action="<?php echo base_url('dashboard/product/update') ?>" enctype="multipart/form-data">
  <div class="form-group">
    <label for="product_name">Nama Produk</label>
    <input type="hidden" name="product_id" value="<?php echo xxs_filter($product->product_id) ?>">
    <input type="text" class="form-control" id="product_name" maxlength="70" name="product_name" value="<?php echo xxs_filter($product->product_name) ?>" placeholder="Masukan Nama Produk..." autocomplete="off" required="true">
  </div>
  <div class="form-group">
    <label for="product_desc">Deskripsi Produk</label>
    <textarea class="form-control" id="product_desc" maxlength="1000" name="product_desc" placeholder="Tambahkan Keterangan yang di publish..." required="true"><?php echo xxs_filter($product->product_desc) ?></textarea>
  </div>

<!-- <?php foreach ($productImages->result() as $key => $productImage) { ?>
<?php $image = "data:image/png;base64," . base64_encode(addslashes (file_get_contents($productImage->file_url))); ?>
<input type="text" name="images[]" class="file1" value="<?php //echo $image ?>">
<img src="<?php echo $image ?>" />
<?php } ?> -->


  <div class="form-group">
    <label for="exampleInputFile">Gambar</label><br>

        <?php foreach ( $productImages->result() as $gambar ) { ?>

        <input type="hidden" name="images[]" class="file<?php echo $gambar->file_id ?>" value="<?php echo ImgToBlob($gambar->file_url) ?>">
        <div class="file-wrapper" id="gambar<?php echo $gambar->file_id ?>">
          <img class="file<?php echo $gambar->file_id ?>" src="<?php echo base_url() . $gambar->file_url ?>" style="width: 90px;height: 90px;cursor:pointer;">
          <span class="delete file<?php echo $gambar->file_id ?>" onclick="delete_person(<?php echo $gambar->file_id ?>)">&times;</span>
          <span class="edit file<?php echo $gambar->file_id ?>" onclick="modal_crop(<?php echo $gambar->file_id ?>)" ><i class="icon-e-94"></i></span>
        </div>

        <?php } ?>
        <?php for ( $i = $productImages->num_rows(); $i <= 4; $i++ ) { ?>
        <input type="hidden" name="images[]" class="file<?php echo $i ?>" value="">
        <div class="file-wrapper" id="gambar<?php echo $i ?>">
          <input class="file<?php echo $i ?> upld" type='file' name="gambar[]" style="width: 90px;height: 90px;opacity: 0;cursor:pointer;" accept='image/jpeg,image/gif,image/png'/>
          <img class="upload file<?php echo $i ?>" src="" alt="your image"/>
          <span class="delete file<?php echo $i ?>" style="display:none;" onclick="delete_person(<?php echo $i ?>)">&times;</span>
          <span class="edit file<?php echo $i ?>" style="display:none;" onclick="modal_crop(<?php echo $i ?>)" ><i class="icon-e-94"></i></span>
        </div>
        <?php } ?>
    <p class="help-block">Minimal Size 300px x 300px</p>
  </div>

  <div class="form-group">
    <label for="music">Upload Audio/Music</label>
    <input type="file" class="form-control-file custom-file-input" id="music" maxlength="70" name="music[]" placeholder="Upload Music" autocomplete="off">
    <div class="col-lg-12" style="font-size: 8px">
    </div>
  </div>

  <div class="form-group">
    <label for="url_video">Url Embed Youtube</label>
    <input type="text" class="form-control" id="url_video" value="<?php echo xxs_filter($product->url_video) ?>" maxlength="70" name="url_video" placeholder="http://www.youtube.com/embed..." autocomplete="off">
    <div class="col-lg-12" style="font-size: 8px">
    URL Youtube, Contoh : http://www.youtube.com/embed/GhyKqj_P2E4
    </div>
  </div>

  <div class="form-group">
    <label for="exampleInputFile">Kategori Produk</label>
    <select  name="kategori_id" id="kategori_id" class="form-control" required">
    <option value="<?php echo $product->kategori_id ?>"><?php echo $product->detail ?></option>
    <?php foreach($data as $kategori) { ?>
        <option value="<?php echo $kategori->kategori_id ?>"><?php echo getKategori($kategori->kategori_id) ?></option>
    <?php } ?>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleInputFile">Kategori Detail</label>
    <select name="kategori_detail" id="kategori_detail" class="form-control" required">
      <option value="<?php echo $product->kategori_detail ?>"><?php echo getKategori($product->kategori_detail) ?></option>
        <option value="">-- Select --</option>
    </select>
  </div>



<label for="price">Harga</label>
<div class="row">
  <div class="col-lg-5">
    <div class="input-group mb-4">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">Rp</span>
        </div>
        <input type="number" value="<?php echo xxs_filter($product->price) ?>" class="form-control" maxlength="9" name="price" id="price" placeholder="Harga" aria-label="Harga" aria-describedby="basic-addon1" required="true">
    </div>
  </div>
  <div class="col-lg-4">
    Harga barang harus kelipatan 100.
  </div><!-- /.col-lg-6 -->
</div>

<label for="price">Stock</label>
<div class="row">
  <div class="col-lg-5">
    <div class="input-group mb-4">
        <input type="number" value="<?php echo xxs_filter($product->product_stock) ?>" class="form-control" maxlength="9" name="product_stock" id="product_stock" placeholder="Stock" aria-label="product_stock" aria-describedby="basic-addon1" autocomplete="off">
    </div>
  </div>
  <div class="col-lg-5">
    (Opsional) Tambahkan stock yang tersedia
  </div><!-- /.col-lg-6 -->
</div>

<label for="weight" style="padding-top: 10px">Perkiraan Berat</label>
<div class="row" style="padding-bottom: 10px">
  <div class="col-lg-5">
    <div class="input-group mb-4">
        <input type="number" value="<?php echo xxs_filter($product->weight) ?>" class="form-control" id="weight" maxlength="10" name="weight" placeholder="0" aria-label="0" aria-describedby="basic-addon1" required="true">
          <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">Gram</span>
        </div>
    </div>
  </div><!-- /.col-lg-6 -->
  <div class="col-lg-5">
    Berat barang diperlukan untuk estimasi ongkos kirim.
  </div><!-- /.col-lg-6 -->
</div>

<button type="submit" class="btn-accent btn size-3 btn-loader"><i class="fa fa-paper-plane-o"></i> Submit</button>
</form>
                       <!-- FORM END -->
				            </div>
						</div>
					</div>


				</div>
			</div>
		</div>
	</div>


<script type="text/javascript" >
   function delete_person(id)
    {
      if(confirm('Are you sure delete this data?'))
      {
        // ajax delete data to database
          $.ajax({
            url : "<?php echo base_url('dashboard/delete_gambar')?>/"+id,
            type: "POST",
            dataType: "JSON",
            cache: false,
            success: function(data)
            {
              $('.file' + id).val('');
              jQuery(this).next('img').show();
              $('file' + id).hide();
        //jQuery(this).next('.delete').hide();
         //$('#gambar' + id).replaceWith('');
         $('#gambar' + id).replaceWith("<div class='file-wrapper' id='gambar" + id + "'><input class='file" + id + " upld' type='file'  name='gambar[]' style='width: 90px;height: 90px;opacity: 0;cursor:pointer;'/><img class='upload' src='' alt='your image'/><span class='delete file" + id + "' style='display:none;' onclick='delete_person(" + id + ")'>&times;</span></div>");
          $(".upld").change(function () {
          readURL(this);
          
          jQuery(this).next('img').show();
          jQuery(this).next('img').next('span.delete').next('span.edit').show();
          jQuery(this).next('img').next('span.file' + id).show();
          jQuery(this).hide();
          
          
          
        });
          },
            error: function (jqXHR, textStatus, errorThrown)
            {
                      $('.file' + id).show();
                      $('img.file' + id).attr('src', '');
                      $('span.file' + id).hide();

                      $('.file' + id).val('');
            }
        });
         
      }
    }
</script>
<script type="text/javascript">
    var $uploadCrop;
    var $fileId;
$( document ).ready(function() {


    // function readFile(input) {
    //     if (input.files && input.files[0]) {
    //         var reader = new FileReader();          
    //         reader.onload = function (e) {
    //             $uploadCrop.croppie('bind', {
    //                 url: e.target.result
    //             });
    //             $('.upload-demo').addClass('ready');
    //         }           
    //         reader.readAsDataURL(input.files[0]);
    //     }
    // }

    $uploadCrop = $('#upload-demo').croppie({
        viewport: {
            width: 300,
            height: 300,
        },
        boundary: {
            width: 350,
            height: 350
        }
    });

    //$('#upload').on('change', function () { readFile(this); });

    $('#crop').on('click', function (ev) {
        $uploadCrop.croppie('result', {
            type: 'canvas',
            size: 'original'
        }).then(function (resp) {
            $("#modalCrop1").modal("hide");

            $('.file' + $fileId).val(resp);
            // $('img.file' + $fileId).attr('src', resp);
            //$('#form').submit();
            
        });
      return false;
    });

});

function submit(){
  $('#form').submit();
}

function modal_crop(id){
  $fileId = '';
  $fileId = id;
    $('#upload-demo').attr('src' , '');
  var images = $('img.file' + id).attr('src');

   $uploadCrop.croppie('bind', {
      url: images
  });

  // $('#upload-demo').attr('src' , images);
  // cropper.showImage(images); 
  $("#modalCrop1").modal();


  //$('.upload-demo').addClass('ready');
}
</script>
<script>
 $("#kategori_id").change(function(e) {
    var param = $('#kategori_id').val();

    $.ajax({
        type: "POST",
        url: "<?php echo base_url();?>/dashboard/kategori_detail",
        data: {id:param},
        cache: false,
        success: function(data){
            $('#kategori_detail').html(data);
        }
    });

  });

$('#kategori_id').select2({
    placeholder: '- Select Kategori -',
    minimumInputLength: 0,
});

$('#kategori_detail').select2({
    placeholder: '- Select Kategori Detail -',
    minimumInputLength: 0,
  });


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

      var className = $(input).attr('class').split(' ')[0];
      $('.' + className).val(e.target.result);
      
      // if (input.files && input.files[0] && input.files[0].name.match(/\.(mp3)$/) )
      //   $(input).next('img').attr('src', './assets/img/format/music.png');
      
      // if (input.files && input.files[0] && input.files[0].name.match(/\.(avi|mp4)$/) )
      //   $(input).next('img').attr('src', './assets/img/format/video.png');
}
reader.readAsDataURL(input.files[0]);
}
}
$(".upld").change(function () {
readURL(this);
  
  
  jQuery(this).next('img').next('span.delete').show();
  jQuery(this).next('img').next('span.delete').next('span.edit').show();
  jQuery(this).next('img').show();
  jQuery(this).hide();
});
</script>


    <!-- The Modal -->
    <div class="modal" id="modalCrop1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="false"><span class="icon icon-clear"></span></button>
                </div>
                <div class="modal-body">
                    <div id="upload-demo"" style="display: block !important;z-index: 9999"></div>
                    <button class="btn btn-block btn-border" id="crop"> 
                    Crop</button>
                </div>
            </div>
        </div>
    </div>