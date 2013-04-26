<?php
/**
 * 灵感来源于报纸的主题
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
					<div class="entry_title spacer spacer_btm"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></div>
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
			<div class="row spacer">
		        <ul class="unstyled" id="navlist">
		            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
		            <?php while($pages->next()): ?>
		            <li <?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?>><a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
		            <?php endwhile; ?>
		        </ul>
		    </div>

			<div class="row">
				<?php $this->need('sidebar.php'); ?>
			</div>
		</div> <!-- end of #side -->
    
    </div><!-- end #content-->
	
	
		<?php $this->need('footer.php'); ?>
	