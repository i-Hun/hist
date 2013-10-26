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
	<!-- Yandex.Metrika informer -->
	<a href="http://metrika.yandex.ru/stat/?id=22703509&amp;from=informer"
	target="_blank" rel="nofollow"><img src="//bs.yandex.ru/informer/22703509/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"
	style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" onclick="try{Ya.Metrika.informer({i:this,id:22703509,lang:'ru'});return false}catch(e){}"/></a>
	<!-- /Yandex.Metrika informer -->

	<!-- Yandex.Metrika counter -->
	<script type="text/javascript">
	(function (d, w, c) {
	    (w[c] = w[c] || []).push(function() {
	        try {
	            w.yaCounter22703509 = new Ya.Metrika({id:22703509,
	                    clickmap:true,
	                    trackLinks:true,
	                    accurateTrackBounce:true});
	        } catch(e) { }
	    });

	    var n = d.getElementsByTagName("script")[0],
	        s = d.createElement("script"),
	        f = function () { n.parentNode.insertBefore(s, n); };
	    s.type = "text/javascript";
	    s.async = true;
	    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

	    if (w.opera == "[object Opera]") {
	        d.addEventListener("DOMContentLoaded", f, false);
	    } else { f(); }
	})(document, window, "yandex_metrika_callbacks");
	</script>
	<noscript><div><img src="//mc.yandex.ru/watch/22703509" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
	<?php wp_footer(); ?>
</body>
</html>