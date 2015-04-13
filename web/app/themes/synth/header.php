<?php
global $entiri_opt;
?>
<!DOCTYPE html>

<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" rel="icon" type="image/png">
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<!--[if IE 7]>
<link href="css/font-awesome/font-awesome-ie7.min.css" rel="stylesheet">
<![endif]-->

<!-- Internet Explorer condition - HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->   
<?php wp_head(); ?>
	
</head>       
<body <?php body_class(); ?>>
	<?php synth_custom_style(); ?>
	<!-- Header -->	
	<header>
		<div class="space30"></div> 
		<?php   
	    if(isset($entiri_opt['logo'])) {
			$logo_url = $entiri_opt['logo']['url'];
		}
		?> 
	   <nav class="navbar" role="navigation">
	      <div class="navbar-inner">
	        <div class="container">
	          	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Home"><img src="<?php echo $logo_url; ?>" class="logo" alt=""></a>                   
	            <?php
	            if($entiri_opt['menu-layout'] == 'overlay' || isset($_GET['menu_layout'])) { ?>
	            	<button id="trigger-overlay" type="button"><i class="fa fa-reorder"></i></button>
	            	<div class="menu-overlay overlay-scale">
	            		<button type="button" class="overlay-close">Close</button>
	            		<?php
	            		if(isset($_GET['menu_layout'])) {
	            			wp_nav_menu(array('menu'=>'menu-creative','container'=>'nav', 'menu_class'=>'', 'menu_id' => '' ));
	            		}
	            		else {
	            			wp_nav_menu(array('theme_location'=>'primary','container'=>'nav', 'menu_class'=>'', 'menu_id' => '' )); 
	            		}
	            		?>
	            	</div>
	            	<?php
	            }
	            else {
	            	wp_nav_menu(array('theme_location'=>'primary','container'=>false, 'menu_class'=>'nav navbar-nav', 'menu_id' => 'nav' ));
	            }
	            ?>
	           	
	        </div> 
	      </div>  
	    </nav>
	</header>

	<?php
	if(isset($post)) {
		echo '<div class="header-content">';
		echo do_shortcode(get_post_meta($post->ID, 'header_content', true)); 
		echo '</div>';
	}
	?>

	<!-- Content -->
	
	<div class="content-wrapper">
		