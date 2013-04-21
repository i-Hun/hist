<?php
/*
Template Name: Кафедры
*/
get_header(); ?>
	<style type="text/css">
@charset "utf-8";

@media only screen and (max-width: 767px) {
  dd i{
    font-size: 30px;
  }
}

table {
	border:none;
	width: 100%;
	margin: 0 auto;
}
td i {
	padding: 0;
}
</style>
<!-- Row for main content area -->
<div class="two columns">
	<?php $dep_side = $cfs->get('dep_side'); ?>
	<?php if ($dep_side): ?>
		<?php echo '<div class="nice">'?>
		<?php echo $cfs->get('dep_side'); ?>
		<?php echo '</div>' ?>
	<?php endif; ?>
	<?php dynamic_sidebar( 'left_widget' ); ?>
</div>
<div id="content" class="seven columns">	
	<div class="row">
		<div class="twelve columns" style="margin-top: 3px">
			<dl class="tabs four-up">
				<?php $tab1_name = $cfs->get('tab1_name'); ?>
				<?php if ($tab1_name): ?>
					<?php echo '<dd class="active"><a href="#dep1">'?>
					<?php echo $cfs->get('tab1_name'); ?>
					<?php echo '</a></dd>' ?>
				<?php endif; ?>
				
				<?php $tab2_name = $cfs->get('tab2_name'); ?>
				<?php if ($tab2_name): ?>
					<?php echo '<dd><a href="#dep2">'?>
					<?php echo $cfs->get('tab2_name'); ?>
					<?php echo '</a></dd>' ?>
				<?php endif; ?>
				
				<?php $tab3_name = $cfs->get('tab3_name'); ?>
				<?php if ($tab3_name): ?>
					<?php echo '<dd><a href="#dep3">'?>
					<?php echo $cfs->get('tab3_name'); ?>
					<?php echo '</a></dd>' ?>
				<?php endif; ?>

				<?php $tab4_name = $cfs->get('tab4_name'); ?>
				<?php if ($tab4_name): ?>
					<?php echo '<dd><a href="#dep4">'?>
					<?php echo $cfs->get('tab4_name'); ?>
					<?php echo '</a></dd>' ?>
				<?php endif; ?>
			</dl>
			<ul class="tabs-content">
				<?php $tab1_content = $cfs->get('tab1_content'); ?>
				<?php if ($tab1_content): ?>
					<?php echo '<li class="active" id="dep1Tab">'?>
					<?php echo $cfs->get('tab1_content'); ?>
					<?php echo '</li>' ?>
				<?php endif; ?>
				
				<?php $tab2_content = $cfs->get('tab2_content'); ?>
				<?php if ($tab2_content): ?>
					<?php echo ' <li id="dep2Tab">'?>
					<?php echo $cfs->get('tab2_content'); ?>
					<?php echo '</li>' ?>
				<?php endif; ?>

				<?php $tab3_content = $cfs->get('tab3_content'); ?>
				<?php if ($tab3_content): ?>
					<?php echo ' <li id="dep3Tab">'?>
					<?php echo $cfs->get('tab3_content'); ?>
					<?php echo '</li>' ?>
				<?php endif; ?>
				
				<?php $tab4_content = $cfs->get('tab4_content'); ?>
				<?php if ($tab4_content): ?>
					<?php echo ' <li id="dep4Tab">'?>
					<?php echo $cfs->get('tab4_content'); ?>
					<?php echo '</li>' ?>
				<?php endif; ?>

			</ul>
		</div>
	</div>
</div>
<div class="three columns">
	<div class="show-for-small left_widget">
		<?php dynamic_sidebar( 'left_widget' ); ?>
	</div>
	<?php get_sidebar(); ?>
</div>
		

<?php get_footer(); ?>