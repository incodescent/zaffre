<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zaffre
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'zaffre' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			 <?php if ( get_theme_mod( 'zaffre_logo' ) ) : ?>
			    <div class='site-logo'>
			        <a href='<?php echo esc_url( home_url( '/' ) ); ?>' 
			          title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' 
			          rel='home'><img src='<?php echo esc_url( get_theme_mod( 'zaffre_logo' ) ); ?>' 
			          alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
    			</div>
			<?php endif; ?>

			<?php
			if ( is_front_page() && is_home() ) : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif; ?>

		<div class="social-header"><?php get_template_part( 'menu', 'social' ); ?></div>

		</div><!-- .site-branding -->

		
<div class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'zaffre' ); ?></div>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->


