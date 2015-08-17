<?php
/*
 *	WebSpanner SchemaTools /includes/shortcodes.php
 */
 
 
/* 
 *	GENERAL SHORTCODES 
 */


// Produces schema.org markup for the itemtype property
function ws_itemtype($atts, $content = null)
{
	return '<div '.$itemprop.' itemscope="itemscope" itemtype="http://schema.org/'.$atts[0].'">'.do_shortcode($content).'</div>';
}

add_shortcode('itemtype', 'ws_itemtype');


// Produces schema.org markup for itemprop properties
function ws_itemprop($atts, $content = null)
{
	return '<span itemprop="'.$atts[0].'">'.do_shortcode($content).'</span>';
}

add_shortcode('itemprop', 'ws_itemprop');



/* 
 *	SPECIFIC SHORTCODES 
 */


/** Local Business Types **/


// Produces schema.org markup for the localBusiness itemscope property
function ws_localBusiness($atts, $content = null)
{
	return '<div itemscope="itemscope" itemtype="http://schema.org/LocalBusiness">'.do_shortcode($content).'</div>';
}
add_shortcode('localbusiness', 'ws_localBusiness');


// Produces schema.org markup for the ProfessionalService itemscope property
function ws_professionalService($atts, $content = null)
{
	return '<div itemscope="itemscope" itemtype="http://schema.org/ProfessionalService">'.do_shortcode($content).'</div>';
}
add_shortcode('professionalservice', 'ws_professionalService');



/** Specific itemprop markup **/

// Produces schema.org markup for the 'makesOffer' itemprop
function ws_itemprop_makesoffer($atts, $content = null)
{
	if ($content != null){
		$text = $content;
	}
	else{
		$text = $atts[0];
	}
	return '<span itemprop="makesOffer" itemscope itemtype="http://schema.org/Offer">'.do_shortcode($text).'</span>';
}
add_shortcode('ip_makesoffer', 'ws_itemprop_makesoffer');

// Produces schema.org markup for the 'name' itemprop
function ws_itemprop_name($atts, $content = null)
{
	if ($content != null){
		$text = $content;
	}
	else{
		$text = $atts[0];
	}
	return '<span itemprop="name">'.do_shortcode($text).'</span>';
}

add_shortcode('ip_name', 'ws_itemprop_name');


// Produces schema.org markup for the 'description' itemprop
function ws_itemprop_description($atts, $content = null)
{
	if ($content != null){
		$text = $content;
	}
	else{
		$text = $atts[0];
	}
	return '<span itemprop="description">'.do_shortcode($text).'</span>';
}

add_shortcode('ip_description', 'ws_itemprop_description');


// Produces schema.org markup for the 'address' itemprop
function ws_itemprop_address($atts, $content = null)
{
	if ($content != null){
		$text = $content;
	}
	else{
		$text = $atts[0];
	}
	return '<span itemprop="address" itemscope="itemscope" itemtype="http://schema.org/PostalAddress">'.do_shortcode($text).'</span>';
}

add_shortcode('ip_address', 'ws_itemprop_address');

// Produces schema.org markup for the 'phone' itemprop
function ws_itemprop_telephone($atts, $content = null)
{
	if ($content != null){
		$text = $content;
	}
	else{
		$text = $atts[0];
	}
	return '<span itemprop="telephone">'.do_shortcode($text).'</span>';
}

add_shortcode('ip_telephone', 'ws_itemprop_telephone');





