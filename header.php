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
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/plugins/Slide-Access/css/slideaccess.css">
		<script src="<?php bloginfo('template_url')?>/plugins/Slide-Access/js/jquery-1.11.1.min.js"></script>
		<script src="<?php bloginfo('template_url')?>/plugins/Slide-Access/js/slideaccess.js"></script>				
	</head>
	<body <?php body_class(); ?>>
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
		<header id="header">		
			<div id="header-description">
				<div class="container">
					<!-- JS-Fader -->
					<div id="slideaccess">
						<!-- Slider Controls -->
						<nav id="slideaccess-ctrls" aria-hidden="true">
							<button id="slideaccess-play-btn" title="Starta bildspelet" aria-hidden="true"></button> 
							<button id="slideaccess-pause-btn" title="Pausa bildspelet" aria-hidden="true"></button> 
							<button id="slideaccess-next-btn" title="Nästa nyhet" aria-hidden="true"></button> 
							<button id="slideaccess-previous-btn" title="Föregående nyhet" aria-hidden="true"></button>  
						</nav>	
						<!-- END Slider Controls -->
						<ul>
							<!-- Slide 1 -->
							<li class="island-morning">
								<div>
										<h1 >
											<?php bloginfo( 'name' ); ?>
										</h1>														
										<?php if ( '' != get_bloginfo( 'description' ) ) : ?>
										<p>
										<?php bloginfo( 'description' ); ?>
										</p>
										<?php endif; ?>	
								</div>
							</li>
							<!-- END Slide 1 -->
							
							<!-- Slide 2 -->
							<li class="island-day">
								<div>
										<h1>
											<?php bloginfo( 'name' ); ?>
										</h1>														
										<?php if ( '' != get_bloginfo( 'description' ) ) : ?>
										<p>
										<?php bloginfo( 'description' ); ?>
										</p>
										<?php endif; ?>	
								</div>
							</li>
							<!-- END Slide 2 -->
							<!-- Slide 3 -->
							<li class="island-evening">
								<div>
										<h1>
											<?php bloginfo( 'name' ); ?>
										</h1>														
										<?php if ( '' != get_bloginfo( 'description' ) ) : ?>
										<p>
										<?php bloginfo( 'description' ); ?>
										</p>
										<?php endif; ?>	
								</div>
							</li>
							<!-- END Slide 3 -->								
							<!-- Slide 4 -->
							<li class="island-night">
								<div>
										<h1>
											<?php bloginfo( 'name' ); ?>
										</h1>														
										<?php if ( '' != get_bloginfo( 'description' ) ) : ?>
										<p>
										<?php bloginfo( 'description' ); ?>
										</p>
										<?php endif; ?>	
								</div>
							</li>
							<!-- END Slide 4 -->							
						</ul>	
					</div>
					<!-- END JS-Fader -->	
				</div>
			</div>	
		</header>
		<section id="content">
		<?php the_breadcrumb(); ?>	
			<div class="row">
				<div id="content-tbl" class="container">