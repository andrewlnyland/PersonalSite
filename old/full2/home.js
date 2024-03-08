var elems = [],
	elems2 = [], //content elems
	mouse = {x: 0, y: 0},
	lastClass = "go-0", //most recent go/look class
	lastMoment = 0, //last date.time of event detection
	lastVisited = "initial", //last page visited, not implemented - like lastClass (local) but for slug, between pages is js reference of this data
	lastSelected = -1, //current active menu item
	p = [], //parallaxes
	trans = false, //transitioning, cancels event listener for now
	pt = false, //parallax transitioning
	cp = 0, //current parallax
	overlay;
var list = [{IMG: {}, img:"http://dev.andrewnyland.net/images/_MG_1502.jpg", rep:false, slug:"axis", title:"About Me", link:"/"},
			{IMG: {}, img:"http://dev.andrewnyland.net/images/_MG_2943.jpg", rep:false, slug:"photography", title:"Photography", link:"/"},
			{IMG: {}, img:"http://dev.andrewnyland.net/images/geoBG1.jpg", rep:false, slug:"webdesign", title:"Web Design", link:"/"},
			{IMG: {}, img:"", rep:false, slug:"programming", title:"Programming", link:"/"},
			{IMG: {}, img:"http://dev.andrewnyland.net/images/paperBG.jpg", rep:true, slug:"resume", title:"Resume", link:"resume"},
			{IMG: {}, img:"http://dev.andrewnyland.net/images/lineBG.jpg", rep:true, slug:"contact", title: "Web Design", link:"contact"}];
onload = function() {
	elems = document.getElementsByClassName("home");
	document.getElementById("content").addEventListener("mouseleave", function(){overlay.classList.remove(lastVisited);});
	document.getElementById("content").addEventListener("mouseenter", function(){overlay.classList.add(lastVisited = document.body.className);});
	overlay = document.getElementById("overlay");
	for (i=0; i<elems.length; i++) {
		elems[i].addEventListener("mouseenter", addL(i));
		elems[i].id = "home-"+i;
	}
	p = document.getElementsByClassName("parallax");
	var fittable = document.getElementsByClassName("fit");
	for (i=0; i<fittable.length; i++) {
		fittable[i].style.maxHeight = innerHeight-150+"px";
		fittable[i].classList.add("shrunk");
	}
	onmousemove = function (e) {
		mouse.x = e.clientX;
		mouse.y = e.clientY;
		var a = mouse.x/innerWidth,
			b = mouse.y/innerHeight,
			mult = -2;
		p[cp].style.top = -b*mult-2+"em";
		p[cp].style.bottom = (b-1)*mult-2+"em";
		p[cp].style.left = -a*mult-2+"em";
		p[cp].style.right = (a-1)*mult-2+"em";
	}
	loadParallax();
	console.log("LOADED");
}
function addL(i) {//addEventListener in list
	return function reassign() {
		var c = list[i];
		if (lastSelected == i) {return;} //yeet if moused over same element
		lastSelected = i;
		if (document.body.classList.contains("initial")) document.body.classList.remove("initial");
		document.getElementsByClassName("active")[0].classList.remove("active");
    	document.getElementById("home-"+i).classList.add("active");
    	var tmp = document.getElementsByClassName("active-content");
    	if (tmp.length && tmp[0].classList.contains("active-content")) {
    		tmp[0].classList.remove("active-content");
    	}
		document.getElementById("content-"+i).classList.add("active-content");
		var AClayer = document.getElementsByClassName("active-content")[0];
    	//loadContent();
		if ((new Date()).getTime() >= lastMoment && !trans) {
			if (document.getElementById("home").classList.length) {
				document.getElementById("home").classList.remove(lastClass);
			}
			if (lastClass != (lastClass = "go-"+Math.round(Math.random()*.6))) {
				trans = true;
				setTimeout(function(){trans=false}, 1300);
			}
			if (parseInt(lastClass.slice(-1), 10)) {AClayer.classList.add("right");} else {
				if (AClayer.classList.contains("right")) {AClayer.classList.remove("right");}
			}
			document.getElementsByTagName("h1")[0].className = "look-"+(parseInt(lastClass.slice(-1), 10)+1);
			document.getElementById("home").classList.add(lastClass);
			lastMoment = (new Date()).getTime();
			history.replaceState({part: document.body.className = c.slug}, c.title, c.link);
			swapParallax(i);
			setTitle(c.title);
			//;
		}
	}
}
function loadParallax() {
	for (i=0; i<list.length; i++) {
		var cimg = new Image();
		cimg.onload = function () {
			console.log(cimg+" has finished loading");
		}
		cimg.src = list[i].img;
		list[i].IMG = cimg;
	}
}
function setParallax(img) { //img is now index of "list"
	var str = list[img].rep ? "repeat" : "no-repeat";
	p[cp].classList.add("on");
	clearParallax(p[1-cp]);
	p[cp].style.background = "url('"+list[img].IMG.src+"') "+str+" center center";
	if (!list[img].rep) {
		p[cp].style.backgroundSize = "cover";
	}
}
function clearParallax(elem = p[cp]) {
	elem.style.background = "";
}
function swapParallax(img) {
	var old = p[cp];
	cp = 1-cp;
	if (old.classList.contains("on")) {
		old.classList.remove("on");
	}
	setParallax(img);
}
function setTitle(str = "", small = false) {
	var del = ">";
	document.title = small ? "ALN "+del+" "+str : "Andrew Nyland "+del+" "+str;
}