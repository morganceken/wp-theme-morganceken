<?php
/*
Template Name: Page Sidebar
*/
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package morganceken
 */
?>
<?php get_header()?>				
	<main class="col-md-8">
	<?php while ( have_posts() ) : the_post() ?>	
		<article class="col-md-12 col-xs-12 col-sm-12" id="blog-socialmedia">
			<header>
				<h2><?php the_title(); ?></h2>
			</header>
			<div>
				<?php the_content(); ?>
			</div>
		</article>			
	<?php endwhile; ?>		
	</main>	
	<?php get_sidebar()?>	
					
<?php get_footer()?>