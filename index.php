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
	

	<?php if ($a): ?>
	<main class="col-md-12">		
		<?php while (have_posts()) : the_post(); ?>	
			<article class="col-md-6 col-xs-6 col-sm-6 portfolio">
				<a href="<?php echo get_permalink(); ?>">
					<div>
						<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail('thumbnail');
						}
						else {
						echo '<img src="http://localhost/wordpress/wp-content/uploads/2014/07/mc-header2.jpg" />';
						} ?>
					</div>	
					<header>
						<h2><?php the_title(); ?></h2>
					</header>				
					<div>
						<span>Skapad: October 21, 2014</span>
					</div>
				</a>
			</article>					
			<?php endwhile; ?>	
		</main>		
			
	<?php else: ?>
	<main class="col-md-8">	
		<?php while (have_posts()) : the_post(); ?>	
			<article class="col-md-12 col-xs-12 col-sm-12 blog">
				<header>
					<div class="sm-thumbnail">
						<img src="http://localhost/wordpress/wp-content/themes/wp-theme-morganceken/img/content/mc-thumb.jpg" class="pull-left"/>
					</div>
					<h2><?php the_title(); ?></h2>
					<span>Skapad: October 21, 2014</span>
				</header>
				<div>
					<img style="width: 100%;" src="http://images.nationalgeographic.com/wpf/media-live/photos/000/606/overrides/tern-chick-sri-lanka_60642_990x742.jpg">
					<?php the_content(); ?>
				</div>
			</article>			
		<?php endwhile; ?>
		<!-- Add the pagination functions here. -->

		<?php wpex_pagination(); ?>	
		</main>
		<?php get_sidebar()?>			
	<?php endif ?>
	

<?php get_footer()?>