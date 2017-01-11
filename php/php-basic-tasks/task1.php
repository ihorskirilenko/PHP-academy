<?php
echo "<b> Пункты 1-3 </b>";
	$name = "Игорь";
	$age = -5;
	echo "<br> Меня зовут {$name}, Мне {$age} лет.";
	echo "<br> Мне {$age} лет.";
echo "<br> <b> Пункты 4-8 </b>";
	echo '<br>';
	if ($age >= 18 and $age <60) {
		echo "<br> Вам еще работать и работать";
	}
	elseif ($age > 59) {
		echo "Вам пора на пенсию";
	}
	elseif ($age >= 0 and $age <= 17) {
		echo "Вам еще рано работать";
	}
	elseif ($age < 0) {
		echo "Неизвестный возраст";
	}
	else {
		echo "Ну, можно отдохнуть";
	}
echo "<br> <b> Пункты 9-12 </b>";
	echo '<br>';
	$day = 6;
	switch ($day):
		case 1:
		case 2:
		case 3:
		case 4:
		case 5:
			echo "Это рабочий день";
			break;
		case 6:
		case 7:
			echo "Это выходной день";
			break;
		default:
			echo "Неизвестный день";
	endswitch;
echo "<br> <b> Пункт 13 </b>";
	echo '<br>';
	$s = 210;
	$t = 3;
	$km_h = $s / $t;
	$m_s = $km_h / 3.6;
	echo "Автомобиль проехал {$s} км за {$t} ч. <br> Скорость в км/ч: {$km_h}, скорость в м/с: {$m_s}";
echo "<br> <b> Пункт 14 </b>";
	$foo = 'bar';
	$bar = 10;
	echo "<br> Пункт 13: " . $$foo;
echo "<br> <b> Пункт 15 калькулятор </b>";
	echo '<br> Результат: ';
	$a = 7;
	$b = -2;
	$operator = '%';
	if ($b != 0) {
		switch ($operator):
			case '+':
				echo $a + $b;
				break;
			case '-':
				echo $a - $b;
				break;
			case '*':
				echo $a * $b;
				break;
			case '/':
				echo $a / $b;
				break;
			case '%':
				echo $a / $b - floor($a / $b);
		endswitch;
	}
	else {
		echo "Error: dividing by zero";
	}
echo "<br> <b> Пункт 16 </b>";
	echo '<br>';
	$a = 5;
	$b = 7;
	echo max($a, $b);
echo "<br> <b> Пункты 17-19 </b>";
	echo '<br>';
	$a = '78';
	$b = 78;
	if ($a == $b) {
		echo "Переменные равны";
	}
	else {
		echo "Переменные НЕ равны";
	}
	echo '<br>';
	if ($a === $b) {
		echo "Переменные эквивалентны";
	}
	else {
		echo "Переменные НЕ эквивалентны";
	}
	echo '<br> Результат проверки равенства (==) переменных: ';
	var_dump($a == $b);
echo "<br> <b> Пункты 20-22 </b> <br>";
	var_dump((bool)20, (bool)0, (bool)-20);
	echo '<br> Результатом приведения числового типа к bool будет "true" в любом случае, кроме значения "0"';
echo "<br> <b> Пункты 23-24 </b>";
	//echo
	echo "<br> Вывод с помощью echo";
	#print
	print "<br> Вывод с помощью print";
	/*printf*/
	$print_f = "<br> Вывод с помощью print_f";
	printf ($print_f);
echo "<br> <b> Пункт 25 </b>";
	define("DAYS_COUNT", 7);
	const MONTH_COUNT = 12;
	echo "<br> В неделе " . DAYS_COUNT . " дней , в году " . MONTH_COUNT . " месяцев.";
?>