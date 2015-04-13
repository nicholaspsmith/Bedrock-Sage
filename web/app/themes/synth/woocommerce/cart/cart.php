<?php
/**
 * Cart Page
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $woocommerce;

wc_print_notices();
?>
<div class="shop">

	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) { ?>
		<div class="divider"></div>
		<div class="row">

			<div class="col-md-12">
				<h2><?php _e('Checkout', 'woocommerce'); ?></h2>
			</div>
			
		</div>
		<div class="row space60"></div>
	<?php } else {
		do_action('woocommerce_before_main_content');
	} ?>
	<div class="row">
	<div class="col-md-12">
	<?php do_action( 'woocommerce_before_cart' ); ?>

	<form action="<?php echo esc_url( $woocommerce->cart->get_cart_url() ); ?>" method="post" id="cart_form">

	<?php do_action( 'woocommerce_before_cart_table' ); ?>
	<div class="shopping-cart">
		<div class="table-responsive">
			<table class="table" cellspacing="0">
				<thead>
					<tr>
						<th class="column-img"><?php _e( 'Product', 'woocommerce' ); ?></th>
						<th><?php _e( 'Product Details', 'woocommerce' ); ?></th>
						<th class="column-price"><?php _e( 'Price', 'woocommerce' ); ?></th>
						<th class="column-quantity"><?php _e( 'Quantity', 'woocommerce' ); ?></th>
						<th class="column-subtotal"><?php _e( 'Total', 'woocommerce' ); ?></th>
						<th class="column-action"><?php _e( 'Action', 'woocommerce' ); ?></th>
					</tr>
				</thead>
				<tbody>
					<?php do_action( 'woocommerce_before_cart_contents' ); ?>

					<?php
					if ( sizeof( $woocommerce->cart->get_cart() ) > 0 ) {
						foreach ( $woocommerce->cart->get_cart() as $cart_item_key => $values ) {
							$_product = $values['data'];
							if ( $_product->exists() && $values['quantity'] > 0 ) {
								?>
								<tr class = "<?php echo esc_attr( apply_filters('woocommerce_cart_table_item_class', 'cart_table_item', $values, $cart_item_key ) ); ?>">
									
									<td>
										<?php
											$thumbnail = apply_filters( 'woocommerce_in_cart_product_thumbnail', $_product->get_image(), $values, $cart_item_key );

											if ( ! $_product->is_visible() || ( ! empty( $_product->variation_id ) && ! $_product->parent_is_visible() ) )
												echo '<div class="box-large-img">'.$thumbnail.'</div>';
											else
												printf('<div class="box-large-img"><a href="%s">%s</a></div>', esc_url( get_permalink( apply_filters('woocommerce_in_cart_product_id', $values['product_id'] ) ) ), $thumbnail );
										?>
									</td>
									
									<!-- Product Name -->
									<td class="product-name">
										<div class="line-2">
											
											<div class="line-img-2">
												<?php
													if ( ! $_product->is_visible() || ( ! empty( $_product->variation_id ) && ! $_product->parent_is_visible() ) ) {
														echo '<strong>';
														echo apply_filters( 'woocommerce_in_cart_product_title', $_product->get_title(), $values, $cart_item_key );
														echo '</strong>';
													}
													else
														printf('<strong><a href="%s">%s</a></strong>', esc_url( get_permalink( apply_filters('woocommerce_in_cart_product_id', $values['product_id'] ) ) ), apply_filters('woocommerce_in_cart_product_title', $_product->get_title(), $values, $cart_item_key ) );

													// Meta data
													echo $woocommerce->cart->get_item_data( $values );

					                   				// Backorder notification
					                   				if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $values['quantity'] ) )
					                   					echo '<p class="backorder_notification">' . __( 'Available on backorder', 'woocommerce' ) . '</p>';
												?>
											</div>
										</div>
									</td>

									<!-- Product price -->
									<td class="product-price">
										<?php
											$product_price = get_option('woocommerce_tax_display_cart') == 'excl' ? $_product->get_price_excluding_tax() : $_product->get_price_including_tax();

											echo apply_filters('woocommerce_cart_item_price_html', woocommerce_price( $product_price ), $values, $cart_item_key );
										?>
									</td>

									<!-- Quantity inputs -->
									<td class="product-quantity">
										<?php
											if ( $_product->is_sold_individually() ) {
												$product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
											} else {

												$step	= apply_filters( 'woocommerce_quantity_input_step', '1', $_product );
												$min 	= apply_filters( 'woocommerce_quantity_input_min', '', $_product );
												$max 	= apply_filters( 'woocommerce_quantity_input_max', $_product->backorders_allowed() ? '' : $_product->get_stock_quantity(), $_product );

												$product_quantity = sprintf( '<div class=""><input type="number" class="form-control" name="cart[%s][qty]" step="%s" min="%s" max="%s" value="%s" size="4" title="' . _x( 'Qty', 'Product quantity input tooltip', 'woocommerce' ) . '" class="input-text qty text" maxlength="12" /></div>', $cart_item_key, $step, 1, $max, esc_attr( $values['quantity'] ) );
											}

											echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key );
										?>
									</td>

									<!-- Product subtotal -->
									<td class="product-subtotal">
										<?php
											echo apply_filters( 'woocommerce_cart_item_subtotal', $woocommerce->cart->get_product_subtotal( $_product, $values['quantity'] ), $values, $cart_item_key );
										?>
									</td>
									<!-- Remove from cart link -->
									<td class="product-remove">
										<?php
											echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf('<a href="%s" class="remove" title="%s"><i class="fa fa-times"></i></a>', esc_url( $woocommerce->cart->get_remove_url( $cart_item_key ) ), __( 'Remove this item', 'woocommerce' ) ), $cart_item_key );
										?>
									</td>
								</tr>
								<?php
							}
						}
					}

					do_action( 'woocommerce_cart_contents' );
					?>
					

					<?php do_action( 'woocommerce_after_cart_contents' ); ?>
				</tbody>
			</table>
		</div>

		<div class="space10"></div> 
          
        <div class="cart-buttons">
			<button type="button" id="update_cart" name="update_cart" class="btn btn-primary"><?php _e( 'Update Cart', 'woocommerce' ); ?></button>
			<a href="<?php echo $woocommerce->cart->get_checkout_url(); ?>" class="checkout-button btn btn-primary color-3"><?php _e( 'Proceed to Checkout', 'woocommerce' ); ?></a>
			<?php //do_action('woocommerce_proceed_to_checkout'); ?>
		</div>

		<div class="space10"></div> 
        <hr>
	</div>
	<div class="row space15"></div>


	<div class="row">

		<?php do_action('woocommerce_cart_collaterals'); ?>
		<div class="col-md-4">

			<?php if ( $woocommerce->cart->coupons_enabled() ) { ?>
				<div class="cart-box"> 
					
					<h3><?php _e( 'Discount Code', 'woocommerce' ); ?></h3> 
					<?php _e('Enter your coupon code if you have...', 'woocommerce'); ?>
					<div class="space10"></div>
					<input name="coupon_code" class="form-control" id="coupon_code" type="text" value="" /> 
					<div class="space20"></div> 
					<input type="submit" class="btn btn-primary apply_coupon" name="apply_coupon" value="<?php _e( 'Apply Coupon', 'woocommerce' ); ?>" />

					<?php do_action('woocommerce_cart_coupon'); ?>

					
					<?php wp_nonce_field( 'woocommerce-cart' ); ?>
				</div>
			<?php } ?>
		</div>
		<div class="col-md-4">
			<div class="cart-box"> 
				<?php woocommerce_shipping_calculator(); ?>
			</div>
		</div>
		<div class="col-md-4">
			
			<?php woocommerce_cart_totals(); ?>
			
		</div>
	</div>

	</form>
	<?php do_action( 'woocommerce_after_cart_table' ); ?>
	</div>
	</div>




<div class="row spacer40"></div>



<div class="row space40"></div>


<?php do_action( 'woocommerce_after_cart' ); ?>

</div>


