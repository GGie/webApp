<link href="<?php echo base_url() ?>/assets/css/select2.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>

  <link rel="stylesheet" rel="stylesheet" media="screen" href="<?php echo base_url() ?>assets/css/croppie.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.min.js"></script>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">

<script src="<?php echo base_url('assets/js/flickity.pkgd.js') ?>"></script>
<style type="text/css">

.card {                 /* Set width of cards */
  border: 1px solid #2879fe;    /* Set up Border */
  margin-top: 10px;
  border-radius: 4px;           /* Slightly Curve edges */
  overflow: hidden;             /* Fixes the corners */
  display: flex;                /* Children use Flexbox */
  flex-direction: column;       /* Rotate Axis */
}

.card-header {
  color: #fff;
  text-align: center;
  font-size: 12px;
  font-weight: 600;
  border-bottom: 1px solid #2879fa;
  background-color: #2879fa;
  padding: 5px 10px;
}
.card-main {
    background-color: #fff;
  display: flex;              /* Children use Flexbox */
  flex-direction: column;     /* Rotate Axis to Vertical */
  justify-content: center;    /* Group Children in Center */
  align-items: center;        /* Group Children in Center (+axis) */
  padding: 15px 0;            /* Add padding to the top/bottom */
}   
* {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
.gallery {
/*  background: #EEE;*/
  position: relative;
}

.gallery-cell {
  width: 80%;
  /*height: 200px;*/
  margin-left: 5px;
  background: #8C8;
  border-radius: 6px;
  counter-increment: gallery-cell;
}
.gallery-cell:before {
  display: block;
  text-align: center;
  margin-left: -20px!important;
  content: counter(gallery-cell);
  line-height: 200px;
  font-size: 80px;
  color: white;
}
.flickity-viewport{
    margin-left: 0px !important;
}
.flickity-page-dots{
    display: none;
}
.flickity-prev-next-button{
    display: none;
}
</style>
<style type="text/css">
  .nav{padding:8px;display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;padding-left:0;margin-bottom:0;list-style:none}.nav-link{display:block;padding:.5rem 1rem}.nav-link:focus,.nav-link:hover{text-decoration:none}.nav-link.disabled{color:#6c757d}.nav-tabs{border-bottom:1px solid #dee2e6}.nav-tabs .nav-item{margin-bottom:-1px}.nav-tabs .nav-link{border:1px solid transparent;border-top-left-radius:.25rem;border-top-right-radius:.25rem}.nav-tabs .nav-link:focus,.nav-tabs .nav-link:hover{border-color:#e9ecef #e9ecef #dee2e6}.nav-tabs .nav-link.disabled{color:#6c757d;background-color:transparent;border-color:transparent}.nav-tabs .nav-item.show .nav-link,.nav-tabs .nav-link.active{color:#495057;background-color:#fff;border-color:#dee2e6 #dee2e6 #fff}.nav-tabs .dropdown-menu{margin-top:-1px;border-top-left-radius:0;border-top-right-radius:0}.nav-pills .nav-link{border-radius:.25rem}.nav-pills .nav-link.active,.nav-pills .show>.nav-link{color:#fff;background-color:#007bff}.nav-fill .nav-item{-webkit-box-flex:1;-ms-flex:1 1 auto;flex:1 1 auto;text-align:center}.nav-justified .nav-item{-ms-flex-preferred-size:0;flex-basis:0;-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;text-align:center}.tab-content>.tab-pane{display:none}.tab-content>.active{display:block}.navbar{position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;padding:.5rem 1rem}.navbar>.container,.navbar>.container-fluid{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}.navbar-brand{display:inline-block;padding-top:.3125rem;padding-bottom:.3125rem;margin-right:1rem;font-size:1.25rem;line-height:inherit;white-space:nowrap}.navbar-brand:focus,.navbar-brand:hover{text-decoration:none}.navbar-nav{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;padding-left:0;margin-bottom:0;list-style:none}.navbar-nav .nav-link{padding-right:0;padding-left:0}.navbar-nav .dropdown-menu{position:static;float:none}.navbar-text{display:inline-block;padding-top:.5rem;padding-bottom:.5rem}.navbar-collapse{-ms-flex-preferred-size:100%;flex-basis:100%;-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.navbar-toggler{padding:.25rem .75rem;font-size:1.25rem;line-height:1;background-color:transparent;border:1px solid transparent;border-radius:.25rem}.navbar-toggler:focus,.navbar-toggler:hover{text-decoration:none}.navbar-toggler:not(:disabled):not(.disabled){cursor:pointer}.navbar-toggler-icon{display:inline-block;width:1.5em;height:1.5em;vertical-align:middle;content:"";background:no-repeat center center;background-size:100% 100%}@media (max-width:575.98px){.navbar-expand-sm>.container,.navbar-expand-sm>.container-fluid{padding-right:0;padding-left:0}}@media (min-width:576px){.navbar-expand-sm{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-flow:row nowrap;flex-flow:row nowrap;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start}.navbar-expand-sm .navbar-nav{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row}.navbar-expand-sm .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-sm .navbar-nav .dropdown-menu-right{right:0;left:auto}.navbar-expand-sm .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-sm>.container,.navbar-expand-sm>.container-fluid{-ms-flex-wrap:nowrap;flex-wrap:nowrap}.navbar-expand-sm .navbar-collapse{display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important;-ms-flex-preferred-size:auto;flex-basis:auto}.navbar-expand-sm .navbar-toggler{display:none}.navbar-expand-sm .dropup .dropdown-menu{top:auto;bottom:100%}}@media (max-width:767.98px){.navbar-expand-md>.container,.navbar-expand-md>.container-fluid{padding-right:0;padding-left:0}}@media (min-width:768px){.navbar-expand-md{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-flow:row nowrap;flex-flow:row nowrap;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start}.navbar-expand-md .navbar-nav{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row}.navbar-expand-md .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-md .navbar-nav .dropdown-menu-right{right:0;left:auto}.navbar-expand-md .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-md>.container,.navbar-expand-md>.container-fluid{-ms-flex-wrap:nowrap;flex-wrap:nowrap}.navbar-expand-md .navbar-collapse{display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important;-ms-flex-preferred-size:auto;flex-basis:auto}.navbar-expand-md .navbar-toggler{display:none}.navbar-expand-md .dropup .dropdown-menu{top:auto;bottom:100%}}@media (max-width:991.98px){.navbar-expand-lg>.container,.navbar-expand-lg>.container-fluid{padding-right:0;padding-left:0}}@media (min-width:992px){.navbar-expand-lg{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-flow:row nowrap;flex-flow:row nowrap;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start}.navbar-expand-lg .navbar-nav{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row}.navbar-expand-lg .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-lg .navbar-nav .dropdown-menu-right{right:0;left:auto}

@media(max-width:800px) {

.nav-tabs {float:none;display: inline-block;}
.nav-item {float:none;display: inline-block;}
}
</style>
<style type="text/css">
body {
  background: #F1F3FA;
}
.shadow-sm{
	box-shadow:0 .125rem .25rem rgba(0,0,0,.075)!important;
	background: #fff;
	padding: 15px 5px;
	margin: auto 5px 5px;
	border-radius: 4px;
	width: 100%;
	height: 90px;
	justify-content: center;
	align-items: center;
	text-align: center;
}
.shadow-sm:hover{
	box-shadow:0 .125rem .25rem rgba(0,0,0,.2)!important;
}
.shadow-sm2{
	box-shadow:0 .125rem .25rem rgba(0,0,0,.075)!important;
	background: #fff;

	border-radius: 4px;
	width: 100%;
}
.icon-2x {
	font-size: 30px;
	display: block;
}

.shadow{box-shadow:0 .5rem 1rem rgba(0,0,0,.15)!important
}

.nounderline, .violet{
    color: #7c4dff !important;
}

.file-upload {
    width: 100%;
    padding: 10px 0px;
    position: absolute;
    left: 0;
    opacity: 0;
    cursor: pointer;
}
.profile-img img{
    width: 200px;
    height: 200px;
    border-radius: 50%;
}    

.blue {
    color: #2879fe;
}
</style>

<div style="margin-top: 10px">
<div class="container container-indent">        
<div class="gallery js-flickity">
  <img src="<?php echo base_url('assets/images/promo/ovo01.jpg') ?>" class="gallery-cell">
  <img src="<?php echo base_url('assets/images/promo/ovo01.jpg') ?>" class="gallery-cell">
  <img src="<?php echo base_url('assets/images/promo/ovo01.jpg') ?>" class="gallery-cell">
  <img src="<?php echo base_url('assets/images/promo/ovo01.jpg') ?>" class="gallery-cell">
  <img src="<?php echo base_url('assets/images/promo/ovo01.jpg') ?>" class="gallery-cell">
</div>
</div>
</div>

<div id="tt-pageContent">
	<div class="tt-hidden-desctope">
        <div class="container" style="margin-top: 10px">
			<div class="row" style="color: #2879fe">
                <div class="col-4 col-md-4 col-lg-4 col-xl-4 btn-bg">
                    <a href="<?php echo base_url('dashboard/product_list') ?>" class="blue">
                        <div class="shadow-sm"><i class="icon-2x icon-f-46"> </i> Daftar Jual</div>
                    </a>
                </div>
                <div class="col-4 col-md-4 col-lg-4 col-xl-4">
                    <a href="<?php echo base_url('dashboard/product_buy') ?>" class="blue">
                        <div class="shadow-sm"><i class="icon-2x icon-e-45"> </i> Daftar Beli</div>
                    </a>
                </div>
                <div class="col-4 col-md-4 col-lg-4 col-xl-4">
                    <a href="<?php echo base_url('dashboard/product_buy') ?>" class="blue">
                        <div class="shadow-sm"><i class="icon-2x icon-e-45"> </i> Daftar Beli</div>
                    </a>
                </div>
            </div>
            <div class="row" style="">
                <div class="col-4 col-md-4 col-lg-4 col-xl-4">
                    <a href="<?php echo base_url('dashboard/product/add') ?>" class="blue">
                        <div class="shadow-sm"><i class="icon-2x icon-f-69"> </i> Tambah Product</div>
                    </a>
                </div>
                <div class="col-4 col-md-4 col-lg-4 col-xl-4">
                    <a href="<?php echo base_url('dashboard/location_list') ?>" class="blue">
                        <div class="shadow-sm"><i class="icon-2x icon-f-24"> </i> Lokasi Saya</div>
                    </a>
                </div>
                <div class="col-4 col-md-4 col-lg-4 col-xl-4">
                    <a href="<?php echo base_url('dashboard/location_list') ?>" class="blue">
                        <div class="shadow-sm"><i class="icon-2x icon-f-24"> </i> Lokasi Saya</div>
                    </a>
                </div>
            </div>
            <div class="row" style="">
                <div class="col-4 col-md-4 col-lg-4 col-xl-4">
                    <a href="<?php echo base_url('dashboard/product/add') ?>" class="blue">
                        <div class="shadow-sm"><i class="icon-2x icon-f-69"> </i> Tambah Product</div>
                    </a>
                </div>
                <div class="col-4 col-md-4 col-lg-4 col-xl-4">
                    <a href="<?php echo base_url('dashboard/location_list') ?>" class="blue">
                        <div class="shadow-sm"><i class="icon-2x icon-f-24"> </i> Lokasi Saya</div>
                    </a>
                </div>
                <div class="col-4 col-md-4 col-lg-4 col-xl-4">
                    <a href="<?php echo base_url('dashboard/location_list') ?>" class="blue">
                        <div class="shadow-sm"><i class="icon-2x icon-f-24"> </i> Lokasi Saya</div>
                    </a>
                </div>
            </div>
	   </div>
</div>



<div id="tt-pageContent">
	<div class="container-indent">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-lg-3 col-xl-3 leftColumn aside">
					<div class="tt-btn-col-close">
						<a href="#">Close</a>
					</div>
					<div class="tt-collapse open tt-filter-detach-option">
						<div class="tt-collapse-content">
							<div class="filters-mobile">
								<div class="filters-row-select">

								</div>
							</div>
						</div>
					</div>


					<div class="tt-collapse open shadow-sm2" style="padding: 10px">
						<div class="tt-collapse-content">
							<a href="<?php echo base_url('dashboard/account_setting') ?>">
									<img width="50px" src="<?php echo get_photo(user_id()) ?>" class="profile-pic">
									
						
                   <!--  <div class="btn btn-dark">
                    <input type="file" class="file-upload" id="file-upload" 
                    name="profile_picture" accept="image/*">
					  Photo
					</div> -->
                   
              
								</a><br>
						<div class="text-info"><?php echo $user->fullname ?></div>
						<table class="table tt-table-01">
							<tbody>
								<tr>
									<td style="width: 60% !important">
                                        <a href="<?php echo base_url('dompetGoo/detail') ?>">
                                            <i class="icon-e-54"></i> Dompet Goo
                                        </a>
                                    </td>
									<td class="text-dark"><?php echo number_rp($user->saldo) ?></td>
								</tr>
							</tbody>
						</table>	
						</div>
					</div>
					<div class="tt-collapse open shadow-sm2" style="padding: 10px">
						<div class="tt-collapse-content">
							<ul class="tt-list-row">
								<li <?php if ($this->uri->segment(3) == 'add') { echo 'class="active"'; } ?>><a href="<?php echo base_url('dashboard/product/add') ?>"><i class="icon-f-69"> </i> Tambah Produk</a></li>
								<li <?php if ($this->uri->segment(2) == 'product_order') { echo 'class="active"'; } ?>><a href="<?php echo base_url('dashboard/product_order') ?>"><i class="icon-f-64"> </i> Daftar Order</a></li>
								<li <?php if ($this->uri->segment(2) == 'product_buy') { echo 'class="active"'; } ?>><a href="<?php echo base_url('dashboard/product_buy') ?>"><i class="icon-e-45"> </i> Daftar Beli</a></li>
                                <li <?php if ($this->uri->segment(2) == 'product_list') { echo 'class="active"'; } ?>><a href="<?php echo base_url('dashboard/product_list') ?>"><i class="icon-f-46"> </i> Daftar Jual</a></li>
                                <li <?php if ($this->uri->segment(2) == 'product_stock') { echo 'class="active"'; } ?>><a href="<?php echo base_url('dashboard/product_stock') ?>"><i class="icon-f-46"> </i> Daftar Stock</a></li>
								<li <?php if ($this->uri->segment(2) == 'account_setting') { echo 'class="active"'; } ?>><a href="<?php echo base_url('dashboard/account_setting') ?>"><i class="icon-f-81"> </i> Pengaturan</a></li>
                            </ul>
						</div>
					</div>
				
				</div>
				<div class="col-md-12 col-lg-9 col-xl-9">
					<div class="content-indent container-fluid-custom-mobile-padding-02">
						<div class="tt-product-listing row">
													
							<div class="shadow-sm2">
								<?php $this->load->view($menu, $param); ?>
							</div>

						</div>
						<div class="text-center tt_product_showmore">
						<div>
				</div>
			</div>
		</div>
	</div>
</div>

<div  class=""> 
    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal Header -->
                <!-- Modal body -->
                <div class="modal-body">
                    <div id="resizer" style="display: block !important;z-index: 9999"></div>
                    <button class="btn btn-block btn-border" id="upload"> 
                    Crop And Upload</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
$(function() {
    var croppie     = null;
    var el          = document.getElementById('resizer');
    var el_cover    = document.getElementById('resizer-cover');

    $.base64ImageToBlob = function(str) {
        // extract content type and base64 payload from original string
        var pos = str.indexOf(';base64,');
        var type = str.substring(5, pos);
        var b64 = str.substr(pos + 8);
      
        // decode base64
        var imageContent = atob(b64);
      
        // create an ArrayBuffer and a view (as unsigned 8-bit)
        var buffer = new ArrayBuffer(imageContent.length);
        var view = new Uint8Array(buffer);
      
        // fill the view, using the decoded base64
        for (var n = 0; n < imageContent.length; n++) {
          view[n] = imageContent.charCodeAt(n);
        }
      
        // convert ArrayBuffer to Blob
        var blob = new Blob([buffer], { type: type });
      
        return blob;
    }

    $.getImage = function(input, croppie) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {  
                croppie.bind({
                    url: e.target.result,
                });
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#file-upload").on("change", function(event) {
        $("#myModal").modal();
        // Initailize croppie instance and assign it to global variable
        croppie = new Croppie(el, {
                viewport: {
                    width: 200,
                    height: 200,
                },
                boundary: {
                    width: 250,
                    height: 250
                },
                enableOrientation: true
            });
        $.getImage(event.target, croppie); 
    });

    $("#upload").on("click", function() {
        croppie.result('base64').then(function(base64) {

            $("#myModal").modal("hide"); 
            $(".profile-pic").attr("src","<?php echo base_url('assets/images/loader.svg') ?>");

            var url = "<?php echo base_url('dashboard/upload_photo') ?>";
            var formData = new FormData();
            formData.append("profile_picture", $.base64ImageToBlob(base64));

            // This step is only needed if you are using Laravel
            // $.ajaxSetup({
            //     headers: {
            //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //     }
            // });

            $.ajax({
                type: 'POST',
                url: url,
                data: formData,
                processData: false,
                contentType: false,
                success: function(data) {
                  var data = eval('('+data+')');
                    if (data.success) {
                       $(".profile-pic").attr("src", base64); 
                    } else {
                        $(".profile-pic").attr("src","/images/icon-cam.png"); 
                        console.log(data['profile_picture']);
                    }
                },
                error: function(error) {
                  alert(error.statusText);
                  console.log(error);
                    $(".profile-pic").attr("src","<?php echo base_url('assets/images/custom/profile.png') ?>"); 
                }
            });
        });
    });

    // To Rotate Image Left or Right
    $(".rotate").on("click", function() {
        croppie.rotate(parseInt($(this).data('deg'))); 
    });

    $('#myModal').on('hidden.bs.modal', function (e) {
        // This function will call immediately after model close
        // To ensure that old croppie instance is destroyed on every model close
        setTimeout(function() { croppie.destroy(); }, 100);
    })



});
</script>
  <link rel="stylesheet" rel="stylesheet" media="screen" href="<?php echo base_url() ?>assets/css/amaran.min.css">
  <script src="<?php echo base_url('assets/js/jquery.amaran.min.js') ?>"></script>
<?php if ($this->session->flashdata('message')) { ?>
  <script type="text/javascript">
$(function(){
      $.amaran({
                'message'           :"<?php echo $this->session->flashdata('message') ?>",
                'position'          :'top right',
                'clearAll'          : true
            });
}); 
  </script>
<?php } ?>