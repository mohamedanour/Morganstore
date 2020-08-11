jQuery(function($) {
    
    "use strict";

    function bs_fix_vc_full_width_row() {

        var $elements = $('[data-vc-full-width="true"]');
        $.each($elements, function () {
            var $el = jQuery(this);
            $el.css('right', $el.css('left')).css('left', '');
        });

    }

    // Fixes rows in RTL
    if( $('body').hasClass("rtl") ) {
        $(document).on('vc-full-width-row', function () {
            bs_fix_vc_full_width_row();
        });
    }

    // Run one time because it was not firing in Mac/Firefox and Windows/Edge some times
    if ($('body').hasClass("rtl")) {
        bs_fix_vc_full_width_row();
    }
});