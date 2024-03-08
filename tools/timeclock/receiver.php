<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
	$id = $_GET['id'];
	//if id in session is active
	$output = $id." ".
	file_put_contents("file.txt", $output, FILE_APPEND);
	//end active id in session
	//if if in session is inactive
		//activate id in session
}