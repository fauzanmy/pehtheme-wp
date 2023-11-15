<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Pehtheme_WP
 */

get_header();
?>

	<main id="primary" class="insert-width py-6">

		<div class="insert-grid-2c"><!-- grid 2 cols -->
			
			<div class="md:col-span-2 border">

				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', get_post_type() );

					the_post_navigation(
						array(
							'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'pehtheme-wp' ) . '</span> <span class="nav-title">%title</span>',
							'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'pehtheme-wp' ) . '</span> <span class="nav-title">%title</span>',
						)
					);

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
			</div>
			<div class="md:col-span-1 border">
				<?php get_sidebar(); ?>
			</div>
		</div><!-- /grid 2 cols -->

	</main><!-- /main -->

<?php
get_footer();
