<?php
function synth_load_required() {

	

	if(!get_option('synth_footer')) {
		$text = '[vc_row][vc_column width="1/1"][vc_empty_space height="60px"][/vc_column][/vc_row][vc_row][vc_column width="1/2"][vc_column_text]
<h6><span style="color: #ffffff;">Recent works</span></h6>
[/vc_column_text][vc_last_portfolio count="6"][vc_empty_space height="50px"][vc_column_text]
<h6><span style="color: #ffffff;">Related information</span></h6>
[/vc_column_text][vc_wp_custommenu nav_menu="7"][/vc_column][vc_column width="1/2"][vc_column_text]
<h6><span style="color: #ffffff;">About</span></h6>
<img src="http://entiri.net/synth-wp/wp-content/themes/synth/img/logo-footer.png" alt="" />

<span style="color: #ffffff;">Quisque malesuada placerat nisl. Nulla neque dolor, sagittis eget, iaculis quis, molestie non, velit. Aenean vulputate eleifend tellus. Vivamus in erat ut urna cursus vestibulum. Vivamus in erat ut urna cursus vestibulum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Praesent nec nisl a purus blandit viverra.</span>

<span style="color: #ffffff;">Mon – Fri : 10 AM to 5 PM | Sat – Sun : 10 AM to 2 PM</span>[/vc_column_text][/vc_column][/vc_row][vc_row el_class="copyright" full_width="false"][vc_column width="1/1"][vc_empty_space height="50px"][vc_row_inner][vc_column_inner width="1/2" el_class="copyright-info"][vc_column_text]<span style="color: #ffffff;">© 2014 THE SYNTH. All Rights Reserved. Created by <a class="entiri" style="color: #ffffff;" href="http://www.entiri.com" target="_blank" rel="external">entiri</a></span>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2"][vc_social_icons style="social-3" android="#" apple="#" dribbble="#" facebook="#" flickr="#" google_plus="#"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]';
		$footer = wp_insert_post(array(
		    'post_title'    => 'Footer page',
		    'post_type' 	=> 'footer',
		    'post_content'  => $text,
		    'post_status'   => 'publish',
		    'post_author'   => 1
		));
		update_option( 'synth_footer', $footer);
	}

}
add_action("after_switch_theme", "synth_load_required", 10 ,  2);
?>