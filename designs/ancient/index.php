<?php
	$tmpfiles = scandir("sites");
	$files = array();
	//url: name
	$titles = array(
		"chhs4928" => "Tigers2",
		"chhs4928/firstversion" => "Tigers1",
		"graphics" => ""
	);
	for ($i=0; $i<count($tmpfiles); $i++) {
		if (substr($tmpfiles[$i], 0, 1) != ".") {
			array_push($files, $tmpfiles[$i]);
		}
	}

	$customentry = "chhs4928/firstversion";
	$customentries = array($customentry);
	//inject custom links
	array_push($files, $customentry);
?>
<!doctype html>
<html>
	<head>
		<title>Old sites portfolio</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
	</head>
	<body>
		<h1><a href="/">Old sites I've made</a></h1>
		<?php foreach($files as $f) : 
			$title = isset($titles[$f]) ? $titles[$f] : $f;?>
		<a href="#<?php echo $title; ?>"><?php echo $title; ?></a>
		<iframe src="sites/<?php echo $f; ?>" id="<?php echo $title; ?>"></iframe>
		<?php endforeach; ?>
	</body>
</html>