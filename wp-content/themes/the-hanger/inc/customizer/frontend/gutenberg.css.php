<style>
	
	.wp-block-file__button,
	.wp-block-cover .wp-block-cover-text,
	.wp-block-button,
	.gbt_18_th_slider_wrapper .gbt_18_th_slide_title,
	.gbt_18_th_slider_wrapper .gbt_18_th_slide_description,
	.gbt_18_th_slider_wrapper .gbt_18_th_slide_button,
	.gbt_18_th_slider_wrapper .swiper-pagination-bullet,
	.wp-block-latest-posts li a
	{
		font-family: 
		<?php echo "'" . GBT_Opt::getOption('secondary_font')['font-family'] . "'," ?>
		sans-serif;
	}

	.wp-block-button.is-style-outline .wp-block-button__link:hover
	{
		color: <?php echo esc_html(GBT_Opt::getOption('accent_color')); ?> !important;
	}

	.wp-block-pullquote blockquote:not(.has-text-color) cite,
	.wp-block-quote cite
	{
		color: <?php echo esc_html(GBT_Opt::getOption('secondary_color')); ?>;
	}

	.wp-block-preformatted
	{
		color: <?php echo esc_html(GBT_Opt::getOption('primary_color')); ?>;
	}

	.wp-block-latest-posts__post-date
	{
		color: <?php echo esc_html(GBT_Opt::getOption('content_dark_gray')) ?>;;
	}

	.wp-block-button.is-style-outline .wp-block-button__link:not(.has-background):hover,
	.wp-block-button.is-style-outline .wp-block-button__link:hover
	{
		border-color: <?php echo esc_html(GBT_Opt::getOption('accent_color')); ?>;
	}

	.wp-block-button .wp-block-button__link:hover
	{
		background-color: <?php echo esc_html(GBT_Opt::getOption('dropdowns_accent_color')); ?>;
	}

	@media all and (min-width: 1280px) {
		.blog-sidebar-inactive.content-layout-boxed .alignwide
		{
	        margin-left: calc( (-<?php echo esc_html(GBT_Opt::getOption('site_width')) ?>px + 792px) / 4 );
	    	margin-right: calc( (-<?php echo esc_html(GBT_Opt::getOption('site_width')) ?>px + 792px) / 4 );
		}
	}

	.blog-sidebar-inactive.content-layout-boxed .alignfull
	{
		margin-left: calc( -<?php echo esc_html(GBT_Opt::getOption('site_width')) ?>px / 2 + 100% / 2 );
	    margin-right: calc( -<?php echo esc_html(GBT_Opt::getOption('site_width')) ?>px / 2 + 100% / 2 );
	}

</style>
