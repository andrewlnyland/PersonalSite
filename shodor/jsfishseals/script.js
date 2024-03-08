var canvas,
	datacanvas,
	ctx, 
	ctx2, 
	time = 1, 
	fish = [],
	seals = [],
	waves = [], 
	algae = [], 
	input1, 
	input2, 
	input3, 
	timeInput, 
	output1, 
	timeoutput, 
	fishspeed=100, 
	datafish = [], 
	dataseals = [], 
	range = 100, 
	fishchance = 11, 
	sealchance = 7;
window.onload = function init() {
	canvas = document.getElementById("fishsealcanvas");
	ctx = canvas.getContext("2d");
	datacanvas = document.getElementById("datacanvas");
	ctx2 = datacanvas.getContext("2d");
	canvas.width = window.innerWidth;
	canvas.height = window.innerHeight;
	datacanvas.width = 400;
	datacanvas.height = 400;
	input1 = document.getElementById("fishcount");
	input2 = document.getElementById("sealcount");
	input3 = document.getElementById("slider");
	timeinput = document.getElementById("timeslider");
	output1 = document.getElementById("m");
	timeoutput = document.getElementById("speed");
	configure();
	createFish();
	createSeals();
	createWater();
	createAlgae();
	render();
	update();
	setInterval(function(){
		fishReconsider();
		if (Math.round(Math.random())) {
			fish[fish.length] = new Fish();
		}
		sealsReconsider()
	}, 2500);
}
function configure() {
	editFish(parseInt(input1.value));
	editSeals(parseInt(input2.value));
	fishspeed = input3.value*100;
	output1.innerHTML = Math.round((1/fishspeed)*1000)/10;
	time = Math.round((timeinput.value*timeinput.value)/500);
	timeoutput.innerHTML = (Math.round(1/(Math.sqrt(time)+1)*6000)/1000);
}
function render() {
	setInterval(function(){
		ctx.clearRect(0, 0, canvas.width, canvas.height);
		drawWater();
		drawAlgae();
		drawFish();
		drawSeals();
		drawData();
	}, 1000/30);
}
function update() {
	changeWater();
	changeAlgae();
	updateFish();
	updateSeals();
	updateData();
	if (1 != 0 ) {
		setTimeout(update, time);
	}
}
function updateData() {
	datafish[datafish.length] = fish.length;
	dataseals[dataseals.length] = seals.length;
}
function drawData() {
	ctx2.fillStyle = "white";
	ctx2.fillRect(0, 0, 400, 400);
	for (i=0; i<400; i++) {
		ctx2.fillStyle = "green";
		ctx2.fillRect(i - .5, 400 - datafish[(datafish.length-401)+i] - .5, 1, 1);
		ctx2.fillStyle = "blue";
		ctx2.fillRect(i - .5, 400 - dataseals[(dataseals.length-401)+i]-.5, 1, 1);
	}
}
function opengraph() {
	document.getElementById("datacanvas").style.display = "";
	canvas.width = window.innerWidth - 400;
	var controls = document.getElementById("controls");
	controls.style.width = "386px";
	controls.style.height = window.innerHeight - 406 + "px";
	//move algae
	for (i=0; i<algae.length; i++) {
		algae[i].x *= (window.innerWidth-400)/window.innerWidth;
	}
	//swap buttons
	document.getElementById("changeview").style.display = "none";
	document.getElementById("changeviewback").style.display = "";
}
function closegraph() {
	document.getElementById("datacanvas").style.display = "none";
	canvas.width = window.innerWidth;
	var controls = document.getElementById("controls");
	controls.style.width = "";
	controls.style.height = "";
	//move algae back
	for (i=0; i<algae.length; i++) {
		algae[i].x *= window.innerWidth/(window.innerWidth-400);
	}
	//swap buttons
	document.getElementById("changeview").style.display = "";
	document.getElementById("changeviewback").style.display = "none";
}


