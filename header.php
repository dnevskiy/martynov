<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fl
 */

?><!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' xmlns:fb='http://ogp.me/ns/fb#' xmlns:og='http://ogp.me/ns#' <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="pingback" href="http://faberlic-line.com/xmlrpc.php" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div>
	<header>
		<div>
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1><a href="/">fl</a></h1>
			<?php else : ?>
				<p><a href="/">fl</a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<nav>
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'fl' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div>
