<?php
/**
 * Template Name: Page with Sidebar
 *
 * Description: synth loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage synth
 * @since synth 1.0
 */

get_header(); ?>

	<div class="container">
	<div class="row">
		<div class="col-md-8">
			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
					<?php if(get_post_meta($post->ID, 'show_heading', true) == 'yes') { ?>
						<div class="spacer20"></div>
						<div class="container">
							<h2 class="<?php echo get_post_meta($post->ID, 'heading_position', true); ?> page-title"><?php the_title(); ?></h2>
						</div>
					<?php
					}
					
					the_content(); 

					?>
						

				</article><!-- #post -->
				<?php if (comments_open($post->ID)){ ?>
					
					<?php comments_template( '', true ); ?>
					
				<?php } ?>
			<?php endwhile; // end of the loop. ?>
		</div>
		<div class="col-md-4">
    		<div class="blog-right-sidebar">   
    			<?php get_sidebar(); ?>
    		</div>
    	</div>
	</div>
		
	</div>
<?php get_footer(); ?>