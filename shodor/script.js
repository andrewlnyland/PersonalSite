/*var floater,
	mouse,
	give = 50;
window.onload = function () {
	floater = document.getElementById("thing");
	mouse = {
		x: window.innerWidth/2,
		y: window.innerHeight/2
	};
	moveFloater();
}
window.onmousemove = function (e) {
	mouse.x = e.clientX;
	mouse.y = e.clientY
	moveFloater();
}


function moveFloater() {
	floater.style.top = Math.round((mouse.y-window.innerHeight/2)/give+window.innerHeight/2);
	floater.style.left = Math.round((mouse.x-window.innerWidth/2)/give+window.innerWidth/2);
}

*/
var canvas,
	ctx,
	pagewidth,
	pageheight,
	scrollparticles,
	render,
	refresh,
	Mouse,
	particles,
	direction,
	lastScrollTop,
	scrollDistance,
	Spawners,
	squares;

window.onload = function () {
var canvas = document.getElementById("bgcanvas"),
	ctx = canvas.getContext("2d"),
	pagewidth = window.innerWidth,
	pageheight = window.innerHeight;
	
	canvas.width = pagewidth;
	canvas.height = pageheight;
	canvas.style.display = "block";
	
	particles = [];
	
	Mouse = {
		x: canvas.width/2,
		y: canvas.height/2,
	};
	squares = [];
	
	refresh = 1000/60;
	render = setInterval( function(){
		ctx.fillStyle = "#DDD";
		ctx.fillRect(0, 0, canvas.width, canvas.height);
		squares[squares.length] = new Square();
		for ( i=0; i<squares.length; i++ ) {
			var s = squares[i];
			ctx.fillStyle = s.c;
			ctx.fillRect(s.x - s.w/2, s.y - s.h/2, s.w, s.h);
		}
	}, refresh);
}

window.onmousedown = function (e) {
	var x = e.clientX, y = e.clientY;
	Mouse.down = true;
	Mouse.lastclickX = x;
	Mouse.lastclickY = y;
	console.log(squares[0].c);
}

window.onmouseup = function (e) {
	var x = e.clientX, y = e.clientY;
	Mouse.down = false;
}

window.onmousemove = function (e) {
	var x = e.clientX, y = e.clientY;
	Mouse.x = x;
	Mouse.y = y;
}

window.onscroll = function () {
	detectDirection();
	if (direction == "down") {
		for (i=0; i<squares.length; i++) {
			squares[i].y -= squares[i].v;
		}
	}
	if (direction == "up") {
		for (i=0; i<squares.length; i++) {
			squares[i].y += squares[i].v;
		}
	}
	//if (rnum() == 1) {
	//	particles[particles.length] = new ScrollingSpawner(rnum(window.innerWidth), window.innerHeight/2, 1, 0, direction, 10, 5000);
	//}
}


function detectDirection() {
	var st = window.pageYOffset;
	if (st > lastScrollTop) {
    	direction = "down";
    } else {
    	direction = "up";
    }
	lastScrollTop = st;
	scrollDistance = lastScrollTop - window.pageYOffset;
}

function rnum(maxnum) {
	if ( !maxnum ) { maxnum = 1; }
	return Math.round(Math.random()*maxnum);
}
//classes

function Point(x, y) {
	this.x = x;
	this.y = y;
	this.particles = [];
}

function Spawner(x, y) {
	this.x = x;
	this.y = y;
}

function ScrollingSpawner(x, y, pv, pvx, pvy, ps, pl) {
	this.x = x;
	this.y = y;
	this.particles = [];
	this.addParticle = function () {
		this.particles[this.particles.length] = new Particle(x, y, pv, pvx, pvy, ps, pl);
	}
	this.animate = function () {
		for (i=0; i<this.particles.length; i++) {
			this.particles[i].s -= .2;
			if (a.particles.l < 1000) {
				this.particles[i].vx = rnum(2) -1;
			} else {
				this.particles[i].vx = 0;
			}
			if (a.particles[i].s < 1) {
				a.particles.splice(i, 1);
			}
		}
	}
}

function Particle(x, y, v, vx, vy, s, l) {
	this.x = x;
	this.y = y;
	this.v = v; //speed
	this.vx = vx; //speed x
	this.vy = vy; //speed y
	this.s = s; //size
	this.l = l; //life
}

function Square() {
	this.x = rnum(window.innerWidth);
	this.y = rnum(window.innerHeight);
	this.w = rnum(50);
	this.h = 50-this.w;
	this.v = this.w%20;
	this.l = rnum(10);
	this.c = "rgba(" + Math.floor(Math.random()*256) + ", " + Math.floor(Math.random()*256) + ", " + Math.floor(Math.random()*256) + ", .1)";
}
