<?php
function reverie_setup() {
	// Add language supports. Please note that Reverie Framework does not include language files.
	load_theme_textdomain('reverie', get_template_directory() . '/lang');
	
	// Add post thumbnail supports. http://codex.wordpress.org/Post_Thumbnails
	add_theme_support('post-thumbnails');
	// set_post_thumbnail_size(150, 150, false);
	
	// Add post formarts supports. http://codex.wordpress.org/Post_Formats
	add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));
	
	// Add menu supports. http://codex.wordpress.org/Function_Reference/register_nav_menus
	add_theme_support('menus');
	register_nav_menus(array(
		'primary' => __('Primary Navigation', 'reverie'),
		'utility' => __('Utility Navigation', 'reverie')
	));	
}
add_action('after_setup_theme', 'reverie_setup');

// Enqueue for header and footer, thanks to flickapix on Github.
// Enqueue css files
function reverie_css() {
  if ( !is_admin() ) {
  
     wp_register_style( 'foundation',get_template_directory_uri() . '/css/foundation.css', false );
     wp_enqueue_style( 'foundation' );
    
     wp_register_style( 'app',get_template_directory_uri() . '/css/app.css', false );
     wp_enqueue_style( 'app' );
     
     wp_register_style( 'offcanvas',get_template_directory_uri() . '/css/offcanvas.css', false );
     wp_enqueue_style( 'offcanvas' );
     

     // Load style.css to allow contents overwrite foundation & app css
     wp_register_style( 'style',get_template_directory_uri() . '/style.css', false );
     wp_enqueue_style( 'style' );


     wp_register_style( 'custom',get_template_directory_uri() . '/custom.css', false );
     wp_enqueue_style( 'custom' );

     
     wp_register_style( 'fontello',get_template_directory_uri() . '/css/fontello.css', false );
     wp_enqueue_style( 'fontello' );
     
     wp_register_style( 'google_font',"http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic&subset=latin,cyrillic", false );
     wp_enqueue_style( 'google_font' );

     wp_register_style( 'google_font2',"http://fonts.googleapis.com/css?family=PT+Serif:400,400italic,700&subset=latin,cyrillic", false );
     wp_enqueue_style( 'google_font2' );
     
  }
}  
add_action( 'init', 'reverie_css' );

function reverie_ie_css () {
    echo '<!--[if lt IE 9]>';
    echo '<link rel="stylesheet" href="'. get_template_directory_uri().'/css/ie.css">';
    echo '<![endif]-->';
}
add_action( 'wp_head', 'reverie_ie_css' );

// Enqueue js files
function reverie_scripts() {

global $is_IE;

  if ( !is_admin() ) {
  
  // Enqueue to header
     wp_deregister_script( 'jquery' );
     wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery.js' );
     wp_enqueue_script( 'jquery' );
     
     wp_register_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.foundation.js', array( 'jquery' ) );
     wp_enqueue_script( 'modernizr' );
 
  // Enqueue to footer
     wp_register_script( 'foundation', get_template_directory_uri() . '/js/foundation.min.js', array( 'jquery' ), false, true );
     wp_enqueue_script( 'foundation' );
     
     wp_register_script( 'offcanvas', get_template_directory_uri() . '/js/jquery.offcanvas.js', array( 'jquery' ), false, true );
     wp_enqueue_script( 'offcanvas' );
     
     wp_register_script( 'app', get_template_directory_uri() . '/js/app.js', array( 'jquery' ), false, true );
     wp_enqueue_script( 'app' );
     
     wp_register_script( 'tooltips', get_template_directory_uri() . '/js/jquery.foundation.tooltips.js', array( 'jquery' ), false, true );
     wp_enqueue_script( 'tooltips' );
     
        
     if ($is_IE) {
        wp_register_script ( 'html5shiv', "http://html5shiv.googlecode.com/svn/trunk/html5.js" , false, true);
        wp_enqueue_script ( 'html5shiv' );
     } 
     
     // Enable threaded comments 
     if ( (!is_admin()) && is_singular() && comments_open() && get_option('thread_comments') )
		wp_enqueue_script('comment-reply');
  }
}
add_action( 'init', 'reverie_scripts' );

