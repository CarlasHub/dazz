<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dazz
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

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dazz' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="navbar navbar-expand-lg navbar-dark">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<i class="fas fa-cube icon-purple fa-5x pr-4"></i><h1 class="site-title d-inline"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			if ( $dazz_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $dazz_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   			 <span class="navbar-toggler-icon"></span>
  		</button>

			<?php
			wp_nav_menu( array(
				'theme_location'    => 'primary',
				'menu_id'           => 'navbarSupportedContent',
				'container_class'   => 'collapse navbar-collapse',
				'container_id'      => 'navbarSupportedContent',
				'menu_class'        => 'nav navbar-nav ml-auto text-right',
			) );
			?>
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->

	

	

