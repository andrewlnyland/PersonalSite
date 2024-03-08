<?php
//Andrew Nyland 24060 7/24/16
//File to demonstrate "/edit" implementation. API sits at top level to be affected, works for everything below.
$done = false;
include "ctl/edit.php";
if (!$done) {
	include "test/index.html";
}
?>
