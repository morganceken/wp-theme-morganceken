<?php global $post;
$categories = get_the_category();
foreach ($categories as $category) :
?>
<aside class="col-md-4" id="sidebar">
	<div>
		<h3>Related Articles</h3>
		<ul>
			<li class="ss-stop"><a href="http://blog.teamtreehouse.com/cutting-edge-css-features-can-use-today">Cutting-Edge CSS Features You Can Use Today</a></li><li class="ss-stop"><a href="http://blog.teamtreehouse.com/new-course-modular-css-sass">New Course: Modular CSS with Sass</a></li><li class="ss-stop"><a href="http://blog.teamtreehouse.com/critique-give-criticism-take-feedback">How to Critique, Give Criticism, and Take Feedback</a></li><li class="ss-stop"><a href="http://blog.teamtreehouse.com/smarter-sass-mixins-null">Smarter Sass Mixins with Null</a></li><li class="ss-stop"><a href="http://blog.teamtreehouse.com/css-hover-effects-photos">CSS Hover Effects for Photos</a></li><li class="ss-stop"><a href="http://blog.teamtreehouse.com/modular-pseudo-elements-sass">Modular Pseudo-Elements with Sass</a></li><li class="ss-stop"><a href="http://blog.teamtreehouse.com/jquery-plugins-html-tables">jQuery Plugins for HTML Tables</a></li><li class="ss-stop"><a href="http://blog.teamtreehouse.com/which-page-layout">Which Layout? Static, Liquid, Adaptive, or Responsive</a></li><li class="ss-stop"><a href="http://blog.teamtreehouse.com/affordances-web-design">What Are Affordances in Web Design?</a></li><li class="ss-stop"><a href="http://blog.teamtreehouse.com/use-bootstrap-or-foundation">Should You Use Bootstrap or Foundation?</a></li>				</ul>
	</div>
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
				echo '';
				}
				?>			
				</a>
			</li>

			<?php endforeach; ?>
			<?php endforeach; ?>
		</ul>
	</div>