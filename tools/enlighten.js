var canvas, ctx, mouse = {x:0, y:0, down:false}, items = [];
onload = function () {
	return;
	canvas = document.createElement("canvas");
	ctx = canvas.getContext("2d");
	canvas.width = innerWidth;
	canvas.height = innerHeight;
	canvas.style.position = "absolute";
	document.body.appendChild(canvas);
}
onmousemove = function (e) {
	mouse.x = e.clientX;
	mouse.y = e.clientY;
	ctx.clearRect(0, 0, canvas.width, canvas.height);
	ctx.fillStyle = "#444";
	items.push(new Point(mouse.x, mouse.y));
	for (i=0; i<items.length; i++) {
		ctx.fillRect(items[i].x-2, items[i].y-2, 4, 4);
	}
	
}
function Point(x, y) {
	this.x = x;
	this.y = y;
}