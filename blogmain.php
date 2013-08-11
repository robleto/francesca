<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Francesca
 * @since Francesca 1.0
 *
 *
 * Template Name: Blog Main
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			
		<header class="entry-header">
			<?php the_post_thumbnail(); ?>
			<?php if ( is_single() ) : ?>
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php else : ?>
			<h1 class="entry-title">
				<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'twentytwelve' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h1>
			<?php endif; // is_single() ?>
		</header><!-- .entry-header -->

		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<?php endif; ?>
				<div class="home-loop">
					<?php $posts = get_posts( "numberposts=50" ); ?>
			        <?php if( $posts ) : ?>
			        <?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
			          <div class="homepage-excerpt" id="post-<?php the_ID(); ?>">
			        	<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
			  				the_post_thumbnail('category-thumb');
							}
						?>
			          	<h3 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
			            <?php the_excerpt(); ?> 
			          </div>
				    <?php endforeach; ?>
				    <?php endif; ?>
				</div><!-- home loop -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>