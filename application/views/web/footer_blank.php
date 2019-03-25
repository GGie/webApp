<script type="text/javascript">
$(document).ready(function () {
$('.readmore').expander({
            slicePoint: 100,
            expandText: ' Lihat Semua',
            userCollapseText: ''
        });
});

	$('form').on('submit', function() {
	  $('.btn-loader').append("<i class='loader'></i>");
	    $('.btn-loader').attr('disabled', true);
	});
</script>
<!-- <script src="<?php echo base_url('assets') ?>/external/elevatezoom/jquery.elevatezoom.js"></script>
<script src="<?php echo base_url('assets') ?>/external/slick/slick.min.js"></script>
<script src="<?php echo base_url('assets') ?>/external/perfect-scrollbar/perfect-scrollbar.min.js"></script> -->
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

<script type="text/javascript">

(function($){	
	$.fn.loaddata = function(options) {// Settings
		var settings = $.extend({ 
			loading_gif_url	: "<?php echo base_url('assets') ?>/images/loader.svg", //url to loading gif
			end_record_text	: 'Cukup sampai sini saja', //no more records to load
			data_url 		: '<?php echo base_url('home/load') ?>', //url to PHP page
			start_page 		: 1 //initial page
		}, options);
		
		var el = this;	
		loading  = false; 
		end_record = false;
		contents(el, settings); //initial data load
		
		
		$(document).scroll(function() { //detact scroll
			// $('.icon-f-85').text($(window).scrollTop() + $(window).height());
			// $('.icon-f-39').text($(document).height());
			if($(window).scrollTop() + $(window).height() >= $(document).height()-60){ //scrolled to bottom of the page
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

})(jQuery);

$("#results").loaddata();
</script>
</body>
</html>