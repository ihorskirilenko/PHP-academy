'use strickt'

console.log('Задание №1 со страницы 13 презентации - форма авторизации.');

var loginName = 'Igor';
var userName = prompt('Enter user name!', '');

if (userName == '' || userName == null) {
	alert('Введите имя');
}
else if (userName != loginName) {
	alert('Неверный пользователь');
}
else if (userName == loginName) {
	alert('Вход выполнен');
}