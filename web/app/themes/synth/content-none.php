<?php
/**
 * The template for displaying a "No posts found" message.
 */
?>

	<div id="post-0" class="post no-results not-found">
				<h2 class="text-left"><?php _e( 'Nothing Found', 'synth' ); ?></h2>
			
			<div class="entry-content">
				<p><?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'synth' ); ?></p>
				<div class="search-none">
					<?php get_search_form(); ?>
				</div>
			</div><!-- .entry-content -->
		
	</div><!-- #post-0 -->
