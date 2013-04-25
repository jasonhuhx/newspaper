<?php $this->need('header.php'); ?>

    <div class="row" id="content">
    	<div class="span6 offset1">
		    <?php if ($this->have()): ?>
			<?php while($this->next()): ?>
		        <div class="post">
					<h2 class="entry_title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>

					<?php $this->content('Continue...'); ?>
				</div>
			<?php endwhile; ?>
		    <?php else: ?>
		        <div class="post">
		            <h2 class="entry_title"><?php _e('没有找到内容'); ?></h2>
		        </div>
		    <?php endif; ?>

			    	<div class="pagination pagination-left">
				    	<?php $this->pageNav(); ?>
				    	<script>
							$('.page-navigator').contents().unwrap().wrapAll("<ul></ul>");
							$('li.current').addClass('active');
						</script>
					</div>
		</div>

		<div class="span3 offset1" id="side">
			<?php $this->need('sidebar.php'); ?>
		</div> <!-- end of #side -->

    </div><!-- end #content-->



	<?php $this->need('footer.php'); ?>
