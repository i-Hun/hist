<?php get_header(); ?>
		<div class="two columns hide-for-small">

			<?php dynamic_sidebar( 'left_widget' ); ?>

		</div>
		<div id="content" class="seven columns">
	
			<div class="post-box">
				<h1>
					<?php if (is_day()) : ?>
						<?php printf(__('Записи за этот день: %s', 'reverie'), get_the_date()); ?>
					<?php elseif (is_month()) : ?>
						<?php printf(__('Записи за этот месяц: %s', 'reverie'), get_the_date('F Y')); ?>
					<?php elseif (is_year()) : ?>
						<?php printf(__('Записи за этот год: %s', 'reverie'), get_the_date('Y')); ?>
					<?php else : ?>
						<?php single_cat_title(); ?>
					<?php endif; ?>
				</h1>
				<hr>
				<?php get_template_part('loop', 'category'); ?>
			</div>

		</div><!-- End Content row -->
		
		<aside id="sidebar" class="three columns">
			<div class="show-for-small left_widget">
				<?php dynamic_sidebar( 'left_widget' ); ?>
			</div>
			<?php get_sidebar(); ?>
		</aside>

		
<?php get_footer(); ?>