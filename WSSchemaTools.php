<?php
/*
Plugin Name: WebSpanner - SchemaTools
Plugin URI: http://www.makeweb.com.au
Description: Add schema.org microdata to your wordpress site using shortcodes.
Author: Andrew Feeney
Version: 0.1
Author URI: http://www.makeweb.com.au
*/

// Initiliase plugin
require('init.php');

// Adds markup to body tag if setting enabled. Must be the last class to be added to work properly, hence the arbitrarily high priority order number
if (get_option('add-schema-to-body'))
{
	add_filter('body_class', 'ws_body_tag_append', 1000);
}