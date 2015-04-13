<?php
global $team_members;
global $animate_css;
global $font_awesome_icons;
global $entypo_icons;
global $all_categories;
global $days;
global $years;
global $hours;
global $minutes;
global $typicon_icons;

function team_array() {
	$output = array();
	$myposts = get_posts( array( 'post_type' => 'team' ) );

	
	foreach ( $myposts as $post ) {
		$output[$post->post_title] = $post->ID; 
	}
		
	wp_reset_postdata();
	
    return $output;
}
$team_members = team_array();

function categories_array() {
	$categories = get_categories( array('hide_empty' => false) );
	foreach ($categories as $category) { 
		$output[$category->name] = $category->slug;
	}
	return $output;
}

$all_categories = categories_array();

function days_array() {
	$days_array = array();
	for ($i=1; $i < 32; $i++) { 
		$days_array[$i] = $i;
	}
	return $days_array;
}

$days = days_array();

function years_array() {
	$years_array = array();
	for ($i=2014; $i < 2100; $i++) { 
		$years_array[$i] = $i;
	}
	return $years_array;
}

$years = array();
$years = years_array();

for($i = 0;$i<24;$i++) {
	if($i<10) {
		$hour = '0'.$i;
	}
	else {
		$hour = $i;
	}
	$hours[$hour] = $hour;
}

for($i = 0;$i<60;$i++) {
	if($i<10) {
		$minute = '0'.$i;
	}
	else {
		$minute = $i;
	}
	$minutes[$minute] = $minute;
}

function fa_list_settings_field($settings, $value) {
    $dependency = vc_generate_dependencies_attributes($settings);
    $output = '';
    
    ob_start();

    	?>
    	<div class="fa_list_block">
            <input name="<?php echo esc_attr($settings['param_name']); ?>" class="wpb_vc_param_value wpb-textinput 
            <?php echo esc_attr($settings['param_name'].' '.$settings['type'].'_field'); ?>" type="hidden" value="<?php echo esc_attr($value); ?>"  
            <?php echo $dependency; ?> />
            <div class="actual-icon"><i class="fa <?php echo esc_attr($value); ?>"></i></div>
            <input type="text" class="searchinput" placeholder="Search for icons" />
            <?php
			$icon_list = fopen(get_template_directory()."/config/fa-icons.txt", "r"); ?>
			<div class="fa_list">
			<?php
			if ($icon_list) {
			    while (($line = fgets($icon_list)) !== false) { 
			    	$line = preg_replace('/^\s+|\n|\r|\s+$/m', '', $line);
			    	?>
			        <i class="fa <?php echo esc_attr($line); echo ($value == $line) ? ' selected' : ''; ?> active" data-value="<?php echo esc_attr($line); ?>"></i>
			        <?php
			    }
			} else {
			    echo 'error';
			} 
			fclose($icon_list);
			?>
			</div>
        </div>
    
    <?php
    $output = ob_get_contents();
	ob_end_clean();
	return $output;
}
add_shortcode_param('fa_list', 'fa_list_settings_field', get_template_directory_uri().'/js/fa-list.js');

function typcn_list_settings_field($settings, $value) {
    $dependency = vc_generate_dependencies_attributes($settings);
    $output = '';
    
    ob_start();

    	?>
    	<div class="typcn_list_block">
            <input name="<?php echo esc_attr($settings['param_name']); ?>" class="wpb_vc_param_value wpb-textinput 
            <?php echo esc_attr($settings['param_name'].' '.$settings['type'].'_field'); ?>" type="hidden" value="<?php echo esc_attr($value); ?>"  
            <?php echo $dependency; ?> />
            <div class="actual-icon"><span class="typcn <?php echo esc_attr($value); ?>"></span></div>
            <input type="text" class="searchinput" placeholder="Search for icons" />
            <?php
			$icon_list = fopen(get_template_directory()."/config/typcn-icons.txt", "r"); ?>
			<div class="typcn_list">
			<?php
			if ($icon_list) {
			    while (($line = fgets($icon_list)) !== false) { 
			    	$line = preg_replace('/^\s+|\n|\r|\s+$/m', '', $line);
			    	?>
			        <span class="typcn <?php echo esc_attr($line); echo ($value == $line) ? ' selected' : ''; ?> active" data-value="<?php echo esc_attr($line); ?>"></span>
			        <?php
			    }
			} else {
			    echo 'error';
			} 
			fclose($icon_list);
			?>
			</div>
        </div>
    
    <?php
    $output = ob_get_contents();
	ob_end_clean();
	return $output;
}
add_shortcode_param('typcn_list', 'typcn_list_settings_field', get_template_directory_uri().'/js/typcn-list.js');

$animate_css = array(
	"none" => "",
	"flash" => "flash", 
	"bounce" => "bounce", 
	"shake" => "shake", 
	"tada" => "tada", 
	"swing" => "swing", 
	"wobble" => "wobble", 
	"pulse" => "pulse", 
	"flip" => "flip", 
	"flipInX" => "flipInX", 
	"flipOutX" => "flipOutX", 
	"flipInY" => "flipInY", 
	"flipOutY" => "flipOutY", 
	"fadeIn" => "fadeIn", 
	"fadeInUp" => "fadeInUp", 
	"fadeInDown" => "fadeInDown", 
	"fadeInLeft" => "fadeInLeft", 
	"fadeInRight" => "fadeInRight", 
	"fadeInUpBig" => "fadeInUpBig", 
	"fadeInDownBig" => "fadeInDownBig", 
	"fadeInLeftBig" => "fadeInLeftBig", 
	"fadeInRightBig" => "fadeInRightBig", 
	"fadeOut" => "fadeOut", 
	"fadeOutUp" => "fadeOutUp", 
	"fadeOutDown" => "fadeOutDown", 
	"fadeOutLeft" => "fadeOutLeft", 
	"fadeOutRight" => "fadeOutRight", 
	"fadeOutUpBig" => "fadeOutUpBig", 
	"fadeOutDownBig" => "fadeOutDownBig", 
	"fadeOutLeftBig" => "fadeOutLeftBig", 
	"fadeOutRightBig" => "fadeOutRightBig", 
	"slideInDown" => "slideInDown", 
	"slideInLeft" => "slideInLeft", 
	"slideInRight" => "slideInRight", 
	"slideOutUp" => "slideOutUp", 
	"slideOutLeft" => "slideOutLeft", 
	"slideOutRight" => "slideOutRight", 
	"bounceIn" => "bounceIn", 
	"bounceInDown" => "bounceInDown", 
	"bounceInUp" => "bounceInUp", 
	"bounceInLeft" => "bounceInLeft", 
	"bounceInRight" => "bounceInRight", 
	"bounceOut" => "bounceOut", 
	"bounceOutDown" => "bounceOutDown", 
	"bounceOutUp" => "bounceOutUp", 
	"bounceOutLeft" => "bounceOutLeft", 
	"bounceOutRight" => "bounceOutRight", 
	"rotateIn" => "rotateIn", 
	"rotateInDownLeft" => "rotateInDownLeft", 
	"rotateInDownRight" => "rotateInDownRight", 
	"rotateInUpLeft" => "rotateInUpLeft", 
	"rotateInUpRight" => "rotateInUpRight", 
	"rotateOut" => "rotateOut", 
	"rotateOutDownLeft" => "rotateOutDownLeft", 
	"rotateOutDownRight" => "rotateOutDownRight", 
	"rotateOutUpLeft" => "rotateOutUpLeft", 
	"rotateOutUpRight" => "rotateOutUpRight", 
	"lightSpeedIn" => "lightSpeedIn", 
	"lightSpeedOut" => "lightSpeedOut", 
	"hinge" => "hinge", 
	"rollIn" => "rollIn", 
	"rollOut" => "rollOut", 
);

add_filter('wpb_widget_title', 'override_widget_title', 10, 2);
function override_widget_title($output = '', $params = array('')) {
  $extraclass = (isset($params['extraclass'])) ? " ".$params['extraclass'] : "";
  return '<h4 class="entry-title'.$extraclass.'">'.$params['title'].'</h4>';
}



