<style>	

	.site-header-style-1,
	.header-sticky-blog,
	.header-sticky-product,
	.woocommerce-store-notice
	{
		font-size: <?php echo esc_html(GBT_Opt::getOption('header_font_size') . "px"); ?>;
	}

	.site-header-style-1,
	.site-header-style-1 .header_search_input,
	.site-header-style-1 .select2.select2-container--open .select2-selection,
	.site-header-style-1 .header_search_button,
	.site-header-style-1 .header-content .search-form .search-field,
	.site-header-style-1 .woocommerce-product-search .search-field,
	.header-sticky-blog,
	.header-sticky-product
	{
		color: <?php echo esc_html(GBT_Opt::getOption('header_font_color')); ?>;
	}

	.site-header-style-1 .header-content .search-form .search-field::-ms-input-placeholder,
	.site-header-style-1 .woocommerce-product-search .search-field::-ms-input-placeholder
	{
		color: <?php echo esc_html(GBT_Opt::getOption('header_font_color')); ?>;
	}

	.site-header-style-1 .header-content .search-form .search-field::-webkit-input-placeholder,
	.site-header-style-1 .woocommerce-product-search .search-field::-webkit-input-placeholder
	{
		color: <?php echo esc_html(GBT_Opt::getOption('header_font_color')); ?>;
	}

	.site-header-style-1 .header-content .search-form .search-field::-moz-placeholder,
	.site-header-style-1 .woocommerce-product-search .search-field::-moz-placeholder
	{
		color: <?php echo esc_html(GBT_Opt::getOption('header_font_color')); ?>;
	}

	body.header-layout-full .site-header-style-1,
	.site-header-style-1 .header-content,
	.header-sticky-blog,
	.header-sticky-product
	{
		background-color: <?php echo esc_html(GBT_Opt::getOption('header_background_color')) ?>;
	}

	.site-header-style-1 a:hover,
	.site-header-style-1 .header_search_button:hover,
	.header-sticky-blog .header-sticky-blog-content .header-sticky-blog-buttons ul li a:hover,
	.header-sticky-product .header-sticky-product-content .header-sticky-product-buttons ul li a:hover
	{
		color: <?php echo esc_html(GBT_Opt::getOption('header_accent_color')) ?>;
	}

	.site-header-style-1 .header-tools .tools_badge
	{
		color: <?php echo esc_html(GBT_Opt::getOption('header_background_color')); ?>;
		background-color: <?php echo esc_html(GBT_Opt::getOption('header_accent_color')) ?>;
	}

	.site-header-style-1 .site-logo img
	{
		width: <?php echo esc_html(GBT_Opt::getOption('header_logo_width') . "px"); ?>;
	}

	.site-header-style-1 .gbt-mega-dropdown-button,
	.header-mobiles-wrapper .header-mobiles-content .header-mobiles-mega-dropdown-button
	{
		color: <?php echo esc_html(GBT_Opt::getOption('header_background_color')); ?>;
		background-color: <?php echo esc_html(GBT_Opt::getOption('header_font_color')) ?>;
	}

	.header-sticky-product .header-sticky-product-content .header-sticky-product-add-to-cart a,
	.header-sticky-product .header-sticky-product-content .header-sticky-product-add-to-cart a span
	{
		color: <?php echo esc_html(GBT_Opt::getOption('header_background_color')); ?> !important;
		background-color: <?php echo esc_html(GBT_Opt::getOption('header_font_color')) ?>;
	}

	.gbt-mega-dropdown-wrapper:hover .gbt-mega-dropdown-button,
	.header-sticky-product .header-sticky-product-content .header-sticky-product-add-to-cart a:hover,
	.scroll-progress-bar-container .scroll-progress-bar
	{
		color: <?php echo esc_html(GBT_Opt::getOption('header_background_color')); ?>;
		background-color: <?php echo esc_html(GBT_Opt::getOption('header_accent_color')) ?>;
	}

	.gbt-mega-dropdown-wrapper .gbt-mega-dropdown-button:before
	{
		background: linear-gradient(to right, rgba(0,0,0,0) 0%, rgba(<?php echo getbowtied_hex2rgb(GBT_Opt::getOption('header_font_color')) ?>, 1) 25%);
	}

	.gbt-mega-dropdown-wrapper:hover .gbt-mega-dropdown-button:before
	{
		background: linear-gradient(to right, rgba(0,0,0,0) 0%, rgba(<?php echo getbowtied_hex2rgb(GBT_Opt::getOption('header_accent_color')) ?>, 1) 25%);
	}

	.site-header-style-1 .navigation-foundation > ul > li > a > span:before
	{
		background-color: <?php echo esc_html(GBT_Opt::getOption('header_font_color')); ?>;
	}

	.site-header-style-1 .select2 .select2-selection,
	.header-secondary-navigation,
	.header-sticky-blog .header-sticky-blog-content .header-sticky-blog-now-reading,
	.header-sticky-product .header-sticky-product-content .header-sticky-product-now-reading
	{
		color: <?php echo esc_html(GBT_Opt::getOption('header_medium_gray')) ?>;
	}

	.site-header-style-1 .header_search_input::-ms-input-placeholder
	{
		color: <?php echo esc_html(GBT_Opt::getOption('header_medium_gray')) ?>;
	}

	.site-header-style-1 .header_search_input::-webkit-input-placeholder
	{
		color: <?php echo esc_html(GBT_Opt::getOption('header_medium_gray')) ?>;
	}

	.site-header-style-1 .header_search_input::-moz-placeholder
	{
		color: <?php echo esc_html(GBT_Opt::getOption('header_medium_gray')) ?>;
	}

	.header-layout-full .site-header-style-1:after,
	.header-layout-boxed .site-header-style-1 .header-content:after,
	.site-header-style-1 .header-content .header-line-1 .header-line-1-wrapper .header-search .header_search_form,
	.site-header-style-1 .header-content .header-line-1 .header-line-1-wrapper .header-search .search-form,
	.site-header-style-1 .header-content .header-line-1 .header-line-1-wrapper .header-search .woocommerce-product-search,
	.header-sticky-blog .header-sticky-blog-content .header-sticky-blog-now-reading,
	.header-sticky-blog .header-sticky-blog-content .header-sticky-blog-buttons,
	.header-sticky-blog .header-sticky-blog-content .header-sticky-blog-buttons ul li a,
	.header-sticky-product .header-sticky-product-content .header-sticky-product-now-reading,
	.header-sticky-product .header-sticky-product-content .header-sticky-product-buttons,
	.header-sticky-product .header-sticky-product-content .header-sticky-product-buttons ul li a
	{
		border-color: <?php echo esc_html(GBT_Opt::getOption('header_ultra_light_gray')) ?>;
	}

	.site-header-style-1 .header_search_form:before,
	.site-header-style-1 .header-content .search-form:before,
	.site-header-style-1 .select2:before,
	.site-header-style-1 .woocommerce-product-search:before
	{
		background-color: <?php echo esc_html(GBT_Opt::getOption('header_dark_gray')) ?>;
	}

</style>
