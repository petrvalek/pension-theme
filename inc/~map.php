<?php 
/**
 * MAP
 * 
 */

add_action( 'publish_reference', 'post_published_notification', 10, 2 );

function post_published_notification() {
    $fp = fopen('addresses.json', 'w');
    fwrite($fp, 'test');
    fclose($fp);
}