'use strickt'

console.log('Задание №6 со страницы 26 презентации - создание объектов, вывод с использованием цикла.');

var book1 = {};
var book2 = {};

book1.title = 'Master & Margarita';
book1.publishedYear = '1960';
book1.year = '1924';

book2['title'] = 'War & peace';
book2['publishedYear'] = '1955';
book2['year'] = '1856';

for (key in book1) {
	console.log(key + ': ' + book1[key]);
}

for (key in book2) {
	console.log(key + ': ' + book2[key]);
}