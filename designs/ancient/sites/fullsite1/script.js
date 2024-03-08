//
var posts, count, width = 375, wWidth, wHeight, columns = [];

window.onload = function () {
	posts = document.getElementsByClassName("article-wrap");
	for (i=0; i<count; i++) {
		columns[i] = 0;
	}
	define();
	organize();
}
window.onresize = function () {
	define();
	organize();
}
function define() {
	wWidth = window.innerWidth;
	wHeight = window.innerHeight;
	count = Math.floor(wWidth/width);
}
function organize() {
	if (count <= 1) {
		//return;
	}
	for (i=0; i<count; i++) {
		columns[i] = 0;
	}
	for (i=0; i<posts.length; i++) {
		var c = posts[i].style;
		c.position = "absolute";
		c.margin = 0;
		c.left = width*(i%count) + (i%count)*20 + Math.round((wWidth-count*width)/2) - 25 +"px";
		if (i>(count-1)) {
			columns[i%count] += posts[i-count].offsetHeight;
			c.top = columns[i%count] + Math.floor(i/count)*10 + "px";
		}
	}
	document.getElementsByClassName("post-inner-wrap")[0].style.height = columns[0] + posts[posts.length-1].offsetHeight + 50 + "px";
}