<?php
require_once ( ABSPATH . 'wp-admin/includes/image.php' );
require_once('font-awesome-functions.php');
require_once('install-plugins.php'); 
require_once('installation.php');

if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/redux-framework/ReduxCore/framework.php' ) ) {
	require_once( dirname( __FILE__ ) . '/redux-framework/ReduxCore/framework.php' );
}
if ( !isset( $entiri_opt ) && file_exists( dirname( __FILE__ ) . '/redux-framework/config/config.php' ) ) {
	require_once( dirname( __FILE__ ) . '/redux-framework/config/config.php' );
}

if ( function_exists( 'vc_map' ) ) {
	require_once('visual-composer-functions.php');
}

if (class_exists('woocommerce')) {
	require_once('woocommerce-functions.php');		
}

if(function_exists('vc_set_as_theme')) vc_set_as_theme();

/**
 * synth functions and definitions.
 *
 * Sets up the theme and provides some helper functions, which are used
 * in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are instead attached
 * to a filter or action hook.
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 *
 * @package WordPress
 * @subpackage synth
 * @since synth 1.0
 */

/**
 * Sets up the content width value based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 625;





function synth_setup() {
	
	load_theme_textdomain( 'synth', get_template_directory() . '/languages' );

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );


	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', __( 'Primary Menu', 'synth' ) );

	// This theme supports a variety of post formats.
	add_theme_support( 'post-formats', array( 'video', 'image', 'quote' ) );

	add_theme_support( 'woocommerce' );


	// This theme uses a custom image size for featured images, displayed on "standard" posts.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 200, 200, true ); // Unlimited height, soft crop
	add_image_size( "slider", 1920,500, true );
	add_image_size( "slider-medium", 1170,500, true );
	add_image_size( "slider-small", 768,460, true );
	add_image_size( "recent-project", 300,500, true );
	add_image_size( "project-detail", 970,500, true );
	add_image_size( "team", 800,800, true );
	add_image_size( "listing", 1140,695, true );  
	add_image_size( "lightbox", 1200,1200, false ); 
	add_image_size( "logo", 200,140, false );   
	add_image_size( "logo-thumb", 150,140, false );
	add_image_size( "recent-news", 768,512, true );
	add_image_size( "portfolio-masonry", 500,9000, false );

}
add_action( 'after_setup_theme', 'synth_setup' );

add_action( 'init', 'post_type_settings' );

function post_type_settings() {
	register_post_type( 'slider',
			array(
				'labels' => array(
					'name' => __( 'Slider', 'synth' ),
					'singular_name' => __( 'Slider', 'synth' )
				),
			'public' => true,
			'has_archive' => true,
			'taxonomies' => array('category', 'post_tag'),
			'rewrite' => array('slug' => 'slider')
			)
		);
	add_post_type_support('slider', 'thumbnail');
	add_post_type_support( 'slider', 'categories');
	
	register_post_type( 'portfolio',
			array(
				'labels' => array(
					'name' => __( 'Portfolio', 'synth' ),
					'singular_name' => __( 'Portfolio', 'synth' )
				),
			'public' => true,
			'has_archive' => false,
			'taxonomies' => array('category', 'post_tag'),
			'rewrite' => array('slug' => 'portfolio')
			)
		);
	add_post_type_support('portfolio', 'thumbnail');
	add_post_type_support( 'portfolio', 'categories');

	register_post_type( 'team',
			array(
				'labels' => array(
					'name' => __( 'Team', 'synth' ),
					'singular_name' => __( 'Team', 'synth' )
				),
			'public' => true,
			'has_archive' => false,
			'taxonomies' => array('category', 'post_tag'),
			'rewrite' => array('slug' => 'team')
			)
		);

	add_post_type_support('team', 'thumbnail');
	add_post_type_support( 'team', 'categories');

	$labels = array(
	    'name' => 'Footer',
	    'singular_name' => 'Footer',
	    'add_new' => 'Add New',
	    'add_new_item' => 'Add New Footer',
	    'edit_item' => 'Edit Footer',
	    'new_item' => 'New Footer',
	    'all_items' => 'All Footer',
	    'view_item' => 'View Footer',
	    'search_items' => 'Search Footer',
	    'not_found' =>  'No footer found',
	    'not_found_in_trash' => 'No footer found in Trash', 
	    'parent_item_colon' => '',
	    'menu_name' => 'Footer'
		);

	$args = array(
	    'labels' => $labels,
	    'public' => true,
	    'publicly_queryable' => false,
	    'show_ui' => true, 
	    'show_in_menu' => true, 
	    'query_var' => true,
	    'rewrite' => array( 'slug' => 'footer' ),
	    'capability_type' => 'post',
	    'has_archive' => false, 
	    'hierarchical' => false,
	    'menu_position' => null,
	    'supports' => array( 'title', 'editor', 'author')
	  ); 
	register_post_type( 'footer', $args );
	
}

function synth_admin_style() {
    global $post_type;
    wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/css/font-awesome.min.css' );
    wp_enqueue_style( 'fa-style' , get_template_directory_uri().'/css/fa-style.css' );
    wp_enqueue_style( 'typicons', get_template_directory_uri().'/css/typicons.min.css' );
    wp_enqueue_style( 'typcn-style' , get_template_directory_uri().'/css/typcn-style.css' );

    $subset = _x( 'no-subset', 'Open Sans font: add new subset (greek, cyrillic, vietnamese)', 'synth' );

    $subsets = '';
	if ( 'cyrillic' == $subset )
		$subsets .= ',cyrillic,cyrillic-ext';
	elseif ( 'greek' == $subset )
		$subsets .= ',greek,greek-ext';
	elseif ( 'vietnamese' == $subset )
		$subsets .= ',vietnamese';

	$protocol = is_ssl() ? 'https' : 'http';
	$query_args = array(
		'family' => 'Open+Sans:300,300italic,700italic,400,600,700',
		'subset' => $subsets,
	);
	wp_enqueue_style( 'synth-fonts', add_query_arg( $query_args, "$protocol://fonts.googleapis.com/css" ), array(), null );
}

add_action( 'admin_enqueue_scripts', 'synth_admin_style', 11 );

function synth_custom_style() { 
	global $entiri_opt;
	if(isset($entiri_opt)) {
	?>
		<style type="text/css" class="theme-generated-style" scoped>
			body {
				<?php
				if(isset($entiri_opt['body-font'])) { ?>
					font-family: <?php echo $entiri_opt['body-font']['font-family']; ?>;
  					font-size: <?php echo $entiri_opt['body-font']['font-size']; ?>;
  					line-height: <?php echo $entiri_opt['body-font']['line-height']; ?>;
  					color: <?php echo $entiri_opt['body-font']['color']; ?>;
				<?php
				}
				if(isset($entiri_opt['color-background'])) { ?>
					background-color: <?php echo $entiri_opt['color-background']; ?>
				<?php
				}
				?>
			}
			<?php if(isset($entiri_opt['link-color'])) { ?>
				a {
					color: <?php echo $entiri_opt['link-color']['regular']; ?>;
				}
				a:hover, .wpb_toggle:hover, #content h4.wpb_toggle:hover {
					color: <?php echo $entiri_opt['link-color']['hover']; ?>;
				}
			<?php } ?>
			<?php 
			for ($i = 1;$i < 7;$i++) {
				if(isset($entiri_opt['h'.$i.'-font'])) { 
					
					?>
					h<?php echo $i; ?>, h<?php echo $i; ?> a {
						font-family: <?php echo $entiri_opt['h'.$i.'-font']['font-family']; ?>;
						font-size: <?php echo $entiri_opt['h'.$i.'-font']['font-size']; ?>;
						<?php if(isset($entiri_opt['h'.$i.'-font']['font-weight'])) { ?>
						font-weight: <?php echo $entiri_opt['h'.$i.'-font']['font-weight']; ?>;
						<?php } ?>
						line-height: <?php echo $entiri_opt['h'.$i.'-font']['line-height']; ?>;
						color: <?php echo $entiri_opt['h'.$i.'-font']['color']; ?>;
					}
			<?php 

				} 
			} ?>
			
			@media (max-width: <?php echo $entiri_opt['mobile_menu_display_width']; ?>px) {
				.select-menu {    
					display: block;
				}
				.navbar .nav{
				    display:none !important;
				}
			}


		</style>
	<?php
	}
}

function copy_and_attach($file,$mime_type) {
	$uploads = wp_upload_dir();
	copy(get_template_directory_uri().'/'.$file, $uploads['path'].'/'.basename($file));
	$url = $uploads['url'].'/'.basename($file);
	$attachment = array(
        'post_mime_type' => $mime_type,
        'post_title' => basename($file),
        'post_content' => '',
        'post_status' => 'published',
        'guid' => $url
    );
    $attach_id = wp_insert_attachment($attachment, $uploads['path'].'/'.basename($file));
    $attach_data = wp_generate_attachment_metadata( $attach_id, $uploads['path'].'/'.basename($file) );
	wp_update_attachment_metadata( $attach_id,  $attach_data );
	
	return array('url' => $url , 'id' => $attach_id );
	
}

function synth_scripts_styles() {
	global $wp_styles;
	global $entiri_opt;

	/*
	 * Adds JavaScript to pages with the comment form to support
	 * sites with threaded comments (when in use).
	 */
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/*
	 * Adds JavaScript for handling the navigation menu hide-and-show behavior.
	 */
	
	wp_enqueue_script( 'jquery', $in_footer = false );
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js',array(), '', false );
	wp_enqueue_script( 'animate', get_template_directory_uri() . '/js/animate.js',array(), '', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js',array(), '', true );
	wp_enqueue_script( 'easing', get_template_directory_uri() . '/js/jquery.easing.js',array(), '', true );
	wp_enqueue_script( 'fitwids', get_template_directory_uri() . '/js/jquery.fitvids.js', $deps = array('jquery'), '', true );
	wp_register_script( 'isotope', get_template_directory_uri() . '/js/jquery.isotope.min.js', $deps = array('jquery'), '', true );
	wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', $deps = array('jquery'), '', true );
	wp_enqueue_script( 'retina', get_template_directory_uri() . '/js/retina.js', $deps = array('jquery'), '', true );
	wp_enqueue_script( 'sticky', get_template_directory_uri() . '/js/jquery.sticky.js', $deps = array('jquery'), '', true );
	wp_enqueue_script( 'respond', get_template_directory_uri() . '/js/respond.min.js', $deps = array('jquery'), '', true );
	wp_enqueue_script( 'scale', get_template_directory_uri() . '/js/scale.fix.js', $deps = array('jquery'), '', true );
	wp_register_script( 'parallax', get_template_directory_uri() . '/js/jquery.parallax-1.1.3.js', $deps = array('jquery'), '', true );
	wp_enqueue_script( 'selectnav', get_template_directory_uri() . '/js/selectnav.js', $deps = array('jquery'), '', true );
	wp_enqueue_script( 'classie', get_template_directory_uri() . '/js/classie.js', $deps = array('jquery'), '', true );
	if($entiri_opt['menu-layout'] == 'overlay' || isset($_GET['menu_layout'])) {
		wp_enqueue_script( 'menu-overlay', get_template_directory_uri() . '/js/menu-overlay.js', $deps = array('jquery'), '', true );
	}
	
	wp_enqueue_script( 'functions', get_template_directory_uri() . '/js/functions.js', array('jquery'), '', true );
	
	/*
	 * Loads our special font CSS file.
	 *
	 * The use of Open Sans by default is localized. For languages that use
	 * characters not supported by the font, the font can be disabled.
	 *
	 * To disable in a child theme, use wp_dequeue_style()
	 * function mytheme_dequeue_fonts() {
	 *     wp_dequeue_style( 'synth-fonts' );
	 * }
	 * add_action( 'wp_enqueue_scripts', 'mytheme_dequeue_fonts', 11 );
	 */

	/* translators: If there are characters in your language that are not supported
	   by Open Sans, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Open Sans font: on or off', 'synth' ) ) {
		$subsets = 'latin,latin-ext';

		/* translators: To add an additional Open Sans character subset specific to your language, translate
		   this to 'greek', 'cyrillic' or 'vietnamese'. Do not translate into your own language. */
		$subset = _x( 'no-subset', 'Open Sans font: add new subset (greek, cyrillic, vietnamese)', 'synth' );

		if ( 'cyrillic' == $subset )
			$subsets .= ',cyrillic,cyrillic-ext';
		elseif ( 'greek' == $subset )
			$subsets .= ',greek,greek-ext';
		elseif ( 'vietnamese' == $subset )
			$subsets .= ',vietnamese';

		$protocol = is_ssl() ? 'https' : 'http';
		$query_args = array(
			'family' => 'Open+Sans:400,700,400italic,700italic',
			'subset' => $subsets,
		);
		wp_enqueue_style( 'synth-fonts', add_query_arg( $query_args, "$protocol://fonts.googleapis.com/css" ), array(), null );
	}

	/*
	 * Loads our main stylesheet.
	 */
	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css' );
	//wp_enqueue_style( 'entypo', get_template_directory_uri().'/css/entypo.css' );
	//wp_enqueue_style( 'owl-carousel', get_template_directory_uri().'/css/owl.carousel.css' );
	
	wp_enqueue_style( 'animate', get_template_directory_uri().'/css/animate.css' );
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri().'/css/magnific-popup.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/css/font-awesome.min.css' );
	wp_enqueue_style( 'typicons', get_template_directory_uri().'/css/typicons.min.css' );
	wp_enqueue_style( 'supersized', get_template_directory_uri().'/css/supersized.css' );
	wp_enqueue_style( 'menu-overlay', get_template_directory_uri().'/css/menu-overlay.css' );
	wp_enqueue_style( 'wpb_reset', get_template_directory_uri().'/css/wpb_reset.css' );
	wp_enqueue_style( 'synth-style', get_stylesheet_uri() );

	
	

	/*
	 * Loads the Internet Explorer specific stylesheet.
	 */
	wp_enqueue_style( 'synth-ie', get_template_directory_uri() . '/css/ie.css', array( 'synth-style' ), '20121010' );
	$wp_styles->add_data( 'synth-ie', 'conditional', 'lt IE 9' );
	/*
	* Scripts
	*/
	

}
add_action( 'wp_enqueue_scripts', 'synth_scripts_styles' );

