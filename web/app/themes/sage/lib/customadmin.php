<?php
/*
 * Modify defaults in Admin
 * Nicholaspsmith
 * April 8, 2015
 *
 */
function replace_howdy( $wp_admin_bar ) {
    $my_account=$wp_admin_bar->get_node('my-account');
    $newtitle = str_replace( 'Howdy,', 'Welcome,', $my_account->title );
    $wp_admin_bar->add_node( array(
        'id' => 'my-account',
        'title' => $newtitle,
    ) );
}
add_filter( 'admin_bar_menu', 'replace_howdy', 25 );
// Remove Wordpress logo from Admin bar
function wp_admin_logo_remove() {
  global $wp_admin_bar;
  $wp_admin_bar->remove_menu('wp-logo');
}
add_action('wp_before_admin_bar_render', 'wp_admin_logo_remove', 0);
// Change Wordpress thank you message
if (!function_exists('dashboard_footer') ){
  function dashboard_footer () {
    echo '<i>Thank you for working with <a href="http://nickoncomputer.com/" target="_blank">Nick</a></i>';
  }
}
add_filter('admin_footer_text', 'dashboard_footer');
// Change wp-login and wp-admin logo
function my_login_logo() { ?>
    <style type="text/css">
      body.login div#login h1 {
        /* background: #562C82; */
        /* box-shadow: 1px 1px 9px rgba(30, 0, 57, 1); */
        padding-top: 10px;
        width: 240px;
        margin: 0 auto;
      }
      body.login div#login h1 a {
        /* replace below with actual logo then uncomment line 63 */
        /*background-image: url(/app/uploads/2014/10/logo-white.png);*/
        width: 205px;
        background-size: contain;
        height: 67px;
      }
      .wp-core-ui .button-primary {
        background: #00A7BD;
        border: none;
        box-shadow: none;
        -webkit-transition: all .2s ease-in-out;
        -ms-transition: all .2s ease-in-out;
        transition: all .2s ease-in-out;
      }
      .wp-core-ui .button-primary:active,
      .wp-core-ui .button-primary:focus,
      .wp-core-ui .button-primary:hover {
        box-shadow: none;
        background: #004ABD;
      }
    </style>
<?php }
// add_action( 'login_enqueue_scripts', 'my_login_logo' );
function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );