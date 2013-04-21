<div class="sidebar-box">
			<?php dynamic_sidebar("Sidebar"); ?>
<div class="recent_tabs">
<dl class="tabs two-up">
  <dd class="active" title="Последние комментарии"><a href="#simpleComments"><i class="icon-comment"></i></a></dd>
  <dd title="Последние записи"><a href="#simplePosts"><i class="icon-pencil-alt"></i></a></dd>
</dl>
<ul class="tabs-content">
  <li class="active" id="simpleCommentsTab">
  	<div class="recent">	
		<ul>  
			<?php kama_recent_comments(7); ?>  
		</ul>  
	</div>
  </li>
  <li id="simplePostsTab">
		<div class="recent">			
  			<ul>
			<?php
				$args = array( 'numberposts' => '7' );
				$recent_posts = wp_get_recent_posts( $args );
				foreach( $recent_posts as $recent ){
					echo '<a href="' . get_permalink($recent["ID"]) . '" title="Посмотреть запись '.esc_attr($recent["post_title"]).'" ><li>' .   $recent["post_title"].'</li></a>';
				}
			?>
			</ul>
		</div>
	</li>
</ul>
</div>
		<h3>Исторические конференции</h3>
		<div class="rss_list">
			<?php include_once(ABSPATH.WPINC.'/feed.php');
			$rss = fetch_feed('http://www.konferencii.ru/rss?key=eyJldmVudHMiOlsiMSJdLCJ0b3BpY19ncm91cHMiOlsiMiJdLCJ0b3BpY0lkcyI6WyIzOSIsIjI3NCIsIjkwIiwiMzMiLCI3NyIsIjgxIiwiNzkiXSwiY291bnRyeUlkcyI6WyIyIl0sImNpdHlJZHMiOlsiMTU3IiwiODQyIiwiMjc4MCIsIjE2MSIsIjU0IiwiMjE5MiIsIjIyMCIsIjE2MyIsIjY3IiwiMTUxMyIsIjIxMCIsIjI4MyIsIjcyIiwiMTA5IiwiMTMyIiwiMTI2IiwiODgyIiwiMjAzMiIsIjE0MTMiLCI0ODIiLCIyOSIsIjkxIiwiMjU3MiIsIjI4MzQiLCIxODAzIiwiMjQ1IiwiMTA0IiwiMjQ5IiwiMjUzIiwiMjA3IiwiNzUyIiwiMTA2IiwiMTUiLCIxOTUzIiwiMjU5IiwiMjg0IiwiMTM4MyIsIjc1IiwiNSIsIjE2NzMiLCIyMzUiLCIxNjgzIiwiMzciLCI1OTIiLCIxOTYiLCIyNDAyIiwiMjQyIiwiNDEiLCIyODYiLCIyODY4IiwiMTEzMyIsIjEzNiIsIjg1MiIsIjExNDMiLCIxMDAiLCI3MCIsIjIyNDIiLCIyNzkiLCI3MTIiLCIyODE0IiwiMjgxMSIsIjI1NCIsIjEyNjMiLCIyNDkyIiwiNzIyIiwiODgiLCIyODI5IiwiMjgiLCIxODMiLCIxNjgiLCIxOTgzIiwiMjgzOSIsIjI2NiIsIjQzMyIsIjEzOTMiLCI3NyIsIjE1MCIsIjI3NjAiLCI2NCIsIjEwMDMiLCIxNTQiLCI0NDMiLCI5NDIiLCIxMzciLCI2NSIsIjI2IiwiMzYiLCIyMTciLCI5NiIsIjI3MTAiLCIxMjIzIiwiMTY5MyIsIjI2MiIsIjEzNjMiLCIxODQzIiwiMjUiLCIyNjQiLCIyOTgiLCIxNzkiLCIyODMyIiwiMTQ1IiwiMjg3NyIsIjI1MzIiLCIxMTYzIiwiOTcyIiwiMTg1MyIsIjU0MiIsIjE4NiIsIjIyOSIsIjIzMzIiLCIyNCIsIjIyMyIsIjE3MTMiLCIyMjcyIiwiOTMiLCI3NiIsIjk5IiwiNTkiLCIxMjMiLCI4NzIiLCI5MDIiLCIzOCIsIjExMyIsIjE4NSIsIjE0MjMiLCIyNDMyIiwiMTU2IiwiMjczIiwiMjQyMiIsIjEwNSIsIjIwNSIsIjE3MSIsIjYyMiIsIjE1NDMiLCIxMjUiLCIxODIzIiwiMjkzIiwiMjE5IiwiMTE1IiwiMTc4MyIsIjIwMiIsIjk4MiIsIjI4MDAiLCI0IiwiNjgiLCIyNTYiLCIyNTciLCIxMTkiLCIxODAiLCI5OTIiLCIxNDIiLCIyMjAyIiwiMTY1MyIsIjE3NyIsIjIwNzIiLCIxMzAzIiwiMjI0IiwiMjIxIiwiMjI3IiwiMzMzIiwiODAiLCI5NyIsIjI4NTgiLCIxNjAiLCIxNDQiLCIyODIzIiwiMzkzIiwiNjkyIiwiMjY3MCIsIjExNyIsIjI0MCIsIjE0MDMiLCI1OCIsIjgzIiwiOTUiLCIxNTAzIiwiMTk5MiIsIjM5IiwiMjI2MiIsIjI1MiIsIjYwIiwiNiIsIjIzMyIsIjQwMyIsIjE3NTMiLCIyMzkyIiwiMTM1IiwiMjY5IiwiOTkzIiwiOTQiLCI5MiIsIjEyNDMiLCI2NiIsIjQ0IiwiNTMiLCIxMjEzIiwiMTYyIiwiMjIiLCI5IiwiNTAiLCIyODkiLCIyIiwiMjcyIiwiMjM3MiIsIjI0NjIiLCIyNyIsIjcxIiwiMjc1IiwiMTcyMyIsIjE0NiIsIjI2MSIsIjE5MCIsIjE1MSIsIjI4MCIsIjExMjMiLCIxNjAzIiwiMTgiLCIxMDgiLCIyMjYiLCI1NyIsIjkxMiIsIjMxIiwiOTIyIiwiMTQ4IiwiNDciLCI4OSIsIjM1IiwiMjgxMiIsIjI4MjEiLCIxMyIsIjIxMSIsIjE2NyIsIjIwIiwiMjU4IiwiMTU4MyIsIjIzIiwiMTk1IiwiMTIyIiwiMTIiLCIxNzczIiwiMzIiLCIxOTQiLCIxMTczIiwiNTEiLCIyNDciLCIxMzEzIiwiMjg3IiwiMTQ4MyIsIjEwMiIsIjczIiwiMjgyIiwiMjg3NSIsIjE4OCIsIjE0MCIsIjExOCIsIjI4MTYiLCIyMzEyIiwiMTc4IiwiMTI3IiwiMTg3IiwiODEyIiwiNjcyIiwiMTU1IiwiMTAyMyIsIjQ2MyIsIjIzMCIsIjk1MiIsIjI2NSIsIjU2Il0sImxpbWl0IjoiNTAifQ==');
			$maxitems = $rss->get_item_quantity(5);
			$rss_items = $rss->get_items(0, $maxitems);
			?>
			<ul>
			<?php if ($maxitems == 0) echo '<li>Нет записей.</li>';
			else
			// цикл вывода ссылок на новости
			foreach ( $rss_items as $item ) : ?>
			<a href='<?php echo $item->get_permalink(); ?>'
			title='<?php echo 'Дата: '.$item->get_date('j F Y | g:i a'); ?>'>
			<li>
			<i title="" style="font-size:20px;" class="icon-mic"></i>
			<?php echo $item->get_title(); ?>
			</li>
			</a>
			<?php endforeach; ?>
			</ul>
		</div>




</div>
<!-- /#sidebar -->