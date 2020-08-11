<style>

	[type='text']:focus,
	[type='password']:focus,
	[type='date']:focus,
	[type='datetime']:focus,
	[type='datetime-local']:focus,
	[type='month']:focus,
	[type='week']:focus,
	[type='email']:focus,
	[type='number']:focus,
	[type='search']:focus,
	[type='tel']:focus,
	[type='time']:focus,
	[type='url']:focus,
	[type='color']:focus,
	textarea:focus,
	select:focus,
	.select2-container .select2-dropdown .select2-search .select2-search__field:focus,
	.widget.woocommerce.widget_layered_nav .woocommerce-widget-layered-nav-list .wc-layered-nav-term:not(.chosen) a:before
	{
		border-color: <?php echo esc_html(GBT_Opt::getOption('content_medium_gray')) ?>;
	}

	.widget.woocommerce.widget_rating_filter .wc-layered-nav-rating a,
	.category-title-count
	{
		color: <?php echo esc_html(GBT_Opt::getOption('primary_color')) ?>;
	}
	
	.woocommerce.woocommerce-wishlist .wishlist_table tr td.product-stock-status .wishlist-out-of-stock:before,
	.entry-summary .stock:before
	{
		background-color: <?php echo esc_html(GBT_Opt::getOption('content_medium_gray')) ?>;
	}

	input::-ms-input-placeholder
	{ 
  		color: <?php echo esc_html(GBT_Opt::getOption('primary_color')) ?>;
	}

	input::-webkit-input-placeholder
	{ 
  		color: <?php echo esc_html(GBT_Opt::getOption('primary_color')) ?>;
	}

	input::-moz-placeholder
	{ 
  		color: <?php echo esc_html(GBT_Opt::getOption('primary_color')) ?>;
	}

	body.single .post .entry-meta__item.entry-meta-author a:not(.author-all-posts) 
	{
		color: <?php echo esc_html(GBT_Opt::getOption('primary_color')) ?> !important;
	}


</style>
