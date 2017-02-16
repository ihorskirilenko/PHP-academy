'use strickt'

console.log('Задание №7 со страницы 33 презентации - запись в пустой массив квадраты значений исходного.');

var arr = [5, 12];
arr [99] = 7;
var result = [];

function arrayValuePower(arr) {
	for (key in arr) {
		result[key] = arr[key] * arr[key];
	}
}

arrayValuePower(arr);
console.log(arr, result);