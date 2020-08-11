<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

//==============================================================================
//  Enqueue Editor Assets
//==============================================================================
add_action( 'enqueue_block_editor_assets', 'gbt_18_th_slider_editor_assets' );
if ( ! function_exists( 'gbt_18_th_slider_editor_assets' ) ) {
	function gbt_18_th_slider_editor_assets() {

		wp_enqueue_script(
			'gbt_18_th_slide_script',
			plugins_url( 'blocks/slide.js', __FILE__ ),
			array( 'wp-blocks', 'wp-components', 'wp-editor', 'wp-i18n', 'wp-element' )
		);

		wp_enqueue_script(
			'gbt_18_th_slider_script',
			plugins_url( 'blocks/slider.js', __FILE__ ),
			array( 'wp-blocks', 'wp-components', 'wp-editor', 'wp-i18n', 'wp-element' )
		);

		add_action( 'init', function() {
			wp_set_script_translations( 'gbt_18_th_slide_script', 'the-hanger-extender', plugin_dir_path( __FILE__ ) . 'languages' );
			wp_set_script_translations( 'gbt_18_th_slider_script', 'the-hanger-extender', plugin_dir_path( __FILE__ ) . 'languages' );
		});

		wp_enqueue_style(
			'gbt_18_th_slider_editor_styles',
			plugins_url( 'assets/css/backend/editor.css', __FILE__ ),
			array( 'wp-edit-blocks' ),
			filemtime(plugin_dir_path(__FILE__) . 'assets/css/backend/editor.css')
		);
	}
}

//==============================================================================
//  Enqueue Frontend Assets
//==============================================================================
add_action( 'enqueue_block_assets', 'gbt_18_th_slider_assets' );
if ( ! function_exists( 'gbt_18_th_slider_assets' ) ) {
	function gbt_18_th_slider_assets() {

		wp_enqueue_style(
			'gbt_18_th_slider_styles',
			plugins_url( 'assets/css/frontend/style.css', __FILE__ ),
			array(),
			filemtime(plugin_dir_path(__FILE__) . 'assets/css/frontend/style.css')
		);

		$theme = wp_get_theme();
		if ( $theme->template != 'the-hanger') {
			$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
			wp_enqueue_style(
				'swiper',
				plugins_url( 'vendor/swiper/css/swiper'.$suffix.'.css', __FILE__ ),
				array(),
				filemtime(plugin_dir_path(__FILE__) . 'vendor/swiper/css/swiper'.$suffix.'.css')
			);
			wp_enqueue_script(
				'swiper',
				plugins_url( 'vendor/swiper/js/swiper'.$suffix.'.js', __FILE__ ),
				array()
			);
		}

		wp_enqueue_script(
			'gbt_18_th_slider_script',
			plugins_url( 'assets/js/slider.js', __FILE__ ),
			array( 'jquery' )
		);
	}
}
