<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, synth already
 * has tag.php for Tag archives, category.php for Category archives, and
 * author.php for Author archives.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */

get_header(); ?>
<div class="container">
	<div class="spacer40"></div>
	<h2 class="text-left">
		<?php
			if ( is_day() ) :
				printf( __( 'Daily Archives: %s', 'synth' ), '<span>' . get_the_date() . '</span>' );
			elseif ( is_month() ) :
				printf( __( 'Monthly Archives: %s', 'synth' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'synth' ) ) . '</span>' );
			elseif ( is_year() ) :
				printf( __( 'Yearly Archives: %s', 'synth' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'synth' ) ) . '</span>' );
			else :
				_e( 'Archives', 'synth' );
			endif;
		?>
	</h2>
	<div class="space20"></div>
	<div class="row blog-container">  
    	<div class="col-md-8">
    		<?php
    		
			while ( have_posts() ) : the_post(); 
				$id_post = $post->ID;
				global $more;
				$more = 0;
				?>
				<div class="article">
				<h3 class="dark"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				<ul class="infoline upper">
	              <li><span class="gray"><?php _e('By', 'synth'); ?></span> <?php echo get_the_author(); ?></li> 
	              <li><span class="gray"><?php _e('Published', 'synth'); ?></span> <?php echo get_the_date(); ?></li> 
	              <li><span class="gray"><?php _e('Tagged', 'synth'); ?></span> <?php the_tags('',', ',''); ?></li>
	            </ul>

				<?php
				the_post_thumbnail('listing');
				?>
				<div class="entry-content">
				<div class="space25"></div>
				<?php 
			    the_content( 'Continue reading...' );
			    ?>
				</div>
			    <div class="space30"></div> 
				</div>
			    <?php
			endwhile;
			
    		?>
    	</div>
    	<div class="col-md-4">
    		<div class="blog-right-sidebar">   
    			<?php get_sidebar(); ?>
    		</div>
    	</div>
    </div>
</div>	
	


<?php get_footer(); ?>