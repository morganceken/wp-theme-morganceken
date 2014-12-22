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
	<main class="col-md-8">	
	<?php while ( have_posts() ) : the_post() ?>	
		<article class="col-md-12">
			<h2><?php the_title(); ?></h2>
			<?php
			// Must be inside a loop.

			if ( has_post_thumbnail() ) {
			the_post_thumbnail('full');
			}
			else {
			echo '<img src="http://morganceken.se/morganceken-com/wp-content/uploads/2014/02/h2h-300x200.jpg" />';
			}
			?>							
			<div class="col-md-12" id="content-text">
				<div>
					<?php the_content(); ?>
					<p>Alla människor har rätt att delta i kulturlivet som utövare och besökare. Kommunen ansvarar för att lokaler där kommunens kulturaktiviteter bedrivs är tillgängliga och att det finns möjligheter för personer med funktionsnedsättning att utöva kultur.</p>
				</div>
				<!-- Single button -->
				<div class="btn-group col-md-12">
				  <button type="button" class="btn btn-default dropdown-toggle col-md-12" data-toggle="dropdown">
					Demo / Ladda ner
				  </button>
				</div>
				<div id="content-tags">
					<?php the_tags('', ' ', '<br />'); ?>
				</div>				
			</div>
		</article>	
	</main>		
		<?php get_sidebar()?>		
	<?php endwhile; ?>			
<?php get_footer()?>