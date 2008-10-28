<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    
<!-- XHTML Strict 1.0 -->

<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">

<!-- Meta Tags -->
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
	<meta name="title" content="" /><!-- Blog title --> 
	<meta name="description" content="" /><!-- Blog description -->
	<meta name="keywords" content="" /><!-- Blog keywords -->
	<meta name="author" content="" /><!-- Author of the page -->
	<meta name="language" content="en-us" /><!-- Page language -->
	<meta name="rating" content="" /><!-- Page rating, ie) general, 14a, mature -->
	<meta name="copyright" content="" /><!-- Copyright -->
	<meta name="distribution" content="global" /><!-- Destribution, global or local -->
	<meta name="robots" content="index,follow" /><!-- Tells robots what to do -->
	<meta name="robots" content="NOODP" /><!-- Makes sure the page description is the actual one, not the one from DMOZ -->
	<meta name="revisit-after" content="10 Days" /><!-- How often the page should be revisited -->

	<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title><!-- Page Title -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" /><!-- Page stylesheet -->
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
<?php wp_head(); ?>

</head>

<body>

<!-- Start of the page -->

<div class="headercontainer">
	<div class="header clearfix">
	<a href="<?php echo get_settings('home'); ?>/">	<div class="petenawara">
			<?php bloginfo('name'); ?>
		</div>
	</a>
		<div class="fineartist">
			<?php bloginfo('description'); ?>
		</div>
	</div>
</div>




<!-- End of header, no divs open -->