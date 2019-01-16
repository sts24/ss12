<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" co`ntent="width=device-width, initial-scale=1" />
	<?php //wp_head(); ?>

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/ss-12.css" />
</head>

<body <?php body_class(); ?>>
<div id="site">

<?php if(!is_home()){ ?>
<header class="site-header blue-waves-bg">
	<a href="<?php bloginfo('url'); ?>" class="site-title">
		<span class="hide"><?php bloginfo('name'); ?></span>
	</a>
</header>
<?php } ?>

<button class="hamburger-button" id="site-nav-btn">

</button>

<div class="overlay site-nav-overlay" id="site-nav-overlay">
	<nav id="site-nav" class="site-nav">

		<?php 
			wp_nav_menu(array(
				'theme_location' => 'site_nav',
				'menu_id' => 'site-nav-list',
				'menu_class' => 'site-nav-list',
				'container' => '',
				'depth' => 1

			)); 
		?>

	</nav>
</div>