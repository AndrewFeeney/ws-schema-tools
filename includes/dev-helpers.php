<?php
/* 
 * dev-helpers.php
 *
 * WebSpanner Development Helper Functions 
 *
 */
 
// Lists all available shortcodes shortcodes
function ws_list_shortcodes()
{
	global $shortcode_tags;
	echo "<pre>"; print_r($shortcode_tags); echo "</pre>";
}
add_shortcode('list_shortcodes', 'list_shortcodes');






?>