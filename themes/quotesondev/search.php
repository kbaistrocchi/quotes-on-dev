<?php
/**
 * The template for displaying search results pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<section id="primary" class="content-area">
	<i class="fas fa-quote-left"></i>
		<main id="main" class="site-main" role="main">

			<h2>Search Results for: <?php echo get_search_query(); ?></h2>
			<hr>
		

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'search' ); ?>

				<?php endwhile; ?>

			<?php qod_numbered_pagination(); ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>

		</main><!-- #main -->
		<i class="fas fa-quote-right"></i>
	</section><!-- #primary -->

<?php get_footer(); ?>
