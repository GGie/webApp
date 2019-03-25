<div class="tt-search-type2" style="margin-top: 10px">
									 			<!-- tt-search -->
	<form action="<?php echo site_url('messages') ?>" method="get" role="search">
		<i class="icon-f-85"></i>
		<input class="tt-search-input" type="text" name="search" placeholder="Cari Pesan" value="<?php echo $this->input->get('search') ?>" style="width: 100%">
		
		<div class="search-results" style="display: none;"></div>
	</form>
	<!-- /tt-search -->
</div>

<?php if ($chats->num_rows() > 0) { ?>
<?php foreach($chats->result() as $chat) { ?>
<a href="<?php echo base_url('messages/d/' . $chat->group_id) ?>">
<div class="tt-chat-box" style="margin-top: 2px; padding: 6px!important">
	<div class="row">
		<div class="text-left" style="width: 90%">
		<div class="col-lg-12 col-md-12 col-12">
			<?php
				if ($chat->from == user_id()) {
		 			$displayName = $chat->to;
		 		} else {
		 			$displayName = $chat->from;
		 		}
		 	?>
    		<span class="font-weight-bold text-primary"><?php echo is_username($displayName) ?></span> <br><?php echo $chat->message ?>
    		<br><i style="font-size: 10px"><?php echo format_indo_time($chat->input_date) ?></i>
    	</div>
    </div>

    <div class="text-right">
    	<i class="icon-e-07" style="vertical-align: middle;font-size: 22px"></i>
    </div>
    </div>
</div>
</a>
<?php } ?>
<div class="tt-shopcart-btn">
  <div class="col-left">
      <?php echo $this->pagination->create_links(); ?>
  </div>
</div>
<?php } else { ?>
<div class="tt-chat-box" style="margin-top: 2px; padding: 6px!important">
	<div class="container-indent nomargin">
		<div class="tt-empty-search">
			<span class="tt-icon icon-e-40"></span><br>
			<b>Belum Ada Pesan</b>
		</div>
	</div>
</div>
<?php } ?>