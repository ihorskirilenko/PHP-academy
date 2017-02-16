'use strickt'

console.log('Задание №4 расчет аннуитетного платежа.');

var sumOfCredit = 100000;
var percentRate = 10;
var monthQuantity = 48;

/*Описание формулы расчета (имена переменных согласно принятых в формуле обознчений):
1. Ежемесячный аннуитетный платеж:
A = K*S,
где:
A — ежемесячный аннуитетный платеж,
K — коэффициент аннуитета,
S — сумма кредита.
2. Коэффициент аннуитета:
K=i*(1+i)n/((1+i)n-1),
где:
K — коэффициент аннуитета,
i — месячная процентная ставка по кредиту (= годовая ставка/12 месяцев),
n — количество периодов, в течение которых выплачивается кредит.*/

function annuityPayment(sumOfCredit, percentRate, monthQuantity) {
	var i = percentRate / 12 / 100;
	var grade = 1 + i;
	for (var g = 1; g < monthQuantity; g++) {
		grade = grade * (1 + i);
	}
	var K = i * grade / (grade - 1);
	var A = K * sumOfCredit;
	return A.toFixed(2);
}

console.log(annuityPayment(sumOfCredit, percentRate, monthQuantity));