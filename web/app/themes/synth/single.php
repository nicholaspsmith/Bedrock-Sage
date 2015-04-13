<?php
global $entiri_opt;
/**
 * The Template for displaying all single posts.
 */
get_header(); ?>
<div class="blog">
<div class="container">
	
	<div class="row">  
    	<div class="col-md-12">
            
    		<?php
    		
			while ( have_posts() ) : the_post(); 
				
				get_template_part( 'content', get_post_format() );

			endwhile;
			
    		?>
    	</div>
    	
    </div>
</div>	
</div>


<?php get_footer(); ?>