//Fish
function createFish() {
	for (i=0; i<100; i++) {
		fish[fish.length] = new Fish();
	}
}
function editFish(num) {
	if (num > fish.length) {
		for (i=fish.length; i<num; i++) {
			fish[i] = new Fish();
		}
	} else {
		var c = fish.length - num;
		fish.splice(num, c);
	}
}
function createSeals() {
	for (i=0; i<10; i++) {
		seals[seals.length] = new Seal();
	}
}
function editSeals(num) {
	if (num > seals.length) {
		for (i=seals.length; i<num; i++) {
			seals[i] = new Seal();
		}
	} else {
		var c = seals.length - num;
		seals.splice(num, c);
	}
}
function updateFish() {
	for (i=0; i<fish.length; i++) {
		var pes = fish[i], newangle = pes.angle;
		//decrease
		pes.health--;
		var closestfish = fish[0];
		for (j=1; j<fish.length; j++) {
			if ((d(fish[j].x - pes.x, fish[j].y - pes.y) < d(fish[j].x - closestfish.x, fish[j].y - closestfish.y))) {
				closestfish = fish[j];
			}
		}
		//reproduction
		if (d(closestfish.x - pes.x, closestfish.y - pes.y) < range && Math.random()*1000 < fishchance) {
			fish[fish.length] = new Fish();
		}
		
		//eat
		if (d(algae[Math.floor(Math.random()*algae.length)].x - pes.x, algae[Math.floor(Math.random()*algae.length)].y - pes.y) < range && pes.health < 50) {
			pes.health+=20;
		}
		
		//die
		if (pes.health < 0  && Math.random()*100 < 90) {
			fish.splice(i, 1);
		}
		
		//move
		pes.x += pes.cx * pes.v;
		pes.y += pes.cy * pes.v;
		if (pes.x > canvas.width + pes.size) {
    		pes.x = 0;
    	}
    	if (pes.y > canvas.height + pes.size) {
    		pes.y = 0;
    	}
    	if (pes.x < -pes.size) {
	    	pes.x = canvas.width + pes.size;
    	}
    	if (pes.y < -pes.size) {
	    	pes.y = canvas.height + pes.size;
    	}
    	
    	if (pes.target && pes.target.x > pes.x) {
	    	newangle = Math.atan((pes.y - pes.target.y)/(pes.x - pes.target.x));
	    	if (pes.target.x < pes.x) {
		    	newangle += Math.PI;
	    	}
    	} else if (pes.target && Math.cos(pes.target.x) == 0) {
    		if (Math.sin(pes.target.y) > 0) {
	    		pes.angle = Math.PI/2;
	    	} else {
		    	pes.angle = -Math.PI/2;
	    	}
    	}
    	
       	pes.angle = newangle;
    	if (pes.now++ > pes.goal) {
    		pes.angle = Math.round(Math.random()*Math.PI*2);
			pes.goal = Math.round(Math.random()*fishspeed);
			pes.now = 0;
    	}
    	pes.cx = Math.cos(pes.angle);
		pes.cy = Math.sin(pes.angle);
    	
	}
}
function fishReconsider() {
	for (i=0; i<fish.length; i++) {
		var closest = fish[0];
		for (j=0; j<fish.length; j++) {
			if (fish[j].tagged && (d(fish[j].x - fish[i].x, fish[j].y - fish[i].y) < d(fish[j].x - closest.x, fish[j].y - closest.y))) {
				closest = fish[j];
			}
		}
		fish[i].target = closest;
	}
}
function sealsReconsider() {
	for (i=0; i<seals.length; i++) {
		var closest = fish[0];
		for (j=0; j<fish.length; j++) {
			if (fish[j].tagged && (d(fish[j].x - seals[i].x, fish[j].y - seals[i].y) < d(fish[j].x - closest.x, fish[j].y - closest.y))) {
				return fish[j];
			}
		}
		seals[i].target = closest;
	}
}

