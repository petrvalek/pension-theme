<?php 
/**
 * HERO
 * 
 */
if (has_post_thumbnail() ){
    $hero_thumbnail = get_the_post_thumbnail_url($post_id, 'full');
}

function title() {
    if ( is_archive() ) {
        return the_archive_title();
    }
    if ( is_404() ) {
        return '404 - Stránka nenalezena';
    }

    return the_title();
}

?>

<div class="hero" style="background-image: url('<?php echo $hero_thumbnail; ?>')">
    <div class="hero-inner">
        <div class="container grid-xl">
            <h1 class="hero-title"><?php title(); ?></h1>
            <div class="hero-breadcrumb breadcrumb">
            <?php
                if ( function_exists( 'yoast_breadcrumb' ) ) {
                    yoast_breadcrumb( );
                }
            ?>
            </div>
        </div>
    </div>
</div>
