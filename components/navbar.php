<?php 
/**
 * Navbar
 * 
 */
?>

<header class="header" role="banner">
    <div class="header__container">
        <div class="header__inner">
            
            <div class="header__site-info">
                <a class="site-info__logo" href="<?php echo get_bloginfo( 'wpurl' ); ?>">
                    <?php 
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                                
                        if ( has_custom_logo() ) {
                            echo '<img class="no-lazyloaded" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                        } else {
                            // echo '<h1 class="site-title">'. get_bloginfo( 'name' ) .'</h1>';
                            echo '<h1 class="site-title">U paní Berty</h1><p class="subtitle">Pension <span></span> Restaurant</p>';
                        }
                    ?>
                </a>
            </div>

            <div class="header__navbar">
                <input class="toggle" id="toggle" type="checkbox" />
                <label class="toggle-label" for="toggle">
                    <span class="toggle-icon"></span>
                    <span class="toggle-text"></span>
                </label>
                        
                <div class="navbar-inner">

                    <nav class="navbar" role="navigation" aria-label="<?php _e( 'Hlavní navigace', 'webstarter' ); ?>">
                            
                            <?php wp_nav_menu( array(
                                'theme_location'    => 'primary',
                                'container'         => false,
                                'container_class'   => 'navbar-wrapper',
                                'menu_class'        => 'site-navigation',
                                'menu_id'           => 'site-navigation',
                                'items_wrap'        => '<ul id="%1$s" class="%2$s" role="menubar">%3$s</ul>',
                                'fallback_cb'       => false,
                                'walker'            => new Aria_Walker_Nav_Menu()
                                ) ); ?>

                            <?php if ( wp_is_mobile() ) : ?>
                            <ul class="header__lang-switcher navbar-lang">
                                <?php echo do_shortcode('[gtranslate]'); ?>
                            </ul>
                            <?php endif; ?>
                    </nav>
                    

                </div>
                
            </div>
                    <ul class="header__lang-switcher">
                        <?php echo do_shortcode('[gtranslate]'); ?>
                    </ul>
    
                    <div class="header__cta">
                        <a href="<?php echo get_page_link( 89 ); ?>" title="Rezervovat pokoje" class="header__cta-btn">REZERVACE</a>
                    </div>
        </div>
    </div>

</header>