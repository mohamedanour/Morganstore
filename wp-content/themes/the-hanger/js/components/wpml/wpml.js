jQuery(function($) {
	
	"use strict";

	// WPML

	$(document).on('click', '.wpml-ls-item-legacy-dropdown-click.wpml-ls-current-language', function(){

		$(this).toggleClass('active');
	});

	$(document).click(function(e){
		if(!$('.wpml-ls-item-legacy-dropdown-click.wpml-ls-current-language .wpml-ls-item-toggle').is(e.target) ) {
			$('.wpml-ls-item-legacy-dropdown-click.wpml-ls-current-language').removeClass('active');
		}
	});

	$('.wpml-ls-item-legacy-dropdown.wpml-ls-current-language').hover( 
		function(){
			$(this).addClass('active');
		}, 
		function(){
			$(this).removeClass('active');
		}
	);

	// WCML

	$(document).on('click', '.wcml-dropdown-click .wcml-cs-active-currency .wcml-cs-item-toggle', function(){

		$(this).parent('.wcml-cs-active-currency').toggleClass('active');
	});
	
	$(document).click(function(){
		$('.wcml-dropdown-click .wcml-cs-active-currency').removeClass('active');
	});

	$('.wcml-dropdown .wcml-cs-active-currency').hover( 
		function(){
			$(this).addClass('active');
		}, 
		function(){
			$(this).removeClass('active');
		}
	);
});