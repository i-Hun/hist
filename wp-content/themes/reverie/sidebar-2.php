<div class="sidebar-box">
		<?php dynamic_sidebar("Sidebar"); ?>
		<div class="recent">
<h3>Последние</h3>

<dl class="tabs two-up">
  <dd class="active"><a href="#simple1">Записи</a></dd>
  <dd><a href="#simple2">Комментарии</a></dd>

</dl>

<ul class="tabs-content">
  <li class="active" id="simple1Tab">
  				<ul>
					<?php
						$args = array( 'numberposts' => '7' );
						$recent_posts = wp_get_recent_posts( $args );
						foreach( $recent_posts as $recent ){
							echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" ><i class="icon-pencil-alt"></i>' .   $recent["post_title"].'</a> </li> ';
						}
					?>
					</ul>
				</li>
  <li id="simple2Tab">
					<ul>  
						<?php kama_recent_comments(7, 40); ?>  
					</ul>  
  </li>

</ul>


		</div>
</div>
<!-- /#sidebar -->