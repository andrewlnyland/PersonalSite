<?php //Edit made on 1/30/19. Originally made by Andrew Nyland in late (oct-nov) 2014, and was finalized by the summer of 2015 - mostly all content had been added. These files have been moved around but never altered until now, the only changes I'm making are to make the navigation and asset links relative instead of absolute because the subdomain shodorsite.andrewnyland.net isn't working currently (domain.com) and I'll host on andrewnyland.net/shodor for now. ?>
<!doctype html>
<html>
<head>
	<title><?php if(isset($pagetitle)) {echo "Andrew Nyland | " . $pagetitle;} else {echo "Shodor | Andrew Nyland";} ?></title>
	<link rel="stylesheet" href="<?php if (!is_null($url)) {echo $url;} else {echo "no url";} ?>style.css" type="text/css">
	<meta charset="UTF-8">
	<script src="reorganize.js"></script>
	<style type="text/css">
	.extra-info {
		padding: 10px;
		background: hsl(39, 100%, 60%);
		text-align: center;
		font-size: smaller;
		box-shadow: inset 0 -5px 21px -10px white, 0 0 10px 1px #999, 0 0 0 1px black;
	}
	.extra-info a {
		text-decoration: underline;
	}
	</style>
</head>
<body class="<?php if(isset($bodyclass)) {echo $bodyclass;} ?>">
<div class="extra-info">This section of my website was originally hosted on <a href="http://www.shodor.org/~anyland/">shodor.org/~anyland</a> and was a showcase of my involvement in their Apprenticeship program. <a href="http://www.andrewnyland.net">Home</a></div>
<div class="header page-wrap">
	<div id="pagetitle-wrap">
		<a href="<?php if (!is_null($url)) {echo $url;} else {echo "no url";} ?>"><h1>Andrew Nyland</h1></a>
	</div>
	<div id="main-nav">
		<ul>
			<li><a href="<?php if (!is_null($url)) {echo $url;} else {echo "no url";} ?>blog">Blog</a></li>
			<li><a href="<?php if (!is_null($url)) {echo $url;} else {echo "no url";} ?>portfolio">Portfolio</a></li>
			<div class="clearfix"></div>
		</ul>
	</div>
	<div class="clearfix"></div>
</div>