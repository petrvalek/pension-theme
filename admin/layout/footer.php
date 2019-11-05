<?php
/**
 * FOOTER
 */

//$default represents the existing text in the left side
add_filter('admin_footer_text', 'dashboard_footer_text');
function dashboard_footer_text($default) {

    return '© ' . date('Y') . ' Všechna práva vyhrazena.';
}

//$default represents the exisiting text in the right side
add_filter('update_footer', 'dashboard_footer_version', 11);
function dashboard_footer_version($default) {
    
    return 'Vytvořil <a href="https://valekpetr.com" rel="nofollow" target="_blank" title="Přejít na webovou stránku Petr Válek">Petr Válek</a>.';
}