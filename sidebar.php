
<div class="sidebar">
	<ul>
		<li>
			<a href="<?php echo get_settings('home'); ?>/">
				Home
			</a>
		</li>
		
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Main Sidebar') ) : ?>
		
		<?php wp_list_cats('orderby=count&sort_column=name&optioncount=0'); ?>
		
		<?php endif; ?>
	<br />
	
	
			<ul>

	                <?php while(have_posts()) : the_post(); ?>

			<?php foreach((get_the_category()) as $category)
	                          { $my_query = new WP_Query('category_name=' . $category->category_nicename . '&orderby=date&order=dec&showposts=100');} ?> 
<li><?php
$category = get_the_category(); 
echo $category[1]->cat_name;
?></li><div class="special">
	                       <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

			       <li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>

	                      <?php endwhile; ?>

	 		<?php break; endwhile; ?>

			</ul>
			<?php get_links_list(); ?> 
			</div>
	<form style="text-align:right;" action="http://www.feedburner.com/fb/a/emailverify" method="post" target="popupwindow" onsubmit="window.open('http://www.feedburner.com/fb/a/emailverifySubmit?feedId=2326281', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">---<br /><p>Get updated by email when there's new work!</p><p><input type="text" style="width:140px" name="email"/></p><input type="hidden" value="http://feeds.feedburner.com/~e?ffid=2326281" name="url"/><input type="hidden" value="Pete Nawara" name="title"/><input type="hidden" name="loc" value="en_US"/><input type="submit" value="Subscribe" /></form>
		
</div>