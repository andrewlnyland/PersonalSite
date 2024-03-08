<!doctype html>
<html>
	<head>
		<title>AndrewNyland.net</title>
		<link rel="stylesheet" href="style.css" type="text/css">
		<script src="script.js"></script>
	</head>
	<body>
		<header>
			<div class="page-wrap">
				<h1><a href="/">Andrew Nyland</a></h1>
				<div id="hb">
					<div class="hb hb-left"><a href="/portfolio">Portfolio</a> | <a href="/about">About</a></div>
					<div class="hb hb-right"><span>Photographer.</span> <span>Thinker.</span> <span>Designer.</span> <span>Writer.</span> <span>Student.</span></div>
					<div class="clearfix">
				</div>
			</div>
		</header>
		<div id="floating-header">
			<div class="page-wrap">
				<a href="/" id="home-link">Andrew</a>
				<div id="other-links">
					<a href="/photography">Photography</a>
					<!--<a href="/ideas">Ideas</a>-->
					<a href="/designs">Designs</a>
					<a href="/writings">Writings</a>
					<a href="/about">About me</a>
				</div>
			</div>
		</div>
		<div class="section about-me">
			<div class="page-wrap home-about-wrap">
				<div class="home-about-part home-about-content">Andrew Nyland was born and raised in Chapel Hill, NC. Now attending Virginia Tech after spending middle school learning art and nature
					<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
				</div>
				<div class="home-about-part home-about-spacer"></div>
				<div class="home-about-part home-about-content">this should just be a general overview, have a link to a more detailed about me page.
					<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="section photography">
			<div class="home-photo-text-overlay home-pf-overlay"><a href="/photography">Photography</a></div>
			<?php $dir = scandir("photos");
				for ($i=3; $i<count($dir); $i++) : ?>
					<div class="photo-grid-bg" style="background:url('<?php echo "photos/".$dir[$i];?>'); background-size: cover;"></div>
			<?php endfor; ?>
			<div class="clearfix"></div>
		</div>
		<div class="section "></div>
	</body>
</html>