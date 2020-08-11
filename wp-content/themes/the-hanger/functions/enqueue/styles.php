<?php

// =============================================================================
// Enqueue Styles (Front-end)
// =============================================================================

if ( ! function_exists('getbowtied_styles') ) :
function getbowtied_styles() {
    
    if ( GETBOWTIED_WOOCOMMERCE_IS_ACTIVE ) {
		wp_enqueue_style('select2');
	}
	
    wp_enqueue_style('getbowtied-styles', get_template_directory_uri() . '/css/styles.css', NULL, getbowtied_theme_version(), 'all');

}
add_action( 'wp_enqueue_scripts', 'getbowtied_styles' );
endif;