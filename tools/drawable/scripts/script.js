var canvas, ctx, lines = [], mouse = {x: 0, y: 0, down: false}, colors = [], layers = [], currentColor = "black", currentLine, tmpLine;
onload = function() {
	canvas = document.body.appendChild(document.createElement("canvas"));
	var scale = window.devicePixelRatio;
	ctx = canvas.getContext("2d");
	ctx.scale(scale, scale);
	canvas.width = innerWidth;
	canvas.height = innerHeight;
	layerInit();
	//initUI();
}

onmousedown = function(e) {mouse.down = true; currentLine = new Line(); tmpLine = currentLine; mouse.x = e.clientX; mouse.y = e.clientY; colors.push(currentColor);}
onmouseup = function() {mouse.down = false; /*layers[currentLayer].append(currentLine);*/ draw();}
onresize = function() {canvas.width = innerWidth*.8;canvas.height = innerHeight; draw();}

onmousemove = function(e) {
	mouse.x = e.clientX; mouse.y = e.clientY - document.getElementsByTagName("nav")[0].offsetHeight;
	if (mouse.down) {
		//currentLine.addPoint(mouse.x, mouse.y);
		tmpLine.addPoint(mouse.x, mouse.y);
		layers[currentLayer].append(tmpLine);
		var num = layers[currentLayer].lines.length-1;
		
		layers[currentLayer].lines[num] = tmpLine;
		draw();
	}
}
function draw() {
	ctx.clearRect(0, 0, canvas.width, canvas.height);
	for (k=0; k<layers.length; k++) {
		if (layers[k].visibility) {
			var lines = layers[k].lines;
			for (j=0; j<lines.length; j++) {
				var line = lines[j];
				if (!line.points.length) {console.info("found a 0 point line"); continue;}
				ctx.beginPath();
				ctx.moveTo(line.points[0].x, line.points[0].y);
				for (i=1; i<line.points.length-1; i++) {
					ctx.lineTo(line.points[i].x, line.points[i].y);
					ctx.moveTo(line.points[i].x, line.points[i].y);
				}
				ctx.lineTo(line.points[line.points.length-1].x, line.points[line.points.length-1].y);
				ctx.strokeStyle = line.color;
				ctx.stroke();
			}
		} else {console.info("Layer " + layers[k].id + " is invisible.");}
	}
}
function myclear() {
	layers[currentLayer].myclear();
	draw();
}
function updateColor(d) {
	currentColor = d.value;
	d.style.background = currentColor;
}

function download() {
	var link = document.getElementById('link');
	link.setAttribute('download', 'drawing.png');
	link.setAttribute('href', canvas.toDataURL("image/png").replace("image/png", "image/octet-stream"));
	link.click();
	console.log("Image downloaded");
}
function layerInit() {
	layers.push(new Layer(0));
	currentLayer = 0;
	layers[0].part.classList.add("current");
	layers.push(new Layer(1)); //testing
	//for (i=0; i<layers.length; i++) {}
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
	this.color = currentColor; //default color
	this.addPoint = function(x, y) {
		this.points[this.points.length] = new Point(x, y);
	}
}
function Point(x, y) {
	this.x = x;
	this.y = y;
}
function Layer(id) {
	if (id === undefined) {
		id = layers.length;
		console.error("ID set to layers.length");
	} else {
		console.info("new layer set, ID: " + id);
	}
	this.id = id;
	this.lines = [];
	this.visibility = true;
	this.name = "Name";
	this.append = function(line) {
		if (line.points.length != 0) {
			this.lines.push(line);
		} else {
			console.info("No points found: "+this);
		}
	};
	this.myclear = function() {
		this.lines = [];
	}
	this.onclick = function() {
		currentLayer = id;
		var elem = document.getElementsByClassName("current")[0];
		elem.classList.remove("current");
		this.classList.add("current");
		console.log("currentlayer reset to " + currentLayer);
	}
	var part = document.createElement("div");
	var elem = this;
	part.classList.add("layer");
	part.innerHTML = this.id + " " + this.name;
	var button = document.createElement("input");
	button.type = "button";
	button.value = "V";
	button.onclick = function() {
		elem.visibility = elem.visibility ? false : true;
		console.log("Visibility of " + elem.id + " set to " + elem.visibility);
	}
	part.appendChild(button);
	part.onclick = this.onclick;
	this.part = part;
	document.getElementById("layer-wrap").appendChild(part);

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