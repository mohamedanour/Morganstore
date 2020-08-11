<?php
 
//======================================================
// Category icon fields.
//======================================================

function woocommerce_add_category_icon() {	
	$icon = "thehanger-icons-alignment_align-all-1";
	?>

	<div class="form-field getbowtied_theme_default"">		
		<label><?php _e( 'Icon', 'the-hanger' ); ?></label>		
		<input class="widefat icon_picker_input" id="<?php echo esc_attr($icon); ?>" name="icon_picker_input" type="hidden" value="<?php echo esc_attr($icon); ?>">
		<div id="preview_icon_picker" data-target="#<?php echo esc_attr($icon); ?>" class="button icon-picker <?php echo esc_attr($icon); ?>"></div>
		<div class="clear"></div>
	</div>

	<?php

}

add_action( 'product_cat_add_form_fields', 'woocommerce_add_category_icon', 50 );


//======================================================
// Edit category icon field.
//======================================================

function woocommerce_edit_category_icon( $term, $taxonomy ) {

	$icon = get_term_meta( $term->term_id, 'icon_id', true );
	$icon = empty($icon)? 'thehanger-icons-alignment_align-all-1' : $icon;
	?>

	<tr class="form-field getbowtied_theme_default">
		<th scope="row" valign="top"><label><?php _e( 'Icon', 'the-hanger' ); ?></label></th>
		<td>
			<input class="widefat icon_picker_input" id="<?php echo esc_attr($icon); ?>" name="icon_picker_input" type="hidden" value="<?php echo esc_attr($icon); ?>">
			<div id="preview_icon_picker" data-target="#<?php echo esc_attr($icon); ?>" class="button icon-picker <?php echo esc_attr($icon); ?>"></div>
			<div class="clear"></div>
		</td>
	</tr>

	<?php

}

add_action( 'product_cat_edit_form_fields', 'woocommerce_edit_category_icon', 50, 2 );


//======================================================
// woocommerce_category_icon_save function.
//======================================================

function woocommerce_category_icon_save( $term_id, $tt_id, $taxonomy ) {

	if ( isset( $_POST['icon_picker_input'] ) ) {
		update_woocommerce_term_meta( $term_id, 'icon_id', $_POST['icon_picker_input'] );
	}

	delete_transient( 'wc_term_counts' );

}

add_action( 'created_term', 'woocommerce_category_icon_save', 10, 3 );
add_action( 'edit_term', 'woocommerce_category_icon_save', 10, 3 );


//======================================================
// icon column added to category admin.
//======================================================

function woocommerce_product_cat_icon_columns( $columns ) {

	$new_columns = array();
	$new_columns['icon'] = __( 'Icon', 'the-hanger' );

	return array_merge( $new_columns, $columns );

}

//add_filter( 'manage_edit-product_cat_columns', 'woocommerce_product_cat_icon_columns', 5 );


//======================================================
// Thumbnail column value added to category admin.
//======================================================

function woocommerce_product_cat_icon_column( $columns, $column, $id ) {

	if ( $column == 'icon' ) {
		
		$icon = get_term_meta( $id, 'icon_id', true );

		$columns .= '<i class="' . $icon . '"></i>';

	}

	return $columns;
	
}

//add_filter( 'manage_product_cat_custom_column', 'woocommerce_product_cat_icon_column', 10, 3 );


//======================================================
// woocommerce_get_category_icon function.
//======================================================

function woocommerce_get_category_icon($cat_ID = false) {

	if ( $cat_ID == false && is_product_category() ){
		global $wp_query;
		
		// get the query object
		$cat = $wp_query->get_queried_object();
		
		// get the thumbnail id user the term_id
		$cat_ID = $cat->term_id;
	}

    $icon = get_term_meta($cat_ID, 'icon_id', true ); 

    // get the icon
   return $icon; 

}


//======================================================
// show_category_icon function.
//======================================================

/*function show_category_icon() {
	$category_icon_src = woocommerce_get_category_icon();	
	echo ($category_icon_src != "") ? '<div class="woocommerce_category_icon_image"><img src="'.$category_icon_src.'" /></div>' : "";
}

add_action('woocommerce_archive_description', 'show_category_icon');*/


//======================================================
// Styling the admin area
//======================================================

function product_cat_icon_column() {
   echo '<style>
			table.wp-list-table .column-icon {
				width: 40px;
				text-align: center;
				white-space: nowrap;
			}
			table.wp-list-table .column-icon i {
				font-size: 18px;
				margin-top: 10px;
				display: block;
			}
         </style>';
}

add_action('admin_head', 'product_cat_icon_column');