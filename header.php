<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package wp386
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<link rel="profile" href="https://gmpg.org/xfn/11">
<?php if ( is_singular() && pings_open() ) : ?>
<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
<?php endif; ?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">

		<nav class="navbar navbar-expand fixed-top">
			<div class="container">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" class="navbar-brand"><?php bloginfo( 'name' ); ?></a>
				<?php $walker = new Bootstrap_Nav_Menu_Walker(); ?>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'navbar-nav', 'walker' => $walker, 'fallback_cb' => '' ) ); ?>
			</div>
		</nav>

	</header><!-- #masthead -->

	<div id="main" class="site-main container">

		<?php if (is_active_sidebar( 'sidebar-1' )): ?>
			<div class="row">
				<div class="col-lg-3">
					<div class="sidebar-affix">
						<div class="sidebar-outer">
							<div class="sidebar-container">
								<?php dynamic_sidebar( 'sidebar-1' ); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-9">
			<?php else: ?>
				<div class="row">
					<div class="col-12">
			<?php endif; ?>
