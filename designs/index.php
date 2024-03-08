<!doctype html>
<html>
	<head>
		<title>AndrewNyland.net - Designs</title>
		<script src="/script.js"></script>
		<link rel="stylesheet" type="text/css" href="/style.css">
	</head>
	<body class="color-2">
		<?php $title = "designs"; include("../header.php"); ?>
		<div class="page-wrap">
			<?php
				$dir = scandir("images");
				for ($i=2; $i<count($dir); $i++) :?>
					<img src="<?php echo "images/".$dir[$i];?>"/>
			<?php endfor; ?>
			<div class="clearfix"></div>
		</div>
		<?php include("../footer.php");?>
	</body>
</html>