// create widget areas: sidebar, footer
$sidebars = array('Sidebar');
foreach ($sidebars as $sidebar) {
	register_sidebar(array('name'=> $sidebar,
		'before_widget' => '<article id="%1$s" class="row widget %2$s"><div class="sidebar-section twelve columns">',
		'after_widget' => '</div></article>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
}
$sidebars = array('Footer');
foreach ($sidebars as $sidebar) {
	register_sidebar(array('name'=> $sidebar,
		'before_widget' => '<article id="%1$s" class="four columns widget %2$s"><div class="footer-section">',
		'after_widget' => '</div></article>',
		'before_title' => '<h6><strong>',
		'after_title' => '</strong></h6>'
	));
}

// return entry meta information for posts, used by multiple loops.
function reverie_entry_meta() {
    echo '<time class="updated hide-for-small" datetime="'. get_the_time('c') .'" pubdate>'. sprintf(__('<i class="icon-calendar"></i> %s.', 'reverie'), get_the_time('j.m.Y (l)'), get_the_time()) .'</time>';
    echo '<p class="byline author vcard hide-for-small">'. __('<i class="icon-user"></i>', 'reverie') .' <a href="'. get_author_posts_url(get_the_author_meta('id')) .'" rel="author" class="fn">'. get_the_author() .'</a>.</p>';
}

/* Customized the output of caption, you can remove the filter to restore back to the WP default output. Courtesy of DevPress. http://devpress.com/blog/captions-in-wordpress/ */
add_filter( 'img_caption_shortcode', 'cleaner_caption', 10, 3 );

function cleaner_caption( $output, $attr, $content ) {

	/* We're not worried abut captions in feeds, so just return the output here. */
	if ( is_feed() )
		return $output;

	/* Set up the default arguments. */
	$defaults = array(
		'id' => '',
		'align' => 'alignnone',
		'width' => '',
		'caption' => ''
	);

	/* Merge the defaults with user input. */
	$attr = shortcode_atts( $defaults, $attr );

	/* If the width is less than 1 or there is no caption, return the content wrapped between the [caption]< tags. */
	if ( 1 > $attr['width'] || empty( $attr['caption'] ) )
		return $content;

	/* Set up the attributes for the caption <div>. */
	$attributes = ' class="figure ' . esc_attr( $attr['align'] ) . '"';

	/* Open the caption <div>. */
	$output = '<figure' . $attributes .'>';

	/* Allow shortcodes for the content the caption was created for. */
	$output .= do_shortcode( $content );

	/* Append the caption text. */
	$output .= '<figcaption>' . $attr['caption'] . '</figcaption>';

	/* Close the caption </div>. */
	$output .= '</figure>';

	/* Return the formatted, clean caption. */
	return $output;
}

// Clean the output of attributes of images in editor. Courtesy of SitePoint. http://www.sitepoint.com/wordpress-change-img-tag-html/
function image_tag_class($class, $id, $align, $size) {
	$align = 'align' . esc_attr($align);
	return $align;
}
add_filter('get_image_tag_class', 'image_tag_class', 0, 4);
function image_tag($html, $id, $alt, $title) {
	return preg_replace(array(
			'/\s+width="\d+"/i',
			'/\s+height="\d+"/i',
			'/alt=""/i'
		),
		array(
			'',
			'',
			'',
			'alt="' . $title . '"'
		),
		$html);
}
add_filter('get_image_tag', 'image_tag', 0, 4);


// img unautop, Courtesy of Interconnectit http://interconnectit.com/2175/how-to-remove-p-tags-from-images-in-wordpress/
function img_unautop($pee) {
    $pee = preg_replace('/<p>\\s*?(<a .*?><img.*?><\\/a>|<img.*?>)?\\s*<\\/p>/s', '<figure>$1</figure>', $pee);
    return $pee;
}
add_filter( 'the_content', 'img_unautop', 30 );

// Pagination
function reverie_pagination() {
	global $wp_query;
 
	$big = 999999999; // This needs to be an unlikely integer
 
	// For more options and info view the docs for paginate_links()
	// http://codex.wordpress.org/Function_Reference/paginate_links
	$paginate_links = paginate_links( array(
		'base' => str_replace( $big, '%#%', get_pagenum_link($big) ),
		'current' => max( 1, get_query_var('paged') ),
		'total' => $wp_query->max_num_pages,
		'mid_size' => 5,
		'prev_next' => True,
	    'prev_text' => __('&laquo;'),
	    'next_text' => __('&raquo;'),
		'type' => 'list'
	) );
 
	// Display the pagination if more than one page is found
	if ( $paginate_links ) {
		echo '<div class="reverie-pagination">';
		echo $paginate_links;
		echo '</div><!--// end .pagination -->';
	}
}

/**
* A fallback when no navigation is selected by default, otherwise it throws some nasty errors in your face.
* From required+ Foundation http://themes.required.ch
*/
function reverie_menu_fallback() {
echo '<div class="alert-box secondary">';
// Translators 1: Link to Menus, 2: Link to Customize
   printf( __( 'Please assign a menu to the primary menu location under %1$s or %2$s the design.', 'reverie' ),
   sprintf( __( '<a href="%s">Menus</a>', 'reverie' ),
   get_admin_url( get_current_blog_id(), 'nav-menus.php' )
   ),
   sprintf( __( '<a href="%s">Customize</a>', 'reverie' ),
   get_admin_url( get_current_blog_id(), 'customize.php' )
   )
   );
   echo '</div>';
}

// Add Foundation 'active' class for the current menu item
function reverie_active_nav_class( $classes, $item ) {
    if ( $item->current == 1 || $item->current_item_ancestor == true ) {
        $classes[] = 'active';
    }
    return $classes;
}
add_filter( 'nav_menu_css_class', 'reverie_active_nav_class', 10, 2 );

/**
* Use the active class of ZURB Foundation on wp_list_pages output.
* From required+ Foundation http://themes.required.ch
*/
function reverie_active_list_pages_class( $input ) {

$pattern = '/current_page_item/';
    $replace = 'current_page_item active';

    $output = preg_replace( $pattern, $replace, $input );

    return $output;
}
add_filter( 'wp_list_pages', 'reverie_active_list_pages_class', 10, 2 );

/**
* class required_walker
* Custom output to enable the the ZURB Navigation style.
* Courtesy of Kriesi.at. http://www.kriesi.at/archives/improve-your-wordpress-navigation-menu-output
* From required+ Foundation http://themes.required.ch
*/
class reverie_walker extends Walker_Nav_Menu {

/**
* Specify the item type to allow different walkers
* @var array
*/
var $nav_bar = '';

function __construct( $nav_args = '' ) {

$defaults = array(
'item_type' => 'li',
'in_top_bar' => false,
);
$this->nav_bar = apply_filters( 'req_nav_args', wp_parse_args( $nav_args, $defaults ) );
}

function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {

        $id_field = $this->db_fields['id'];
        if ( is_object( $args[0] ) ) {
            $args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
        }
        return parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }

function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

global $wp_query;
$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

$class_names = $value = '';

$classes = empty( $item->classes ) ? array() : (array) $item->classes;
$classes[] = 'menu-item-' . $item->ID;

// Check for flyout
$flyout_toggle = '';
if ( $args->has_children && $this->nav_bar['item_type'] == 'li' ) {

if ( $depth == 0 && $this->nav_bar['in_top_bar'] == false ) {

$classes[] = 'has-flyout';
$flyout_toggle = '<a href="#" class="flyout-toggle"><span></span></a>';

} else if ( $this->nav_bar['in_top_bar'] == true ) {

$classes[] = 'has-dropdown';
$flyout_toggle = '';
}

}

$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

if ( $depth > 0 ) {
$output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';
} else {
$output .= $indent . ( $this->nav_bar['in_top_bar'] == true ? '<li class="divider"></li>' : '' ) . '<' . $this->nav_bar['item_type'] . ' id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';
}

$attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) .'"' : '';
$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) .'"' : '';
$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) .'"' : '';
$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) .'"' : '';

