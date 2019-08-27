<?php
/**
 * The template for displaying the footer.
 *
 * @package QOD_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<nav>
					<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html( 'Primary Menu' ); ?></button> -->
					<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'Footer Menu' ) ); ?>
				</nav><!-- #site-navigation -->
				<div class="site-info">
					<p>Brought to you by <a href="<?php echo esc_url( 'https://redacademy.com/toronto/' ); ?>">Red Academy</a></p>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
