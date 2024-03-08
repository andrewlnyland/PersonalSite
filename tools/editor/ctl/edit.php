<?php
//Andrew Nyland 24060 7/24/16
$url = $_SERVER['REQUEST_URI'];
$q = explode("/", $url);
array_filter($q);
if ($q[count($q)-1] == "edit") : ?>
<!doctype html>
<html>
	<head>
		<title>Editing <?php echo "- ".$q[count($q)-2]; ?></title>
	</head>
	<body>
		<h1>Edit these files</h1>
		<?php
		$dir = $_SERVER["DOCUMENT_ROOT"]."/";
		for ($i=0; $i<count($q)-1; $i++) {
			$dir .= $q[$i]."/";
		}
		$files = scandir($dir);
		for ($i=2; $i<count($files); $i++) {
			echo $files[$i]." - ";
			echo htmlspecialchars(file_get_contents($dir."/".$files[$i]))."<br>";
		}
		$done = true;
		?>
	</body>
</html>
<?php endif; ?>