<link href="<?php echo base_url() ?>/assets/css/select2.min.css" rel="stylesheet" type="text/css" />
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
</style>

<div id="content-block">
		<div class="container-fluid custom-container pt-3 pb-4">
			<div class="row">
				
				<div class="col-md-12 col-sm-12">

					<div class="row profile">
						<div class="col-md-12 col-sm-12">
				            <div class="">
							         <!-- FORM -->

<form method="post" id="form" action="<?php echo base_url('dashboard/account/update_password') ?>" enctype="multipart/form-data">

    <div class="material-textfield normal form-control mt-4">
      <input type="text" id="password" name="password" placeholder="Password" value="" autocomplete="off" required="true" minlength="6" maxlength="50">
      <label data-content="Password Baru"></label>
    </div>

    <div class="material-textfield normal form-control mt-4">
      <input type="text" id="password2" name="password2" placeholder="Konfirmasi Password Baru" value="" autocomplete="off" minlength="6" maxlength="15">
      <label data-content="Konfirmasi Password Baru"></label>
    </div>

    <div class="material-textfield normal form-control mt-4">
      <input type="text" id="password_old" name="password_old" placeholder="Password Lama" value="" autocomplete="off" maxlength="15">
      <label data-content="Password Lama"></label>
    </div>

  <button type="submit" class="btn-accent btn-small btn size-3" style="width: 120px"><i class="fa fa-paper-plane-o"></i> <?php echo $this->lang->line('edit'); ?></button>
  <a href="<?php echo site_url('dashboard/account_setting') ?>" class="btn btn-small btn-border02" style="margin: 10px;width: 120px"> <?php echo $this->lang->line('back'); ?></a>
</form>
                       <!-- FORM END -->
				            </div>
						</div>
					</div>


				</div>
			</div>
		</div>
	</div>

<?php if ($this->session->flashdata('message')) { ?>
<script type="text/javascript">
  JSAlert.alert("<?php echo $this->session->flashdata('message') ?>");
</script>
<?php } ?>