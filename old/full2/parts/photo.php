<?php
$imgs = [
	"http://andrewnyland.net/photography/small/abstract/IMG_5971.jpg",
	"http://andrewnyland.net/photography/small/abstract/IMG_7306.jpg",
	"http://andrewnyland.net/photography/small/nature/leaves3.jpg",
	"http://shoots.andrewnyland.net/gabe1/previews/IMG_3548.jpg",
	"http://andrewnyland.net/photography/small/portraits/noah.jpg",
	"http://andrewnyland.net/photography/small/portraits/_MG_9323.jpg",
	"http://andrewnyland.net/photography/small/people/IMG_9139.jpg",
	"http://andrewnyland.net/photography/small/night/_MG_1154.jpg"];
?>
<div id="images-wrap"><?php foreach ($imgs as $str):?><img src="<?php echo $str; ?>" alt="<?php $ar = explode("/", $str); echo $ar[count($ar)-1];?>" class="fit"/><?php endforeach; ?></div>
<style type="text/css">
	#images-wrap img.shrunk {width: auto; margin: 1% auto;}
	#images-wrap img {max-width: 100%; width: 96%; margin: 1% 2%;}
	#images-wrap {text-align: center;}
</style>