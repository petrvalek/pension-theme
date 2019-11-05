<?php get_header(); ?>

<?php get_template_part('components/hero'); ?>

<main role="main" class="entry-content">


<div class="articles">

<div class="container grid-xl">

	<div class="columns">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" class="article-item column col-6 col-sm-12">
			<a class="article-item__inner" href="<?php the_permalink();?>"
				title="Přejít na <?php get_the_title();?>">
				<?php the_post_thumbnail('medium', ['class' => 'img-responsive', 'alt' => esc_html ( get_the_title() ) ]);
; ?>
				<h3 class="article-item-title"><?php the_title(); ?></h3>
			</a>
		</article>
		<!-- /article -->


		<?php endwhile; endif; ?>
	</div>


</div>
</div>

</main>

<?php get_footer(); ?>