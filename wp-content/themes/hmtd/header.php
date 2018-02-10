<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hmtd
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title>House Minimal Techno Disco</title>
    <meta name="description" content="A few hot tracks every week selected by James Winfield.">
    <meta property="og:title" content="House Minimal Techno Disco">
    <meta property="og:image" content="http://www.houseminimaltechnodisco.com/wp-content/themes/hmtd/images/hmtdwide.JPG">
    <meta property="og:description" content="A few hot tracks every week selected by James Winfield.">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="/wp-content/themes/hmtd/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/wp-content/themes/hmtd/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/wp-content/themes/hmtd/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/wp-content/themes/hmtd/favicons/manifest.json">
    <meta name="theme-color" content="#ffffff">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/hmtd.js"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php include_once("includes/analyticstracking.php") ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'hmtd' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->
		

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'hmtd' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
			
		</nav><!-- #site-navigation -->
		<section id="search-2" class="widget widget_search"><form role="search" method="get" class="search-form" action="http://localhost/houseminimaltechnodisco/">
				<label>
					<span class="screen-reader-text">Search for:</span>
					<input type="search" class="search-field" placeholder="Search &hellip;" value="" name="s" />
				</label>
				<input type="submit" class="search-submit" value="Search" />
			</form></section>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
