<?php
/**
 * Mini-cart
 *
 * Contains the markup for the mini-cart, used by the cart widget
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.1.0
 */

global $woocommerce;
?>

<?php if ( sizeof( $woocommerce->cart->get_cart() ) > 0 ) { 

	$count = sizeof( $woocommerce->cart->get_cart() );
	if ($count == 1) { $string = "item"; }
	if ($count > 1) { $string = "items"; }
	$subtotal = $woocommerce->cart->get_cart_subtotal();
?>

<?php } ?>


<div class="header-cart">
  <?php if ( sizeof( $woocommerce->cart->get_cart() ) > 0 ) { ?>
      <div class="price"><a href="<?php echo $woocommerce->cart->get_cart_url(); ?>"><?php echo $subtotal; ?></a></div>
      <div class="items"><?php echo $count. " ". $string; ?></div>
  <?php } else { ?>
      <div class="items"><?php _e('empty', 'riley'); ?></div>
  <?php } ?>
  
</div> 
