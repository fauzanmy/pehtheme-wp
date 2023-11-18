<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Pehtheme_WP
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header mb-8">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="text-2xl lg:text-4xl font-bold leading-normal">', '</h1>' );
		else :
			the_title( '<h2 class="text-2xl lg:text-3xl font-bold leading-normal"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta flex items-center mt-6">

				<div class="mr-2">
					<?php echo get_avatar( get_the_author_meta( 'ID' ), 72 ); ?>
				</div>

				<ul>
					<li><a class="font-semibold capitalize" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" title="<?php echo esc_attr( get_the_author() ); ?>"><?php the_author(); ?></a></li>
					<li><time class="text-sm" datetime="<?php echo get_post_time('c', true); ?>" title="Written and Updated on <?php echo get_post_time('c', true); ?>"><?php the_time('j F Y'); ?></time></li>
				</ul>
				<div class="ml-auto shrink-0">
					<button class="flex items-center border rounded-full p-2 bg-zinc-100 hover:bg-zinc-200 toggle-button leading-none">
						<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
<path d="M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5z"></path>
</svg>
					</button>
				</div>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="my-6">
		<?php pehtheme_wp_post_thumbnail(); ?>
	</div>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'pehtheme-wp' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'pehtheme-wp' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer text-base">
		
		<?php pehtheme_wp_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->