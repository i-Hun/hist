
		<div id="aa">
	
			
				<h1><?php _e('Ничего не найдено', 'reverie'); ?></h1>
				<div class="error">
					<p class="bottom"><?php _e('Страница, которую вы ищите, перемещена, удалена или временно недоступна. Или её вообще никогда и не было.', 'reverie'); ?></p>
				</div>
				<p><?php _e('Пути как всегда три:', 'reverie'); ?></p>
				<ul> 
					<li><?php _e('Проверить правильность написания адреса', 'reverie'); ?></li>
					<li><?php printf(__('Перейти <a href="%s">главную страницу</a>', 'reverie'), home_url()); ?></li>
					<li><?php _e('Вернуться <a href="javascript:history.back()">на шаг назад</a>', 'reverie'); ?></li>
				</ul>
			

		</div><!-- End Content row -->
		

<style type="text/css">
	body {
	background-attachment: fixed;
  background-image: url('http://adamwhitcroft.com/wp-content/themes/Fifth/img/dot.png'),
                    url('http://i.imgur.com/hlgyq.gif');
	background-position: 50% 50%;
	background-size: auto, cover;
  font-size: 100%;
  font-family: Arial, Helvetica, sans-serif
}
#aa {
background: hsla(0,0%,0%,.75);
  color: #b59788;
    padding: .5em 2em .5em 1em;
}
ul {
	margin-left: 20px;
}

</style>