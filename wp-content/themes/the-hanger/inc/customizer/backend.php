<?php

require_once('backend/gutenberg.php');

if ( GETBOWTIED_KIRKI_IS_ACTIVE ) {

    require_once('backend/index.php');
    require_once('backend/go-to-page.php');

    require_once('backend/global/index.php');
	require_once('backend/header/index.php');
	require_once('backend/fonts/index.php');
	require_once('backend/blog/index.php');
	require_once('backend/footer/index.php');
	require_once('backend/social/index.php');

	if (GETBOWTIED_WOOCOMMERCE_IS_ACTIVE) {
		require_once('backend/shop/index.php');
		require_once('backend/product/index.php');
	}
}