function synth_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'synth' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'synth_wp_title', 10, 2 );

/**
 * Makes our wp_nav_menu() fallback -- wp_page_menu() -- show a home link.
*/ 
function synth_page_menu_args( $args ) {
	if ( ! isset( $args['show_home'] ) )
		$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'synth_page_menu_args' );

/**
 * Registers our main widget area and the front page widget areas.
 */
function synth_widgets_init() {

	register_sidebar( array(
		'name' => __( 'Main Sidebar', 'synth' ),
		'id' => 'sidebar-1',
		'description' => __( 'Appears on posts and pages with Sidebar template', 'synth' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Shop Sidebar', 'synth' ),
		'id' => 'shop',
		'description' => __( 'Appears on shop page', 'synth' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

}
add_action( 'widgets_init', 'synth_widgets_init' );

if ( ! function_exists( 'synth_content_nav' ) ) :
/**
 * Displays navigation to next/previous pages when applicable.
 */
function synth_content_nav( $html_id ) {
	global $wp_query;

	$html_id = esc_attr( $html_id );

	if ( $wp_query->max_num_pages > 1 ) { ?>
		<div class="row">
	      <div class="span12 center">
	        <div class="pagination">
	          <ul>
	          	<li><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'synth' ) ); ?></li>
	          	<li><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'synth' ) ); ?></li>
	          </ul>
	        </div>
	      </div>
	    </div>
	<?php } else { ?>
		<div class="row space50"></div>
	<?php
	}
}
endif;





