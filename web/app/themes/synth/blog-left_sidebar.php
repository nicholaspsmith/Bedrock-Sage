<?php
?>


    <div class="row">
        <div class="col-md-3">
            <?php get_sidebar(); ?>
        </div>
        <div class="col-md-9">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'content', get_post_format() ); ?>
                <?php endwhile; // end of the loop. ?>
            <?php else : ?>
                <?php get_template_part( 'content', 'none' ); ?>
            <?php endif; ?>
        </div>
        
    </div>

