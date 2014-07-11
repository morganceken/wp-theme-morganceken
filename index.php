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
				
					<article class="col-md-4 col-xs-12 col-sm-6">
						<a href="<?php echo get_permalink(); ?>">
							<h2><?php the_title(); ?></h2>
						</a>					
						<?php
						// Must be inside a loop.

						if ( has_post_thumbnail() ) {
						the_post_thumbnail();
						}
						else {
						echo '<img src="http://localhost/wordpress/wp-content/uploads/2014/07/mc-header2.jpg" />';
						}
						?>
					</article>	
				<?php endwhile; ?>		
	</div>				
	<!-- Add the pagination functions here. -->

<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
<?php get_footer()?>