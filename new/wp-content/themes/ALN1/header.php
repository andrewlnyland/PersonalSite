<!doctype html>
<html>
	<head>
		<meta charset="<?php bloginfo('charset');?>"/>
		<title><?php wp_title(' - ', TRUE, 'right'); bloginfo('name');?></title>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/style.css">
		<script src="<?php bloginfo('stylesheet_directory');?>/script.js"></script>
		<?php wp_head();?>
	</head>
	<body>
		<div id="overlay"></div>
		<header>
			<div id="main-logo" style="
	background: url('<?php bloginfo('stylesheet_directory');?>/logo1d.png') no-repeat center center; background-size: 6em;"></div>
			<div id="header-content">
				<div class="header-section">
					<h1><a href="/">Andrew Nyland</a></h1>
				</div>
				<div class="header-section">
					<?php //if(is_page("portfolio")):?>
					<ul>
						<li><a href="#">Portfolio</a></li>
						<div class="clearfix"></div>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</header>