if ( function_exists( 'vc_map' ) ) :

	
	
	
	
	/*
	function vc_theme_vc_column_text($atts, $content = null) {
		$output = $el_class = $animation = '';

		extract(shortcode_atts(array(
		    'el_class' => '',
		    'animation' => '',
		    'color' => ''
		), $atts));

		$animated = ($animation == '' ? '' : 'animated');

		$el_class = WPBakeryShortCode_VC_Column_text::getExtraClass($el_class);

		$css_class = 'wpb_text_column wpb_content_element '.$el_class;
		$css_class .= ' '.$animated;
		$output .= "\n\t".'<div class="'.$css_class.'" data-type="'.$animation.'">';
		$output .= "\n\t\t".'<div class="wpb_wrapper">';
		$output .= "\n\t\t\t".wpb_js_remove_wpautop($content, true);
		$output .= "\n\t\t".'</div> ' . WPBakeryShortCode_VC_Column_text::endBlockComment('.wpb_wrapper');
		$output .= "\n\t".'</div> ' . WPBakeryShortCode_VC_Column_text::endBlockComment('.wpb_text_column');


		return $output;
	}
	*/

	function rowBuildStyle($bg_image = '', $bg_color = '', $bg_image_repeat = '', $font_color = '', $padding = '', $margin_bottom = '', $parallax_image = '') {
        $has_image = false;
        $style = '';
        if((int)$bg_image > 0 && ($image_url = wp_get_attachment_url( $bg_image, 'large' )) !== false) {
            $has_image = true;
            $style .= "background-image: url(".$image_url.");";
        }
        if(!empty($bg_color)) {
            $style .= vc_get_css_color('background-color', $bg_color);
        }
        if(!empty($bg_image_repeat) && $has_image) {
            if($bg_image_repeat === 'cover') {
                $style .= "background-repeat:no-repeat;background-size: cover;";
            } elseif($bg_image_repeat === 'contain') {
                $style .= "background-repeat:no-repeat;background-size: contain;";
            } elseif($bg_image_repeat === 'no-repeat') {
                $style .= 'background-repeat: no-repeat;';
            }
        }
        if((int)$parallax_image > 0) {
        	wp_enqueue_script('parallax');
        	$image_url = wp_get_attachment_url( $parallax_image, 'full' );
        	$style .= "background-image: url(".$image_url.");";
        }
        if( !empty($font_color) ) {
            $style .= vc_get_css_color('color', $font_color); // 'color: '.$font_color.';';
        }
        if( $padding != '' ) {
            $style .= 'padding: '.(preg_match('/(px|em|\%|pt|cm)$/', $padding) ? $padding : $padding.'px').';';
        }
        if( $margin_bottom != '' ) {
            $style .= 'margin-bottom: '.(preg_match('/(px|em|\%|pt|cm)$/', $margin_bottom) ? $margin_bottom : $margin_bottom.'px').';';
        }
        return empty($style) ? $style : ' style="'.$style.'"';
    }

	function vc_theme_vc_row($atts, $content = null) {
	   /*
	   $output = $el_class = $full_width = $style = '';
		extract(shortcode_atts(array(
		    'el_class' => '',
		    'full_width' => '',
		    'style' => ''
		), $atts));

		wp_enqueue_style( 'js_composer_front' );
		wp_enqueue_script( 'wpb_composer_front_js' );
		wp_enqueue_style('js_composer_custom_css');

		//$el_class = $this->getExtraClass($el_class);

		if($full_width != 'true') {
			$css_class = 'row '.get_row_css_class().$el_class.' '.$style;
			$container_start = '<div class="container">';
			if($style == 'big-unit-box')
				$container_start .= '<div class="big-unit-box-inside">';
			$container_end = '</div>';
			$container_inner_start = $container_inner_end = '';
		}
		else {
			$css_class = 'full-width-row '.$el_class.' '.$style;
			$container_start = '';
			$container_end = '';
			$container_inner_start = $container_inner_end = '';
			if($style == 'big-unit-box') {
				$container_inner_start = '<div class="container"><div class="big-unit-box-inside">';
				$container_inner_end = '</div></div>';
			}

		}

		

		
		$output .= $container_start;
	
		
		$output .= '<div class="'.$css_class.'">';

		$output .= $container_inner_start;
		$output .= wpb_js_remove_wpautop($content);
		$output .= $container_inner_end;
		$output .= '</div>';
		$output .= $container_end;
		*/
	
		$output = $el_class = $bg_image = $bg_color = $bg_image_repeat = $font_color = $padding = $margin_bottom = $css = $id = $parallax_image = $parallax_speed = '';
		
		extract(shortcode_atts(array(
		    'el_class'        => '',
		    'bg_image'        => '',
		    'bg_color'        => '',
		    'bg_image_repeat' => '',
		    'font_color'      => '',
		    'padding'         => '',
		    'margin_bottom'   => '',
		    'full_width'	  => '',
		    'id'			  => '',
		    'parallax_image'  => '',
		    'parallax_speed'  => '',
		    'css' => ''
		), $atts));

		wp_enqueue_style( 'js_composer_front' );
		wp_enqueue_script( 'wpb_composer_front_js' );
		wp_enqueue_style('js_composer_custom_css');

		//$el_class = WPBakeryShortCode_VC_Row::getExtraClass($el_class);

		if($full_width != 'true') { 
			$css_class =  apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'wpb_row '.get_row_css_class().' '.$el_class.vc_shortcode_custom_css_class($css, ' '), 'vc_row');
			$container_start = '';
			$container_end = '';
			$first_container_start = '<div class="container relative">';
			$first_container_end = '</div>';
		}
		else {
			
			$css_class =  apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'full-width-row '.get_row_css_class().' '.$el_class.vc_shortcode_custom_css_class($css, ' '), 'vc_row');
			$container_start = '';
			$container_end = '';
			$first_container_start = '';
			$first_container_end = '';
		}
		if($parallax_image != '') {
			$css_class .= ' parallax';
		}
		//$style = WPBakeryShortCode_VC_Row::buildStyle($bg_image, $bg_color, $bg_image_repeat, $font_color, $padding, $margin_bottom);
		$style = rowBuildStyle($bg_image, $bg_color, $bg_image_repeat, $font_color, $padding, $margin_bottom, $parallax_image);

		if ($id!='') {
			$id = 'id="'.$id.'"';
		}

		$output .= $first_container_start;
		//$output .= '<div class="'.$css_class.'"'.$style.' id="'.$id.'">';
		$output .= '<div class="'.$css_class.'" '.$style.' '.$id.' data-parallax-speed="'.$parallax_speed.'">';
		$output .= $container_start;
		$output .= wpb_js_remove_wpautop($content);
		$output .= $container_end;
		$output .= '</div>';
		$output .= $first_container_end;

		return $output;

	}

	function vc_theme_vc_button($atts, $content = null) {
		$output = $color = $size = $icon = $target = $href = $el_class = $title = $position = $style = '';
		extract(shortcode_atts(array(
		    'color' => '',
		    'size' => '',
		    'icon' => 'none',
		    'target' => '_self',
		    'href' => '',
		    'el_class' => '',
		    'title' => __('Text on the button', "js_composer"),
		    'position' => '',
		    'style' => ''
		), $atts));
		$a_class = '';

		/*
		if ( $el_class != '' ) {
		    $tmp_class = explode(" ", strtolower($el_class));
		    $tmp_class = str_replace(".", "", $tmp_class);
		    if ( in_array("prettyphoto", $tmp_class) ) {
		        wp_enqueue_script( 'prettyphoto' );
		        wp_enqueue_style( 'prettyphoto' );
		        $a_class .= ' prettyphoto';
		        $el_class = str_ireplace("prettyphoto", "", $el_class);
		    }
		    if ( in_array("pull-right", $tmp_class) && $href != '' ) { $a_class .= ' pull-right'; $el_class = str_ireplace("pull-right", "", $el_class); }
		    if ( in_array("pull-left", $tmp_class) && $href != '' ) { $a_class .= ' pull-left'; $el_class = str_ireplace("pull-left", "", $el_class); }
		}
		*/
		if ( $target == 'same' || $target == '_self' ) { $target = ''; }
		$target = ( $target != '' ) ? ' target="'.$target.'"' : '';

		$color = ( $color != '' ) ? ' wpb_'.$color : '';
		$size = ( $size != '' && $size != 'wpb_regularsize' ) ? ' '.$size : ' '.$size;
		$icon = ( $icon != '' && $icon != 'none' ) ? ' '.$icon : '';
		$i_icon = ( $icon != '' ) ? ' <i class="fa '.$icon.'"></i>' : '';
		$position = ( $position != '' ) ? ' '.$position.'-button-position' : '';
		

		$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, ''.$color.$size.' '.$el_class.' '.$position, 'vc_button');

		if ( $href != '' ) {
		    $output = '<a class="btn '.$css_class.' '.$style.'" title="'.$title.'" href="'.$href.'"'.$target.'>' . $i_icon.$title . '</a>';
		} else {
		    $output .= '<button class="btn '.$css_class.' '.$style.'">'.$i_icon.$title.'</button>';
		}

		return $output;
	}

	function vc_icon_box($atts, $content = null) {

		$output = $fa_icon = $heading = $link = $style = $icon_image = $icon_size = $icon_background = $icon_background_color = '';
		$icon_color = $text_align = $heading_color = $animation = '';
		
		
		extract(shortcode_atts(array(
			'icon_source' => '',
		    'fa_icon' => '',
		    'icon_image' => '',
		    'icon_size' => '',
		    'icon_background' => '',
		    'icon_background_color' => '',
		    'icon_color' => '',
		    'heading' => '',
		    'heading_color' => '',
		    'text_align' => '',
		    'link' => '',
		    'style' => '',
		    'animation' => ''
		), $atts));
		ob_start(); 
		$animated = ($animation == '' ? '' : 'animated animation');

		if($style == 'style1') {
		?> 
			<div class="services-1 <?php echo esc_attr($animated); ?>" data-type="<?php echo esc_attr($animation); ?>">
	         	<div class="services-1-icon <?php echo esc_attr($icon_background.' '.$icon_size); ?>">
	                <?php if($icon_source == 'fa' && $icon_background != 'hexagon') { ?>
	                	<i class="fa <?php echo esc_attr($fa_icon); ?>" style="background: <?php echo esc_attr($icon_background_color); ?>; color: <?php echo esc_attr($icon_color); ?>; border-color: <?php echo esc_attr($icon_background_color); ?>;"></i>
	                <?php } elseif ($icon_source == 'fa' && $icon_background == 'hexagon') { ?>
	                	<div class="hexagon" style="background: <?php echo esc_attr($icon_background_color); ?>; border-color: <?php echo esc_attr($icon_background_color); ?>;">
	                		<i class="fa <?php echo esc_attr($fa_icon); ?>" style="color: <?php echo esc_attr($icon_color); ?>;"></i>
	                	</div>
	                <?php } else { 
	                	$image_url = wp_get_attachment_url( $icon_image, 'full' );
	                	?>
	                	<img src="<?php echo esc_url($image_url); ?>">
	                <?php } ?>
	            </div>
	            <h4><a href="<?php echo esc_url($link); ?>" style="color: <?php echo esc_attr($heading_color); ?>;"><?php echo $heading; ?></a></h4>
	            <div class="services-1-text <?php echo esc_attr($text_align); ?>">              
	              <p><?php echo wpb_js_remove_wpautop($content); ?></p>
	            </div>
	         	
	        </div>
		<?php
		}
		if($style == 'style2') { ?>
			<div class="services-2 <?php echo esc_attr($animated); ?>" data-type="<?php echo esc_attr($animation); ?>">
	            <div class="services-2-icon <?php echo esc_attr($icon_background.' '.$icon_size); ?>">
	                <?php if($icon_source == 'fa' && $icon_background != 'hexagon') { ?>
	                	<i class="fa <?php echo esc_attr($fa_icon); ?>" style="background: <?php echo esc_attr($icon_background_color); ?>; color: <?php echo esc_attr($icon_color); ?>; border-color: <?php echo esc_attr($icon_background_color); ?>;"></i>
	                <?php } elseif ($icon_source == 'fa' && $icon_background == 'hexagon') { ?>
	                	<div class="hexagon" style="background: <?php echo esc_attr($icon_background_color); ?>; border-color: <?php echo esc_attr($icon_background_color); ?>;">
	                		<i class="fa <?php echo esc_attr($fa_icon); ?>" style="color: <?php echo esc_attr($icon_color); ?>;"></i>
	                	</div>
	                <?php } else { 
	                	$image_url = wp_get_attachment_url( $icon_image, 'full' );
	                	?>
	                	<img src="<?php echo esc_url($image_url); ?>">
	                <?php } ?>
	                <h4><a href="<?php echo esc_url($link); ?>" style="color: <?php echo esc_attr($heading_color); ?>;"><?php echo $heading; ?></a></h4>
	            </div>
	            <div class="services-2-text <?php echo esc_attr($text_align); ?>">              
	              <p><?php echo wpb_js_remove_wpautop($content); ?></p>
	            </div>
	        </div>
	    <?php
		}
		if($style == 'style3') { ?>
			<div class="services-3 <?php echo esc_attr($animated); ?>" data-type="<?php echo esc_attr($animation); ?>">
	            <div class="services-3-icon <?php echo esc_attr($icon_background.' '.$icon_size); ?>">
	            	<h4><a href="<?php echo esc_url($link); ?>" style="color: <?php echo esc_attr($heading_color); ?>;"><?php echo $heading; ?></a></h4>
	                <?php if($icon_source == 'fa' && $icon_background != 'hexagon') { ?>
	                	<i class="fa <?php echo esc_attr($fa_icon); ?>" style="background: <?php echo esc_attr($icon_background_color); ?>; color: <?php echo esc_attr($icon_color); ?>; border-color: <?php echo esc_attr($icon_background_color); ?>;"></i>
	                <?php } elseif ($icon_source == 'fa' && $icon_background == 'hexagon') { ?>
	                	<div class="hexagon" style="background: <?php echo esc_attr($icon_background_color); ?>; border-color: <?php echo esc_attr($icon_background_color); ?>;">
	                		<i class="fa <?php echo esc_attr($fa_icon); ?>" style="color: <?php echo esc_attr($icon_color); ?>;"></i>
	                	</div>
	                <?php } else { 
	                	$image_url = wp_get_attachment_url( $icon_image, 'full' );
	                	?>
	                	<img src="<?php echo esc_url($image_url); ?>">
	                <?php } ?>   
	            </div>
	            <div class="services-3-text <?php echo esc_attr($text_align); ?>">              
	              <p><?php echo wpb_js_remove_wpautop($content); ?></p>
	            </div>
	        </div>
		<?php 
		}
		$output = ob_get_contents();
		ob_end_clean();
		return $output;
	}

	add_shortcode('vc_icon_box', 'vc_icon_box');


	function vc_spacer($atts, $content = null) {
		$output = $height = '';
		extract(shortcode_atts(array(
		    'height' => ''
		), $atts));

		$output = '<div class="space'.$height.'"></div>';

		return $output;
	}
	
	add_shortcode('vc_spacer', 'vc_spacer');

	function vc_theme_vc_progress_bar($atts, $content = null) {
		$output = $title = $values = $units = $bgcolor = $custombgcolor = $options = $el_class = $style = '';
		extract( shortcode_atts( array(
		    'title' => '',
		    'values' => '',
		    'units' => '',
		    'el_class' => '',
		    'style' => ''
		), $atts ) );

		$bar_options = '';
		$options = explode(",", $options);
		if (in_array("animated", $options)) $bar_options .= " animated";
		if (in_array("striped", $options)) $bar_options .= " striped";

		if ($bgcolor=="custom" && $custombgcolor!='') { $custombgcolor = ' style="background-color: '.$custombgcolor.';"'; $bgcolor=""; }
		if ($bgcolor!="") $bgcolor = " ".$bgcolor;

		$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'skill-shortcode '.$el_class, 'vc_progress_bar');
		$output = '<div class="'.$css_class.'">';
		if($title != '') {
			$output .= '<h4>'.$title.'</h4>';
		}

		$graph_lines = explode(",", $values);
		$max_value = 0.0;
		$graph_lines_data = array();
		foreach ($graph_lines as $line) {
		    $new_line = array();
		    $color_index = 2;
		    $data = explode("|", $line);
		    $new_line['value'] = isset($data[0]) ? $data[0] : 0;
		    $new_line['percentage_value'] = isset($data[1]) && preg_match('/^\d{1,2}\%$/', $data[1]) ? (float)str_replace('%', '', $data[1]) : false;
		    if($new_line['percentage_value']!=false) {
		        $color_index+=1;
		        $new_line['label'] = isset($data[2]) ? $data[2] : '';
		    } else {
		        $new_line['label'] = isset($data[1]) ? $data[1] : '';
		    }
		    $new_line['bgcolor'] = (isset($data[$color_index])) ? ' style="background-color: '.$data[$color_index].';"' : $custombgcolor;

		    if($new_line['percentage_value']===false && $max_value < (float)$new_line['value']) {
		        $max_value = $new_line['value'];
		    }

		    $graph_lines_data[] = $new_line;
		}
		if($style == 'style2') {
			$output .= '<div class="progress-bar-2">';
		}
		foreach($graph_lines_data as $line) {
			if($line['percentage_value']!==false) {
		        $percentage_value = $line['percentage_value'];
		    } elseif($max_value > 100.00) {
		        $percentage_value = (float)$line['value'] > 0 && $max_value > 100.00 ? round((float)$line['value']/$max_value*100, 4) : 0;
		    } else {
		        $percentage_value = $line['value'];
		    }
		    $unit = ($units!='') ? '' .  $line['value'] . $units . '' : $line['value'];
			
			if($style == 'style1') {
				$output .= $line['label'];
			}		    
			$inner_text = ($style == 'style2') ? $line['label'] .' '. $unit : $unit;
		    $output .= '<div class="progress">';
		    $output .= '<div class="bar" role="progressbar" data-percentage="'.($percentage_value).'">';
		    $output .= $inner_text;
		    $output .= '</div>';
		    $output .= '</div>';
			    
			
		}
		if($style == 'style2') {
			$output .= '</div>';
		}
		$output .= '</div>';

		return $output . "\n";
	}

	function vc_theme_vc_wp_posts($atts, $content = null) {
		$output = $title = $number = $el_class = $style = '';
		extract( shortcode_atts( array(
		    'title' => __('Recent Posts', 'synth'),
		    'number' => 5,
		    'el_class' => '',
		    'style' => ''
		), $atts ) );


		$output = '<div class="vc_wp_posts wpb_content_element '.$el_class.'">';
		$args = array();

		ob_start();
		if($title != '') {
			$output .= '<h4>'.$title.'</h4>';
		}
		if ($style == 'carousel' || $style == '') {
		?>
			<div class="owl-carousel carousel-top-navigation">           
	          <?php
	          $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => $number ) );
			    while ( $loop->have_posts() ) : $loop->the_post();
			        $id_post = $loop->post->ID; 
			        $url = wp_get_attachment_url( get_post_thumbnail_id($id_post) );
			        $post_categories = wp_get_post_categories( $id_post );	
			        $categories = '';
			        $i = 0;
					foreach($post_categories as $c){
						$i++;
						$cat = get_category( $c );
						if($i != count($post_categories)) {
							$categories .= '<a href="'.get_category_link( $c ).'">'.$cat->name.'</a> / ';
						}
						else {
							$categories .= '<a href="'.get_category_link( $c ).'">'.$cat->name.'</a>';
						}
					}
			        ?>
			        <div class="item"> 
			            <div class="project-item">
			              <div class="project-image">
			                <a href="<?php the_permalink(); ?>" class="zoom" title="">                  
			                  <?php the_post_thumbnail('recent-news'); ?>
			                </a>                     
			              </div>
			              <div class="project-text">
			              <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
			              <h6><?php echo $categories; ?></h6>
			              <?php the_excerpt(); ?>
			              </div>              
			            </div>              
			         </div>    
			        <?php
			          
			    endwhile;
			    wp_reset_query();
	          ?>
	               
	 
	        </div>    
		<?php
		} else { ?>
			<ul class="recent-posts">
			<?php
			$loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => $number ) );
			while ( $loop->have_posts() ) : $loop->the_post();
				?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>			
				<?php
			endwhile;
			wp_reset_query();
			?>
			</ul>
			<?php
		}
		$output .= ob_get_clean();

		$output .= '</div>' . "\n";

		return $output;
	}

	function vc_testimonial($atts, $content = full) {
		$output = $type = $name = $job = $image = $animation = $el_class = '';
		extract( shortcode_atts( array(
		    'name' => '',
		    'type' => 'type1',
		    'job' => '',
		    'image' => $image,
		    'animation' => '',
		    'el_class' => ''
		), $atts ) );
		ob_start();
		$animated = ($animation == '' ? '' : 'animated animation');
		$image_url = wp_get_attachment_image_src( $image, 'thumbnail' );
		if($type == 'type1') {
		?>	
			<div class="row testimonial-2 <?php echo esc_attr($animated); ?> <?php echo esc_attr($el_class); ?>" data-type="<?php echo esc_attr($animation); ?>">
		        <div class="col-md-4">
		        	<div class="member-detail">
		          		<img src="<?php echo esc_url($image_url[0]); ?>" alt=""> 
		          	</div>
		          	<h5><?php echo $name; ?></h5>
		            <span class="function"><?php echo $job; ?></span>
		        </div>
		        <div class="col-md-8">
		          <p>
		            <?php echo wpb_js_remove_wpautop($content); ?>
		          </p>
		        </div>
		    </div>   
			
		<?php
		} elseif($type == 'type2') {
			?>
			<?php if($title != '') { ?>
		        <h4><?php echo $title; ?></h4>
		    <?php } ?>
		    <div class="<?php echo esc_attr($animated); ?> <?php echo esc_attr($el_class); ?>" data-type="<?php echo esc_attr($animation); ?>">         
			    <div class="client-says">            
		          “<?php echo wpb_js_remove_wpautop($content); ?>”
		        </div>
		        <div class="client-says-2">
		          <div class="client-name">
		            <i class="fa fa-user"></i><?php echo $name; ?>, <?php echo $job; ?>.
		          </div>  
		        </div>
		    </div> 
			<?php
		} elseif($type == 'type3') {
			?>
			<div class="testimonials">
	          <!-- Testimonial Content --> 
	          <?php echo wpb_js_remove_wpautop($content); ?>
	          <br /><br />
	          <!-- Author --> 
	          <strong><?php echo $name; ?></strong> 
	          <span class="w-position"><?php echo $job; ?></span>
	        </div>
			<?php
		}
		$output .= ob_get_clean();
		return $output;
	}

	add_shortcode('vc_testimonial', 'vc_testimonial');

	function vc_theme_vc_posts_slider($atts, $content = null) {
		$output = $type = $count = $interval = $transition = $image = $image_size = '';
		$custom_links  = $categories = $layout = '';
		$orderby = $order = $el_class = '';
		extract(shortcode_atts(array(
		    'type' => 'flexslider',
		    'layout' => 'normal',
		    'image' => $image,
		    'image_size' => 'slider',
		    'count' => 3,
		    'interval' => 3,
		    'transition' => 'slide',
		    'categories' => '',
		    'orderby' => NULL,
		    'order' => 'DESC',
		    'el_class' => ''
		), $atts));
		ob_start();

		
		$slideshow = ($interval == 0 ? 'false' : 'true');
		if($slideshow == 'false') $interval = 100000;
		if($count == '' || $count == 'All') $count = -1;

		if ($type == 'flexslider') {

			if($layout == 'thumbnails') {
			?>
			
				<div class="thumbnail-slider" data-interval="<?php echo esc_attr($interval); ?>" data-transition="<?php echo esc_attr($transition); ?>" data-slideshow="<?php echo esc_attr($slideshow); ?>">
					<ul class="slides">
					<?php
					$loop = new WP_Query( array( 'post_type' => 'slider', 'posts_per_page' => $count, 'order_by' => $orderby, 'order' => $order, 'category_name' => $categories ) );
					while ( $loop->have_posts() ) : $loop->the_post();
				        $id_post = $loop->post->ID; 
				        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($id_post, $image_size ));
				        ?>
				        <li data-thumb="<?php echo esc_attr($thumb[0]); ?>">
				        	<?php //echo $cont_wrapper_start; ?>
				        	<?php the_post_thumbnail($image_size); ?>
				        	<?php //echo $cont_wrapper_end; ?>
				        </li>
				        <?php
				    endwhile;
				    wp_reset_query();
				    ?>
					</ul>
				</div>
			
		    <?php
			}
			elseif($layout == 'text') {
				?>
				<div class="testimonal-slider"> 
					<ul class="slides">
						<?php
						$loop = new WP_Query( array( 'post_type' => 'slider', 'posts_per_page' => $count, 'order_by' => $orderby, 'order' => $order, 'category_name' => $categories ) );
						while ( $loop->have_posts() ) : $loop->the_post();
					        $id_post = $loop->post->ID; 
					        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $image_size );
					        ?>
					        <li>
					        	<div class="testimonial">
					        		<?php the_content(); ?>
					        	</div>
					        </li>
					        <?php
					    endwhile;
					    wp_reset_query();
					    ?>
					</ul>
				</div>
				<?php
			}
			elseif($layout == 'laptop') {
				?>
				<div class="laptop">
		          <img src="<?php echo get_template_directory_uri(); ?>/img/laptop.png" alt="">
		          <div class="laptop-slider">            
		            <ul class="slides">                     
		              <?php
						$loop = new WP_Query( array( 'post_type' => 'slider', 'posts_per_page' => $count, 'order_by' => $orderby, 'order' => $order, 'category_name' => $categories ) );
						while ( $loop->have_posts() ) : $loop->the_post();
					        $id_post = $loop->post->ID; 
					        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $image_size );
					        ?>
					        <li>
					        	
					        	<?php the_post_thumbnail('recent-news'); ?>
					        	
					        </li>
					        <?php
					    endwhile;
					    wp_reset_query();
					    ?>         
		            </ul>
		          </div>
		        </div>
				<?php
			}
			else {
				?>
				<div class="flex-1">
		          <ul class="slides">
		          	<?php
					$loop = new WP_Query( array( 'post_type' => 'slider', 'posts_per_page' => $count, 'order_by' => $orderby, 'order' => $order, 'category_name' => $categories ) );
					while ( $loop->have_posts() ) : $loop->the_post();
				        $id_post = $loop->post->ID; 
				        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $image_size );
				        ?>
				        <li>
				        	<?php the_post_thumbnail('full'); ?>
				        </li>
				        <?php
				    endwhile;
				    wp_reset_query();
				    ?>
		          </ul>
		        </div>  
				<?php
			}
		}
		elseif($type == 'slyslider') {
			?>
			<div class="wrap">
				<div class="frame effects" id="effects">
					<ul class="clearfix">
						<?php
						$loop = new WP_Query( array( 'post_type' => 'slider', 'posts_per_page' => $count, 'order_by' => $orderby, 'order' => $order, 'category_name' => $categories ) );
						while ( $loop->have_posts() ) : $loop->the_post();
				        	$id_post = $loop->post->ID; 
				        	?>
							<li><?php the_post_thumbnail('team'); ?></li>
				         	<?php
				        endwhile;
				        wp_reset_query();
				        ?>
					</ul>
				</div>
				<div class="controls center">
				    <button class="btn prev"><i class="fa fa-chevron-left"></i> <?php _e('prev', 'reno'); ?></button>
					<button class="btn next"><?php _e('next', 'reno'); ?> <i class="fa fa-chevron-right"></i></button>
				</div>
			</div>	
			<?php
		}
		elseif($type == 'refineslider') {
			?>
			<ul class="main-slider-direct-nav">
				<?php
					$loop = new WP_Query( array( 'post_type' => 'slider', 'posts_per_page' => $count, 'order_by' => $orderby, 'order' => $order, 'category_name' => $categories ) );
					while ( $loop->have_posts() ) : $loop->the_post();
			        	$id_post = $loop->post->ID; 
	        			$full = wp_get_attachment_image_src( get_post_thumbnail_id($id_post), 'slider' );
			        	?>
					    <li>				                
				            <img src="<?php echo esc_url($full[0]); ?>" alt="">
						</li>
				    	<?php
				    endwhile;
				    wp_reset_query();
				    ?>
			  </ul>
			<?php
		}
		elseif($type == 'parallaxslider') {
			$image_url = wp_get_attachment_image_src( $image, 'full' );
			?>
			<div id="parallax-one" class="parallax parallax-slider" style="background-image:url(<?php echo esc_url($image_url[0]); ?>);">          
			    <div class="container">
			      <div class="row">   
			        <div class="col-md-12">
			          <div class="flex-1" data-interval="<?php echo esc_attr($interval); ?>" data-transition="<?php echo esc_attr($transition); ?>" data-slideshow="<?php echo esc_attr($slideshow); ?>">
			            <ul class="slides">
			            	<?php          
			                $loop = new WP_Query( array( 'post_type' => 'slider', 'posts_per_page' => $count, 'order_by' => $orderby, 'order' => $order, 'category_name' => $categories ) );
							while ( $loop->have_posts() ) : $loop->the_post();
						        $id_post = $loop->post->ID; 
						        ?>
						        <li>
						        	<div class="parallax-text-container">
                  						<div class="parallax-text-item">
						        			<?php the_content(); ?>
						        		</div>
						        	</div>
						        </li>
						        <?php
						    endwhile;
						    wp_reset_query();
						    ?>
			            </ul>
			          </div>          
			        </div>         
			      </div>
			    </div>
			  </div>

			<?php
		}
	    $output .= ob_get_clean();
				

		return $output;
	}

	

	

	function vc_hero_unit($atts, $content = null) {
		$output = $fa_icon = $entypo_icon = $text = $animation = $icon_source = $text_align = $color = '';
		extract(shortcode_atts(array(
		    'icon_source' => 'fa',
		    'fa_icon' => '',
		    'entypo_icon' => '',
		    'text' => '',
		    'text_align' => '',
		    'animation' => '',
		    'color' => ''
		), $atts));
		$animated = ($animation == '' ? '' : 'animated animation' );
		
		ob_start(); ?>
		<div class="promo-box" style="background-color: <?php echo esc_attr($color); ?>">
			
		    <div class="container">  
		      <div class="row">
		        <div class="col-md-12 <?php echo esc_attr($text_align); ?>">
		          <div class="<?php echo esc_attr($animated); ?>" data-type="<?php echo esc_attr($animation); ?>">

		            <div class="text <?php if($fa_icon == '') echo 'no-margin'; ?>"><?php echo wpb_js_remove_wpautop($content); ?></div>
		            <?php 
		            if($icon_source == 'fa')
		            	$icon = $fa_icon;
		            else 
		            	$icon = $entypo_icon;
		            ?>
		            <i class="<?php echo esc_attr($icon_source); ?> <?php echo esc_attr($icon); ?>"></i>
		          </div>  
		        </div>
		      </div>    
		    </div>   
		</div> 
		<?php
		$output .= ob_get_clean();

	    return $output;
	}

	add_shortcode('vc_hero_unit', 'vc_hero_unit');

	function vc_team_members($atts, $content = null) {
		$output = '';
		
		ob_start();

		?>
		<div class="tabbable">
			<ul class="nav nav-tabs">
				<?php
				$i = 1;
				$loop = new WP_Query( array( 'post_type' => 'team', 'posts_per_page' => -1 ) );
				while ( $loop->have_posts() ) : $loop->the_post();
			        $id_post = $loop->post->ID; 
			        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($id_post), 'team' );
			        if($i == 1) 
			        	$class = "active";
			        else 
			        	$class = "";
			        ?>
			        <li class="<?php echo esc_attr($class); ?>"><a href="#tab2-<?php echo $i; ?>" data-toggle="tab"><img src="<?php echo esc_url($thumb[0]); ?>" alt=""></a></li>
			        <?php
			        $i++;
			    endwhile;
	    		wp_reset_query();
				?>
			</ul>
			<div class="tab-content">
			<?php
			$i = 1;
			$loop = new WP_Query( array( 'post_type' => 'team', 'posts_per_page' => -1 ) );
			while ( $loop->have_posts() ) : $loop->the_post();
		        $id_post = $loop->post->ID; 
		        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($id_post), 'team' );
		        if ($i == 1) 
		        	$class = "in active";
		        else 
		        	$class = "";
		        ?>
		        <div class="tab-pane fade <?php echo esc_attr($class); ?>" id="tab2-<?php echo esc_attr($i); ?>">
		        	<div class="row">
			        	<div class="col-md-6">
			        		<img src="<?php echo esc_url($thumb[0]); ?>" alt="">
			        	</div>
			          
			        	<div class="col-md-6">
			                <h3><?php the_title(); ?></h3>
				            <h6><?php echo get_post_meta($id_post, 'member_job', true ); ?></h6>
				            <?php the_content(); ?>
				            <div class="social">
				              <?php if(get_post_meta($id_post, 'member_adn', true )) { ?>	
				              	<a href="<?php echo get_post_meta($id_post, 'member_adn', true ); ?>"><i class="fa fa-adn"></i></a>
				              <?php } ?>
				              <?php if(get_post_meta($id_post, 'member_android', true )) { ?>	
				              	<a href="<?php echo get_post_meta($id_post, 'member_android', true ); ?>"><i class="fa fa-android"></i></a>
				              <?php } ?>
				              <?php if(get_post_meta($id_post, 'member_apple', true )) { ?>	
				              	<a href="<?php echo get_post_meta($id_post, 'member_apple', true ); ?>"><i class="fa fa-apple"></i></a>
				              <?php } ?>
				              <?php if(get_post_meta($id_post, 'member_bitbucket', true )) { ?>	
				              	<a href="<?php echo get_post_meta($id_post, 'member_bitbucket', true ); ?>"><i class="fa fa-bitbucket"></i></a>
				              <?php } ?>
				              <?php if(get_post_meta($id_post, 'member_css3', true )) { ?>	
				              	<a href="<?php echo get_post_meta($id_post, 'member_css3', true ); ?>"><i class="fa fa-css3"></i></a>
				              <?php } ?>
				              <?php if(get_post_meta($id_post, 'member_dribbble', true )) { ?>	
				              	<a href="<?php echo get_post_meta($id_post, 'member_dribbble', true ); ?>"><i class="fa fa-dribbble"></i></a>
				              <?php } ?>
				              <?php if(get_post_meta($id_post, 'member_dropbox', true )) { ?>	
				              	<a href="<?php echo get_post_meta($id_post, 'member_dropbox', true ); ?>"><i class="fa fa-dropbox"></i></a>
				              <?php } ?>
				              <?php if(get_post_meta($id_post, 'member_foursquare', true )) { ?>	
				              	<a href="<?php echo get_post_meta($id_post, 'member_foursquare', true ); ?>"><i class="fa fa-foursquare"></i></a>
				              <?php } ?>
				              <?php if(get_post_meta($id_post, 'member_github', true )) { ?>	
				              	<a href="<?php echo get_post_meta($id_post, 'member_github', true ); ?>"><i class="fa fa-github"></i></a>
				              <?php } ?>
				              <?php if(get_post_meta($id_post, 'member_html5', true )) { ?>	
				              	<a href="<?php echo get_post_meta($id_post, 'member_html5', true ); ?>"><i class="fa fa-html5"></i></a>
				              <?php } ?>
				              <?php if(get_post_meta($id_post, 'member_instagram', true )) { ?>	
				              	<a href="<?php echo get_post_meta($id_post, 'member_instagram', true ); ?>"><i class="fa fa-instagram"></i></a>
				              <?php } ?>
				              <?php if(get_post_meta($id_post, 'member_facebook', true )) { ?>	
				              	<a href="<?php echo get_post_meta($id_post, 'member_facebook', true ); ?>"><i class="fa fa-facebook"></i></a>
				              <?php } ?>
				              <?php if(get_post_meta($id_post, 'member_google', true )) { ?>	
				              	<a href="<?php echo get_post_meta($id_post, 'member_google', true ); ?>"><i class="fa fa-google-plus"></i></a>
				              <?php } ?>
				              <?php if(get_post_meta($id_post, 'member_skype', true )) { ?>	
				              	<a href="<?php echo get_post_meta($id_post, 'member_skype', true ); ?>"><i class="fa fa-skype"></i></a>
				              <?php } ?>
				              <?php if(get_post_meta($id_post, 'member_twitter', true )) { ?>	
				              	<a href="<?php echo get_post_meta($id_post, 'member_twitter', true ); ?>"><i class="fa fa-twitter"></i></a>
				              <?php } ?>
				              <?php if(get_post_meta($id_post, 'member_linkedin', true )) { ?>	
				              	<a href="<?php echo get_post_meta($id_post, 'member_linkedin', true ); ?>"><i class="fa fa-linkedin"></i></a>
				              <?php } ?>
				              <?php if(get_post_meta($id_post, 'member_pinterest', true )) { ?>	
				              	<a href="<?php echo get_post_meta($id_post, 'member_pinterest', true ); ?>"><i class="fa fa-pinterest"></i></a>
				              <?php } ?>
				              <?php if(get_post_meta($id_post, 'member_flickr', true )) { ?>	
				              	<a href="<?php echo get_post_meta($id_post, 'member_flickr', true ); ?>"><i class="fa fa-flickr"></i></a>
				              <?php } ?>
				            </div>
				            
			         	</div>
			        </div>
		        </div> 
		        <?php
		        $i++;
		    endwhile;
		    wp_reset_query();
		    ?>
			</div>
		</div>
	    <?php

	    $output .= ob_get_clean();

	    return $output;

	}

	add_shortcode('vc_team_members', 'vc_team_members');


	function vc_clients($atts, $content = null) {
		$output = $widget_title = '';
		extract(shortcode_atts(array(
		    'widget_title' => '',
		), $atts));

		ob_start();
		?>
		<?php if($widget_title != '') { ?>
			<h2><?php echo $widget_title; ?></h2>
		<?php } ?>             
        <div class="row partners">       
            
            <?php 
          	$loop = new WP_Query( array( 'post_type' => 'client', 'posts_per_page' => -1 ) );
		  	while ( $loop->have_posts() ) : $loop->the_post();
	          	$id_post = $loop->post->ID;
	          	?>
	          	<span class="col-sm-3">
	                <a href="<?php echo get_post_meta($id_post, 'synth_client_link', true); ?>"><?php the_post_thumbnail( 'full', array('class' => 'client1') ); ?></a>                 
	            </span>   
	          	<?php
	        endwhile; 
	        wp_reset_query();
          	?>                                                                                                                                                                   
        </div>
		<?php
		$output .= ob_get_clean();

	    return $output;
	}
	add_shortcode('vc_clients', 'vc_clients');

	function vc_last_portfolio($atts, $content = null) {
		$output = $count = '';
		extract(shortcode_atts(array(
		    'count' => '',
		), $atts));

		ob_start();
		
		?>    
		<div class="recent-works popup-gallery">       
        	<?php
        	$loop = new WP_Query( array( 'post_type' => 'portfolio', 'posts_per_page' => $count ) );
		  	while ( $loop->have_posts() ) : $loop->the_post();
	          	$id_post = $loop->post->ID;
	          	$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($id_post), 'slider-small' );
	    		$full = wp_get_attachment_image_src( get_post_thumbnail_id($id_post), 'lightbox' );
	          	?>
	          	<a href="<?php echo esc_url($full[0]); ?>" title="<?php the_title(); ?>">
                  <img src="<?php echo esc_url($thumb[0]); ?>" alt="">
                </a>
	          	
		    <?php
		    endwhile;
		    wp_reset_query();
		    ?>	
    	</div>
		<?php
		
		
		$output .= ob_get_clean();

		return $output;
	}
	add_shortcode('vc_last_portfolio', 'vc_last_portfolio');

	function vc_theme_vc_accordion_tab($atts, $content = null) {
		$output = $title = '';

		extract(shortcode_atts(array(
			'title' => __("Section", "js_composer")
		), $atts));

		$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'panel panel-default', 'vc_accordion_tab');
		$output .= "\n\t\t\t" . '<div class="'.$css_class.'">';
			$output .= "\n\t\t\t\t" . '<div class="panel-heading">';
		    $output .= "\n\t\t\t\t\t" . '<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#'.sanitize_title($title).'">'.$title.'</a></h4>';
		    $output .= "\n\t\t\t\t" . '</div>';
		    $output .= "\n\t\t\t\t" . '<div id="'.sanitize_title($title).'" class="panel-collapse collapse"><div class="panel-body">';
		        $output .= ($content=='' || $content==' ') ? __("Empty section. Edit page to add content here.", "js_composer") : "\n\t\t\t\t" . wpb_js_remove_wpautop($content);
		    $output .= "\n\t\t\t\t" . '</div></div>';
		    $output .= "\n\t\t\t" . '</div> ';

		return $output;
	}

	

	function vc_theme_vc_accordion($atts, $content = null) {
		$output = $title = $interval = $el_class = $collapsible = $active_tab = '';
		//
		extract(shortcode_atts(array(
		    'title' => '',
		    'interval' => 0,
		    'el_class' => '',
		    'collapsible' => 'no',
		    'active_tab' => '1'
		), $atts));

		$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'panel-group '.$el_class, 'vc_accordion');

		if($title != '') { 
			$output .= '<h4>'.$title.'</h4>';
		}
		$output .= "\n\t".'<div class="'.$css_class.'" id="accordion">'; //data-interval="'.$interval.'"
		$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
		$output .= "\n\t".'</div> ';

		return $output;
	}

	function synth_list_portfolio_categories($cat_id) {

		global $entiri_opt;

		$idObj = get_category_by_slug($cat_id); 
  		$id = $idObj->term_id;

		$html = '<ul class="filter">
	        		<li class="active"><a href="#" data-filter="*">All</a></li>';
	    $cat_id = $entiri_opt['portfolio-category'];
		$categories = get_categories( array('hide_empty' => 1, 'child_of' => $id) );
		foreach ($categories as $category) { 
			$html .= '<li><a href="#" data-filter=".'.$category->slug.'">'.$category->name.'</a></li>';
		}
		$html .= '</ul>';

		return $html;
	}

	function synth_list_post_categories($id_post) {
		$post_categories = wp_get_post_categories( $id_post );
		$cats = array();
		$numItems = count($post_categories);	
		$html = '';
		$i = 0;
		foreach($post_categories as $c){
			$cat = get_category( $c );
			$html .= $cat->slug;
			if(++$i !== $numItems) {
			    $html .= ' ';
			}
		}
		return $html;
	}

	function vc_portfolio_display($atts) {
		global $entiri_opt;
		$html = $category = $rows = $show_filter = $style = $isotope_layout = $filter_align = '';

		extract(shortcode_atts(array(
			'category' => '',
		    'show_filter' => 'true',
		    'filter_align' => '',
		    'rows' => 'all',
		    'style' => '',
		    'isotope_layout' => 'fitRows'
		), $atts));

		wp_enqueue_script('isotope');

		if($category == '') {
			$cat_obj = get_category( $entiri_opt['portfolio-category'], false );
			$cat_slug = $cat_obj->slug;
		}
		else {
			$cat_slug = $category;
		}
		$html .= '<div class="portfolio-mansonry-all">';
		if($show_filter == 'true') { 
			$html .= '<div class="row"><div class="col-md-12 '.$filter_align.'">';
			$html .= synth_list_portfolio_categories($cat_slug);
			$html .= '</div></div>';
		}
		else {
			$html = '';
		}
		
		$cat_id = $entiri_opt['portfolio-category'];
		if ($rows == '4') $class="col-md-3 col-sm-3 col-xs-12";
		if ($rows == '3') $class="col-md-4 col-sm-4 col-xs-12";
		if ($rows == '2') $class="col-md-6 col-sm-6 col-xs-12";

		$size = 'slider-small';
		$show_desc = true;
		$i = 1;
		$html .= '<div class="row">
		 			<div class="portfolio-mansonry-container gallery" data-layout="'.$isotope_layout.'">';
		$loop = new WP_Query( array( 'post_type' => 'portfolio', 'category_name' => $cat_slug, 'posts_per_page' => -1 ) );
	    while ( $loop->have_posts() ) : $loop->the_post(); 
	    	$id_post = $loop->post->ID;
	    	$url = wp_get_attachment_url( get_post_thumbnail_id($id_post) );
	    	if($rows == 'all') {
	    		$size = 'slider-small';
	    		if($i%9 > 0 && $i%9 < 5) {
	    			$class = 'col-md-3';
	    			$show_desc = true;
	    		}
	    		if($i%9 > 4 && $i%9 < 8) {
	    			$class = 'col-md-4';
	    			$show_desc = false;
	    		}
	    		if($i%9 > 7 && $i%9 < 10) {
	    			$class = 'col-md-6';
	    			$show_desc = true;
	    		}
	    		

	    	}
	    	
    		if($isotope_layout == 'masonry') {
    			$size = 'portfolio-masonry';
    		}
	    	$html .= '<div class="'.$class.' portfolio-masonry-item '.synth_list_post_categories($id_post).'">';
	    	$html .= '
	    				
	                   
	                    <div class="portfolio-item"><a class="open-popup-link" href="'.$url.'">';
	    	$html .= get_the_post_thumbnail($id_post,$size);

			$html .= '<div class="overlay">
	                    <div class="overlay-text">
	                      <h3>'.get_the_title($id_post).'</h3>
	                      '.get_post_meta($id_post, 'synth_portfolio_excerpt', true).'
	                    </div>
	                  </div>  
	                  </a></div>';
			
			
	    	$html .= '</div>';
	    	$i++;
	    endwhile;
		$html .= '
				  </div></div>';

		wp_reset_query();

		$html .= '</div>';
		return $html;
	}

	add_shortcode('vc_portfolio_display', 'vc_portfolio_display');

	function vc_pricing_table($atts,$content = null) {
		$output = $row1 = $row2 = $row3 = $row4 = $row5 = $row6 = $row7 = $row8 = $row9 = $row10 = '';
		$plan_title = $plan_price = $price_text = $footer_text = '';
		extract(shortcode_atts(array(
		    'row1' => '',
		    'row2' => '',
		    'row3' => '',
		    'row4' => '',
		    'row5' => '',
		    'row6' => '',
		    'row7' => '',
		    'row8' => '',
		    'row9' => '',
		    'row10' => '',
		    'plan_title' => '',
		    'plan_price' => '',
		    'price_text' => '',
		    'footer_text' => ''
		), $atts));
		ob_start(); ?> 
	 	<table class="pricing-table">
          <thead>
          	<tr>
          		<th>
          			<div class="plan-title"><?php echo $plan_title; ?></div>
          			<div class="price"><?php echo $plan_price; ?>
		              <span class="price2"><?php echo $price_text; ?></span>
		            </div> 
          		</th>
          	</tr>
            
             
          </thead>
          <tbody>
	          <?php if($row1 != '') { ?>
	          	  <tr><td><?php echo $row1; ?></td></tr>
	          <?php } ?>
	          <?php if($row2 != '') { ?>
	          	  <tr><td><?php echo $row2; ?></td></tr>
	          <?php } ?>
	          <?php if($row3 != '') { ?>
	          	  <tr><td><?php echo $row3; ?></td></tr>
	          <?php } ?>
	          <?php if($row4 != '') { ?>
	          	  <tr><td><?php echo $row4; ?></td></tr>
	          <?php } ?>
	          <?php if($row5 != '') { ?>
	          	  <tr><td><?php echo $row5; ?></td></tr>
	          <?php } ?>
	          <?php if($row6 != '') { ?>
	          	  <tr><td><?php echo $row6; ?></td></tr>
	          <?php } ?>
	          <?php if($row7 != '') { ?>
	          	  <tr><td><?php echo $row7; ?></td></tr>
	          <?php } ?>
	          <?php if($row8 != '') { ?>
	          	  <tr><td><?php echo $row8; ?></td></tr>
	          <?php } ?>
	          <?php if($row9 != '') { ?>
	          	  <tr><td><?php echo $row9; ?></td></tr>
	          <?php } ?>
	          <?php if($row10 != '') { ?>
	          	  <tr><td><?php echo $row10; ?></td></tr>
	          <?php } ?>
	          <tr>
	          	  <td class="table-footer">
	                <?php echo $footer_text; ?>
	          	  </td>
	      	  </tr>
      	  </tbody>
        </table>
	  		
		<?php
		$output = ob_get_contents();
		ob_end_clean();
		return $output;
	}

	add_shortcode('vc_pricing_table', 'vc_pricing_table' );

	function vc_theme_vc_message($atts, $content = null) {

		$output = $color = $el_class = $css_animation = '';
		extract(shortcode_atts(array(
		    'color' => 'alert-info',
		    'el_class' => '',
		    'css_animation' => ''
		), $atts));

		if ($color == "alert-block") $color = "";
		$color = ( $color != '' ) ? ' '.$color : '';
		$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'alert wpb_content_element'.$color.$el_class, 'vc_message');

		$output .= '<div class="'.$css_class.'"><button type="button" class="close" data-dismiss="alert">&times;</button><div class="messagebox_text clearfix">'.wpb_js_remove_wpautop($content, true).'</div></div>';

		return $output;

	}

	function vc_social_icons($atts, $content=null) {
		$output = $style = $title = '';
		$adn = $android = $apple = $bitbucket = $css3 = $dribbble = $dropbox = $facebook = '';
		$flickr = $foursquare = $github = $google_plus = $html5 = $instagram = $linkedin = '';
		$renren = $skype = $stackexchange = $trello = $tumblr = $twitter = $vk = $weibo = $windows = '';
		$xing = $youtube = '';
		extract(shortcode_atts(array(
		    'title' => '',
		    'style' => '',
		    'adn' => '',
		    'android' => '',
		    'apple' => '',
		    'bitbucket' => '',
		    'css3' => '',
		    'dribbble' => '',
		    'dropbox' => '',
		    'facebook' => '',
		    'flickr' => '',
		    'foursquare' => '',
		    'github' => '',
		    'google_plus' => '',
		    'html5' => '',
		    'instagram' => '',
		    'linkedin' => '',
		    'renren' => '',
		    'skype' => '',
		    'stackexchange' => '',
		    'trello' => '',
		    'tumblr' => '',
			'twitter' => '',
			'vk' => '',
			'weibo' => '',
			'windows' => '',
			'xing' => '',
			'youtube' => ''
		), $atts));
		ob_start(); ?> 
		<div class="<?php echo esc_attr($style); ?>">
			<?php if($title != '') { ?>
				<h4><?php echo $title; ?></h4>
			<?php } ?>
			<?php if($adn != '') { ?>
				<a href="<?php echo esc_url($adn); ?>"><i class="fa fa-adn"></i></a>
			<?php } ?>
			<?php if($android != '') { ?>
				<a href="<?php echo esc_url($android); ?>"><i class="fa fa-android"></i></a>
			<?php } ?>
			<?php if($apple != '') { ?>
				<a href="<?php echo esc_url($apple); ?>"><i class="fa fa-apple"></i></a>
			<?php } ?>
			<?php if($bitbucket != '') { ?>
				<a href="<?php echo esc_url($bitbucket); ?>"><i class="fa fa-bitbucket"></i></a>
			<?php } ?>
			<?php if($css3 != '') { ?>
				<a href="<?php echo esc_url($css3); ?>"><i class="fa fa-css3"></i></a>
			<?php } ?>
			<?php if($dribbble != '') { ?>
				<a href="<?php echo esc_url($dribbble); ?>"><i class="fa fa-dribbble"></i></a>
			<?php } ?>
			<?php if($dropbox != '') { ?>
				<a href="<?php echo esc_url($dropbox); ?>"><i class="fa fa-dropbox"></i></a>
			<?php } ?>
			<?php if($facebook != '') { ?>
				<a href="<?php echo esc_url($facebook); ?>"><i class="fa fa-facebook"></i></a>
			<?php } ?>
			<?php if($flickr != '') { ?>
				<a href="<?php echo esc_url($flickr); ?>"><i class="fa fa-flickr"></i></a>
			<?php } ?>
			<?php if($foursquare != '') { ?>
				<a href="<?php echo esc_url($foursquare); ?>"><i class="fa fa-foursquare"></i></a>
			<?php } ?>
			<?php if($github != '') { ?>
				<a href="<?php echo esc_url($github); ?>"><i class="fa fa-github"></i></a>
			<?php } ?>
			<?php if($google_plus != '') { ?>
				<a href="<?php echo esc_url($google_plus); ?>"><i class="fa fa-google-plus"></i></a>
			<?php } ?>
			<?php if($html5 != '') { ?>
				<a href="<?php echo esc_url($html5); ?>"><i class="fa fa-html5"></i></a>
			<?php } ?>
			<?php if($instagram != '') { ?>
				<a href="<?php echo esc_url($instagram); ?>"><i class="fa fa-instagram"></i></a>
			<?php } ?>
			<?php if($linkedin != '') { ?>
				<a href="<?php echo esc_url($linkedin); ?>"><i class="fa fa-linkedin"></i></a>
			<?php } ?>
			<?php if($renren != '') { ?>
				<a href="<?php echo esc_url($renren); ?>"><i class="fa fa-renren"></i></a>
			<?php } ?>
			<?php if($skype != '') { ?>
				<a href="<?php echo esc_url($skype); ?>"><i class="fa fa-skype"></i></a>
			<?php } ?>
			<?php if($stackexchange != '') { ?>
				<a href="<?php echo esc_url($stackexchange); ?>"><i class="fa fa-stack-exchange"></i></a>
			<?php } ?>
			<?php if($trello != '') { ?>
				<a href="<?php echo esc_url($trello); ?>"><i class="fa fa-trello"></i></a>
			<?php } ?>
			<?php if($tumblr != '') { ?>
				<a href="<?php echo esc_url($tumblr); ?>"><i class="fa fa-tumblr"></i></a>
			<?php } ?>
			<?php if($twitter != '') { ?>
				<a href="<?php echo esc_url($twitter); ?>"><i class="fa fa-twitter"></i></a>
			<?php } ?>
			<?php if($vk != '') { ?>
				<a href="<?php echo esc_url($vk); ?>"><i class="fa fa-vk"></i></a>
			<?php } ?>
			<?php if($weibo != '') { ?>
				<a href="<?php echo esc_url($weibo); ?>"><i class="fa fa-weibo"></i></a>
			<?php } ?>
			<?php if($windows != '') { ?>
				<a href="<?php echo esc_url($windows); ?>"><i class="fa fa-windows"></i></a>
			<?php } ?>
			<?php if($xing != '') { ?>
				<a href="<?php echo esc_url($xing); ?>"><i class="fa fa-xing"></i></a>
			<?php } ?>
			<?php if($youtube != '') { ?>
				<a href="<?php echo esc_url($youtube); ?>"><i class="fa fa-youtube"></i></a>
			<?php } ?>
		</div>
		<?php
		$output = ob_get_contents();
		ob_end_clean();
		return $output;
	}

	add_shortcode('vc_social_icons', 'vc_social_icons');
	/*
	function vc_theme_vc_single_image($atts, $content = null) {
		$output = $el_class = $image = $img_size = $img_link = $img_link_target = $img_link_large = $title = $css_animation = '';

		extract(shortcode_atts(array(
		    'title' => '',
		    'image' => $image,
		    'img_size'  => 'thumbnail',
		    'img_link_large' => false,
		    'img_link' => '',
		    'img_link_target' => '_self',
		    'el_class' => '',
		    'css_animation' => ''
		), $atts));

		$img_id = preg_replace('/[^\d]/', '', $image);
		$img = wpb_getImageBySize(array( 'attach_id' => $img_id, 'thumb_size' => $img_size ));
		if ( $img == NULL ) $img['thumbnail'] = '<img src="http://placekitten.com/g/400/300" /> <small>'.__('This is image placeholder, edit your page to replace it.', 'js_composer').'</small>';

		$a_class = ' class="popup-link"';
		if ( $el_class != '' ) {
		    $tmp_class = explode(" ", strtolower($el_class));
		    $tmp_class = str_replace(".", "", $tmp_class);
		    if ( in_array("prettyphoto", $tmp_class) ) {
		        wp_enqueue_script( 'prettyphoto' );
		        wp_enqueue_style( 'prettyphoto' );
		        $a_class = ' class="prettyphoto"';
		        $el_class = str_ireplace(" prettyphoto", "", $el_class);
		    }
		}

		$link_to = '';
		if ($img_link_large==true) {
		    $link_to = wp_get_attachment_image_src( $img_id, 'large');
		    $link_to = $link_to[0];
		}
		else if (!empty($img_link)) {
		    $link_to = $img_link;
		}
		if(!preg_match('/^(https?\:\/\/|\/\/)/', $link_to) && $link_to!='') $link_to = 'http://'.$link_to;
		$image_string = !empty($link_to) ? '<a'.$a_class.' href="'.$link_to.'"'.($img_link_target!='_self' ? ' target="'.$img_link_target.'"' : '').'>'.$img['thumbnail'].'</a>' : $img['thumbnail'];

		$css_class =  apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'wpb_single_image wpb_content_element'.$el_class, 'vc_single_image');
		

		$output .= "\n\t".'<div class="'.$css_class.'">';
		$output .= "\n\t\t".'<div class="wpb_wrapper">';
		$output .= "\n\t\t\t".wpb_widget_title(array('title' => $title, 'extraclass' => 'wpb_singleimage_heading'));
		$output .= "\n\t\t\t".$image_string;
		$output .= "\n\t\t".'</div> ';
		$output .= "\n\t".'</div> ';

		return $output;
	}
	*/
	function vc_back_to_top($atts, $content=null) {
		ob_start();
		?>
		<button class="btn-small bc-2 back-to-top back-tt"><i class="fa fa-angle-up"></i></button>
		<?php
		$output = ob_get_contents();
		ob_end_clean();
		return $output;
	}
	add_shortcode('vc_back_to_top', 'vc_back_to_top');

	function vc_address($atts, $content=null) {
		$output = $fa_icon = $entypo_icon = $icon_source = '';
		extract(shortcode_atts(array(
		    'icon' => '',
		    'icon_source' => 'fa',
		    'fa_icon' => '',
		    'entypo_icon' => ''
		), $atts));
		ob_start();
		?>
		<div class="footer-column">
			

			<?php
			if($icon_source == 'fa') 
				$icon = $fa_icon;
			else 
				$icon = $entypo_icon;
			?>
       		<i class="<?php echo esc_attr($icon_source); ?> <?php echo esc_attr($icon); ?>"></i>
        	<p><?php echo $content; ?></p>
      	</div>
		<?php
		$output = ob_get_contents();
		ob_end_clean();
		return $output;
	}

	add_shortcode('vc_address', 'vc_address');

	/*
	function vc_theme_vc_text_separator($atts, $content=null) {
		$output = $title = $el_class = '';
		extract(shortcode_atts(array(
		    'title' => '',
		    'el_class' => ''
		), $atts));

	
		$output .= '<div class="h2-container '.$style.' '.$el_class.'"> ';
		if($title != '') {
			$output .= '<h2>'.$title.'</h2>';
		} 

	    $output .= '
	          <hr class="small-line">
	        </div>';

		return $output;
	}
	*/

	vc_map( array(
	  "name" => __("Accordion", "js_composer"),
	  "base" => "vc_accordion",
	  "show_settings_on_create" => false,
	  "is_container" => true,
	  "icon" => "icon-wpb-ui-accordion",
	  "category" => __('Content', 'js_composer'),
	  "params" => array(
	    array(
	      "type" => "textfield",
	      "heading" => __("Widget title", "js_composer"),
	      "param_name" => "title",
	      "description" => __("What text use as a widget title. Leave blank if no title is needed.", "js_composer")
	    ),
	    array(
	      "type" => "textfield",
	      "heading" => __("Extra class name", "js_composer"),
	      "param_name" => "el_class",
	      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
	    )
	  ),
	  "custom_markup" => '
	  <div class="wpb_accordion_holder wpb_holder clearfix vc_container_for_children">
	  %content%
	  </div>
	  <div class="tab_controls">
	  <button class="add_tab" title="'.__("Add accordion section", "js_composer").'">'.__("Add accordion section", "js_composer").'</button>
	  </div>
	  ',
	  'default_content' => '
	  [vc_accordion_tab title="'.__('Section 1', "js_composer").'"][/vc_accordion_tab]
	  [vc_accordion_tab title="'.__('Section 2', "js_composer").'"][/vc_accordion_tab]
	  ',
	  'js_view' => 'VcAccordionView'
	) );

	function list_display($atts, $content = null) {
		$output = '';
		$output = '<ul class="styled-list">'.do_shortcode($content).'</ul>';
		return $output;
	}
	add_shortcode('list', 'list_display');

	function list_item($atts, $content = null) {
		$output = $style = '';
		extract(shortcode_atts(array(
		    'style' => '1'
		), $atts));
		if($style == 1) $style = 'list-a';
		if($style == 2) $style = 'list-b';
		if($style == 3) $style = 'list-c';
		$output = '<li class="'.$style.'">';
		
		$output .= do_shortcode($content);
		$output .= '</li>';
		return $output;
	}
	add_shortcode('list_item', 'list_item');

	function fa_icon($atts) {
		$output = $name = '';
		extract(shortcode_atts(array(
		    'name' => ''
		), $atts));
		$output = '<i class="fa '.$name.'"></i>';
		return $output;
	}
	add_shortcode('icon', 'fa_icon');
	/*
	vc_map( array(
	  "name" => __("Row", "js_composer"),
	  "base" => "vc_row",
	  "is_container" => true,
	  "icon" => "icon-wpb-row",
	  "show_settings_on_create" => false,
	  "category" => __('Content', 'js_composer'),
	  "params" => array(
	    array(
	      "type" => "textfield",
	      "heading" => __("Extra class name", "js_composer"),
	      "param_name" => "el_class",
	      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
	    ),
	    array(
	      "type" => "dropdown",
	      "heading" => __("Full width", "js_composer"),
	      "param_name" => "full_width",
	      "value" => array(__('No', "js_composer") => "false",__('Yes', "js_composer") => "true" ),
	      "description" => __("Do you want to display this row in full width?", "js_composer")
	    ),
	    array(
	      "type" => "dropdown",
	      "heading" => __("Style", "js_composer"),
	      "param_name" => "style",
	      "value" => array(__('Default', "js_composer") => "",__('Big unit box', "js_composer") => "big-unit-box" ),
	    ),
	  ),
	  "js_view" => 'VcRowView'
	) );
	*/

	function countdown($atts) {
		$output = $month = $day = $year = $hour = $minute = '';
		extract(shortcode_atts(array(
		    'month' => '',
		    'day' => '',
		    'year' => '',
		    'hour' => '',
		    'minute' => ''
		), $atts));

		$date = $month . ' ' . $day .', '. $year . ' '. $hour .
		   ':'. $minute . ':00';

		ob_start(); 
		?>
		<div class="counter-container">
			<div class="counter-box">
		       <!-- Countdown -->
		       <div class="countdown" data-date="<?php echo esc_attr($date); ?>"></div>

		    </div> 
	    </div> 
		<?php
		$output = ob_get_contents();
		ob_end_clean();
		return $output;
	}

	add_shortcode('countdown', 'countdown');

	function vc_divider($atts) {
		$output = '<div class="divider"></div>';
		return $output;
	}
	add_shortcode('vc_divider', 'vc_divider');

	function event_timeline($atts) {
		$output = $icon1 = $icon2 = $icon3 = $final_icon = $title1 = $title2 = $title3 = '';
		$content1 = $content2 = $content3 = '';
		extract(shortcode_atts(array(
		    'icon1' => '',
		    'icon2' => '',
		    'icon3' => '',
		    'final_icon' => '',
		    'title1' => '',
		    'title2' => '',
		    'title3' => '',
		    'content1' => '',
		    'content2' => '',
		    'content3' => ''
		), $atts));
		ob_start(); 
		?>
		<div class="event">
		<?php
		if ($icon1 != 'none') {
		?>
			<div class="row">   
		        <div class="col-md-6 col-md-offset-6 col-sm-6 col-sm-offset-6 col-xs-6 col-xs-offset-6 e-right"> 
		          <!-- Title -->  
		          <h4><?php echo $title1; ?></h4>
		          <!-- Icon --> 
		          <i class="fa <?php echo esc_attr($icon1); ?>"></i>
		        </div>                  
		    </div>         

	      	<div class="row info-row">   
	        	<div class="col-md-6 col-md-offset-6 col-sm-6 col-sm-offset-6 col-xs-6 col-xs-offset-6 content-right"> 
		          <!-- Content -->
		          <p>   
		            <?php echo $content1; ?> 
		          </p>
		          <!-- Content End -->
		       </div>
	      	</div>  
	        <!-- Event Item Right End -->
	    <?php
		}
		if ($icon2 != 'none') {
	    ?>
	      <!-- Event Item Left -->
	      <div class="row">   
	        <div class="col-md-6 col-sm-6 col-xs-6 e-left"> 
	          <!-- Title -->  
	          <h4><?php echo $title2; ?></h4>
	          <!-- Icon --> 
	          <i class="fa <?php echo esc_attr($icon2); ?>"></i>
	        </div>                  
	      </div>         
	      
	      <div class="row info-row">   
	        <div class="col-md-5 col-md-offset-1 col-sm-5 col-sm-offset-1 col-xs-5 col-xs-offset-1 content-left">
	          <!-- Content -->
	          <p>
	            <?php echo $content2; ?> 
	          </p>
	          <!-- Content End -->
	        </div>
	      </div>  
	      <!-- Event Item Left End -->
	    <?php
		}
		if ($icon3 != 'none') {
		?>
	      <!-- Event Item Right -->
	      <div class="row">   
	        <div class="col-md-6 col-md-offset-6 col-sm-6 col-sm-offset-6 col-xs-6 col-xs-offset-6 e-right"> 
	          <!-- Title -->  
	          <h4><?php echo $title3; ?></h4>
	          <!-- Icon --> 
	          <i class="fa <?php echo esc_attr($icon3); ?>"></i>
	        </div>                  
	      </div>         
	      
	      <div class="row info-row">   
	        <div class="col-md-6 col-md-offset-6 col-sm-6 col-sm-offset-6 col-xs-6 col-xs-offset-6 content-right"> 
	          <!-- Content -->
	          <p>   
	            <?php echo $content3; ?>
	          </p>
	          <!-- Content End -->
	        </div>
	      </div>  
	      <!-- Event Item Right End -->
	    <?php
		}
		if ($final_icon != 'none') {
		?>
	      <div class="row">   
	        <div class="col-md-12">
	          <div class="circle">
	            <i class="fa <?php echo esc_attr($final_icon); ?>"></i>
	          </div>
	        </div>
	      </div>      
		<?php
		}
		?>
		</div>
		<?php
		$output = ob_get_contents();
		ob_end_clean();
		return $output;
	}

	add_shortcode('event_timeline', 'event_timeline');

	

	function section_title($atts) {
		$output = $title = $style = '';
		extract(shortcode_atts(array(
		    'title' => '',
		    'style' => ''
		), $atts));
		ob_start(); 
		?>
		<h2 class="<?php echo esc_attr($style); ?>"><?php echo $title; ?></h2>
		<?php
		$output = ob_get_contents();
		ob_end_clean();
		return $output;
	}
	add_shortcode('section_title', 'section_title');

	add_action('admin_init','shortcodes_maps_init');

	function shortcodes_maps_init() {

		global $all_categories;
		global $animate_css;
		global $team_members;
		global $font_awesome_icons;
		global $entypo_icons;
		global $team_members;
		global $animate_css;
		global $font_awesome_icons;
		global $entypo_icons;
		global $all_categories;
		global $days;
		global $years;
		global $hours;
		global $minutes;
		global $typicon_icons;
		
		vc_add_param('vc_row',array(
		      "type" => "dropdown",
		      "heading" => __("Full width", "js_composer"),
		      "param_name" => "full_width",
		      "value" => array(__('No', "js_composer") => "false",__('Yes', "js_composer") => "true" ),
		      "description" => __("Do you want to display this row in full width?", "js_composer")
		    )
		);
		vc_add_param('vc_row',array(
		      "type" => "attach_image",
		      "heading" => __("Parallax image", "js_composer"),
		      "param_name" => "parallax_image",
		      "description" => __("Choose image for parallax background.", "js_composer")
		    )
		);

		vc_add_param('vc_row',array(
		      "type" => "textfield",
		      "heading" => __("Parallax speed", "js_composer"),
		      "param_name" => "parallax_speed",
		      "value" => "0.1",
		      "description" => __("Speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling.", "js_composer")
		    )
		);
		vc_add_param('vc_row',array(
		      "type" => "textfield",
		      "heading" => __("ID", "js_composer"),
		      "param_name" => "id",
		      "description" => __("Enter unique ID of the section. You will use this ID to add menu item.", "js_composer")
		    )
		);
		
		vc_remove_element("vc_teaser_grid");
		vc_remove_element("vc_posts_grid");

		vc_remove_element("vc_pie");
		vc_remove_element("vc_tour");
		vc_remove_element("vc_cta_button");
		vc_remove_element("vc_carousel");
		vc_remove_element("vc_text_separator");
		
		/*
		vc_map( array(
		  "name" => __("Text Block", "js_composer"),
		  "base" => "vc_column_text",
		  "icon" => "icon-wpb-layer-shape-text",
		  "wrapper_class" => "clearfix",
		  "category" => __('Content', 'js_composer'),
		  "params" => array(
		    array(
		      "type" => "textarea_html",
		      "holder" => "div",
		      "heading" => __("Text", "js_composer"),
		      "param_name" => "content",
		      "value" => __("<p>I am text block. Click edit button to change this text.</p>", "js_composer")
		    ),
		    
		    array(
		      "type" => "dropdown",
		      "heading" => __("CSS Animation", "js_composer"),
		      "param_name" => "animation",
		      "value" => $animate_css   
		    ),
		    
		    array(
		      "type" => "textfield",
		      "heading" => __("Extra class name", "js_composer"),
		      "param_name" => "el_class",
		      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
		    ),
		  )
		) );
		*/
		vc_map( array(
		  "name" => __("Section title", "js_composer"),
		  "base" => "section_title",
		  "icon" => "icon-wpb-row",
		  "show_settings_on_create" => true,
		  "category" => __('Content', 'js_composer'),
		  "params" => array(
		    array(
		      "type" => "textfield",
		      "heading" => __("Title", "js_composer"),
		      "param_name" => "title",
		      "value" => __("Title", "js_composer"),
		      "description" => __("Title of the section.", "js_composer")
		    ),
		  	array(
		      "type" => "dropdown",
		      "heading" => __("Style", "js_composer"),
		      "param_name" => "style",
		      "value" => array(__('Dark', "js_composer") => "section-title", __('White', "js_composer") => "section-title-white", __('Gray', "js_composer") => "section-title-gray" ),
		      "description" => __("Button size.", "js_composer")
		    ),
		  ),
		) );
		

		/* Button
		---------------------------------------------------------- */

		vc_map( array(
		  "name" => __("Button", "js_composer"),
		  "base" => "vc_button",
		  "icon" => "icon-wpb-ui-button",
		  "category" => __('Content', 'js_composer'),
		  "params" => array(
		    array(
		      "type" => "textfield",
		      "heading" => __("Text on the button", "js_composer"),
		      "holder" => "button",
		      "class" => "wpb_button",
		      "param_name" => "title",
		      "value" => __("Text on the button", "js_composer"),
		      "description" => __("Text on the button.", "js_composer")
		    ),
		    array(
		      "type" => "textfield",
		      "heading" => __("URL (Link)", "js_composer"),
		      "param_name" => "href",
		      "description" => __("Button link.", "js_composer")
		    ),
		    array(
		      "type" => "fa_list",
		      "heading" => __("Icon", "js_composer"),
		      "param_name" => "icon",
		      "description" => __("Button icon.", "js_composer")
		    ),
		    array(
		      "type" => "dropdown",
		      "heading" => __("Size", "js_composer"),
		      "param_name" => "size",
		      "value" => array(__('Default', "js_composer") => "", __('Large', "js_composer") => "btn-lg", __('Small', "js_composer") => "btn-small", __('Mini', "js_composer") => "btn-mini"),
		      "description" => __("Button size.", "js_composer")
		    ),
		    array(
		      "type" => "textfield",
		      "heading" => __("Extra class name", "js_composer"),
		      "param_name" => "el_class",
		      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
		    ),
		    array(
		      "type" => "dropdown",
		      "heading" => __("Style", "js_composer"),
		      "param_name" => "style",
		      "value" => array(__('Default', "js_composer") => "", __('Primary', "js_composer") => "btn-primary", __('Info', "js_composer") => "btn-info" )
		    ),
		  ),
		  "js_view" => 'VcButtonView'
		) );

		vc_map( array(
		  "name" => __("Icon box", "js_composer"),
		  "base" => "vc_icon_box",
		  "show_settings_on_create" => true,
		  "category" => __('Content', 'js_composer'),
		  "params" => array(
		   	array(
		      "type" => "dropdown",
		      "heading" => __("Icon source", "js_composer"),
		      "param_name" => "icon_source",
		      "value" => array(__('Font Awesome', "js_composer") => "fa", __('Custom image', "js_composer") => "custom_image" )
		    ),
		  	array(
		      "type" => "fa_list",
		      "heading" => __("Icon", "js_composer"),
		      "param_name" => "fa_icon",
		      "dependency" => Array('element' => 'icon_source', 'value' => array('fa')),
		    ),
		    array(
		    	"type" => "attach_image",
			    "heading" => __("Icon image", "js_composer"),
			    "param_name" => "icon_image",
			    "description" => __("Choose image for icon", "js_composer"),
			    "dependency" => Array('element' => 'icon_source', 'value' => array('custom_image')),
		    ),
		    array(
		      "type" => "dropdown",
		      "heading" => __("Icon size", "js_composer"),
		      "param_name" => "icon_size",
		      "value" => array(__('Normal', "js_composer") => "normal", __('Small', "js_composer") => "small", __('Large', "js_composer") => "large" )
		    ),
		    array(
		      "type" => "dropdown",
		      "heading" => __("Icon background", "js_composer"),
		      "param_name" => "icon_background",
		      "value" => array(__('Circle', "js_composer") => "circle", __('Square', "js_composer") => "square", __('Rounded', "js_composer") => "rounded", __('Border', "js_composer") => "border", __('Hexagon', "js_composer") => "hexagon" ),
		      "dependency" => Array('element' => 'icon_source', 'value' => array('fa')),
		    ),
		    array(
				"type" => "colorpicker",
				"class" => "",
				"heading" => __("Icon background color", "decoy"),
				"param_name" => "icon_background_color",
				"value" => "#282A2E",
				"description" => __("Give it a nice paint!", "smile"),	
				"dependency" => Array('element' => 'icon_source', 'value' => array('fa')),			
			),
			array(
				"type" => "colorpicker",
				"class" => "",
				"heading" => __("Icon color", "decoy"),
				"param_name" => "icon_color",
				"value" => "#ffffff",
				"description" => __("Give it a nice paint!", "smile"),
				"dependency" => Array('element' => 'icon_source', 'value' => array('fa')),				
			),
		    array(
		      "type" => "dropdown",
		      "heading" => __("Style", "js_composer"),
		      "param_name" => "style",
		      "value" => array(__('Icon on top', "js_composer") => "style1", __('Icon on left', "js_composer") => "style2", __('Icon on right', "js_composer") => "style3" )
		    ),
		    array(
		      "type" => "dropdown",
		      "heading" => __("Text align", "js_composer"),
		      "param_name" => "text_align",
		      "value" => array(__('Left', "js_composer") => "text-left", __('Center', "js_composer") => "text-center", __('Right', "js_composer") => "text-right" )
		    ),
		    array(
		      "type" => "textfield",
		      "heading" => __("Heading", "js_composer"),
		      "param_name" => "heading"
		    ),
		    array(
				"type" => "colorpicker",
				"class" => "",
				"heading" => __("Heading color", "decoy"),
				"param_name" => "heading_color",
				"value" => "#686c77",
				"description" => __("Give it a nice paint!", "smile"),				
			),
		    array(
		      "type" => "textfield",
		      "heading" => __("Link", "js_composer"),
		      "param_name" => "link"
		    ),
		    array(
		      "type" => "dropdown",
		      "heading" => __("CSS Animation", "js_composer"),
		      "param_name" => "animation",
		      "value" => $animate_css   
		    ),
		    array(
		      "type" => "textarea_html",
		      "holder" => "div",
		      "heading" => __("Text", "js_composer"),
		      "param_name" => "content",
		      "value" => __("<p>I am text block. Click edit button to change this text.</p>", "js_composer")
		    ),
		  ),
		  
		) );

		vc_map( array(
		  "name" => __("Spacer", "js_composer"),
		  "base" => "vc_spacer",
		  "show_settings_on_create" => true,
		  "category" => __('Content', 'js_composer'),
		  "params" => array(
		    array(
		      "type" => "dropdown",
		      "heading" => __("Height", "js_composer"),
		      "param_name" => "height",
		      "value" => array('20px' => '20', '1px' => '1','5px' => '5','10px' => '10','15px' => '15', '25px' => '25','30px' => '30',
		      	'35px' => '35', '40px' => '40', '45px' => '45', '50px' => '50','55px' => '55','60px' => '60', '65px' => '65', '70px' => '70',
		      	'75px' => '75', '80px' => '80', '85px' => '85', '90px' => '90', '95px' => '95', '100px' => '100', '125px' => '125'),
		      "description" => __("Choose icon", "js_composer")
		    )
		   
		  ),
		  
		) );

		vc_map( array(
		  "name" => __("Countdown", "js_composer"),
		  "base" => "countdown",
		  "show_settings_on_create" => true,
		  "icon" => "icon-wpb-row",
		  "category" => __('Content', 'js_composer'),
		  "params" => array(
		    array(
		      "type" => "dropdown",
		      "heading" => __("Month", "js_composer"),
		      "param_name" => "month",
		      "value" => array('January' => 'january', 'February' => 'february','March' => 'march','April' => 'april','May' => 'may', 'June' => 'june','July' => 'july',
		      	'August' => 'august', 'September' => 'september', 'October' => 'october', 'November' => 'november','December' => 'december'),
		      "description" => __("Choose month", "js_composer")
		    ),
		    array(
		      "type" => "dropdown",
		      "heading" => __("Day", "js_composer"),
		      "param_name" => "day",
		      "value" => $days,
		      "description" => __("Choose day", "js_composer")
		    ),
		    array(
		      "type" => "dropdown",
		      "heading" => __("Year", "js_composer"),
		      "param_name" => "year",
		      "value" => $years,
		      "description" => __("Choose year", "js_composer")
		    ),
		    array(
		      "type" => "dropdown",
		      "heading" => __("Hour", "js_composer"),
		      "param_name" => "hour",
		      "value" => $hours,
		      "description" => __("Choose hour", "js_composer")
		    ),
		    array(
		      "type" => "dropdown",
		      "heading" => __("Minute", "js_composer"),
		      "param_name" => "minute",
		      "value" => $minutes,
		      "description" => __("Choose minute", "js_composer")
		    )
		   
		  ),
		  
		) );

		vc_map( array(
		  "name" => __("Divider", "js_composer"),
		  "base" => "vc_divider",
		  "show_settings_on_create" => false,
		  "icon" => "icon-wpb-row",
		  "category" => __('Content', 'js_composer'),
		  
		) );

		vc_map( array(
		  "name" => __("Progress Bar", "js_composer"),
		  "base" => "vc_progress_bar",
		  "icon" => "icon-wpb-graph",
		  "category" => __('Content', 'js_composer'),
		  "params" => array(
		  	array(
		      "type" => "dropdown",
		      "heading" => __("Style", "js_composer"),
		      "param_name" => "style",
		      "value" => array(__('Style 1', 'js_composer') => 'style1', __('Style 2', 'js_composer') => 'style2' )
		    ),
		    array(
		      "type" => "textfield",
		      "heading" => __("Widget title", "js_composer"),
		      "param_name" => "title",
		      "description" => __("What text use as a widget title. Leave blank if no title is needed.", "js_composer")
		    ),
		    
		    array(
		      "type" => "exploded_textarea",
		      "heading" => __("Graphic values", "js_composer"),
		      "param_name" => "values",
		      "description" => __('Input graph values here. Divide values with linebreaks (Enter). Example: 90|Development', 'js_composer'),
		      "value" => "90|Development,80|Design,70|Marketing"
		    ),
		    array(
		      "type" => "textfield",
		      "heading" => __("Units", "js_composer"),
		      "param_name" => "units",
		      "description" => __("Enter measurement units (if needed) Eg. %, px, points, etc. Graph value and unit will be appended to the graph title.", "js_composer")
		    ),

		    array(
		      "type" => "textfield",
		      "heading" => __("Extra class name", "js_composer"),
		      "param_name" => "el_class",
		      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
		    )
		  )
		) );

		vc_map( array(
		  "name" => 'WP ' . __("Recent Posts", 'synth'),
		  "base" => "vc_wp_posts",
		  "icon" => "icon-wpb-wp",
		  "category" => __("WordPress Widgets", "js_composer"),
		  "class" => "wpb_vc_wp_widget",
		  "params" => array(
		    array(
		      "type" => "textfield",
		      "heading" => __("Widget title", "js_composer"),
		      "param_name" => "title",
		      "description" => __("What text use as a widget title. Leave blank to use default widget title.", "js_composer")
		    ),
		    array(
		      "type" => "dropdown",
		      "heading" => __("Style", "js_composer"),
		      "param_name" => "style",
		      "value" => array(__('Carousel', 'js_composer') => 'carousel', __('List', 'js_composer') => 'list' )
		    ),
		    array(
		      "type" => "textfield",
		      "heading" => __("Number of posts to show", "js_composer"),
		      "param_name" => "number",
		      "admin_label" => true
		    ),
		    array(
		      "type" => "textfield",
		      "heading" => __("Extra class name", "js_composer"),
		      "param_name" => "el_class",
		      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
		    )
		  )
		) );

		

		vc_map( array(
		  "name" => __("Testimonial", "js_composer"),
		  "base" => "vc_testimonial",
		  "icon" => "icon-wpb-graph",
		  "category" => __('Content', 'js_composer'),
		  "params" => array(
		    array(
		      "type" => "dropdown",
		      "heading" => __("Style", "js_composer"),
		      "param_name" => "type",
		      "value" => array(__('Style 1(with image)', 'js_composer') => 'type1', __('Style 2(without image)', 'js_composer') => 'type2', __('Style 3(without image)', 'js_composer') => 'type3' )
		    ),
		    array(
		      "type" => "textfield",
		      "heading" => __("Name", "js_composer"),
		      "param_name" => "name",
		      "description" => __("Enter name of the customer", "js_composer")
		    ),
		    array(
		      "type" => "textfield",
		      "heading" => __("Job", "js_composer"),
		      "param_name" => "job",
		      "description" => __("Enter job of the customer", "js_composer")
		    ),
		    array(
		      "type" => "textarea_html",
		      "holder" => "div",
		      "heading" => __("Text", "js_composer"),
		      "param_name" => "content",
		      "value" => __("<p>I am text block. Click edit button to change this text.</p>", "js_composer")
		    ),
		    array(
		      "type" => "attach_image",
		      "heading" => __("Image", "js_composer"),
		      "param_name" => "image",
		      "dependency" => Array('element' => 'type', 'value' => array('type1')),
		      "value" => "",
		      "description" => __("Select image from media library.", "js_composer")
		    ),
		    array(
		      "type" => "dropdown",
		      "heading" => __("CSS Animation", "js_composer"),
		      "param_name" => "animation",
		      "value" => $animate_css   
		    ),
		   
		    array(
		      "type" => "textfield",
		      "heading" => __("Extra class name", "js_composer"),
		      "param_name" => "el_class",
		      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
		    )
		  )
		) );

		vc_map( array(
		  "name" => __("Posts Slider", "js_composer"),
		  "base" => "vc_posts_slider",
		  "icon" => "icon-wpb-slideshow",
		  "category" => __('Content', 'js_composer'),
		  "params" => array(
		    array(
		      "type" => "dropdown",
		      "heading" => __("Slider type", "js_composer"),
		      "param_name" => "type",
		      "admin_label" => true,
		      "value" => array(__("Flexslider", "js_composer") => "flexslider", __("Sly slider", "js_composer") => "slyslider", __("Refine slider", "js_composer") => "refineslider"),
		      "description" => __("Select slider type.", "js_composer")
		    ),
		    array(
		      "type" => "dropdown",
		      "heading" => __("Layout", "js_composer"),
		      "param_name" => "layout",
		      "admin_label" => false,
		      "dependency" => Array('element' => "type", 'value' => array('flexslider')),
		      "value" => array(__("Normal", "js_composer") => "normal", __("With thumbnails", "js_composer") => "thumbnails", __("Text", "js_composer") => "text", __("Laptop", "js_composer") => "laptop"),
		      "description" => __("Layout of slider", "js_composer")
		    ),
		    array(
		      "type" => "attach_image",
		      "heading" => __("Parallax image", "js_composer"),
		      "param_name" => "image",
		      "admin_label" => true,
		      "dependency" => Array('element' => "type", 'value' => array('parallaxslider')),
		      "value" => "",
		      "description" => __("Select image from media library.", "js_composer")
		    ),
		    array(
		      "type" => "dropdown",
		      "heading" => __("Transition", "js_composer"),
		      "param_name" => "transition",
		      "admin_label" => true,
		      "dependency" => Array('element' => "type", 'value' => array('flexslider', 'parallaxslider')),
		      "value" => array(__("Fade", "js_composer") => "fade",__("Slide", "js_composer") => "slide" ),
		      "description" => __("Select transition type.", "js_composer")
		    ),
		    array(
		      "type" => "dropdown",
		      "heading" => __("Image size", "js_composer"),
		      "param_name" => "image_size",
		      "dependency" => Array('element' => "type", 'value' => array('flexslider')),
		      "value" => array(__("Slider (wide)", "js_composer") => "slider",__("Slider (medium)", "js_composer") => "slider-medium", __("Slider (small)", "js_composer") => "slider-small" ),
		      "description" => __("Select image size.", "js_composer")
		    ),
		    
		    array(
		      "type" => "textfield",
		      "heading" => __("Slides count", "js_composer"),
		      "param_name" => "count",
		      "description" => __('How many slides to show? Enter number or word "All".', "js_composer")
		    ),
		    array(
		      "type" => "dropdown",
		      "heading" => __("Auto rotate slides", "js_composer"),
		      "param_name" => "interval",
		      "dependency" => Array('element' => "type", 'value' => array('flexslider', 'parallaxslider')),
		      "value" => array(3000, 5000, 10000, 15000, __("Disable", "js_composer") => 0),
		      "description" => __("Auto rotate slides each X milliseconds.", "js_composer")
		    ),
		    /*
		    array(
		      "type" => "exploded_textarea",
		      "heading" => __("Categories", "js_composer"),
		      "param_name" => "categories",
		      "description" => __("If you want to narrow output, enter category slugs here. Note: Only listed categories will be included. Divide categories with commas (,).", "js_composer")
		    ),
		    */
			array(
		      "type" => "dropdown",
		      "heading" => __("Category", "js_composer"),
		      "param_name" => "categories",
		      "value" => $all_categories,
		      "description" => __("Select category of posts you want to display", "js_composer")
		    ),
		    array(
		      "type" => "dropdown",
		      "heading" => __("Order by", "js_composer"),
		      "param_name" => "orderby",
		      "value" => array( "", __("Date", "js_composer") => "date", __("ID", "js_composer") => "ID", __("Author", "js_composer") => "author", __("Title", "js_composer") => "title", __("Modified", "js_composer") => "modified", __("Random", "js_composer") => "rand", __("Comment count", "js_composer") => "comment_count", __("Menu order", "js_composer") => "menu_order" ),
		      "description" => sprintf(__('Select how to sort retrieved posts. More at %s.', 'js_composer'), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>')
		    ),
		    array(
		      "type" => "dropdown",
		      "heading" => __("Order", "js_composer"),
		      "param_name" => "order",
		      "value" => array( __("Descending", "js_composer") => "DESC", __("Ascending", "js_composer") => "ASC" ),
		      "description" => sprintf(__('Designates the ascending or descending order. More at %s.', 'js_composer'), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>')
		    ),
		    array(
		      "type" => "textfield",
		      "heading" => __("Extra class name", "js_composer"),
		      "param_name" => "el_class",
		      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
		    )
		  )
		) );
		
		
		vc_map( array(
		  "name" => __("Hero unit", "js_composer"),
		  "base" => "vc_hero_unit",
		  "icon" => "icon-wpb-row",
		  "show_settings_on_create" => true,
		  "category" => __('Content', 'js_composer'),
		  "params" => array(
		    array(
		      "type" => "dropdown",
		      "heading" => __("Icon source", "js_composer"),
		      "param_name" => "icon_source",
		      "value" => array(__('Font Awesome', 'reno') => 'fa'),
		    ),
		  	array(
		      "type" => "fa_list",
		      "heading" => __("Icon", "js_composer"),
		      "param_name" => "fa_icon",
		      "dependency" => Array('element' => 'icon_source', 'value' => array('fa')),
		    ),
		   
		    array(
		      "type" => "textarea_html",
		      "holder" => "div",
		      "heading" => __("Text", "js_composer"),
		      "param_name" => "content",
		      "value" => __("<h4>Heading text</h4>", "js_composer")
		    ),
		    array(
		      "type" => "dropdown",
		      "heading" => __("Text align", "js_composer"),
		      "param_name" => "text_align",
		      "value" => array(__('Left', 'decoy') => 'align-left',__('Center', 'decoy') => 'align-center',__('Right', 'decoy') => 'align-right'),
		    ),
		    array(
				"type" => "colorpicker",
				"class" => "",
				"heading" => __("Background color", "decoy"),
				"param_name" => "color",
				"value" => "#54cde7",
				"description" => __("Give it a nice paint!", "smile"),				
			),
		    array(
		      "type" => "dropdown",
		      "heading" => __("CSS animation", "js_composer"),
		      "param_name" => "animation",
		      "value" => $animate_css,
		      "description" => __("Animation of left side.", "js_composer")
		    ),
		  ),
		) );
		vc_map( array(
		  "name" => __("Team members", "js_composer"),
		  "base" => "vc_team_members",
		  "icon" => "icon-wpb-row",
		  "show_settings_on_create" => false,
		  "category" => __('Content', 'js_composer'),
		  "params" => array(
		    
		  ),
		) );

		vc_map( array(
		  "name" => __("Clients", "js_composer"),
		  "base" => "vc_clients",
		  "icon" => "icon-wpb-row",
		  "show_settings_on_create" => true,
		  "category" => __('Content', 'js_composer'),
		  "params" => array(
		    array(
		      "type" => "textfield",
		      "heading" => __("Widget title", "js_composer"),
		      "param_name" => "widget_title",
		    ),
		  ),
		) );
		vc_map( array(
		  "name" => __("Last portfolio gallery", "js_composer"),
		  "base" => "vc_last_portfolio",
		  "icon" => "icon-wpb-row",
		  "show_settings_on_create" => true,
		  "category" => __('Content', 'js_composer'),
		  "params" => array(
		  	array(
		      "type" => "textfield",
		      "heading" => __("Count", "js_composer"),
		      "param_name" => "count",
		      "description" => __("Image count", "js_composer")
		    ),
		  ),
		) );
		vc_map( array(
		  "name" => __("Tab", "js_composer"),
		  "base" => "vc_tab",
		  "allowed_container_element" => 'vc_row',
		  "is_container" => true,
		  "content_element" => false,
		  "params" => array(
		    array(
		      "type" => "textfield",
		      "heading" => __("Title", "js_composer"),
		      "param_name" => "title",
		      "description" => __("Tab title.", "js_composer")
		    ),
		    array(
		      "type" => "tab_id",
		      "heading" => __("Tab ID", "js_composer"),
		      "param_name" => "tab_id"
		    ),
		  ),
		  'js_view' => 'VcTabView'
		) );

		vc_map( array(
		  "name" => __("Portfolio", "js_composer"),
		  "base" => "vc_portfolio_display",
		  "icon" => "icon-wpb-row",
		  "show_settings_on_create" => true,
		  "category" => __('Content', 'js_composer'),
		  "params" => array(
		  	 array(
		      "type" => "textfield",
		      "heading" => __("Category", "js_composer"),
		      "param_name" => "category",
		      "description" => __("Insert slug of portfolio category, you want to display. Leave blank for default category.", "js_composer")
		    ),
		  	array(
		      "type" => "dropdown",
		      "heading" => __("Show filter", "js_composer"),
		      "param_name" => "show_filter",
		      "value" => array(__('Yes', 'reno') => 'true', __('No', 'reno') => 'false'),
		    ),
		    array(
		      "type" => "dropdown",
		      "heading" => __("Filter align", "js_composer"),
		      "param_name" => "filter_align",
		      "value" => array(__('Left', 'reno') => 'align-left', __('Center', 'reno') => 'align-center', __('Right', 'reno') => 'align-right'),
		    ),
		    array(
		      "type" => "dropdown",
		      "heading" => __("Columns", "js_composer"),
		      "param_name" => "rows",
		      "value" => array(__('2 Columns', 'reno') => '2', __('3 Columns', 'reno') => '3', __('4 Columns', 'reno') => '4'),
		      "description" => __("Display portfolio in X columns", "js_composer")
		    ),
		    
		    array(
		      "type" => "dropdown",
		      "heading" => __("Isotope layout", "js_composer"),
		      "param_name" => "isotope_layout",
		      "value" => array(__('fitRows', 'reno') => 'fitRows',__('masonry', 'reno') => 'masonry',  __('straightDown', 'reno') => 'straightDown'),
		      "description" => __("", "js_composer")
		    ),
		  ),
		) );

		vc_map( array(
		  "name" => __("Social icons", "js_composer"),
		  "base" => "vc_social_icons",
		  "icon" => "icon-wpb-row",
		  "show_settings_on_create" => true,
		  "category" => __('Content', 'js_composer'),
		  "params" => array(
		  	array(
		      "type" => "textfield",
		      "heading" => __("Widget title", "js_composer"),
		      "param_name" => "title",
		    ),
		    array(
		      "type" => "dropdown",
		      "heading" => __("Style", "js_composer"),
		      "param_name" => "style",
		      "value" => array(__('Style 1', 'reno') => 'social', __('Style 2', 'reno') => 'social-2', __('Style 3', 'reno') => 'social-3', __('Style 4', 'reno') => 'social-4'),
		    ),
		  	array(
		      "type" => "textfield",
		      "heading" => __("Adn", "js_composer"),
		      "param_name" => "adn",
		    ),
		    array(
		      "type" => "textfield",
		      "heading" => __("Android", "js_composer"),
		      "param_name" => "android",
		    ),
		    array(
		      "type" => "textfield",
		      "heading" => __("Apple", "js_composer"),
		      "param_name" => "apple",
		    ),
		    array(
		      "type" => "textfield",
		      "heading" => __("Bitbucket", "js_composer"),
		      "param_name" => "bitbucket",
		    ),
		    array(
		      "type" => "textfield",
		      "heading" => __("Css3", "js_composer"),
		      "param_name" => "css3",
		    ),
		    array(
		      "type" => "textfield",
		      "heading" => __("Dribbble", "js_composer"),
		      "param_name" => "dribbble",
		    ),
		    array(
		      "type" => "textfield",
		      "heading" => __("Dropbox", "js_composer"),
		      "param_name" => "dropbox",
		    ),
		    array(
		      "type" => "textfield",
		      "heading" => __("Facebook", "js_composer"),
		      "param_name" => "facebook",
		    ),
		    array(
		      "type" => "textfield",
		      "heading" => __("Flickr", "js_composer"),
		      "param_name" => "flickr",
		    ),
		    array(
		      "type" => "textfield",
		      "heading" => __("Foursquare", "js_composer"),
		      "param_name" => "foursquare",
		    ),
		    array(
		      "type" => "textfield",
		      "heading" => __("Github", "js_composer"),
		      "param_name" => "github",
		    ),
		    array(
		      "type" => "textfield",
		      "heading" => __("Google plus", "js_composer"),
		      "param_name" => "google_plus",
		    ),
		    array(
		      "type" => "textfield",
		      "heading" => __("html5", "js_composer"),
		      "param_name" => "html5",
		    ),
		    array(
		      "type" => "textfield",
		      "heading" => __("Instagram", "js_composer"),
		      "param_name" => "instagram",
		    ),
		    array(
		      "type" => "textfield",
		      "heading" => __("Linkedin", "js_composer"),
		      "param_name" => "linkedin",
		    ),
		    array(
		      "type" => "textfield",
		      "heading" => __("Renren", "js_composer"),
		      "param_name" => "renren",
		    ),
		    array(
		      "type" => "textfield",
		      "heading" => __("Skype", "js_composer"),
		      "param_name" => "skype",
		    ),
		    array(
		      "type" => "textfield",
		      "heading" => __("Stackexchange", "js_composer"),
		      "param_name" => "stackexchange",
		    ),
		    array(
		      "type" => "textfield",
		      "heading" => __("Trello", "js_composer"),
		      "param_name" => "trello",
		    ),
		    array(
		      "type" => "textfield",
		      "heading" => __("Tumblr", "js_composer"),
		      "param_name" => "tumblr",
		    ),
		    array(
		      "type" => "textfield",
		      "heading" => __("Twitter", "js_composer"),
		      "param_name" => "twitter",
		    ),
		    array(
		      "type" => "textfield",
		      "heading" => __("Vk", "js_composer"),
		      "param_name" => "vk",
		    ),
		    array(
		      "type" => "textfield",
		      "heading" => __("Weibo", "js_composer"),
		      "param_name" => "weibo",
		    ),
		    array(
		      "type" => "textfield",
		      "heading" => __("Windows", "js_composer"),
		      "param_name" => "windows",
		    ),
		    array(
		      "type" => "textfield",
		      "heading" => __("Xing", "js_composer"),
		      "param_name" => "xing",
		    ),
		    array(
		      "type" => "textfield",
		      "heading" => __("Youtube", "js_composer"),
		      "param_name" => "youtube",
		    ),
		  ),
		) );

		vc_map( array(
		  "name" => __("Pricing table", "js_composer"),
		  "base" => "vc_pricing_table",
		  "icon" => "icon-wpb-row",
		  "show_settings_on_create" => true,
		  "category" => __('Content', 'js_composer'),
		  "params" => array(
		  	array(
		      "type" => "textfield",
		      "heading" => __("Plan title", "js_composer"),
		      "param_name" => "plan_title",
		    ),
		    array(
		      "type" => "textfield",
		      "heading" => __("Plan price", "js_composer"),
		      "param_name" => "plan_price",
		    ),
		    array(
		      "type" => "textfield",
		      "heading" => __("Price text", "js_composer"),
		      "param_name" => "price_text",
		    ),
		    array(
		      "type" => "textfield",
		      "heading" => __("Footer text", "js_composer"),
		      "param_name" => "footer_text",
		    ),
		    array(
		      "type" => "textfield",
		      "heading" => __("Row 1", "js_composer"),
		      "param_name" => "row1",
		    ),
		    array(
		      "type" => 'checkbox',
		      "heading" => __("Show row 2", "js_composer"),
		      "param_name" => "row2_enable",
		      "description" => __("Do you want to display 2nd row?", "js_composer"),
		      "value" => Array(__("Yes, please", "js_composer") => 'yes')
		    ),
		    array(
		      "type" => "textfield",
		      "heading" => __("Row 2", "js_composer"),
		      "param_name" => "row2",
		      "dependency" => Array('element' => 'row2_enable', 'value' => array('yes')),
		    ),
		    array(
		      "type" => 'checkbox',
		      "heading" => __("Show row 3", "js_composer"),
		      "param_name" => "row3_enable",
		      "description" => __("Do you want to display 3rd row?", "js_composer"),
		      "value" => Array(__("Yes, please", "js_composer") => 'yes'),
		    ),
		    array(
		      "type" => "textfield",
		      "heading" => __("Row 3", "js_composer"),
		      "param_name" => "row3",
		      "dependency" => Array('element' => 'row3_enable', 'value' => array('yes')),
		    ),
		    array(
		      "type" => 'checkbox',
		      "heading" => __("Show row 4", "js_composer"),
		      "param_name" => "row4_enable",
		      "description" => __("Do you want to display 4th row?", "js_composer"),
		      "value" => Array(__("Yes, please", "js_composer") => 'yes'),
		    ),
		    array(
		      "type" => "textfield",
		      "heading" => __("Row 4", "js_composer"),
		      "param_name" => "row4",
		      "dependency" => Array('element' => 'row4_enable', 'value' => array('yes')),
		    ),
		    array(
		      "type" => 'checkbox',
		      "heading" => __("Show row 5", "js_composer"),
		      "param_name" => "row5_enable",
		      "description" => __("Do you want to display 5th row?", "js_composer"),
		      "value" => Array(__("Yes, please", "js_composer") => 'yes'),
		    ),
		    array(
		      "type" => "textfield",
		      "heading" => __("Row 5", "js_composer"),
		      "param_name" => "row5",
		      "dependency" => Array('element' => 'row5_enable', 'value' => array('yes')),
		    ),
		    array(
		      "type" => 'checkbox',
		      "heading" => __("Show row 6", "js_composer"),
		      "param_name" => "row6_enable",
		      "description" => __("Do you want to display 6th row?", "js_composer"),
		      "value" => Array(__("Yes, please", "js_composer") => 'yes'),
		    ),
		    array(
		      "type" => "textfield",
		      "heading" => __("Row 6", "js_composer"),
		      "param_name" => "row6",
		      "dependency" => Array('element' => 'row6_enable', 'value' => array('yes')),
		    ),
		    array(
		      "type" => 'checkbox',
		      "heading" => __("Show row 7", "js_composer"),
		      "param_name" => "row7_enable",
		      "description" => __("Do you want to display 7th row?", "js_composer"),
		      "value" => Array(__("Yes, please", "js_composer") => 'yes'),
		    ),
		    array(
		      "type" => "textfield",
		      "heading" => __("Row 7", "js_composer"),
		      "param_name" => "row7",
		      "dependency" => Array('element' => 'row7_enable', 'value' => array('yes')),
		    ),
		    array(
		      "type" => 'checkbox',
		      "heading" => __("Show row 8", "js_composer"),
		      "param_name" => "row8_enable",
		      "description" => __("Do you want to display 8th row?", "js_composer"),
		      "value" => Array(__("Yes, please", "js_composer") => 'yes'),
		    ),
		    array(
		      "type" => "textfield",
		      "heading" => __("Row 8", "js_composer"),
		      "param_name" => "row8",
		      "dependency" => Array('element' => 'row8_enable', 'value' => array('yes')),
		    ),
		    array(
		      "type" => 'checkbox',
		      "heading" => __("Show row 9", "js_composer"),
		      "param_name" => "row9_enable",
		      "description" => __("Do you want to display 9th row?", "js_composer"),
		      "value" => Array(__("Yes, please", "js_composer") => 'yes'),
		    ),
		    array(
		      "type" => "textfield",
		      "heading" => __("Row 9", "js_composer"),
		      "param_name" => "row9",
		      "dependency" => Array('element' => 'row9_enable', 'value' => array('yes')),
		    ),
		    array(
		      "type" => 'checkbox',
		      "heading" => __("Show row 10", "js_composer"),
		      "param_name" => "row10_enable",
		      "description" => __("Do you want to display 10th row?", "js_composer"),
		      "value" => Array(__("Yes, please", "js_composer") => 'yes'),
		    ),
		    array(
		      "type" => "textfield",
		      "heading" => __("Row 10", "js_composer"),
		      "param_name" => "row10",
		      "dependency" => Array('element' => 'row10_enable', 'value' => array('yes')),
		    ),
		  ),
		) );
		/*
		vc_map( array(
		  "name" => __("Single Image", "js_composer"),
		  "base" => "vc_single_image",
		  "icon" => "icon-wpb-single-image",
		  "category" => __('Content', 'js_composer'),
		  "params" => array(
		    array(
		      "type" => "textfield",
		      "heading" => __("Widget title", "js_composer"),
		      "param_name" => "title",
		      "description" => __("What text use as a widget title. Leave blank if no title is needed.", "js_composer")
		    ),
		    array(
		      "type" => "attach_image",
		      "heading" => __("Image", "js_composer"),
		      "param_name" => "image",
		      "value" => "",
		      "description" => __("Select image from media library.", "js_composer")
		    ),
		    $add_css_animation,
		    array(
		      "type" => "textfield",
		      "heading" => __("Image size", "js_composer"),
		      "param_name" => "img_size",
		      "description" => __("Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use 'thumbnail' size.", "js_composer")
		    ),
		    array(
		      "type" => 'checkbox',
		      "heading" => __("Link to large image?", "js_composer"),
		      "param_name" => "img_link_large",
		      "description" => __("If selected, image will be linked to the bigger image.", "js_composer"),
		      "value" => Array(__("Yes, please", "js_composer") => 'yes')
		    ),
		    array(
		      "type" => "textfield",
		      "heading" => __("Image link", "js_composer"),
		      "param_name" => "img_link",
		      "description" => __("Enter url if you want this image to have link.", "js_composer"),
		      "dependency" => Array('element' => "img_link_large", 'is_empty' => true, 'callback' => 'wpb_single_image_img_link_dependency_callback')
		    ),
		    array(
		      "type" => "dropdown",
		      "heading" => __("Link Target", "js_composer"),
		      "param_name" => "img_link_target",
		      "value" => $target_arr,
		      "dependency" => Array('element' => "img_link", 'not_empty' => true)
		    ),
		    array(
		      "type" => "textfield",
		      "heading" => __("Extra class name", "js_composer"),
		      "param_name" => "el_class",
		      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
		    )
		  )
		));
		*/
		
		vc_map( array(
		  "name" => __("Back to top button", "js_composer"),
		  "base" => "vc_back_to_top",
		  "icon" => "icon-wpb-row",
		  "show_settings_on_create" => false,
		  "category" => __('Content', 'js_composer'),
		) );

		vc_map( array(
		  "name" => __("Address with icon", "js_composer"),
		  "base" => "vc_address",
		  "icon" => "icon-wpb-row",
		  "show_settings_on_create" => true,
		  "category" => __('Content', 'js_composer'),
		  "params" => array(
		  	array(
		      "type" => "dropdown",
		      "heading" => __("Icon source", "js_composer"),
		      "param_name" => "icon_source",
		      "value" => array(__('Font Awesome', 'reno') => 'fa'),
		    ),
		  	array(
		      "type" => "fa_list",
		      "heading" => __("Icon", "js_composer"),
		      "param_name" => "fa_icon",
		      "dependency" => Array('element' => 'icon_source', 'value' => array('fa')),
		    ),
		    
		    array(
		      "type" => "textarea_html",
		      "holder" => "div",
		      "heading" => __("Text", "js_composer"),
		      "param_name" => "content",
		      "value" => __("<p>I am text block. Click edit button to change this text.</p>", "js_composer")
		    ),
		  )
		) );
		/*
		vc_map( array(
		  "name" => __("Separator with Text", "js_composer"),
		  "base" => "vc_text_separator",
		  "icon" => "icon-wpb-ui-separator-label",
		  "category" => __('Content', 'js_composer'),
		  "params" => array(
		    array(
		      "type" => "textfield",
		      "heading" => __("Title", "js_composer"),
		      "param_name" => "title",
		      "holder" => "div",
		      "value" => __("Title", "js_composer"),
		      "description" => __("Separator title.", "js_composer")
		    ),
		    array(
		      "type" => "textfield",
		      "heading" => __("Extra class name", "js_composer"),
		      "param_name" => "el_class",
		      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
		    )
		  ),
		  "js_view" => 'VcTextSeparatorView'
		) );
		*/
	}

endif;


?>