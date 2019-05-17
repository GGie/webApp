<!DOCTYPE html>
<html>
  <head>

    <title data-rh="true"><?php echo $this->lang->line('register'); ?> | Goopiz</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=no, width=device-width">
    <link rel="stylesheet" rel="stylesheet" media="screen" href="<?php echo base_url() ?>assets/mobile/mobile_login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>  
  </head>
  <body >
    <noscript><div>Website ini memerlukan javascript untuk dapat ditampilkan.</div></noscript>
    <div id="content">
   <div class="css-v90ybk">
      
      <nav class="unf-navbar-container css-tjm0gv-unf-navbar-container e18vcn5y0">
        <div class="unf-navbar-wrapper unf-navbar-wrapper--main unf-navbar-wrapper--fixed css-1epzir5 e18vcn5y1">
            
            <div class="unf-navbar css-yrna1j e18vcn5y3">
               
               
               <div class="unf-navbar__title css-1a7d65i e18vcn5y6">
                  <a href="<?php echo base_url() ?>"><h1 class="css-1b81x7z e18vcn5y7"><i class="fa fa-arrow-left" style="width: 35px;text-align: right;padding-right: 6px"> </i><?php echo $this->lang->line('login'); ?></h1></a>
               </div>
               <!-- <style data-emotion-css="1ay9vb9">.css-1ay9vb9{margin-right:16px;}</style>
               <a class="css-1ay9vb9 css-1b81x7z e18vcn5y7" href="<?php echo base_url('auth/login') ?>"><?php echo $this->lang->line('login'); ?></a> -->
            </div>
         </div>
         <style data-emotion-css="hmmmg1">.css-hmmmg1{height:52px;}</style>
         <div class="unf-navbar-wrapper-spacer css-hmmmg1 e18vcn5y12"></div>
      </nav>
      
      <div class="css-akv0mj">
         
         <div class="css-hq8ih9 e82hw388">
            <form method="post" action="<?php echo base_url('auth/forgot') ?>">
               <style data-emotion-css="3e1dqp-unify">.css-3e1dqp-unify{margin-bottom:16px;}</style>
               <div class="unf_input css-3e1dqp-unify eqk3cat0">
                  
                  <label class="unf-input-label css-1x2nuc7 eqk3cat1">Email</label>
                  
                  <div class="unf-input-group css-1h6rwbn eqk3cat2">
                    <input type="email" aria-label="unf-input" class="unf-input-control unf-form-control" name="txtemail" required value="" autoCapitalize="off" autoComplete="off"/></div>
                  
                  <div class="unf-input-info css-1viktko eqk3cat4"></div>
               </div>
               
               <button class="unf-btn unf-btn--animate unf-btn--blue unf-btn--large unf-btn--block css-kpczfl-unf-btn e1yzwfai0" type="submit"><span><?php echo $this->lang->line('send'); ?></span></button>

            </form>
         </div>
      </div>
   </div>
</div>
  
  <script src="<?php echo base_url() ?>/assets/js/jquery-2.1.4.min.js"></script>
    <script src="<?php echo base_url('assets/js/dist/jsalert.min.js') ?>"></script>

<?php if ($this->session->flashdata('message')) { ?>
<script type="text/javascript">
  JSAlert.alert("<?php echo $this->session->flashdata('message') ?>");
</script>
<?php } ?>
  </body>
</html>