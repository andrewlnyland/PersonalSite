<?php
$url = $_SERVER['REQUEST_URI'];
$split = explode($url, "/");
?>
<!doctype html>
<html>
	<head>
		<title>ALN 9.6.17</title>
		<!--<base href="/new/">-->
		<link type="text/css" rel="stylesheet" href="styles.css">
		<script src="home.js"></script>
	</head>
	<body>
		<div>
			<h1><span class="head-part">Andrew</span><span class="head-part">Nyland</span></h1>
			<ul id="home">
				<li class="home active">
				<p>Currently residing at Virginia Tech as a sophomore CS student. Some of my personal projects are a <a href="http://test.andrewnyland.net/">CMS</a>, drawing <a href="http://tools.andrewnyland.net/drawable/">interface</a>, AI image analysis, and <a href="http://tools.andrewnyland.net/">some fun</a>.</p>
				<?php echo $split[count($split)-1]; ?>
			</li>
		<li class="home">
			<h2>Photography</h2>
		</li>
		<li class="home">
			<h2>Web Design</h2>
		</li>
		<li class="home">
			<h2>Programming</h2>
		</li>
		<li class="home">
			<h2>Resume</h2>
		</li>
		<li class="home">
			<h2>Contact</h2>
		</li>
	</ul>
</div>