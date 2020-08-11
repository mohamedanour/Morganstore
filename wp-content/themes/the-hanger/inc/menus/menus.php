<?php

// =============================================================================
// Register Menus
// =============================================================================

if ( ! function_exists('getbowtied_get_theme_menus') ) :
function getbowtied_get_theme_menus() {
	$menus = array(
		'gbt_topbar' 		=> __('Top Bar', 'the-hanger'),
		'gbt_nav_but' 		=> __('Navigation Button', 'the-hanger'),
		'gbt_primary' 		=> __('Main Navigation', 'the-hanger'),
		'gbt_alt_primary'	=> __('Alternative Main Navigation', 'the-hanger'),
		'gbt_secondary' 	=> __('Secondary Navigation', 'the-hanger'),
		'gbt_footer' 		=> __('Footer Menu', 'the-hanger'),
	);

	return $menus;
}
endif;

if ( ! function_exists('getbowtied_theme_menus') ) :
function getbowtied_theme_menus() {
	register_nav_menus( getbowtied_get_theme_menus() );
}
add_action( 'after_setup_theme', 'getbowtied_theme_menus' );
endif;