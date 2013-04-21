<?php get_header(); ?>

		<div class="two columns hide-for-small">
			<div class="social_side" >
				<ul>
					<li >
						<a  title="Публичная страница Студсовета Истфака ВКонтакте" href="http://vk.com/istfak_public" class="ico-footer has-tip tip-top noradius vk" style="border:none;" target="_blank"><i class="icon-vkontakte-rect"></i></a>
					</li>
					<li>
						<a  title="И в Твиттере мы тоже есть, воооон там можно его почтать →" href="https://twitter.com/istfak_omsk" class="ico-footer has-tip tip-top noradius twitter" style="border:none;"  target="_blank"><i class="icon-twitter"></i></a>						
					</li>
					<li>
						<a  title="С помощью RSS можно подписаться на все обновления сайта" href="/?feed=rss2" class="ico-footer has-tip tip-top noradius rss" style="border:none;"  target="_blank"><i class="icon-rss"></i></a>
					</li>
				</ul>
			</div>
			<?php dynamic_sidebar( 'left_widget' ); ?>

		</div>
		<div id="content" class="seven columns">	
			<?php get_template_part('loop', 'index'); ?>
		<div class="row">
			<?php wp_tag_cloud('smallest=12&largest=30&number=50'); ?>
		</div>
		</div><!-- End Content row -->
		<div class="three columns">
			<div class="show-for-small left_widget">
				<?php dynamic_sidebar( 'left_widget' ); ?>
			</div>
			<?php get_sidebar(); ?>	
		</div>
		
<?php get_footer(); ?>