var headrs;
onload = function () {
	headrs = document.getElementsByTagName("h2");
	load();
}

onresize = function () {
	load();
}

function load() {
	for (i=0; i<headrs.length; i++) {
		var inner = headrs[i].innerHTML;
		headrs[i].innerHTML = "<span>"+inner+"</span>";
	}
	gridFix("mechanical");
	gridFix("electrical");
	gridFix("programming");
}

function gridFix(c) {
	//c is the class to affect - sets min-height for all elements to the height of the tallest element
	var a = document.getElementsByClassName(c);
	for (i=0; i<a.length; i++) {
		a[i].style.minHeight = "";
	}
	var b = 0;
	for (var i=0; i<Math.floor(a.length/3)*3; i++) {
		b = Math.max(b, a[i].offsetHeight);
	}
	b -= 40; //only for padding on about page
	for (var i=0; i<Math.floor(a.length/3)*3; i++) {
		a[i].style.minHeight = b + "px";
	}
}