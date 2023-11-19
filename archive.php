<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Pehtheme_WP
 */

get_header();
?>

	<main id="primary" class="site-main insert-width py-6">

		<div class="insert-grid-2c"><!-- grid 2 cols -->
			
			<div class="md:col-span-2">

				<?php if ( have_posts() ) : ?>

					<header class="page-header mb-8">
						<?php
						the_archive_title( '<h1 class="text-2xl lg:text-2xl font-bold leading-normal">', '</h1>' );
						the_archive_description( '<div class="archive-description">', '</div>' );
						?>
					</header><!-- .page-header -->

					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/*
						 * Include the Post-Type-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_type() );

					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
			</div>
			<div class="md:col-span-1">
				<?php get_sidebar(); ?>
			</div>
		</div><!-- /grid 2 cols -->			

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
