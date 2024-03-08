/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////
///////*Created by Tyler French, Andrew Nyland, Vincent Xia//////
/////////////////////////March 14, 2015//////////////////////////
/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////
/*-------------------------------------------------------------*/
/*-------------------------------------------------------------*/
/*----------------------------Water----------------------------*/
/*-------------------------------------------------------------*/
/*-------------------------------------------------------------*/
/////////////////////////////////////////////////////////////////

var drawWater = function () {
 	for (i=0;i<waves.length;i++) {
    	var wave = waves[i];
    	
    	ctx.beginPath();
    	ctx.arc(wave.x, wave.y, wave.r, 0, 2 * Math.PI, false);
    	ctx.fillStyle=wave.color;
    	ctx.fill();
    }
}

var changeWater = function () {
	for (i=0;i<waves.length;i++) {
    	var wave = waves[i];
    	
    	wave.x += wave.c*.7;
    	wave.y += wave.c*.4;
    	
    	if (wave.x > canvas.width + wave.r + 10) {
    		wave.x = -wave.r;
    	}
    	if (wave.y > canvas.height + wave.r + 10) {
    		wave.y = -wave.r;
    	}
    }
}

function createWater() {
	for (i=0;i<175;i++) {
    	var centerX = Math.random()*canvas.width;
    	var centerY = Math.random()*canvas.height;
    	var wradius = 25+Math.random()*25;

    	waves[waves.length] = new Water(centerX, centerY, wradius, 1, "rgb(35,69,"+Math.round(102+Math.random()*25)+")");
    }
}
function Water(x, y, r, change, color) {
	this.x = x;
	this.y = y;
	this.r = r;
	this.c = change+Math.random();
	this.color = color;
}

/////////////////////////////////////////////////////////////////
/*-------------------------------------------------------------*/
/*-------------------------------------------------------------*/
/*----------------------------Algae----------------------------*/
/*-------------------------------------------------------------*/
/*-------------------------------------------------------------*/
/////////////////////////////////////////////////////////////////

var drawAlgae = function () {
 	for (i=0;i<algae.length;i++) {
    	var leaf = algae[i];
    	ctx.beginPath();
    	ctx.arc(leaf.x, leaf.y, leaf.r, 0, 2 * Math.PI, false);
    	ctx.fillStyle=leaf.color;
    	ctx.fill();
    	ctx.lineWidth=leaf.strokea;
    	ctx.closePath();
    	ctx.strokeStyle=leaf.sc;
    	ctx.stroke();	
	}
}


var changeAlgae = function () {
	for (i=0;i<algae.length;i++) {
    	var leaf = algae[i];
    	if (leaf.count-- > 0) {
    		leaf.x += leaf.c*.1*Math.random();
    		leaf.y += leaf.c*.1*Math.random();	
    	} else {
    		leaf.count = Math.round(400+Math.random()*10);
    		leaf.c *= -1;
    	}
    	
    }
}

function createAlgae() {
	for (i=0;i<100;i++) {
    	var centerX = Math.round(Math.random()*(Math.random()*(-50)+300)+(.5+Math.random()*.05)*canvas.width);
    	var centerY = Math.round(Math.random()*(Math.random()*(-50)+150)+(.25+Math.random()*.05)*canvas.height);
    	var alradius = Math.round(3+Math.random()*10);
    	var strokewidth = 5+Math.round(5*Math.random());

    	algae[algae.length] = new Algae(centerX, centerY, alradius, 1, "rgb(0,"+Math.round(150+Math.random()*25)+",0)",strokewidth,"rgb(0,"+Math.round(130+Math.random()*25)+",0)" );
    }
}
function Algae(x, y, r, change, color, strokea, sc) {
	this.x = x;
	this.y = y;
	this.r = r;
	this.count = Math.round(Math.random()*400+Math.random()*10);
	this.c = Math.random()*2-1;
	this.color = color;
	this.strokea = strokea;
	this.sc = sc;
}

/////////////////////////////////////////////////////////////////
/*-------------------------------------------------------------*/
/*-------------------------------------------------------------*/
/*----------------------------Fish-----------------------------*/
/*-------------------------------------------------------------*/
/*-------------------------------------------------------------*/
/////////////////////////////////////////////////////////////////


