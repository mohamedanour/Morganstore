jQuery(function($) {
	
	"use strict";

	$(".header-navigation, .header-tools, .gbt-mega-dropdown-wrapper")

	.on("mouseenter", "a[data-toggle]", function(e) {
		var panel_id = $(e.currentTarget).data("toggle");
		$(e.delegateTarget).find("#" + panel_id).addClass("animated");
	})

	.on("mouseleave", "a[data-toggle]", function(e) {
		$(e.delegateTarget).find(".dropdown-pane").removeClass("animated");
	});

});