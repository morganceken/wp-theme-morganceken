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
				
					<article class="col-md-4">
						<a href="<?php echo get_permalink(); ?>">
							<h2><?php the_title(); ?></h2>
						</a>					
						<?php
						// Must be inside a loop.

						if ( has_post_thumbnail() ) {
						the_post_thumbnail();
						}
						else {
						echo '<img src="http://morganceken.se/morganceken-com/wp-content/uploads/2014/02/h2h-300x200.jpg" />';
						}
						?>
					</article>	
				<?php endwhile; ?>		
</div>				
<?php get_footer()?>