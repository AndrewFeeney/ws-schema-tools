<?php
/*
 *	WepSpanner SchemaTools init.php
 *
 *	Prepares the plugin
 *
 */
	
// Get development helper functions
require ('includes/dev-helpers.php');

// Get plugin functions
require ('functions.php');

// Get shortcodes
require ('includes/shortcodes.php');

// Add action to create admin menu
add_action( 'admin_menu', 'SchemaTools_add_menu' );

// Add action to register settings
add_action( 'admin_init', 'SchemaTools_register_settings' );



?>