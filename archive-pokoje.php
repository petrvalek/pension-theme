<?php get_header(); ?>

<?php get_template_part('components/hero'); ?>

<main role="main" class="entry-content">


<div class="articles">

<div class="container grid-xl">

	<div class="columns">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<div class="column col-4 col-md-6 col-sm-12">
			<?php get_template_part( 'components/Room/room-single' ); ?>
		</div>
		<!-- /article -->


		<?php endwhile; endif; ?>
	</div>


</div>
</div>

</main>

<?php get_footer(); ?>