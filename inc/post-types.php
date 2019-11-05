<?php 
/**
 * POST TYPES
 * 
 */

//REGISTER 'Pokoje'
add_action('init', 'register_pokoj_init');
function register_pokoj_init() {

    $labels = array(
        'name'               => 'Ubytování',
        'singular_name'      => 'Pokoje',
        'menu_name'          => 'Pokoje',
        'add_new'            => 'Přidat pokoj',
        'add_new_item'       => 'Přidat pokoj',
        'name_admin_bar'     => 'Přidat pokoj',
        'new_item'           => 'Přidat pokoj'
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'menu_position'      => 2,
        'capability_type'    => 'post',
        'menu_icon'          => 'dashicons-buddicons-buddypress-logo',
        'has_archive'        => 'ubytovani',
        'rewrite'            => array('slug' => 'ubytovani'),
        'supports'           => array( 'title', 'editor', 'thumbnail'),
        'show_in_rest'       => true,
    );

    register_post_type('pokoje', $args);
}


// Add the custom columns to the book post type:
// add_filter( 'manage_Pokoje_posts_columns', 'set_custom_edit_Pokoje_columns' );
// function set_custom_edit_Pokoje_columns($columns) {
//     unset( $columns['date'] );
//     $columns['pokoj_url'] = __( 'Webová stránka', 'your_text_domain' );
//     $columns['pokoj_address'] = __( 'Adresa', 'your_text_domain' );

//     return $columns;
// }

// Add the data to the custom columns for the book post type:
// add_action( 'manage_Pokoje_posts_custom_column' , 'custom_Pokoje_column', 10, 2 );
// function custom_Pokoje_column( $column, $post_id ) {
//     switch ( $column ) {

//         case 'pokoj_url' :

//             // $field = get_field_object('pokoj_url');
//             $value = get_field('pokoj_url');
//             // $label = $field['choices'][ $value ];

//             echo $value;
//             break;

//         case 'pokoj_address' :

//             // $field = get_field_object('pokoj_url');
//             $value = get_field('pokoj_address');
//             // $label = $field['choices'][ $value ];

//             echo $value['address'];
//             break;

//     }
// }

// add_shortcode('pokoj-map', 'pokoj_map_shortcode');   
// function reference_map_shortcode( $attr ) {        
//     ob_start();  

//     get_template_part('components/map');  
    
//     return ob_get_clean();
// }