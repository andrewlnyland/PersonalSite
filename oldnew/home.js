var elems = [], mouse = {x: 0, y: 0}; lastClass = "", lastMoment = 0, delay = 0;
var funcs = [
	function () {}, //about
	function () {}, //photography
	function () {}, //web design
	function () {}, //programming
	function () {
		history.pushState({part: "resume"}, "resume", "resume");
		console.log("success");
	}, //resume
	function () {}, //contact
];
onload = function() {
	elems = document.getElementsByClassName("home");
	for (i=0; i<elems.length; i++) {
		elems[i].addEventListener("mouseenter", addL(i));
		elems[i].id = "home-"+i;
	}
}
onmousemove = function (e) {
	mouse.x = e.clientX;
	mouse.y = e.clientY;
}
function addL(i) {//addEventListener in list
	return function reassign() {
		if (document.getElementsByClassName("active").length > 1) {
			console.log("more than one active element at a time");
		}
		document.getElementsByClassName("active")[0].classList.remove("active");
    document.getElementById("home-"+i).classList.add("active");
		if ((new Date()).getTime() >= lastMoment + 1100 && delay++ > 1) {
			if (document.getElementById("home").classList.length) {
				document.getElementById("home").classList.remove(lastClass);
			}
			lastClass = "go-"+Math.round(Math.random());
			document.getElementById("home").classList.add(lastClass);
			lastMoment = (new Date()).getTime();
		}
		funcs[i]();
	}
}