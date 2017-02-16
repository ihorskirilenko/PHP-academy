'use strickt'

console.log('Задание №4 со страницы 17 презентации - возведение 2 в восьмую степень.\nНа самом деле - произведение заданного пользователем числа в заданную ступень.');

var num = +prompt('Enter a number', '');
var grade = +prompt('Enter a grade', '');

if (!isNaN(num) && !isNaN(grade)) {
	result = num;
	for (var i = 1; i < grade; i++) {
		result *= num;
	}
	result = num + ' in ' + grade + ' grade = ' + result;
	alert(result);
}
else {
	alert('Вы ввели какую-то хрень!');
}