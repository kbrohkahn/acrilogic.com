var documentHeight=$(document).height();
var documentWidth=$(document).width();

var count = documentHeight * documentWidth / 20000;
console.log(count);

var svgString ='<svg id="circuit-svg" height="'+documentHeight+'" width="'+documentWidth+'">';
var xCoords = [0, 0, 0, 0, 0, 0, 0, 0];
var yCoords = [0, 0, 0, 0, 0, 0, 0, 0];
var direction = [0, 0, 0, 0, 0, 0, 0];
var i, j, k, count;
for (i=0; i<documentHeight/100; i++) {
	
	for (j=0; j<xCoords.length; j++) {
		xCoords[j] = Math.round(Math.random() * documentWidth / 8 + documentWidth * j / 8);
		direction[j] = Math.round(Math.random() * 2) - 1;
	}

	yCoords[0] = Math.round(Math.random() * documentHeight);
	for (j=1; j<yCoords.length; j++) {
		yCoords[j] = yCoords[j-1] + direction[j-1] * (xCoords[j] - xCoords[j-1]);
	}

	count = Math.random() * 8;
	for (j=0; j<count; j++) {
		var polyline="<polyline points=' ";
		for (k=0; k<xCoords.length; k++) {
			polyline+=xCoords[k] + "," + yCoords[k] + " ";
		}
		polyline+="'/>";

		svgString+= polyline;

		for (k=0; k<xCoords.length; k++) {
			yCoords[k] += 6;
			if (k>0) {
				xCoords[k] += 6 * direction[k-1];
			}
		}
	}
}
svgString+='</svg>';
$("#circuit-background").append(svgString);