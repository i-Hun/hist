<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
	<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
		<header>
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php reverie_entry_meta(); ?>
		</header>
		<div class="entry-content">
			<?php
			 if  ( function_exists ("has_post_thumbnail") && has_post_thumbnail
				() ) { the_post_thumbnail (array (300,300), array ("class" => "post_thumbnail_big")); } 
			?>
			<?php the_content(); ?>
		</div>
		<footer>
			<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Страницы:', 'reverie'), 'after' => '</p></nav>' )); ?>
			<?php the_tags(); ?>
			<span class="social_in_posts">
				<a class="post-to-googleplus-link" title="Отправить в социальную сеть Google+" rel="nofollow" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=no,status=0,height=365,width=640,left='+(screen.availWidth/2-225)+',top='+(screen.availHeight/2-150)+'');return false;"><i class="icon-googleplus-rect"></i></a>
				<a class="post-to-twitter-link" title="Отправить в социальную сеть Twitter" rel="nofollow" href="JavaScript:newWindow = window.open('http://twitter.com/home?status=<?php the_title() ?> / <?php the_permalink(); ?>','none','left='+(screen.availWidth/2-225)+',top='+(screen.availHeight/2-150)+',toolbar=0,location=0,directories=0,status=0,menuBar=0,scrollBars=0,resizable=1,width=640,height=240');newWindow.focus();" ><i class="icon-twitter"></i></a>
				<a class="post-to-vkontakte-link" title="Отправить в социальную сеть Вконтакте" rel="nofollow" href="JavaScript:newWindow = window.open('http://vkontakte.ru/share.php?url=<?php the_permalink(); ?>','none','top=100,left=100,toolbar=0,location=0,directories=0,status=0,menuBar=0,scrollBars=0,resizable=1,width=800,height=600');newWindow.focus();" ><i class="icon-vkontakte-rect"></i></a>
			</span>
		</footer>
		<?php comments_template(); ?>
	</article>
<?php endwhile; // End the loop ?>