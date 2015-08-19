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


/** Organisation Types **/


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


/** ItemTypes **/

// Produces schema.org markup for the 'offer' itemtype
function ws_itemtype_offer($atts, $content = null)
{
	if ($content != null){
		$text = $content;
	}
	else{
		$text = $atts[0];
	}
	return '<span itemscope itemtype="http://schema.org/Offer">'.do_shortcode($text).'</span>';
}
add_shortcode('it_product', 'ws_itemtype_offer');

// Produces schema.org markup for the 'product' itemtype
function ws_itemtype_product($atts, $content = null)
{
	if ($content != null){
		$text = $content;
	}
	else{
		$text = $atts[0];
	}
	return '<span itemscope itemtype="http://schema.org/Product">'.do_shortcode($text).'</span>';
}
add_shortcode('it_product', 'ws_itemtype_product');


/** Specific itemprop markup **/

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

// Produces schema.org markup for the 'addressLocality' itemprop
function ws_itemprop_addressLocality($atts, $content = null)
{
	if ($content != null){
		$text = $content;
	}
	else{
		$text = $atts[0];
	}
	return '<span itemprop="addressLocality">'.do_shortcode($text).'</span>';
}
add_shortcode('ip_addressLocality', 'ws_itemprop_addressLocality');

// Produces schema.org markup for the 'addressRegion' itemprop
function ws_itemprop_addressRegion($atts, $content = null)
{
	if ($content != null){
		$text = $content;
	}
	else{
		$text = $atts[0];
	}
	return '<span itemprop="addressRegion">'.do_shortcode($text).'</span>';
}
add_shortcode('ip_addressRegion', 'ws_itemprop_addressRegion');

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

// Produces schema.org markup for the 'itemOffered' itemprop
function ws_itemprop_itemoffered($atts, $content = null)
{
	if ($content != null){
		$text = $content;
	}
	else{
		$text = $atts[0];
	}
	return '<span itemprop="itemOfferred" itemscope itemtype="http://schema.org/Product">'.do_shortcode($text).'</span>';
}
add_shortcode('ip_itemoffered', 'ws_itemprop_itemoffered');

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

// Produces schema.org markup for the 'postalCode' itemprop
function ws_itemprop_postalCode($atts, $content = null)
{
	if ($content != null){
		$text = $content;
	}
	else{
		$text = $atts[0];
	}
	return '<span itemprop="postalCode">'.do_shortcode($text).'</span>';
}
add_shortcode('ip_postalCode', 'ws_itemprop_postalCode');

// Produces schema.org markup for the 'price' itemprop
function ws_itemprop_price($atts, $content = null)
{
	if ($content != null){
		$text = $content;
	}
	else{
		$text = $atts[0];
	}
	return '<span itemprop="price">'.do_shortcode($text).'</span>';
}
add_shortcode('ip_price', 'ws_itemprop_price');

// Produces schema.org markup for the 'priceCurrency' itemprop
function ws_itemprop_pricecurrency($atts, $content = null)
{
	if ($content != null){
		$text = $content;
	}
	else{
		$text = $atts[0];
	}
	return '<span itemprop="priceCurrency" content='.$atts[0].'>'.do_shortcode($text).'</span>';
}
add_shortcode('ip_priceCurrency', 'ws_itemprop_pricecurrency');

// Produces schema.org markup for the 'streetAddress' itemprop
function ws_itemprop_streetAddress($atts, $content = null)
{
	if ($content != null){
		$text = $content;
	}
	else{
		$text = $atts[0];
	}
	return '<span itemprop="streetAddress">'.do_shortcode($text).'</span>';
}
add_shortcode('ip_streetAddress', 'ws_itemprop_streetAddress');

// Produces schema.org markup for the 'phone' itemprop
function ws_itemprop_telephone($atts, $content = null)
{
	if ($content != null){
		$text = $content;
	}
	else{
		$text = $atts[0];
	}
	return '<span itemprop="telephone" content='.$atts[0].'>'.do_shortcode($text).'</span>';
}
add_shortcode('ip_telephone', 'ws_itemprop_telephone');






