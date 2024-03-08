<!doctype html>
<html>
	<head>
		<title>AndrewNyland.net - Blog</title>
		<script src="/script.js"></script>
		<link rel="stylesheet" type="text/css" href="/style.css">
	</head>
	<body class="color-3">
		<?php $title = "blog"; include("../header.php"); ?>
		<div class="page-wrap">
			<?php $dir = scandir("files");
				for ($i=0; $i<count($dir)-2; $i++) {
					echo "<article>";
					include("files/post".$i.".html");
					echo "</article>";
				} ?>
		</div>
		<?php include("../footer.php");?>
	</body>
</html>