<?php
/**
 * The main template file.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<h2>Tag: <?php single_tag_title(); ?></h2>

	
			<?php
			if( have_posts() ) : 
				while( have_posts() ) :   
				the_post(); ?>         

				<div class="archive-page">
					<h3 class="quote-text"><?php the_content(); ?></h3>
					<?php $customField = get_post_custom(); ?>
					<p class="mobile-author">-<?php the_title()?></p>
					<!-- Check if post has source and source url -->
					<?php if(isset($customField['_qod_quote_source']) && isset($customField['_qod_quote_source_url'])) : ?>
						<p>, <a href="<?php echo $customField['_qod_quote_source_url'][0]; ?>"><?php echo  $customField['_qod_quote_source'][0]; ?></a></p>

					<?php elseif(isset($customField['_qod_quote_source'])) : ?>
						<p><?php echo ', ' . $customField['_qod_quote_source'][0]; ?></p>
					<?php endif; ?>
				
				</div>
			
				<?php endwhile; ?>
		
			

			<?php the_posts_navigation(); ?> 

			<?php else : ?>
					<p>No posts found</p>
			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
