<!DOCTYPE html>
<html>
  <head>

    <title data-rh="true">Message | Goopiz</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=no, width=device-width">
    <link rel="stylesheet" rel="stylesheet" media="screen" href="<?php echo base_url() ?>assets/mobile/bootstrap.min.css">
    <link rel="stylesheet" rel="stylesheet" media="screen" href="<?php echo base_url() ?>assets/mobile/mobile_login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
   
  </head>
  <body >


<div class="css-akv0mj">
			<?php if ($this->session->flashdata('message') == 'Success') { ?>
      		<div class="main-detail shadow-sm alert-success">
                  <div class="row dtl_l" style="padding-left:25px; padding-right:25px;">
                    <div class="col-12 col-sm-12 text-center" style="padding:0px;">
                      <span><i class="fa fa-check-circle-o" style="font-size: 70px; color: #00b300;"></i></span>
                    </div>
                  </div>

                  <div class="row sc">
                    <div class="col-12 col-sm-12 text-center">
                      <span>SUCCESS</span>
                      <p style="margin-bottom: 0px;">You have successfully register</p>
                      <p style="margin-bottom: 0px;">Please Check Email</p>
                    </div>
                  </div>
            </div>
            <?php } else { ?>
            <div class="main-detail shadow-sm alert-danger">
                  <div class="row dtl_l" style="padding-left:25px; padding-right:25px;">
                    <div class="col-12 col-sm-12 text-center" style="padding:0px;">
                      <span><i class="fa fa-times-circle-o" style="font-size: 70px; color: #b30000;"></i></span>
                    </div>
                  </div>
                  <div class="row sc">
                    <div class="col-12 col-sm-12 text-center">
                      <span>FAILED</span>
                      <p style="margin-bottom: 0px;">Something went wrong.</p>
                    </div>
                  </div>
            </div>

            <?php } ?>
            
            <div class="col-md-12 d-flex justify-content-center" style="padding-top: 30px">
                <a href="<?php echo base_url() ?>" id="singlebutton" name="singlebutton" class="btn btn-primary text-center justify-content-center">
                    <i class="fa fa-arrow-left"></i> Home
                </a>
            </div>

   
</div>

  </body>
  </html>