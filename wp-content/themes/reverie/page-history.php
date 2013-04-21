<?php
/*
Template Name: История
*/
get_header(); ?>
<style type="text/css">
	#main{
		padding:0;
	}
	#main #content, h1 {
		margin: 0 15px;
		width: 98%;
		padding:15px;
	}
</style>
		<!-- Row for main content area -->
			<h1><?php the_title(); ?>  <a style="font-size:16pt;" target="_blank" title="Презентация в большом формате" href="/timeline.html"><i class="icon-picture"></i></a></h1>
				<iframe src='/timeline.html' width='100%' style="height:700px" scrolling='no' frameborder='0'></iframe>

<!-- 		<div id="content" class="twelve columns">
	
			<div class="post-box">
				<?php get_template_part('loop', 'history'); ?>
			</div>

		</div> --> 

		
<?php get_footer(); ?>