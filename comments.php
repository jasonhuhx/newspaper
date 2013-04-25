<div id="comments">
            <?php $this->comments()->to($comments); ?>
            <?php if ($comments->have()): ?>
			<h4><?php $this->commentsNum(_t('No Comment'), _t('1 Comment'), _t('%d Comments')); ?> &raquo;</h4>
            
            <?php $comments->pageNav(); ?>
            
            <?php $comments->listComments(); ?>
            
            <?php endif; ?>

            <?php if($this->allow('comment')): ?>
            <div id="<?php $this->respondId(); ?>" class="respond">
            
            <div class="cancel-comment-reply">
            <?php $comments->cancelReply(); ?>
            </div>
            
			<h4 id="response"><?php _e('Add new comment'); ?> &raquo;</h4>
			<form method="post" action="<?php $this->commentUrl() ?>" id="comment_form">
                <?php if($this->user->hasLogin()): ?>
				<p>Logged in as <a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('Logout'); ?> &raquo;</a></p>
                <?php else: ?>
				<p>
                    <label for="author"><?php _e('Name'); ?><span class="required">*</span></label>
					<input type="text" name="author" id="author" class="text" size="15" value="<?php $this->remember('author'); ?>" />
				</p>
				<p>
                    <label for="mail"><?php _e('Email'); ?><?php if ($this->options->commentsRequireMail): ?><span class="required">*</span><?php endif; ?></label>
					<input type="text" name="mail" id="mail" class="text" size="15" value="<?php $this->remember('mail'); ?>" />
				</p>
				<p>
                    <label for="url"><?php _e('Website'); ?><?php if ($this->options->commentsRequireURL): ?><span class="required">*</span><?php endif; ?></label>
					<input type="text" name="url" id="url" class="text" size="15" value="<?php $this->remember('url'); ?>" />
				</p>
                <?php endif; ?>
				<p><textarea rows="3" name="text" placeholder="comment here..."><?php $this->remember('text'); ?></textarea></p>
				<p><?php Captcha_Plugin::output(); ?></p>
				<p><button type="submit" value="<?php //_e('Ìá½»ÆÀÂÛ'); ?>" class="btn btn-primary" />Submit</p>
			</form>
            </div>
            <?php else: ?>
            <h4><?php _e('Comments closed'); ?></h4>
            <?php endif; ?>
		</div>
