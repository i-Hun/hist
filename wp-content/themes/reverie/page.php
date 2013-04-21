<?php get_header(); ?>
		<div class="two columns hide-for-small">
			<?php $values = $cfs->get('related'); ?>
				<?php if ($values): ?>
				<div class="sh_block">
					<h3 >Связанные записи</h3>
					<ul>
						<?php foreach ($values as $post_id): ?>

						    <?php $the_post = get_post($post_id); ?>
<!-- 						//    <?php if ( has_post_thumbnail($post_id)) : ?>
							//	<?php echo get_the_post_thumbnail($post_id, 'thumbnail');?>
						//	<?php endif; ?> -->
						 	<?php $title = $the_post->post_title; ?>
						    <?php $permalink = get_permalink( $post_id); ?>
						 	<?php get_permalink( $post_id); ?>
						   <li><a href="<?=$permalink?>"><i class="icon-link"></i><?=$title?></a></li>
						<?php endforeach; ?>
					</ul>
				</div>
				<?php else: ?> 				 
				<?php endif; ?>

			<?php echo $cfs->get('rich_text'); ?>

			<?php dynamic_sidebar( 'left_widget' ); ?>

		</div>
		<div id="content" class="seven columns">
	
			<div class="post-box">
				<?php get_template_part('loop', 'page'); ?>
			</div>

		</div><!-- End Content row -->
		<aside id="sidebar" class="three columns">
			<div class="show-for-small left_widget">
				<?php dynamic_sidebar( 'left_widget' ); ?>
			</div>
			<?php get_sidebar(); ?>
		</aside>

		
<?php get_footer(); ?>