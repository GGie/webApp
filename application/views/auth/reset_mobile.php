
<!DOCTYPE html>
<html>
  <head>

    <title data-rh="true"><?php echo $this->lang->line('login'); ?> | Goopiz</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=no, width=device-width">
    <link rel="stylesheet" rel="stylesheet" media="screen" href="<?php echo base_url() ?>assets/mobile/mobile_login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
   
  </head>
  <body >
    <noscript><div>Website ini memerlukan javascript untuk dapat ditampilkan.</div></noscript>
    <div id="content">
   <div class="css-v90ybk">
      
      <nav class="unf-navbar-container css-tjm0gv-unf-navbar-container e18vcn5y0">
        <div class="unf-navbar-wrapper unf-navbar-wrapper--main unf-navbar-wrapper--fixed css-1epzir5 e18vcn5y1">
            
            <div class="unf-navbar css-yrna1j e18vcn5y3">
               
               
               <div class="unf-navbar__title css-1a7d65i e18vcn5y6">
                  <a href="<?php echo base_url() ?>"><h1 class="css-1b81x7z e18vcn5y7"><i class="fa fa-arrow-left" style="width: 35px;text-align: right;padding-right: 6px"> </i>Kembali</h1></a>
               </div>
               
               <style data-emotion-css="1ay9vb9">.css-1ay9vb9{margin-right:16px;}</style>
               <a class="css-1ay9vb9 css-1b81x7z e18vcn5y7" href="<?php echo base_url('auth/register') ?>"><?php echo $this->lang->line('register'); ?></a>
            </div>
         </div>
         <style data-emotion-css="hmmmg1">.css-hmmmg1{height:52px;}</style>
         <div class="unf-navbar-wrapper-spacer css-hmmmg1 e18vcn5y12"></div>
      </nav>
      
      <div class="css-akv0mj">
         
         <div class="css-hq8ih9 e82hw388">
            <form method="post" action="<?php echo base_url('auth/resetpwd/' . $this->uri->segment(3) ) ?>">
               <style data-emotion-css="3e1dqp-unify">.css-3e1dqp-unify{margin-bottom:16px;}</style>
               <div class="unf_input css-3e1dqp-unify eqk3cat0">
                  
                  <label class="unf-input-label css-1x2nuc7 eqk3cat1">Email</label>
                  
                  <div class="unf-input-group css-1h6rwbn eqk3cat2">
                    <input type="email" aria-label="unf-input" class="unf-input-control unf-form-control" name="txtemail" readonly required value="" autoCapitalize="off" autoComplete="off"/></div>
                  
                  <div class="unf-input-info css-1viktko eqk3cat4"></div>
               </div>
               <div class="unf_input css-3e1dqp-unify eqk3cat0">
                  
                  <label class="unf-input-label css-1x2nuc7 eqk3cat1">Password</label>
                  
                  <div class="unf-input-group css-1h6rwbn eqk3cat2">
                    <input type="password" aria-label="unf-input" class="unf-input-control unf-form-control" name="txtpassword" required value="" autoCapitalize="off" autoComplete="off"/></div>
                  
                  <div class="unf-input-info css-1viktko eqk3cat4"></div>
               </div>
               <div class="unf_input css-3e1dqp-unify eqk3cat0">
                  <label class="unf-input-label css-1x2nuc7 eqk3cat1">Password Confirm</label>
                  <div class="unf-input-group css-1h6rwbn eqk3cat2">
                     <input type="password" aria-label="unf-input" class="unf-input-control unf-form-control" name="txtpassword2" required value="" autoCapitalize="off" autoComplete="off"/>
                     
                     <div class="unf-input-group__addon unf-input-group__addon--password css-1pii8bm eqk3cat3" style="background-image:url(&quot;data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxNiAxNiI+PGRlZnM+PHN0eWxlPi5jbHMtMntmaWxsOm5vbmU7c3Ryb2tlOiM0MjQyNDI7c3Ryb2tlLWxpbmVjYXA6cm91bmQ7c3Ryb2tlLWxpbmVqb2luOnJvdW5kfTwvc3R5bGU+PC9kZWZzPjxnIGlkPSJMYXllcl8yIiBkYXRhLW5hbWU9IkxheWVyIDIiPjxnIGlkPSJGSVhfSUNPTiIgZGF0YS1uYW1lPSJGSVggSUNPTiI+PHBhdGggZmlsbD0ibm9uZSIgZD0iTTAgMGgxNnYxNkgweiIvPjxwYXRoIGNsYXNzPSJjbHMtMiIgZD0iTTcgMTEuMWEzLjc3IDMuNzcgMCAwIDAgNC43Ny0zLjYzdi0uMThtLS42OC0xLjk3QTMuNzcgMy43NyAwIDEgMCA1LjI0IDEwIi8+PHBhdGggY2xhc3M9ImNscy0yIiBkPSJNMy40OSAxMS40MmE5LjcxIDkuNzEgMCAwIDEtMy0zUzMgMy43IDcuODggMy43YTcuNzkgNy43OSAwIDAgMSAzLjg0IDFNMTMuNDQgNmExMSAxMSAwIDAgMSAyLjA2IDIuMzlzLTIuNjkgNC4zMy03LjYyIDQuMzNhOCA4IDAgMCAxLTIuNDQtLjM3bTguODYtOS40MUwxLjE2IDEzLjQ5Ii8+PC9nPjwvZz48L3N2Zz4=&quot;)"></div>
                  </div>
                  <div class="unf-input-info css-1viktko eqk3cat4"></div>
               </div>
               
               <div class="css-1nhddmr">
                  <span>
                     
                     <label class="unf_checkbox css-1b1mxax-unify eqk3cat7"><input type="checkbox" id="remember-me" checked="" aria-label="unf-checkbox"/><span class="unf-checkbox__area checkbox-area"></span></label>
                     
                     <button class="unf-btn unf-btn--animate css-o9tmm2-unf-btn e1yzwfai0" type="button"><span>Ingat saya</span></button>
                  </span>
                  
                  <a href="/reset?theme=mobile" font-size="12" class="css-1yyci9f e1tekv1p0">
                     Lupa kata sandi<!-- -->?
                  </a>
               </div>
               
               <button class="unf-btn unf-btn--animate unf-btn--blue unf-btn--large unf-btn--block css-kpczfl-unf-btn e1yzwfai0" type="submit"><span><?php echo $this->lang->line('login'); ?></span></button>

            </form>
         </div>
      </div>
   </div>
</div>
  
  <link rel="stylesheet" rel="stylesheet" media="screen" href="<?php echo base_url() ?>assets/css/amaran.min.css">
  <script src="<?php echo base_url() ?>/assets/js/jquery-2.1.4.min.js"></script>
  <script src="<?php echo base_url() ?>/assets/js/jquery-ui.min.js"></script>
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
  </body>
</html>