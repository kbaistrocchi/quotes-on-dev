<?php get_header(); ?>

<div id="primary" class="content-area">
<i class="fas fa-quote-left"></i>
    <main id="main" class="site-main" role="main">

    <?php if( have_posts()) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<h2><?php the_title(); ?></h2>
				<?php endwhile;
			endif; ?>

    <!-- Check if user is logged in -->
    <?php if(is_user_logged_in()) : ?>
    
        <!-- Submit Quote Form -->

        <form action="" method="POST" id="quote-submission-form">
            <label for="author">Author of Quote</label>
            <br>
            <input type="text" id="author" name="quote-author" required>
            <br>
            <label for="the-quote">Quote</label>
            <br>
            <textarea id="the-quote" name="the-quote" required></textarea>
            <label for="quote-source">Where did you find this quote? (e.g. book name)</label>
            <br>
            <input type="text" id="quote-source" name="quote-source">
            <br>
            <label for="quote-source-url">Provide the URL of the quote source, if available.</label>
            <br>
            <input type="text" id="quote-source-url" name="quote-source-url">
            <br>
            <input type="submit" class="submit-quote-btn" value="Submit Quote">
        </form>

    <?php else : ?>
        <p>Sorry, you must be logged in to submit a quote.</p>
        <a href="<?php echo wp_login_url(get_permalink());?>">Click here to log in.</a>
    <?php endif; ?>



    </main><!-- #main -->
    <i class="fas fa-quote-right"></i>
</div><!-- #primary -->

<?php get_footer(); ?>