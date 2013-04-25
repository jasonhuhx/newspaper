<?php $this->need('header.php'); ?>
		<div class="row">
    <div class="span10 offset1" id="content">
        <div class="post">
			<h2 class="entry_title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
			<?php $this->content(); ?>
			
			<p class="muted"><?php //_e('发布时间：'); ?><?php $this->date('F j, Y'); ?></p>
		</div>

		<?php //$this->need('comments.php'); ?>
    </div><!-- end #content-->
		</div>
	<?php $this->need('footer.php'); ?>
