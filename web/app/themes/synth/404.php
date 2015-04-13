<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage synth
 * @since synth 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div class="container">
		    <div class="row space100"></div>
		    <div class="row">
		      <div class="col-md-12">
		        <div class="h2-container"> 
		          <h2 class="center">Sorry, page not found.</h2>
		          <div class="h2-line"></div>
		          <div class="h2-line-left"></div>
		          <div class="h2-line-right"></div>
		        </div> 
		      </div> 
		    </div>  

		    <div class="row">
		      <div class="col-md-12">
		        <h3 class="center"><?php _e('TRY TO INSERT WHAT ARE YOU LOOKING FOR.', 'synth'); ?></h3>     
		      </div> 
		    </div> 

		     <div class="row">    
		      <div class="col-md-4 col-md-offset-4 search404">

		        <?php get_search_form(); ?>

		      </div>    
		    </div>
		    <div class="row space100"></div>
		</div>       
	</div><!-- #primary -->

<?php get_footer(); ?>