<?php
/*
Plugin Name: Show all categories
Version: 1.0.1
Author: Rush
Author URI: http://www.gayan.co.au
Plugin URI: http://www.gayan.co.au
Description: This is a plug-in showing all the categories including categories with no any post assigned

*/


/* Start Adding Functions Below this Line */
add_filter( 'widget_categories_args', 'wpb_force_empty_cats' );
function wpb_force_empty_cats($cat_args) {
	    $cat_args['hide_empty'] = 0;
	    return $cat_args;
	
}

/* Stop Adding Functions Below this Line */
?>
