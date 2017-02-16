'use strickt'

console.log('Задание №5 со страницы 21 презентации - функция для возведения числа в степень.');

var a = +prompt('Enter a number', '');
var b = +prompt('Enter a grade', '');

function power(num, grade) {
	if (!isNaN(num) && !isNaN(grade)) {
		result = num;
		for (var i = 1; i < grade; i++) {
			result *= num;
		}
		result = num + ' in ' + grade + ' grade = ' + result;
	}
	else {
		result = 'Вы ввели какую-то хрень!';
	}
	return result;
}

console.log(power(a,b));