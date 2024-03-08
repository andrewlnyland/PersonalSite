<?php
/*
Andrew Nyland, 24060, 7/10/17
Admin screen for an image controller. Stores the images in a directory with relevant thumbnails, a file stores descriptions and prices.
*/
session_start(); include "functions.php";?>
<!doctype html>
<html>
    <head>
        <title>Upload and delete images</title>
		<link rel="stylesheet" type="text/css" href="styles.css">
		<script>
			function deleteImg(id) {
    			var repo = new XMLHttpRequest();
				repo.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						console.log(this.responseText);
						location.reload(true);
        			}
				};
				repo.open("GET", "data.php?id=" + id, true);
				repo.send();
				console.log("done");
			}
		</script>
    </head>
    <body>
		<h1><?php echo count($_SESSION['images'])-1; ?> Current images - <a href="../">Home</a></h1>
		<div id="images-wrap">
			<?php while (has_images()) :?>
			<div class="image-wrap">
				<div class="throw-thumb" style="background: url('thumbnails/<?php echo thumb(); ?>') center no-repeat; background-size: contain; height: 20vw;"></div>
				<h3><?php echo thumb(); ?></h3>
				<p><?php echo desc(); ?></p>
				<p>$<?php echo price(); ?></p>
				<a id="<?php echo thumb();?>" class="delete-button" onclick="deleteImg(this.id);">Delete</a>
			</div>
			<?php endwhile;?>
			<div class="clearfix"></div>
		</div>
		<h1>Upload a new image</h1>
		<form action="upload.php" name="image" method="post" class="upload-image" enctype="multipart/form-data">
			<fieldset>
				<label>Select file:</label>
				<input type="file" id="pic" name="pic"/>
			</fieldset>
			<fieldset>
				<label>Description:</label>
				<textarea name="desc"></textarea>
			</fieldset>
			<fieldset>
				<label>Price:</label>
				<input type="text" placeholder="$??:" name="price"/>
			</fieldset>
			<input type="submit"/>
		</form>
    </body>
</html>
<?php session_destroy(); ?>
