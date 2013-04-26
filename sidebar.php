
    <div id="sidebar">
        <?php if (empty($this->options->sidebarBlock) || in_array('ShowRecentPosts', $this->options->sidebarBlock)): ?>
	    <div class="widget">
			<div class="sidebar_title spacer spacer_btm"><?php _e('New Articles'); ?></div>
            <ul class="unstyled">
                <?php $this->widget('Widget_Contents_Post_Recent')
                ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
            </ul>
	    </div>
        <?php endif; ?>
    
        <?php if (empty($this->options->sidebarBlock) || in_array('ShowRecentComments', $this->options->sidebarBlock)): ?>
	    <div class="widget">
			<div class="sidebar_title spacer spacer_btm"><?php _e('Recent Comments'); ?></div>
					<ul class="unstyled">
					<?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
					<?php while($comments->next()): ?>
							<li><a href="<?php $comments->permalink(); ?>"><?php $comments->author(false); ?></a>: <?php $comments->excerpt(50, '...'); ?></li>
					<?php endwhile; ?>
					</ul>
	    </div>
        <?php endif; ?>

        <?php if (empty($this->options->sidebarBlock) || in_array('ShowCategory', $this->options->sidebarBlock)): ?>
        <div class="widget">
			<div class="sidebar_title spacer spacer_btm"><?php _e('Categories'); ?></div>
            <ul class="unstyled">
                <?php $this->widget('Widget_Metas_Category_List')
                ->parse('<li><a href="{permalink}">{name}</a> ({count})</li>'); ?>
            </ul>
		</div>
        <?php endif; ?>

        <?php if (empty($this->options->sidebarBlock) || in_array('ShowArchive', $this->options->sidebarBlock)): ?>
        <div class="widget">
			<div class="sidebar_title spacer spacer_btm"><?php _e('Archive'); ?></div>
            <ul class="unstyled">
                <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')
                ->parse('<li><a href="{permalink}">{date}</a></li>'); ?>
            </ul>
		</div>
        <?php endif; ?>
				
		
        <?php if (empty($this->options->sidebarBlock) || in_array('ShowOther', $this->options->sidebarBlock)): ?>
		<div class="widget">
			<div class="sidebar_title spacer spacer_btm"><?php _e('Others'); ?></div>
            <ul class="unstyled">
								<li><a href="blogroll">My Friends</li>
                <?php if($this->user->hasLogin()): ?>
					<li class="last"><a href="<?php $this->options->adminUrl(); ?>"><?php _e('Admin'); ?> (<?php $this->user->screenName(); ?>)</a></li>
                    <li><a href="<?php $this->options->logoutUrl(); ?>"><?php _e('Logout'); ?></a></li>
                <?php else: ?>
                    <li class="last"><a href="<?php $this->options->adminUrl('login.php'); ?>"><?php _e('Login'); ?></a></li>
                <?php endif; ?>
            </ul>
		</div>
        <?php endif; ?>

    </div><!-- end #sidebar -->
