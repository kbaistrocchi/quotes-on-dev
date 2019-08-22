<?php
/**
 * The main template file.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <h1>quotes <span>on</span> dev_</h1>

            <?php
            $args = array(
                'orderby' => 'rand',
                'posts_per_page' => '1'
            );
            $initial_post = new WP_Query( $args );
            // The Loop
            if ( $initial_post->have_posts() ) :
                while ( $initial_post->have_posts() ) :
                    $initial_post->the_post(); ?>
                
                    <div class="the-quote-zone">
                        <h2><?php the_content(); ?></h2>
                    </div>
                    <div class="author-area">
                        <p>-<?php the_title()?></p>

                    </div>
                    <?php  
                            endwhile;
                        
                        else :
                            echo 'No posts found';
                    endif;
                        ?>

		
        <button class="show-more">Click to show more</button>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
