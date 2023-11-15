<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pehtheme_WP
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'pehtheme-wp' ); ?></a>

		<header id="masthead" class="py-4 shadow">

			<div id="mastwrap" class="insert-width flex flex-col"> <!-- mastwrap -->

				<div id="site-branding" class="flex items-center"><!-- site-branding -->

					<div class="flex items-center"><!-- left burger-logo -->

						<button class="flex items-center space-x-2 rounded-full border py-1 pr-[5px] pl-3 group bg-zinc-100 hover:bg-zinc-200 toggle-button" data-target="menu-bar">
							<svg width="22" height="22" fill="currentColor" viewBox="0 0 16 16">
								<path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"></path>
							</svg>
							<span class="bg-blue-500 fill-white rounded-full p-1.5">
								<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="group-hover:animate-spin bi bi-egg-fried fill-white" viewBox="0 0 16 16">
									<path d="M8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
									<path d="M13.997 5.17a5 5 0 0 0-8.101-4.09A5 5 0 0 0 1.28 9.342a5 5 0 0 0 8.336 5.109 3.5 3.5 0 0 0 5.201-4.065 3.001 3.001 0 0 0-.822-5.216zm-1-.034a1 1 0 0 0 .668.977 2.001 2.001 0 0 1 .547 3.478 1 1 0 0 0-.341 1.113 2.5 2.5 0 0 1-3.715 2.905 1 1 0 0 0-1.262.152 4 4 0 0 1-6.67-4.087 1 1 0 0 0-.2-1 4 4 0 0 1 3.693-6.61 1 1 0 0 0 .8-.2 4 4 0 0 1 6.48 3.273z"></path>
								</svg>
							</span>
						</button><!-- /btn-burger -->

						<div class="relative rounded-full py-1.5 px-6 bg-zinc-100 hover:bg-zinc-200 text-xl font-bold uppercase mx-2">
							<?php the_custom_logo(); if ( is_front_page() && is_home() ) : ?>
								<h1 class="text-2xl"><a class="insert-abs-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
								<?php else : ?>
								<p class="text-2xl"><a class="insert-abs-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
							<?php endif; ?>
						</div>

					</div><!-- /left burger-logo -->
					<div class="flex items-center ml-auto">
						<button class="flex items-center rounded-full p-3 bg-zinc-100 hover:bg-zinc-200 toggle-button" data-target="search-bar">
							<svg width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
								<path id="path1" class="transition-all ease-linear" d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
								<path id="path2" class="transition-all ease-linear hidden" d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"></path>
							</svg>
						</button>
					</div><!-- right search-icon -->
				</div><!-- /site-branding -->

				<nav id="site-navigation" class="block mt-3">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'pehtheme-wp' ); ?></button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
				</nav><!-- /site-navigation -->

				<div id="search-bar" class="block mt-3 open">

					<form id="search" class="flex items-stretch">
						<input class="w-full block px-6 py-2 rounded-l-full focus:outline-none border border-zinc-200" type="text" placeholder="Search...">
						<button class="flex items-center px-7 py-2.5 rounded-r-full border border-zinc-200 ">
							<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="group-hover:animate-pulse" viewBox="0 0 16 16">
								<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
							</svg>
						</button>
					</form>
				</div><!-- /search-bar -->
			</div> <!-- /mastwrap -->
		</header><!-- /masthead -->
