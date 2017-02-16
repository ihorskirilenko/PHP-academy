'use strickt'

console.log('Task #1, table with a random color and letter in the cell.');

var rows = 5;
var cols = 10;

//Generating the color
function getRandomColor() {
	var symbols = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 'A', 'B', 'C', 'D', 'E', 'F'];
	var color = '#';
	for (i = 0; i < 6; i++) {
		color += symbols[Math.floor(Math.random() * symbols.length)];
	}
	return color;
}

//Choosing a letter from array
function getRandomLetter() {
	var letters = ['А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ь', 'Ы', 'Ъ', 'Э', 'Ю', 'Я'];
	var letter = letters[Math.floor(Math.random() * letters.length)];
	return letter;
}

//Creating a table using the number of rows, cols, random letter and color
function createTable(rows, cols) {
	content = '<table style="margin: 0 auto">';
	for (var tr = 0; tr < rows; tr++) {
		content += '<tr>';
		for (var td = 0; td < cols; td++) {
			var color = getRandomColor();
			var letter = getRandomLetter();
			content = content + '<td style="background-color:' + color + '">' + letter + '</td>';
		}
		content += '</tr>';
	}
	content += '</table>';
	return content;
}

//I connected function to html, cause without this testing is awful
var div = document.createElement('div');
div.innerHTML = createTable(rows, cols);
document.body.appendChild(div);