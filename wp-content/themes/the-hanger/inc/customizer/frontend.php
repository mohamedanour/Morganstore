<?php

//remove_theme_mods(); // DEBUG

function theme_customiser_styles() {
			
	ob_start();

	include('frontend/global.css.php');
	include('frontend/topbar.css.php');
	include('frontend/header-style-1.css.php');
	include('frontend/header-style-2.css.php');
	include('frontend/header-mobiles.css.php');
	include('frontend/dropdowns.css.php');
	include('frontend/styling.css.php');
	include('frontend/fonts.css.php');	
	include('frontend/buttons.css.php');
	include('frontend/shop.css.php');
	include('frontend/widgets.css.php');
	include('frontend/footer.css.php');
	
	include('frontend/gray-dark.css.php');
	include('frontend/gray-medium.css.php');
	include('frontend/gray-light.css.php');
	include('frontend/gray-ultra-light.css.php');

	include('frontend/catalog_mode.css.php');

	include('frontend/gutenberg.css.php');

	$custom_code = str_replace(array("\r\n", "\r"), "\n", ob_get_clean());
	$lines = explode("\n", $custom_code);
	$new_lines = array();
	foreach ($lines as $i => $line) { if(!empty($line)) $new_lines[] = trim($line); }
	echo implode($new_lines);
}

add_action( 'wp_head', 'theme_customiser_styles', 99 );
