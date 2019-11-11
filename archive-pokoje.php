<?php get_header(); ?>

<?php get_template_part('components/hero'); ?>

<main role="main" class="entry-content">


<div class="articles">

<div class="container grid-xl">

	<div class="columns">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<?php 
			$currentUrl = $_SERVER['SERVER_NAME']; 
			
			if ($currentUrl == 'boudaukostela.cz') : ?>
				<!-- article -->
				<div class="column col-6 col-md-6 col-sm-12">
					<?php get_template_part( 'components/Room/room-single' ); ?>
				</div>
				<!-- /article -->
	
	
		<?php else : ?>
			
		<!-- article -->
		<div class="column col-4 col-md-6 col-sm-12">
			<?php get_template_part( 'components/Room/room-single' ); ?>
		</div>
		<!-- /article -->

				<?php endif; ?>

		<?php endwhile; endif; ?>
	</div>


</div>
</div>

</main>

<?php get_footer(); ?>