function synth_show_category_links($id_post) {
	$post_categories = wp_get_post_categories( $id_post );	
    $categories = '';
    $i = 0;
	foreach($post_categories as $c){
		$i++;
		$cat = get_category( $c );
		$url = get_category_link( $c );
		if($i != count($post_categories)) {
			$categories .= '<a href="'.$url.'">'.$cat->name.'</a> / ';
		}
		else {
			$categories .= '<a href="'.$url.'">'.$cat->name.'</a>';
		}
	}
	return $categories;
}

if ( ! function_exists( 'synth_list_gallery_categories' ) ) :

function synth_list_gallery_categories() {

	$categories = get_categories( array('hide_empty' => false) );
	foreach ($categories as $category) { ?>
		<option value="<?php echo esc_attr($category->term_id); ?>" <?php if($current==$category->term_id) echo 'selected="selected"'; ?>>
        	<?php echo $category->name; ?>
        </option>	
		<?php
	}
		
}

endif;


function synth_social_icons_display() { 
	global $entiri_opt;
	ob_start(); 
	if (isset($entiri_opt['social-networks'])) {
		foreach ($entiri_opt['social-networks'] as $key => $value) {
			if($value!='') {
			?>
				<a href="<?php echo esc_url($value); ?>"><i class="fa <?php echo esc_attr($key); ?>"></i></a>
			<?php
			}
		}
	}
	$output_string = ob_get_contents();
	ob_end_clean();
	return $output_string;
	
}

