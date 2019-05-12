  <link rel="stylesheet" rel="stylesheet" media="screen" href="<?php echo base_url() ?>assets/css/croppie.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.min.js"></script>
  <style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Roboto:400,300,500,700);
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

<div id="tt-pageContent">


<div class="wrapper pt-4 pb-4">

  <blockquote class="tt-blockquote" style="margin-top: 12px;background: linear-gradient(to right bottom, #2879fe, rgb(143, 230, 236) 88%);color: #fff">
    <span class="">Jual Apa Aja di Goopiz, Bakal Jadi Jutawan</span>
  </blockquote>

<form method="post" action="<?php echo base_url('dashboard/product/save') ?>" id="form" enctype="multipart/form-data">
  <div class="material-textfield normal form-control mt-4">
    <input type="text" id="product_name" maxlength="70"name="product_name" placeholder="Judul, Nama Produk" autocomplete="off" required="true">
    <label data-content="Nama Produk"></label>
  </div>

  <div class="material-textfield normal form-control mt-1">
    <!-- <input type="text" id="product_desc" cols="1000" rows="1000" name="product_desc" placeholder="Keterangan detail produk" autocomplete="off" required="true"> -->
    <textarea id="product_desc" maxlength="70" name="product_desc"  cols="1" rows="2" style="min-width:500px; max-width:100%;min-height:30px;height:100%;width:100%;" placeholder="Judul, Nama Produk" autocomplete="off" required="true"></textarea>
    <label data-content="Deskripsi"></label>
  </div>

  <div class="normal form-control">
        <div class="img-container mb-3">
              <div class="fs-14 lh-40 font-semibold green stacked-title p-2">Gambar</div>
              <input type="hidden" name="images[]" class="file1" value="">
              <input type="hidden" name="images[]" class="file2" value="">
              <input type="hidden" name="images[]" class="file3" value="">
              <input type="hidden" name="images[]" class="file4" value="">
              <input type="hidden" name="images[]" class="file5" value="">

        <div class="form-control pt-2">
              <div class="file-wrapper">                  
                  <input class="file1 upld" type='file' name="gambar[]" style="width: 90px;height: 90px;opacity: 0;cursor:pointer;" accept='image/x-png, image/png, image/gif, image/jpeg, image/pjpeg, image/bmp, image/x-bmp'/>
                  <img class="upload file1" src=""/>
                  <span class="delete file1" style="display:none;" onclick="delete_person(1)"><i class="icon-02"></i></span>
                  <span class="edit file1" style="display:none;" onclick="modal_crop(1)" ><i class="icon-e-94"></i></span>
              </div>

              <div class="file-wrapper">
                  <input class="file2 upld" type='file' name="gambar[]" style="width: 90px;height: 90px;opacity: 0;cursor:pointer;" accept='image/jpeg,image/gif,image/png'/>
                  <img class="upload file2" src=""/>
                  <span class="delete file2" style="display:none;" onclick="delete_person(2)"><i class="icon-02"></i></span>
                  <span class="edit file2" style="display:none;" onclick="modal_crop(2)" ><i class="icon-e-94"></i></span>
              </div>

              <div class="file-wrapper">
                  <input class="file3 upld" type='file' name="gambar[]" style="width: 90px;height: 90px;opacity: 0;cursor:pointer;" accept='image/jpeg,image/gif,image/png'/>
                  <img class="upload file3" src=""/>
                  <span class="delete file3" style="display:none;" onclick="delete_person(3)"><i class="icon-02"></i></span>
                  <span class="edit file3" style="display:none;" onclick="modal_crop(3)" ><i class="icon-e-94"></i></span>
              </div>

              <div class="file-wrapper">
                  <input class="file4 upld" type='file' name="gambar[]" style="width: 90px;height: 90px;opacity: 0;cursor:pointer;" accept='image/jpeg,image/gif,image/png'/>
                  <img class="upload file4" src=""/>
                  <span class="delete file4" style="display:none;" onclick="delete_person(4)"><i class="icon-02"></i></span>
                  <span class="edit file4" style="display:none;" onclick="modal_crop(4)" ><i class="icon-e-94"></i></span>
              </div>

              <div class="file-wrapper">
                  <input class="file5 upld" type='file' name="gambar[]" style="width: 90px;height: 90px;opacity: 0;cursor:pointer;" accept='image/jpeg,image/gif,image/png'/>
                  <img class="upload file5" src=""/>
                  <span class="delete file5" style="display:none;" onclick="delete_person(5)"><i class="icon-02"></i></span>
                  <span class="edit file5" style="display:none;" onclick="modal_crop(5)" ><i class="icon-e-94"></i></span>
              </div>
        </div>

        </div>
  </div>




  <div class="normal form-control">
    <div class="image-list img-container mb-3">
      <div class="fs-14 lh-40 font-semibold green stacked-title p-2">Upload Audio/Music</div>
    <input type="file" class="form-control-file custom-file-input m-2" id="music" maxlength="70" name="music[]" placeholder="Upload Music" autocomplete="off" accept='audio/*'>
    <div class="col-lg-12" style="font-size: 8px">
    </div>
    </div>
  </div>

  <div class="normal form-control">
    <div class="image-list img-container mb-3">
      <div class="fs-14 lh-40 font-semibold green stacked-title p-2">Upload File/Dokumen</div>
    <input type="file" class="form-control-file custom-file-input m-2" id="dokumen" maxlength="70" name="dokumen[]" placeholder="Upload Dokumen" autocomplete="off" accept='application/pdf'>
    <div class="col-lg-12" style="font-size: 8px">
    </div>
    </div>
  </div>

  <div class="material-textfield normal form-control mt-1">
     <input type="text" id="url_video" maxlength="70" name="url_video" autocomplete="off" placeholder="Contoh : http://www.youtube.com/embed/...">
    <label data-content="Url Embed Youtube">Url Embed Youtube</label>
  </div>

  <input type="hidden" id="kategori_id" name="kategori_id" value="<?php echo $this->input->get('type') ?>">
  <div class="material-textfield normal form-control mt-1">
    <select  name="kategori_detail" id="kategori_detail" required">
    <option value="">-- Select --</option>
    <?php foreach($kategories as $kategori) { ?>
        <option value="<?php echo $kategori->kategori_id ?>"><?php echo $kategori->detail ?></option>
    <?php } ?>
    </select>
    <label data-content="Kategori Detail">Kategori Detail</label>
  </div>

  <div class="material-textfield normal form-control mt-1">
    <input type="number" maxlength="9" name="price" id="price" required="true" placeholder="Harga barang harus kelipatan 100" autocomplete="off">
    <label data-content="Harga">Harga</label>
  </div>

  <div class="material-textfield normal form-control mt-1">
     <input type="number" maxlength="9" name="product_stock" id="product_stock" placeholder="(Opsional) Tambahkan stock yang tersedia" autocomplete="off">
    <label data-content="Stock">Stock</label>
  </div>

  <div class="material-textfield normal form-control mt-1">
     <input type="number" maxlength="9" name="weight" id="weight" placeholder="(Opsional) Berat barang dalam satuan ( gram )" autocomplete="off">
    <label data-content="Berat">Berat</label>
  </div>

  <div class="material-textfield normal form-control">
    <button type="submit" class="btn-accent btn size-3 btn-loader btn-block"><i class="fa fa-paper-plane-o"></i> Simpan</button>
  </div>
