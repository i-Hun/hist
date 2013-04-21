
bookmark-template.php

		$output .= $link_after;

		$output .= '</a>';
////////////////////////////////////////////
		$output .= '<br>';
		$output .= '<div class="link_description">';
////////////////////////////////////////////
		if ( $show_updated && $bookmark->recently_updated )
			$output .= get_option('links_recently_updated_append');

		if ( $show_description && '' != $desc )
			$output .= $between . $desc;
////////////////////////////////////////////	
		$output .= '</div>';
////////////////////////////////////////////
		if ( $show_rating )
			$output .= $between . sanitize_bookmark_field('link_rating', $bookmark->link_rating, $bookmark->link_id, 'display');




=============================================================

category-template.php
 * @param string $after Optional. After list.
 * @return string
 */
function the_tags( $before = null, $sep = ', ', $after = '' ) {
	if ( null === $before )
		$before = __('<i class="hide-on-phones tags icon-tags"></i>');
	echo get_the_tag_list($before, $sep, $after);
}
// function the_tags( $before = null, $sep = ', ', $after = '' ) {
// 	if ( null === $before )

==============================================================
Замена иконки в \wp-includes\images\rss.png