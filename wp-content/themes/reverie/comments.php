<?php function reverie_comments($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?>>
		<article id="comment-<?php comment_ID(); ?>">
			<header class="comment-author vcard">
				<?php echo get_avatar($comment,$size='40'); ?>
				<?php printf(__('<cite class="fn">%s</cite>', 'reverie'), get_comment_author_link()) ?>
				<time datetime="<?php echo comment_date('c') ?>"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s', 'reverie'), get_comment_date(),  get_comment_time()) ?></a></time>
				<?php edit_comment_link(__('(Редактировать)', 'reverie'), '', '') ?>
			</header>
			
			<?php if ($comment->comment_approved == '0') : ?>
       			<div class="notice">
					<p class="bottom"><?php _e('Ваш комментарий ожидает проверки.', 'reverie') ?></p>
          		</div>
			<?php endif; ?>
			
			<section class="comment">
				<?php comment_text() ?>
			</section>
			
			<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
			
		</article>
<?php } ?>

<?php
// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die (__('Пожалуйста, на загружайте эту страницу напрямую. Спасибо!', 'reverie'));

	if ( post_password_required() ) { ?>
	<section id="comments">
		<div class="notice">
			<p class="bottom"><?php _e('Эта запись защищена паролем. Введите его, чтобы увидеть комментарии.', 'reverie'); ?></p>
		</div>
	</section>
	<?php
		return;
	}
?>
<?php // You can start editing here. Customize the respond form below ?>
<?php if ( have_comments() ) : ?>
	<section id="comments">
		<h3><?php comments_number(__('Нет ответов на', 'reverie'), __('Один ответ на', 'reverie'), __('% ответа на', 'reverie') ); ?> «<?php the_title(); ?>»</h3>
		<ol class="commentlist">
		<?php wp_list_comments('type=comment&callback=reverie_comments'); ?>
		
		</ol>
		<footer>
			<nav id="comments-nav">
				<div class="comments-previous"><?php previous_comments_link( __( '&larr; Старые комментарии', 'reverie' ) ); ?></div>
				<div class="comments-next"><?php next_comments_link( __( 'Новые комментарии &rarr;', 'reverie' ) ); ?></div>
			</nav>
		</footer>
	</section>
<?php else : // this is displayed if there are no comments so far ?>
	<?php if ( comments_open() ) : ?>
	<?php else : // comments are closed ?>
	<section id="comments">
		<div class="notice">
			<p class="bottom"><?php _e('Комментарии отключены.', 'reverie') ?></p>
		</div>
	</section>
	<?php endif; ?>
<?php endif; ?>
<?php if ( comments_open() ) : ?>
<section id="respond">
	<h3><?php comment_form_title( __('Оставить комментарий', 'reverie'), __('Оставить комментарий к %s', 'reverie') ); ?></h3>
	<p class="cancel-comment-reply"><?php cancel_comment_reply_link(); ?></p>
	<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
	<p><?php printf( __('Вы должны <a href="%s">войти</a> чтобы оставить комментарий.', 'reverie'), wp_login_url( get_permalink() ) ); ?></p>
	<?php else : ?>
	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
		<?php if ( is_user_logged_in() ) : ?>
		<p><?php printf(__('Вы вошли как <a href="%s/wp-admin/profile.php">%s</a>.', 'reverie'), get_option('siteurl'), $user_identity); ?> <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php __('Выйти из своей учётной записи', 'reverie'); ?>"><?php _e('Выйти &raquo;', 'reverie'); ?></a></p>
		<?php else : ?>
		<p>
			<label for="author"><?php _e('Имя', 'reverie'); if ($req) _e(' (required)', 'reverie'); ?></label>
			<input type="text" class="five" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?>>
		</p>
		<p>
			<label for="email"><?php _e('Электронная почта', 'reverie'); if ($req) _e(' (required)', 'reverie'); ?></label>
			<input type="text" class="five" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?>>
		</p>
		<?php endif; ?>
		<p>
			<label for="comment"><?php _e('Комментарий', 'reverie'); ?></label>
			<textarea name="comment" id="comment" tabindex="4"></textarea>
		</p>
		<p><input name="submit" class="button grey_blue large" type="submit" id="submit" tabindex="5" value="<?php _e('Отправить комментарий', 'reverie'); ?>"></p>
		<?php comment_id_fields(); ?>
		<?php do_action('comment_form', $post->ID); ?>
	</form>
	<?php endif; // If registration required and not logged in ?>
</section>
<?php endif; // if you delete this the sky will fall on your head ?>