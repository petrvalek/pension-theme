<?php get_header(); ?>

<main role="main">

		<?php get_template_part('components/hero'); ?>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" class="page-content">

			<div class="container grid-xl">


				<?php the_content(); // Dynamic Content ?>
				
			</div>
		</article>
		<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

		<?php endif; ?>

</main>


<?php get_footer(); ?>