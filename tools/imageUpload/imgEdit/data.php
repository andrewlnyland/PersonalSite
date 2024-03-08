<?php
/*
Andrew Nyland, 24060, 7/10/17
Deletes the given photo
*/
$id = $_REQUEST["id"];
echo unlink("images/".$id);
echo " ".unlink("thumbnails/".$id);
/*$str = "";
//removing an entry from the file
$file = file("file.txt");
foreach ($file as $line) {
	$ripline = $explode(" ", $line);
	echo $line;
	if ($ripline[0] != $id) {
		$str .= $line."\n";
	} else {
		echo $str." should be the attempted file ".$id;
	}
}*/
//echo "\n".$str;
//file_put_contents("file.txt", $str);
echo $id;