<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<style type="text/css">
  body {
  padding-top: 0;
  font-size: 12px;
  color: #777;
  background: #f9f9f9;
  font-family: 'Open Sans',sans-serif;
  -webkit-overflow-scrolling: touch;
}

.btn {
  margin-left: 10px;
}
.bg-white {
  background-color: #fff;
}

.friend-list {
  list-style: none;
margin-left: -40px;
}

.friend-list li {
  border-bottom: 1px solid #eee;
}

.friend-list li a img {
  float: left;
  width: 45px;
  height: 45px;
  margin-right: 0px;
}

 .friend-list li a {
  position: relative;
  display: block;
  padding: 10px;
  transition: all .2s ease;
  -webkit-transition: all .2s ease;
  -moz-transition: all .2s ease;
  -ms-transition: all .2s ease;
  -o-transition: all .2s ease;
}

.friend-list li.active a {
  background-color: #f1f5fc;
}

.friend-list li a .friend-name, 
.friend-list li a .friend-name:hover {
  color: #777;
}

.friend-list li a .last-message {
  width: 65%;
  white-space: nowrap;
  text-overflow: ellipsis;
  overflow: hidden;
}

.friend-list li a .time {
  position: absolute;
  top: 10px;
  right: 8px;
}

small, .small {
  font-size: 85%;
}

.friend-list li a .chat-alert {
  position: absolute;
  right: 8px;
  top: 27px;
  font-size: 10px;
  padding: 3px 5px;
}

.chat {
    list-style: none;
    margin: 0;
    padding: 4px;
}

.chat-message{
    background: #f9f9f9;
    margin-top: 52px;  
}

.chat li img {
  width: 45px;
  height: 45px;
  border-radius: 50em;
  -moz-border-radius: 50em;
  -webkit-border-radius: 50em;
}

img {
  max-width: 100%;
}

.chat-body {
  padding-bottom: 20px;
}

.chat li.left .chat-body {
  margin-left: 70px;
  background-color: #fff;
}

.chat li .chat-body {
  position: relative;
  font-size: 11px;
  padding: 10px;
  border: 1px solid #f1f5fc;
  box-shadow: 0 1px 1px rgba(0,0,0,.05);
  -moz-box-shadow: 0 1px 1px rgba(0,0,0,.05);
  -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);
}

.chat li .chat-body .header {
  padding-bottom: 5px;
  border-bottom: 1px solid #f1f5fc;
}

.chat li .chat-body p {
  margin: 0;
}

.chat li.left .chat-body:before {
  position: absolute;
  top: 10px;
  left: -8px;
  display: inline-block;
  background: #fff;
  width: 16px;
  height: 16px;
  border-top: 1px solid #f1f5fc;
  border-left: 1px solid #f1f5fc;
  content: '';
  transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
}

.chat li.right .chat-body:before {
  position: absolute;
  top: 10px;
  right: -8px;
  display: inline-block;
  background: #fff;
  width: 16px;
  height: 16px;
  border-top: 1px solid #f1f5fc;
  border-right: 1px solid #f1f5fc;
  content: '';
  transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -o-transform: rotate(45deg);
}

.chat li {
  margin: 15px 0;
}

.chat li.right .chat-body {
  margin-right: 70px;
  background-color: #fff;
}

.chat-message {
  padding: 4px;
  padding-bottom: 60px;
}

.chat-box {
  position: fixed;
  bottom: 0;
  right: 0;
  padding: 15px;
  border-top: 1px solid #eee;
  transition: all .5s ease;
  -webkit-transition: all .5s ease;
  -moz-transition: all .5s ease;
  -ms-transition: all .5s ease;
  -o-transition: all .5s ease;
}

.primary-font {
  color: #3c8dbc;
}

a:hover, a:active, a:focus {
  text-decoration: none;
  outline: 0;
}
</style>
<div class="container bootstrap snippet">
    <div class="row">
        
        <!--=========================================================-->
        <!-- selected chat -->
      <div class="col-md-12 bg-white" style="padding-left: 0px!important;padding-right: 0px!important">
            <div class="chat-message">
              <div class="container align-center">
                  <div class="tt-shopcart-btn">
                    <div class="col-left">
                        <?php echo $this->pagination->create_links(); ?>
                    </div>
                  </div>
              </div>
                <ul class="chat">
                    <?php foreach ($msg->result() as $key => $m) { ?>
                      <?php if ($m->from == user_id()){ ?>
                            <li class="right clearfix">
                              <span class="chat-img pull-right">
                                <img src="<?php echo get_photo($m->from) ?>" alt="User Avatar">
                              </span>
                              <div class="chat-body clearfix">
                                <div class="header">
                                  <strong class="primary-font"><?php echo is_username($m->from) ?></strong>
                                  <small class="pull-right text-muted"><i class="fa fa-clock-o"></i> <?php echo $m->input_date ?></small>
                                </div>
                                <p>
                                  <?php echo $m->message ?>
                                </p>
                              </div>
                            </li>
                      <?php } else { ?>
                            <li class="left clearfix">
                              <span class="chat-img pull-left">
                                <img src="<?php echo get_photo($m->from) ?>" alt="User Avatar">
                              </span>
                              <div class="chat-body clearfix">
                                <div class="header">
                                  <strong class="primary-font"><?php echo is_username($m->from) ?></strong>
                                  <small class="pull-right text-muted"><i class="fa fa-clock-o"></i> <?php echo $m->input_date ?></small>
                                </div>
                                <p>
                                  <?php echo $m->message ?>
                                </p>
                              </div>
                            </li>
                      <?php } ?>
                    <?php } ?>
                </ul>
            </div>
            <div class="bottom"></div>
            <div class="chat-box col-12 bg-white">
            <form method="post" action="<?php echo base_url('messages/add_messages_m') ?>">
              <div class="input-group">
                <input type="hidden" name="to" value="<?php echo $to ?>">
                <input class="form-control border no-shadow no-rounded" placeholder="Type your message here" name="msg" value="">
                <span class="input-group-btn">
                  <button class="btn btn-border no-rounded" type="submit">Send</button>
                </span>
              </div><!-- /input-group --> 
            </form>
            </div>            
    </div>        
  </div>
</div>

<script type="text/javascript">
$(window).load(function() {
  $("html, body").animate({ scrollTop: $(document).height() }, 1000);
});
</script>

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