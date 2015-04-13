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
<div class="blog">
<div class="container">
  <div class="row">
    <div class="col-md-12">
        <div class="divider"></div>
        <h2 class="text-center"><?php echo $entiri_opt['blog_title']; ?></h2>
        <h5 class="text-center"><?php echo $entiri_opt['blog_subtitle']; ?></h5>
        <div class="space80"></div>
    </div>
  </div>
	
	<div class="row blog-masonry-container">
    	
		<?php
		
		while ( have_posts() ) : the_post(); 
			?>
			<div class="col-md-4 col-sm-6">
              <div class="blog-post">
                
                <?php the_post_thumbnail('slider-small'); ?>

                <table class="post-info">
                  <tr>
                    <td>
                      <div class="day"><?php echo get_the_date('d'); ?></div>
                      <div class="month-year"><?php echo get_the_date('F Y'); ?></div>
                    </td>
                    <td>
                      <div class="title-container">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <h6>By <?php echo get_the_author(); ?></h6>
                      </div>
                    </td>
                  </tr>
                </table>
                <?php the_excerpt(); ?>
              </div>
            </div>
            <?php
		endwhile;
		?>
    	
    </div>
</div>	
</div>

<?php get_footer(); ?>