<style>

	.topbar
	{
		color: <?php echo esc_html(GBT_Opt::getOption('topbar_font_color')); ?>;
		font-size: <?php echo esc_html(GBT_Opt::getOption('topbar_font_size') . "px"); ?>;
	}

	body.header-layout-full .topbar,
	.topbar .topbar-content
	{
		background-color: <?php echo esc_html(GBT_Opt::getOption('topbar_bg_color')) ?>;
	}

	.topbar a:hover
	{
		color: <?php echo esc_html(GBT_Opt::getOption('topbar_accent_color')) ?>;
	}

	.topbar .navigation-foundation > ul > li > a > span:before
	{
		background-color: <?php echo esc_html(GBT_Opt::getOption('topbar_font_color')); ?>;
	}

	body.header-layout-full .topbar:after,
	body.header-layout-boxed .topbar .topbar-content
	{
		border-color: <?php echo esc_html(GBT_Opt::getOption('topbar_ultra_light_gray')) ?>;
	}

</style>