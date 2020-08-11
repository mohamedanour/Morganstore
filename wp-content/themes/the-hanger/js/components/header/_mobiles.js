jQuery(function($) {
	
	"use strict";

	$('.header-mobiles-menu').on('click', function() {
	    $(this).toggleClass('active');
	    $('.header-mobiles-content').toggleClass('visible');
	});

	$('.header-mobiles-mega-dropdown-button').on('click', function() {
	    $(this).toggleClass('active');
	    $('.header-mobiles-wrapper .gbt-mega-dropdown-content').toggleClass('visible');
	    $('.header-mobiles-wrapper .header-mobiles-large-categories').toggleClass('visible');
	});

	$('.header-mobiles-search').on('click', function() {
	    $(this).toggleClass('active');
	    $('.header-mobiles-search-content').slideToggle(300);
	});

});