add_shortcode('synth_social_icons', 'synth_social_icons_display');


function synth_video() {
	global $post;
	$link = get_post_meta($post->ID, 'synth_vimeo_link', true);
	$id = explode('/', $link);

	return '<iframe class="video-content" src="http://player.vimeo.com/video/'.$id[3].'?title=0&amp;byline=0&amp;portrait=0" ></iframe>';
}



if ( ! function_exists( 'synth_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own synth_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 */
function synth_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
		// Display trackbacks differently than normal comments.
	?>
	<div class="blog-comment" id="comment-<?php comment_ID(); ?>">
		<p><?php _e( 'Pingback:', 'synth' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( __( '(Edit)', 'synth' ), '<span class="edit-link">', '</span>' ); ?></p>
	<?php
			break;
		default :
		// Proceed with normal comments.
		global $post;
	?>
	
		<div class="blog-comment" id="comment-<?php comment_ID(); ?>">
			
			<div class="user-image"><i class="fa fa-user"></i></div>
		
			<div class="comment-data">
		    	<h4><?php echo get_comment_author_link(); ?></h4> 
		    	<p>
		    		<?php echo get_comment_date(); echo ' '. get_comment_time(); ?> 
		    		<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __('Reply', 'synth'), 'after' => '', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
		    	</p>
		    	<?php if ( '0' == $comment->comment_approved ) : ?>
				<p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'synth' ); ?></p>
				<?php endif; ?>
				<?php comment_text(); ?>
				<?php edit_comment_link( __( 'Edit', 'synth' ), '<p class="edit-link">', '</p>' ); ?>
				<hr>
				<div class="space30"></div> 
        	</div>
        	
	
		
	<?php
		break;
	endswitch; // end comment_type check
}
endif;

if ( ! function_exists( 'synth_entry_meta' ) ) :
/**
 * Prints HTML with meta information for current post: categories, tags, permalink, author, and date.
 *
 * Create your own synth_entry_meta() to override in a child theme.
 */
function synth_entry_meta() {
	// Translators: used between list items, there is a space after the comma.
	$categories_list = get_the_category_list( __( ', ', 'synth' ) );

	// Translators: used between list items, there is a space after the comma.
	$tag_list = get_the_tag_list( '', __( ', ', 'synth' ) );

	$date = sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a>',
		esc_url( get_permalink() ),
		esc_attr( get_the_time() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() )
	);

	$author = sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		esc_attr( sprintf( __( 'View all posts by %s', 'synth' ), get_the_author() ) ),
		get_the_author()
	);

	// Translators: 1 is category, 2 is tag, 3 is the date and 4 is the author's name.
	if ( $tag_list ) {
		$utility_text = __( 'This entry was posted in %1$s and tagged %2$s on %3$s<span class="by-author"> by %4$s</span>.', 'synth' );
	} elseif ( $categories_list ) {
		$utility_text = __( 'This entry was posted in %1$s on %3$s<span class="by-author"> by %4$s</span>.', 'synth' );
	} else {
		$utility_text = __( 'This entry was posted on %3$s<span class="by-author"> by %4$s</span>.', 'synth' );
	}

	printf(
		$utility_text,
		$categories_list,
		$tag_list,
		$date,
		$author
	);
}
endif;

/**
 * Extends the default WordPress body class to denote:
 * 1. Using a full-width layout, when no active widgets in the sidebar
 *    or full-width template.
 * 2. Front Page template: thumbnail in use and number of sidebars for
 *    widget areas.
 * 3. White or empty background color to change the layout and spacing.
 * 4. Custom fonts enabled.
 * 5. Single or multiple authors.
 */
