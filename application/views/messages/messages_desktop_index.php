<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<style type="text/css">
    body {
  padding-top: 0;
  font-size: 12px;
  color: #777;
  background: #f2f4f8;
  font-family: 'Open Sans',sans-serif;
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

.friend-list li:hover {
    background: #ddd;
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

.chat-message {
  padding: 4px 20px 4px;
}

.chat {
    list-style: none;
    margin: 0;
}

.chat-message{
    background: #f9f9f9;  
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

.chat-box {
  bottom: 0;
  left: 444px;
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

.btn {
  border-radius: 0px!important;
}


/*
 *  STYLE 4
 */

#style-4::-webkit-scrollbar-track
{
  background-color: #fff;
}

#style-4::-webkit-scrollbar
{
  width: 8px;
  background-color: #F5F5F5;
}

#style-4::-webkit-scrollbar-thumb
{
  background-color: #6c757d;
  border: 4px solid #6c757d;
  border-radius: 8px;
}


.--box{
  margin-top: 30px;
  box-shadow:0 2px 2px rgba(0,0,0,.1)!important;
}

.goo-msg_input{
  width:100%;
  min-height: 40px!important;
  border: 1px solid white;
  border:1px solid #DDDDDD;
  -webkit-box-sizing: border-box; 
  -moz-box-sizing: border-box;   
  box-sizing: border-box;  
}
.img-circle{
  margin-right: 5px!important;
}
</style>
<div class="container" id="tt-pageContent">
    <div class="row --box" style="height: 450px">
      <div class="col-md-4 scrollbar-friend-list bg-white" id="style-4" style="overflow-y: scroll;height: 100%">
            <!-- <div class=" row border-bottom padding-sm p-2" style="height: 50px;font-weight: bold;font-size: 18px">
            	Pesan
            </div> -->
            
            <!-- =============================================================== -->
            <!-- member list -->
            <ul class="friend-list">
                <li class="bounceInDown"  onclick="update_url('123'); ?>">
                  <a href="#" class="clearfix">
                    <img src="https://bootdey.com/img/Content/user_1.jpg" alt="" class="img-circle">
                    <div class="friend-name"> 
                      <strong>John Doe</strong>
                    </div>
                    <div class="last-message text-muted">Hello, Are you there?</div>
                    <small class="time text-muted">Just now</small>
                    <small class="chat-alert label label-danger">1</small>
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0)" onclick="update_url('124')" class="clearfix">
                    <img src="https://bootdey.com/img/Content/user_2.jpg" alt="" class="img-circle">
                    <div class="friend-name"> 
                      <strong>Jane Doe</strong>
                    </div>
                    <div class="last-message text-muted">Lorem ipsum dolor sit amet.</div>
                    <small class="time text-muted">5 mins ago</small>
                  <small class="chat-alert text-muted"><i class="fa fa-check"></i></small>
                  </a>
                </li>
                <li class="bounceInDown"  onclick="update_url('123'); ?>">
                  <a href="#" class="clearfix">
                    <img src="https://bootdey.com/img/Content/user_1.jpg" alt="" class="img-circle">
                    <div class="friend-name"> 
                      <strong>John Doe</strong>
                    </div>
                    <div class="last-message text-muted">Hello, Are you there?</div>
                    <small class="time text-muted">Just now</small>
                    <small class="chat-alert label label-danger">1</small>
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0)" onclick="update_url('124')" class="clearfix">
                    <img src="https://bootdey.com/img/Content/user_2.jpg" alt="" class="img-circle">
                    <div class="friend-name"> 
                      <strong>Jane Doe</strong>
                    </div>
                    <div class="last-message text-muted">Lorem ipsum dolor sit amet.</div>
                    <small class="time text-muted">5 mins ago</small>
                  <small class="chat-alert text-muted"><i class="fa fa-check"></i></small>
                  </a>
                </li>
                <?php foreach($chats->result() as $chat){ ?>
                <?php
                  if ($chat->from == user_id()) {
                    $displayName = $chat->to;
                  } else {
                    $displayName = $chat->from;
                  }
                ?>
                <li onclick="update_url('<?php echo $displayName ?>', '<?php echo $chat->group_id ?>')" id="<?php echo $displayName ?>" class="list-friend <?php if ($this->uri->segment(3) == $displayName) { echo "active"; } ?>">
                	<a href="javascript:void(0)" class="clearfix">
                		<img src="<?php echo get_photo($displayName) ?>" alt="" class="img-circle">
                		<div class="friend-name">	
                			<strong><?php echo is_username($displayName) ?></strong>
                		</div>
                		<div class="last-message text-muted"><?php echo $chat->message ?></div>
                		<small class="time text-muted"><?php echo format_indo_time($chat->input_date) ?></small>
                		<small class="chat-alert text-muted"><i class="fa fa-reply"></i></small>
                	</a>
                </li>
                <?php } ?>
            <div id="xfriend-list"><!-- results appear here as list --></div>            
            </ul>

		</div>
        
        <!--=========================================================-->
        <!-- selected chat -->
    	<div class="col-md-8 scrollbar bg-white goo-msg_body" id="style-4" style="overflow-y: scroll;height: 100%">
            <div id="xfriend-chat"><!-- results appear here as list --></div>   
            <div class="chat-message">
              
                <ul class="chat" style="min-height: 330px" rel="1001">
                  <div class="goo-msg_push"></div>
                              
                </ul>
            </div>
            <div class="chat-box bg-white">
            <form method="post" action="#">

            	<div class="input-group">
                <input type="hidden" name="to" id="to" value="<?php echo $this->uri->segment(3) ?>">
            		<textarea class="goo-msg_input" rows="0"></textarea>
            	</div><!-- /input-group -->	

            </form>
            </div>           
		</div>        
	</div>
</div>

<script type="text/javascript" charset="utf-8">
$('li').click(function (e) {
    e.preventDefault();
    $('li').removeClass('active');
    $(this).addClass('active');
});
        
</script>
<script>
var request_timestamp = 0;
var count_messages = '<?php echo $count_messages; ?>';
var base_url = '<?php echo base_url(); ?>/';
var update_chats = function (param, count_messages) {
  if(typeof(request_timestamp) == 'undefined' || request_timestamp == 0){
    var offset = 60*15; // 15min
    request_timestamp = parseInt( Date.now() / 1000 - offset );
  }

  // alert(request_timestamp);
  append_chat_data(param, count_messages, request_timestamp);     
}

setInterval(function(){
  update_chats($("#to").val(), count_messages);  
  console.log(count_messages);
  //$('.tt-search-input').val(count);
}, 1500);

var append_chat_data = function (chatbox, total, timestamp = "") {
        $.ajax({
          type: "POST",
            url: '../../messages/get_messages',
            data: {to:chatbox,total:total,timestamp:timestamp},
            success:
            function(data){
              data.forEach(function (data) {

                if (data.from == chatbox){
                    var left = '<li class="left">';
                      left += '<span class="chat-img pull-left">';
                      left += '<img src="' +base_url+data.avatar+ '" alt="User Avatar-Left">';
                      left += '</span>';
                      left += '<div class="chat-body">';
                      left += '<div class="header">';
                      left += '<strong class="primary-font">' +data.fullname+ '</strong>';
                      left += '<small class="pull-right text-muted"><i class="fa fa-clock-o"></i>' +data.input_date+ '</small>';
                      left += '</div>';
                      left += '<p>' +data.message+ '</p>';
                      left += '</div>';
                      left += '</li>';

                  $(left).insertBefore('[rel="1001"] .goo-msg_push');
                } else {
                  var right = '<li class="right">';
                      right += '<span class="chat-img pull-right">';
                      right += '<img src="' +base_url+data.avatar+ '" alt="User Avatar-Right">';
                      right += '</span>';
                      right += '<div class="chat-body">';
                      right += '<div class="header">';
                      right += '<strong class="primary-font">' +data.fullname+ '</strong>';
                      right += '<small class="pull-right text-muted"><i class="fa fa-clock-o"></i>' +data.input_date+ '</small>';
                      right += '</div>';
                      right += '<p>' +data.message+ '</p>';
                      right += '</div>';
                      right += '</li>';

                  $(right).insertBefore('[rel="1001"] .goo-msg_push');
                }

                request_timestamp = data.timestamp;
              });

              if (data.length > 0) {
                $('.goo-msg_body').scrollTop($('.goo-msg_body')[0].scrollHeight);
              }
            }
        });     
  }


var hitung_count_messages = function(urlx, group_id){
        $.ajax({
          type: "POST",
            url: '../../messages/get_messages_count',
            data: {group_id:group_id},
            dataType: "json",
            success:
            function(data){
              count_messages = data.data;
              // setTimeout(function() {
                append_chat_data(urlx, count_messages);
              // }, 2000);
              
              //console.log(count_messages);
            }
        });
}

append_chat_data('<?php echo $this->uri->segment(3) ?>', '<?php echo messages_count($this->uri->segment(3) . user_id()) ?>');
function update_url(urlx, group_id) {
    if ( urlx != $("#to").val()) {
      $("#to").val(urlx);
      hitung_count_messages(urlx, group_id);
      $(".chat-message").html('<div class="chat-message"><ul class="chat" style="min-height: 330px" rel="1001"><div class="goo-msg_push"></div></ul></div>');
      
      //append_chat_data(urlx, 20);
      
      var url = "<?php echo base_url('messages/read/') ?>" + urlx;
      history.pushState(null, null, url);
    }
}


//submit message
$(document).on('keypress', 'textarea' , function(e) { 


        if (e.keyCode == 13 ) { 
          var chatbox = $("#to").val(); 
            var msg = $(this).val();    
      $(this).val('');
      if(msg.trim().length != 0){ 
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('messages/add_messages') ?>",
            data: {to:chatbox,msg:msg},
            success:
            function(data){
              if (data.msg == 'true'){
                count_messages = parseFloat(count_messages) + 1;
              // $('<div class="goo-msg-right">'+msg+'</div>').insertBefore('[rel="'+chatbox+'"] .goo-msg_push');
              // $('.goo-msg_body').scrollTop($('.goo-msg_body')[0].scrollHeight);
              } else {
                alert(data.msg);
              }
            }
        });     
      
      }
        }
    });

