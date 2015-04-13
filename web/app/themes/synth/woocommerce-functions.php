<?php
global $entiri_opt;

function products_per_page($cols) {
	global $entiri_opt;
	return $entiri_opt['shop_products_per_page'];
}
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );

add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 20);
//add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 30);

add_action( 'woocommerce_after_single_product', 'woocommerce_output_related_products', 10 );

//add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_add_to_cart', 30 );

add_filter( 'loop_shop_per_page', 'products_per_page', 20 );
add_filter( 'woocommerce_enqueue_styles', '__return_false' );


function get_product_categories($post_id) {
	$terms = get_the_terms( $post_id, 'product_cat' );
	if($terms != '') {
		foreach ( $terms as $c ) {
			echo $c->name.' ';
		}
	}
}

if (!function_exists('loop_columns')) {
	function loop_columns() {
		//return get_option('reno_shop_columns'); 
		return 3;
	}
}

add_filter('loop_shop_columns', 'loop_columns');

function woocommerce_header_cart() {
	global $woocommerce;
	if ( sizeof( $woocommerce->cart->get_cart() ) > 0 ) { 

		$count = sizeof( $woocommerce->cart->get_cart() );
		if ($count == 1) { $string = "item"; }
		if ($count > 1) { $string = "items"; }
		$subtotal = $woocommerce->cart->get_cart_subtotal();

 	} 
 	else {
 		$count = 0;
 	}
 	?>
 	<a class="info-bar-cart box" href="<?php echo $woocommerce->cart->get_cart_url(); ?>">
 		<i class="fa fa-shopping-cart"></i> (<?php echo $count; ?>)
 	</a>
 	<?php
}

?>