<?php
/**
 * The template for displaying all single posts.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
	<i class="fas fa-quote-left"></i>
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
                
			<div class="the-quote-zone">
				<h3 class="quote-text"><?php the_content(); ?></h3>
			</div>
			<div class="author-area">
				
				<?php $customField = get_post_custom(); ?>
				
				<p class="mobile-author">-<?php the_title()?></p>

				<!-- Check if post has source and source url -->
				<?php if(isset($customField['_qod_quote_source']) && isset($customField['_qod_quote_source_url'])) : ?>
				<p>, <a href="<?php echo $customField['_qod_quote_source_url'][0]; ?>"><?php echo  $customField['_qod_quote_source'][0]; ?></a></p>

				<?php elseif(isset($customField['_qod_quote_source'])) : ?>
				<p><?php echo ', ' . $customField['_qod_quote_source'][0]; ?></p>
				<?php endif; ?>
				
			</div>
			<?php  
					endwhile; ?>

		</main><!-- #main -->
		<i class="fas fa-quote-right"></i>
	</div><!-- #primary -->

<?php get_footer(); ?>

