<?php
/*
Template Name: Main
*/
 get_header(); ?>
<style type="text/css">
	article.has-tip {
    border-bottom: none !important;
    color: #333 !important;
    cursor: default !important;
    font-weight: normal !important;
}
</style>
<div class="nine columns" >
	<div class="row" id="nice_block_container">
		<?php
			$recent = new WP_Query(array( 'showposts' => '14', 'cat' => '-9' ));
			while($recent->have_posts()) : $recent->the_post();
			global $more;
			$more = 0;
		?>
		<article class="nice_block <?php $selected = $cfs->get('selected_post');
			if ($selected) {
			 	echo 'selected';
			 } 
			?>">

			<i class="icon-search"></i>
			<a href="<?php the_permalink() ?>">
				<div class="pad"><h3><?php the_title(); ?></h3></div>
				<?php
					if (function_exists ("has_post_thumbnail") && has_post_thumbnail () ) { 
					the_post_thumbnail(array (400,400), array ("class" => "post_thumbnail_main")); 
					} 
				?>
				</a>
				<div class="pad announce_text"><?php the_content(''); ?></div>		
			<footer class="<?php
		$posttags = get_the_tags();
		if ($posttags) { echo "has-tip tip-bottom noradius";}?>" title='<?php the_tags(); ?>'>
				<i class="icon-calendar"></i><?php echo get_the_time('j.m.Y'); ?>
				<a class="post-to-googleplus-link" title="Отправить в социальную сеть Google+" rel="nofollow" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=no,status=0,height=365,width=640,left='+(screen.availWidth/2-225)+',top='+(screen.availHeight/2-150)+'');return false;"><i class="icon-googleplus-rect"></i></a>
				<a class="post-to-twitter-link" title="Отправить в социальную сеть Twitter" rel="nofollow" href="JavaScript:newWindow = window.open('http://twitter.com/home?status=<?php the_title() ?> / <?php the_permalink(); ?>','none','left='+(screen.availWidth/2-225)+',top='+(screen.availHeight/2-150)+',toolbar=0,location=0,directories=0,status=0,menuBar=0,scrollBars=0,resizable=1,width=640,height=240');newWindow.focus();" ><i class="icon-twitter"></i></a>
				<a class="post-to-vkontakte-link" title="Отправить в социальную сеть Вконтакте" rel="nofollow" href="JavaScript:newWindow = window.open('http://vkontakte.ru/share.php?url=<?php the_permalink(); ?>','none','top=100,left=100,toolbar=0,location=0,directories=0,status=0,menuBar=0,scrollBars=0,resizable=1,width=800,height=600');newWindow.focus();" ><i class="icon-vkontakte-rect"></i></a>
			</footer>
		</article>
		<?php endwhile; ?>
	</div>
</div>
<div class="three columns">
	<?php wp_list_bookmarks(array( 
		'category_before'  => '<div id=%id class=%class>',
		'category_after'   => '</div>',
		'title_before'     => '<h3>',
   		'title_after'      => '</h3>',
   		'class'            => 'main_page_links',
   		'show_description' => 1,
	 ));?>
	<div class="show-for-small left_widget">
		<?php dynamic_sidebar( 'left_widget' ); ?>
	</div>
	<?php get_sidebar(); ?>	
</div>

<?php get_footer(); ?>

<script type="text/javascript" src="/wp-content/jquery.freetile.js"></script>
<script type="text/javascript">
	$(document).ready(function(){ 
		$('#nice_block_container').freetile({
			animate: true,
			elementDelay: 30
		});
	});
</script>
<script type="text/javascript" src="/wp-content/jquery.zoomooz.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $(".icon-search").click(function() {
        $(".nice_block").zoomTarget({targetsize:0.8, duration:600, closeclick: true});
    });
});
</script>