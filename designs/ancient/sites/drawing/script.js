var canvas, ctx, lines = [], mouse = {x: 0, y: 0, down: false};
onload = function() {
    canvas = document.body.appendChild(document.createElement("canvas"));
    ctx = canvas.getContext("2d");
    canvas.width = innerWidth;
    canvas.height = innerHeight;
    //initUI();
}
onmousedown = function(e) {mouse.down = true; lines[lines.length] = new Line(); mouse.x = e.clientX; mouse.y = e.clientY;}
onmouseup = function() {mouse.down = false;}

onmousemove = function(e) {
    mouse.x = e.clientX; mouse.y = e.clientY;
	if (mouse.down) {
		lines[lines.length-1].addPoint(mouse.x, mouse.y);
		draw();
	}
}
function draw() {
	ctx.clearRect(0, 0, canvas.width, canvas.height);
	for (j=0; j<lines.length; j++) {
        var line = lines[j];
		ctx.beginPath();
		ctx.moveTo(line.points[0].x, line.points[0].y);
		for (i=1; i<line.points.length-1; i++) {
			ctx.lineTo(line.points[i].x, line.points[i].y);
			ctx.moveTo(line.points[i].x, line.points[i].y);
		}
		ctx.lineTo(line.points[line.points.length-1].x, line.points[line.points.length-1].y);
		ctx.stroke();
	}
}
function myclear() {
	lines = [];
	draw();
}

function initUI() {
    var controls = [new Control("Draw", this.activate)]
    var ui = document.body.appendChild(document.createElement("div"));
    ui.classList.add("controls");
    var list = ui.appendChild(document.createElement("ul"))
    for (i=0; i<controls.length; i++) {
        var elem = list.appendChild(document.createElement("li"));
        elem.innerHTML = controls[i].name;
        elem.onclick = controls[i].func;
    }
}

//classes
function Line() {
    this.points = [];
    this.addPoint = function(x, y) {
        this.points[this.points.length] = new Point(x, y);
    }
}
function Point(x, y) {
    this.x = x;
    this.y = y;
}
function Control(name, func) {
    this.name = name;
    this.func = func;
    this.active = false;
    this.run = function() {
        this.func();
    }
    this.activate = function() {
        for (i=0; i<controls.length; i++) {
            controls[i].active = false;
            console.log(controls[i].active);
        }
        this.active = true;
    }
}