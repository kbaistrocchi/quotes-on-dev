<?php
// /**
//  * The main template file.
//  *
//  * @package QOD_Starter_Theme
//  */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php if( have_posts()) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<h2><?php the_title(); ?></h2>
				<?php endwhile;
			endif; ?>


			<?php $args = array(
                'post_type' => 'post',
                'numberposts' => -1,
            );
			$archives_list = get_posts($args); ?>
		
			<h3>Quote Authors</h3>
			<div class="archive-list">
				<?php foreach($archives_list as $post) :
				setup_postdata($post); ?>
				
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

				<?php endforeach; ?>
			</div>
		
			<h3>Categories</h3>
			<div class="archive-list">
				<?php wp_list_categories(array(
					'separator' => ' ',
					'style' => ' ',
					'title_li' => ''
				)); ?>
			</div>
			
			<h3>Tags</h3>
			<div class="archive-list">
				<?php
				$tags = get_tags(array(
					'hide_empty' => false
				));
				// var_dump($tags);
				foreach($tags as $tag) : ?>
					<a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a>  
				<?php endforeach; ?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>