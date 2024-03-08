<?php include realpath(__DIR__)."/embed.php"; ?>
<html>
<head>
	<title>TheTyDrew | <?php echo $title ?></title>
	<link rel="stylesheet" href=<? echo $css ?> type="text/css"/>
	<script src="<?php doc_root(); ?>/script.js"></script>
</head>
<body class="<?php if ($bodystyle) {echo $bodystyle;} ?>">
<div id="overlay" onclick="closeOverlay();"></div>
<header>
	<div id="home-link-wrap" class="<?php if($id) {echo $id;}?>">
		<a href="<?php doc_root(); ?>" id="home-link"></a>
	</div>
	<div id="main-nav">
		<ul>
			<li>
				<a href="<?php doc_root(); ?>portfolio">Portfolio</a>
				<div class="nav-link-highlight"></div>
			</li>
			<li>
				<a href="<?php doc_root(); ?>about">About</a>
				<div class="nav-link-highlight"></div>
			</li>
			<li>
				<a href="<?php doc_root(); ?>contact">Contact</a>
				<div class="nav-link-highlight"></div>
			</li>
			<div class="clearfix"></div>
		</ul>
	</div>
</header>