<form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
	<div class="row">
	<div class="twelve columns">
		<div class="row collapse">
			
			<div class="eight mobile-three columns">
				<input style="border-radius:0px; border-right:none;" type="text" value="" name="s" id="s" placeholder="<?php _e('Введите поисковый запрос', 'reverie'); ?>">
			</div>
			
			<div class="four mobile-one columns">
				<input type="submit" id="searchsubmit" value="<?php _e('Искать', 'reverie'); ?>" class="button secondary ">
			</div>
		</div>
	</div>
	</div>
</form>