<?php
	/*
	Andrew Nyland, 24060, 7/10/17
	A display area for a storage of images. The image, description, and price are linked and output as data. Requires an included file and initialization.
	*/
	session_start(); include dirname(__FILE__)."/imgEdit/functions.php"; queue_init();
?>
<!doctype html>
<html>
	<head>
		<title>Image output</title>
		<style type="text/css">
			img {max-width: 100%;}
			.delete-button {
				color: red;
			}
		</style>
	</head>
	<body>
		<h1><?php echo count($_SESSION['images'])-1; ?> Current images - <a href="imgEdit/">Admin</a></h1>
		<p>Tests the loop for outputting images.</p>
        <?php while (has_images()) :?>
		<div class="image-wrap">
			<img class="thumb" src="imgEdit/images/<?php echo thumb(); ?>">
			<br>
			<h3><?php echo thumb(); ?></h3>
			<p><?php echo desc(); ?></p>
			<p>$<?php echo price(); ?></p>
		</div>
		<?php endwhile;?>
	</body>
</html>