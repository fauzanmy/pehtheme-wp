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
			
			<div class="md:col-span-2">

				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', get_post_type() );

					the_post_navigation(
						array(
							'prev_text' => '<span class="animate-pulse">' . esc_html__( '❮', 'pehtheme-wp' ) . '</span> <span class="line-clamp-1">%title</span>',
							'next_text' => '<span class="line-clamp-1">%title</span>' . '<span class="animate-pulse">' . esc_html__( '❯', 'pehtheme-wp' ) . '</span>',
						)
					);

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

	</main><!-- /main -->

<?php
get_footer();
