<?php global $post;
$categories = get_the_category();
foreach ($categories as $category) :
?>
<aside class="col-md-3" id="sidebar">
	<h3>Andra jobb</h3>
<!-- INSTANSIVE WIDGET --><script src="http://instansive.com/widget/js/instansive.js"></script><iframe src="http://instansive.com/widgets/z6302e19dace26b48c7d14800782c4fb.html" scrolling="no" allowtransparency="true" class="instansive-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe><h3>Andra jobb</h3>
	<iframe src="http://snapwidget.com/in/?u=cGhvdG9vZnRoZWRheXxpbnwyODB8MXwxfHx5ZXN8MA==" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; height: 290px"></iframe>
	<h3>Andra jobb</h3>
	<div id="related-posts">
		<ul>
			<?php
			$posts = get_posts('numberposts=3&category='. $category->term_id);
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
				</a>
			</li>

			<?php endforeach; ?>
			<?php endforeach; ?>
		</ul>
	</div>
</aside>