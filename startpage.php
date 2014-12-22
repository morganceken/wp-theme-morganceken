<?php
/*
Template Name: Startpage
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
?>category='. $category->term_id
<?php get_header()?>				
	<main class="col-md-12">
	<article>
		<div class="row">
			<div class="col-md-8">
				<div class="col-md-12">
						<?php
						$posts = get_posts('numberposts=1');
						foreach($posts as $post) :
						?>
						<?php
						// Must be inside a loop.

						if ( has_post_thumbnail() ) {
						the_post_thumbnail();
						}
						else {
						echo the_title();
						}
						?>
						<?php endforeach; ?>
				</div>
			</div>
			<div class="col-md-4">
						<?php
		$posts = get_posts('numberposts=1');
		foreach($posts as $post) :
		?>
			<a href="<?php the_permalink(); ?>">
							<?php
			// Must be inside a loop.

			if ( has_post_thumbnail() ) {
			the_post_thumbnail();
			}
			else {
			echo the_title();
			}
			?>
			</a>
		<?php endforeach; ?>	
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
<!-- INSTANSIVE WIDGET --><script src="//instansive.com/widget/js/instansive.js"></script><iframe src="//instansive.com/widgets/c82e2eb7375ba38a8578226bcdc6c6b16d197350.html" id="instansive_c82e2eb737" name="instansive_c82e2eb737"  scrolling="no" allowtransparency="true" class="instansive-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>			
			</div>
			<div class="col-md-4">
<a class="twitter-timeline" href="https://twitter.com/morganceken" data-widget-id="531789585039126529">Tweets av @morganceken</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</div>
		</div>
		</div>		
	</article>	
	</main>	
					
<?php get_footer()?>