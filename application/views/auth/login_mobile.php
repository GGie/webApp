
<!DOCTYPE html>
<html>
  <head>

    <title data-rh="true"><?php echo $this->lang->line('login'); ?> | Goopiz</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=no, width=device-width">
    <link rel="stylesheet" rel="stylesheet" media="screen" href="<?php echo base_url() ?>assets/mobile/mobile_login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<div id="loader-wrapper">
  <div id="loader">
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
  </div>
</div>

  </head>
  <body >
    <noscript><div>Website ini memerlukan javascript untuk dapat ditampilkan.</div></noscript>
    <div id="content">
   <div class="css-v90ybk">
      
      <nav class="unf-navbar-container css-tjm0gv-unf-navbar-container e18vcn5y0">
        <div class="unf-navbar-wrapper unf-navbar-wrapper--main unf-navbar-wrapper--fixed css-1epzir5 e18vcn5y1">
            
            <div class="unf-navbar css-yrna1j e18vcn5y3">
               
               
               <div class="unf-navbar__title css-1a7d65i e18vcn5y6">
                  <a href="<?php echo base_url('auth/register') ?>"><h1 class="css-1b81x7z e18vcn5y7"><i class="fa fa-arrow-left" style="width: 35px;text-align: right;padding-right: 6px"> </i><?php echo $this->lang->line('register'); ?></h1></a>
               </div>
               
               <!-- <style data-emotion-css="1ay9vb9">.css-1ay9vb9{margin-right:16px;}</style>
               <a class="css-1ay9vb9 css-1b81x7z e18vcn5y7" href="<?php echo base_url('auth/register') ?>"><?php echo $this->lang->line('register'); ?></a> -->
            </div>
         </div>
         <style data-emotion-css="hmmmg1">.css-hmmmg1{height:52px;}</style>
         <div class="unf-navbar-wrapper-spacer css-hmmmg1 e18vcn5y12"></div>
      </nav>
      
      <div class="css-akv0mj">
         
         <div class="css-hq8ih9 e82hw388">
            <form method="post" action="<?php echo base_url('auth/auth') ?>">
               <style data-emotion-css="3e1dqp-unify">.css-3e1dqp-unify{margin-bottom:16px;}</style>
               <div class="unf_input css-3e1dqp-unify eqk3cat0">
                  
                  <label class="unf-input-label css-1x2nuc7 eqk3cat1">Email</label>
                  
                  <div class="unf-input-group css-1h6rwbn eqk3cat2">
                    <input type="hidden" name="url_old" value="<?php echo $this->input->get('url_old') ?>">
                    <input type="email" aria-label="unf-input" class="unf-form-control" name="txtusername" required value="" autoCapitalize="off" autoComplete="off"/></div>
                  
                  <div class="unf-input-info css-1viktko eqk3cat4"></div>
               </div>
               <div class="unf_input css-3e1dqp-unify eqk3cat0">
                  <label class="unf-input-label css-1x2nuc7 eqk3cat1">Kata Sandi</label>
                  <div class="unf-input-group css-1h6rwbn eqk3cat2">
                     <input type="password" aria-label="unf-input" class="unf-form-control form-password" name="txtpassword" required value="" autoCapitalize="off" autoComplete="off"/>
                     
                     <div class="css-1pii8bm form-checkbox icon-h-44"><i class="fas fa-binoculars"></i></div>
                  </div>
                  <div class="unf-input-info css-1viktko eqk3cat4"></div>
               </div>
               
               <div class="css-1nhddmr">
                  <!-- <span>
                     
                     <label class="unf_checkbox css-1b1mxax-unify eqk3cat7"><input type="checkbox" id="remember-me" checked="" aria-label="unf-checkbox"/><span class="unf-checkbox__area checkbox-area"></span></label>
                     
                     <button class="unf-btn unf-btn--animate css-o9tmm2-unf-btn e1yzwfai0" type="button"><span>Ingat saya</span></button>
                  </span> -->
                  
                  <a href="<?php echo base_url('auth/forgot') ?>" font-size="12" class="css-1yyci9f e1tekv1p0">
                     <?php echo $this->lang->line('forgot'); ?>
                  </a>
               </div>

               <button class="unf-btn unf-btn--animate unf-btn--blue unf-btn--large unf-btn--block css-kpczfl-unf-btn e1yzwfai0" type="submit"><span><?php echo $this->lang->line('login'); ?></span></button>

               <div class="or-seperator"><i>Atau</i></div>
               
               <div class="text-center social-btn">
                <div class="entry-social">
                    <div class="fb">
                        <a href="<?php echo site_url('auth/fb_login') ?>" class="unf-btn unf-btn--animate" style="width: 100%">Login Dengan Facebook</a>
                        </div>
                        <!-- <div class="wa">
                        <a href="" target="_blank">Whatsapp</a>
                        </div>
                        <div class="twitter">
                        <a href="//twitter.com/intent/tweet/?text=Polling Pemilihan Presiden 2019&amp;url=https://presiden.app/" target="_blank">Twitter</a>
                        </div>
                        <div class="gplus">
                        <a href="//plus.google.com/share?url=https://presiden.app/" target="_blank">Google+</a> -->
                </div>
                </div>

            </form>
         </div>
      </div>
   </div>
</div>
  
<script src="<?php echo base_url('assets/external/jquery/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/dist/jsalert.min.js') ?>"></script>
<script type="text/javascript">
  $(document).ready(function(){   
    $('.form-checkbox').click(function(){
      if($('.form-password').attr('type') == "password"){
        $('.form-password').attr('type','text');
      }else{
        $('.form-password').attr('type','password');
      }
    });
  });
</script>

<?php if ($this->session->flashdata('message')) { ?>
<script type="text/javascript">
  JSAlert.alert("<?php echo $this->session->flashdata('message') ?>");
</script>
<?php } ?>
  </body>
</html>