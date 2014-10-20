<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<title><?php wp_title('&laguo;', true, 'right')?><?php bloginfo('name');?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="initial-scale=1.0, width=device-width" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,600,500,300,200,100' rel='stylesheet' type='text/css'>
		<!-- Bootstrap -->
		<link href="<?php bloginfo('template_url')?>/css/bootstrap.css" type="text/css" rel="stylesheet">
		<!--[if lt IE 10]>
			<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/style-ie9.css" />
		<![endif]-->			
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url')?>" rel="stylesheet">	
		<link type="text/css" href="<?php bloginfo('template_url')?>/css/menu.css" rel="stylesheet">
	</head>
	<body <?php body_class(); ?>>
		<header id="header">
			<nav  id="branding" class="navbar navbar-default" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<a data-toggle="collapse" data-target=".navbar-collapse">
							<span class="visible-xs">MENY</span>
							<button type="button" class="navbar-toggle" >
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</a>
						<figure class="visible-sm visible-md visible-lg">
							<a href="<?php echo home_url(); ?>" title="Till startsidan">
								<img src="/wordpress/wp-content/themes/wp-theme-morganceken/img/header/logotype.png" alt="Logotype">
							</a>
						</figure>
					</div>
					<div class="navbar-collapse collapse">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'items_wrap' => '<ul id="%1$s" class="%2$s nav navbar-nav">%3$s</ul>' ) ); ?>	
					</div><!--/.nav-collapse -->
				</div><!--/.container-fluid -->					
			</nav><!-- .nav .site-navigation .main-navigation -->				
			<div id="header-description" class="col-md-12 col-sm-12">
				<div class="container">
					<div id="header-island" class="col-md-12" style="background: url('http://localhost/wordpress/wp-content/themes/wp-theme-morganceken/img/header/morning.png') bottom right no-repeat;">
						<h1 >
							<?php bloginfo( 'name' ); ?>
						</h1>														
						<?php if ( '' != get_bloginfo( 'description' ) ) : ?>
						<p>
						<?php bloginfo( 'description' ); ?>
						</p>
						<?php endif; ?>		
					</div>		
				</div>
			</div>						
		</header>
		<section id="content">
			<div class="row">
				<div class="container">
					<?php the_breadcrumb(); ?>		
									