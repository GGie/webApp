
<!DOCTYPE html>
<html>
  <head>

    <title data-rh="true">Masuk | Goopiz</title>
    <meta charset="UTF-8">
   
  </head>
  <body >
    <noscript><div>Website ini memerlukan javascript untuk dapat ditampilkan.</div></noscript>
<style type="text/css">
body {
  /*background: #F1F3FA;*/
  /*background: -webkit-linear-gradient(left, #0072ff, #8811c5);*/
}
.card-container.card {
    max-width: 350px;
    padding: 40px 40px;
}

.card {
    /*background-color: #F7F7F7;*/
    /* just in case there no content*/
    padding: 20px 25px 30px;
    margin: 0 auto 25px;
    margin-top: 20px;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    /*-moz-box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.1);
    -webkit-box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.1);
    box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.1);*/
}

.profile-img-card {
    width: 96px;
    height: 96px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}

/*
 * Form styles
 */
.profile-name-card {
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    margin: 10px 0 0;
    min-height: 1em;
}

.reauth-email {
    display: block;
    color: #404040;
    line-height: 2;
    margin-bottom: 10px;
    font-size: 14px;
    text-align: center;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.form-signin #inputEmail,
.form-signin #inputPassword {

    direction: ltr;
    font-size: 14px;
}

.form-signin input[type=email],
.form-signin input[type=password],
.form-signin input[type=text],
.form-signin button {
    width: 100%;
    display: block;
    margin-bottom: 10px;
    z-index: 1;
    position: relative;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.form-signin .form-control:focus {
    border-color: rgb(104, 145, 162);
    outline: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
}

.btn.btn-signin {
    /*background-color: #4d90fe; */
    background-color: rgb(104, 145, 162);
    /* background-color: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));*/
    padding: 0px;
    font-weight: 700;
    font-size: 14px;
    height: 36px;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    border: none;
    -o-transition: all 0.218s;
    -moz-transition: all 0.218s;
    -webkit-transition: all 0.218s;
    transition: all 0.218s;
}

.btn.btn-signin:hover,
.btn.btn-signin:active,
.btn.btn-signin:focus {
    background-color: rgb(12, 97, 33);
}

.forgot-password {
    color: rgb(104, 145, 162);
}

.forgot-password:hover,
.forgot-password:active,
.forgot-password:focus{
    color: rgb(12, 97, 33);
}
</style>
<style type="text/css">
    .login-form {
        width: 385px;
        margin: 30px auto;
    }
    .login-form form {        
        margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .login-btn {
        min-height: 12px;
        border-radius: 2px;
    }
    .input-group-addon .fa {
        font-size: 18px;
    }
    .login-btn {
        font-size: 15px;
        font-weight: bold;
    }
    .social-btn .btn {
        height: 35px!important;
        width: 125px;
        border: none;
        margin: 2px 3px 0;
        opacity: 1;
    }
    .social-btn .btn:hover {
        opacity: 0.9;
    }
    .social-btn .btn-primary {
        background: #507cc0;
    }
    .social-btn .btn-info {
        background: #64ccf1;
    }
    .social-btn .btn-danger {
        background: #df4930;
    }
    .or-seperator {
        margin-top: 20px;
        text-align: center;
        border-top: 1px solid #ccc;
    }
    .or-seperator i {
        padding: 0 10px;
        background: #fff;
        position: relative;
        top: -11px;
        z-index: 1;
    }   
</style>

            <div class="container">
        <div class="row col-lg-8 card">

            <div class="col-sm-12 col-md-5 col-lg-5">
                    <div class="or-seperator"><i>Daftar Baru</i></div>
                    <form class="form-signin" method="post" action="<?php echo base_url('auth/auth2') ?>">
                        <span id="reauth-email" class="reauth-email"></span>
                        <input type="email" id="inputEmail" name="txtemail" class="form-control" placeholder="Email address" required>
                        <button class="btn btn-lg btn-primary btn-block btn-small" type="submit"><?php echo $this->lang->line('register'); ?></button>

                    </form><!-- /form -->
                    <a href="#" class="forgot-password">
                        
                    </a>

                    <!-- <div class="or-seperator"><i>Atau</i></div>
                    <div class="text-center social-btn">
                        <a href="#" class="btn btn-primary"><i class="fa fa-facebook"></i>&nbsp; Facebook</a>
                        <a href="#" class="btn btn-danger"><i class="fa fa-google"></i>&nbsp; Google</a>
                    </div> -->
                    <div class="or-seperator"><i>Atau</i></div>
                    <a href="<?php echo site_url('auth/login') ?>" class="btn btn-border btn-block"><i class="fa fa-facebook"></i>&nbsp; <?php echo $this->lang->line('login'); ?></a>
                            

             </div>
             <div class="col-sm-12 col-md-7 col-lg-7 pt-3">
                <img src="<?php echo base_url('assets/images/custom/login.png') ?>" width="100%">
             </div>

            
        </div><!-- /card-container -->
    </div><!-- /container -->

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