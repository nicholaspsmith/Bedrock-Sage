<?php
/**
 * The template for displaying product content within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $product, $woocommerce_loop, $entiri_opt;

// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) )
	$woocommerce_loop['loop'] = 0;

// Store column count for displaying the grid
/*
if ( empty( $woocommerce_loop['columns'] ) )
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', get_option('reno_shop_columns') );
if ( isset($_GET['template']) ) {
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 );
}
*/
//$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', $entiri_opt['shop-columns'] );
$woocommerce_loop['columns'] = 3;
if ( isset($_GET['columns']) ) {
	$woocommerce_loop['columns'] = $_GET['columns'];
}
// Ensure visibility
if ( ! $product->is_visible() )
	return;

// Increase loop count
$woocommerce_loop['loop']++;

// Extra post classes
$classes = array();
$class = '';
if ( 0 == ( $woocommerce_loop['loop'] - 1 ) % $woocommerce_loop['columns'] || 1 == $woocommerce_loop['columns'] )
	$classes[] = 'first';
if ( 0 == $woocommerce_loop['loop'] % $woocommerce_loop['columns'] )
	$classes[] = 'last';
if ( $woocommerce_loop['columns'] == 3 )
	$classes[] = 'col-lg-4 col-sm-6 col-md-6 col-xs-12';
if ( $woocommerce_loop['columns'] == 4 )
	$classes[] = 'col-lg-3 col-sm-6 col-md-6 col-xs-12';
if ( $woocommerce_loop['columns'] == 2 )
	$classes[] = 'col-lg-6 col-sm-6 col-md-6 col-xs-12';
?>


	<div <?php post_class( $classes ); ?>>

		<div class="product-2">

		<?php do_action( 'woocommerce_before_shop_loop_item' ); ?>

		
			<?php
			if ($product->is_on_sale()) : ?>

				<?php //echo apply_filters('woocommerce_sale_flash', '<div class="shop-item-tag">'.__( 'Sale!', 'woocommerce' ).'</div>', $post, $product); ?>

			<?php endif; ?>
			<a href="<?php the_permalink(); ?>" class="product-img">
            	<?php the_post_thumbnail('recent-news'); ?>
            	<?php //woocommerce_get_template_part( 'loop/add-to-cart' ); ?>
            	<i class="fa fa-plus"></i>
          	</a> 
			
			<div class="product-info">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <?php
				/**
				 * woocommerce_after_shop_loop_item_title hook
				 *
				 * @hooked woocommerce_template_loop_price - 10
				 */
				do_action( 'woocommerce_after_shop_loop_item_title' );
			?>
            </div>
            
			
			
			
			
			

		

		<?php do_action( 'woocommerce_after_shop_loop_item' ); ?>

	</div>

	</div>