function drawFish() {
	for (i=0; i<fish.length; i++) {
		var pes = fish[i];
		if (pes.tagged) {
    		pes.beaconcolor = "rgba(255, 60, 60," + (1-((pes.beaconradius*4)/256)) + ")";
	    	if (++pes.beaconradius > 63) {
		    	pes.beaconradius = 0;
	    	};
    	}
		/*if (pes.target) {
			ctx.beginPath();
			ctx.moveTo(pes.x, pes.y);
			ctx.lineTo(pes.target.x, pes.target.y);
			ctx.lineWidth = 1;
			ctx.closePath();
			ctx.strokeStyle = "#4545FF";
			ctx.stroke();
		}*/
		if (pes.tagged) {
			ctx.beginPath();
			ctx.arc(pes.x, pes.y, pes.beaconradius, 0, 2*Math.PI, false);
			ctx.closePath();
			ctx.lineWidth = 2;
			ctx.strokeStyle = pes.beaconcolor;
			ctx.stroke();
		}
		
		//Left Fin
		ctx.beginPath();
		ctx.moveTo(pes.x, pes.y);
		ctx.lineTo(pes.x+((pes.size*.15)*Math.cos((Math.PI*.25)+pes.angle)), pes.y+((pes.size*.15)*Math.sin((Math.PI*.25)+pes.angle)));
		ctx.lineTo(pes.x+((pes.size*.25)*Math.cos((Math.PI*.66)+pes.angle)), pes.y+((pes.size*.25)*Math.sin((Math.PI*.66)+pes.angle)));
		//back to beginning
		ctx.lineTo(pes.x, pes.y);
		ctx.closePath();
		//fill
		ctx.fillStyle = "#000011";
		ctx.fill();
		
		//Right Fin
		ctx.beginPath();
		ctx.moveTo(pes.x, pes.y);
		ctx.lineTo(pes.x+((pes.size*.15)*Math.cos((-Math.PI*.25)+pes.angle)), pes.y+((pes.size*.15)*Math.sin((-Math.PI*.25)+pes.angle)));
		ctx.lineTo(pes.x+((pes.size*.25)*Math.cos((-Math.PI*.66)+pes.angle)), pes.y+((pes.size*.25)*Math.sin((-Math.PI*.66)+pes.angle)));
		//back to beginning
		ctx.lineTo(pes.x, pes.y);
		ctx.closePath();
		//fill
		ctx.fillStyle = "#000011";
		ctx.fill();
		
		/*
		//Tail
		ctx.beginPath();
		ctx.lineTo(pes.x+((pes.size*.45)*Math.cos((Math.PI)+pes.angle)), pes.y+((pes.size*.45)*Math.sin((Math.PI)+pes.angle)));
		ctx.lineTo(pes.x+((pes.size*.6)*Math.cos((.917*Math.PI)+pes.angle)), pes.y+((pes.size*.6)*Math.sin((.917*Math.PI)+pes.angle)));
		ctx.lineTo(pes.x+((pes.size*.55)*Math.cos((Math.PI)+pes.angle)), pes.y+((pes.size*.55)*Math.sin((Math.PI)+pes.angle)));
		ctx.lineTo(pes.x+((pes.size*.6)*Math.cos((1.083*Math.PI)+pes.angle)), pes.y+((pes.size*.6)*Math.sin((1.083*Math.PI)+pes.angle)));
		//back to beginning
		ctx.lineTo(pes.x+((pes.size*.45)*Math.cos((Math.PI)+pes.angle)), pes.y+((pes.size*.45)*Math.sin((Math.PI)+pes.angle)));
		ctx.closePath();
		//fill
		ctx.fillStyle = "#000022";
		ctx.fill();
		*/
		
		//Body
		ctx.beginPath();
		ctx.moveTo(pes.x+((pes.size*.2)*Math.cos((Math.PI*.25)+pes.angle)), pes.y+((pes.size*.2)*Math.sin((Math.PI*.25)+pes.angle)));
		ctx.lineTo(pes.x+((pes.size*.55)*Math.cos((Math.PI-.04)+pes.angle)), pes.y+((pes.size*.55)*Math.sin((Math.PI-.04)+pes.angle)));
		ctx.lineTo(pes.x+((pes.size*.55)*Math.cos((Math.PI+.04)+pes.angle)), pes.y+((pes.size*.55)*Math.sin((Math.PI+.04)+pes.angle)));
		ctx.lineTo(pes.x+((pes.size*.2)*Math.cos((-Math.PI*.25)+pes.angle)), pes.y+((pes.size*.2)*Math.sin((-Math.PI*.25)+pes.angle)));
		//back to beginning
		ctx.lineTo(pes.x+((pes.size*.2)*Math.cos((Math.PI*.25)+pes.angle)), pes.y+((pes.size*.2)*Math.sin((Math.PI*.25)+pes.angle)));
		ctx.closePath();
		//fill
		ctx.fillStyle = "#000033";
		ctx.fill();
		
		/*
		//Square
		ctx.beginPath();
		ctx.moveTo(pes.x+((pes.size*.5)*Math.cos((Math.PI)+pes.angle)), pes.y+((pes.size*.5)*Math.sin((Math.PI)+pes.angle)));
		ctx.lineTo(pes.x+((pes.size*.7)*Math.cos((4*Math.PI/6)+pes.angle)), pes.y+((pes.size*.7)*Math.sin((4.5*Math.PI/6)+pes.angle)));
		ctx.lineTo(pes.x+((pes.size*.6)*Math.cos((Math.PI)+pes.angle)), pes.y+((pes.size*.6)*Math.sin((Math.PI)+pes.angle)));
		ctx.lineTo(pes.x+((pes.size*.7)*Math.cos((8*Math.PI/6)+pes.angle)), pes.y+((pes.size*.7)*Math.sin((7.5*Math.PI/6)+pes.angle)));
		//back to beginning
		ctx.lineTo(pes.x+((pes.size*.5)*Math.cos((Math.PI)+pes.angle)), pes.y+((pes.size*.5)*Math.sin((Math.PI)+pes.angle)));
		ctx.closePath();
		//fill
		ctx.fillStyle = "#000000";
		ctx.fill();
		*/
		
		//Circular Head
		ctx.beginPath();
		ctx.arc(pes.x+((pes.size*.1414)*Math.cos(0+pes.angle)), pes.y+((pes.size*.1414)*Math.sin(0+pes.angle)), .1414*pes.size, 0, 2*Math.PI);
		//fill
		ctx.closePath();
		ctx.fillStyle = "#000044";
		ctx.fill();
	}
}

