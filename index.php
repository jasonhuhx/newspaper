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
    	<div class="span6 offset1" id="articles">
			<?php while($this->next()): ?>
		        <div class="post">
					<h2 class="entry_title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
					<?php $this->content('Continue...'); ?>
		        </div>
			<?php endwhile; ?>

	    	<div class="pagination pagination-left">
		    	<?php $this->pageNav(); ?>
		    	<script>
					$('.page-navigator').contents().unwrap().wrapAll("<ul></ul>");
					$('li.current').addClass('active');
				</script>
			</div>
		</div>  <!-- end of #articles -->
		
		
		
		<div class="span3 offset1" id="side">
			
			<?php $this->need('sidebar.php'); ?>
		</div> <!-- end of #side -->
    
    </div><!-- end #content-->
	
	
		<?php $this->need('footer.php'); ?>
	