</form>

</div>
</div>

<div  class=""> 
    <!-- The Modal -->
    <div class="modal" id="modalCrop1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal Header -->
                <!-- Modal body -->
                <div class="modal-body">
                   <div id="upload-demo"></div>
                    <button class="btn btn-block btn-border" id="crop"> 
                    Crop</button>
                </div>
            </div>
        </div>
    </div>
</div>

      <!-- The Modal -->
    <div  class=""> 
    <div class="modal" id="modalCrop2">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="false"><span class="icon icon-clear"></span></button>
                </div> -->
                <div class="modal-body">
                    <div id="upload-demo"></div>
                    <button class="btn btn-block btn-border" id="crop"> 
                    Crop</button>
                </div>
            </div>
        </div>
    </div>
    </div>

<!--     <div class="modal" id="modalDeskripsi">
    <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="false"><span class="icon icon-clear"></span></button>
                </div>
                <div class="modal-body">
                    <textarea></textarea>
                </div>
            </div>
        </div>
    </div> -->


   <div class="modal h-100 w-100" id="modalDeskripsi">
    <div class="modal-dialog modal-dialog-centered h-100 w-100 m-0">
      <div class="modal-content h-100 w-100">
   <nav class="css-nav-modal-header">
      <div class="css-modal-header">
         <div class="css-description close" data-dismiss="modal" aria-hidden="false">
            <div class="css-back">
              <div class="header-content row float-left">
            <div class="col-xs-2 col-md-2 col-lg-2 float-left">
              <i class="icon-e-30"></i>
            </div>
             
          </div>
            </div>
              <div class="header-content row">
                <div class="float-right">
                  <span id="title"> Deskripsi</span>
                </div>
            </div>
         </div>
      </div>
   </nav>
   <textarea class="css-textarea" id="css-textarea" name="description" autofocus></textarea>
      <div class="css-over">
        <button type="submit" id="btn-desc" class="btn-accent btn size-3 btn-block"><i class="fa fa-paper-plane-o"></i> Simpan</button>
      </div>
  </div>
  </div>
  </div>

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
    placeholder: '-Select Kategori-',
    minimumInputLength: 0,
});

