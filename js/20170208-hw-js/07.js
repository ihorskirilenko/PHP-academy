'use strickt'

console.log('Task #7, function "numberByWords", which shows number by words.');

function numberByWords(num) {

/****************************Variables of the script**********************************************/

	var _1 = {1: 'One', 2: 'Two', 3: 'Three', 4: 'Four', 5: 'Five', 6: 'Six', 7: 'Seven', 8: 'Eight', 9: 'Nine'};
	var _11 = {10: 'Ten', 11: 'Eleven', 12: 'Twelve', 13: 'Thirdteen', 14: 'Fourteen', 15: 'Fifteen', 16: 'Sixteen', 17: 'Seventeen', 18: 'Eighteen', 19: 'Nineteen'};
	var _10 = {2: 'Twenty', 3: 'Thirty', 4: 'Fourty', 5: 'Fifty', 6: 'Sixty', 7: 'Seventy', 8: 'Eighty', 9: 'Ninety'};
	var _over100 = {0: 'Hundred', 1: 'Thousand', 2: 'Million', 3: 'Billion', 4: 'Trillion'};
	
	var numarr = [];
	var rez = [];
	
/****************************Checking zero-value, minus-value, quadrillion-value******************/

	if (num == 0) {
		return('Zero');
	}
	else if (num > 999999999999999) {
		return('Oh, my god! It\'s over than 999\'999\'999\'999\'999!');
	}
	else if (num < 0) {
		num *= - 1;
		var mFlag = true;
	}
	
/****************************Dividing numer by 3-unit parts***************************************/

	num += '';
	if (num.length % 3 == 1) {
		num = '00' + num;
	}
	else if (num.length % 3 == 2) {
		num = '0' + num;
	}
	
	var numLen = num.length;
	do {
		numarr.unshift(num.substring((numLen - 3), numLen));
		numLen -= 3;
	} while (numLen >= 3);
	
/****************************Cycle which translates number in words*******************************/

	var b = numarr.length - 1;
	for (a = 0; a < numarr.length; a++) {
		for (var c = 0; c < 3; c++) {
			var d = numarr[a].substring(c, c + 1);
			if (d != 0) {
				switch (c) {
					case 0:
						rez.push(_1[d]);
						rez.push(_over100[0]);
						break;
					case 1:
						if (d == 1) {
							rez.push(_11[numarr[a].substring(c, c + 2)]);
							c = 3;
							break;
						}
						else {
							rez.push(_10[d]);
							break;
						}
					case 2:
						rez.push(_1[d]);
				}
			}
		}

		if (b > 0) {
			rez.push(_over100[b]);
			b--;
		}
	}

/****************************Adding minus, making a string****************************************/

	mFlag ? rez.unshift('Minus') : false;
	
	var nmbToStr = rez.join(' ');
	console.log(nmbToStr);

	}

numberByWords(8123017456789);