<?php global $post;
$categories = get_the_category();
?>
<aside class="col-md-4" id="sidebar">
	<?php foreach ($categories as $category) :?>
	<div>
		<h3>Andra jobb</h3>
		<ul>
			<?php
			$posts = get_posts('numberposts=1');
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
				echo 'apa';
				}
				?>
				</a>
			</li>
			<?php endforeach; ?>
		</ul>
	</div>
	<?php endforeach; ?>
	<div>
		<h3>Andra jobb</h3>
		<!-- INSTANSIVE WIDGET --><script src="http://instansive.com/widget/js/instansive.js"></script><iframe src="http://instansive.com/widgets/z6302e19dace26b48c7d14800782c4fb.html" scrolling="no" allowtransparency="true" class="instansive-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
	</div>
	<div>
		<h3>Andra jobb</h3>
		<iframe src="http://snapwidget.com/in/?u=cGhvdG9vZnRoZWRheXxpbnwyODB8MXwxfHx5ZXN8MA==" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; height: 290px"></iframe>
	</div>
	<div>
		<h3>Andra jobb</h3>
		<ul>
			<?php
			$posts = get_posts('numberposts=5&category='. $category->term_id);
			foreach($posts as $post) :
			?>
			<li>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</li>

			<?php endforeach; ?>
		</ul>
	</div>
</aside>