$('#kategori_id').val(100).trigger('change')

$('#kategori_detail').select2({
    placeholder: '-Select Kategori Detail-',
    minimumInputLength: 0,
});

// $(document).ready(function(){
//     $(".example1").minimalect({ theme: "bubble", placeholder: "Select Kategori...", name : "",
//         onchange:function(param){
//             $.ajax({
//                   type: "POST",
//                   url : "<?php echo base_url() ?>dashboard/kategori_detail/" + param,
//                   success : function(data) {
//                     // jika data sukses diambil dari server, tampilkan di <select id=kota>
//                     $("#kategori_detail option").remove("");
//                     $("#kategori_detail").html(data).change();
//                     // $("#kategori_detail").val("").change();
//                   }
//             });
//         }
//     });
//     $(".example2").minimalect({ theme: "bubble", placeholder: "Select Kategori...", name : "", });
// });

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

    $('.file' + id).val('');
      // $('input[type=file].file' + id).val('');
      //$('.file' + id . '.delete').show();
      //jQuery(".upld").next('img').show();

}
}
//Ajax delete status
function delete_status(id){
  $.ajax({
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
      if (input.files && input.files[0] && input.files[0].name.match(/\.(jpg|jpeg|png|gif)$/) ) {
        $(input).next('img').attr('src', e.target.result);

        var className = $(input).attr('class').split(' ')[0];

      $('.' + className).val(e.target.result);
      }
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

// function blob2base(blob){
//  var reader = new FileReader();
//  reader.readAsDataURL(blob); 
//  reader.onloadend = function() {
//     var base64data = reader.result;                
//      return base64data;
//  }
// }



// function test(){
//   var source = cropper.getCroppedImageSrc();

//   $("img.file1").attr('src', source);
//   var url = $('img.file1').attr('src');
//   console.log(url);
//   $('#product_desc').val(url);
// }
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
            width: 310,
            height: 310
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

  $('#product_desc').bind("keypress click", function(){
    $("#css-textarea").val($("#product_desc").val());
     $("#css-textarea").focus();
    $("#modalDeskripsi").modal();
  });

    $('#btn-desc').click(function(){
      $("#modalDeskripsi").modal("hide");
      $("#product_desc").val($("#css-textarea").val());
    });
</script>