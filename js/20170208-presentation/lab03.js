'use strickt'

console.log('Задание №3 со страницы 15 презентации - возведение 2 в восьмую степень.\nНа самом деле - произведение заданного пользователем числа в заданную ступень.');


var num = +prompt('Enter a number', '');
var grade = +prompt('Enter a grade', '');

if (!isNaN(num) && !isNaN(grade)) {
	var count = 1;
	result = num;
	while (count < grade) {
		result *= num;
		count++;
	}
	result = num + ' in ' + grade + ' grade = ' + result;
	alert(result);
}
else {
	alert('Вы ввели какую-то хрень!');
}