<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<title><?php wp_title('&laguo;', true, 'right')?><?php bloginfo('name');?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="initial-scale=1.0, width=device-width" />
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,600,500,300,200,100' rel='stylesheet' type='text/css'>
		<!-- Bootstrap -->
		<link href="<?php bloginfo('template_url')?>/css/bootstrap.css" type="text/css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url')?>" rel="stylesheet">
		<link type="text/css" href="<?php bloginfo('template_url')?>/css/menu.css" rel="stylesheet">
	</head>
	<body <?php body_class(); ?>>
		<header id="header">
			<div class="container">
				<h1>
					<?php bloginfo( 'name' ); ?>
				</h1>
			<?php if ( '' != get_bloginfo( 'description' ) ) : ?>
				<h2 id="site-description">
					<?php bloginfo( 'description' ); ?>
				</h2>
			<?php endif; ?>			
			</div>	
			<header id="branding" role="banner" data-dropdown="dropdown">
				<div id="branding-inner">
					<div class="container">
						<h1 class="assistive-text"><?php _e( '', 'morganceken' ); ?></h1>
						<nav role="navigation" class="nav site-navigation main-navigation">
							<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
						</nav><!-- .nav .site-navigation .main-navigation -->
					</div><!-- .container -->
				</div><!-- #branding-inner -->
			</header><!-- #branding -->		
		</header>
		<section id="content">
			<div class="container">