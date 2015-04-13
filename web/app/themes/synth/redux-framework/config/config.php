<?php
if (!function_exists('redux_init')) :
	function redux_init() {
	/**
		ReduxFramework Sample Config File
		For full documentation, please visit: https://github.com/ReduxFramework/ReduxFramework/wiki
	**/


	/**
	 
		Most of your editing will be done in this section.

		Here you can override default values, uncomment args and change their values.
		No $args are required, but they can be overridden if needed.
		
	**/
	$args = array();


	// For use with a tab example below
	$tabs = array();

	ob_start();

	$ct = wp_get_theme();
	$theme_data = $ct;
	$item_name = $theme_data->get('Name'); 
	$tags = $ct->Tags;
	$screenshot = $ct->get_screenshot();
	$class = $screenshot ? 'has-screenshot' : '';

	$customize_title = sprintf( __( 'Customize &#8220;%s&#8221;','redux-framework-demo' ), $ct->display('Name') );

	?>
	<div id="current-theme" class="<?php echo esc_attr( $class ); ?>">
		<?php if ( $screenshot ) : ?>
			<?php if ( current_user_can( 'edit_theme_options' ) ) : ?>
			<a href="<?php echo wp_customize_url(); ?>" class="load-customize hide-if-no-customize" title="<?php echo esc_attr( $customize_title ); ?>">
				<img src="<?php echo esc_url( $screenshot ); ?>" alt="<?php esc_attr_e( 'Current theme preview' ); ?>" />
			</a>
			<?php endif; ?>
			<img class="hide-if-customize" src="<?php echo esc_url( $screenshot ); ?>" alt="<?php esc_attr_e( 'Current theme preview' ); ?>" />
		<?php endif; ?>

		<h4>
			<?php echo $ct->display('Name'); ?>
		</h4>

		<div>
			<ul class="theme-info">
				<li><?php printf( __('By %s','redux-framework-demo'), $ct->display('Author') ); ?></li>
				<li><?php printf( __('Version %s','redux-framework-demo'), $ct->display('Version') ); ?></li>
				<li><?php echo '<strong>'.__('Tags', 'redux-framework-demo').':</strong> '; ?><?php printf( $ct->display('Tags') ); ?></li>
			</ul>
			<p class="theme-description"><?php echo $ct->display('Description'); ?></p>
			<?php if ( $ct->parent() ) {
				printf( ' <p class="howto">' . __( 'This <a href="%1$s">child theme</a> requires its parent theme, %2$s.' ) . '</p>',
					__( 'http://codex.wordpress.org/Child_Themes','redux-framework-demo' ),
					$ct->parent()->display( 'Name' ) );
			} ?>
			
		</div>

	</div>

	<?php
	$item_info = ob_get_contents();
	    
	ob_end_clean();

	$sampleHTML = '';
	if( file_exists( dirname(__FILE__).'/info-html.html' )) {
		/** @global WP_Filesystem_Direct $wp_filesystem  */
		global $wp_filesystem;
		if (empty($wp_filesystem)) {
			require_once(ABSPATH .'/wp-admin/includes/file.php');
			WP_Filesystem();
		}  		
		$sampleHTML = $wp_filesystem->get_contents(dirname(__FILE__).'/info-html.html');
	}

	// BEGIN Sample Config

	// Setting dev mode to true allows you to view the class settings/info in the panel.
	// Default: true
	$args['dev_mode'] = false;

	// Set the icon for the dev mode tab.
	// If $args['icon_type'] = 'image', this should be the path to the icon.
	// If $args['icon_type'] = 'iconfont', this should be the icon name.
	// Default: info-sign
	//$args['dev_mode_icon'] = 'info-sign';

	// Set the class for the dev mode tab icon.
	// This is ignored unless $args['icon_type'] = 'iconfont'
	// Default: null
	//$args['dev_mode_icon_class'] = '';

	// Set a custom option name. Don't forget to replace spaces with underscores!
	$args['opt_name'] = 'entiri_opt';

	// Setting system info to true allows you to view info useful for debugging.
	// Default: false
	//$args['system_info'] = true;


	// Set the icon for the system info tab.
	// If $args['icon_type'] = 'image', this should be the path to the icon.
	// If $args['icon_type'] = 'iconfont', this should be the icon name.
	// Default: info-sign
	//$args['system_info_icon'] = 'info-sign';

	// Set the class for the system info tab icon.
	// This is ignored unless $args['icon_type'] = 'iconfont'
	// Default: null
	//$args['system_info_icon_class'] = 'icon-large';

	$theme = wp_get_theme();

	$args['display_name'] = $theme->get('Name');
	//$args['database'] = "theme_mods_expanded";
	$args['display_version'] = $theme->get('Version');

	// If you want to use Google Webfonts, you MUST define the api key.
	$args['google_api_key'] = 'AIzaSyAX_2L_UzCDPEnAHTG7zhESRVpMPS4ssII';

	// Define the starting tab for the option panel.
	// Default: '0';
	//$args['last_tab'] = '0';

	// Define the option panel stylesheet. Options are 'standard', 'custom', and 'none'
	// If only minor tweaks are needed, set to 'custom' and override the necessary styles through the included custom.css stylesheet.
	// If replacing the stylesheet, set to 'none' and don't forget to enqueue another stylesheet!
	// Default: 'standard'
	//$args['admin_stylesheet'] = 'standard';

	// Setup custom links in the footer for share icons
	$args['share_icons']['twitter'] = array(
	    'link' => 'http://twitter.com/ghost1227',
	    'title' => 'Follow me on Twitter', 
	    'img' => ReduxFramework::$_url . 'assets/img/social/Twitter.png'
	);
	$args['share_icons']['linked_in'] = array(
	    'link' => 'http://www.linkedin.com/profile/view?id=52559281',
	    'title' => 'Find me on LinkedIn', 
	    'img' => ReduxFramework::$_url . 'assets/img/social/LinkedIn.png'
	);

	// Enable the import/export feature.
	// Default: true
	//$args['show_import_export'] = false;

	// Set the icon for the import/export tab.
	// If $args['icon_type'] = 'image', this should be the path to the icon.
	// If $args['icon_type'] = 'iconfont', this should be the icon name.
	// Default: refresh
	//$args['import_icon'] = 'refresh';

	// Set the class for the import/export tab icon.
	// This is ignored unless $args['icon_type'] = 'iconfont'
	// Default: null
	//$args['import_icon_class'] = '';

	/**
	 * Set default icon class for all sections and tabs
	 * @since 3.0.9
	 */
	//$args['default_icon_class'] = '';


	// Set a custom menu icon.
	//$args['menu_icon'] = '';

	// Set a custom title for the options page.
	// Default: Options
	$args['menu_title'] = __('Theme Options', 'redux-framework-demo');

	// Set a custom page title for the options page.
	// Default: Options
	$args['page_title'] = __('Theme Options', 'redux-framework-demo');

	// Set a custom page slug for options page (wp-admin/themes.php?page=***).
	// Default: redux_options
	$args['page_slug'] = 'redux_options';

	$args['default_show'] = true;
	$args['default_mark'] = '*';

	// Set a custom page capability.
	// Default: manage_options
	//$args['page_cap'] = 'manage_options';

	// Set the menu type. Set to "menu" for a top level menu, or "submenu" to add below an existing item.
	// Default: menu
	//$args['page_type'] = 'submenu';

	// Set the parent menu.
	// Default: themes.php
	// A list of available parent menus is available at http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
	//$args['page_parent'] = 'options-general.php';

	// Set a custom page location. This allows you to place your menu where you want in the menu order.
	// Must be unique or it will override other items!
	// Default: null
	//$args['page_position'] = null;

	// Set a custom page icon class (used to override the page icon next to heading)
	//$args['page_icon'] = 'icon-themes';

	// Set the icon type. Set to "iconfont" for Elusive Icon, or "image" for traditional.
	// Redux no longer ships with standard icons!
	// Default: iconfont
	//$args['icon_type'] = 'image';

	// Disable the panel sections showing as submenu items.
	// Default: true
	//$args['allow_sub_menu'] = false;
	    
	// Set ANY custom page help tabs, displayed using the new help tab API. Tabs are shown in order of definition.
	$args['help_tabs'][] = array(
	    'id' => 'redux-opts-1',
	    'title' => __('Theme Information 1', 'redux-framework-demo'),
	    'content' => __('<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo')
	);
	$args['help_tabs'][] = array(
	    'id' => 'redux-opts-2',
	    'title' => __('Theme Information 2', 'redux-framework-demo'),
	    'content' => __('<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo')
	);

	// Set the help sidebar for the options page.                                        
	$args['help_sidebar'] = __('<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo');


	// Add HTML before the form.
	/*
	if (!isset($args['global_variable']) || $args['global_variable'] !== false ) {
		if (!empty($args['global_variable'])) {
			$v = $args['global_variable'];
		} else {
			$v = str_replace("-", "_", $args['opt_name']);
		}
		$args['intro_text'] = sprintf( __('<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'redux-framework-demo' ), $v );
	} else {
		$args['intro_text'] = __('<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'redux-framework-demo');
	}
	*/

	// Add content after the form.
	$args['footer_text'] = __('', 'redux-framework-demo');

	// Set footer/credit line.
	//$args['footer_credit'] = __('<p>This text is displayed in the options panel footer across from the WordPress version (where it normally says \'Thank you for creating with WordPress\'). This field accepts all HTML.</p>', 'redux-framework-demo');


	$sections = array();              

	//Background Patterns Reader
	$sample_patterns_path = ReduxFramework::$_dir . '../sample/patterns/';
	$sample_patterns_url  = ReduxFramework::$_url . '../sample/patterns/';
	$sample_patterns      = array();

	if ( is_dir( $sample_patterns_path ) ) :
		
	  if ( $sample_patterns_dir = opendir( $sample_patterns_path ) ) :
	  	$sample_patterns = array();

	    while ( ( $sample_patterns_file = readdir( $sample_patterns_dir ) ) !== false ) {

	      if( stristr( $sample_patterns_file, '.png' ) !== false || stristr( $sample_patterns_file, '.jpg' ) !== false ) {
	      	$name = explode(".", $sample_patterns_file);
	      	$name = str_replace('.'.end($name), '', $sample_patterns_file);
	      	$sample_patterns[] = array( 'alt'=>$name,'img' => $sample_patterns_url . $sample_patterns_file );
	      }
	    }
	  endif;
	endif;


	$sections[] = array(
		'icon' => 'el-icon-cogs',
		'title' => __('General Settings', 'redux-framework-demo'),
		'fields' => array(
	        array(
                'id'=>'mobile_menu_display_width',
                'type' => 'text',
                'title' => __('Mobile menu collapse width', 'redux-framework-demo'), 
                'subtitle' => __('Set width of window, at which you want to collapse menu into mobile menu.', 'redux-framework-demo'),
                'default' => '979'
				),
	        array(
                'id'=>'blog_title',
                'type' => 'text',
                'title' => __('Blog title', 'redux-framework-demo'), 
                'subtitle' => __('Set title of blog page', 'redux-framework-demo'),
                'default' => 'Daily posts'
				),
	        array(
                'id'=>'blog_subtitle',
                'type' => 'text',
                'title' => __('Blog subtitle', 'redux-framework-demo'), 
                'subtitle' => __('Set subtitle of blog page', 'redux-framework-demo'),
                'default' => 'Suspendisse faucibus, nunc et pellentesque egestas'
				),

		)
	);

	$patterns_path = ReduxFramework::$_url . '../config/patterns/';

	$sections[] = array(
		'icon' => 'el-icon-website',
		'title' => __('Styling Options', 'redux-framework-demo'),
		'fields' => array(
			

			array(
				'id'=>'color-background',
				'type' => 'color',
				'title' => __('Body Background Color', 'redux-framework-demo'), 
				'subtitle' => __('Pick a background color for the theme (default: #fff).', 'redux-framework-demo'),
				'default' => '#fff',
				'validate' => 'color',
				'compiler' => true
				),		
			
			array(
				'id'=>'link-color',
				'type' => 'link_color',
				'title' => __('Links Color Option', 'redux-framework-demo'),
				'subtitle' => __('Only color validation can be done on this field type', 'redux-framework-demo'),
				'desc' => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
				//'regular' => false, // Disable Regular Color
				//'hover' => false, // Disable Hover Color
				'active' => false, // Disable Active Color
				//'visited' => true, // Enable Visited Color
				'default' => array(
					'regular' => '#888b92',
					'hover' => '#d7244c',
				)	
					
				)
		)
	);
		
	/**
	 *  Note here I used a 'heading' in the sections array construct
	 *  This allows you to use a different title on your options page
	 * instead of reusing the 'title' value.  This can be done on any 
	 * section - kp
	 */
	$sections[] = array(
		'icon'    => 'el-icon-bullhorn',
		'title'   => __('Header options', 'redux-framework-demo'),
		'heading' => __('Header options', 'redux-framework-demo'),
		'desc'    => __('<p class="description">Here you can set options for header.</p>', 'redux-framework-demo'),
		'fields'  => array(
			array(
				'id'=>'logo',
				'type' => 'media', 
				'url'=> true,
				'title' => __('Logo', 'redux-framework-demo'),
				'compiler' => 'true',
				//'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
				'desc'=> __('Upload your logo.', 'redux-framework-demo'),
				'subtitle' => __('Upload any media using the WordPress native uploader', 'redux-framework-demo'),
				'default'=>array('url'=> get_template_directory_uri().'/img/logo.png'),
				),
			array(
				'id'=>'menu-layout',
				'type' => 'select',
				'title' => __('Menu style', 'redux-framework-demo'), 
				'subtitle' => __('Select style for the main menu', 'redux-framework-demo'),
				'desc' => __('Choose between standard or overlay menu', 'redux-framework-demo'),
				'options' => array('standard' => 'Standard','overlay' => 'Overlay'),
				'default' => 'standard'
				),
			
			)
		);
	$sections[] = array(
		'icon' => 'el-icon-check',
		'title' => __('Typography options', 'redux-framework-demo'),
		'desc' => __('', 'redux-framework-demo'),
		'fields' => array(
			array(
				'id'=>'body-font',
				'type' => 'typography',
				'title' => __('Body Font', 'redux-framework-demo'),
				'subtitle' => __('Specify the body font properties.', 'redux-framework-demo'),
				'google'=>true,
				'all_styles' => true, // Enable all Google Font style/weight variations to be added to the page
				'units'=>'px', // Defaults to px
				'default'=> array(
					'color'=>"#606060", 
					'font-weight'=>'400', 
					'font-family'=>'Source Sans Pro', 
					'google' => true,
					'font-size'=>'13px', 
					'line-height'=>'23px'),
				),	
			array(
				'id'=>'h1-font',
				'type' => 'typography',
				'title' => __('H1 Font', 'redux-framework-demo'),
				'subtitle' => __('Specify heading 1 font properties.', 'redux-framework-demo'),
				'google'=>true,
				'all_styles' => true, // Enable all Google Font style/weight variations to be added to the page
				'units'=>'px', // Defaults to px
				'default'=> array(
					'color'=>"#333333", 
					'font-weight'=>'500', 
					'font-family'=>'Raleway', 
					'google' => true,
					'font-size'=>'50px', 
					'line-height'=>'70px'),
				),
			array(
				'id'=>'h2-font',
				'type' => 'typography',
				'title' => __('H2 Font', 'redux-framework-demo'),
				'subtitle' => __('Specify heading 2 font properties.', 'redux-framework-demo'),
				'google'=>true,
				'all_styles' => true, // Enable all Google Font style/weight variations to be added to the page
				'units'=>'px', // Defaults to px
				'default'=> array(
					'color'=>"#333333", 
					'font-weight'=>'500', 
					'font-family'=>'Raleway', 
					'google' => true,
					'font-size'=>'28px', 
					'line-height'=>'39px'),
				),
			array(
				'id'=>'h3-font',
				'type' => 'typography',
				'title' => __('H3 Font', 'redux-framework-demo'),
				'subtitle' => __('Specify heading 3 font properties.', 'redux-framework-demo'),
				'google'=>true,
				'all_styles' => true, // Enable all Google Font style/weight variations to be added to the page
				'units'=>'px', // Defaults to px
				'default'=> array(
					'color'=>"#1c1c1e", 
					'font-weight'=>'300', 
					'font-family'=>'Raleway', 
					'google' => true,
					'font-size'=>'20px', 
					'line-height'=>'28px'),
				),
			array(
				'id'=>'h4-font',
				'type' => 'typography',
				'title' => __('H4 Font', 'redux-framework-demo'),
				'subtitle' => __('Specify heading 4 font properties.', 'redux-framework-demo'),
				'google'=>true,
				'all_styles' => true, // Enable all Google Font style/weight variations to be added to the page
				'units'=>'px', // Defaults to px
				'default'=> array(
					'color'=>"#333333", 
					'font-weight'=>'500', 
					'font-family'=>'Raleway', 
					'google' => true,
					'font-size'=>'24px', 
					'line-height'=>'33px'),
				),	
				array(
				'id'=>'h5-font',
				'type' => 'typography',
				'title' => __('H5 Font', 'redux-framework-demo'),
				'subtitle' => __('Specify heading 5 font properties.', 'redux-framework-demo'),
				'google'=>true,
				'all_styles' => true, // Enable all Google Font style/weight variations to be added to the page
				'units'=>'px', // Defaults to px
				'default'=> array(
					'color'=>"#8c9096", 
					'font-weight' => '300',
					'font-family'=>'Raleway', 
					'google' => true,
					'font-size'=>'16px', 
					'line-height'=>'22px'),
				),	
				array(
				'id'=>'h6-font',
				'type' => 'typography',
				'title' => __('H6 Font', 'redux-framework-demo'),
				'subtitle' => __('Specify heading 6 font properties.', 'redux-framework-demo'),
				'google'=>true,
				'all_styles' => true, // Enable all Google Font style/weight variations to be added to the page
				'units'=>'px', // Defaults to px
				'default'=> array(
					'color'=>"#333333", 
					'font-weight'=>'500', 
					'font-family'=>'Raleway', 
					'google' => true,
					'font-size'=>'16px', 
					'line-height'=>'22px'),
				),					
			)
		);
			
			

	if (function_exists('wp_get_theme')){
	$theme_data = wp_get_theme();
	$theme_uri = $theme_data->get('ThemeURI');
	$description = $theme_data->get('Description');
	$author = $theme_data->get('Author');
	$version = $theme_data->get('Version');
	$tags = $theme_data->get('Tags');
	}else{
	$theme_data = wp_get_theme(trailingslashit(get_stylesheet_directory()).'style.css');
	$theme_uri = $theme_data['URI'];
	$description = $theme_data['Description'];
	$author = $theme_data['Author'];
	$version = $theme_data['Version'];
	$tags = $theme_data['Tags'];
	}	

	$theme_info = '<div class="redux-framework-section-desc">';
	$theme_info .= '<p class="redux-framework-theme-data description theme-uri">'.__('<strong>Theme URL:</strong> ', 'redux-framework-demo').'<a href="'.$theme_uri.'" target="_blank">'.$theme_uri.'</a></p>';
	$theme_info .= '<p class="redux-framework-theme-data description theme-author">'.__('<strong>Author:</strong> ', 'redux-framework-demo').$author.'</p>';
	$theme_info .= '<p class="redux-framework-theme-data description theme-version">'.__('<strong>Version:</strong> ', 'redux-framework-demo').$version.'</p>';
	$theme_info .= '<p class="redux-framework-theme-data description theme-description">'.$description.'</p>';
	if ( !empty( $tags ) ) {
		$theme_info .= '<p class="redux-framework-theme-data description theme-tags">'.__('<strong>Tags:</strong> ', 'redux-framework-demo').implode(', ', $tags).'</p>';	
	}
	$theme_info .= '</div>';

	if(file_exists(dirname(__FILE__).'/README.md')){
	$sections['theme_docs'] = array(
				'icon' => ReduxFramework::$_url.'assets/img/glyphicons/glyphicons_071_book.png',
				'title' => __('Documentation', 'redux-framework-demo'),
				'fields' => array(
					array(
						'id'=>'17',
						'type' => 'raw',
						'content' => file_get_contents(dirname(__FILE__).'/README.md')
						),				
				),
				
				);
	}//if




	// You can append a new section at any time.
	$sections[] = array(
		'icon' => 'el-icon-eye-open',
		'title' => __('Social networks', 'redux-framework-demo'),
		'desc' => __('<p class="description">This is the Description. Again HTML is allowed</p>', 'redux-framework-demo'),
		'fields' => array(

			array(
				'id'=>'social-networks',
				'type' => 'text',
				'title' => __('Social networks links', 'redux-framework-demo'),
				'subtitle' => __('Insert URLs to your social networks. Leave input blank, if you don\'t want to display specified icon.', 'redux-framework-demo'),
				//'data' => 'post_type',
				'options' => array(
					'fa-apple' => 'Apple',
					'fa-facebook' => 'Facebook', 
					'fa-twitter' => 'Twitter',
					'fa-linkedin' => 'LinkedIn',
					'fa-google-plus' => 'Google +',
					'fa-pinterest' => 'Pinterest',
					'fa-tumblr' => 'Tumblr',
					'fa-flickr' => 'Flickr',
					'fa-instagram' => 'Instagram',
					'fa-adn' => 'ADN',
					'fa-android' => 'Android',
					'fa-bitbucket' => 'Bitbucket',
					'fa-bitcoin' => 'Bitcoin',
					'fa-css3' => 'CSS3',
					'fa-dribbble' => 'Dribbble',
					'fa-dropbox' => 'Dropbox',
					'fa-foursquare' => 'Foursquare',
					'fa-github' => 'Github',
					'fa-gittip' => 'Gittip',
					'fa-html5' => 'HTML5',
					'fa-linux' => 'Linux',
					'fa-maxcdn' => 'Maxcdn',
					'fa-pagelines' => 'Pagelines',
					'fa-renren' => 'Renren',
					'fa-skype' => 'Skype',
					'fa-stack-exchange' => 'Stack exchange',
					'fa-stack-overflow' => 'Stack overflow',
					'fa-trello' => 'Trello',
					'fa-vimeo' => 'Vimeo',
					'fa-vk' => 'VK',
					'fa-weibo' => 'Weibo',
					'fa-windows' => 'Windows',
					'fa-xing' => 'Xing',
					'fa-youtube' => 'Youtube'
					),
				'default' => array(
					'fa-apple' => '',
					'fa-facebook' => '#', 
					'fa-twitter' => '#',
					'fa-linkedin' => '#',
					'fa-google-plus' => '#',
					'fa-pinterest' => '',
					'fa-tumblr' => '',
					'fa-flickr' => '',
					'fa-instagram' => '',
					'fa-adn' => '',
					'fa-android' => '',
					'fa-bitbucket' => '',
					'fa-bitcoin' => '',
					'fa-css3' => '',
					'fa-dribbble' => '',
					'fa-dropbox' => '',
					'fa-foursquare' => '',
					'fa-github' => '',
					'fa-gittip' => '',
					'fa-html5' => '',
					'fa-linux' => '',
					'fa-maxcdn' => '',
					'fa-pagelines' => '',
					'fa-renren' => '',
					'fa-skype' => '',
					'fa-stack-exchange' => '',
					'fa-stack-overflow' => '',
					'fa-trello' => '',
					'fa-vimeo' => '',
					'fa-vk' => '',
					'fa-weibo' => '',
					'fa-windows' => '',
					'fa-xing' => '',
					'fa-youtube' => ''
					),
				),
			
				
			)

		);   
 

	$sections[] = array(
		'type' => 'divide',
	);

	$sections[] = array(
		'icon' => 'el-icon-info-sign',
		'title' => __('Theme Information', 'redux-framework-demo'),
		'fields' => array(
			array(
				'id'=>'raw_new_info',
				'type' => 'raw',
				'content' => $item_info,
				)
			),   
		);


	if(file_exists(trailingslashit(dirname(__FILE__)) . 'README.html')) {
	    $tabs['docs'] = array(
			'icon' => 'el-icon-book',
			    'title' => __('Documentation', 'redux-framework-demo'),
	        'content' => nl2br(file_get_contents(trailingslashit(dirname(__FILE__)) . 'README.html'))
	    );
	}

	global $ReduxFramework;
	$ReduxFramework = new ReduxFramework($sections, $args, $tabs);

	// END Sample Config
	}
	add_action('init', 'redux_init');
