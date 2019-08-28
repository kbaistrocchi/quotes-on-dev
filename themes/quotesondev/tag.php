<?php
/**
 * The main template file.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
	<i class="fas fa-quote-left"></i>
		<main id="main" class="site-main" role="main">

			<h2>Tag: <?php single_tag_title(); ?></h2>
			<hr>

			<?php
			if( have_posts() ) : 
				while( have_posts() ) :   
				the_post(); ?> 
				
				
				<div class="archive-block">
					<h3 class="quote-text"><?php the_content(); ?></h3>
					<?php $customField = get_post_custom(); ?>
					<h3 class="archive-author">&mdash; <?php the_title()?></h3>
					<!-- Check if post has source and source url -->
					<?php if(isset($customField['_qod_quote_source']) && isset($customField['_qod_quote_source_url'])) : ?>
						<p class="quote-source">, <a href="<?php echo $customField['_qod_quote_source_url'][0]; ?>"><?php echo  $customField['_qod_quote_source'][0]; ?></a></p>

					<?php elseif(isset($customField['_qod_quote_source'])) : ?>
						<p class="quote-source"><?php echo ', ' . $customField['_qod_quote_source'][0]; ?></p>
					<?php endif; ?>
				
				</div>
				<hr>
			
				<?php endwhile; ?>
		

				<?php qod_numbered_pagination(); ?>

			<?php else : ?>
					<p>No posts found</p>
			<?php endif; ?>

		</main><!-- #main -->
		<i class="fas fa-quote-right"></i>
	</div><!-- #primary -->

<?php get_footer(); ?>

