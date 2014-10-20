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
 $a = $_GET['cat'];
?>

<?php get_header()?>
	
	<main class="col-md-8">
	<?php if ($a): ?>
		<?php while (have_posts()) : the_post(); ?>	
			<article class="col-md-12 col-xs-9 col-sm-9" id="blog-socialmedia">
				<header>
					<h2><?php the_title(); ?></h2>
				</header>
				<div>
					<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail('thumbnail');
					}
					else {
					echo '<img src="http://localhost/wordpress/wp-content/uploads/2014/07/mc-header2.jpg" />';
					} ?>
				</div>
			</article>					
			<?php endwhile; ?>		
	<?php else: ?>

		<?php while (have_posts()) : the_post(); ?>	
			<article class="col-md-12 col-xs-12 col-sm-12" id="blog-socialmedia">
				<header>
					<div class="sm-thumbnail">
						<img src="http://localhost/wordpress/wp-content/uploads/2014/07/instagram.gif" class="pull-left"/>
					</div>
					<h2><?php the_title(); ?></h2>
					<p>Posted  on October 13 by</p>
				</header>
				<div>
					<img style="width: 100%;" src="http://images.nationalgeographic.com/wpf/media-live/photos/000/606/overrides/tern-chick-sri-lanka_60642_990x742.jpg">
					<?php the_content(); ?>
				</div>
			</article>			
		<?php endwhile; ?>
	<?php endif ?>
	<!-- Add the pagination functions here. -->

	<?php wpex_pagination(); ?>	
	</main>
	<?php get_sidebar()?>		

<?php get_footer()?>