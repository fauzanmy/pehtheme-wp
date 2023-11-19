<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Pehtheme_WP
 */

get_header();
?>

	<main id="primary" class="insert-width py-6">

		<div class="insert-grid-2c"><!-- grid 2 cols -->
		
		<div class="md:col-span-2">

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

			</div>
			<div class="md:col-span-1">
				<?php get_sidebar(); ?>
			</div>
		</div><!-- /grid 2 cols -->

	</main><!-- #main -->

<?php
get_footer();
