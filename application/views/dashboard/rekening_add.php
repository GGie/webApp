<link href="<?php echo base_url() ?>/assets/css/select2.min.css" rel="stylesheet" type="text/css" />
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

        <blockquote class="tt-blockquote" style="margin-top: 12px">
        <span class="">Pastikan Nomor Rekening & Nama Pemilik Rekening sesuai dengan buku tabungan.</span>
        </blockquote>

					<div class="row profile">
						<div class="col-md-9 col-sm-9">
				            <div class="">
							         <!-- FORM -->

<form method="post" action="<?php echo base_url('dashboard/rekening/save') ?>" enctype="multipart/form-data">

<div class="row">
  <div class="col-lg-12" style="margin-bottom: 18px">
    <label>Nama Bank</label>
    <div class="input-group">
		<select id="bankCode" name="bankCode" class="form-control">
		</select>
    </div>
  </div>
</div>

<div class="form-group">
  <label for="bank_account">Nomor Rekening</label>
  <input type="text" class="form-control" id="bankAccount" name="bankAccount" placeholder="Nomor Rekening" autocomplete="off" required="true" maxlength="30">
</div>

<div class="form-group">
  <label for="beneficiary">Nama Pemilik Rekening</label>
  <input type="text" class="form-control" id="beneficiary" name="beneficiary" placeholder="Nama Pemilik Rekening" autocomplete="off" required="true" maxlength="50">
</div>


  <button type="submit" class="btn-accent btn-small btn size-3" style="width: 120px"><i class="fa fa-paper-plane-o"></i> <?php echo $this->lang->line('send'); ?></button>
  <a href="<?php echo site_url('dashboard/rekening_list') ?>" class="btn btn-small btn-border02" style="margin: 10px;width: 120px"> <?php echo $this->lang->line('back'); ?></a>
</form>
                       <!-- FORM END -->
				            </div>
						</div>
					</div>


				</div>
			</div>
		</div>
	</div>


<script type="text/javascript">
    $('#bankCode').select2({
        placeholder: 'Pilih Bank',
        minimumInputLength: 0,
        ajax: {
            url: "<?php echo base_url();?>/dashboard/getBank",
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