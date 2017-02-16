'use strickt'

//It is not full complete!

console.log('Task #2, chess-desk with random values.');

var fcolor = '#edc168';
var scolor = '#be5406';

//Creating a chess-desk using the random value and colors of desk
function createChessDesk(fcolor, scolor) {
	content = '<div style="display: flex; flex-wrap: wrap; justify-content: center; width: 400px; margin: 0 auto">';
	for (var cell = 1; cell < 65; cell++) {
		



		//(cell % 8 == 1) ? color = fcolor : color = scolor;
		content += '<div style="background: ' + fcolor + '; width: 50px; height: 50px">' + cell + '</div>';
		//content += '<div style="background: ' + scolor + '; width: 50px; height: 50px">' + cell + '</div>';
	}
	content += '</div>';
	return content;
}

//I connected function to html, cause without this testing is awful
var div = document.createElement('div');
div.innerHTML = createChessDesk(fcolor, scolor);
document.body.appendChild(div);
