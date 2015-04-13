<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 */
?>
<div class="divider"></div>
<h2 class="text-center"><?php echo the_title(); ?></h2>
<div class="space60"></div>

<div class="blog-detail">
    <?php the_post_thumbnail('listing'); ?>
    <div class="space25"></div>
    <div class="post-info-container">
      <div class="row">
        <div class="col-md-8">
          <div class="post-info">
            <span class="post-data">
              <i class="fa fa-user"></i> <?php _e('By', 'synth'); ?> <?php echo get_the_author(); ?>
            </span>
            <span class="post-data"> 
              <?php if(get_the_tags() != null) { ?>
              
                <i class="fa fa-tag"></i> <?php the_tags(); ?>
                
              <?php } ?>
            </span>
            <span class="post-data">  
              <i class="fa fa-comment"></i> <?php comments_number(); ?>
            </span> 
          </div>
        </div>
        <div class="col-md-4">
          <?php $thumb = wp_get_attachment_image_src( get_post_meta($post->ID, '_thumbnail_id', true), 'portfolio-medium' );
          $img_url = $thumb['0']; 
          $img_url = str_replace('http://', '', $img_url)
          ?>
          <?php
          $title=urlencode(get_the_title());
          $url=str_replace('http://', '', get_permalink());
          $url=urlencode($url);
          $summary=urlencode(get_the_content());
          $image=urlencode($img_url);
          ?>
          
          <div class="social f-right">
            <a onClick="window.open('https://plus.google.com/share?url=<?php echo esc_url($url); ?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)"><i class="fa fa-google-plus" title="Google plus"></i></a>
            <a onClick="window.open('http://twitter.com/home?status=<?php echo esc_url($title); ?> <?php echo esc_url($url); ?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)"><i class="fa fa-twitter" title="twitter"></i></a>
            <a onClick="window.open('http://www.facebook.com/sharer.php?s=100&amp;p[title]=<?php echo esc_url($title);?>&amp;p[summary]=<?php echo esc_url($summary);?>&amp;p[url]=<?php echo esc_url($url); ?>&amp;p[images][0]=<?php echo esc_url($image);?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)"><i class="fa fa-facebook" title="facebook"></i></a>
            
          </div> 
          
        </div>
      </div>
    </div> 
    <div class="space30"></div>
    <?php the_content(); ?>
</div>

<?php if (comments_open($post->ID)){ ?>
    <?php comments_template( '', true ); ?>
<?php } ?>








