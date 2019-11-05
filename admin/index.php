<?php
/**
 * ADMIN DASHBOARD
 * 
 */

define('DISABLE_NAG_NOTICES', true);
add_filter( 'auto_update_plugin', '__return_false' );

function disable_theme_editor() {
    define('DISALLOW_FILE_EDIT', TRUE);
}
add_action('init','disable_theme_editor');

function wpsites_disable_self_pingbacks( &$links ) {
    foreach ( $links as $l => $link )
          if ( 0 === strpos( $link, get_option( 'home' ) ) )
              unset($links[$l]);
  }
  
  add_action( 'pre_ping', 'wpsites_disable_self_pingbacks' );

// INIT STYLE
function admin_style() {
    wp_enqueue_style('admin-styles', get_stylesheet_directory_uri() . '/admin/admin-styles.css');
}

add_action('admin_enqueue_scripts', 'admin_style');

function login_style() { 
    wp_enqueue_style( 'login-form', get_stylesheet_directory_uri() .  '/admin/login-form.css' );
}
add_action( 'login_enqueue_scripts', 'login_style' );


// OSLOVENI
include( __DIR__ . '/inc/osloveni.php');

// DASHBOARD
include( __DIR__ . '/layout/dashboard.php');

// DASHBOARD
include( __DIR__ . '/layout/notices.php');

// MENU
include( __DIR__ . '/layout/menu.php');

// FOOTER
include( __DIR__ . '/layout/footer.php');

// LOGIN
include( __DIR__ . '/layout/login.php');