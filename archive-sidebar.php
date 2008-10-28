
<div class="sidebar">
	<ul>
		<li class="home"><a href="<?php echo get_settings('home'); ?>/">Home</a></li>
	</ul>
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Main Sidebar') ) : ?>
	<ul><li>
		
			<?php wp_list_cats('orderby=count&sort_column=name&optioncount=0'); ?>
		
	</ul>
	<?php endif; ?>
</div>