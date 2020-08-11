<?php

// =============================================================================
// Ajax url
// =============================================================================

if ( ! function_exists('getbowtied_ajax_url_fn') ) :
function getbowtied_ajax_url_fn() {
?>
    <script>
        var getbowtied_ajax_url = '<?php echo admin_url("admin-ajax.php"); ?>';
    </script>
<?php
}
add_action( 'wp_head','getbowtied_ajax_url_fn' );
endif;