<style>	

	.site-header-style-2
	{
		font-size: <?php echo esc_html(GBT_Opt::getOption('simple_header_font_size') . "px"); ?>;
	}

	.site-header-style-2
	{
		color: <?php echo esc_html(GBT_Opt::getOption('simple_header_font_color')); ?>;
	}

	body.header-layout-full .site-header-style-2,
	.site-header-style-2 .header-content
	{
		background-color: <?php echo esc_html(GBT_Opt::getOption('simple_header_background_color')) ?>;
	}

	.site-header-style-2 a:hover
	{
		color: <?php echo esc_html(GBT_Opt::getOption('simple_header_accent_color')) ?>;
	}

	.site-header-style-2 .header-tools .tools_badge
	{
		color: <?php echo esc_html(GBT_Opt::getOption('simple_header_background_color')); ?>;
		background-color: <?php echo esc_html(GBT_Opt::getOption('simple_header_accent_color')) ?>;
	}

	.site-header-style-2 .site-logo img
	{
		width: <?php echo esc_html(GBT_Opt::getOption('simple_header_logo_width') . "px"); ?>;
	}

	.site-header-style-2 .navigation-foundation > ul > li > a > span:before
	{
		background-color: <?php echo esc_html(GBT_Opt::getOption('simple_header_font_color')); ?>;
	}

	.header-layout-full .site-header-style-2.header-sticky:after,
	.header-layout-boxed .site-header-style-2.header-sticky .header-content:after,
	.header-layout-full .site-header-style-2:not(.header-sticky),
	.header-layout-boxed .site-header-style-2:not(.header-sticky) > .row
	{
		border-color: <?php echo esc_html(GBT_Opt::getOption('simple_header_ultra_light_gray')) ?>;
	}

	.site-search.position-top .header-search .header_search_form,
	.site-search.position-top .header-content .header-search .search-form,
	.site-search.position-top .header-content .header-search .woocommerce-product-search,
	.off-canvas.site-search
	{
		border-color: <?php echo esc_html(GBT_Opt::getOption('dropdowns_ultra_light_gray')) ?>;
	}

	.site-search.position-top .header-search .header_search_form .woocommerce-product-search:before,
	.site-search.position-top .header-search .header_search_form:before,
	.site-search.position-top .header-content .search-form:before
	{
		background-color: <?php echo esc_html(GBT_Opt::getOption('dropdowns_font_color')); ?>;
	}

</style>
