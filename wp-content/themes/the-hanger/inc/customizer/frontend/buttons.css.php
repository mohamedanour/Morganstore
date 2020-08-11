<style>

	button,
	button:focus,
	.button_color_styles,
	.button,
	.button:focus,
	.button.disabled,
	.button.disabled:focus,
	.button[disabled],
	.button[disabled]:focus,
	input[type="submit"],
	input[type="submit"]:focus
	{
		color: <?php echo esc_html(GBT_Opt::getOption('content_bg_color')); ?>;
		background-color: <?php echo esc_html(GBT_Opt::getOption('secondary_color')); ?>;
	}

	button:hover,
	input[type="submit"]:hover,
	.button:hover
	{
		background-color: <?php echo esc_html(GBT_Opt::getOption('accent_color')); ?>;
	}

	.button.hollow,
	.button.hollow:hover,
	.button.hollow:focus
	{
		color: <?php echo esc_html(GBT_Opt::getOption('primary_color')); ?>;
		border-color: <?php echo esc_html(GBT_Opt::getOption('primary_color')); ?>;
	}

</style>
