<!doctype html>
<html>
	<head>
		<title>AndrewNyland.net - Photography</title>
		<script src="/script.js"></script>
		<link rel="stylesheet" type="text/css" href="/style.css">
	</head>
	<body class="color-0" onload="senseImages();">
		<?php
			$d = "small";
			$dir = scandir($d);
			$title = "photography"; 
			include("../header.php");
		?>
		<div class="page-wrap">
			<?php
				for ($i=2; $i<count($dir); $i++) : ?>
					<div class="photo-category">
						<h2 id="<?php echo $dir[$i];?>"><?php echo $dir[$i];?></h2><div class="photo-slider">
						<?php $subdir = scandir($d."/".$dir[$i]);
							for ($j=3; $j<count($subdir); $j++) : ?>
								<img src='<?php echo $d . "/" . $dir[$i] . "/" . $subdir[$j]; ?>' <?php if ($dir[$i] == "portraits") {echo "class=\"tall\"";} ?>/>
						<?php endfor; echo "<div class=\"clearfix\"></div></div></div>"; endfor;?>
		</div>
		<?php include("../footer.php");?>
	</body>
</html>