<?php
$url = $_SERVER['REQUEST_URI'];
$q = explode("/", $url);
array_filter($q);
$ops = 0;
if ($q[count($q)-1] == "resume") {
	$ops = 1;
} else if ($q[count($q)-1] == "contact") {
	$ops = -1;
}

/*logic rules
(for resume, contact)
if, change this
"identifier" -> fill content with relevant info
	/whether accessed from active page or from direct url, content should be valid and correct - also visually/programmatically identical

*/

$imgs = [
	"http://andrewnyland.net/photography/small/abstract/IMG_5971.jpg",
	"http://andrewnyland.net/photography/small/abstract/IMG_7306.jpg",
	"http://andrewnyland.net/photography/small/nature/leaves3.jpg",
	"http://shoots.andrewnyland.net/gabe1/previews/IMG_3548.jpg",
	"http://andrewnyland.net/photography/small/portraits/noah.jpg",
	"http://andrewnyland.net/photography/small/portraits/_MG_9323.jpg",
	"http://andrewnyland.net/photography/small/people/IMG_9139.jpg",
	"http://andrewnyland.net/photography/small/night/_MG_1154.jpg"];
?>
<!doctype html>
<html>
	<head>
		<title>ALN 9.6.17</title>
		<link rel="prefetch image/jpeg" href="http://dev.andrewnyland.net/images/_MG_1502.jpg">
		<link rel="prefetch image/jpeg" href="http://dev.andrewnyland.net/images/_MG_2943.jpg">
		<link rel="prefetch image/jpeg" href="http://dev.andrewnyland.net/images/paperBG.jpg">
		<?php foreach ($imgs as $img) {echo '<link rel="prefetch image/jpeg" href="'.$img.'">';}?>
		<link type="text/css" rel="stylesheet" href="styles.css">
		<meta name="viewport" content="width=device-width">
		<script src="home.js"></script>
	</head>
	<body class="<?php if ($ops) {if ($ops>0) {echo "resume";} else {echo "contact";}} else {echo "axis initial";}?>">
		<div>
			<h1 class="<?php if ($ops) {echo " look-1";}?>"><a href="/" class="head-part" title="Andrew Nyland - Home">Andrew Nyland</a></h1>
			<ul id="home" class="<?php if ($ops) {echo "go-0";}?>">
				<li class="home <?php if (!$ops) {echo "active";}?>">
					<div class="tmp">Currently residing at Virginia Tech as a sophomore CS student. Some of my personal projects are a <a href="http://test.andrewnyland.net/" target="_blank">CMS</a>, drawing <a href="http://tools.andrewnyland.net/drawable/" target="_blank">interface</a>, AI image analysis, and <a href="http://tools.andrewnyland.net/" target="_blank">some fun</a>.</div>
				</li>
				<li class="home">
					<h2>Photography</h2>
					<p>Portraits, abstract, landscapes, visuals, etc... My goal is to capture memories as a mutable version of time.</p>
				</li>
				<li class="home">
					<h2>Web Design</h2>
					<p>Web, graphic, and visual designs. But mostly web designs.</p>
				</li>
				<li class="home">
					<h2>Programming</h2>
					<p>Python in 6th grade. Since then I've worked primarily with javascript, php, java, and c++ and tinkered with swift, mysql, obj-c, and matlab.</p>
				</li>
				<li class="home <?php if ($ops>0) {echo 'active';}?>">
					<h2>Resume</h2>
				</li>
				<li class="home <?php if ($ops<0) {echo 'active';}?>">
					<h2>Contact</h2>
				</li>
			</ul>
		</div>
		<div id="content">
			<?php
			$content = array("parts/about.php", "parts/photo.php", "parts/web.php", "parts/prog.php", "parts/resume.php", "parts/contact.php");
			$AC = "active-content";
			for ($in=0; $in<count($content); $in++) :?>
			<div id="content-<?php echo $in;?>" class="content-wrapper <?php if ($ops) {if ($ops>0 && $in==4) {echo $AC;} else if ($ops<0 && $in==5) {echo $AC;}}?>">
				<div class="content-area"><?php include($content[$in]); ?></div>
			</div>
			<?php endfor; ?>
		</div>
		<div id="overlay"></div>
		<div id="parallax-wrap">
			<?php $currentBG = "";
				if ($ops) {
					if ($ops > 0) {
						
					}
				}
				?>
			<div class="parallax<?php if ($ops) {echo " on";}?>" style="<?php if ($ops) {if ($ops>0) {echo "background: url('http://dev.andrewnyland.net/images/paperBG.jpg') center center repeat;";} else {echo "background: url('http://dev.andrewnyland.net/images/lineBG.jpg') center center repeat;";}} ?>"></div>
			<div class="parallax"></div>
		</div>
	</body>
</html>