/* GOO-CHAT JS */

$(document).ready(function(){
     var request_timestamp = 0;
	 var arr = []; // List of users	

	
// setInterval(function(){
//     $(".goo-msg_head").toggleClass("backgroundRed");
//  },1500)

	$(document).on('click', '.goo-msg_head', function() {	

		var chatbox = $(this).parents().attr("rel") ;
		$('[rel="'+chatbox+'"] .goo-msg_wrap').slideToggle();

		return false;
	});
	
	
	$(document).on('click', '.goo-close', function() {	
		var chatbox = $(this).parents().parents().attr("rel") ;
		$('[rel="'+chatbox+'"]').hide();
		arr.splice($.inArray(chatbox, arr), 1);
		displayChatBox();
		return false;
	});
	
	$(document).on('click', '.goo-sidebar-user-box', function() {
	
	 var userID = $(this).attr("class").split(' ')[1];
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
        	var chatbox = $(this).parents().parents().parents().attr("rel") ;		
            var msg = $(this).val();		
			$(this).val('');
			if(msg.trim().length != 0){				
				$.ajax({
					type: "POST",
				    url: 'messages/add_messages',
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