$item_output = $args->before;
$item_output .= '<a '. $attributes .'>';
$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
$item_output .= '</a>';
$item_output .= $flyout_toggle; // Add possible flyout toggle
$item_output .= $args->after;

$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
}

function end_el( &$output, $item, $depth = 0, $args = array() ) {

if ( $depth > 0 ) {
$output .= "</li>\n";
} else {
$output .= "</" . $this->nav_bar['item_type'] . ">\n";
}
}

function start_lvl( &$output, $depth = 0, $args = array() ) {

if ( $depth == 0 && $this->nav_bar['item_type'] == 'li' ) {
$indent = str_repeat("\t", 1);
     $output .= $this->nav_bar['in_top_bar'] == true ? "\n$indent<ul class=\"dropdown\">\n" : "\n$indent<ul class=\"flyout\">\n";
     } else {
$indent = str_repeat("\t", $depth);
     $output .= $this->nav_bar['in_top_bar'] == true ? "\n$indent<ul class=\"dropdown\">\n" : "\n$indent<ul class=\"level-$depth\">\n";
}
   }
}



// Presstrends
function presstrends() {

// Add your PressTrends and Theme API Keys
$api_key = 'xc11x4vpf17icuwver0bhgbzz4uewlu5ql38';
$auth = 'kw1f8yr8eo1op9c859qcqkm2jjseuj7zp';

// NO NEED TO EDIT BELOW
$data = get_transient( 'presstrends_data' );
if (!$data || $data == ''){
$api_base = 'http://api.presstrends.io/index.php/api/sites/add/auth/';
$url = $api_base . $auth . '/api/' . $api_key . '/';
$data = array();
$count_posts = wp_count_posts();
$count_pages = wp_count_posts('page');
$comments_count = wp_count_comments();
$theme_data = get_theme_data(get_stylesheet_directory() . '/style.css');
$plugin_count = count(get_option('active_plugins'));
$all_plugins = get_plugins();
foreach($all_plugins as $plugin_file => $plugin_data) {
$plugin_name .= $plugin_data['Name'];
$plugin_name .= '&';
}
$data['url'] = stripslashes(str_replace(array('http://', '/', ':' ), '', site_url()));
$data['posts'] = $count_posts->publish;
$data['pages'] = $count_pages->publish;
$data['comments'] = $comments_count->total_comments;
$data['approved'] = $comments_count->approved;
$data['spam'] = $comments_count->spam;
$data['theme_version'] = $theme_data['Version'];
$data['theme_name'] = $theme_data['Name'];
$data['site_name'] = str_replace( ' ', '', get_bloginfo( 'name' ));
$data['plugins'] = $plugin_count;
$data['plugin'] = urlencode($plugin_name);
$data['wpversion'] = get_bloginfo('version');
foreach ( $data as $k => $v ) {
$url .= $k . '/' . $v . '/';
}
$response = wp_remote_get( $url );
set_transient('presstrends_data', $data, 60*60*24);
}}
add_action('admin_init', 'presstrends');

