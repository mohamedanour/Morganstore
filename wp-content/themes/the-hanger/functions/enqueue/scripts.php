<?php

// =============================================================================
// Enqueue Scripts
// =============================================================================

if ( ! function_exists('getbowtied_scripts') ) :
function getbowtied_scripts() {

	// In Header

	// none

	
	// In Footer

	if ( GETBOWTIED_WOOCOMMERCE_IS_ACTIVE ) {
		wp_enqueue_script('select2');
		wp_enqueue_script('flexslider');
		wp_enqueue_script('wc-single-product');
		wp_enqueue_script('wc-add-to-cart-variation');
	}

	if ( GETBOWTIED_VISUAL_COMPOSER_IS_ACTIVE) // If VC exists/active load scripts after VC
	{
		$dependencies = array('jquery', 'wpb_composer_front_js');
	}
	else // Do not depend on VC
	{
		$dependencies = array('jquery');
	}

	wp_enqueue_script('getbowtied-scripts', get_template_directory_uri() . '/js/scripts-dist.js', $dependencies, getbowtied_theme_version(), TRUE);

	// Send wp variables to js
	
	$wp_js_vars = array(
		'select_placeholder'        	=> __( 'Choose an option', 'the-hanger' ),
		'blog_pagination_type' 			=> GBT_Opt::getOption('blog_pagination'),
		'shop_pagination_type' 			=> GBT_Opt::getOption('shop_pagination'),
		'accent_color' 					=> GBT_Opt::getOption('accent_color'),
		'shop_display'					=> GBT_Opt::getOption('shop_layout_style'),
		'is_customize_preview'			=> is_customize_preview(),
		'accordion_description'			=> GBT_Opt::getOption('description_accordion')
	);

	wp_localize_script( 'getbowtied-scripts', 'wp_js_var', $wp_js_vars );

	if (is_singular() && comments_open() && get_option( 'thread_comments')) {
		wp_enqueue_script('comment-reply');
	}

}
add_action( 'wp_enqueue_scripts', 'getbowtied_scripts' );
endif;
