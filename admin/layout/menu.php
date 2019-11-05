<?php
/**
 * ADMIN MENU
 * 
 */

 
add_action( 'admin_menu', 'remove_menu_items' );
function remove_menu_items() {
    if ( !current_user_can('administrator') ) {
        remove_menu_page( 'themes.php' );          // Appearance
        remove_menu_page( 'plugins.php' );         // Plugins
        remove_menu_page( 'users.php' );           // Users
        remove_menu_page( 'tools.php' );           // Tools
        remove_menu_page( 'options-general.php' ); // Settings
        remove_menu_page( 'edit-comments.php' );   // Comments
        remove_menu_page( 'edit.php?post_type=acf' ); // ACF
        remove_menu_page( 'wpcf7' ); // Contact form 7
    }
}

add_action( 'admin_menu', 'dashboard_home');
add_action( 'admin_menu' , 'dashboard_home_link' );

function dashboard_home() {
    add_menu_page( 'dashboard_home_url', 'Přejít na web', 'manage_options', 'dashboard_home_url', 'dashboard_home_url_link', 'dashicons-admin-home', 1 );    
}

function dashboard_home_link() {
    global $submenu;
    $submenu['dashboard_home_url'][500] = array( 'Přejít na web', 'manage_options' , get_bloginfo('url') );
}

