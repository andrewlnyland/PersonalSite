<?php
/**
Andrew Nyland
6.26.17, 24060
Main function file
Allows a directory of images to be displayed, and edited from an admin screen.
Images can contain description and price elements.
Data is stored in file.txt
*/
queue_init();
function queue_init() {
	$_SESSION["i"]=0;
	$files = scandir(dirname(__FILE__)."/images");
	array_shift($files);
	//array_shift($files);
	$_SESSION["images"] = $files;
	$file = file(dirname(__FILE__)."/file.txt");
    $data = array();
    foreach ($file as $line) {
        $ripline = explode(" ", $line);
		$_SESSION["prices"][$ripline[0]] = $ripline[1];
		$line = str_replace($ripline[1], "", $line);
        $data[$ripline[0]] = str_replace($ripline[0], "", $line);
    }
	$_SESSION["data"] = $data;
}
function has_images() {
	return ($_SESSION["i"]++ < count($_SESSION["images"])-1);
}
function desc() {
    echo $_SESSION["data"][thumb()];
}
function thumb() {
	return $_SESSION["images"][$_SESSION["i"]];
}
function price() {
	return $_SESSION["prices"][thumb()];
}
	
?>