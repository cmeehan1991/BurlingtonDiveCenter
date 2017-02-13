<!DOCTYPE html>
<html>
	<head>
		<title><?php bloginfo('title');?></title>
		<?php wp_head();?>
	</head>
	<nav class="navbar">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="primary-navbar" aria-expanded="false">
			    <span class="sr-only">Toggle navigation</span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
		    </button>
			<a class="hidden-md hidden-lg navbar-brand" href="#"><?php bloginfo('title');?></a>
		</div>
		<div class="collapse navbar-collapse" id="primary-navbar">
				<?php
					$nav_menu = array('menu'=>'Primary Navigation', 'menu_class'=>'nav navbar-nav', 'container'=>'');
					wp_nav_menu($nav_menu);
					
					$right_nav = array('menu'=>'Right Navigation', 'menu_class'=>'nav navbar-nav navbar-right', 'container'=>'', 'theme_location' => 'right-menu');
					wp_nav_menu($right_nav);
				?>	
		</div>
	</nav>
	<body>

