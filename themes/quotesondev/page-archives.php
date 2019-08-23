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
                'numberposts' => -1,
            );
			$archives_list = get_posts($args); ?>
			<div>Quote Authors: 

            <?php foreach($archives_list as $post) :
				setup_postdata($post); ?>
				
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

			<?php endforeach; ?>
			</div>

			<div>
				<?php wp_list_categories(); ?>
			</div>

			<div>Tags:

			<?php
				$tags = get_tags(array(
					'hide_empty' => false
				));
				var_dump($tags);
				foreach($tags as $tag) : ?>
				<a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a>  
				<?php endforeach; ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>