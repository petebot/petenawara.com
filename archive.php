<?php get_header(); ?>

<div class="container">
  <div class="content clearfix">
		

		
			<?php if (have_posts()) : ?>
				
		<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
    
			<?php while (have_posts()) : the_post(); ?>
				
				<div class="post" id="post-<?php the_ID(); ?>">
	
					<div class="entry">
					
						<div class="pinkcontainer">
	<div class="pinkline clearfix">
	</div>
</div>
					
						<?php the_content('Continue Reading &raquo;'); ?>
						<?php wp_link_pages(); ?>
					</div>
	
					<span class="metadata">
						<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
					</span>

				</div>
						<br /><br />
			<?php endwhile; ?>

			<p><?php posts_nav_link(' - ','&#171; Prev','Next &#187;') ?></p>
		
		<?php else : ?>
	
			<h1>Not Found</h1>
			<p>Sorry, but the page you are looking for seems not to be here right now. Would you like to try again using the search feature?</p>
			<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
			<form method="get" class="searchform" action="<?php bloginfo('home'); ?>/">
			<div><input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" class="search_input" />
			<input type="submit" class="searchsubmit" value="Search" />
			</div>
			</form>	
			
		<?php endif; ?>
		
		
		</div>

		<?php get_sidebar(); ?>
	<?php get_footer(); ?>

	</div>
	

	
