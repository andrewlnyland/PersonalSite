<?php 
	/*
	Andrew Nyland, 24060, 7/10/17
	Canvas based drawing tool, at some point it will support 3d drawings and labeling. Think of a file type/storage method sometime, as well as vector data.
	*/
?>
<!doctype html>
<html>
	<head>
		<title>Drawable</title>
		<script src="scripts/script.js"></script>
		<link rel="stylesheet" type="text/css" href="styles/styles.css">
	</head>
	<body>
		<nav>
			<div onclick="myclear();">Clear</div>
			<div><input placeholder="Color" onblur="updateColor(this);"/></div>
			<div onclick="download();">Download<a id="link"></a></div>
		</nav>
		<div id="layer-wrap"></div>
	</body>
</html>