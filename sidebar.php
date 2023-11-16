<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pehtheme_WP
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="mb-6 lg:sticky lg:top-6">

	<?php dynamic_sidebar( 'sidebar-1' ); ?>

</aside><!-- #secondary -->
