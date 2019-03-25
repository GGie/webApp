					<ul class="chat tt-comments-layout">
	                	<?php if ($DataComment != "" )  { ?>
						<?php foreach ($DataComment->result() as $coment) { ?>
	                            <li class="left clearfix">
	                              <span class="chat-img float-left">
	                                <img src="<?php echo get_photo($coment->input_by) ?>" alt="User Avatar">
	                              </span>
	                              <div class="chat-body clearfix">
	                                <div class="header">
	                                  <strong class="primary-font"><?php echo $coment->fullname ?></strong>
	                                  <small class="float-right text-muted"><i class="fa fa-clock-o"></i> <?php echo timeAgo(strtotime($coment->input_date)); ?></small>
	                                </div>
	                                <p>
	                                  <?php echo $coment->comment ?>
	                                </p>
	                              </div>
	                              <ul>
	                              	<?php $parentsCom = $this->CommentsModel->getByParentCom($this->input->get('product_id'), $coment->com_id); ?>
									<?php if ($parentsCom != "" )  { ?>
									<?php foreach ($parentsCom as $parentCom) { ?>
		                              	<li class="left clearfix">
			                              <span class="chat-img float-left">
			                                <img src="<?php echo get_photo($parentCom->input_by) ?>" alt="User Avatar">
			                              </span>
			                              <div class="chat-body clearfix">
			                                <div class="header">
			                                  <strong class="primary-font"><?php echo $parentCom->fullname ?></strong>
			                                  <small class="float-right text-muted"><i class="fa fa-clock-o"></i> <?php echo timeAgo(strtotime($parentCom->input_date)); ?></small>
			                                </div>
			                                <p>
			                                  <?php echo $parentCom->comment ?>
			                                </p>
			                              </div>
			                            </li>

									<?php } ?>
									<?php } ?>
	                              </ul>
	                            </li>
	                    <?php } ?>
						<?php } ?>
	                </ul>