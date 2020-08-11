<style>

	/*============================================*/
	/* Site Width ================================*/
	/*============================================*/

	.row
	{
		max-width: <?php echo esc_html(GBT_Opt::getOption('site_width')) ?>px;
	}

	body.content-layout-boxed .hover_overlay_content
	{
		max-width: <?php echo esc_html(GBT_Opt::getOption('site_width')) ?>px;
	}

	<?php if ( 1 == GBT_Opt::getOption('site_width_full') ) : ?>
		.row
		{
			max-width: 100%;
		}
	<?php endif; ?>


	/*============================================*/
	/* Body Background ===========================*/
	/*============================================*/

	.site-bg-color,
	body
	{
		background-color: <?php echo esc_html(GBT_Opt::getOption('bg_color')) ?>;		
	}

</style>