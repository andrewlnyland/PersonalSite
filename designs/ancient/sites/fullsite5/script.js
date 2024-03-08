var overlay, imgs = [];
window.onload = function () {
	overlay = document.getElementById("overlay");
	overlay.addEventListener("click", function(){
		overlay.style.display = "none";
		document.getElementsByTagName("body")[0].style.overflow = "auto";
	});
	imgs = document.getElementsByTagName("article")[0].getElementsByClassName("fullview");
	for (i=0; i<imgs.length; i++) {
		var a = imgs[i];
		imgs[i].addEventListener("click", function(){
			overlay.style.display = "block";
			overlay.style.background = "url('" + a.src + "') no-repeat center rgba(0, 0, 0, 0.8)";
			if (window.innerWidth < 1500) {
				overlay.style.backgroundSize = "100%";
			}
			document.getElementsByTagName("body")[0].style.overflow = "hidden";
		});
	}
}