function d(x,y) {
	var distance = Math.sqrt(Math.pow(x,2)+Math.pow(y,2));
	return(distance);
}

/////////////////////////////////////////////////////////////////
/*-------------------------------------------------------------*/
/*-------------------------------------------------------------*/
/*----------------------------Seals----------------------------*/
/*-------------------------------------------------------------*/
/*-------------------------------------------------------------*/
/////////////////////////////////////////////////////////////////

function drawSeals() {
	for (i=0; i<seals.length; i++) {
		var seal = seals[i];
		/*if (seal.target) {
			ctx.beginPath();
			ctx.moveTo(seal.x, seal.y);
			ctx.lineTo(seal.target.x, seal.target.y);
			ctx.closePath();
			ctx.strokeStyle = "red";
			ctx.stroke();
		}*/
		
		//Right Fin
		ctx.beginPath();
		ctx.moveTo(seal.x, seal.y);
		ctx.lineTo(seal.x+((seal.size*.3)*Math.cos((Math.PI*.75)+seal.angle)), seal.y+((seal.size*.3)*Math.sin((Math.PI*.75)+seal.angle)));
		ctx.lineTo(seal.x+((seal.size*.4)*Math.cos((Math.PI*(.833))+seal.angle)), seal.y+((seal.size*.4)*Math.sin((Math.PI*(.833))+seal.angle)));
		//back to beginning
		ctx.lineTo(seal.x, seal.y);
		ctx.closePath();
		//fill
		ctx.fillStyle = "#151515";
		ctx.fill();
		
		//Left Fin
		ctx.beginPath();
		ctx.moveTo(seal.x, seal.y);
		ctx.lineTo(seal.x+((seal.size*.3)*Math.cos((-Math.PI*.75)+seal.angle)), seal.y+((seal.size*.3)*Math.sin((-Math.PI*.75)+seal.angle)));
		ctx.lineTo(seal.x+((seal.size*.4)*Math.cos((-Math.PI*(.833))+seal.angle)), seal.y+((seal.size*.4)*Math.sin((-Math.PI*(.833))+seal.angle)));
		//back to beginning
		ctx.lineTo(seal.x, seal.y);
		ctx.closePath();
		//fill
		ctx.fillStyle = "#151515";
		ctx.fill();
		
		//Right Tail
		ctx.beginPath();
		ctx.lineTo(seal.x+((seal.size*.6)*Math.cos(Math.PI+seal.angle)), seal.y+((seal.size*.6)*Math.sin(Math.PI+seal.angle)));
		ctx.lineTo(seal.x+((seal.size*.8)*Math.cos((Math.PI*.95)+seal.angle)), seal.y+((seal.size*.8)*Math.sin((Math.PI*.95)+seal.angle)));
		ctx.lineTo(seal.x+((seal.size*.85)*Math.cos((Math.PI*.975)+seal.angle)), seal.y+((seal.size*.85)*Math.sin((Math.PI*.975)+seal.angle)));
		//back to beginning
		ctx.lineTo(seal.x+((seal.size*.6)*Math.cos(Math.PI+seal.angle)), seal.y+((seal.size*.6)*Math.sin(Math.PI+seal.angle)));
		ctx.closePath();
		//fill
		ctx.fillStyle = "#30271C";
		ctx.fill();
		
		//Left Tail
		ctx.beginPath();
		ctx.lineTo(seal.x+((seal.size*.6)*Math.cos(Math.PI+seal.angle)), seal.y+((seal.size*.6)*Math.sin(Math.PI+seal.angle)));
		ctx.lineTo(seal.x+((seal.size*.8)*Math.cos((-Math.PI*.95)+seal.angle)), seal.y+((seal.size*.8)*Math.sin((-Math.PI*.95)+seal.angle)));
		ctx.lineTo(seal.x+((seal.size*.85)*Math.cos((-Math.PI*.975)+seal.angle)), seal.y+((seal.size*.85)*Math.sin((-Math.PI*.975)+seal.angle)))
		//back to beginning
		ctx.lineTo(seal.x+((seal.size*.6)*Math.cos(Math.PI+seal.angle)), seal.y+((seal.size*.6)*Math.sin(Math.PI+seal.angle)));
		ctx.closePath();
		//fill
		ctx.fillStyle = "#30271C";
		ctx.fill();
		
		//Body
		ctx.beginPath();
		ctx.moveTo(seal.x+((seal.size*.1)*Math.cos((Math.PI*.5)+seal.angle)), seal.y+((seal.size*.1)*Math.sin((Math.PI*.5)+seal.angle)));
		ctx.lineTo(seal.x+((seal.size*.35)*Math.cos((Math.PI*.889)+seal.angle)), seal.y+((seal.size*.35)*Math.sin((Math.PI*.889)+seal.angle)));
		ctx.lineTo(seal.x+((seal.size*.85)*Math.cos(Math.PI+seal.angle)), seal.y+((seal.size*.85)*Math.sin(Math.PI+seal.angle)));
		ctx.lineTo(seal.x+((seal.size*.35)*Math.cos((-Math.PI*.889)+seal.angle)), seal.y+((seal.size*.35)*Math.sin((-Math.PI*.889)+seal.angle)));
		ctx.lineTo(seal.x+((seal.size*.1)*Math.cos((-Math.PI*.5)+seal.angle)), seal.y+((seal.size*.1)*Math.sin((-Math.PI*.5)+seal.angle)));
		//back to beginning
		ctx.moveTo(seal.x+((seal.size*.35)*Math.cos((Math.PI*.5)+seal.angle)), seal.y+((seal.size*.35)*Math.sin((Math.PI*.5)+seal.angle)));
		ctx.closePath();
		//fill
		ctx.fillStyle = "#30271C";
		ctx.fill();
		
		//Head
		ctx.beginPath();
		ctx.arc(seal.x, seal.y, .1*seal.size, 0, 2*Math.PI);
		//fill
		ctx.closePath();
		ctx.fillStyle = "#30271C";
		ctx.fill();		
	}
}

/////////////////////////////////////////////////////////////////
/*-------------------------------------------------------------*/
/*-------------------------------------------------------------*/
/*----------------------------Seals----------------------------*/
/*-------------------------------------------------------------*/
/*-------------------------------------------------------------*/
/////////////////////////////////////////////////////////////////