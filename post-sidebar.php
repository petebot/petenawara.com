<hr />

<div id="sidebar">
	<ul>
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Post Sidebar') ) : ?>

		<li class="side">
			<h2>Recent Posts</h2>
			<ul>
				<?php get_archives('postbypost','10','custom','<li>','</li>'); ?>
			</ul>
		</li>

		<?php endif; ?>
	</ul>
</div>

<hr />