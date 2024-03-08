<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["messages"];
	echo $name ." ".$email;
} else {echo "nothing found";}