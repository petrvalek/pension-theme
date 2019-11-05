<?php 
/**
 * EDITOR
 * 
 */

 /**
 * Gutenberg scripts and styles
 * @see https://www.billerickson.net/wordpress-color-palette-button-styling-gutenberg
 */
function be_editor_scripts() {
	wp_enqueue_script( 'be-editor', get_stylesheet_directory_uri() . '/inc/editor/editor.js', array( 'wp-blocks', 'wp-dom' ), filemtime( get_stylesheet_directory() . '/inc/editor/editor.js' ), true );
}
add_action( 'enqueue_block_editor_assets', 'be_editor_scripts' );

/**
 * Registers an editor stylesheet for the theme.
 */
function editor_style() {
    wp_enqueue_style('editor', get_stylesheet_directory_uri() . '/inc/editor/editor.min.css');
}
add_action( 'admin_init', 'editor_style' );