</script>

<script type="text/javascript">

(function($){ 

  $.fn.loaddata = function(options) {// Settings
    var settings = $.extend({ 
      loading_gif_url : "<?php echo base_url('assets') ?>/images/loader.svg", //url to loading gif
      end_record_text : '', //no more records to load
      data_url    : '<?php echo base_url('messages/load_read') ?>', //url to PHP page
      start_page    : 5 //initial page
    }, options);
    
    var el = this;  
    loading  = false; 
    end_record = false;
    contents(el, settings); //initial data load
    
    
    $(".scrollbar-friend-list").scroll(function() { //detact scroll
      var mouseScroll = $('.scrollbar-friend-list').height() + $('.scrollbar-friend-list').scrollTop();
      var scrollHeight = $('.friend-list').height() + 12;
      // $('.icon-f-85').text(mouseScroll);
      // $('.icon-f-39').text(scrollHeight);
      if(scrollHeight <= mouseScroll ){ //scrolled to bottom of the page
        //alert("test");
        contents(el, settings); //load content chunk 
      }
    });   
  }; 
  //Ajax load function
  function contents(el, settings){
    var load_img = $('<img/>').attr('src',settings.loading_gif_url).addClass('loading-image'); //create load image
    var record_end_txt = $('<div/>').text(settings.end_record_text).addClass('end-record-info'); //end record text
    
    if(loading == false && end_record == false){
      loading = true; //set loading flag on
      el.append(load_img); //append loading image
      $.post( settings.data_url, {'page': settings.start_page}, function(data){ //jQuery Ajax post
        if(data.trim().length == 0){ //no more records
          el.append(record_end_txt); //show end record text
          load_img.remove(); //remove loading img
          end_record = true; //set end record flag on
          return; //exit
        }
        loading = false;  //set loading flag off
        load_img.remove(); //remove loading img 
        el.append(data);  //append content 
        settings.start_page = settings.start_page + 5; //page increment
      })
    }
  }

  $.fn.loadchat = function(options) {// Settings
    var settings = $.extend({ 
      loading_gif_url : "<?php echo base_url('assets') ?>/images/loader.svg", //url to loading gif
      end_record_text : '', //no more records to load
      data_url    : '<?php echo base_url('messages/get_more_messages') ?>', //url to PHP page
      start_page    : parseFloat(count_messages) //initial page
    }, options);
    
    var el = this;  
    loading_chat  = false; 
    end_record_chat = false;
    contents_chat(el, settings); //initial data load
    
    $(".list-friend").click(function(){
        setTimeout(function() {
          settings.start_page = parseFloat(count_messages);
        }, 1500);
    });

    $(".scrollbar").scroll(function() { //detact scroll
      var mouseScroll = $('.scrollbar').scrollTop();
      var scrollHeight = $('.friend-list').height() + 12;
      // $('.icon-f-85').text(mouseScroll);

      // $('.icon-f-39').text(scrollHeight);
      if(mouseScroll <= 0 && (count_messages) > 5){ //scrolled to bottom of the page
               //alert("test");
        contents_chat(el, settings); //load content chunk 
      }
    });   
  }; 
    //Ajax load function
  function contents_chat(el, settings){
    var load_img = $('<img/>').attr('src',settings.loading_gif_url).addClass('loading-image'); //create load image
    var record_end_txt = $('<div/>').text(settings.end_record_text).addClass('end-record-info'); //end record text
    
    if(loading_chat == false && end_record_chat == false){
      loading_chat = true; //set loading flag on
      el.prepend(load_img); //append loading image
      
      $.post( settings.data_url, {'page': settings.start_page,'to': $("#to").val()}, function(data){ //jQuery Ajax post
        // if(data.trim().length == 0){ //no more records
        //   el.prepend(record_end_txt); //show end record text
        //   load_img.remove(); //remove loading img
        //   end_record_chat = true; //set end record flag on
        //   return; //exit
        // }
        // loading_chat = false;  //set loading flag off
        // load_img.remove(); //remove loading img 

            data.forEach(function (data) {
                //insert
                if (data.from == $("#to").val()){
                    var left = '<li class="left">';
                      left += '<span class="chat-img pull-left">';
                      left += '<img src="' +base_url+data.avatar+ '" alt="User Avatar-Left">';
                      left += '</span>';
                      left += '<div class="chat-body">';
                      left += '<div class="header">';
                      left += '<strong class="primary-font">' +data.fullname+ '</strong>';
                      left += '<small class="pull-right text-muted"><i class="fa fa-clock-o"></i>' +data.input_date+ '</small>';
                      left += '</div>';
                      left += '<p>' +data.message+ '</p>';
                      left += '</div>';
                      left += '</li>';

                  $(left).insertBefore('[rel="1001"] .goo-msg_push');
                } else {
                  var right = '<li class="right">';
                      right += '<span class="chat-img pull-right">';
                      right += '<img src="' +base_url+data.avatar+ '" alt="User Avatar-Right">';
                      right += '</span>';
                      right += '<div class="chat-body">';
                      right += '<div class="header">';
                      right += '<strong class="primary-font">' +data.fullname+ '</strong>';
                      right += '<small class="pull-right text-muted"><i class="fa fa-clock-o"></i>' +data.input_date+ '</small>';
                      right += '</div>';
                      right += '<p>' +data.message+ '</p>';
                      right += '</div>';
                      right += '</li>';

                  $(right).insertBefore('[rel="1001"] .goo-msg_push');
                }

            });
        //insert EOF
        el.prepend(right);  //append content 
        settings.start_page = settings.start_page - 5; //page increment

        //count_messages = parseFloat(count_messages);
      });
    }
  }

})(jQuery);

$("#xfriend-list").loaddata();
//if ( <?php echo $count_messages ?> > 5 ){

  $(".chat-message").loadchat();
//}
</script>