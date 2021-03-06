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
            <!-- <h1>quotes <span>on</span> dev_</h1> -->

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
                    <div class="placeholder">
                        <div class="toggle-display">
                            <div class="the-quote-zone">
                                <h3 class="quote-text"><?php the_content(); ?></h3>
                            </div>
                            <div class="author-area">
                                
                                <?php $customField = get_post_custom(); ?>
                                
                                <p>&mdash; <?php the_title()?></p>

                                <!-- Check if post has source and source url -->
                                <?php if(isset($customField['_qod_quote_source']) && isset($customField['_qod_quote_source_url'])) : ?>
                                <p class="quote-source">, <a href="<?php echo $customField['_qod_quote_source_url'][0]; ?>"><?php echo  $customField['_qod_quote_source'][0]; ?></a></p>

                                <?php elseif(isset($customField['_qod_quote_source'])) : ?>
                                <p class="quote-source"><?php echo ', ' . $customField['_qod_quote_source'][0]; ?></p>
                                <?php endif; ?>
                                
                            </div>
                        </div>
                    </div>
                    <?php  
                            endwhile;
                        
                        else :
                            echo 'No posts found';
                    endif; ?>

		<div class="show-more-btn-wrapper">
            <button class="show-more">Show me another!</button>
        </div>
        

        </main><!-- #main -->
        <i class="fas fa-quote-right"></i>
	</div><!-- #primary -->

<?php get_footer(); ?>
