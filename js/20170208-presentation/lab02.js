'use strickt'

console.log('Задание №2 со страницы 13 презентации - сумма двух чисел.');

var a = +prompt('Enter 1-st number', '');
var b = +prompt('Enter 2-nd number', '');

if (!isNaN(a) && !isNaN(b)) {
	result = '1-st number + 2-nd number = ' + (a+b);
	alert(result);
}
else {
	alert('Вы ввели какую-то хрень!');
}