<?php $this->need('header.php'); ?>

    <div id="content">
        
		<div class="row apost">
			<div class="span10 offset1 post">

			<h2 class="entry_title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>

			<p class="entry_data">
				<span><?php //_e('作者：'); ?><?php //$this->author(); ?></span>
				
				
			</p>
			<?php $this->content(); ?>

			<div class="muted">
				
			<p class="text-left">
				<?php $this->date('F j, Y'); ?></div>
			</p>

			<p class="text-right">
				CATEGORY: <?php $this->category(','); ?><br>
				TAGS: <?php $this->tags(', ', true, 'none'); ?>
			</p></div>
		</div>
		</div>


		<div class="row">
			<div class="span10 offset1">
			<?php $this->need('comments.php'); ?>
			</div>
		</div>

    </div><!-- end #content-->
	<?php $this->need('footer.php'); ?>
