<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	
	<meta name='yandex-verification' content='4ca559a6523c0a93' />
	
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<meta name='yandex-verification' content='53ec8a6a81637647' />
	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width" />

	<!-- Favicon and Feed -->
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">

	<!--  iPhone Web App Home Screen Icon -->
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/devices/reverie-icon-ipad.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/devices/reverie-icon-retina.png" />
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/devices/reverie-icon.png" />

	<!-- Enable Startup Image for iOS Home Screen Web App -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/mobile-load.png" />

	<!-- Startup Image iPad Landscape (748x1024) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/images/devices/reverie-load-ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)" />
	<!-- Startup Image iPad Portrait (768x1004) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/images/devices/reverie-load-ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)" />
	<!-- Startup Image iPhone (320x460) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/images/devices/reverie-load.png" media="screen and (max-device-width: 320px)" />

	<link href='http://fonts.googleapis.com/css?family=Lobster&subset=latin,cyrillic' rel='stylesheet' type='text/css'>



 <!--[if IE 7]>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fontello-ie7.css"><![endif]-->
<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->


<?php wp_head(); ?>

</head>

<body <?php body_class('off-canvas hide-extras'); ?>>

	<!-- Start the main container -->
	<div id="container" class="container" role="document">
		<div class="rowm" id="top-top" >
			<div style="overflow:visible" class="row">
				<div class="ten columns">
					<nav  role="navigation" class="hide-for-small top-nav">
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
				</div>

				<div class="two columns" id="week_number">
					<?php
						$week_now = idate('W');
						$begin_from = 6;
						$print_week = $week_now - $begin_from;
						if($print_week%2==0) {
							$week_type = "title='Чётная неделя'";
						} else {
							$week_type = "title='Нечётная неделя'";
						}
						print  "<span $week_type >$print_week-ая неделя<span>";
					?>
				</div>
			</div>
		</div>
		<div class="rowm" id="push1"></div>
		<!-- Row for blog navigation -->
		<div class="rowm" id="second_top">
			<div class="row top-header">
				<div class="two columns hide-for-small">
					<div class="hist_cite" >
						<span class="reload has-tip" title="Ещё цитаты"><i class="icon-arrows-cw"></i></span><a class="add_quote has-tip" id="buttonForModal" title="Добавить свою цитату" href="#"><i class="icon-plus-circled"></i></a>
						<div class="has-tip">					
							<div id="quote"></div>
							<div class="cite_footer">
								<span id="firstName"></span> <span id="lastName"></span> (<span id="birth"></span>—<span id="death"></span>)
							</div>
						</div>						
					</div>
				</div>	
				<header class="eight columns" role="banner">
					<div class="reverie-header">
						<h1><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>
						<h4 class="subheader"><?php bloginfo('description'); ?></h4>

					</div>

					<p class="show-for-small">
						<a class='sidebar-button button grey_blue' id="sidebarButton" href="#sidebar-off" >Меню</a>
					</p> 
				</header>
				<div class="two columns hide-for-small">
					<div style="margin-top:40px;font-size:40px; color:rgba(0,0,0,0.2)"></div>
				</div>	
			</div>
		</div>

<div id="myModal" class="reveal-modal">
<iframe style="width: 100%; height: 1100px;" src="https://docs.google.com/spreadsheet/embeddedform?formkey=dEFiN0FPXzg1UHNnUlNhangzNXE5NVE6MQ" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" ></iframe>
  <a class="close-reveal-modal">&#215;</a>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $("#buttonForModal").click(function() {
      $("#myModal").reveal();
    });
  });
</script>

		<div id="push2"></div>
		<div class="rowm breadcrumbs_row" >
			<div class="row">
				<div class="two columns hide-for-small"></div>
				<div class="breadcrumbs seven columns hide-for-small">
					<a class="has-tip" style="border:none;" title="Карта сайта" href="/site-map/"><i style="font-size:20px; " class="icon-flow-cascade"></i></a> <?php if(function_exists('bcn_display'))
				    {
				        bcn_display();
				    }?>
				</div>
				<div class="three columns " id="main_search">
						<?php get_search_form(); ?>
				</div>
			</div>
		</div>
		<!-- Start Off-Canvas Row -->
		<div class="row" id="big_content">
		
		<!-- Row for main content area -->
		<section id="main" role="main">

<script type="text/javascript">
    $(function() {
        var box = $('.breadcrumbs_row'); // float-fixed block
        var bread = $('.breadcrumbs');

        var top = box.offset().top - parseFloat(box.css('marginTop').replace(/auto/, 0));
        $(window).scroll(function(){
            var windowpos = $(window).scrollTop();
            if(windowpos < top) {
                box.css('position', 'static');
                box.removeClass("when_top");
                bread.removeClass("when_top_bread");
            } else {
                box.css('position', 'fixed');
                box.css('top', 40);
                box.addClass("when_top");
                bread.addClass("when_top_bread");
;            }

        });
    });
