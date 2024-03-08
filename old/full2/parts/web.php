<?php
$imgs = [
	"http://andrewnyland.net/designs/images/ANhome1.jpg",
	"http://andrewnyland.net/designs/images/boxlayout.jpg",
	"http://andrewnyland.net/designs/images/chhs4829design1.jpg",
	"http://andrewnyland.net/designs/images/mementusdesign.jpg",
	"http://andrewnyland.net/designs/images/fishsealsmain.jpg"];
?>
<div id="images-wrap"><?php foreach ($imgs as $str):?><img src="<?php echo $str; ?>" alt="<?php $ar = explode("/", $str); echo $ar[count($ar)-1];?>" class="fit"/><?php endforeach; ?></div>
<style type="text/css">
	#images-wrap img.shrunk {width: auto; margin: 1% auto;}
	#images-wrap img {max-width: 100%; width: 96%; margin: 1% 2%;}
	#images-wrap {text-align: center;}
</style>