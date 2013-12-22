<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php wp_title( '~', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="clearfix">
	<div id="secondary">
		<header id="masthead" class="site-header" role="banner">
			<hgroup>
				<?php flat_logo(); ?>
			</hgroup>

			<nav id="site-navigation" class="navigation main-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'container' => false ) ); ?>
			</nav>
		</header>
		<?php get_sidebar(); ?>
	</div>