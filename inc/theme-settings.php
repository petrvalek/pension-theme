<?php 
/**
 * THEME SETTINGS
 * 
 * @package webstarter
 */
add_filter('wpcf7_autop_or_not', '__return_false');

if ( ! function_exists( 'webstarter_setup' ) ) :

	function webstarter_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 */
		// load_theme_textdomain( 'webstarter', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => __( 'Hlavní Menu', 'webstarter' ),
			'footer-1' => __( 'Patička 1', 'webstarter' ),
			'footer-2' => __( 'Patička 2', 'webstarter' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		/*
		 * Adding Thumbnail basic support
		 */
		add_theme_support( 'post-thumbnails' );

		/*
		 * Adding support for Widget edit icons in customizer
		 */
		add_theme_support( 'customize-selective-refresh-widgets' );

		/*
		 * Enable support for Post Formats.
		 * See http://codex.wordpress.org/Post_Formats
		 */
		add_theme_support( 'post-formats', array(
			'aside',
			'image',
			'video',
			// 'quote',
			'link',
		) );


		// Set up the WordPress Theme logo feature.
		add_theme_support( 'custom-logo' );

		// add_theme_support( 'align-wide' );

		// IMAGE SIZE
		// register_sidebar( array(
		// 	'id'          => 'right-sidebar',
		// 	'name'        => __( 'Postranní panel', 'webstarter' ),
		// 	'description' => __( 'Postranní panel vpravo na hlavní strance.', 'webstarter' ),
		// ) );


		register_sidebar( array(
			'name' => 'Patička - 1 sloupec',
			'id' => 'footer-sidebar-1',
			'description' => 'Objeví se v oblasti zápatí stránek',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );
		register_sidebar( array(
			'name' => 'Patička - 2 sloupec',
			'id' => 'footer-sidebar-2',
			'description' => 'Objeví se v oblasti zápatí stránek',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );
		register_sidebar( array(
			'name' => 'Patička - 3 sloupec',
			'id' => 'footer-sidebar-3',
			'description' => 'Objeví se v oblasti zápatí stránek',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );
		register_sidebar( array(
			'name' => 'Patička - 4 sloupec',
			'id' => 'footer-sidebar-4',
			'description' => 'Objeví se v oblasti zápatí stránek',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );

		// Gutengerg disable styling
		add_theme_support( 'disable-custom-colors' );
		add_theme_support( 'editor-styles' );
		add_editor_style(  'stylesheet.min.css' );

		add_theme_support( 'align-wide' );

		update_option( 'thumbnail_size_w', 400 );
		update_option( 'thumbnail_size_h', 400 );
		update_option( 'thumbnail_crop', 0 );

	}
endif; // webstarter_setup.
add_action( 'after_setup_theme', 'webstarter_setup' );

// Custom logo 
function custom_logo_setup() {
	$defaults = array(
	'height'      => 80,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
	);
}
add_action( 'after_setup_theme', 'custom_logo_setup' );

/* Enqueue styles and scripts */
function script_init() {
	$the_theme = wp_get_theme();
	wp_enqueue_style( 'styles', get_stylesheet_directory_uri() . '/stylesheet.min.css', array(), $the_theme->get( 'Version' ), false );
	
	wp_enqueue_script( 'bundle', get_stylesheet_directory_uri() . '/bundle.min.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'script_init' );

