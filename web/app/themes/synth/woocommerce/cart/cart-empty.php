<?php
/**
 * Empty cart page
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

?>
<div class="space40"></div>
<div class="container empty-cart-container">
	<h4 class="empty-cart">Empty cart</h4>
	<p class="empty-cart-text"><?php _e( 'Your cart is currently empty.', 'woocommerce' ); ?></p>
	
	<a class="return-to-shop" href="<?php echo get_permalink(woocommerce_get_page_id('shop')); ?>"><?php _e( 'Return To Shop', 'woocommerce' ) ?></a>
</div>
<div class="space40"></div>

<?php do_action('woocommerce_cart_is_empty'); ?>

