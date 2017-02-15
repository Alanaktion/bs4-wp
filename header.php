<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_4
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'bootstrap-4'); ?></a>

<div class="blog-masthead">
	<div class="container">
		<nav id="site-navigation" class="nav blog-nav" role="navigation">
			<?php
			$navOptions = [
				'echo' => false,
				'theme_location' => 'menu-1',
				'menu_id' => 'primary-menu',
				'items_wrap' => null
			];
			$nav = strip_tags(wp_nav_menu($navOptions), '<a>');
			echo str_replace('<a ', '<a class="nav-link" ', $nav); // Total hack, but WP sucks at this stuff.
			?>
		</nav>
	</div>
</div>

<header class="blog-header">
	<div class="container">
		<?php
		if (is_front_page() && is_home()) : ?>
			<h1 class="blog-title"><?php bloginfo('name'); ?></h1>
		<?php else : ?>
			<h1 class="blog-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
		<?php
		endif;

		$description = get_bloginfo('description', 'display');
		if ($description || is_customize_preview()) : ?>
			<p class="lead blog-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
		<?php
		endif; ?>
	</div>
</header>

<div class="container">
	<div class="row">
		<div class="col-sm-8 blog-main">
