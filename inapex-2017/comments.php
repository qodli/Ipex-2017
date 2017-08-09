<div id="comment-section">
	<div class="comments">
		<?php if (post_password_required()) : ?>
			<p>Post is password protected. Enter the password to view any comments</p>
		<?php return; endif; ?>
	</div>
		
	<?php if (have_comments()) : ?>
		<h3><?php comments_number(); ?></h3>
		<ul>
			<?php wp_list_comments('type=comment&callback=theme_comments'); ?>
		</ul>
	<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p>Comments are closed here.</p>
	<?php endif; ?>
	<?php comment_form(); ?>
</div>