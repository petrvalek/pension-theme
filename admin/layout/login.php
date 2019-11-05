<?php
/**
 * LOGIN
 */

// GET CLIENT LOGO
function login_style_logo() { 
    
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    
    if ( has_custom_logo() ) {
    ?>
    <style>
        .login h1 a {
            /* background-image: url('<?php echo esc_url( $logo[0] )?>') !important; */
            background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/u_pani_berty_logo-black.png') !important;
            background-size: contain !important;
        }
    </style>
    <?php
    } else {

    }
}
add_action( 'login_enqueue_scripts', 'login_style_logo' );