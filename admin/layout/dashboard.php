<?php
/**
 * DASHBOARD WIDGETS
 * 
 */

 // Remove core dashboard widgets
function remove_dashboard_meta() {
		remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_primary', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
		remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
		remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');
		remove_meta_box( 'wpseo-dashboard-overview', 'dashboard', 'side');
		remove_meta_box('redux_dashboard_widget', 'dashboard', 'side');
		remove_meta_box( 'e-dashboard-overview', 'dashboard', 'normal');
}
add_action( 'wp_dashboard_setup', 'remove_dashboard_meta' ); 
add_action( 'admin_init', 'remove_dashboard_meta' ); 

/**
 * Add a widget to the dashboard.
 *
 * This function is hooked into the 'wp_dashboard_setup' action below.
 */
function add_dashboard_widgets() {
	wp_add_dashboard_widget(
		'dashboard_widget_welcome', // Widget slug.
		'My Custom Dashboard Widget', // Title.
		'dashboard_widget_welcome_function' // Display function.
	);
	// wp_add_dashboard_widget(
	// 	'dashboard_widget_support', // Widget slug.
	// 	'Potřebujete s něčím pomoc?', // Title.
	// 	'dashboard_widget_support_function' // Display function.
	// );
	// wp_add_dashboard_widget(
	// 	'dashboard_events', // Widget slug.
	// 	'Nadcházející akce', // Title.
	// 	'dashboard_widget_event_function' // Display function.
	// );
}
add_action( 'wp_dashboard_setup', 'add_dashboard_widgets' );

/**
 * Create the function to output the contents of your Dashboard Widget.
 */
function dashboard_widget_welcome_function() {
	global $current_user; 
	wp_get_current_user(); 

	$admin_firstname = '';
	if (!empty($current_user->user_firstname)) {
		$admin_firstname = osloveni($current_user->user_firstname);
	} 

	echo "<h2>Dobrý den, " . $admin_firstname . '</h2>';
}

function dashboard_widget_support_function() {

	echo "<h2>Dobrý den, " . $admin_firstname . '</h2>';
}



