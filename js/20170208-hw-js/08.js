'use strict';

console.log('Task #7, function "showOpacity".');

var opacityTestStr = 'make chars with random opacity';

function showOpacity(str) {
	var strArr = str.split('');
	var res = '';
	for (var i = 0; i < strArr.length; i++) {
		res += '<span style="opacity: ' + ((Math.random() * 10) + 1 | 0 ) / 10 + '">' + strArr[i] + '</span>';
	}
	console.log(res);
}

showOpacity(opacityTestStr);
