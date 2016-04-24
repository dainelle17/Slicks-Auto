<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
<?php wp_head(); ?>
</head>
<body>
	<div class =""><!--Removed container class to expand entire width of page-->
		<header class="row">
			<div class="two columns logo">
				<img src="<?php bloginfo('url'); echo '/images/slicks-logo.png'; ?>" class="twelve columns"/>
			</div>
			<div class="eight columns">
				<ul class="nav">
					<li class="three columns">
						<a href="<?php bloginfo('url'); echo '/services'; ?>" class="12 columns">SERVICES</a>
					</li>
					<li class="three columns">
						<a href="<?php bloginfo('url'); echo '/blog'; ?>" class="12 columns">BLOG</a>
					</li>
					<li class="three columns">
						<a href="<?php bloginfo('url'); echo '/about'; ?>" class="12 columns">ABOUT US</a>
					</li>
					<li class="three columns">
						<a href="<?php bloginfo('url'); echo '/contact-us'; ?>" class="12 columns">CONTACT</a>
					</li>
				</ul>
			</div>
			<div class="two columns mobile-icons">
				<img src="<?php bloginfo('url'); echo '/images/fbtwitter.png';?>" class="eight columns mobile-img">
			</div>
		</header>
		<!-- Add Menu Here -->
		<div class="row">
		  
		</div>
<!-- END HEADER -->
        
  
