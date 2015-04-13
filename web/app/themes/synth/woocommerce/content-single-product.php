<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * Override this template by copying it to yourtheme/woocommerce/content-single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

global $entiri_opt;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>



<div class="row spacer60"></div>
<?php
	/**
	 * woocommerce_before_single_product hook
	 *
	 * @hooked woocommerce_show_messages - 10
	 */
	 do_action( 'woocommerce_before_single_product' );
?>



	<div class="row">
		
		<div class="col-md-12">
			<?php woocommerce_get_template_part( 'content', 'product-detail' ); ?>
		</div>

	</div>





<div class="space30"></div> 

<?php do_action( 'woocommerce_after_single_product' ); ?>