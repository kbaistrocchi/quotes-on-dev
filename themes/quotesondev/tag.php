<?php
// /**
//  * The main template file.
//  *
//  * @package QOD_Starter_Theme
//  */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		

		<?php
        if( have_posts() ) : 
            while( have_posts() ) :   
            the_post(); ?>         

        <div>
            <h2><?php the_title(); ?></h2>
				<h4><?php the_date('j F Y'); ?></h4>
			
           
        </div>
        
            <?php the_content(); ?>
		
		<?php endwhile; ?>
       
           

        <?php the_posts_navigation(); ?> 

        <?php else : ?>
                <p>No posts found</p>
        <?php endif; ?>
    </section>
				
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>


