
<?php echo '<!-- '.get_page_template(). ' -->'; ?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/images/favicon.png">
	<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/images/site-icon.png">


	<?php
		if(is_page('home')){
			$page_title = get_bloginfo('name').' | '.get_bloginfo('description');
		} else {
			$page_title = get_bloginfo('name').wp_title(' | ',false);
		}
	?>

	<title><?php echo $page_title; ?></title>

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/ss-12.css" />
</head>

<body <?php body_class(); ?>>
<div id="site">

<?php if(!is_page('home')){ ?>
<header class="site-header random-bg <? echo 'random-bg-'.rand(1,5); ?>">
	<a href="<?php bloginfo('url'); ?>" class="site-title">
		<span class="hide"><?php bloginfo('name'); ?></span>
	</a>
</header>
<?php } ?>

<button class="hamburger-button" id="site-nav-btn" aria-label="Site Menu Button"></button>

<div class="overlay site-nav-overlay" id="site-nav-overlay">
	<nav id="site-nav" class="site-nav">

		<?php 
			$site_nav = wp_nav_menu(array(
				'theme_location' => 'site_nav',
				'menu_id' => 'site-nav-list',
				'menu_class' => 'site-nav-list',
				'container' => '',
				'depth' => 1
			)); 

		?>

	</nav>
</div>