<?php get_header(); ?>

	<main role="main">

	<div class="hero" style="top:-169px;">
    <div class="hero-inner">
        <div class="container grid-xl">
            <h1 class="hero-title">Chyba 404: Stránka nebyla nalezena</h1>
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




			<!-- article -->
			<article id="post-<?php the_ID(); ?>" class="page-content">
				
				<div class="container grid-xl">
					<h2>Odkaz již neexistuje nebo stránka byla přesunuta. <br>Je možnost že stránka zmizela pod lavinou...</h2>
					<br>
					<a href="<?php echo get_home_url();?>" class="btn btn-primary">Zpět na úvodní stránku</a>
				
				</div>	
				
			</article>
			<!-- /article -->

	</main>

<?php get_footer(); ?>