function synth_body_class( $classes ) {
	global $entiri_opt;
	global $post;
	$background_color = get_background_color();

	if ( ! is_active_sidebar( 'sidebar-1' ) || is_page_template( 'page-templates/full-width.php' ) )
		$classes[] = 'full-width';

	if ( is_page_template( 'page-templates/front-page.php' ) ) {
		$classes[] = 'template-front-page';
		if ( has_post_thumbnail() )
			$classes[] = 'has-post-thumbnail';
		if ( is_active_sidebar( 'sidebar-2' ) && is_active_sidebar( 'sidebar-3' ) )
			$classes[] = 'two-sidebars';
	}
	if(get_post_meta($post->ID, 'header_content', true) == '' ) {
		$classes[] = 'no-header-content';
	}

	if ( empty( $background_color ) )
		$classes[] = 'custom-background-empty';
	elseif ( in_array( $background_color, array( 'fff', 'ffffff' ) ) )
		$classes[] = 'custom-background-white';

	// Enable custom font class only if the font CSS is queued to load.
	if ( wp_style_is( 'reno-fonts', 'queue' ) )
		$classes[] = 'custom-font-enabled';

	if ( ! is_multi_author() )
		$classes[] = 'single-author';

	

	return $classes;
}

add_filter( 'body_class', 'synth_body_class' );

/**
 * Adjusts content_width value for full-width and single image attachment
 * templates, and when there are no active widgets in the sidebar.
 */
function synth_content_width() {
	if ( ! isset( $content_width ) ) {
		$content_width = 1140;
	}
}
add_action( 'template_redirect', 'synth_content_width' );

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 */
function synth_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
}
add_action( 'customize_register', 'synth_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function synth_customize_preview_js() {
	wp_enqueue_script( 'synth-customizer', get_template_directory_uri() . '/js/theme-customizer.js', array( 'customize-preview' ), '20120827', true );
}
add_action( 'customize_preview_init', 'synth_customize_preview_js' );



function synth_show_portfolio_categories($id_post) {
	global $entiri_opt;
	$post_categories = wp_get_post_categories( $id_post );	
    $categories = '';
    $i = 0;
	foreach($post_categories as $c){
		$i++;
		//if($c != $entiri_opt['portfolio-category']) {
			$cat = get_category( $c );
			$url = get_category_link( $c );
			if($i != count($post_categories)) {
				$categories .= $cat->name.' / ';
			}
			else {
				$categories .= $cat->name;
			}
		//}
	}
	return $categories;
}


function synth_meta_boxes() {
	add_meta_box('header-content', 'Header content', 'synth_header_content_function', 'page', 'normal', 'high');
	add_meta_box('member-meta', 'Member properties', 'synth_member_form_function', 'team', 'normal', 'high');
	add_meta_box('client-meta', 'Client properties', 'synth_client_form_function', 'client', 'normal', 'high');
	add_meta_box('box-page-properties', __('Page properties', 'decoy'), 'synth_page_properties_function', 'page', 'normal', 'high');
	add_meta_box('box-meta-video', __('Video', 'synth'), 'synth_video_box_function', 'post', 'normal', 'high');
	add_meta_box('box-meta-gallery', __('Gallery', 'vow'), 'synth_gallery_box_function', 'post', 'normal', 'high');
	add_meta_box('box-meta-portfolio', __('Portfolio properties', 'synth'), 'synth_portfolio_form_function', 'portfolio', 'normal', 'high');
}

function synth_header_content_function($post) { ?>
	<div id="poststuff">
		<?php wp_editor(get_post_meta($post->ID, 'header_content', true), "header_content"); ?>
	</div>
<?php
}

function synth_page_properties_function($post) { ?>
	<div class="page-properties">
		<table class="form-table">
			<tbody>
				<tr>
					<th><?php printf('Hide heading:', 'decoy'); ?></th>
					<td>
						<input type="checkbox" name="hide_heading" value="yes" <?php if(get_post_meta($post->ID, 'hide_heading', true) == 'yes') echo 'checked="checked"'; ?>>
					</td>
				</tr>
				<tr>
					<th><?php printf('Heading position:', 'decoy'); ?></th>
					<td>
						<select name="heading_position">
							<option value="text-left" <?php if(get_post_meta($post->ID, 'heading_position', true) == 'text-left') echo 'selected="selected"'; ?>>Left</option>
							<option value="text-center" <?php if(get_post_meta($post->ID, 'heading_position', true) == 'text-center') echo 'selected="selected"'; ?>>Center</option>
							<option value="text-right" <?php if(get_post_meta($post->ID, 'heading_position', true) == 'text-right') echo 'selected="selected"'; ?>>Right</option>
						</select>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
<?php
}

function synth_client_form_function($post) { ?>

	<div class="client-properties">
		<table class="form-table">
			<tbody>
				<tr>
					<th><?php printf('Client link', 'synth'); ?></th>
					<td>
						<input type="text" name="synth_client_link" value="<?php echo get_post_meta($post->ID, 'synth_client_link', true); ?>">
					</td>
				</tr>
			</tbody>
		</table>
	</div>
<?php
}

