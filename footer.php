<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Francesca
 * @since Francesca 1.0
 */
?>


	</div><!-- #main .wrapper -->


	<div id="footer-widgets">
		<div class="wrap">
			<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
				<div id="footer-widgets-1" class="footer-widgets-area footer-widgets-1" role="complementary">
					<?php dynamic_sidebar( 'footer-1' ); ?>
				</div><!-- #secondary -->
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
				<div id="footer-widgets-2" class="footer-widgets-area footer-widgets-2" role="complementary">
					<?php dynamic_sidebar( 'footer-2' ); ?>
				</div><!-- #secondary -->
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
				<div id="footer-widgets-3" class="footer-widgets-area footer-widgets-3" role="complementary">
					<?php dynamic_sidebar( 'footer-3' ); ?>
				</div><!-- #secondary -->
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
				<div id="footer-widgets-4" class="footer-widgets-area footer-widgets-4" role="complementary">
					<?php dynamic_sidebar( 'footer-4' ); ?>
				</div><!-- #secondary -->
			<?php endif; ?>
		</div>
	</div>	

	<footer id="colophon" role="contentinfo">

	

		<div class="site-info">
			<?php do_action( 'twentytwelve_credits' ); ?>
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentytwelve' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentytwelve' ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentytwelve' ), 'WordPress' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>