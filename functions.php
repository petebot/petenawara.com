<?php
if ( function_exists('register_sidebar') ) {
register_sidebar(array('name'=>'Main Sidebar',
'before_widget' => '<li class="side %2$s">',
'after_widget' => '</li>',
'before_title' => '<h2>',
'after_title' => '</h2>',
));
register_sidebar(array('name'=>'Post Sidebar',
'before_widget' => '<li class="side %2$s">',
'after_widget' => '</li>',
'before_title' => '<h2>',
'after_title' => '</h2>',
));
register_sidebar(array('name'=>'Page Sidebar',
'before_widget' => '<li class="side %2$s">',
'after_widget' => '</li>',
'before_title' => '<h2>',
'after_title' => '</h2>',
));

function unregister_problem_widgets() {
unregister_sidebar_widget('Calendar');
unregister_sidebar_widget('Search');
}
add_action('widgets_init','unregister_problem_widgets');

}

// helper functions
	$numposts = $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->posts WHERE post_status = 'publish'");
		if (0 < $numposts) $numposts = number_format($numposts); 

	$numcmnts = $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->comments WHERE comment_approved = '1'");
		if (0 < $numcmnts) $numcmnts = number_format($numcmnts);
// ----------------

function simplybasic_add_theme_page() {

    add_theme_page("Simply Basic", "Simply Basic", 'edit_themes', basename(__FILE__), 'simplybasic_theme_page');

}

function simplybasic_theme_page() {
	
?>

<div class="wrap">

<h2>Simply Basic</h2>

<div class="block">
	<h4>Theme Page: <a href="http://www.bballcity.com/download/themes/simply-basic/">Simply Basic</a> </h4> 
	<h4>Designed & Coded by:<a href="http://www.bballcity.com" target="_blank">Ash Haque</a></h4>
					
</div>

<p>List of frequently asked questions that may help you customize the look and feel of this theme for your own needs.</p>

<p><b>How do I add the by author tag on pages?</b></p>
<p>By default the by author tag has been included in the code just commented out. To put it back in open up the following files: archive.php, index.php, search.php, and single.php<br />
Then using your favourite text editor find this line of code: &lt;?php/* the_author() */?&gt; and take out the comment tags so it's just &lt;?php the_author() ?&gt;</p>

<p><b>I am trying to use the widgets plugin but this seems so complicated. Why are there three different sidebars that I can change?</b></p>
<p>This is something that dates back to the original kubrick, and is a feature that I really liked. Basically you have a different sidebar depending if you're on the homepage (uses sidebar.php), a post page (post-sidebar.php) or an actual page (page-sidebar.php). Back in the day I just created three different files and used a php include to call a different file to each page. With the invention of widgets I did something similar, there's still three different sidebars but there are also three different sidebar widgets. Basically each sidebar file calls a different dynamic sidebar (powered by widgets) and displays that.</p>

<p><b>I don't like how you have different sidebars, how can I go back to having just one?</b></p>
<p>Simple, you can go to each page that has a sidebar and change the part where the page calls the sidebar. For example if you wanted to make the page sidebar and the sidebar on the homepage the same, just open up page.php and change &lt;?php include (TEMPLATEPATH . '/page-sidebar.php'); ?&gt; to &lt;?php get_sidebar(); ?&gt;</p>

<p>Another thing you could do is open up each sidebar file and change the part where the dynamic sidebar is called to make everything the same. For example if you wanted to make the page sidebar and the sidebar on the homepage the same, just open up page-sidebar.php and change &lt;?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Page Sidebar') ) : ?&gt; to &lt;?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Main Sidebar') ) : ?&gt;</p>

<?php
}
add_action('admin_menu', 'simplybasic_add_theme_page');
?>