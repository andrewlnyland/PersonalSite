var canvas,
	ctx,
	shapes = [];

function init() {
	canvas = document.getElementsByTagName("canvas")[0];
	ctx = canvas.getContext("2d");
	canvas.height = innerHeight;
	canvas.width = innerWidth;
	getShapes();
	drawShapes();
}
function getShapes() {
	for (j=0; j<30; j++) {
		shapes[shapes.length] = new Shape();
		shapes[shapes.length-1].go();
	}
}
function drawShapes() {
	for (i=0; i<shapes.length; i++) {
		ctx.beginPath();
		ctx.moveTo(shapes[i].points[0].x, shapes[i].points[0].y);
		for (j=1; j<shapes[i].points.length; j++) {
			ctx.lineTo(shapes[i].points[j].x, shapes[i].points[j].y);
			ctx.moveTo(shapes[i].points[j].x, shapes[i].points[j].y);
		}
		ctx.lineTo(shapes[i].points[0].x, shapes[i].points[0].y);
		//ctx.closePath();
		ctx.fill();
		ctx.strokeStyle = shapes[i].c;
		ctx.stroke();
	}
}


//classes
function Point(x, y) {
	this.x = x;
	this.y = y;
}
function Shape() {
	this.c = "rgb(" + Math.round(Math.random()*255) + ", " + Math.round(Math.random()*255) + ", " + Math.round(Math.random()*255) + ")";
	this.points = [];
	this.go = function () {
		for (i=0; i<3; i++) {
			this.points[i] = new Point(Math.round(Math.random()*canvas.width), Math.round(Math.random()*canvas.height));
		}
	}
}