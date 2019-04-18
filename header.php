<?php 
	if($_SERVER['SERVER_NAME'] == 'localhost'){
		echo '<!-- '.get_page_template(). ' -->';
	}
?>

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

	<meta property="og:image" content="<?php bloginfo('template_url'); ?>/images/share-image.jpg" />
	<meta property="og:image:width" content="1200px" />
	<meta property="og:image:height" content="628px" />

	
	<link rel="alternate" type="application/rss+xml" title="RSS Feed for Scott Smith's Blog Posts" href="<?php bloginfo('rss_url'); ?>" />

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/ss-12.css" />
</head>

<body <?php body_class(); ?>>

<div class="hide">
<?php include_once('images/icon-sprite.svg'); ?>
</div>

<div id="site">


<header class="site-header">
	<div class="site-content site-masthead">

		<a href="<?php bloginfo('url'); ?>" class="site-title" title="<?php bloginfo('name'); ?>" aria-label="<?php bloginfo('name'); ?>" role="title">
			<?php svg_icon('icon-s-mark'); ?>
		</a>

		<?php 
			$site_nav = wp_nav_menu(array(
				'theme_location' => 'site_nav',
				'menu_id' => 'site-nav-list',
				'menu_class' => 'site-nav-list',
				'container' => '',
				'depth' => 1
			)); 
		?>

	</div>

	<?php if(is_front_page()){ get_template_part('template-parts/home-header-content'); } ?>

	
</header>

