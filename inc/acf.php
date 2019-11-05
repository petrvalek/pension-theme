<?php 
/**
 * ACF
 * 
 */

function acf_map_key() {
	
	acf_update_setting('google_api_key', 'AIzaSyCReQXheHldmYl3ACT57fnMEg7SriX0uuQ');
}

add_action('acf/init', 'acf_map_key');