</script>

<script type="text/javascript">
$(document).ready(function() {

var sayings = <?php
 
// Set your CSV feed
$feed = 'https://docs.google.com/spreadsheet/pub?key=0AuJqczPqzcEZdEFiN0FPXzg1UHNnUlNhangzNXE5NVE&output=csv';
 

// Arrays we'll use later
$keys = array();
$newArray = array();
 
// Function to convert CSV into associative array
function csvToArray($file, $delimiter) { 
  if (($handle = fopen($file, 'r')) !== FALSE) { 
    $i = 0; 
    while (($lineArray = fgetcsv($handle, 4000, $delimiter, '"')) !== FALSE) { 
      for ($j = 0; $j < count($lineArray); $j++) { 
        $arr[$i][$j] = $lineArray[$j]; 
      } 
      $i++; 
    } 
    fclose($handle); 
  } 
  return $arr; 
} 
 
// Do it
$data = csvToArray($feed, ',');
 
// Set number of elements (minus 1 because we shift off the first row)
$count = count($data) - 1;
 
//Use first row for names  
$labels = array_shift($data);  
 
foreach ($labels as $label) {
  $keys[] = $label;
}
 
// Add Ids, just in case we want them later
$keys[] = 'id';
 
for ($i = 0; $i < $count; $i++) {
  $data[$i][] = $i;
}
 
// Bring it all together
for ($j = 0; $j < $count; $j++) {
  $d = array_combine($keys, $data[$j]);
  $newArray[$j] = $d;
}
 
// Print it out as JSON
echo array2json($newArray);
    function array2json($arr) {
        $parts = array();
        $is_list = false;
        
        if (!is_array($arr)) return;
        if (count($arr)<1) return '{}';
        
        //Find out if the given array is a numerical array
        $keys = array_keys($arr);
        $max_length = count($arr); 
                
        if(($keys[0] == 0) and ($keys[$max_length] == $max_length)) {//See if the first key is 0 and last key is length - 1
            $is_list = true;
            for($i=0; $i<count($keys); $i++) { //See if each key correspondes to its position
                if($i != $keys[$i]) { //A key fails at position check.
                    $is_list = false; //It is an associative array.
                    break;
                }
            }
        }
        foreach($arr as $key=>$value) {
            if(is_array($value)) { //Custom handling for arrays
                if($is_list) $parts[] = array2json($value); /* :RECURSION: */
                else $parts[] = '"' . $key . '":' . array2json($value); /* :RECURSION: */
            } else {
                $str = '';
                if(!$is_list) $str = '"' . $key . '":';
                //Custom handling for multiple data types
                if(is_numeric($value)) $str .= $value; //Numbers
                elseif($value === false) $str .= 'false'; //The booleans
                elseif($value === true) $str .= 'true';
                else $str .= '"' . addslashes($value) . '"'; //All other things
                // :TODO: Is there any more datatype we should be in the lookout for? (Object?)
                $parts[] = $str;
            }
        }
        $json = implode(',',$parts);
        if($is_list) return '[' . $json . ']';//Return numerical JSON
        return '{' . $json . '}';//Return associative JSON
    }

?>;
	var count = 0;
	for (firstName in sayings) {
	    count++;
	}
	var rando = Math.floor(Math.random() * count);
	$("#firstName").html(sayings[rando].firstName);
	$("#lastName").html(sayings[rando].lastName);
	$("#birth").html(sayings[rando].birth);
	$("#death").html(sayings[rando].death);
	$("#quote").html(sayings[rando].quote);
	$(".hist_cite>div").attr("title", sayings[rando].prof);


$(".reload").click(function() {
	var rando = Math.floor(Math.random() * count);
	$("#firstName").html(sayings[rando].firstName);
	$("#lastName").html(sayings[rando].lastName);
	$("#birth").html(sayings[rando].birth);
	$("#death").html(sayings[rando].death);
	$("#quote").html(sayings[rando].quote);
	$(".hist_cite>div").attr("title", sayings[rando].prof);
});

});

</script>


	<script type="text/javascript" src="/wp-content/noise/jquery.noisy.js"></script>
	<script type="text/javascript">
		$('#big_content').noisy({
		    'intensity' : 1,
		    'size' : 200,
		    'opacity' : 0.08,
		    'fallback' : '',
		    'monochrome' : false
		});
	</script>