'use strickt'

console.log('Task #2, "showGraph" function, that shows a bar chart.');

//Generating the color
function getRandomColor() {
	var symbols = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 'A', 'B', 'C', 'D', 'E', 'F'];
	var color = '#';
	for (i = 0; i < 6; i++) {
		color += symbols[Math.floor(Math.random() * symbols.length)];
	}
	return color;
}

//Creating a bar chart using the input values and color
function showGraph() {
	var size = 50;
	content = '<div style="display: flex; flex-wrap: wrap; justify-content: space-between; align-items: flex-end; width: ' + (size + 10) * arguments.length + 'px; margin: 0 auto">';
	for (var divChild = 0; divChild < arguments.length; divChild++) {
		content += '<div style="background: ' + getRandomColor() + '; width: 50px; height: ' + arguments[divChild] * size + 'px"></div>';
	}
	content += '</div>';
	return content;
}

//I connected function to html, cause without this testing is awful
var div = document.createElement('div');
div.innerHTML = showGraph(3, 5, 7, 1, 9, 4, 8);
document.body.appendChild(div);
