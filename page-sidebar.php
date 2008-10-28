<hr />

<div id="sidebar">
	<ul>
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Page Sidebar') ) : ?>

		<li class="side">
			<h2>Pages</h2>
			<ul>
				<?php wp_list_pages('title_li='); ?> 
			</ul>
		</li>

		<?php get_links_list(); ?> 
		<?php endif; ?>
	</ul>
</div>

<hr />