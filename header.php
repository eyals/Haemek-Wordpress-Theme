<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Haemek
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header id="masthead" class="site-header">
	<nav id="site-navigation" class="main-navigation" role="navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		<?php if ( is_user_logged_in() ) {
				$current_user = wp_get_current_user();
				echo get_avatar( $current_user->ID, 24 );
				echo $current_user->display_name;
				echo "<a href='".wp_logout_url(get_permalink())."'>יציאה</a>";
			}else{
				jfb_output_facebook_btn();
			} ?>
	</nav><!-- #site-navigation -->
</header><!-- #masthead -->

<div id="page">

	<div id="content" class="site-content">
