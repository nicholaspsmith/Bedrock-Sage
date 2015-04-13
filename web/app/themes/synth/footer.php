<?php
global $entiri_opt;
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 */
?>
        
        
    </div><!-- .content-wrapper -->
    
    <!-- Footer -->
    <?php if ( function_exists( 'vc_map' ) ) { ?>
        <footer class="footer">
            <?php
            $loop = new WP_Query( array( 'post_type' => 'footer' ) );
            while ( $loop->have_posts() ) : $loop->the_post();
                the_content();
            endwhile;
            wp_reset_query();
            ?>
        </footer> 
    <!-- Footer End -->
    <?php } else { ?>
        <footer class="footer">
            
            <div class="container relative">
                <div class="wpb_row row copyright" data-parallax-speed="">
                    <div class="vc_col-sm-12 wpb_column vc_column_container">
                        <div class="wpb_wrapper">

                            <div class="vc_row wpb_row vc_inner row">
                                <div class="vc_col-sm-6 copyright-info wpb_column vc_column_container">
                                    <div class="wpb_wrapper">
                                        
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <p><span style="color: #ffffff;">© 2015 THE SYNTH. All Rights Reserved. Created by <a style="color: #ffffff;" href="http://www.entiri.com" target="_blank" rel="external">entiri</a></span></p>

                                            </div> 
                                        </div> 
                                    </div> 
                                </div> 

                                <div class="vc_col-sm-6 wpb_column vc_column_container">
                                    <div class="wpb_wrapper">
                                         
                                        <div class="social-3">
                                            <a href="#"><i class="fa fa-android"></i></a>
                                            <a href="#"><i class="fa fa-apple"></i></a>
                                            <a href="#"><i class="fa fa-dribbble"></i></a>
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-flickr"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                                                                                                                                                                                                  </div>
                                        </div>
                                    </div> 
                                </div> 
                            </div>
                                    
                        </div> 
                    </div> 
                </div>
            </div>
        </footer>
    <?php } ?>
<?php wp_footer(); ?>
</body>
</html>