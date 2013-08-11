<?php
/**
 * The sidebar containing the main widget area.
 *
 * If no active widgets in sidebar, let's hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<?php if ( is_active_sidebar( 'sidebar-all' ) ) : ?>
		<div id="secondary" class="widget-area sidebar-all" role="complementary">
			<?php dynamic_sidebar( 'sidebar-all' ); ?>
		</div><!-- #secondary -->
	<?php endif; ?>

	<?php if ( is_single() && is_active_sidebar( 'sidebar-posts' ) ) : ?>
		<div id="secondary" class="widget-area sidebar-posts" role="complementary">
			<?php dynamic_sidebar( 'sidebar-posts' ); ?>
		</div><!-- #secondary -->
	<?php endif; ?>

	<?php if ( is_page() && is_active_sidebar( 'sidebar-pages' ) ) : ?>
		<div id="secondary" class="widget-area sidebar-pages" role="complementary">
			<?php dynamic_sidebar( 'sidebar-pages' ); ?>
		</div><!-- #secondary -->
	<?php endif; ?>