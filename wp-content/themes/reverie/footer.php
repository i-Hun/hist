		</section><!-- End Main Section -->

		<section id="sidebar-off" role="complementary">
			<nav id="sideMenu" role="navigation">
		    	<?php
		    	    wp_nav_menu( array(
		    			'theme_location' => 'primary',
		    			'depth' => 2,
		    			'items_wrap' => '<ul class="nav-bar">%3$s</ul>',
		    			'fallback_cb' => 'reverie_menu_fallback', // workaround to show a message to set up a menu
		    			'walker' => new reverie_walker()
		    		) );
		    	?>											
		   	</nav>
		</section>
		
		</div><!-- End Off-Canvas Row -->
		
		<footer id="content-info" role="contentinfo">
			<div class="rowm">
					<div class="row">
						<?php dynamic_sidebar("Footer"); ?>
					</div>
			</div> 
			
			<div class="rowm">
				<div class="row">
					<div class="two columns"></div> 
					<div class="two columns social">
						<ul>
								<li >
									<a title="Публичная страница Студсовета Истфака ВКонтакте" href="http://vk.com/istfak_public" class="ico-footer vk" target="_blank"><i class="icon-vkontakte-rect"></i></a>
								</li>
								<li>
									<a title="И в Твиттере мы тоже есть" href="https://twitter.com/istfak_omsk" class="ico-footer twitter" target="_blank"><i class="icon-twitter"></i></a>						
								</li>

								<li>
									<a title="С помощью RSS можно подписаться на все обновления сайта" href="/?feed=rss2" class="ico-footer rss" target="_blank"><i class="icon-rss"></i></a>
								</li>
							</ul>
					</div>
					<div class="five columns" >
						<p class="right" style="padding-top:15px;"><a href="/site-map/"><i style="font-size:20px; " class="icon-flow-cascade"></i> Карта сайта</a> | <a href="http://istfak.clan.su/" target="_blank"><i style="font-size:18px;" class="icon-back-in-time"></i> Старая версия сайта</a> | <a href="/dev/"><i style="margin-right:5px;"  class="icon-code-1"></i> О сайте и разработчиках</a> | <a href="/wp-login.php"><i class="icon-key"></i></a></p>
					</div>
					<div class="three columns"></div> 
				</div>
			</div>
		</footer>
			
	</div><!-- Container End -->
	
	<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
	     chromium.org/developers/how-tos/chrome-frame-getting-started -->
	<!--[if lt IE 7]>
		<script defer src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
		<script defer>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->
	<?php wp_footer(); ?>
</body>
</html>