endif;

/**
 
 	Custom function for filtering the sections array. Good for child themes to override or add to the sections.
 	Simply include this function in the child themes functions.php file.
 
 	NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
 	so you must use get_template_directory_uri() if you want to use any of the built in icons
 
 **/
if ( !function_exists( 'redux_add_another_section' ) ):
	function redux_add_another_section($sections){
	    //$sections = array();
	    $sections[] = array(
	        'title' => __('Section via hook', 'redux-framework-demo'),
	        'desc' => __('<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'redux-framework-demo'),
			'icon' => 'el-icon-paper-clip',
			    // Leave this as a blank section, no options just some intro text set above.
	        'fields' => array()
	    );

	    return $sections;
	}
	add_filter('redux/options/redux_demo/sections', 'redux_add_another_section');
	// replace redux_demo with your opt_name
endif;
/**

	Filter hook for filtering the args array given by a theme, good for child themes to override or add to the args array.

**/
if ( !function_exists( 'redux_change_framework_args' ) ):
	function redux_change_framework_args($args){
	    //$args['dev_mode'] = true;
	    
	    return $args;
	}
	add_filter('redux/options/redux_demo/args', 'redux_change_framework_args');
	// replace redux_demo with your opt_name
endif;
/**

	Filter hook for filtering the default value of any given field. Very useful in development mode.

**/
if ( !function_exists( 'redux_change_option_defaults' ) ):
	function redux_change_option_defaults($defaults){
	    $defaults['str_replace'] = "Testing filter hook!";
	    
	    return $defaults;
	}
	add_filter('redux/options/redux_demo/defaults', 'redux_change_option_defaults');
	// replace redux_demo with your opt_name
endif;

/** 

	Custom function for the callback referenced above

 */
if ( !function_exists( 'redux_my_custom_field' ) ):
	function redux_my_custom_field($field, $value) {
	    print_r($field);
	    print_r($value);
	}
endif;

/**
 
	Custom function for the callback validation referenced above

**/
if ( !function_exists( 'redux_validate_callback_function' ) ):
	function redux_validate_callback_function($field, $value, $existing_value) {
	    $error = false;
	    $value =  'just testing';
	    /*
	    do your validation
	    
	    if(something) {
	        $value = $value;
	    } elseif(something else) {
	        $error = true;
	        $value = $existing_value;
	        $field['msg'] = 'your custom error message';
	    }
	    */
	    
	    $return['value'] = $value;
	    if($error == true) {
	        $return['error'] = $field;
	    }
	    return $return;
	}
endif;
/**

	This is a test function that will let you see when the compiler hook occurs. 
	It only runs if a field	set with compiler=>true is changed.

**/
if ( !function_exists( 'redux_test_compiler' ) ):
	function redux_test_compiler($options, $css) {
		echo "<h1>The compiler hook has run!";
		//print_r($options); //Option values
		print_r($css); //So you can compile the CSS within your own file to cache
	    $filename = dirname(__FILE__) . '/avada' . '.css';

			    global $wp_filesystem;
			    if( empty( $wp_filesystem ) ) {
			        require_once( ABSPATH .'/wp-admin/includes/file.php' );
			        WP_Filesystem();
			    }

			    if( $wp_filesystem ) {
			        $wp_filesystem->put_contents(
			            $filename,
			            $css,
			            FS_CHMOD_FILE // predefined mode settings for WP files
			        );
			    }

	}
	//add_filter('redux/options/redux_demo/compiler', 'redux_test_compiler', 10, 2);
	// replace redux_demo with your opt_name
endif;


/**

	Remove all things related to the Redux Demo mode.

**/
if ( !function_exists( 'redux_remove_demo_options' ) ):
	function redux_remove_demo_options() {
		
		// Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
		if ( class_exists('ReduxFrameworkPlugin') ) {
			remove_filter( 'plugin_row_meta', array( ReduxFrameworkPlugin::get_instance(), 'plugin_meta_demo_mode_link'), null, 2 );
		}

		// Used to hide the activation notice informing users of the demo panel. Only used when Redux is a plugin.
		remove_action('admin_notices', array( ReduxFrameworkPlugin::get_instance(), 'admin_notices' ) );	

	}
	//add_action( 'redux/plugin/hooks', 'redux_remove_demo_options' );	
endif;
