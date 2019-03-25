<script src="<?php echo base_url('assets') ?>/js/goo-chat.js"></script>
<style type="text/css">

.goo-msg_box{
	position:fixed;
	bottom:-5px;
	width:250px;
	background:white;
	border-radius:5px 5px 0px 0px;
	z-index: 9999;
	text-overflow: ellipsis;
}

.goo-msg_head{	
	background:#6c757d;
	color:white;
	padding:8px;
	cursor:pointer;
	border-radius:5px 5px 0px 0px;
	text-overflow: ellipsis;
}

.goo-msg_body{
	width: 100%;
	background:white;
	height:200px;
	font-size:12px;
	padding:15px;
	overflow:auto;
	overflow-x: hidden;
}
.goo-msg_input{
	width:100%;
	min-height: 40px!important;
	border: 1px solid white;
	border-top:1px solid #DDDDDD;
	-webkit-box-sizing: border-box; 
	-moz-box-sizing: border-box;   
	box-sizing: border-box;  
}

.goo-close{
	float:right;
	cursor:pointer;
}
.goo-minimize{
	float:right;
	cursor:pointer;
	padding-right:5px;
	
}

.goo-msg-left{
	position:relative;
	background:#e2e2e2;
	padding:5px;
	min-height:10px;
	margin-bottom:5px;
	margin-right:10px;
	border-radius:5px;
	word-break: break-all;
}

.goo-msg-right{
	background:#d4e7fa;
	padding:5px;
	min-height:15px;
	margin-bottom:5px;
	position:relative;
	margin-left:10px;
	border-radius:5px;
	word-break: break-all;
}
/**** Slider Layout Popup *********/

 #goo-chat-sidebar {
	text-overflow: ellipsis;
     width: 220px;
     position: fixed;
     height: 100%;
     right: 0px;
     top: 0px;
     padding-top: 50px;
     padding-bottom: 10px;
     border-left: 1px solid #ddd;
}
.goo-sidebar-user-box {
     padding: 4px;
     margin-bottom: 4px;
     font-size: 12px;
     font-family: Calibri;
     /*font-weight:bold;*/
     cursor:pointer !important;
}
.goo-sidebar-user-box:hover {
 	cursor:pointer !important;
     background-color:#6c757d;
     color: #fff;
}
.goo-sidebar-user-box:after {
     content: ".";
     display: block;
     height: 0;
     clear: both;
     visibility: hidden;
     cursor:pointer !important;
}
.goo-sidebar-user-box img{
     width:35px;
     height:35px;
     border-radius:50%;
     float:left;
 }
.goo-slider-username{
 	cursor:pointer !important;
     float:left;
     line-height:30px;
     margin-left:5px;
}

.backgroundRed{
        background: #F00;
}

</style>
	

<div id="goo-chat-sidebar" class="tt-hidden-mobile">

<?php foreach ($users->result() as $key => $user) { ?>
	<div class="goo-sidebar-user-box <?php echo $user->user_id ?>">
		<img src="<?php echo get_photo($user->user_id) ?>" alt="author" width="40px" height="40px" style="margin-right: 10px;">
		<div class="goo-slider-username"><?php echo $user->fullname ?></div>
	</div>	
<?php } ?>
	
</div>	


<script type="text/javascript">
	
	$(document).ready(function(){
     var request_timestamp = 0;
	 var arr = []; // List of users	
	

setInterval(function(){
    $(".goo-msg_head").toggleClass("backgroundRed");
 },1500)

	$(document).on('click', '.goo-msg_head', function() {
		var chatbox = $(this).parents().attr("rel") ;

		$('[rel="'+chatbox+'"] .goo-msg_wrap').Toggle('slow');

		return false;
	});
	
	
	$(document).on('click', '.goo-close', function() {	
		var chatbox = $(this).parents().parents().attr("rel") ;
		$('[rel="'+chatbox+'"]').hide();
		arr.splice($.inArray(chatbox, arr), 1);
		displayChatBox();
		return false;
	});
	
	$(document).on('click', '.sidebar-user-box', function() {
	
	 var userID = $(this).attr("class");
	 var username = $(this).children().text() ;
	 
	 if ($.inArray(userID, arr) != -1)
	 {
      arr.splice($.inArray(userID, arr), 1);
     }
	 
	 arr.unshift(userID);
	 chatPopup =  '<div class="goo-msg_box" style="right:270px" rel="'+ userID+'">'+
					'<div class="goo-msg_head">'+username +
					'<div class="goo-close">x</div> </div>'+
					'<div class="goo-msg_wrap"> <div class="goo-msg_body">	<div class="goo-msg_push"></div> </div>'+
					'<div class="goo-msg_footer"><textarea class="goo-msg_input" rows="1"></textarea></div> 	</div> 	</div>' ;					

     $("body").append(  chatPopup  );
	 displayChatBox();
	 append_chat_data(userID);
	});
	
	var append_chat_data = function (chatbox, timestamp = "") {
				$.ajax({
					type: "POST",
				    url: 'messages/get_messages',
				    data: {to:chatbox,timestamp:timestamp},
				    success:
				    function(data){
				      data.forEach(function (data) {
					      	if (data.from == chatbox){
					      		$('<div class="goo-msg-left">'+data.message+'</div>').insertBefore('[rel="'+chatbox+'"] .goo-msg_push');
						    } else {
						    	$('<div class="goo-msg-right">'+data.message+'</div>').insertBefore('[rel="'+chatbox+'"] .goo-msg_push');
						    }

						    request_timestamp = data.timestamp;
				      });

				      if (data.length > 0) {
					      $('.goo-msg_body').scrollTop($('.goo-msg_body')[0].scrollHeight);
					  }
				    }
				});		  
	}

	var update_chats = function (param) {
		if(typeof(request_timestamp) == 'undefined' || request_timestamp == 0){
			var offset = 60*15; // 15min
			request_timestamp = parseInt( Date.now() / 1000 - offset );
		}

		// alert(request_timestamp);
		append_chat_data(param, request_timestamp);	    
	}
		
	$(document).on('keypress', 'textarea' , function(e) {       
        if (e.keyCode == 13 ) { 
        	var chatbox = $(this).parents().parents().parents().attr("rel");		
            var msg = $(this).val();		
			$(this).val('');
			if(msg.trim().length != 0){	
				$.ajax({
				    url: "<?php echo base_url('messages/add_messages') ?>",
				    data: {to:chatbox,msg:msg},
				    success:
				    function(data){
				      if (data.msg == 'true'){
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
	
		
    
	function displayChatBox(){ 
	    i = 270 ; // start position
		j = 260;  //next position
		
		$.each( arr, function( index, value ) {  
		   if(index < 4){
	         $('[rel="'+value+'"]').css("right",i);
			 $('[rel="'+value+'"]').show();
		     i = i+j;			 
		   }
		   else{
			 $('[rel="'+value+'"]').hide();
		   }

        });	
	}

	setInterval(function (){
		$.each( arr, function( index, value ) {  
		   update_chats(value);
        });	
		
	}, 1500);

});


</script>