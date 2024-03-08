//scripts go here
var fHeader, slogan = [];
onload = function () {
	fHeader = document.getElementById("floating-header");
	slogan = document.getElementsByClassName("hb-right")[0].children;
	for (i=0; i<slogan.length; i++) {
		var c = 238 + 8*Math.round(Math.random()*5) -23;
		slogan[i].style.color = rgb(c, c, c);
	}
}
onscroll = function () {
	if (pageYOffset > 120) {
		fHeader.classList.add("here");
	} else {
		fHeader.classList.remove("here");
	}
	
}

function rgb(r, g, b) {
	//int to string
	return "rgb(" + r + "," + g + "," + b + ")";
}