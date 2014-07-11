<?php
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
	<div class="row">
				<?php while ( have_posts() ) : the_post() ?>	
				
					<article class="col-md-8">
						<a href="<?php echo get_permalink(); ?>">
							<h2><?php the_title(); ?></h2>
						</a>					
						<p>
						<?php the_content(); ?>
						</p>
					</article>	
				<?php endwhile; ?>	
					<?php get_sidebar()?>			
	</div>				
<?php get_footer()?>