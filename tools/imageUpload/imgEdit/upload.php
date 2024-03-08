<!doctype html>
<html>
	<head>
		<title><?php echo $_SERVER['REQUEST_METHOD'] == 'POST' ? $_FILES['pic']['name']." uploaded": 'No image uploaded'; ?></title>
		<meta http-equiv="refresh" content="5;url=<?php $o = explode("/", $_SERVER['REQUEST_URI']); echo "/".$o[1]."/"; ?>" />
	</head>
	<body>
<?php
if (!is_dir("images"))
    mkdir("images");
if (!is_dir("thumbnails"))
    mkdir("thumbnails");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$dir = "images";
	$tmpFile = $_FILES['pic']['tmp_name'];
	$newFile = $dir."/".$_FILES['pic']['name'];
	$result = move_uploaded_file($tmpFile, $newFile);
	echo $_FILES['pic']['name'];
	if ($result) {
		 echo ' was uploaded<br />';
	} else {
		 echo ' failed to upload<br />';
	}
	$output = $_FILES['pic']['name']." ".$_POST['price']." ".$_POST['desc']."\n";
	file_put_contents("file.txt", $output, FILE_APPEND);
	echo "data saved<br>";
	$img = imagecreatefromjpeg($newFile);
	$width = imagesx($img);
	$w = 350;
	$ratio = $w/$width;
	$height = imagesy($img);
	$h = $ratio*$height;
	$new_img = imagecreatetruecolor($w, $h);
	imagecopyresampled($new_img, $img, 0, 0, 0, 0, $w, $h, $width, $height);
	$img = $new_img;
	imagejpeg($img, "thumbnails/".$_FILES['pic']['name'], 75);
	echo "thumbnail saved<br>";
	
}

?>
</body>
</html>