// function sp_scroll_to_top(){
//     $speed = 800;               // скорость скролинга страницы
//     $at = 300;                  // сколько промотать вниз чтобы кнопка появилась
//     // $image = '/wp-content/themes/reverie/images/up.svg'; // адрес картинки для скрола, если переменная пустая, то выведется дефолтовая надпись Наверх
//     $colorFont = '#555';         // цвет шрифта надписи Наверх, необходима когда картинка не установлена
//     $hAlign = 'left';           // горизонтальное место расположения стрелки (left, right)
//     $vAlign = 'top';         // вертикальное выравнивание (bottom, top)
//     $color = 'rgba(0,0,0,0.1)';         // цвет фона при наведении
//     $width = '10';              // ширина активизирующейся зоны в процентах от ширины экрана
//     $margin = 25;                // количество пикселей для отступа от края экрана до картинки (надписи)
 
//     echo '

//     <style type="text/css">
//         #topcontrol:hover {
//             background:'.$color.';
//         }
//     </style>
//     <script type="text/javascript">
//     var scrolltotop={
//         setting: {startline:'.$at.', scrollto: 0, scrollduration:'.$speed.', fadeduration:[500, 100]},
//         controlHTML: "'.($image?'<img src=\"'.$image.'\" style=\"position: absolute;'.$vAlign.': 0; width:40px; color:#ffffff;'.
//         $hAlign.': 0;margin:'.$margin.'px;\" />':'<span style=\"position: absolute;'.$vAlign.
//         ': 0;'.$hAlign.': 0;margin:'.$margin.'px; margin-top:75px;font-size: 20px;color: '.$colorFont.';\">&uArr; Наверх</span>').'</b></div>",
//         anchorkeyword: "#top",
 
//         state: {isvisible:false, shouldvisible:false},
 
//         scrollup:function(){
//             if (!this.cssfixedsupport) {
//                 this.control.css({opacity:0}) //hide control immediately after clicking it
//             }
//             var dest=isNaN(this.setting.scrollto)? this.setting.scrollto : parseInt(this.setting.scrollto)
//             if (typeof dest=="string" && jQuery("#"+dest).length==1)
//                 dest=jQuery("#"+dest).offset().top
//             else
//                 dest=0
//             this.body.animate({scrollTop: dest}, this.setting.scrollduration);
//         },
 
//         keepfixed:function(){
//             var window=jQuery(window)
//             var controlx=window.scrollLeft() + window.width() - this.control.width();
//             var controly=window.scrollTop() + window.height() - this.control.height();
//             this.control.css({left:controlx+"px", top:controly+"px"})
//         },
 
//         togglecontrol:function(){
//             var scrolltop=jQuery(window).scrollTop()
//             if (!this.cssfixedsupport)
//                 this.keepfixed()
//             this.state.shouldvisible=(scrolltop>=this.setting.startline)? true : false
//             if (this.state.shouldvisible && !this.state.isvisible){
//                 this.control.stop().animate({opacity:1}, this.setting.fadeduration[0]).css("visibility", "visible")
//                 this.state.isvisible=true
//             }
//             else if (this.state.shouldvisible==false && this.state.isvisible){
//                 this.control.stop().animate({opacity:0}, this.setting.fadeduration[1], function(){
//                     $(this).css("visibility", "hidden")
//                 })
//                 this.state.isvisible=false
//             }
//         },
 
