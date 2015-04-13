<?php
/**
 * The template for displaying Search Results pages.
 */
get_header(); ?>
<div class="container">
	<div class="space20"></div>
	<h1><?php printf( __( 'Search results: %s', 'synth' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
	<div class="space60"></div>
	<div class="row">  
    	<div class="col-md-9 blog-list">
    		<?php
    		
            if ( have_posts() ) :

    			while ( have_posts() ) : the_post(); 
    				
    				get_template_part( 'content', get_post_format() );

    			endwhile;

            else :
                get_template_part( 'content', 'none' );
            endif;
			
    		?>
    	</div>
    	<div class="col-md-3 sidebar">
    		
    		<?php get_sidebar(); ?>
    		
    	</div>
    </div>
</div>	


<?php get_footer(); ?>
