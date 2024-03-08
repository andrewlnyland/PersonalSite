<?php include "../embed.php";?>
<!doctype html>
<html>
	<head>
		<title>Team 4928 - Sponsors</title>
		<link rel="stylesheet" type="text/css" href="<?php doc_root();?>style.css">
		<script src="<?php doc_root();?>script.js"></script>
	</head>
	<body>
		<?php include "../header.php";?>
		<div class="page-wrap">
			<h2>Sponsors</h2>
			<hr>
			<?php
			$donors = array(
				"Stephen Hartzell of Brooks Pierce",
				"Action Hardware & Fasteners",
				"Sharon Shatterly",
				"Ted Heins",
				"Vincent and Susan Bucci",
				"Michael and Wendy Wander",
				"Patty and Jack Wander",
				"John Wander and Lisa Egizi",
				"Michael Griesmer",
				"Hannah Wander",
				"Michelle Wander and Jon Cherniss"
			); ?>
			<ul id="non-logo-sponsors">
				<?php for($i=0; $i<count($donors); $i++) : ?>
					<li><?php echo $donors[$i]; ?></li>
				<?php endfor; ?>
				<div class="clearfix"></div>
			</ul>
			<hr>
			<div class="list-sponsors">
				<a href="http://www.mwe-ltd.com/" style="background: url('images/MicEn.gif') no-repeat center;">Microwave Enterprises</a>
				<a href="http://ghaasfoundation.org/" style="background: url('images/genehaas.jpg') no-repeat center;">Geen Haas Foundation</a>
				<a href="http://www.publicschoolfoundation.org/" style="background: url('images/chccsPSF.jpg') no-repeat center;">Public School Foundation</a>
				<a href="https://www.deere.com" style="background: url('images/johndeere.jpg') no-repeat center;">John Deere</a>
				<a href="http://www.sekologistics.com/" style="background: url('images/seko.jpg') no-repeat center;">Seko</a>
				<a href="http://kramden.org/" style="background: url('images/kramden.png') no-repeat center;">Kramden Institute</a>
				<a href="http://www.unither.com/" style="background: url('images/UThera.jpg') no-repeat center;">United Therapeutics</a>
				<a href="https://www.onshape.com/" style="background: url('images/onshape.png') no-repeat center;">Onshape</a>
				<a href="http://www.smartjars.com/" style="background: url('images/smartjars.jpg') no-repeat center;">SmartJars</a>
				<a href="http://www.frazeecarpet.com/" style="background: url('images/frazee.jpg') no-repeat center;">Frazee Carpet and Flooring</a>
				<a href="http://www.scruggsdds.com/" style="background: url('images/SMS.jpg') no-repeat center;">Scruggs, Molina, & Scruggs</a>
				<div class="clearfix"></div>
			</div>
			<div id="sponsor-end">and all anonymous donors who have generously given their support.</div>
		</div>
		<?php include "../footer.php";?>
	</body>
</html>