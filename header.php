<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head>

<title><?php
        if ( is_single() ) { single_post_title(); }
        elseif ( is_home() ) { bloginfo('name'); print ' | '; bloginfo('description'); }
        elseif ( is_page() ) { single_post_title(''); }
        elseif ( is_search() ) { bloginfo('name'); print ' | Search results for ' . wp_specialchars($s); }
        elseif ( is_404() ) { bloginfo('name'); print ' | Not Found'; }
        else { bloginfo('name'); wp_title('|'); }
    ?></title>
	
	<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
	<meta name="description" content="<?php bloginfo('description') ?>" />
	<?php if(is_search()) { ?>
	<meta name="robots" content="noindex, nofollow" /> 
    <?php }?>
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	

<?php wp_head(); ?>
</head>

<body>
	<div id="globalnav">
		<div id="menu">
			<div class="globalwrap">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Products</a></li>
					<li><a href="#">About Us</a></li>
				</ul>
			</div>
		</div>
		<div id="submenu">
			<div class="globalwrap">
				<ul>
					<li><a href="#">Sub1</a></li>
					<li><a href="#">Sub2</a></li>
					<li><a href="#">Sub3</a></li>
				</ul>
			</div>
		</div>
    </div>
	<div class="container_16" id="wrapper">