function updateSeals() {
	for (i=0; i<seals.length; i++) {
		var seal = seals[i], newangle = seal.angle;
		seal.health--;
		var closestseal = seals[0];
		for (j=1; j<seals.length; j++) {
			if ((d(seals[j].x - seal.x, seals[j].y - seal.y) < d(seals[j].x - closestseal.x, seals[j].y - closestseal.y))) {
				closestseal = seals[j];
			}
		}
		//reproduction
		if (d(closestseal.x - seal.x, closestseal.y - seal.y) < range && Math.random()*1000 < sealchance) {
			seals[seals.length] = new Seal();
		}
		
		//eating
		var closestfish = fish[0];
		for (j=1; j<fish.length; j++) {
			if ((d(fish[j].x - seal.x, fish[j].y - seal.y) < d(fish[j].x - closestfish.x, fish[j].y - closestfish.y))) {
				closestfish = fish[j];
			}
			if (d(closestfish.x - seal.x, closestfish.y - seal.y) < range && seal.health < 6) {
				fish.splice(j, 1);
				seal.health += 15;
			}
		}
		
		
		//die
		if (seal.health < 0) {
			seals.splice(i, 1);
		}
		
		
		seal.x += seal.cx * seal.v;
		seal.y += seal.cy * seal.v;
		if (seal.x > canvas.width + seal.size) {
    		seal.x = 0;
    	}
    	if (seal.y > canvas.height + seal.size) {
    		seal.y = 0;
    	}
    	if (seal.x < -seal.size) {
	    	seal.x = canvas.width + seal.size;
    	}
    	if (seal.y < -seal.size) {
	    	seal.y = canvas.height + seal.size;
    	}
    	
    	if (seal.target && seal.target.x > seal.x) {
	    	newangle = Math.atan((seal.y - seal.target.y)/(seal.x - seal.target.x));
	    	if (seal.target.x < seal.x) {
		    	newangle += Math.PI;
	    	}
    	} else if (seal.target && Math.cos(seal.target.x) == 0) {
    		if (Math.sin(seal.target.y) > 0) {
	    		seal.angle = Math.PI/2;
	    		var closest = fish[0];
				for (j=1; j<fish.length; j++) {
					if (fish[j].tagged && (d(fish[j].x - seal.x, fish[j].y - seal.y) < d(fish[j].x - closest.x, fish[j].y - closest.y))) {
						closest = fish[j];
					}
				}
				seals[i].target = closest;
	    	} else {
		    	seal.angle = -Math.PI/2;
	    	}
    	}
    	seal.angle = newangle;
    	if (seal.now++ > seal.goal) {
    		seal.angle = Math.round(Math.random()*Math.PI*2);
			seal.goal = Math.round(Math.random()*3000);
			seal.now = 0;
    	}
		seal.cx = Math.cos(seal.angle);
		seal.cy = Math.sin(seal.angle);
	}
}


//objects
function Fish() {
	this.x = Math.round(Math.random()*canvas.width);
	this.y = Math.round(Math.random()*canvas.height);
	this.size = 10 + Math.round(Math.random()*10);
	this.angle = Math.random()*2*Math.PI;
	this.cx = Math.cos(this.angle);
	this.cy = Math.sin(this.angle);
	this.v = 1;
	if (Math.random()*10 <= 1) {
		this.tagged = true;
		this.beaconradius = Math.round(Math.random()*64);
	}
	this.beaconcolor = "rgba(255, 0, 0, 1)";
	this.health = 100;
	this.goal = Math.round(Math.random()*500);
	this.now = 0;
	this.rendergoal = Math.round(Math.random()*64);
	this.rendernow = 0;
	this.finalangle = 0;
	this.target;
}

function Seal() {
	this.x = Math.round(Math.random()*window.innerWidth);
	this.y = Math.round(Math.random()*window.innerHeight);
	this.size = 70 + Math.round(Math.random()*10);
	this.angle = Math.random()*2*Math.PI;
	this.cx = Math.cos(this.angle);
	this.cy = Math.sin(this.angle);
	this.v = 1.5;
	this.health = 100;
	this.goal = Math.round(Math.random()*3000);
	this.now = 0;
	this.rendergoal = Math.round(Math.random()*64);
	this.rendernow = 0;
	this.finalangle = 0;
	this.target;
}