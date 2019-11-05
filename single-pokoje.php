<?php get_header(); ?>

<main role="main">

		<?php get_template_part('components/hero'); ?>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" class="page-content">

			<div class="container grid-lg">

				<div class="columns">

					<div class="column col-12">
						<?php the_content(); // Dynamic Content ?>
					</div>

				</div>

			</div>

			<div class="rooms-other">

				<div class="container grid-xl">

					<h2 class="rooms-other-title">Další pokoje</h2>

					<?php $recent_rooms = new WP_Query( array( 
						'post_type'			=> 'pokoje',
						'orderby'			=> 'rand',
						'posts_per_page'	=> '3',
						'post__not_in' 		=> array( $post->ID )
					)); ?>

					<ul class="rooms-list columns">
						<?php while ( $recent_rooms->have_posts() ) : $recent_rooms->the_post(); ?>
							<li class="rooms-list-item column col-4 col-sm-12"><?php get_template_part( 'components/Room/room-single' ); ?></li>
						<?php 
							endwhile; 
							wp_reset_postdata();
						?>
					</ul>

				</div>

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