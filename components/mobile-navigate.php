<?php
/** 
 * Mobile navigate
 * 
 */

$map_link   = '';
$currentUrl = $_SERVER['SERVER_NAME']; 

switch ($currentUrl) {
    case 'boudaukostela.cz':
        $map_link = 'https://goo.gl/maps/fFhEh2Evr2Gbvk6x7';
        break;
    case 'upaniberty.cz':
        $map_link = 'https://goo.gl/maps/TYZrHMRQCmymcJki6';
        break;
    case 'lysecinskabouda.eu':
        $map_link = 'https://goo.gl/maps/yngbaC4aBqX6ex4C8';
        break;
    case 'penziontemnydul.cz':
        $map_link = 'https://goo.gl/maps/DEHTdLDPwhmZnR7S8';
        break;
}?>

<div class="mobile-navigate js-mobile-navigate">
    <p class="mobile-navigate-title">Jste na cestě k nám?</p>
    <a href="<?php echo $map_link; ?>" class="btn btn-primary btn-navigate js-map" rel="nofollow" target="_blank">Navigovat do penzionu</a>
</div>