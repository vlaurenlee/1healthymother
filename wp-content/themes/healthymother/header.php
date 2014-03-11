<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package healthymother
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- LOCAL FONT EMBEDS -->
<link href="webfonts/ss-standard.css" rel="stylesheet" />
<link href="webfonts/ss-social-circle.css" rel="stylesheet" />

<!--GOOGLE FONT EMBEDS -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600|Varela+Round|Merriweather:400,300,300italic,400italic,700|Pontano+Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Alice' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<nav id="site-navigation" class="main-navigation" role="navigation">
		<h1 class="menu-toggle"><?php _e( 'Menu', 'healthymother' ); ?></h1>
		<div class="nav-wrap">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</div>
		<div class="search-wrap">
			<?php get_search_form(); ?>
		</div>
	</nav><!-- #site-navigation -->

	<div id="nav-spacer"></div>
	<header id="masthead" class="site-header" role="banner">
		<div class="site-navirat">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