function synth_member_form_function($post) {
	?>
	<div class="member_properties">
    	<table class="form-table">
			<tbody>
		        <tr>              
					<th>Member job:</th><td><input type="text" name="member_job" value="<?php echo get_post_meta($post->ID, 'member_job', true) ?>" size="50" /></td>
				</tr>

				<tr>              
					<th>E-mail:</th><td><input type="text" name="member_email" value="<?php echo get_post_meta($post->ID, 'member_email', true) ?>" size="50" /></td>
				</tr>
				<tr>              
					<th>Adn:</th><td><input type="text" name="member_adn" value="<?php echo get_post_meta($post->ID, 'member_adn', true) ?>" size="50" /></td>
				</tr>
				<tr>              
					<th>Android:</th><td><input type="text" name="member_android" value="<?php echo get_post_meta($post->ID, 'member_android', true) ?>" size="50" /></td>
				</tr>
				<tr>              
					<th>Apple:</th><td><input type="text" name="member_apple" value="<?php echo get_post_meta($post->ID, 'member_apple', true) ?>" size="50" /></td>
				</tr>
				<tr>              
					<th>Bitbucket:</th><td><input type="text" name="member_bitbucket" value="<?php echo get_post_meta($post->ID, 'member_bitbucket', true) ?>" size="50" /></td>
				</tr>
				<tr>              
					<th>CSS 3:</th><td><input type="text" name="member_css3" value="<?php echo get_post_meta($post->ID, 'member_css3', true) ?>" size="50" /></td>
				</tr>
				<tr>              
					<th>Dribbble:</th><td><input type="text" name="member_dribbble" value="<?php echo get_post_meta($post->ID, 'member_dribbble', true) ?>" size="50" /></td>
				</tr>
				<tr>              
					<th>Dropbox:</th><td><input type="text" name="member_dropbox" value="<?php echo get_post_meta($post->ID, 'member_dropbox', true) ?>" size="50" /></td>
				</tr>
				<tr>              
					<th>Foursquare:</th><td><input type="text" name="member_foursquare" value="<?php echo get_post_meta($post->ID, 'member_foursquare', true) ?>" size="50" /></td>
				</tr>
				<tr>              
					<th>Github:</th><td><input type="text" name="member_github" value="<?php echo get_post_meta($post->ID, 'member_github', true) ?>" size="50" /></td>
				</tr>
				<tr>              
					<th>HTML 5:</th><td><input type="text" name="member_html5" value="<?php echo get_post_meta($post->ID, 'member_html5', true) ?>" size="50" /></td>
				</tr>
				<tr>              
					<th>Instagram:</th><td><input type="text" name="member_instagram" value="<?php echo get_post_meta($post->ID, 'member_instagram', true) ?>" size="50" /></td>
				</tr>
				<tr>              
					<th>Tumblr:</th><td><input type="text" name="member_tumblr" value="<?php echo get_post_meta($post->ID, 'member_tumblr', true) ?>" size="50" /></td>
				</tr>
				<tr>              
					<th>Facebook link:</th><td><input type="text" name="member_facebook" value="<?php echo get_post_meta($post->ID, 'member_facebook', true) ?>" size="50" /></td>
				</tr>
				<tr>              
					<th>Google+ link:</th><td><input type="text" name="member_google" value="<?php echo get_post_meta($post->ID, 'member_google', true) ?>" size="50" /></td>
				</tr>
				<tr>              
					<th>Twitter link:</th><td><input type="text" name="member_twitter" value="<?php echo get_post_meta($post->ID, 'member_twitter', true) ?>" size="50" /></td>
				</tr>
				<tr>              
					<th>Linkedin link:</th><td><input type="text" name="member_linkedin" value="<?php echo get_post_meta($post->ID, 'member_linkedin', true) ?>" size="50" /></td>
				</tr>
				<tr>              
					<th>Pinterest link:</th><td><input type="text" name="member_pinterest" value="<?php echo get_post_meta($post->ID, 'member_pinterest', true) ?>" size="50" /></td>
				</tr>
				<tr>              
					<th>Skype link:</th><td><input type="text" name="member_skype" value="<?php echo get_post_meta($post->ID, 'member_skype', true) ?>" size="50" /></td>
				</tr>
				<tr>              
					<th>Flick link:</th><td><input type="text" name="member_flickr" value="<?php echo get_post_meta($post->ID, 'member_flickr', true) ?>" size="50" /></td>
				</tr>
			</tbody>
		</table>
	</div>
	<?php
}

function synth_portfolio_form_function($post) { ?>
	<div class="portfolio-properties">
		<table class="form-table">
			<tbody>
				<tr>
					<th><?php _e('Excerpt', 'synth'); ?></th>
					<td>
						<textarea name="synth_portfolio_excerpt" cols="40" rows="7"><?php echo get_post_meta($post->ID, 'synth_portfolio_excerpt', true); ?></textarea>
					</td>
				</tr>
				<tr>
					<th><?php _e('Project url', 'synth'); ?></th>
					<td>
						<input type="text" name="synth_portfolio_url" value="<?php echo get_post_meta($post->ID, 'synth_portfolio_url', true); ?>">
					</td>
				</tr>
			</tbody>
		</table>
	</div>
<?php
}


