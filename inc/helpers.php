<?php
/**
 * HELPERS
 */

function cesky_mesic($mesic) {
    static $nazvy = array(1 => 'leden', 'únor', 'březen', 'duben', 'květen', 'červen', 'červenec', 'srpen', 'září', 'říjen', 'listopad', 'prosinec');
    return $nazvy[$mesic];
}

function my_theme_archive_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_author() ) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif ( is_post_type_archive() ) {
        $title = post_type_archive_title( '', false );
    } elseif ( is_tax() ) {
        $title = single_term_title( '', false );
    }
  
    return $title;
}
 
add_filter( 'get_the_archive_title', 'my_theme_archive_title' );

function getstylesheetdirectory_lazyblock_handlebars_helper ( $handlebars ) {
    // date_i18n.
    // {{my_test_helper 'test value'}}.
    $handlebars->registerHelper( 'stylesheet_dir', function( $val ) {
        return get_stylesheet_directory_uri();
    } );
}
add_action( 'lzb_handlebars_object', 'getstylesheetdirectory_lazyblock_handlebars_helper' );