<?php global $post;
$categories = get_the_category();
foreach ($categories as $category) :
?>
<aside class="col-md-4" id="sidebar">
	<h3>Andra jobb</h3>
	<ul>
		<?php
		$posts = get_posts('numberposts=20&category='. $category->term_id);
		foreach($posts as $post) :
		?>
		<li>
			<a href="<?php the_permalink(); ?>">
			<?php
			// Must be inside a loop.

			if ( has_post_thumbnail() ) {
			the_post_thumbnail();
			}
			else {
			echo '<img src="http://morganceken.se/morganceken-com/wp-content/uploads/2014/02/h2h-300x200.jpg" />';
			}
			?>			
				<?php the_title(); ?>
			</a>
		</li>

		<?php endforeach; ?>
		<?php endforeach; ?>
	</ul>
</aside>