<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Francesca
 * @since Francesca 1.0
 *
 * 
 * Template Name: Hello
 */
get_header(); ?>


		<div id="row_one" class="homepagerows">

			<div id="row_one_primary" class="home-page clear">

					<!-- Home Page Slider Widget Area -->
					<?php if ( is_active_sidebar( 'frontpage-promo' ) ) : ?>
						<div id="home_page_promo" class="dashboard-widget-area" role="complementary">
							<?php dynamic_sidebar( 'frontpage-promo' ); ?>
						</div><!-- #secondary -->
					<?php endif; ?>


			</div>	<!-- end primary-row-one -->

			<div id="row_one_secondary" class="home-page">

					<!-- Home Page Sidebar All Widget Area -->
					<?php if ( is_active_sidebar( 'frontpage-uppersidebar' ) ) : ?>
						<div id="secondary" class="widget-area sidebar-all" role="complementary">
							<?php dynamic_sidebar( 'frontpage-uppersidebar' ); ?>
						</div><!-- #secondary -->
					<?php endif; ?>

			</div>	<!-- end primary-row-one -->

		</div>	<!-- end row_one -->


	<div id="row_two" class="homepagerows clear">


		<div id="row_two_primary" class="home-page">

				<div class="home-page-content">
						<?php while ( have_posts() ) : the_post(); ?>
							<?php the_content(); ?> 
						<?php endwhile; // end of the loop. ?>
				</div><!-- home-page-content -->

				<!-- automated version, currently unused 
				<?php $posts = get_pages( "child_of=31" ); ?>
			        <?php if( $posts ) : ?>
			        <?php 
				        $count = 0;
			        	foreach( $posts as $post ) : setup_postdata( $post );
			        	$count++; 
			        	if ( $count < 6) {  // only process 5 ?>
				          <div class="communities-promo">
				        	<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				  				the_post_thumbnail('category-thumb');
								}
							?>
				          	<h3 class="communinities-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
				          </div>
				     <?php } //end if 5 ?>     
				    <?php endforeach; ?>
				    <?php endif; ?>-->




		</div>	<!-- end primary-row-two -->

	</div>	<!-- end row_two -->




	<div id="row_three" class="homepagerows clear">


		<div id="row_three_primary" class="home-page">

				<div class="home-loop">
					<?php $posts = get_posts( "numberposts=5" ); ?>
			        <?php if( $posts ) : ?>
					<h3 class="loop-title">“What I'm Talking About" from the Francesca Blog</h3>
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


			</div>	<!-- end primary-row-one -->

			<div id="row_three_secondary" class="home-page clear">

					<!-- Home Page Sidebar All Widget Area -->
					<?php if ( is_active_sidebar( 'frontpage-lowersidebar' ) ) : ?>
						<div id="secondary" class="widget-area sidebar-all" role="complementary">
							<?php dynamic_sidebar( 'frontpage-lowersidebar' ); ?>
						</div><!-- #secondary -->
					<?php endif; ?>

			</div>	<!-- end primary-row-three -->

		</div>	<!-- end row_threee -->




<?php get_footer(); ?>