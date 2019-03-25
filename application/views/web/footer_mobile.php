<script src="<?php echo base_url('assets') ?>/external/panelmenu/panelmenu.js"></script>
<script src="<?php echo base_url('assets') ?>/external/instafeed/instafeed.min.js"></script>
<script src="<?php echo base_url('assets') ?>/external/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo base_url('assets') ?>/external/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo base_url('assets') ?>/external/countdown/jquery.plugin.min.js"></script>
<script src="<?php echo base_url('assets') ?>/external/countdown/jquery.countdown.min.js"></script>
<script src="<?php echo base_url('assets') ?>/external/lazyLoad/lazyload.min.js"></script>
<script src="<?php echo base_url('assets') ?>/js/main.js"></script>
<script src="<?php echo base_url('assets') ?>/js/jquery.expander.js"></script>
<!-- form validation and sending to mail -->
<script src="<?php echo base_url('assets') ?>/external/form/jquery.form.js"></script>
<script src="<?php echo base_url('assets') ?>/external/form/jquery.validate.min.js"></script>
<script src="<?php echo base_url('assets') ?>/external/form/jquery.form-init.js"></script>
<style type="text/css">
	/* CSS Reset used: http://seodesigns.com/projects/codepen/reset.css */
.sticky-footer {
  display: block;
  height: 45px;
  background: #fff;		
  position: fixed;
  bottom: 0px;
  left: 0px;
  width: 100%;
  z-index: 9998;
  box-shadow: 0 0 34px 0 rgba(63, 66, 87, .1)
}
.sticky-footer .one-fourth {
  width: 25%;
  float: left;
  color: #00008b;
  text-align: center;
  height: 58px;
  padding: 5px;
  position: relative;
  cursor: pointer;
}

.sticky-footer .one-two {
  width: 50%;
  float: left;
  color: #00008b;
  text-align: center;
  height: 58px;
  padding: 5px;
  position: relative;
  cursor: pointer;
}
.sticky-search,
.sticky-filters,
.sticky-map,
.sticky-radius {
  width: 25px;
  height: 25px;
  margin: auto;
  margin-top: 11px;
}
.sticky-footer .one-fourth p {
color: #000;
  font-size: 10px;
  margin-top: 3px;
}
</style>


  <div class="sticky-footer">
  <?php if (is_login()) { ?>
    <div class="one-fourth" id="search">
    <i class="fa fa-home fa-lg"></i>
      <p>Home</p>
    </div>
    
    <div class="one-fourth" id="filters">
    <i class="fa fa-bell fa-lg"></i>
      <p>Notification</p>
    </div>

    <div class="one-fourth" id="search">
    <i class="fa fa-shopping-cart fa-lg"></i>
      <p>Cart</p>
    </div>
    
    <div class="one-fourth" id="filters">
    <i class="fa fa-envelope fa-lg"></i>
      <p>Message</p>
    </div>
  <?php } else { ?>
    <div class="one-two">
      <a href="<?php echo base_url('auth/login') ?>" class="btn color-3 size-3 full"><i class="fa fa-arrow-down fa-lg" style="color: #ddd"></i> <?php echo $this->lang->line('login'); ?> </a>
    </div>

    <div class="one-two">
      <a href="<?php echo base_url('auth/register') ?>" class="btn color-3 size-3 full"><i class="fa fa-arrow-right fa-lg" style="color: #ddd"></i> <?php echo $this->lang->line('register'); ?></a>
    </div>
  <?php } ?>
  </div>


<script type="text/javascript">
	//include jQuery library
$('.one-fourth').click(function() {
  //var idName = $(this).attr('id');
  // alert('You clicked ' + idName);
  window.location = "<?php base_url('auth/login') ?>";
});

</script>