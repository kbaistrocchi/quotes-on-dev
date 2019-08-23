<?php
// /**
//  * The main template file.
//  *
//  * @package QOD_Starter_Theme
//  */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		

			<?php $args = array(
				'post_type' => 'post',
				'posts_per_page' => -1
			);?>

			<?php $archives_list = new WP_Query( $args );
			if ( $archives_list->have_posts() ) : ?>
				<div>Quote Authors: 
				<?php while ( $archives_list->have_posts() ) : 
				$archives_list->the_post(); ?>
				
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

				</div>
					
				<?php endwhile; ?>
			
			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<!-- <?php the_posts_navigation(); ?> -->
			<?php endif; ?>
				
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
