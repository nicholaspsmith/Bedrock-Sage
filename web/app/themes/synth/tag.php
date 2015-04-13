<?php
global $entiri_opt;
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 */
get_header(); ?>
<div class="container">
	<div class="space20"></div>
	<h1><?php printf( __( 'Tag Archives: %s', 'synth' ), '<span>' . single_tag_title( '', false ) . '</span>' ); ?></h1>
	<div class="space60"></div>
	<div class="row">  
    	<div class="col-md-9 blog-list">
    		<?php
    		
			while ( have_posts() ) : the_post(); 
				
				get_template_part( 'content', get_post_format() );

			endwhile;
			
    		?>
    	</div>
    	<div class="col-md-3 sidebar">
    		
    		<?php get_sidebar(); ?>
    		
    	</div>
    </div>
</div>	


<?php get_footer(); ?>
