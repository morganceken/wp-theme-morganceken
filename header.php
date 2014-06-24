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
				<p>
					<?php bloginfo( 'description' ); ?>
				</p>
			<?php endif; ?>			
			</div>	
			<nav  id="branding" class="navbar navbar-default" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<figure>
							<a href="<?php echo home_url(); ?>" title="Till startsidan">
								<img src="http://morganceken.se/morganceken-com/wp-content/uploads/2014/02/logo.png" alt="Logotype">
							</a>
						</figure>
					</div>
					<div class="navbar-collapse collapse">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'items_wrap' => '<ul id="%1$s" class="%2$s nav navbar-nav">%3$s</ul>' ) ); ?>	
					</div><!--/.nav-collapse -->
				</div><!--/.container-fluid -->					
			</nav><!-- .nav .site-navigation .main-navigation -->	
		</header>
		<section id="content">
			<div class="container">
				<div class="row">
					<div class="container">
						<form method="get" id="searchform" action="<?php bloginfo('url'); ?>" class="col-md-12">					
							<div class="wrapper col-md-12">
								<input type="text" id="s" value="<?php if(trim(wp_specialchars($s,1))!='') echo trim(wp_specialchars($s,1));?>" name="s" placeholder="Sök efter något spännande" style="color: rgb(51, 51, 51);">
								<button type="submit" class="submit" name="Submit" value="Search!"  class="search_btn"><img src="http://designindevelopment.com/demos/grooveshark/search_icon.png" title="Search"></button>
							</div>					
						</form>		
					</div>	
				<div class="container">
				<?php the_breadcrumb(); ?>		
									