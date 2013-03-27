<?php
/**
 * 这是 Typecho 系统的一套默认皮肤
 * 
 * @package Newspaper
 * @author 杰森葱
 * @version 0.1
 * @link http://blog.ijason.info
 */
 
 $this->need('header.php');
 ?>

    <div class="row" id="content">
    	<div class="span8" id="articles">
			<?php while($this->next()): ?>
		        <div class="post">
					<h2 class="entry_title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
					<p class="entry_data">
						<span><?php _e('作者：'); ?><?php $this->author(); ?></span>
						<span><?php _e('发布时间：'); ?><?php $this->date('F j, Y'); ?></span>
						<span><?php _e('分类：'); ?><?php $this->category(','); ?></span>
						<a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('No Comments', '1 Comment', '%d Comments'); ?></a>
					</p>
					<?php $this->content('阅读剩余部分...'); ?>
		        </div>
			<?php endwhile; ?>

			<?php $this->pageNav(); ?>
		</div>  <!-- end of #articles -->
		
		
		
		<div class="span3 offset1" id="side">
			
			<?php $this->need('sidebar.php'); ?>
		</div> <!-- end of #side -->
    
    </div><!-- end #content-->
	
	<div class="row">
		<?php $this->need('footer.php'); ?>
	</div>