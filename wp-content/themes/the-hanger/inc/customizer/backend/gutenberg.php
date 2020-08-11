<?php

if ( !function_exists ('thehanger_custom_gutenberg_styles') ) {
	function thehanger_custom_gutenberg_styles() {

		global $shopkeeper_theme_options, $default_fonts, $current_screen;

		ob_start();	

		?>

		<style>

		.editor-styles-wrapper
		{
			background-color: <?php echo esc_html(GBT_Opt::getOption('content_bg_color')); ?>;
		}

		.edit-post-visual-editor .wp-block h1,
		.edit-post-visual-editor .wp-block h2,
		.edit-post-visual-editor .wp-block h3,
		.edit-post-visual-editor .wp-block h4,
		.edit-post-visual-editor .wp-block h5,
		.edit-post-visual-editor .wp-block h6,
		.edit-post-visual-editor .wp-block blockquote,
		.edit-post-visual-editor .wp-block input[type="submit"],
		.edit-post-visual-editor .wp-block thead,
		.edit-post-visual-editor .wp-block th,
		.edit-post-visual-editor .wp-block label,
		.edit-post-visual-editor .wp-block textarea.editor-post-title__input,
		.edit-post-visual-editor p.wp-block-cover-text,
		.edit-post-visual-editor .wp-block-pullquote p,
		.edit-post-visual-editor .wp-block-quote p,
		.edit-post-visual-editor p.gbt_18_th_editor_slide_description_input,
		.gbt_18_th_editor_posts_grid_title,
		.wp-block-latest-posts li a,
		.editor-styles-wrapper .wp-block .wp-block-quote p,
		.editor-styles-wrapper .wp-block .wp-block-pullquote p,
		.wp-block-button__link,
		.editor-styles-wrapper .wp-block .wp-block-cover p.wp-block-cover-text
		{
			font-family: 
			<?php echo "'" . GBT_Opt::getOption('secondary_font')['font-family'] . "'," ?>
			sans-serif;
		}

		.wp-block,
		.edit-post-visual-editor .wp-block p,
		.edit-post-visual-editor .wp-block strong,
		.edit-post-visual-editor .wp-block textarea,
		.editor-styles-wrapper .wp-block label,
		.edit-post-visual-editor .wp-block li,
		.wp-block-verse pre
		{ 
			font-family: 
			<?php echo "'" . GBT_Opt::getOption('main_font')['font-family'] . "'," ?>
			sans-serif;
		}

		.editor-styles-wrapper .wp-block p,
		.wp-block-preformatted pre,
		.wp-block-preformatted pre *
		{
			font-size: <?php echo esc_html(GBT_Opt::getOption('font_size')); ?>px;
		}

		.editor-styles-wrapper .wp-block h1,
		textarea.editor-post-title__input
		{
			font-size: <?php echo 2.5 * esc_html(GBT_Opt::getOption('font_size')); ?>px;
		}

		.editor-styles-wrapper .wp-block h2,
		.editor-styles-wrapper .wp-block .wp-block-cover p.wp-block-cover-text
		{
			font-size: <?php echo 2.1 * esc_html(GBT_Opt::getOption('font_size')); ?>px;
		}
		
		.editor-styles-wrapper .wp-block h3,
		.editor-styles-wrapper .wp-block-quote p,
		.editor-styles-wrapper .wp-block-pullquote p,
		.wp-block-pullquote blockquote > .editor-rich-text p
		{
			font-size: <?php echo 1.74 * esc_html(GBT_Opt::getOption('font_size')); ?>px;
		}
		
		.editor-styles-wrapper .wp-block h4 { font-size: <?php echo 1.44 * esc_html(GBT_Opt::getOption('font_size')); ?>px; }
		
		.editor-styles-wrapper .wp-block h5,
		.wp-block-latest-posts li a,
		.wp-block[data-type="core/pullquote"][data-align="left"] .wp-block-pullquote p,
		.wp-block[data-type="core/pullquote"][data-align="right"] .wp-block-pullquote p
		{
			font-size: <?php echo 1.2 * esc_html(GBT_Opt::getOption('font_size')); ?>px;
		}
		
		.editor-styles-wrapper .wp-block h6,
		.wp-block-quote__citation,
		.wp-block-pullquote__citation
		{
			font-size: <?php echo esc_html(GBT_Opt::getOption('font_size')); ?>px;
		}

		.wp-block-button .wp-block-button__link,
		.editor-styles-wrapper .wp-block label
		{
		    font-size: <?php echo 0.8125 * esc_html(GBT_Opt::getOption('font_size')); ?>px;
		}

		.wp-block
		{
			color: <?php echo esc_html(GBT_Opt::getOption('primary_color')); ?>;
			font-size: <?php echo GBT_Opt::getOption('font_size'); ?>px;
		}

		.wp-block h1,
		.wp-block h2,
		.wp-block h3,
		.wp-block h4,
		.wp-block h5,
		.wp-block h6,
		.wp-block table th,
		.wp-block dl dt,
		.wp-block blockquote,
		.wp-block label,
		.edit-post-visual-editor .wp-block a,
		.wp-block-pullquote blockquote:not(.has-text-color) > .editor-rich-text p,
		.edit-post-visual-editor .wp-block textarea.editor-post-title__input,
		.wp-block-pullquote blockquote:not(.has-text-color) .wp-block-pullquote__citation,
		.wp-block-quote .wp-block-quote__citation
		{
			color: <?php echo esc_html(GBT_Opt::getOption('secondary_color')); ?>;
		}

		.editor-styles-wrapper .wp-block label,
		.wp-block-preformatted pre,
		.wp-block-preformatted pre *
		{
			color: <?php echo esc_html(GBT_Opt::getOption('primary_color')); ?>;
		}

		.wp-block-latest-posts__post-date
		{
			color: <?php echo esc_html(GBT_Opt::getOption('content_dark_gray')) ?>;
		}

		.wp-block-latest-posts li a:hover
		{
			color: <?php echo esc_html(GBT_Opt::getOption('accent_color')); ?>;
		}

		.wp-block input[type=color], .wp-block input[type=date], .wp-block input[type=datetime], 
		.wp-block input[type=datetime-local], .wp-block	input[type=email], .wp-block input[type=month], 
		.wp-block input[type=number], .wp-block input[type=password], .wp-block input[type=search], 
		.wp-block input[type=tel], .wp-block input[type=text], .wp-block input[type=time], 
		.wp-block input[type=url], .wp-block input[type=week], .wp-block select, .wp-block textarea
		{
			color: <?php echo esc_html(GBT_Opt::getOption('primary_color')) ?>;
			background-color: <?php echo esc_html(GBT_Opt::getOption('content_bg_color')); ?>;
			border-color: <?php echo esc_html(GBT_Opt::getOption('content_ultra_light_gray')) ?>;
		    height: <?php echo 3 * esc_html(GBT_Opt::getOption('font_size')); ?>px;
		    line-height: <?php echo 3 * esc_html(GBT_Opt::getOption('font_size')); ?>px;
		    padding: 0 <?php echo 0.75 * esc_html(GBT_Opt::getOption('font_size')); ?>px;
		    font-size: <?php echo 0.8125 * esc_html(GBT_Opt::getOption('font_size')); ?>px;
		}

		.wp-block table tr,
		.wp-block table thead tr:first-child td,
		.wp-block table thead tr:first-child th
		{
			border-color: <?php echo esc_html(GBT_Opt::getOption('content_ultra_light_gray')) ?>;
		}

		.wp-block input::-ms-input-placeholder { color: <?php echo esc_html(GBT_Opt::getOption('primary_color')) ?>; }
		.wp-block input::-webkit-input-placeholder { color: <?php echo esc_html(GBT_Opt::getOption('primary_color')) ?>; }
		.wp-block input::-moz-placeholder { color: <?php echo esc_html(GBT_Opt::getOption('primary_color')) ?>; }
		.wp-block textarea::-ms-input-placeholder { color: <?php echo esc_html(GBT_Opt::getOption('primary_color')) ?>; }
		.wp-block textarea::-webkit-input-placeholder { color: <?php echo esc_html(GBT_Opt::getOption('primary_color')) ?>; }
		.wp-block textarea::-moz-placeholder { color: <?php echo esc_html(GBT_Opt::getOption('primary_color')) ?>; }
		.wp-block select { color: <?php echo esc_html(GBT_Opt::getOption('primary_color')) ?>; }

		</style>

		<?php

		$content = ob_get_clean();
		$content = str_replace(array("\r\n", "\r"), "\n", $content);
		$lines = explode("\n", $content);
		$new_lines = array();
		foreach ($lines as $i => $line) { if(!empty($line)) $new_lines[] = trim($line); }

		$current_screen = get_current_screen();
		if ( method_exists($current_screen, 'is_block_editor') && $current_screen->is_block_editor() ) {
			wp_enqueue_style( 'getbowtied-default-fonts', get_template_directory_uri() . '/inc/fonts/default.css', false, getbowtied_theme_version(), 'all');
			echo implode($new_lines);
		}
	}
}
add_action( 'admin_head', 'thehanger_custom_gutenberg_styles' );