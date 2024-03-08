var canvas,
	ctx,
    mod = 0.005,
    a = 40, //count of spokes
    b = 256, //color
    c = .005, //scale
    d = 4, //
    e = 0.07; //

var input1, input2, input3, input4, input5, data1;


function main() {
	canvas = document.getElementById("main-canvas");
	ctx = canvas.getContext("2d");
    canvas.width = innerWidth;
    canvas.height = innerHeight;
    
    input1 = document.getElementById("input1");
    input2 = document.getElementById("input2");
    input3 = document.getElementById("input3");
    input4 = document.getElementById("input4");
    input5 = document.getElementById("input5");
    data1 = document.getElementById("timedata");
    
    input1.value = a;
    input2.value = b;
    input3.value = c;
    input4.value = d;
    input5.value = e;
    
    redo();
}

function redo() {
    
    //performance - timing
    var then = 0.0;
    if (typeof performance.now === 'function') {
        then = performance.now();
    }
    
    //draw
    checkform();
    
    var imgData = ctx.createImageData(canvas.width, canvas.height), c;
    for (var i=0;i<imgData.data.length;i+=4) {
        color = draw(Math.round(i/4)%canvas.width, Math.floor(Math.round(i/4)/canvas.width))
        imgData.data[i+0] = color;
        imgData.data[i+1] = color;
        imgData.data[i+2] = color;
        imgData.data[i+3]=255;
    }
    console.log("drew");
    ctx.putImageData(imgData,0,0);
    
    data1.innerHTML = Math.round((performance.now() - then)*1000)*.001 + "ms";
}

function checkform() {
    a = parseInt(input1.value);
    b = parseInt(input2.value);
    c = parseFloat(input3.value);
    d = parseInt(input4.value);
    e = parseFloat(input5.value);
}

function adraw(x, y) {
    //mod = mod*.99999;
	return Math.round(Math.sin(Math.pow((mod*x-canvas.width/2), 2) - Math.pow((mod*y-canvas.height/2), 2))*255);
}
function draw(x, y) {
    return Math.round(
        b*Math.abs(Math.sin(
            a*Math.atan2(
                y-canvas.height/2, x-canvas.width/2
            ) + d*Math.sin(e*Math.sqrt(
                Math.pow(
                    x-canvas.width/2, 2
                ) + Math.pow(
                    y-canvas.height/2, 2
                ))+1
            )) - c*Math.sqrt(
                Math.pow(
                    x-canvas.width/2, 2
                ) + Math.pow(
                    y-canvas.height/2, 2
                )
            )
        )
    );
}