function synth_video_box_function($post) { ?>
	<div class="video-properties">
		<table class="form-table">
			<tbody>
				<tr>
					<th><?php printf('Vimeo link', 'synth'); ?></th>
					<td>
						<input type="text" name="synth_vimeo_link" value="<?php echo get_post_meta($post->ID, 'synth_vimeo_link', true); ?>">
					</td>
				</tr>
			</tbody>
		</table>
	</div>
<?php
}

function synth_gallery_box_function($post) { ?>
	<div id="poststuff">
		<?php wp_editor(get_post_meta($post->ID, 'synth_post_gallery', true), "synth_post_gallery"); ?>
	</div>
<?php
}

function synth_save_meta($post) {

	
    if (isset($_POST['member_job'])) {
    	update_post_meta($post, 'member_job', $_POST['member_job']);
    }
    if (isset($_POST['member_email'])) {
    	update_post_meta($post, 'member_email', $_POST['member_email']);
    }
    if (isset($_POST['member_adn'])) {
    	update_post_meta($post, 'member_adn', $_POST['member_adn']);
    }
    if (isset($_POST['member_android'])) {
    	update_post_meta($post, 'member_android', $_POST['member_android']);
    }
    if (isset($_POST['member_apple'])) {
    	update_post_meta($post, 'member_apple', $_POST['member_apple']);
    }
    if (isset($_POST['member_bitbucket'])) {
    	update_post_meta($post, 'member_bitbucket', $_POST['member_bitbucket']);
    }
    if (isset($_POST['member_css3'])) {
    	update_post_meta($post, 'member_css3', $_POST['member_css3']);
    }
    if (isset($_POST['member_dribbble'])) {
    	update_post_meta($post, 'member_dribbble', $_POST['member_dribbble']);
    }
    if (isset($_POST['member_dropbox'])) {
    	update_post_meta($post, 'member_dropbox', $_POST['member_dropbox']);
    }
    if (isset($_POST['member_foursquare'])) {
    	update_post_meta($post, 'member_foursquare', $_POST['member_foursquare']);
    }
    if (isset($_POST['member_github'])) {
    	update_post_meta($post, 'member_github', $_POST['member_github']);
    }
    if (isset($_POST['member_html5'])) {
    	update_post_meta($post, 'member_html5', $_POST['member_html5']);
    }
    if (isset($_POST['member_instagram'])) {
    	update_post_meta($post, 'member_instagram', $_POST['member_instagram']);
    }
    if (isset($_POST['member_tumblr'])) {
    	update_post_meta($post, 'member_tumblr', $_POST['member_tumblr']);
    }
    if (isset($_POST['member_facebook'])) {
    	update_post_meta($post, 'member_facebook', $_POST['member_facebook']);
    }
    if (isset($_POST['member_google'])) {
    	update_post_meta($post, 'member_google', $_POST['member_google']);
    }
    if (isset($_POST['member_twitter'])) {
    	update_post_meta($post, 'member_twitter', $_POST['member_twitter']);
    }
    if (isset($_POST['member_skype'])) {
    	update_post_meta($post, 'member_skype', $_POST['member_skype']);
    }
    if (isset($_POST['member_flickr'])) {
    	update_post_meta($post, 'member_flickr', $_POST['member_flickr']);
    }
    if (isset($_POST['member_linkedin'])) {
    	update_post_meta($post, 'member_linkedin', $_POST['member_linkedin']);
    }
    if (isset($_POST['member_pinterest'])) {
    	update_post_meta($post, 'member_pinterest', $_POST['member_pinterest']);
    }
    if (isset($_POST['member_excerpt'])) {
    	update_post_meta($post, 'member_excerpt', $_POST['member_excerpt']);
    }
    if (isset($_POST['header_content'])) {
    	update_post_meta($post, 'header_content', $_POST['header_content']);
    }
    if (isset($_POST['synth_client_link'])) {
    	update_post_meta($post, 'synth_client_link', $_POST['synth_client_link']);
    }
    if (isset($_POST['synth_vimeo_link'])) {
    	update_post_meta($post, 'synth_vimeo_link', $_POST['synth_vimeo_link']);
    }
    if (isset($_POST['synth_portfolio_type'])) {
    	update_post_meta($post, 'synth_portfolio_type', $_POST['synth_portfolio_type']);
    }
    if (isset($_POST['synth_portfolio_excerpt'])) {
    	update_post_meta($post, 'synth_portfolio_excerpt', $_POST['synth_portfolio_excerpt']);
    }
    if (isset($_POST['synth_portfolio_gallery'])) {
    	update_post_meta($post, 'synth_portfolio_gallery', $_POST['synth_portfolio_gallery']);
    }
    if (isset($_POST['synth_portfolio_link'])) {
    	update_post_meta($post, 'synth_portfolio_link', $_POST['synth_portfolio_link']);
    }
    if (isset($_POST['synth_portfolio_url'])) {
    	update_post_meta($post, 'synth_portfolio_url', $_POST['synth_portfolio_url']);
    }
    if (isset($_POST['slider_caption_position'])) {
    	update_post_meta($post, 'slider_caption_position', $_POST['slider_caption_position']);
    }
    if (isset($_POST['synth_portfolio_template'])) {
    	update_post_meta($post, 'synth_portfolio_template', $_POST['synth_portfolio_template']);
    }
    if (isset($_POST['synth_post_gallery'])) {
    	update_post_meta($post, 'synth_post_gallery', $_POST['synth_post_gallery']);
    }
    if (isset($_POST['header_content'])) {
    	update_post_meta($post, 'header_content', $_POST['header_content']);
    }

    if (isset($_POST['hide_heading'])) {
    	update_post_meta($post, 'hide_heading', 'yes');
    }
    else {
    	update_post_meta($post, 'hide_heading', '');
    }
    
    if (isset($_POST['heading_position'])) {
    	update_post_meta($post, 'heading_position', $_POST['heading_position']);
    }
    
    if (isset($_POST['show_breadcrumb'])) {
    	update_post_meta($post, 'show_breadcrumb', 'yes');
    }
    else {
    	update_post_meta($post, 'show_breadcrumb', '');
    }
    if (isset($_POST['synth_portfolio_info'])) {
    	update_post_meta($post, 'synth_portfolio_info', $_POST['synth_portfolio_info']);
    }
    if (isset($_POST['show_related_posts'])) {
    	update_post_meta($post, 'show_related_posts', 'yes');
    }
    else {
    	update_post_meta($post, 'show_related_posts', '');
    }
    
    
    

}

