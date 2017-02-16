'use strickt'

console.log('Task #5, function "Color", which shows divs with random RGB colors.');

//Generating the color
function getRandomColor() {
	var color = 'rgb(';
	for (i = 0; i < 3; i++) {
		color += Math.floor(Math.random() * 255) + ', ';
	}
	var substr = color.substring(0, color.length - 2);
	color = substr + ')';
	return color;
}

//Creating a divs using the random and colors
function color() {
	content = '<div style="display: flex; flex-wrap: wrap; justify-content: center; width: 500px; margin: 0 auto">';
	for (var i = 0; i < 10; i++) {
		content += '<div style="background: ' + getRandomColor() + '; width: 50px; height: 100px"></div>';
	}
	content += '</div>';
	return content;
}

//I connected function to html, cause without this testing is awful
var div = document.createElement('div');
div.innerHTML = color();
document.body.appendChild(div);
