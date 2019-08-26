<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'template-parts/content' ); ?>

        <?php endwhile; ?>

        <?php the_posts_navigation(); ?>

    <?php else : ?>

        <?php get_template_part( 'template-parts/content', 'none' ); ?>

    <?php endif; ?>

    <!-- Check if user is logged in -->
    <?php if(is_user_logged_in()) : ?>
    
        <!-- Submit Quote Form -->

        <form action="" method="POST" id="quote-submission-form">
            <label for="author">Author of Quote</label>
            <br>
            <input type="text" id="author" name="quote-author">
            <br>
            <label for="the-quote">Quote</label>
            <br>
            <textarea id="the-quote" name="the-quote" cols="50"></textarea>
            <label for="quote-source">Where did you find this quote? (e.g. book name)</label>
            <br>
            <input type="text" id="quote-source" name="quote-source">
            <br>
            <label for="quote-source-url">Provide the URL of the quote source, if available.</label>
            <br>
            <input type="text" id="quote-source-url" name="quote-source-url">
            <br>
            <input type="submit" value="Submit Quote">
        </form>

    <?php else : ?>
        <p>You must be logged in to submit a quote.</p>
    <?php endif; ?>



    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>