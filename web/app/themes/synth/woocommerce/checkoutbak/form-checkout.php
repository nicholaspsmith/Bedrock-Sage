<?php
/**
 * Checkout Form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $woocommerce;

?>
<div class="container">

	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) { ?>
		<div class="row spacer40"></div>
		<div class="row">
			<div class="col-md-7">
				<h3 class="page-title"><?php _e('Checkout', 'woocommerce'); ?></h3>
			</div>
			<div class="col-md-5">
				<?php do_action('woocommerce_before_main_content'); ?>
			</div>
		</div>
		<div class="row spacer20"></div>
	<?php } else {
		do_action('woocommerce_before_main_content');
	} ?>
<?php

$woocommerce->show_messages();

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout
if ( ! $checkout->enable_signup && ! $checkout->enable_guest_checkout && ! is_user_logged_in() ) {
	echo apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) );
	return;
}

// filter hook for include new pages inside the payment method
$get_checkout_url = apply_filters( 'woocommerce_get_checkout_url', $woocommerce->cart->get_checkout_url() ); ?>

 
	<form name="checkout" method="post" class="checkout" action="<?php echo esc_url( $get_checkout_url ); ?>">

		<?php if ( sizeof( $checkout->checkout_fields ) > 0 ) : ?>

			<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

			<div class="row" id="customer_details">

				<div class="col-md-6">

					<?php do_action( 'woocommerce_checkout_billing' ); ?>

				</div>

				<div class="col-md-6">

					<?php do_action( 'woocommerce_checkout_shipping' ); ?>

				</div>

			</div>

			<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

			<h3 id="order_review_heading"><?php _e( 'Your order', 'woocommerce' ); ?></h3>

		<?php endif; ?>

		<?php do_action( 'woocommerce_checkout_order_review' ); ?>

	</form>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
<div class="row spacer40"></div>
</div>