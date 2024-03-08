var overlay;
window.onload = function () {
	overlay = document.getElementById("overlay");
}
function logoDisplay(c) {
	if (!overlay) {
		overlay = document.getElementById("overlay");
	}
	overlay.style.display = "block";
	overlay.style.background = "url('" + c.src + "') no-repeat center rgba(255, 255, 255, 1)";
	//overlay.style.backgroundSize = "50%";
	console.log(c.src + " " + overlay);
	document.getElementsByTagName("body")[0].style.overflow = "hidden";
}
function closeOverlay() {
	overlay.style.display = "none";
	document.getElementsByTagName("body")[0].style.overflow = "auto";
}
function photoDisplay(c) {
	if (!overlay) {
		overlay = document.getElementById("overlay");
	}
	overlay.style.display = "block";
	overlay.style.background = "url('" + c.src + "') no-repeat center rgba(0, 0, 0, 0.8)";
	if (window.innerWidth < 1500) {
		overlay.style.backgroundSize = "100%";
	}
	console.log(c.src + " " + overlay);
	document.getElementsByTagName("body")[0].style.overflow = "hidden";
}