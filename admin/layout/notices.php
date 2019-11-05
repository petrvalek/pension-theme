<?php
/**
 * ADMIN NOTICES
 */

add_action('admin_enqueue_scripts', 'remove_admin_notices');
add_action('login_enqueue_scripts', 'remove_admin_notices');
function remove_admin_notices() {
	if (!current_user_can( 'administrator' )) {
		echo '<style>.update-nag, .updated, .error, .is-dismissible { display: none; }</style>';
	}
}