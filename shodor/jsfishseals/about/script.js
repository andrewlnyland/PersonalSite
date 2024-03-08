var canvas, canvas2, ctx, ctx2, waves = [], bubbles = [];
window.onload = function() {
	canvas = document.getElementById("bgcanvas");
	ctx = canvas.getContext("2d");
	wWidth = window.innerWidth;
	wHeight = window.innerHeight;
	canvas.width = window.innerWidth;
	canvas.height = window.innerHeight;
	//canvas2.width = window.innerWidth;
	//canvas2.height = window.innerHeight;
	for (i=0;i<175;i++) {
    	var centerX = Math.random()*canvas.width;
    	var centerY = Math.random()*canvas.height;
    	var wradius = 25+Math.random()*25;

    	waves[waves.length] = new Water(centerX, centerY, wradius, 1, "rgb(35,69,"+Math.round(102+Math.random()*25)+")");
    }
    for (i=0;i<20;i++) {
	    bubbles[bubbles.length] = new Bubble();
    }
    setInterval(function(){
		ctx.clearRect(0, 0, canvas.width, canvas.height);
		for (i=0; i<waves.length; i++) {
			var wave = waves[i];
			wave.x += wave.c*.7;
			wave.y += wave.c*.4;
			    	
			if (wave.x > canvas.width + wave.r + 10) {
				wave.x = -wave.r;
			}
			if (wave.y > canvas.height + wave.r + 10) {
				wave.y = -wave.r;
			}
			ctx.beginPath();
			ctx.arc(wave.x, wave.y, wave.r, 0, 2 * Math.PI, false);
			ctx.fillStyle=wave.color;
			ctx.fill();
		}
		for (i=0; i<bubbles.length; i++) {
			ctx.beginPath();
			ctx.arc(bubbles[i].x, bubbles[i].y, bubbles[i].r, 0, 2*Math.PI);
			ctx.lineWidth = 1;
			ctx.closePath();
			ctx.strokeStyle = "rgba(255, 255, 255, .3)";
			ctx.stroke();
			bubbles[i].x += bubbles[i].cx*bubbles[i].v;
			bubbles[i].y += bubbles[i].cy*bubbles[i].v;
		}
	}, 1000/60);
}

function Water(x, y, r, change, color) {
	this.x = x;
	this.y = y;
	this.r = r;
	this.c = change+Math.random();
	this.color = color;
}
function Bubble() {
	this.x = Math.round(Math.random()*3)*400;
	this.r = 3 + Math.round(Math.random()*10);
	this.y = window.innerHeight + Math.round(Math.random()*200) + this.r;
	this.cx = Math.random()*.25;
	this.cy = -1;
	this.v = (Math.random()*.7)+.3;
}