add_action('save_post', 'synth_save_meta');
add_action('add_meta_boxes', 'synth_meta_boxes');

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
	return '';
}
add_filter('excerpt_more', 'new_excerpt_more');


function synth_list_categories($current) {

	$categories = get_categories( array('hide_empty' => false) );
	foreach ($categories as $category) { ?>
		<option value="<?php echo esc_attr($category->term_id); ?>" <?php if($current==$category->term_id) echo 'selected="selected"'; ?>>
        	<?php echo $category->name; ?>
        </option>	
		<?php
	}
		
}
function synth_list_categories_names($current) {

	$categories = get_categories( array('hide_empty' => false) );
	foreach ($categories as $category) { ?>
		<option value="<?php echo esc_attr($category->slug); ?>" <?php if($current==$category->term_id) echo 'selected="selected"'; ?>>
        	<?php echo $category->name; ?>
        </option>	
		<?php
	}
		
}
function synth_send_mail() {
	if (isset($_POST['contact_name']) && isset($_POST['contact_email']) && isset($_POST['contact_message'])) {
		$message = 'From: '. $_POST['contact_name'] . '<' . $_POST['contact_email'] . '>' . "\r\n\r\n";
		$message .= $_POST['contact_message'];
		wp_mail( get_bloginfo('admin_email'), 'synth contact form', $message ); ?>
		<p><?php printf( __('Your message was sent', 'synth')); ?></p>
		<?php
	}
}
function synth_css_classes_for_vc_row_and_vc_column($class_string, $tag) {
    if($tag=='vc_row' || $tag=='vc_row_inner') {
        $class_string = str_replace('vc_row-fluid', 'row', $class_string);
    }
    if($tag=='vc_column' || $tag=='vc_column_inner') {
        $class_string = str_replace('vc_span1', 'col-sm-1', $class_string);
        $class_string = str_replace('vc_span2', 'col-sm-2', $class_string);
        $class_string = str_replace('vc_span3', 'col-sm-3', $class_string);
        $class_string = str_replace('vc_span4', 'col-sm-4', $class_string);
        $class_string = str_replace('vc_span5', 'col-sm-5', $class_string);
        $class_string = str_replace('vc_span6', 'col-sm-6', $class_string);
        $class_string = str_replace('vc_span7', 'col-sm-7', $class_string);
        $class_string = str_replace('vc_span8', 'col-sm-8', $class_string);
        $class_string = str_replace('vc_span9', 'col-sm-9', $class_string);
        $class_string = str_replace('vc_span10', 'col-sm-10', $class_string);
        $class_string = str_replace('vc_span11', 'col-sm-11', $class_string);
        $class_string = str_replace('vc_span12', 'col-sm-12', $class_string);
    }
    return $class_string;
}
// Filter to Replace default css class for vc_row shortcode and vc_column
add_filter('vc_shortcodes_css_class', 'synth_css_classes_for_vc_row_and_vc_column', 10, 2);


function synth_mobile_menu_script() { 
	global $entiri_opt;
	?>
	<script type="text/javascript">
	jQuery('header nav').meanmenu({
        meanMenuClose: "X", // single character you want to represent the close menu button
        meanMenuCloseSize: "22px", // set font size of close button
        meanMenuOpen: "<span /><span /><span />", // text/markup you want when menu is closed
        meanRevealPosition: "right", // left right or center positions
        meanRevealPositionDistance: "0", // Tweak the position of the menu
        meanRevealColour: "", // override CSS colours for the reveal background
        meanRevealHoverColour: "", // override CSS colours for the reveal hover
        meanScreenWidth: "<?php echo $entiri_opt['mobile_menu_display_width']; ?>", // set the screen width you want meanmenu to kick in at
        meanNavPush: "", // set a height here in px, em or % if you want to budge your layout now the navigation is missing.
        meanShowChildren: true, // true to show children in the menu, false to hide them
        meanExpandableChildren: true, // true to allow expand/collapse children
        meanExpand: "+", // single character you want to represent the expand for ULs
        meanContract: "-", // single character you want to represent the contract for ULs
        meanRemoveAttrs: false // true to remove classes and IDs, false to keep them
	});
	</script>
<?php
}
