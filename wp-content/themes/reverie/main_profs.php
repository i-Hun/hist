<?php
/*
Template Name: Преподаватели
*/
 get_header(); ?>

<div class="nine columns" >
<div class="row" id="nice_block_container">
	<?php
		$recent = new WP_Query( 'category_name=professors' );
		while($recent->have_posts()) : $recent->the_post();
		global $more;
		$more = 0;
	?>
	<article class="nice_block" >
	<a href="<?php the_permalink() ?>">					
			<?php
				if (function_exists ("has_post_thumbnail") && has_post_thumbnail () ) { 
				the_post_thumbnail(array (400,400), array ("class" => "post_thumbnail_main")); 
				} 
			?>
		<div class="pad"><h4><?php the_title(); ?></h4></div>	
		</a>
			<div class="announce_text"><?php the_content(''); ?></div>
	</article>
	<?php endwhile; ?>
</div>
</div>
<div class="three columns">
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
    $(".icon-search, .nice_block a").click(function() {
        $(".nice_block").zoomTarget({targetsize:0.8, duration:600, closeclick: true});
    });
});
</script>
<script type="text/javascript">
	function imgZoom () {
    $("#main_img img").click(function() {
        $("img").zoomTarget({targetsize:0.8, duration:600, closeclick: true});
    });
	}
</script>