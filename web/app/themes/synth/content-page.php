<?php
/**
 * The template used for displaying page content in page.php
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<?php if(get_post_meta($post->ID, 'hide_heading', true) != 'yes') { ?>
			<div class="space40"></div>
			<div class="container">
				<h1 class="<?php echo get_post_meta($post->ID, 'heading_position', true); ?> page-title"><?php the_title(); ?></h1>
			</div>
		<?php
		}
		$content = get_the_content();
		
		if (strpos($content,'[vc_row') === false) {
		    echo '<div class="container">';
		}
		?>
		<?php the_content(); ?>
		<?php
		if (strpos($content,'[vc_row') === false) {
		    echo '</div>';
		}
		wp_link_pages();
		?>	

	</article><!-- #post -->
