<?php

// @version 3.0.0

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
global $post, $woocommerce, $wishlists, $qv_product_id;

$product = wc_get_product( $qv_product_id );

add_action( 'getbowtied_qv_product_data', 	'woocommerce_template_single_title');
add_action( 'getbowtied_qv_product_data', 	'woocommerce_template_single_rating' );
add_action( 'getbowtied_qv_product_data', 	'woocommerce_template_single_price');
add_action( 'getbowtied_qv_product_data', 	'woocommerce_template_single_excerpt');
add_action( 'getbowtied_qv_product_data', 	'quickview_go_to_product_page');
add_action( 'getbowtied_qv_product_data', 	'woocommerce_template_single_add_to_cart');
add_action( 'getbowtied_qv_product_data', 	'getbowtied_single_product_share' );
add_action( 'getbowtied_qv_product_data', 	'quickview_add_to_wishlist');
add_action( 'getbowtied_qv_product_data', 	'woocommerce_template_single_meta' );
add_action( 'getbowtied_qv_product_images', 'woocommerce_show_product_images' );

?>
<?php while ( have_posts() ) : the_post(); ?>
<button class="close-button" data-close aria-label="Close reveal" type="button">
    <span aria-hidden="true">&times;</span>
</button>
<div class="row small-collapse">
	<div class="small-12 columns">
		
		<div class="site-content">

			<?php

				if ( post_password_required() ) {
					echo get_the_password_form();
					return;
				}
			?>

			<div id="product-<?php the_ID(); ?>" <?php function_exists('wc_product_class')? wc_product_class( 'product', $product ) : post_class(); ?>>

				<div class="row">

					<div class="small-12 large-7 columns">
						<div class="before-product-summary-wrapper">
					
							<?php do_action( 'getbowtied_qv_product_images' ); ?>

						</div>
					</div>

					<div class="small-12 large-5 columns">

						<div class="summary entry-summary">

							<?php do_action( 'getbowtied_qv_product_data' ); ?>

						</div>

					</div>

			</div>

		</div>
		
	</div>
</div>
<?php endwhile; // end of the loop. ?>