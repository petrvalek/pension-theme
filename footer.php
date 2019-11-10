<?php 

    get_template_part( 'components/newsletter-form' );

$logo_link   = '';
$currentUrl = $_SERVER['SERVER_NAME']; 

switch ($currentUrl) {
    case 'boudaukostela.cz':
        $logo_link = 'u_kostela-logo.png';
        break;
    case 'upaniberty.cz':
        $logo_link = 'u_pani_berty-logo.png';
        break;
    case 'lysecinskabouda.eu':
        $logo_link = 'lysecinska-logo.png';
        break;
    case 'penziontemnydul.cz':
        $logo_link = 'union-logo.png';
        break;
}?>

<footer class="footer" role="contentinfo">
    <div class="footer-inner container grid-xl">
        <div class="columns">
            <div class="column col-auto col-sm-12">
                
                <a href="<?php echo get_bloginfo( 'wpurl' ); ?>" title="<?php echo get_bloginfo( 'name' ); ?>">
                    <?php               
                        if ( has_custom_logo() ) {
                            echo '<img class="footer-logo no-lazyloaded" src="' . get_stylesheet_directory_uri() . '/assets/images/' . $logo_link . '" alt="' . get_bloginfo( 'name' ) . '">';
                        } else {
                            echo '<h2 class="footer__site-title">'. get_bloginfo( 'name' ) .'</h2>';
                        }

                        // if(is_active_sidebar('footer-sidebar-1')){
                        //     dynamic_sidebar('footer-sidebar-1');
                        // }
                    ?>
                </a>

            </div>
            <div class="column col-2 col-md-3 col-sm-12">
            <?php
                if(is_active_sidebar('footer-sidebar-1')){
                    dynamic_sidebar('footer-sidebar-1');
                }
            ?></div>
            <div class="column col col-xs-6 col-md-3 col-sm-12">
            <?php
                if(is_active_sidebar('footer-sidebar-2')){
                    dynamic_sidebar('footer-sidebar-2');
                }
            ?></div>
            <div class="column col col-xs-6 col-md-3 col-sm-12">
            <?php
                if(is_active_sidebar('footer-sidebar-3')){
                    dynamic_sidebar('footer-sidebar-3');
                }
            ?></div>
            <div class="column col-auto col-sm-12">
            <?php
                if(is_active_sidebar('footer-sidebar-4')){
                    dynamic_sidebar('footer-sidebar-4');
                }
            ?></div>
            <div class="column col col-md-6 col-sm-12 back-to-top">
                <!-- <div class="back-to-top"> -->
                    <a href="#" class="js-back-to-top btn-back-to-top">
                        Zpět nahoru
                    </a>
                <!-- </div> -->
            </div>
        </div>
        <div class="footer-copyright">
            <div class="columns">
                <div class="column col-auto col-sm-12">
                    <ul class="footer-pensions-list">
                        <li><a href="http://horskarecepce.cz/" rel="follow" target="_blank" title="Otevřít Horskou recepci">Horská recepce</a></li>
                    
                    <?php $currentUrl = $_SERVER['SERVER_NAME']; ?>
                    
                    <?php if ($currentUrl != 'upaniberty.cz') : ?>
                        <li><a href="http://upaniberty.cz" rel="follow" target="_blank" title="Otevřít penzion: U paní Berty">Penzion U paní Berty</a></li>
                    <?php endif; ?>
                    <?php if ($currentUrl != 'penziontemnydul.cz') : ?>
                        <li><a href="http://penziontemnydul.cz" rel="follow" target="_blank" title="Otevřít penzion: Penzion Temný Důl">Penzion Temný Důl</a></li>
                    <?php endif; ?>
                    <?php if ($currentUrl != 'boudaukostela.cz') : ?>
                        <li><a href="http://boudaukostela.cz" rel="follow" target="_blank" title="Otevřít penzion: Bouda U Kostela ">Penzion Bouda U Kostela</a></li>
                    <?php endif; ?>
                    <?php if ($currentUrl != 'lysecinskabouda.eu') : ?>
                        <li><a href="http://lysecinskabouda.eu" rel="follow" target="_blank" title="Otevřít penzion: Lysečinská bouda">Penzion Lysečinská bouda</a></li>
                    <?php endif; ?>
                    </ul>
                </div>
                <div class="footer-copy-content column col col-sm-12">
                    <p>© <?php echo date('Y'); ?> Všechna práva vyhrazena | <?php echo get_bloginfo('name'); ?></p>
                    <p>Vytvořil <a href="https://valekpetr.com" title="Přejít na stránku Válek Petr" rel="nofollow" target="_blank">Petr Válek</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php 

    // COOKIE BOX
    include( __DIR__ . '/components/cookie-box.php');
    
    // MobileDevice Navigate
    if ( wp_is_mobile() ) {

        include( __DIR__ . '/components/mobile-navigate.php');
    
    }

?>

<?php wp_footer(); ?>

</body>