//         init:function(){
//             jQuery(document).ready(function($){
//                 var mainobj=scrolltotop
//                 var iebrws=document.all
//                 mainobj.cssfixedsupport=!iebrws || iebrws && document.compatMode=="CSS1Compat" && window.XMLHttpRequest
//                 mainobj.body=(window.opera)? (document.compatMode=="CSS1Compat"? $("html") : $("body")) : $("html,body")
//                 mainobj.control=$("<div class=\"hide-for-small\" id=\"topcontrol\" style=\"height: 100%;width: '.$width.'%;\">"+mainobj.controlHTML+"</div>")
//                     .css({position:mainobj.cssfixedsupport? "fixed" : "absolute", bottom:0, '.$hAlign.':0, opacity:0, cursor:"pointer"})
//                     .attr({title:"Наверх"})
//                     .click(function(){mainobj.scrollup(); return false})
//                     .appendTo("body")
//                 if (document.all && !window.XMLHttpRequest && mainobj.control.text()!="")
//                     mainobj.control.css({width:mainobj.control.width()})
//                 mainobj.togglecontrol()
//                 $("a[href=\"" + mainobj.anchorkeyword +"\"]").click(function(){
//                     mainobj.scrollup()
//                     return false
//                 })
//                 $(window).bind("scroll resize", function(e){
//                     mainobj.togglecontrol()
//                 })
//             })
//         }
//     }
//     scrolltotop.init()
// </script>
// ';
//  }
 
// add_action('wp_head', 'sp_scroll_to_top');



// ?>
<?php
register_sidebar( array(
'name' => 'Левый блок',
'id' => 'left_widget',
'before_widget' => '<div id="%1$s" class="%2$s widget">',
'after_widget' => '</div>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>'
) );




/* Функция для вывода последних комментариев в WordPress. Параметры:
$limit - сколко комментов выводить. По дефолту - 10
$ex - обрезка текста комментария до n символов. По дефолту - 45
$cat - Включить(5,12,35) или исключить(-5,-12,-35) категории, указываются id категорий через запятую. По дефолту - пусто - из всех категорий.
$echo - выводить на экран (1) или возвращать (0). По дефолту - 1
$gravatar - показывать иконку gravatar, указывается размер иконки, например, 20 - выведет иконку шириной и высотой в 20px

<ul>  
     <?php kama_recent_comments(10, 40); ?>  
</ul>  
===================================================================================== */
function kama_recent_comments($limit=10, $ex=45, $cat=0, $echo=1, $gravatar=''){
	global $wpdb;
	if($cat){
		$IN = (strpos($cat,'-')===false)?"IN ($cat)":"NOT IN (".str_replace('-','',$cat).")";
		$join = "LEFT JOIN $wpdb->term_relationships rel ON (p.ID = rel.object_id)
		LEFT JOIN $wpdb->term_taxonomy tax ON (rel.term_taxonomy_id = tax.term_taxonomy_id)";
		$and = "AND tax.taxonomy = 'category'
		AND tax.term_id $IN";
	}
	$sql = "SELECT comment_ID, comment_post_ID, comment_content, post_title, guid, comment_author, comment_author_email
	FROM $wpdb->comments com
		LEFT JOIN $wpdb->posts p ON (com.comment_post_ID = p.ID) {$join}
    WHERE comment_approved = '1'
		AND comment_type = '' {$and}
	ORDER BY comment_date DESC
    LIMIT $limit"; 

    $results = $wpdb->get_results($sql);

    $out = '';
    foreach ($results as $comment){
		if($gravatar)
			$grava = '<img src="http://www.gravatar.com/avatar/'. md5($comment->comment_author_email) .'?s=$gravatar&default=" alt="" width="'. $gravatar .'" height="'. $gravatar.'" />';
		$comtext = strip_tags($comment->comment_content);
		$leight = (int) iconv_strlen( $comtext, 'utf-8' );
		if($leight > $ex) $comtext =  iconv_substr($comtext,0,$ex, 'UTF-8').' …';
		$out .= "\n<li>$grava<b>".strip_tags($comment->comment_author). ": </b><a href='". get_comment_link($comment->comment_ID) ."' title='к записи: {$comment->post_title}'>{$comtext}</a></li>";
    }

    if ($echo) echo $out;
	else return $out;
}

?>