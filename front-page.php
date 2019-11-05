<?php get_header(); ?>

<main role="main" class="main">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article>

		<?php the_content(); ?>

	</article>
	<!-- /article -->

	<?php endwhile; ?>

	<?php endif; ?>

</main>

<?php get_footer(); ?>