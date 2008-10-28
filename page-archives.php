<?php
/*
Template Name: Archives
*/
?>
<?php get_header(); ?>

	<div id="main">

		<div id="content">
		
				<div class="entry">
				
					<h3>by Category</h3>
					<ul>
						<?php list_cats(0, '', 'name', 'ASC', '/', true, 0, 1);    ?>
					</ul>
					
					<h3>by Month</h3>
					<ul><?php wp_get_archives('type=monthly'); ?></ul>
					
					<h3>Last 20 Entries</h3>			
					<ul class="last_20">
					<?php $posts = query_posts('showposts=20');?>			
					<?php if ($posts) : foreach ($posts as $post) : start_wp(); ?>
					<li><span class="archive_date"><?php the_time('d M Y'); ?></span><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></li>
					<?php endforeach; else: ?>
					<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
					<?php endif; ?>		
					</ul>
								
				</div>
				
				<p><?php edit_post_link(); ?></p>

		</div>
		
<?php include (TEMPLATEPATH . '/post-sidebar.php'); ?>
	
	</div>
	
<?php get_footer(); ?>