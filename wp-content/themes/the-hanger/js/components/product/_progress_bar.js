(function($) {
	
	"use strict";

	$(window).load(function() {

		$(window).scroll(function() {

			var scrollTop = $(window).scrollTop();
			var docHeight = $(document).height();
			var winHeight = $(window).height();
			var scrollPercent = (scrollTop) / (docHeight - winHeight);
			var scrollPercentRounded = Math.round(scrollPercent*100);

			$(".scroll-progress-bar").css( "width", scrollPercentRounded + "%" );

		});

	});

})(jQuery);