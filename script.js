//scripts go here
var homeoverlay, overlay;
var imgs1 = [];
var imgs2 = [];
onload = function () {
	homeoverlay = document.getElementById("home-overlay");
	overlay = document.getElementById("overlay");
	overlay.addEventListener("click", function(){
		overlay.classList.remove("here");
		document.body.classList.remove("stuck");
	});
}
onscroll = function () {
	if (scrollY > 20) {
		document.body.classList.add("floating");
	} else {
		document.body.classList.remove("floating")
	}
}
function activate(c) {
	homeoverlay.classList.add("act");
	homeoverlay.classList.add(c.className);
}
function goaway(c) {
	homeoverlay.classList.remove("act");
	homeoverlay.classList.remove(c.className);
}
function senseImages() {
    console.log(overlay);
	imgs1 = document.getElementsByTagName("img");
	for (i=0; i<imgs1.length; i++) {
		imgs1[i].addEventListener("click", addL(i, overlay));
	}
	loadImages();
	
}
function loadImages() {
    overlay = document.getElementById("overlay");
	for (i=0; i<imgs1.length; i++) {
		var a = new Image();
		a.src = imgs1[i].src.replace("small", "large");
		imgs2[i] = a;
	}
}
function clearOverlay() {
    overlay.classList.remove("here");
    document.body.classList.remove("stuck");
}
function addL(i, overlay) {//addEventListener in list
	return function showImage() {
        overlay = document.getElementById("overlay");
		overlay.style.background = "url('" + imgs2[i].src + "') no-repeat center black";
		overlay.style.backgroundSize = "contain";
		overlay.classList.add("here");
		document.body.classList.add("stuck");
	}
}