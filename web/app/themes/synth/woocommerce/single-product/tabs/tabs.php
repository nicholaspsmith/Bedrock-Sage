<?php
/**
 * Single Product tabs
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Filter tabs and allow third parties to add their own
 *
 * Each tab is an array containing title, callback and priority.
 * @see woocommerce_default_product_tabs()
 */
$tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $tabs ) ) : 
	$i = 1;
	?>

	<div class="tabbable product-tabs">
		<ul class="nav nav-tabs-product">
			<?php foreach ( $tabs as $key => $tab ) : ?>

				<li class="<?php echo $key ?>_tab <?php echo $i==1 ? 'active' : ''; ?>">
					<a href="#tab-<?php echo $key ?>" data-toggle="tab"><?php echo apply_filters( 'woocommerce_product_' . $key . '_tab_title', $tab['title'], $key ) ?></a>
				</li>
				<?php
				$i++;
				?>

			<?php endforeach; ?>
		</ul>
		<div class="tab-content">
			<?php $i = 1; ?>
			<?php foreach ( $tabs as $key => $tab ) : ?>

				<div class="tab-pane <?php echo $i==1 ? 'active' : ''; ?>" id="tab-<?php echo $key ?>">
					<?php call_user_func( $tab['callback'], $key, $tab ) ?>
				</div>

				<?php 
				$i++;
			endforeach; ?>
		</div>
	</div>

<?php endif; ?>