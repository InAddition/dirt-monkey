<?php global $asset_v; ?>
<!doctype html>
<!--[if lt IE 7]><html class="lt-ie10 lt-ie9 lt-ie8 lt-ie7" lang="en-US"><![endif]-->
<!--[if IE 7]><html class=" lt-ie10 lt-ie9 lt-ie8 ie7" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="lt-ie10 lt-ie9 ie8" lang="en-US"><![endif]-->
<!--[if IE 9]><html class="lt-ie10 ie9" lang="en-US"><![endif]-->
<!--[if gt IE 9]><!--><html lang="en"><!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title><?php bloginfo('name'); ?> | <?php the_title(); ?></title>
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta property="og:description" content="<?php bloginfo('description'); ?>">
		<meta property="og:title" content="<?php bloginfo('name'); ?><?php wp_title(); ?>">
		<meta property="og:site_name" content="<?php bloginfo('title'); ?>">
		<meta property="og:image" content="<?php bloginfo('template_url'); ?>/img/fb.png?v=2">
		<meta property="og:url" content="<?php echo current_url(); ?>">
		<meta property="og:type" content="website">
		<meta name="format-detection" content="date=no">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/img/fav/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/img/fav/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/img/fav/favicon-16x16.png">
		<link rel="manifest" href="<?php bloginfo('template_url'); ?>/img/fav/site.webmanifest">
		<link rel="mask-icon" href="<?php bloginfo('template_url'); ?>/img/fav/safari-pinned-tab.svg" color="#d90000">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="theme-color" content="#ffffff">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.min.css?v=<?php echo $asset_v; ?>">
		<?php wp_head(); ?>
	</head>
	<body class="page-<?php the_title() ?> ">	
	<nav>
		<a href="<?php bloginfo('url'); ?>/home" class="logo">
			<img src="<?php bloginfo('template_url'); ?>/images/logo-main.png" alt="<?php the_title(); ?>">
		</a>
		<div class="nav-menu">
					<ul class="nav-links">
						<li class="nav-tour">
							<a href="<?php bloginfo('url'); ?>/tour-dates">Tour Dates</a>
						</li>
						<li class="nav-divider"></li>
						<li class="nav-music">
							<a href="<?php bloginfo('url'); ?>/music">Music</a>
						</li>
						<li class="nav-divider"></li>
						<li class="nav-photos">
							<a href="<?php bloginfo('url'); ?>/photos">Photos</a>
						</li>
						<li class="nav-divider"></li>
						<li class="nav-videos">
							<a href="<?php bloginfo('url'); ?>/videos">Videos</a>
						</li>
						<li class="nav-divider"></li>
						<li class="nav-shop">
							<a href="<?php bloginfo('url'); ?>/shop">Shop</a>
						</li>
						<li class="nav-divider"></li>
						<li class="nav-about">
							<a href="<?php bloginfo('url'); ?>/about">Bio</a>
						</li>
						<li class="nav-cart">
							<?php do_action( 'wc_header_top' ); ?>
						</li>
					</ul>
				</div>
				<div class="hamburger">
					<a href="#" class="hamburger-icon">
						<span></span>
					</a>
				</div>
	</nav>
	