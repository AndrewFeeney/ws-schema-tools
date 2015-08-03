<?php
/*
Plugin Name: WebSpanner - SchemaTools
Plugin URI: http://www.makeweb.com.au
Description: Add schema.org microdata to your wordpress site using shortcodes.
Author: Andrew Feeney
Version: 0.1
Author URI: http://www.makeweb.com.au
*/

// Get development helper functions
require ('includes/dev-helpers.php');

/* 
 *	GENERAL SHORTCODES 
 */


// Produces schema.org markup for the itemscope property
function ws_itemscope($atts, $content = null)
{
	$a = shortcode_atts([
		'itemtype' => "localBusiness"
	], $atts);
	return '<div itemscope="itemscope" itemtype="http://schema.org/'.$a['itemtype'].'">'.do_shortcode($content).'</div>';
}

add_shortcode('itemscope', 'ws_itemscope');


// Produces schema.org markup for itemprop properties
function ws_itemprop($atts, $content = null)
{
	$a = shortcode_atts([
		'itemprop' => ""
	], $atts);
	
	if (isset($a['itemprop']))
	{
		$itemprop = "itemprop=".$a['itemprop'];
	}
	else
	{
		$itemprop = "";
	}
	
	return '<span itemprop="'.$a['itemprop'].'">'.do_shortcode($content).'</span>';
}

add_shortcode('itemprop', 'ws_itemprop');



/* 
 *	SPECIFIC SHORTCODES 
 */


/** Local Business Types **/


// Produces schema.org markup for the localBusiness itemscope property
function ws_localBusiness($atts, $content = null)
{
	return '<div itemscope="itemscope" itemtype="http://schema.org/localBusiness">'.do_shortcode($content).'</div>';
}

add_shortcode('localbusiness', 'ws_localBusiness');


/** Specific itemprop markup **/


// Produces schema.org markup for the 'name' itemprop
function ws_itemprop_name($atts, $content = null)
{
	return '<span itemprop="name">'.do_shortcode($content).'</span>';
}

add_shortcode('ip_name', 'ws_itemprop_name');


// Produces schema.org markup for the 'description' itemprop
function ws_itemprop_description($atts, $content = null)
{
	return '<span itemprop="description">'.do_shortcode($content).'</span>';
}

add_shortcode('ip_desc', 'ws_itemprop_description');


// Produces schema.org markup for the 'address' itemprop
function ws_itemprop_address($atts, $content = null)
{
	return '<span itemprop="address" itemscope="itemscope" itemtype="http://schema.org/PostalAddress">'.do_shortcode($content).'</span>';
}

add_shortcode('ip_desc', 'ws_itemprop_address');




