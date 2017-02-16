'use strickt'

console.log('Task #3, chess-desk with random values.');

/******************Creating a chess-desk using the random value and colors of desk****************/

function createChessDesk(fcolor, scolor, contents) {
	
	var rows = 8;
	var cols = 8;
	var topDiv = '<div style="display: flex; flex-wrap: wrap; justify-content: center; width: 400px; margin: 0 auto">';

	for (var r = 0; r < rows; r++) {
		var color = '';
		for (var c = 0; c < rows; c++) {
			((r + c) % 2 == 0) ? color = fcolor : color = scolor;
			topDiv += '<div style="background: ' + color + '; width: 50px; height: 50px">' + contents[r][c] + '</div>';
		}
	}
	topDiv += '</div>';
	return topDiv;
}

/******************I connected function to html, cause without this testing is awful**************/

var contents = [[0,1,2,3,4,5,6,7], [8,9,0,1,2,3,4,5], [6,7,8,9,0,1,2,3], [4,5,6,7,8,9,0,1], [2,3,4,5,6,7,8,9], [0,1,2,3,4,5,6,7], [8,9,0,1,2,3,4,5], [6,7,8,9,0,1,2,3]];
var fcolor = '#edc168';
var scolor = '#be5406';

var div = document.createElement('div');
div.innerHTML = createChessDesk(fcolor, scolor, contents);
document.body.appendChild(div);
